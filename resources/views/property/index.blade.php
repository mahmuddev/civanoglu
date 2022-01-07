<x-guest-layout>

    {{-- Breadcrumb --}}
 <div class="shadow-md border-2 mt-28 border-gray-300 py-2 bg-white breadcrumb">
    <div class="container mx-auto">
        <ul class="flex items-center">
            <li><a class="text-3xl text-red-800" href="{{ route('home') }}"><i class="fa fa-home"></i></a></li>
            <li class="mx-3"><i class="fa fa-angle-right"></i></li>
            <li><a class="text-red-800" href="{{ route('home') }}">Properties</a></li>
        </ul>
    </div>
</div>

<!-- Title & Share -->
<div class=" bg-white py-8">
    <div class=" container mx-auto">
        <h2 class=" text-3xl text-gray-600">Properties
            @if (request('type') == '0')
                - Land
            @elseif (request('type') == 1)
                - Apartment
            @elseif (request('type') == 2)
                - Villa
            @endif
        </h2>
    </div>
</div>
<!-- Content -->
<div class="container mx-auto my-14">
    <div class="flex justify-between mx-2">

        {{-- Left Content --}}
        <div class="w-9/12 mx-2">
            <div class="flex flex-wrap -mx-3 justify-between mt-10">
                @foreach ($latest_properties as $property)
                    @include('components.single-property-card', ['property' => $property])
                @endforeach
            </div>

            {{ $latest_properties->links() }}

        </div>
        {{-- Left Content End --}}

        {{-- Sidebar --}}
        <div class="w-3/12 ml-6 vertical-search-form mt-10">
            @include('components.property-search-form')
        </div>


    </div>

</div>

</x-guest-layout>