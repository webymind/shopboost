<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'name',
        'address',
        'address_landmark',
        'pin_location',
        'phone',
        'whatsapp',
        'email',
        'category',
        'hours',
        'social_links',
        'media_links',
        'payment_methods',
        'services',
        'images',
        'request_type',
        'status'
    ];
}
