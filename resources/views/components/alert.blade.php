@if (session('info'))
    <div class="alert alert-{{$type}}">
        {{ session('info') }}
    </div>
@endif