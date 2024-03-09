@if($textarea ?? false)
    <textarea name="{{ $name }}" id="{{ $name }}" rows="4" placeholder="Type something here..." class=" p-2 border-2 border-vert rounded shadow-md w-64">{{ $value ?? old($name) }}</textarea>
@else
    <input type="{{ $type ?? 'text' }}" name="{{ $name }}" value="{{ $value ?? old($name) }}" id="{{ $name }}" placeholder="Type something here..." class=" p-2 border-2 border-vert rounded shadow-md w-64">
@endif
