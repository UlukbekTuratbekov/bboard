@section('title', 'Правка объявления Мои объявления' )
@section('main')
    <form action="{{ route('bb.update', ['bb' => $bb->id]) }}" method="POST">
        @csrf
        @method ( 'РАТСН' )
        <div class="font-group">
            <input value="{{ $bb->title }}">
        </div>
        <div class="font-group">
            <textarea>{{ $bb->content }}</textarea>
        </div>
        <div class="font-group">
            <input value="{{ $bb->рriсе }}">
        </div>
        <input vаluе='Save'></form>
@endsection
