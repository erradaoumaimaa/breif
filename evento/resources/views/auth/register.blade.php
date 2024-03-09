<x-layout class="relative">
    <div class="px-4 py-2 mx-2 flex flex-row justify-start">
        <a href="{{url('/')}}" class=" text-2xl font-medium rounded-full text-green-700 hover:bg-yellow-500 hover:text-green-700 float-right">
            <svg class="m-2 h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                <g>
                    <path d="M20 11H7.414l4.293-4.293c.39-.39.39-1.023 0-1.414s-1.023-.39-1.414 0l-6 6c-.39.39-.39 1.023 0 1.414l6 6c.195.195.45.293.707.293s.512-.098.707-.293c.39-.39.39-1.023 0-1.414L7.414 13H20c.553 0 1-.447 1-1s-.447-1-1-1z">
                    </path>
                </g>
            </svg>
        </a>
    </div>
    <main class="h-[80vh] p-16 flex flex-col gap-16">
        <h1 class="text-5xl font-extrabold text-center text-purple">Sign up as a :</h1>
        <div class="h-full flex flex-col lg:flex-row gap-16">
            <x-register.card role="organizer" />
            <x-register.card role="user" />
        </div>
    </main>

    <x-form.layout role="organizer">
        <x-form.input name="name"/>
        <x-form.input name="email" type="email"/>
        <x-form.input name="password" type="password"/>
    </x-form.layout>

    <x-form.layout role="user">
        <x-form.input name="name"/>
        <x-form.input name="email" type="email"/>
        <x-form.input name="password" type="password"/>
    </x-form.layout>

    <div id="overlay" class="absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] h-full w-full bg-black opacity-[0] z-[-50] transition-all "></div>

    @push('scripts')
        <script src="{{ asset('/js/register.js') }}"></script>
    @endpush
</x-layout>
