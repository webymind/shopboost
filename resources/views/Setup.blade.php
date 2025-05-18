<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">



<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Boost your store visibility - Setup Infos</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="/assets/img/favicon.svg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        input {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #722ed1;
        }

        .bg-blue-600 {
            background-color: #6a47ed !important;

        }

        .bg-white {
            background-image: url(/assets/img/rokect.png);
            background-repeat: no-repeat !important;
        }

        .block {
            display: block;
            font-weight: 500;
        }
    </style>
</head>

<body class="bg-gray-100">
    <!-- Hero / Breadcrumb -->
    <div class="bg-cover bg-center h-64">
        {{-- <div class="bg-black bg-opacity-50 h-full flex items-center">
            <div class="container mx-auto px-4">
                <nav class="text-white">
                    <ol class="list-reset flex">
                        <li><a href="{{ url('/') }}" class="hover:underline">Home</a></li>
                        <li><span class="mx-2">/</span></li>
                    </ol>
                </nav>
                <h1 class="text-4xl font-bold text-white mt-4">Add Your Business</h1>
            </div>
        </div> --}}
    </div>

    <!-- Full-page Modal Wizard -->
    <form id="wizardForm" enctype="multipart/form-data">
        @csrf

        <div id="wizard" class="fixed inset-0 bg-white overflow-auto">
            <div class="container mx-auto p-6">
                <div id="steps" class="space-y-8">
                    <!-- Step 1 -->
                    <div>
                        <button id="backBtn" class="bg-blue-600 text-white px-4 py-2 rounded">
                            <a href="{{ url('/') }}">Back</a>
                        </button>
                    </div>
                    <div data-step="1" class="step">
                        <h2 style="font-weight: bold" class="text-2xl font-semibold mb-4">Welcome <br class="p-2">
                            Add your store Information
                        </h2>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-black-700">Store Name (Business Name)</label>
                                <input type="text" name="name" class="w-full mt-1 p-2 border rounded"
                                    placeholder="e.g. Mille Store, Tabagie Espoire, Grace Store, Sam Snack ect " />
                            </div>
                            <div>
                                <label class="block text-black-700">Full Address</label>
                                <input type="text" name="address" class="w-full mt-1 p-2 border rounded"
                                    placeholder="Street, City, Postal Code" />
                            </div>
                            <div>
                                <label class="block text-black-700">Hint of your location</label>
                                <input type="text" name="address_landmark" class="w-full mt-1 p-2 border rounded"
                                    placeholder="e.g. Near School, Near temple. ect" />

                            </div>
                            <div>
                                <label class="block text-black-700">Pin Location</label>
                                <input type="text" name="pin_location" class="w-full mt-1 p-2 border rounded"
                                    placeholder="Whatsapp Pin Location or Coordinates" />
                            </div>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div data-step="2" class="step hidden">
                        <h2 class="text-2xl font-semibold mb-4">Contact & Category</h2>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-black-700">Phone Number</label>
                                <input type="tel" name="phone" class="w-full mt-1 p-2 border rounded"
                                    placeholder="For verification" />
                            </div>
                            <div>
                                <label class="block text-black-700">WhatsApp Number</label>
                                <input type="tel" name="whatsapp" class="w-full mt-1 p-2 border rounded"
                                    placeholder="Optional" />
                            </div>
                            <div>
                                <label class="block text-black-700">Email (If available)</label>
                                <input type="email" name="email" class="w-full mt-1 p-2 border rounded"
                                    placeholder="info@yourstore.com" />
                            </div>
                            <div>
                                <label class="block text-black-700">Business Category</label>
                                <select name="category" class="w-full mt-1 p-2 border rounded" required
                                    style="border-color: #6a47ed">
                                    <option value="" disabled selected hidden>Select Option</option>
                                    <option value="grocery">Grocery Store</option>
                                    <option value="hypermarket">Hypermarket</option>
                                    <option value="minimarket">Mini Market</option>
                                    <option value="taba-j">Taba-J</option>
                                    <option value="restaurant">Snack - Restaurant</option>
                                    <option value="pharmacy">Pharmacy</option>
                                    <option value="bakery">Bakery</option>
                                    <option value="Quincaillerie">Quincaillerie</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div data-step="3" class="step hidden">
                        <h2 class="text-2xl font-semibold mb-4">Opening Hours & Media</h2>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-black-700">Operating Hours</label>
                                <textarea name="hours" class="w-full mt-1 p-2 border rounded" rows="3"
                                    placeholder="Mon-Sat: 8:00 AM – 8:00 AM, Closed- 12:00 & Re-open 14:00PM, Sun: Closed"></textarea>
                            </div>
                            <div>
                                <label class="block text-black-700">Upload Images (*Max 10 - Use Google Browser)</label>

                                <input id="fileInput" type="file" name="images[]" multiple accept="image/*"
                                    class="w-full mt-1 block z-10 relative" />
                                <div id="previewContainer" class="flex flex-wrap gap-2 mt-2"></div>
                                {{-- <label for="fileInput" class="block">
                                    <span class="text-black-700">Upload Images (Max 10)</span>
                                    <input id="fileInput" type="file" name="images[]" multiple accept="image/*"
                                        class="w-full mt-1 block z-10 relative" />
                                </label> --}}

                            </div>
                            <div>
                                <label class="block text-black-700">Website / if any</label>
                                <input type="url" name="media_links" class="w-full mt-1 p-2 border rounded"
                                    placeholder="https://" />
                            </div>
                            <div>
                                <label class="block text-black-700">Social Media Links</label>
                                <textarea name="social_links" class="w-full mt-1 p-2 border rounded" rows="3"
                                    placeholder="Add Social Media Links or profile names"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div data-step="4" class="step hidden">
                        <h2 class="text-2xl font-semibold mb-4">Payment & Services</h2>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-black-700">Payment Methods Accepted</label>
                                <input type="text" name="payment_methods" class="w-full mt-1 p-2 border rounded"
                                    placeholder="Your store accept Cash, Juice, etc." />
                            </div>
                            <div>
                                <label class="block text-black-700">Amenities</label>
                                <input type="text" name="services" class="w-full mt-1 p-2 border rounded"
                                    placeholder="Parking area, 24/7 opens, Toilet, wheel chair accessible etc." />
                            </div>
                            <!-- TERMS CHECKBOX -->
                            <div class="flex items-start mt-4">
                                <input id="termsCheckbox" type="checkbox" class="mt-1 mr-2" />
                                <label for="termsCheckbox" class="text-black-700">
                                    I agree with the
                                    <a href="{{ url('/terms-and-conditions') }}"
                                        class="text-blue-600 hover:underline">Terms & Conditions</a>
                                    &amp;
                                    <a href="{{ url('/privacy-policy') }}"
                                        class="text-blue-600 hover:underline">Privacy Policy</a>.
                                </label>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Navigation Buttons -->
                <div class="flex justify-between mt-6">
                    <button type="button" id="prevBtn" class="bg-gray-300 text-black-700 px-4 py-2 rounded"
                        disabled>Previous</button>
                    <button type="button" id="nextBtn"
                        class="bg-blue-600 text-white px-4 py-2 rounded">Next</button>
                </div>
            </div>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>



    {{-- <script>
        // Wizard navigation
        const steps = document.querySelectorAll('.step');
        const totalSteps = steps.length;
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        let currentStep = 1;

        function showStep(step) {
            steps.forEach(s => s.classList.add('hidden'));
            document.querySelector(`[data-step='${step}']`).classList.remove('hidden');
            prevBtn.disabled = (step === 1);
            nextBtn.textContent = (step === totalSteps ? 'Submit' : 'Next');
        }

        prevBtn.addEventListener('click', () => {
            if (currentStep > 1) {
                currentStep--;
                showStep(currentStep);
            }
        });

        // override the final “Submit” action
        // $('#nextBtn').off('click').on('click', function() {
        //     if (currentStep < totalSteps) {
        //         // still in wizard
        //         currentStep++;
        //         showStep(currentStep);

        //     } else {
        //         // final step
        //         const termsAccepted = $('#termsCheckbox').is(':checked');
        //         if (!termsAccepted) {
        //             Swal.fire('HeadUp', 'You must agree to the Privacy Policy.', 'warning');
        //             return;
        //         }
        //         submitWizardForm();
        //     }
        // });


        nextBtn.addEventListener('click', () => {
            if (currentStep < totalSteps) {
                currentStep++;
                showStep(currentStep);

            } else {
                // On final step, validate checkbox
                const termsAccepted = $('#termsCheckbox').is(':checked');
                if (!termsAccepted) {
                    Swal.fire('HeadUp', 'You must agree to the Privacy Policy.', 'warning');
                    return;
                }
                // Submit logic here
                submitWizardForm();
            }
        });

        //showStep(currentStep);

        // Image upload preview & removal
        const fileInput = document.getElementById('fileInput');
        const previewContainer = document.getElementById('previewContainer');
        let selectedFiles = [];

        fileInput.addEventListener('change', (e) => {
            const files = Array.from(e.target.files);
            files.forEach(file => {
                if (selectedFiles.length < 10) selectedFiles.push(file);
            });
            updatePreview();
            syncInputFiles();
        });

        function updatePreview() {
            previewContainer.innerHTML = '';
            selectedFiles.forEach((file, idx) => {
                const reader = new FileReader();
                reader.onload = () => {
                    const wrapper = document.createElement('div');
                    wrapper.className = 'relative';
                    const img = document.createElement('img');
                    img.src = reader.result;
                    img.className = 'w-24 h-24 object-cover rounded';
                    const btn = document.createElement('button');
                    btn.innerHTML = '✕';
                    btn.className =
                        'absolute top-0 right-0 bg-red-600 text-white rounded-full w-6 h-6 flex items-center justify-center';
                    btn.addEventListener('click', () => {
                        selectedFiles.splice(idx, 1);
                        updatePreview();
                        syncInputFiles();
                    });
                    wrapper.appendChild(img);
                    wrapper.appendChild(btn);
                    previewContainer.appendChild(wrapper);
                };
                reader.readAsDataURL(file);
            });
        }

        function syncInputFiles() {
            const dataTransfer = new DataTransfer();
            selectedFiles.forEach(file => dataTransfer.items.add(file));
            fileInput.files = dataTransfer.files;
        }
    </script>


    <script>
        $(function() {


            function submitWizardForm() {
                const formEl = $('#wizardForm')[0];
                const phone = $('input[name="phone"]').val().trim();
                const category = $('select[name="category"]').val();
                if (!phone || !category) {
                    return Swal.fire('Missing data', 'Please enter your phone number and choose a category.',
                        'warning');
                }
                const data = new FormData(formEl);

                $.ajax({
                    url: '{{ route('stores.store') }}',
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: data,
                    processData: false,
                    contentType: false,
                    success(res) {
                        Swal.fire('Registered!', 'Your store has been saved.', 'success');
                        // .then(() => window.location.href = '/');
                    },
                    error(xhr) {
                        let msg = 'An error occurred.';
                        if (xhr.responseJSON && xhr.responseJSON.errors) {
                            msg = Object.values(xhr.responseJSON.errors).flat().join('<br>');
                        } else if (xhr.responseJSON && xhr.responseJSON.message) {
                            msg = xhr.responseJSON.message;
                        }
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            html: msg
                        });
                    }
                });
            }
            // function submitWizardForm() {
            //     // collect all inputs + files
            //     const form = $('#wizardForm')[0];
            //     const data = new FormData(form);

            //     $.ajax({
            //             url: '{{ route('stores.store') }}',
            //             method: 'POST',
            //             headers: {
            //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //             },
            //             data: data,
            //             processData: false,
            //             contentType: false,
            //         })
            //         .done(function(res) {
            //             Swal.fire({
            //                 icon: 'success',
            //                 title: 'Confirmed!',
            //                 text: res.message || 'Your Store info has been saved.'
            //             }).then(() => {
            //                 window.location.href = '/'; // or wherever
            //             });
            //         })
            //         .fail(function(xhr) {
            //             let msg = 'An error occurred.';
            //             if (xhr.responseJSON && xhr.responseJSON.errors) {
            //                 msg = Object.values(xhr.responseJSON.errors)
            //                     .flat()
            //                     .join('<br>');
            //             } else if (xhr.responseJSON && xhr.responseJSON.message) {
            //                 msg = xhr.responseJSON.message;
            //             }
            //             Swal.fire({
            //                 icon: 'error',
            //                 title: 'Error',
            //                 html: msg
            //             });
            //         });
            // }
        });
    </script> --}}


    <script>
        $(document).ready(function() {
            // Cache selectors
            const $steps = $('.step');
            const totalSteps = $steps.length;
            const $prevBtn = $('#prevBtn');
            const $nextBtn = $('#nextBtn');
            let currentStep = 1;

            // Show the given step (1‑based)
            function showStep(step) {
                $steps.hide().eq(step - 1).show();
                $prevBtn.prop('disabled', step === 1);
                $nextBtn.text(step === totalSteps ? 'Submit' : 'Next');
            }

            // Initial display
            showStep(currentStep);

            // Prev button
            $prevBtn.click(function() {
                if (currentStep > 1) {
                    currentStep--;
                    showStep(currentStep);
                }
            });

            // Next / Submit button
            $nextBtn.click(function() {
                if (currentStep < totalSteps) {
                    currentStep++;
                    showStep(currentStep);
                } else {
                    // Final step: privacy checkbox
                    if (!$('#termsCheckbox').is(':checked')) {
                        return Swal.fire('Heads up', 'You must agree to the Privacy Policy.', 'warning');
                    }
                    // Validate phone + category before AJAX
                    const phone = $('input[name="phone"]').val().trim();
                    const category = $('select[name="category"]').val();
                    if (!phone || !category) {
                        return Swal.fire('Missing data',
                            'Please enter your phone number and choose a category.', 'warning');
                    }
                    submitWizardForm();
                }
            });

            // Image preview logic (unchanged)
            const fileInput = document.getElementById('fileInput');
            const previewContainer = document.getElementById('previewContainer');
            let selectedFiles = [];
            fileInput.addEventListener('change', e => {
                Array.from(e.target.files).forEach(file => {
                    if (selectedFiles.length < 10) selectedFiles.push(file);
                });
                updatePreview();
                syncInputFiles();
            });

            function updatePreview() {
                previewContainer.innerHTML = '';
                selectedFiles.forEach((file, idx) => {
                    const reader = new FileReader();
                    reader.onload = () => {
                        const wrapper = document.createElement('div');
                        wrapper.className = 'relative';
                        const img = document.createElement('img');
                        img.src = reader.result;
                        img.className = 'w-24 h-24 object-cover rounded';
                        const btn = document.createElement('button');
                        btn.innerHTML = '✕';
                        btn.className =
                            'absolute top-0 right-0 bg-red-600 text-white rounded-full w-6 h-6 flex items-center justify-center';
                        btn.onclick = () => {
                            selectedFiles.splice(idx, 1);
                            updatePreview();
                            syncInputFiles();
                        };
                        wrapper.append(img, btn);
                        previewContainer.append(wrapper);
                    };
                    reader.readAsDataURL(file);
                });
            }

            function syncInputFiles() {
                const dt = new DataTransfer();
                selectedFiles.forEach(f => dt.items.add(f));
                fileInput.files = dt.files;
            }

            // AJAX submission
            // function submitWizardForm() {
            //     const formEl = $('#wizardForm')[0];
            //     const data = new FormData(formEl);
            //     $.ajax({
            //             url: '{{ route('stores.store') }}',
            //             type: 'POST',
            //             headers: {
            //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //             },
            //             data: data,
            //             processData: false,
            //             contentType: false
            //         })
            //         .done(res => {
            //             Swal.fire({
            //                 icon: 'success',
            //                 title: 'Success!',
            //                 text: res.message || 'Your store info has been saved.'
            //             }).then(() => {
            //                 // window.location.href = '/payment-method';
            //                 window.location.href = `/payment-method?id=${res.id}`;
            //             });
            //         })
            //         .fail(xhr => {
            //             let msg = 'An error occurred.';
            //             if (xhr.responseJSON && xhr.responseJSON.errors) {
            //                 msg = Object.values(xhr.responseJSON.errors).flat().join('<br>');
            //             } else if (xhr.responseJSON && xhr.responseJSON.message) {
            //                 msg = xhr.responseJSON.message;
            //             }
            //             Swal.fire({
            //                 icon: 'error',
            //                 title: 'Error',
            //                 html: msg
            //             });
            //         });
            // }



            // AJAX submission
            function submitWizardForm() {
                const $btn = $('#nextBtn');
                const original = $btn.text(); // store original ("Submit")
                $btn.prop('disabled', true).text('Please wait...');

                const formEl = $('#wizardForm')[0];
                const data = new FormData(formEl);

                $.ajax({
                        url: '{{ route('stores.store') }}',
                        type: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: data,
                        processData: false,
                        contentType: false
                    })
                    .done(res => {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: res.message || 'Your store info has been saved.'
                        }).then(() => {
                            window.location.href = `/payment-method?id=${res.id}`;
                        });
                    })
                    .fail(xhr => {
                        let msg = 'An error occurred.';
                        if (xhr.responseJSON && xhr.responseJSON.errors) {
                            msg = Object.values(xhr.responseJSON.errors).flat().join('<br>');
                        } else if (xhr.responseJSON && xhr.responseJSON.message) {
                            msg = xhr.responseJSON.message;
                        }
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            html: msg
                        });
                    })
                    .always(() => {
                        // restore button
                        $btn.prop('disabled', false).text(original);
                    });
            }

        });
    </script>


</body>

</html>
