<!-- @section('content')
    <h2>List of Taxpayers</h2>
    dd($taxpayers);
    <ul>
        @foreach($taxpayers as $taxpayer)
            <li>
                <a href="{{ route('taxpayer.details', ['taxpayerId' => $taxpayer->id]) }}">
                    {{ $taxpayer->name }}
                    {{ $taxpayer->phone_number }}
                    {{ $taxpayer->taxpayer_type }}
                    {{ $taxpayer->email }}
                    {{ $taxpayer->address }}
                </a>
            </li>
        @endforeach
    </ul>
    

    {{ $taxpayers->links() }}
@endsection -->
