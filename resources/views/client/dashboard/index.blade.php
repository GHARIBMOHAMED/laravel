@extends('client.layouts.app')

@section('content')

<!--============= Hero Section Starts Here =============-->
<div class="hero-section style-2 pb-lg-400">
    <div class="container">
        <ul class="breadcrumb">
            <li>
                <a href="index.html">Home</a>
            </li>
            <li>
                <a href="#0">My Account</a>
            </li>
            <li>
                <span>Dashboard</span>
            </li>
        </ul>
    </div>
    <div class="bg_img hero-bg bottom_center" data-background="{{ asset('images/banner/hero-bg.png') }}"></div>
</div>
<!--============= Hero Section Ends Here =============-->


<!--============= Dashboard Section Starts Here =============-->
<section class="dashboard-section padding-bottom mt--240 mt-lg--325 pos-rel">
    <div class="container">
        <div class="row justify-content-center">

            @include('client.dashboard.sidebar')
            @yield('sidebar')


            <div class="col-lg-8">
                <div class="dashboard-widget mb-40">
                    <div class="dashboard-title mb-30">
                        <h5 class="title">My Activity</h5>
                    </div>
                    <div class="row justify-content-center mb-30-none">
                        <div class="col-md-4 col-sm-6">
                            <div class="dashboard-item">
                                <div class="thumb">
                                    <img src="{{ asset('images/dashboard/01.png') }}" alt="dashboard">
                                </div>
                                <div class="content">
                                    <h2 class="title"><span class="counter">80</span></h2>
                                    <h6 class="info">Active Bids</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="dashboard-item">
                                <div class="thumb">
                                    <img src="{{ asset('images/dashboard/02.png') }}" alt="dashboard">
                                </div>
                                <div class="content">
                                    <h2 class="title"><span class="counter">15</span></h2>
                                    <h6 class="info">Items Won</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="dashboard-item">
                                <div class="thumb">
                                    <img src="{{ asset('images/dashboard/03.png') }}" alt="dashboard">
                                </div>
                                <div class="content">
                                    <h2 class="title"><span class="counter">115</span></h2>
                                    <h6 class="info">Favorites</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dashboard-widget">
                    <h5 class="title mb-10">Purchasing</h5>
                    <div class="dashboard-purchasing-tabs">
                        <ul class="nav-tabs nav">
                            <li>
                                <a href="#current" class="active" data-toggle="tab">Current</a>
                            </li>
                            <li>
                                <a href="#pending" data-toggle="tab">Pending</a>
                            </li>
                            <li>
                                <a href="#history" data-toggle="tab">History</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane show active fade" id="current">
                                <table class="purchasing-table">
                                    <thead>
                                        <th>Item</th>
                                        <th>Bid Price</th>
                                        <th>Highest Bid</th>
                                        <th>Lowest Bid</th>
                                        <th>Expires</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                            <td data-purchase="bid price">$1,775.00</td>
                                            <td data-purchase="highest bid">$1,775.00</td>
                                            <td data-purchase="lowest bid">$1,400.00</td>
                                            <td data-purchase="expires">7/2/2021</td>
                                        </tr>
                                        <tr>
                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                            <td data-purchase="bid price">$1,775.00</td>
                                            <td data-purchase="highest bid">$1,775.00</td>
                                            <td data-purchase="lowest bid">$1,400.00</td>
                                            <td data-purchase="expires">7/2/2021</td>
                                        </tr>
                                        <tr>
                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                            <td data-purchase="bid price">$1,775.00</td>
                                            <td data-purchase="highest bid">$1,775.00</td>
                                            <td data-purchase="lowest bid">$1,400.00</td>
                                            <td data-purchase="expires">7/2/2021</td>
                                        </tr>
                                        <tr>
                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                            <td data-purchase="bid price">$1,775.00</td>
                                            <td data-purchase="highest bid">$1,775.00</td>
                                            <td data-purchase="lowest bid">$1,400.00</td>
                                            <td data-purchase="expires">7/2/2021</td>
                                        </tr>
                                        <tr>
                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                            <td data-purchase="bid price">$1,775.00</td>
                                            <td data-purchase="highest bid">$1,775.00</td>
                                            <td data-purchase="lowest bid">$1,400.00</td>
                                            <td data-purchase="expires">7/2/2021</td>
                                        </tr>
                                        <tr>
                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                            <td data-purchase="bid price">$1,775.00</td>
                                            <td data-purchase="highest bid">$1,775.00</td>
                                            <td data-purchase="lowest bid">$1,400.00</td>
                                            <td data-purchase="expires">7/2/2021</td>
                                        </tr>
                                        <tr>
                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                            <td data-purchase="bid price">$1,775.00</td>
                                            <td data-purchase="highest bid">$1,775.00</td>
                                            <td data-purchase="lowest bid">$1,400.00</td>
                                            <td data-purchase="expires">7/2/2021</td>
                                        </tr>
                                        <tr>
                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                            <td data-purchase="bid price">$1,775.00</td>
                                            <td data-purchase="highest bid">$1,775.00</td>
                                            <td data-purchase="lowest bid">$1,400.00</td>
                                            <td data-purchase="expires">7/2/2021</td>
                                        </tr>
                                        <tr>
                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                            <td data-purchase="bid price">$1,775.00</td>
                                            <td data-purchase="highest bid">$1,775.00</td>
                                            <td data-purchase="lowest bid">$1,400.00</td>
                                            <td data-purchase="expires">7/2/2021</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane show fade" id="pending">
                                <table class="purchasing-table">
                                    <thead>
                                        <th>Item</th>
                                        <th>Bid Price</th>
                                        <th>Highest Bid</th>
                                        <th>Lowest Bid</th>
                                        <th>Expires</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                            <td data-purchase="bid price">$1,775.00</td>
                                            <td data-purchase="highest bid">$1,775.00</td>
                                            <td data-purchase="lowest bid">$1,400.00</td>
                                            <td data-purchase="expires">7/2/2021</td>
                                        </tr>
                                        <tr>
                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                            <td data-purchase="bid price">$1,775.00</td>
                                            <td data-purchase="highest bid">$1,775.00</td>
                                            <td data-purchase="lowest bid">$1,400.00</td>
                                            <td data-purchase="expires">7/2/2021</td>
                                        </tr>
                                        <tr>
                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                            <td data-purchase="bid price">$1,775.00</td>
                                            <td data-purchase="highest bid">$1,775.00</td>
                                            <td data-purchase="lowest bid">$1,400.00</td>
                                            <td data-purchase="expires">7/2/2021</td>
                                        </tr>
                                        <tr>
                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                            <td data-purchase="bid price">$1,775.00</td>
                                            <td data-purchase="highest bid">$1,775.00</td>
                                            <td data-purchase="lowest bid">$1,400.00</td>
                                            <td data-purchase="expires">7/2/2021</td>
                                        </tr>
                                        <tr>
                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                            <td data-purchase="bid price">$1,775.00</td>
                                            <td data-purchase="highest bid">$1,775.00</td>
                                            <td data-purchase="lowest bid">$1,400.00</td>
                                            <td data-purchase="expires">7/2/2021</td>
                                        </tr>
                                        <tr>
                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                            <td data-purchase="bid price">$1,775.00</td>
                                            <td data-purchase="highest bid">$1,775.00</td>
                                            <td data-purchase="lowest bid">$1,400.00</td>
                                            <td data-purchase="expires">7/2/2021</td>
                                        </tr>
                                        <tr>
                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                            <td data-purchase="bid price">$1,775.00</td>
                                            <td data-purchase="highest bid">$1,775.00</td>
                                            <td data-purchase="lowest bid">$1,400.00</td>
                                            <td data-purchase="expires">7/2/2021</td>
                                        </tr>
                                        <tr>
                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                            <td data-purchase="bid price">$1,775.00</td>
                                            <td data-purchase="highest bid">$1,775.00</td>
                                            <td data-purchase="lowest bid">$1,400.00</td>
                                            <td data-purchase="expires">7/2/2021</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane show fade" id="history">
                                <table class="purchasing-table">
                                    <thead>
                                        <th>Item</th>
                                        <th>Bid Price</th>
                                        <th>Highest Bid</th>
                                        <th>Lowest Bid</th>
                                        <th>Expires</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                            <td data-purchase="bid price">$1,775.00</td>
                                            <td data-purchase="highest bid">$1,775.00</td>
                                            <td data-purchase="lowest bid">$1,400.00</td>
                                            <td data-purchase="expires">7/2/2021</td>
                                        </tr>
                                        <tr>
                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                            <td data-purchase="bid price">$1,775.00</td>
                                            <td data-purchase="highest bid">$1,775.00</td>
                                            <td data-purchase="lowest bid">$1,400.00</td>
                                            <td data-purchase="expires">7/2/2021</td>
                                        </tr>
                                        <tr>
                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                            <td data-purchase="bid price">$1,775.00</td>
                                            <td data-purchase="highest bid">$1,775.00</td>
                                            <td data-purchase="lowest bid">$1,400.00</td>
                                            <td data-purchase="expires">7/2/2021</td>
                                        </tr>
                                        <tr>
                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                            <td data-purchase="bid price">$1,775.00</td>
                                            <td data-purchase="highest bid">$1,775.00</td>
                                            <td data-purchase="lowest bid">$1,400.00</td>
                                            <td data-purchase="expires">7/2/2021</td>
                                        </tr>
                                        <tr>
                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                            <td data-purchase="bid price">$1,775.00</td>
                                            <td data-purchase="highest bid">$1,775.00</td>
                                            <td data-purchase="lowest bid">$1,400.00</td>
                                            <td data-purchase="expires">7/2/2021</td>
                                        </tr>
                                        <tr>
                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                            <td data-purchase="bid price">$1,775.00</td>
                                            <td data-purchase="highest bid">$1,775.00</td>
                                            <td data-purchase="lowest bid">$1,400.00</td>
                                            <td data-purchase="expires">7/2/2021</td>
                                        </tr>
                                        <tr>
                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                            <td data-purchase="bid price">$1,775.00</td>
                                            <td data-purchase="highest bid">$1,775.00</td>
                                            <td data-purchase="lowest bid">$1,400.00</td>
                                            <td data-purchase="expires">7/2/2021</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--============= Dashboard Section Ends Here =============-->

@endsection
