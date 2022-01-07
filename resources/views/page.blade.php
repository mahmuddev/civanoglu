<x-guest-layout>
    <div class="shadow-md border-2 mt-28 border-gray-300 py-2 bg-white breadcrumb">
        <div class="container mx-auto">
            <ul class="flex items-center">
                <li><a class="text-3xl text-red-800" href=""><i class="fa fa-home"></i></a></li>
                <li class="mx-3"><i class="fa fa-angle-right"></i></li>
                <li>{{ $page->name }}</li>
            </ul>
        </div>
    </div>
</x-guest-layout>