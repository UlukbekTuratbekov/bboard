@section('title', 'Правка объявления Мои объявления')

@section('main')
    <form action="{{ route('bb.update', ['bb' => $bb->id]) }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <input name="title" value="{{ $bb->title }}">
        </div>

        <div class="form-group">
            <textarea name="content">{{ $bb->content }}</textarea>
        </div>

        <div class="form-group">
            <input name="price" value="{{ $bb->price }}">
        </div>

        <input type="submit" value="Save">
    </form>
@endsection
