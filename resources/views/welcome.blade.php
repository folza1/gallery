@foreach ($data as $item)
    @if (isset($item['images']))
        @foreach ($item['images'] as $image)
            <img src="{{ $image }}">
        @endforeach
    @endif
    <p>{{ $item['title'] }}</p>
@endforeach
