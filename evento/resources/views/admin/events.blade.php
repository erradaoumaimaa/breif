<x-layout>

    <!-- ADD ADMIN LAYOUT HERE -->

    <!-- ADMIN EVENTS SECTION START -->
    <section class="flex flex-row flex-wrap mx-auto" style="background-color:#251048">
        @if($events->first())
        @foreach($events as $event)

                <!-- Card Event -->
                <a href="#" class="md:w-1/2 lg:w-1/3">
                    <div
                        class="w-full transition-all duration-150 flex w-full px-4 py-6 relative"
                    >

                        <div
                            class="w-full flex flex-col items-stretch min-h-full pb-4 mb-6 transition-all duration-150 bg-white rounded-lg shadow-lg"
                        >

                            <div class="md:flex-shrink-0">

                                <img
                                    src="{{ asset('storage/' . $event->image) }}"
                                    alt="image event"
                                    class="object-fill w-full rounded-lg rounded-b-none md:h-56"
                                />

                            </div>
                            <!-- Statut Tag -->
                            <div
                                class="text-xs absolute top-0 right-0 px-2 py-1 text-white mt-8 mr-8" style="background-color:#e826a0">
                                {{ $event->status ?? 'Pending' }}
                            </div>
                            <!-- End Statut Tag -->

                            <div class="flex items-center justify-between px-1 py-2 overflow-hidden">
                                <span class="text-xs font-medium  uppercase" style="color:#d2142c">
                                  {{ $event->category->name }}
                                </span>
                                <div class="flex flex-row items-center">
                                    <div
                                        class="text-xs font-medium text-gray-900 flex flex-row items-center mr-2">
                                        <!--SVG date-->
                                        <svg class=" w-4 h-4 mr-1" style="color:#e826a0"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                        </svg>

                                        <span>{{ $event->date }}</span>
                                    </div>
                                    <!--SVG Location-->
                                    <div
                                        class="text-xs font-medium text-gray-900 flex flex-row items-center mr-2"
                                    >
                                        <svg class=" w-4 h-4 mr-1" style="color:#e826a0"
                                             xmlns="http://www.w3.org/2000/svg" width="24"  height="24"   viewBox="0 0 20 20" fill="currentColor">  <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg>
                                        <span>{{ $event->location }}</span>
                                    </div>

                                    <div
                                        class="text-xs font-medium text-gray-900 flex flex-row items-center mr-2">
                                        <!--SVG Price-->
                                        <svg class="w-4 h-4 mr-1" style="color:#e826a0 "
                                             xmlns="http://www.w3.org/2000/svg" width="24"  height="24"   viewBox="0 0 24 24"  stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="12" cy="12" r="9" />  <path d="M14.8 9a2 2 0 0 0 -1.8 -1h-2a2 2 0 0 0 0 4h2a2 2 0 0 1 0 4h-2a2 2 0 0 1 -1.8 -1" />  <path d="M12 6v2m0 8v2" /></svg>

                                        <span>{{ $event->prix }}</span>
                                    </div>

                                </div>
                            </div>
                            <hr class="border-purple-500" />
                            <div class="flex flex-wrap items-center justify-center flex-1 px-4 py-1 text-center">
                                <h2 class="text-2xl font-bold tracking-normal" style="color:#251048">
                                    {{ $event->title }}
                                </h2>
                            </div>

                            <hr class="border-purple-500" />
                            <p
                                class="flex flex-row flex-wrap w-full px-4 py-2 overflow-hidden text-sm text-justify text-black"
                            >
                                {{ $event->description }}
                            </p>
                            <hr class="border-purple-500" />
                            <section class="px-4 py-2 mt-4">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center flex-1">
                                        <img
                                            class="object-cover h-10 rounded-full"
                                            src="{{ asset('storage/' . $event->user->image_url) }}"
                                            alt="Avatar"
                                        />
                                        <div class="flex flex-col mx-2">
                                            <p href="" class="font-semibold text-gray-900 ">
                                                {{ $event->user->name }}
                                            </p>
                                            <span class="mx-1 text-xs text-gray-900">{{ $event->created_at }}</span>
                                        </div>
                                    </div>

                                    <div class="relative z-40 flex items-center gap-2">

                                        @if($event->status != 'approved')
                                        <!--Accept-->
                                        <form action="{{ route('event.approve', $event->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')

                                            <button type="submit">
                                                <svg class="w-8 h-8" style="color:#19a50e"
                                                     xmlns="http://www.w3.org/2000/svg" width="24"  height="24"   viewBox="0 0 20 20" fill="currentColor">  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                            </button>
                                        </form>
                                        @endif

                                        @if($event->status != 'rejected')
                                        <!--Refuse-->
                                        <form action="{{ route('event.reject', $event->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')

                                            <button type="submit">
                                                <svg class=" w-8 h-8 mr-2" style="color:#d2142c"
                                                     xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 20 20" fill="currentColor"> <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/></svg>
                                            </button>
                                        </form>
                                        @endif
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </a>
                <!--End Card-->

        @endforeach
        @else
            <p class="text-white p-4">No data available.</p>
        @endif
    </section>
    <!-- ADMIN EVENTS SECTION END -->
</x-layout>
