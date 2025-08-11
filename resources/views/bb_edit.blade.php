@section('title', 'Правка объявления Мои объявления')

@section('main')
    <form action="{{ route('bb.update', ['bb' => $bb->id]) }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <input name="title" id="txtTitle" value="{{ old('title', $bb->title) }}">
            @error('title')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <textarea name="content">{{ old('content', $bb->content) }}</textarea>
            @error('content')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group">
            <input name="price" value="{{ old('price', $bb->price) }}" class="form-control @error('price') is-invalid" @enderror >
            @error('price')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <input type="submit" value="Save">
    </form>
@endsection
