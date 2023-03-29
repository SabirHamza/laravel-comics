
<div class="container">
    <div class="row">
        @foreach ($DcComics as $DcComic)
        <div class="col-2">
            <img src="{{ $DcComic['thumb'] }}" alt="">
            <span>{{ $DcComic['series'] }}</span>
        </div>
        @endforeach
    </div>
</div>