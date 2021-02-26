<section class="variable slider">
    @foreach ($posts as $post)
        <div class="devotion">
            <a href="/devotional/{{$post->id}}">
                <img class="img-fluid rounded slider-img" src="{{ url('assets/img/slide1.jpg') }}">
                <div class="slider-desc">{{ $post->title }}</div>
                <span style="font-size: 10px; color: #ddd; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">{{ $post->publishdate }}</span><br>
                <span style="font-size: 10px; color: #ddd; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">Description</span>
            </a>
        </div>


    @endforeach
</section>
