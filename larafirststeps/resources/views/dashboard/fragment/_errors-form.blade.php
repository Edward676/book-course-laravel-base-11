@if ($errors->any())
@foreach ($errors->any() as $e)
    <div>
        {{ $e }}
    </div>
@endforeach
@endif