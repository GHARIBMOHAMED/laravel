@extends('client.layouts.app')

@section('content')


    <!--============= Hero Section Starts Here =============-->
    <div class="hero-section style-2">
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="#0">My Account</a>
                </li>
                <li>
                    <span>My Alerts</span>
                </li>
            </ul>
        </div>
        <div class="bg_img hero-bg bottom_center" data-background="{{ asset('images/banner/hero-bg.png') }}"></div>
    </div>
    <!--============= Hero Section Ends Here =============-->


    <!--============= Dashboard Section Starts Here =============-->
    <section class="dashboard-section padding-bottom mt--240 mt-lg--440 pos-rel">
        <div class="container">
            <div class="row justify-content-center">
                @include('client.dashboard.sidebar')
                @yield('sidebar')
                <div class="col-lg-8">
                    <div class="dash-bid-item dashboard-widget mb-30">
                        <div class="header">
                            <h4 class="title mw-100">My Alerts</h4>
                        </div>
                        <ul class="button-area nav nav-tabs">
                            <li>
                                <a href="#alerts" data-toggle="tab" class="custom-button active">Alerts</a>
                            </li>
                            <li>
                                <a href="#newsletters" data-toggle="tab" class="custom-button">Newsletters</a>
                            </li>
                        </ul>
                    </div>
                    <div class="dashboard-widget tab-content">
                        <div class="alert-widget tab-pane show fade active" id="alerts">
                            <ul>
                                <li>
                                    <input type="checkbox" id="check1" checked>
                                    <label for="check1">
                                        <h6 class="title">Bid Notifications</h6>
                                        <p>Receive an email notifying you if someone else bids on an item on which you have already placed a bid.</p>
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" id="check2">
                                    <label for="check2">
                                        <h6 class="title">Live Auction Reminder</h6>
                                        <p>Get a reminder that a live auction you've registered for is about
                                            to begin.</p>
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" id="check3" checked>
                                    <label for="check3">
                                        <h6 class="title">Saved Items Going Live</h6>
                                        <p>Get a reminder that items you've saved are going live in an auction.</p>
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" id="check4">
                                    <label for="check4">
                                        <h6 class="title">Bids Ending Soon</h6>
                                        <p>Get a reminder when items you've bid on are going live in the next
                                            couple days</p>
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" id="check5" checked>
                                    <label for="check5">
                                        <h6 class="title">Rate Your Experience</h6>
                                        <p>Receive an email notifying you if someone else bids on an item on which you have already placed a bid.</p>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="alert-widget tab-pane show fade" id="newsletters">
                            <ul>
                                <li>
                                    <input type="checkbox" id="check6">
                                    <label for="check6">
                                        <h6 class="title">Auction News</h6>
                                        <p>A roundup of the trending news and latest stories in the auction world</p>
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" id="check7" checked>
                                    <label for="check7">
                                        <h6 class="title">Auction Calendar</h6>
                                        <p>A look at upcoming auctions, personalized just for you</p>
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" id="check8">
                                    <label for="check8">
                                        <h6 class="title">Auction Reports</h6>
                                        <p>An in-depth look at the results from top-performing auctions Once
                                            per month Auction Reports</p>
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" id="check9" checked>
                                    <label for="check9">
                                        <h6 class="title">Weekly Email</h6>
                                        <p>Preview the upcoming week's auctions and see the latest auction news
                                            from around the globe</p>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Dashboard Section Ends Here =============-->
@endsection
