@extends('Admin.layouts.app')

@section('title', 'Add Service')
@section('page-title', 'Add New Service')

@section('content')
<div class="max-w-3xl mx-auto bg-white p-6 rounded-xl shadow-lg">
    <h2 class="text-2xl font-bold mb-4">Add New Service</h2>

    <form method="POST" action="{{ route('admin.services.store') }}">
        @csrf

        <!-- Service Name -->
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium">Service Name</label>
            <input type="text" name="name" id="name" class="form-control w-full mt-1" placeholder="Enter service name" required>
        </div>

        <!-- Service Description -->
        <div class="mb-4">
            <label for="description" class="block text-sm font-medium">Description</label>
            <textarea name="description" id="description" rows="3" class="form-control w-full mt-1" placeholder="Enter service description"></textarea>
        </div>

        <!-- Service Options -->
        <div class="mb-4">
            <label class="block text-sm font-medium">Service Options</label>
            <div id="options-container" class="space-y-2 mt-2">
                <div class="flex gap-2 option-row">
                    <input type="text" name="options[]" class="form-control flex-1" placeholder="Enter option (e.g. Daily, Monthly)" required>
                    <button type="button" class="btn btn-danger remove-option hidden">✕</button>
                </div>
            </div>
            <button type="button" onclick="addOption()" class="mt-2 px-4 py-2 bg-green-600 text-white rounded shadow">+ Add Option</button>
        </div>

        <!-- Submit -->
        <div class="mt-6">
            <button type="submit" class="btn btn-primary w-full py-2">Save Service</button>
        </div>
    </form>
</div>

<script>
    function addOption() {
        let container = document.getElementById("options-container");
        let div = document.createElement("div");
        div.classList.add("flex", "gap-2", "option-row", "mt-2");
        div.innerHTML = `
            <input type="text" name="options[]" class="form-control flex-1" placeholder="Enter option" required>
            <button type="button" class="btn btn-danger remove-option">✕</button>
        `;
        container.appendChild(div);

        div.querySelector(".remove-option").addEventListener("click", function() {
            div.remove();
        });
    }
</script>
@endsection
