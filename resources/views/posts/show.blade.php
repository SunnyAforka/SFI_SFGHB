@extends('layouts.app')

@section('content')
        <div class="" style="margin-top: -12px">
            <div style="background-image: url('{{ url('assets/img/cafe.jpg')}}'); background-repeat: no-repeat; background-size: cover;">
                <div class="jumbotron text-center show-section" style="background-color: rgba(0,0,0,.5); padding-bottom: 1rem">
                   <div class="container">
                        <h1 class="display-4" style="visibility: hidden">Daily Devotional</h1>
                        <p class="lead">Searching for God's HeartBeat</p>
                        <div style="margin-bottom: 10px; text-align: center; font-size: 10px; color: #ddd; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif"><i class="ion ion-ios-calendar-outline" style="color: red; font-size: 16px; margin-right: 4px;"></i>Monday 14th February 2021</div>
                        <div class="counts" style="text-align: center">
                            <span style="padding-right: 20px"><i class="ion ion-ios-eye-outline"></i> {{ $post->view_count }} </span>
                            <span style="padding-right: 20px"><i class="ion ion-ios-chatboxes-outline"></i> {{ $comment_count }} </span>
                                <!-- Your share button code -->
                                <span class="fb-share-button"
                                data-href="https://www.sfiloveinaction.org/blog"
                                data-layout="button_count">
                            </span>
                        </div>
                   </div>
                   </div>
                </div>
        </div>
        <div class="container" style="margin-top: -25px">
            <div class="post-content">

                <div class="d-flex justify-content-between">
                    <div style="padding: 10px 0">
                        <h3 class="post-heading" style="font-size: 12px; margin-bottom: 6px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif"> {{$post->title}} </h3>
                        <div style="font-size: 10px; text-align: center; color: #ddd; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif"> {{$post->memoryverse}} </div>

                    </div>
                </div>
                <p style="color: #ddd; font-size: 12px; text-indent: 20px">{{$post->story}}</p>
            </div>
        </div>

        <!-- Comment Section -->

        @include('snippets.comments', $comments)

        <!--Audio play section-->
        <section class="audio-container" style="position: fixed; bottom: 61px; width: 100%; background: #033148; padding: 10px;">
            <div class="container">
                <audio id="player" src="{{ url('music/galili.mp3') }}"></audio>
                <div class="d-flex justify-content-between">
                    <div class="d-flex">
                        <div><img class="img-responsive rounded" src="{{ url('assets/img/cafe.jpg') }}" alt="" style="height: 25px; width: 30px"></div>
                        <div style="padding-left: 5px; font-size: 12px; color: #ddd"> {{$post->title}} </div>
                    </div>

                    <div id="play-pause-icon" onclick="document.getElementById('player').play()"><i class="ion ion-ios-play-outline" style="font-size: 23px; color: #ddd"></i></div>
                    <div id="play-pause-icon" onclick="document.getElementById('player').pause()"><i class="ion ion-ios-pause-outline" style="font-size: 23px; color: #ddd"></i></div>
                   <!-- <button onclick="document.getElementById('player').volume += 0.1">Vol +</button>
                    <button onclick="document.getElementById('player').volume -= 0.1">Vol -</button> -->
                </div>
            </div>
        </section>





@endsection
