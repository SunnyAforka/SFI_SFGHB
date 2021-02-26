@extends('layouts.app')
    @section('content')
<div class="search-container">
    <div class="container">
        <form action="/search" method="GET">
            <div class="form-group search">
                <input id="search" class="form-control" type="search" name="search" value="{{$search}}" placeholder="Search devotion">
            </div>
        </form>
    </div>
</div>

<section class="result">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @foreach ($posts as $post)
                    <a href="/devotional/{{$post->id}}">
                        <div class="media p-1">
                            <img class="align-self-start mr-3 img-fluid" src="http://placehold.it/350x300?text=1" alt="Generic placeholder image" style="height: 80px; width: 80px">
                            <div class="media-body">
                                <h5 class="mt-0" style="color: #ddd; font-size: 12px; margin-bottom: 0">{{$post->title}}</h5>
                                <span style="color: #ddd; font-size: 12px">{{$post->publishdate}}</span>
                                <p style="color: #ddd; font-size: 10px">{{ Str::substr($post->memoryverse, 0, 70)}} </p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    {{-- Pagination --}}
    <div class="d-flex justify-content-center">
        {{ $posts->links('pagination::bootstrap-4') }}
    </div>
</section>



@endsection
