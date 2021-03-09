@extends('client.layouts.app')

@section('content')

<!--============= Product Auction Section Starts Here =============-->
<div class="product-auction padding-bottom featured-auction-section padding-bottom mt--240 mt-lg--440 pos-rel" >
    <div class="container">
        <div class="row mb--50">
            <div class="col-lg-4 mb-50">
                <form action="/product1" method="GET">
                <div class="widget">
                    <h5 class="title">Filter by Price</h5>
                    <div class="widget-body">
                        <div id="slider-range"></div>
                        <div class="price-range">
                            <div class="group-form row">

                                        <div class="row">

                                            <div class="col-mb-2 ml-5">
                                                <label for="amount">Price :</label>
                                            </div>
                                        <div class="col-mb-8">
                                            <input type="text" name="filter[price]" value="" id="amount" readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-mb-2 ml-5">
                                            <label for="amount">Price :</label>
                                        </div>
                                        <div class="col-mb-8">
                                            <input type="text" value="" id="amount2" readonly>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-20">
                        <button type="submit"  class="custom-button">Filter</button>
                    </div>
                </div>
                </form>
                <br>
                <div class="widget">
                    <h5 class="title">Auction Type</h5>
                    <div class="widget-body">
                        <div class="widget-form-group">
                            <input type="checkbox" name="check-by-type" id="check1">
                            <label for="check1">Live Auction</label>
                        </div>
                        <div class="widget-form-group">
                            <input type="checkbox" name="check-by-type" id="check2">
                            <label for="check2">Timed Auction</label>
                        </div>
                        <div class="widget-form-group">
                            <input type="checkbox" name="check-by-type" id="check3">
                            <label for="check3">Buy Now</label>
                        </div>
                    </div>
                </div>
                <div class="widget">
                    <h5 class="title">Ending Within</h5>
                    <div class="widget-body">
                        <div class="widget-form-group">
                            <input type="checkbox" name="check-by-type" id="day">
                            <label for="day">1 Day</label>
                        </div>
                        <div class="widget-form-group">
                            <input type="checkbox" name="check-by-type" id="week">
                            <label for="week">1 Week</label>
                        </div>
                        <div class="widget-form-group">
                            <input type="checkbox" name="check-by-type" id="month1">
                            <label for="month1">1 Month</label>
                        </div>
                        <div class="widget-form-group">
                            <input type="checkbox" name="check-by-type" id="month3">
                            <label for="month3">3 Month</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mb-50">
                <div class="product-header mb-40 style-3" style="background-color:white">
                    <div class="product-header-item">
                        <div class="item">Sort By : </div>
                        <select name="sort-by" class="select-bar">
                            <option value="all">All</option>
                            <option value="name">Name</option>
                            <option value="date">Date</option>
                            <option value="type">Type</option>
                            <option value="car">Car</option>
                        </select>
                    </div>
                    <div class="product-header-item">
                        <div class="item">Show : </div>
                        <select name="sort-by" class="select-bar">
                            <option value="09">06</option>
                            <option value="21">09</option>
                            <option value="30">30</option>
                            <option value="39">39</option>
                            <option value="60">60</option>
                        </select>
                    </div>
                    <form class="product-search ml-auto" action="/product1" method="GET">
                        <input type="text" name="filter[model]" placeholder="Search for brand, model...." >
                        <button  type="submit"><i class="fas fa-search"></i></button>
                    </form>

                </div>


                <div id="carsdetail"></div>

@include('client.home.product-componant')
                    @yield('cars')
            </div>
        </div>
    </div>
</div>
<!--============= Product Auction Section Ends Here =============-->
<script>
    $('#carsdetail').load("{{ url('/product-comp') }}").fadeIn()
</script>
@endsection
