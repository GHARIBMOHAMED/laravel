@extends('client.layouts.app')

@section('content')


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
                                    <h2 class="title"><span class="counter">{{ $bids }}</span></h2>
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
                                    <h2 class="title"><span class="counter">{{ $won }}</span></h2>
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
                                    <h2 class="title"><span class="counter">{{ $fav }}</span></h2>
                                    <h6 class="info">Favorites</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dashboard-widget">
                    <h5 class="title mb-10">Purchasing</h5>
                    <div class="dashboard-purchasing-tabs">

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
                                        @foreach($table as $row)


                                        <tr>
                                            <td data-purchase="item">{{ $row->year }} {{ $row->model }}</td>
                                            <td data-purchase="bid price">{{ $row->price }}</td>
                                            <td data-purchase="highest bid">{{ $row->max }}</td>
                                            <td data-purchase="lowest bid">{{ $row->min }}</td>
                                            <td data-purchase="expires">{{ $row->saleDate }}</td>
                                        </tr>
                                        @endforeach
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
