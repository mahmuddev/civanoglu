<x-app-layout>
    <x-slot name="header">
        <div class=" flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Add New Property') }}
            </h2>

            <div class="min-w-max">
                <a href="{{ route('dashboard-properties') }}" class=" fullwidth-btn">Back</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class=" flex -mx-4 mb-6">
                        <div class=" flex-1 px-4">
                            <label class="civanoglu-label" for="name">Title</label>
                            <input class="civanoglu-input" type="text" id="name" name="name">
                            @error('name')
                                <p class="bg-red-100 text-red-500 px-2 mt-2 text-sm">{{ $message }}</p>    
                            @enderror
                        </div>
                        <div class=" flex-1 px-4">
                            <label class="civanoglu-label" for="name_tr">Title - Turkish</label>
                            <input class="civanoglu-input" type="text" id="name_tr" name="name_tr">
                            @error('name_tr')
                                <p class="bg-red-100 text-red-500 px-2 mt-2 text-sm">{{ $message }}</p>    
                            @enderror
                        </div>
                    </div>
                    <div class=" mb-6">
                        <label class="civanoglu-label" for="featured_image">Featured Image</label>
                            <input class="civanoglu-input" type="file" id="featured_image" name="featured_image">
                            @error('featured_image')
                                <p class="bg-red-100 text-red-500 px-2 mt-2 text-sm">{{ $message }}</p>    
                            @enderror
                    </div>
                    <div class=" flex -mx-4 mb-6">
                        <div class=" flex-1 px-4">
                            <label class="civanoglu-label" for="location_id">Loaction</label>
                            <select class="civanoglu-input" name="location_id" id="location_id">
                                <option value="">Select</option>
                                <option value="">Dhaka</option>
                            </select>
                            @error('location_id')
                                <p class="bg-red-100 text-red-500 px-2 mt-2 text-sm">{{ $message }}</p>    
                            @enderror
                        </div>
                        <div class=" flex-1 px-4">
                            <label class="civanoglu-label" for="price">Price</label>
                            <input class="civanoglu-input" type="number" id="price" name="price">
                            @error('price')
                                <p class="bg-red-100 text-red-500 px-2 mt-2 text-sm">{{ $message }}</p>    
                            @enderror
                        </div>
                        <div class=" flex-1 px-4">
                            <label class="civanoglu-label" for="sale">For</label>
                            <select class="civanoglu-input" name="sale" id="sale">
                                <option value="">Select</option>
                                <option value="0">Rent</option>
                                <option value="1">Sale</option>
                            </select>
                            @error('sale')
                                <p class="bg-red-100 text-red-500 px-2 mt-2 text-sm">{{ $message }}</p>    
                            @enderror
                        </div>
                        <div class=" flex-1 px-4">
                            <label class="civanoglu-label" for="type">Property Type</label>
                            <select class="civanoglu-input" name="type" id="type">
                                <option value="">Select</option>
                                <option value="0">Land</option>
                                <option value="1">Apartment</option>
                                <option value="2">Villa</option>
                            </select>
                            @error('type')
                                <p class="bg-red-100 text-red-500 px-2 mt-2 text-sm">{{ $message }}</p>    
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
