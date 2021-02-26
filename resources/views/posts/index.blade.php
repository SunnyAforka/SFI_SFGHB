@extends('layouts.app')

@section('content')
           
           @include('snippets.notification')

           @include('snippets.today')

        <div class="container" style="margin-top: 25px;">
            <div style="padding: 0 0 12px 0">
            <h3 style="font-size: 12px; margin-bottom: 0;">Daily Devotional</h3>
            <span style="font-size: 10px; color: #ddd; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">Searching for God's HeartBeat</span>
            </div>
            @include('snippets.devotional')
        </div>

    

@endsection
