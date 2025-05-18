<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Registration Wizard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <!-- Hero / Breadcrumb -->
    <div class="bg-cover bg-center h-64"
        style="background-image: url('https://source.unsplash.com/1600x900/?office,building');">
        <div class="bg-black bg-opacity-50 h-full flex items-center">
            <div class="container mx-auto px-4">
                <nav class="text-white">
                    <ol class="list-reset flex">
                        <li><a href="#" class="hover:underline">Home</a></li>
                        <li><span class="mx-2">/</span></li>
                        <li>Business Registration</li>
                    </ol>
                </nav>
                <h1 class="text-4xl font-bold text-white mt-4">Register Your Business</h1>
            </div>
        </div>
    </div>

    <!-- Full-page Modal Wizard -->
    <div id="wizard" class="fixed inset-0 bg-white overflow-auto">
        <div class="container mx-auto p-6">
            <div id="steps" class="space-y-8">
                <!-- Step 1 -->
                <div data-step="1" class="step">
                    <h2 class="text-2xl font-semibold mb-4">Basic Information</h2>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-gray-700">Business Name (Exact & Legal Name)</label>
                            <input type="text" class="w-full mt-1 p-2 border rounded"
                                placeholder="e.g. ABC Enterprises Pvt Ltd">
                        </div>
                        <div>
                            <label class="block text-gray-700">Full Address</label>
                            <input type="text" class="w-full mt-1 p-2 border rounded"
                                placeholder="Street, City, Postal Code">
                        </div>
                        <div>
                            <label class="block text-gray-700">Full Address (Including Landmarks)</label>
                            <input type="text" class="w-full mt-1 p-2 border rounded"
                                placeholder="Nearby Landmark, etc.">
                        </div>
                        <div>
                            <label class="block text-gray-700">Pin Location</label>
                            <input type="text" class="w-full mt-1 p-2 border rounded"
                                placeholder="Google Maps Pin Link or Coordinates">
                        </div>
                    </div>
                </div>
                <!-- Step 2 -->
                <div data-step="2" class="step hidden">
                    <h2 class="text-2xl font-semibold mb-4">Contact & Category</h2>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-gray-700">Phone Number</label>
                            <input type="tel" class="w-full mt-1 p-2 border rounded"
                                placeholder="For verification & customer calls">
                        </div>
                        <div>
                            <label class="block text-gray-700">WhatsApp Number</label>
                            <input type="tel" class="w-full mt-1 p-2 border rounded" placeholder="Optional">
                        </div>
                        <div>
                            <label class="block text-gray-700">Email (If available)</label>
                            <input type="email" class="w-full mt-1 p-2 border rounded" placeholder="info@example.com">
                        </div>
                        <div>
                            <label class="block text-gray-700">Business Category</label>
                            <select class="w-full mt-1 p-2 border rounded">
                                <option>Grocery Store</option>
                                <option>Supermarket</option>
                                <option>Convenience Store</option>
                                <option>Pharmacy</option>
                                <option>Restaurant</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- Step 3 -->
                <div data-step="3" class="step hidden">
                    <h2 class="text-2xl font-semibold mb-4">Operating Hours & Media</h2>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-gray-700">Operating Hours</label>
                            <textarea class="w-full mt-1 p-2 border rounded" rows="3" placeholder="Mon-Sat: 8:00 AM – 8:00 PM, Sun: Closed"></textarea>
                        </div>
                        <div>
                            <label class="block text-gray-700">Upload Images (Max 10)</label>
                            <input id="fileInput" type="file" class="w-full mt-1" multiple accept="image/*">
                            <div id="previewContainer" class="flex flex-wrap gap-2 mt-2"></div>
                        </div>
                        <div>
                            <label class="block text-gray-700">Website / Social Media Links</label>
                            <input type="url" class="w-full mt-1 p-2 border rounded" placeholder="https://">
                        </div>
                        <div>
                            <label class="block text-gray-700">Social Media Links</label>
                            <textarea class="w-full mt-1 p-2 border rounded" rows="3" placeholder="Add Social Media Links or profile names"></textarea>
                        </div>
                    </div>
                </div>
                <!-- Step 4 -->
                <div data-step="4" class="step hidden">
                    <h2 class="text-2xl font-semibold mb-4">Payment & Services</h2>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-gray-700">Payment Methods Accepted</label>
                            <input type="text" class="w-full mt-1 p-2 border rounded"
                                placeholder="Cash, MCB Juice, etc.">
                        </div>
                        <div>
                            <label class="block text-gray-700">Key Services</label>
                            <input type="text" class="w-full mt-1 p-2 border rounded"
                                placeholder="Parking area, 24/7 opens etc.">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Navigation Buttons -->
            <div class="flex justify-between mt-6">
                <button id="prevBtn" class="bg-gray-300 text-gray-700 px-4 py-2 rounded" disabled>Previous</button>
                <button id="nextBtn" class="bg-blue-600 text-white px-4 py-2 rounded">Next</button>
            </div>
        </div>
    </div>

    <script>
        // Wizard navigation
        const steps = document.querySelectorAll('.step');
        let currentStep = 1;
        const totalSteps = steps.length;
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');

        function showStep(step) {
            steps.forEach(s => s.classList.add('hidden'));
            document.querySelector(`[data-step='${step}']`).classList.remove('hidden');
            prevBtn.disabled = step === 1;
            nextBtn.textContent = step === totalSteps ? 'Submit' : 'Next';
        }
        prevBtn.addEventListener('click', () => {
            if (currentStep > 1) showStep(--currentStep);
        });
        nextBtn.addEventListener('click', () => {
            if (currentStep < totalSteps) showStep(++currentStep);
            else alert('Form submitted!');
        });
        showStep(currentStep);

        // Image upload preview & removal
        const fileInput = document.getElementById('fileInput');
        const previewContainer = document.getElementById('previewContainer');
        let selectedFiles = [];

        fileInput.addEventListener('change', (e) => {
            const files = Array.from(e.target.files);
            // Add new files but limit to 10
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
</body>

</html>
