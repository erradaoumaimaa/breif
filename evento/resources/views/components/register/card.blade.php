@props(['role'])

<div {{ $attributes->merge(['class' => 'lg:w-[50%] h-full bg-[linear-gradient(to_right_bottom,#251048,rgba(255,255,63,0.8)),url(' . asset('images/' . $role . '-register.jpg') . ')] bg-cover bg-center border-4 border-white rounded-2xl transition-all hover:scale-[102%]']) }}>
    <button onclick="showForm('{{ $role }}')" type="button" class="text-8xl text-white font-black h-full w-full">
        <p>{{ ucwords($role) }}</p>
    </button>
</div>
