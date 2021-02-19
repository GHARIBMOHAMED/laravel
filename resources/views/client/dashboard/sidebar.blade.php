@section('sidebar')
<div class="col-sm-10 col-md-7 col-lg-4">
    <div class="dashboard-widget mb-30 mb-lg-0">
        <div class="user">
            <div class="thumb-area">
                <div class="thumb">
                    <img src="{{ auth()->user()->avatar }}" alt="user">
                </div>
                <label for="profile-pic" class="profile-pic-edit"><i class="flaticon-pencil"></i></label>
                <input type="file" id="profile-pic" class="d-none">
            </div>
            <div class="content">
                <h5 class="title"><a href="#0">Percy Reed</a></h5>
                <span class="username">john@gmail.com</span>
            </div>
        </div>
        <ul class="dashboard-menu">
            <li>
                <a href="{{ url('dashboard') }}" ><i class="flaticon-dashboard"></i>Dashboard</a>
            </li>
            <li>
                <a href="{{ url('profile') }}"><i class="flaticon-settings"></i>Personal Profile </a>
            </li>
            <li>
                <a href="{{ url('mybid') }}"><i class="flaticon-auction"></i>My Bids</a>
            </li>
            <li>
                <a href="{{ url('wining') }}"><i class="flaticon-best-seller"></i>Winning Bids</a>
            </li>
            <li>
                <a href="{{ url('notification') }}"><i class="flaticon-alarm"></i>My Alerts</a>
            </li>
            <li>
                <a href="{{ url('myfavorite') }}"><i class="flaticon-star"></i>My Favorites</a>
            </li>
            <li>
                <a href="{{ url('referal') }}"><i class="flaticon-shake-hand"></i>Referrals</a>
            </li>
        </ul>
    </div>
</div>
@endsection
