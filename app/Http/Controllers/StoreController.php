<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;
use App\Mail\CashRequestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{

    public function store(Request $request)
    {
        // 1) Validate and store into $validated
        $validated = $request->validate([
            'name'             => 'required|string',
            'address'          => 'required|string',
            'address_landmark' => 'nullable|string',
            'pin_location'     => 'nullable|string',
            'phone'            => 'required|string',
            'whatsapp'         => 'nullable|string',
            'email'            => 'nullable|email',
            'category'         => 'required|string',
            'hours'            => 'nullable|string',
            'social_links'     => 'nullable',
            'media_links'      => 'nullable',
            'payment_methods'  => 'nullable',
            'services'         => 'nullable',
            'request_type'     => 'nullable|string',
            'status'           => 'nullable|string',
        ]);

        // After validation, but before creating the model:
        if (! empty($validated['social_links'])) {
            // If user entered comma‑separated links or a single value, normalize to array:
            $links = explode(',', $validated['social_links']);
            $validated['social_links'] = json_encode(array_map('trim', $links));
        }

        // Repeat for other JSON columns:
        foreach (['media_links', 'payment_methods', 'services'] as $field) {
            if (! empty($validated[$field])) {
                $arr = explode(',', $validated[$field]);
                $validated[$field] = json_encode(array_map('trim', $arr));
            }
        }

        // 2) Create the Store model instance
        $store = Store::create($validated);

        // 3) Handle image uploads (if any)
        if ($request->hasFile('images')) {
            $paths = [];
            foreach ($request->file('images') as $file) {
                $paths[] = $file->store('stores', 'public');
            }
            $store->images = json_encode($paths);
            $store->save();
        }

        // 4) Return JSON with the newly created store’s ID
        return response()->json([
            // 'message' => 'Store saved successfully',
            'id'      => $store->id,
        ]);
    }


    // public function store(Request $request)
    // {
    //     $data = $request->validate([
    //         'name'             => 'required|string',
    //         'address'          => 'required|string',
    //         'address_landmark' => 'nullable|string',
    //         'pin_location'     => 'nullable|string',
    //         'phone'    => 'required|string',
    //         'whatsapp' => 'nullable|string',
    //         'email'            => 'nullable|email',
    //         'category'         => 'required|string',
    //         'hours'            => 'nullable|string',
    //         'social_links'     => 'nullable',
    //         'media_links'      => 'nullable',
    //         'payment_methods'  => 'nullable',
    //         'services'         => 'nullable',
    //     ]);



    //     // Handle images
    //     $images = [];
    //     if ($request->hasFile('images')) {
    //         foreach ($request->file('images') as $file) {
    //             $path = $file->store('stores', 'public');
    //             $images[] = $path;
    //         }
    //     }
    //     $data['images'] = $images ? json_encode($images) : null;

    //     // Convert JSON fields
    //     foreach (['social_links', 'media_links', 'payment_methods', 'services'] as $field) {
    //         if ($data[$field] ?? false) {
    //             $data[$field] = json_encode(explode(',', $data[$field]));
    //         }
    //     }

    //     Store::create($data);

    //     return response()->json();
    // }




    public function show(Request $request)
    {
        $storeId = $request->query('id');
        $store   = Store::findOrFail($storeId);
        return view('payment', compact('store'));
    }

    public function requestCash(Store $store)
    {
        // mark the request on the store
        $store->update([
            'request_type' => 'cash',
            'status'       => 'pending_cash',
        ]);

        // send notification email
        Mail::to('webymind.mauritius@gmail.com')
            ->send(new CashRequestMail($store));

        return response()->json([
            'message' => 'Your cash collection request has been received.'
        ]);
    }
}
