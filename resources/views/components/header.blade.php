<div class="fixed top-0 w-full py-4 px-12 flex justify-between items-center z-30 sticky-header {{ request()->routeIs('home') ? '' : 'general-header' }}">
    <div class="min-w-max">
        <a href="{{ route('home') }}"><img width="100" src="/img/logo.png" alt=""></a>
    </div>
    <div class="w-full">
        <ul class="flex justify-center">
            <li><a class="inline-block p-4 text-white" href="{{ route('properties') }}?type='0'">{{ __('Land') }}</a></li>
            {{-- Php file creat example --}}
            {{-- <li><a class="inline-block p-4 text-white" href="{{ route('properties') }}?type=2">{{ __('header.menu_villa') }}</a></li> --}}
            {{-- json example --}}
            <li><a class="inline-block p-4 text-white" href="{{ route('properties') }}?type=2">{{ __('Villa') }}</a></li>
            <li><a class="inline-block p-4 text-white" href="{{ route('properties') }}?type=1">{{ __('Apartment') }}</a></li>
            <li><a class="inline-block p-4 text-white" href="{{ route('page', 'about-us') }}">{{ __('About') }}</a></li>
            <li><a class="inline-block p-4 text-white" href="{{ route('page', 'contact-us') }}">{{ __('Contact') }}</a></li>
        </ul>
    </div>
    <div class="min-w-max">
        <a href="{{ LaravelLocalization::getLocalizedURL('en') }}"><img width="30" src="/img/flag-usa.png" alt=""></a>
        <a href="{{ LaravelLocalization::getLocalizedURL('bn') }}"><img width="30" src="/img/flag-bd.png" alt=""></a>
    </div>
</div>