<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Complete Your Payment</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="/assets/img/favicon.svg">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-gray-50 flex items-center justify-center min-h-screen p-4">


    <div class="max-w-md w-full bg-white shadow-lg rounded-2xl p-6 space-y-6">
        <button class="flex-1 py-2 p-5 text-center rounded-lg bg-gray-200 text-gray-700  font-medium">
            <a href="{{ url('/') }}">Back</a>
        </button>
        <h1 class="text-2xl font-bold text-gray-800 text-center">Almost Done!</h1>
        <p class="text-gray-600 text-center">
            {{ $store->name }} Please choose how you’d like to complete your payment.
        </p>

        <!-- Payment Method Tabs -->
        <div class="flex space-x-2">
            <button id="tabJuice" class="flex-1 py-2 text-center rounded-lg bg-purple-600 text-white font-medium">
                Juice Pay
            </button>
            <button id="tabCash" class="flex-1 py-2 text-center rounded-lg bg-gray-200 text-gray-700 font-medium">
                Cash
            </button>
        </div>

        <!-- Juice Pay Form -->
        <div id="juiceForm" class="space-y-4">
            <div>
                <label class="block text-gray-700">Juice Mobile Number</label>
                <input type="tel" value="52 54 26 67"
                    class="w-full mt-1 p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-400"
                    readonly />
            </div>
            <div>
                <label class="block text-gray-700">MCB Bank Account Number</label>
                <input type="text" value="000 448 364 751"
                    class="w-full mt-1 p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-400"
                    readonly />
            </div>
            {{-- <button class="w-full bg-purple-600 text-white py-2 rounded-lg font-medium hover:bg-purple-700 transition">
                Pay with Juice
            </button> --}}
            <p class="text-sm text-black-500 text-center">
                After payment via Juice, please share your confirmation receipt with us via whatsapp on +23052542667.
            </p>
        </div>

        <!-- Cash Info (hidden by default) -->
        <div id="cashInfo" class="hidden space-y-4">
            <div class="p-4 bg-yellow-50 border-l-4 border-yellow-400 rounded-lg">
                <p class="text-yellow-800">
                    A representative will come to visit your store in person to collect cash payment.
                </p>
            </div>
            <button id="requestCashBtn"
                class="w-full bg-gray-800 text-white py-2 rounded-lg font-medium hover:bg-gray-900 transition">
                Request Cash Collection
            </button>
        </div>
    </div>

    <script>
        // Simple tab switching
        const tabJuice = document.getElementById('tabJuice');
        const tabCash = document.getElementById('tabCash');
        const juiceForm = document.getElementById('juiceForm');
        const cashInfo = document.getElementById('cashInfo');

        tabJuice.addEventListener('click', () => {
            tabJuice.classList.replace('bg-gray-200', 'bg-purple-600');
            tabJuice.classList.replace('text-gray-700', 'text-white');
            tabCash.classList.replace('bg-purple-600', 'bg-gray-200');
            tabCash.classList.replace('text-white', 'text-gray-700');
            juiceForm.classList.remove('hidden');
            cashInfo.classList.add('hidden');
        });

        tabCash.addEventListener('click', () => {
            tabCash.classList.replace('bg-gray-200', 'bg-purple-600');
            tabCash.classList.replace('text-gray-700', 'text-white');
            tabJuice.classList.replace('bg-purple-600', 'bg-gray-200');
            tabJuice.classList.replace('text-white', 'text-gray-700');
            juiceForm.classList.add('hidden');
            cashInfo.classList.remove('hidden');
        });
    </script>

    <script>
        $(function() {
            const storeId = {{ $store->id }};
            // Tab toggles
            // $('#tabJuice').click(() => {
            //     $('#juiceForm').show();
            //     $('#cashInfo').hide();
            //     $('#tabJuice').addClass('bg-purple-600 text-white')
            //         .removeClass('bg-gray-200 text-gray-700');
            //     $('#tabCash').addClass('bg-gray-200 text-gray-700')
            //         .removeClass('bg-purple-600 text-white');
            // });
            // $('#tabCash').click(() => {
            //     $('#juiceForm').hide();
            //     $('#cashInfo').show();
            //     $('#tabCash').addClass('bg-purple-600 text-white')
            //         .removeClass('bg-gray-200 text-gray-700');
            //     $('#tabJuice').addClass('bg-gray-200 text-gray-700')
            //         .removeClass('bg-purple-600 text-white');
            // });




            // Cash request AJAX
            $('#requestCashBtn').click(function() {

                // Get reference to the button
                const $btn = $(this);

                // Save original button text
                const originalText = $btn.text();

                // Set loading state
                $btn.prop('disabled', true).text('Please wait...');

                $.ajax({
                        url: `/stores/${storeId}/request-cash`,
                        type: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                    })
                    .done(res => {
                        Swal.fire('Requested!', 'We will send someone shortly.', 'success');
                    })
                    .fail(xhr => {
                        Swal.fire('Error', 'Could not send request.', 'error');
                    })

                    .always(() => {
                        // Restore button state whether request succeeds or fails
                        $btn.prop('disabled', false).text(originalText);
                    });
            });
        });
    </script>
</body>

</html>
