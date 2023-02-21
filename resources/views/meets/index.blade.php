<x-guest-layout>
    <div class="relative flex">
        <a href="{{ route('reservations.step.one') }}"
            class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-green-600 rounded-md sm:mb-0 hover:bg-green-700 sm:w-auto">
            Get the date and make a Meet  reservation  !
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
        </a>
    </div>
    <div class="container w-full px-5 py-6 mx-auto">
        <div class="grid lg:grid-cols-4 gap-y-6">
            @foreach ($meets as $meet)
                <div class="max-w-xs mx-5 mb-2 rounded-lg shadow-lg">
                    <div class="px-6 py-4">

                        <a href="{{ route('meets.show', $meet->id) }}">
                            <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
                                Title :<h6
                            class="mb-3 text-xl font-semibold tracking-tight text-green-600 hover:text-green-400 uppercase">
                            {{ $meet->title }}</h6>
                            </div>                            </div>
                            <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
                                Description :<h6
                            class="mb-3 text-xl font-semibold tracking-tight text-green-600 hover:text-green-400 uppercase">
                            {{ $meet->description }}</h6>
                            </div> <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
                                date :<h6
                            class="mb-3 text-xl font-semibold tracking-tight text-green-600 hover:text-green-400 uppercase">
                            {{ $meet->meets_date }}</h6>
                            </div>   
                        </a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</x-guest-layout>
