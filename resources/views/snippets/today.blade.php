<div class="container">
    <div class="row">
        @foreach ($todayPost as $todayPost)
        <div class="col-md-4" onclick="location.href='/devotional/{{$todayPost->id}}';" style="cursor: pointer">
            <img class="img-fluid rounded" src="assets/img/cafe.jpg" alt="">
        </div>

        <div class="col-md-4 move-up-mobile" onclick="location.href='/devotional/{{$todayPost->id}}';" style="cursor: pointer">
            <div class="d-flex justify-content-between responsive-left">
                <div style="padding: 10px 0">
                    <h3 style="font-size: 12px; margin-bottom: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">{{ $todayPost->title }}</h3>
                    <span style="font-size: 10px; color: #ddd; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">{{ $todayPost->publishdate }}</span><br>
                    <span style="font-size: 10px; color: #ddd; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">{{ Str::substr($todayPost->story, 0, 150)}}... Read Devotional </span>
                </div>
                <div style="margin-top: 10px;">
                    <a href="#"><i class="ion ion-android-share-alt" style="font-size: 25px; color: red"></i></a>
                </div>
            </div>

        </div>
        @endforeach
        <div class="col-md-4">
            <div id="live" class="live-heading">
                <h3 style="font-size: 12px; margin-bottom: 0;">Live Event</h3>
            <span style="font-size: 10px; color: #ddd; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">Wednesday Prayers</span>
            </div>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item rounded" src="{{ $live->link }}" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div>

    </div>
</div>
