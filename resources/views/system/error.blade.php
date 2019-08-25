@if (session()->has('error'))
    <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        @if(is_array(session()->get('error')))
            <ul>
                @foreach (session()->get('error') as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        @else
            {{ session()->get('error') }}
        @endif
    </div>
@endif
