
<div class="list-group pmd-list pmd-card-list ">
    @guest
    @if (Route::has('login'))
        <a class="list-group-item list-group-item-action" href="{{ route('login') }}"><i class="ion ion-ios-unlocked-outline sidebar-ion"></i> {{ __('Login') }}</a>
    @endif

    @if (Route::has('register'))
    <a class="list-group-item list-group-item-action" href="{{ route('register') }}"><i class="ion ion-android-person sidebar-ion"></i> {{ __('Register') }}</a>
    @endif
    @else
        <a class="list-group-item list-group-item-action" href="javascript:void(0);"><i class="ion ion-ios-person-outline sidebar-ion"></i> {{ Auth::user()->name }}</a>
        <a class="list-group-item list-group-item-action" href="#live"><i class="ion ion-social-youtube-outline sidebar-ion"></i> Live</a>
        <a class="list-group-item list-group-item-action" href="#"><i class="ion ion-ios-information-outline sidebar-ion"></i> FAQ</a>
        <a class="list-group-item list-group-item-action" href="#"><i class="ion ion-ios-checkmark-outline sidebar-ion"></i> Recommendations</a>
        <a class="list-group-item list-group-item-action" href="#"><i class="ion ion-arrow-return-right sidebar-ion"></i> Feedback</a>
        <a class="list-group-item list-group-item-action" href="#"><i class="ion ion-ios-people-outline sidebar-ion"></i> About Us</a>
        <a class="list-group-item list-group-item-action" href="#"><i class="ion ion-alert-circled sidebar-ion"></i> Privacy Policy</a>
        <a class="list-group-item list-group-item-action" href="#"><i class="ion ion-arrow-left-a sidebar-ion"></i> Sign Out</a>
    @endguest
</div>
