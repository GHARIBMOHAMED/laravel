@extends('client.layouts.app')

@section('content')

<!--============= Hero Section Starts Here =============-->
<div class="hero-section style-2">
    <div class="container">
        <ul class="breadcrumb">
            <li>
                <a href="/">Home</a>
            </li>
            <li>
                <a href="#0">Pages</a>
            </li>
            <li>
                <span> Cars</span>
            </li>
        </ul>
    </div>
    <div class="bg_img hero-bg bottom_center" data-background="{{ asset('images/banner/hero-bg.png') }}"></div>
</div>
<!--============= Hero Section Ends Here =============-->


<!--============= Product Auction Section Starts Here =============-->
<div class="product-auction padding-bottom featured-auction-section padding-bottom mt--240 mt-lg--440 pos-rel" >
    <div class="container">
        <div class="row mb--50">
            <div class="col-lg-4 mb-50">
                <div class="widget">
                    <h5 class="title">Filter by Price</h5>
                    <div class="widget-body">
                        <div id="slider-range"></div>
                        <div class="price-range">
                            <label for="amount">Price :</label>
                            <input type="text" id="amount" readonly>
                        </div>
                    </div>
                    <div class="text-center mt-20">
                        <a href="#0" class="custom-button">Filter</a>
                    </div>
                </div>
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
                    <form class="product-search ml-auto">
                        <input type="text" placeholder="Item Name">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="row mb-30-none justify-content-center">
                            @if(count($cars) > 0)
                            @foreach($cars as $car)
                            <div class="col-sm-10 col-md-6" id="component{{ $car->id }}">
                                <div class="auction-item-2">
                                    <div class="auction-thumb">
                                        <a href="{{ url('cardetail/'.$car->id) }}"><img src="/media/{{ $car->images[7] }}" alt="trending" alt="product"></a>
                                        <a href="{{ url('cardetail/'.$car->id) }}" class="rating"><i class="far fa-star"></i></a>
                                        <a href="{{ url('cardetail/'.$car->id) }}" class="bid"><i class="flaticon-auction"></i></a>
                                    </div>
                                    <div class="auction-content">
                                        <h6 class="title">
                                            <a href="{{ url('cardetail/'.$car->id) }}">{{ $car->year }} - {{ $car->model }}</a>
                                        </h6>
                                        <div class="bid-area">
                                            <div class="bid-amount">
                                                <div class="icon">
                                                    <i class="flaticon-auction"></i>
                                                </div>
                                                <div class="amount-content">
                                                    <div class="current">Current Bid</div>
                                                    <div class="amount">${{ $car->price }}.00</div>
                                                </div>
                                            </div>
                                            <div class="bid-amount">
                                                <div class="icon">
                                                    <i class="flaticon-money"></i>
                                                </div>
                                                <div class="amount-content">
                                                    <div class="current">Buy Now</div>
                                                    <div class="amount">${{ $car->estValue }}.00</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="countdown-area">
                                            <div class="countdown">
                                                <span> {{ $car->saleDate }}</span>
                                            </div>
                                            <span class="total-bids">{{ $car->bids }} Bids</span>
                                        </div>
                                        <div class="text-center">
                                            <a href="{{ url('bidin/'.$car->id .'/'.$car->price) }}" class="custom-button">Increace bid by 50$</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach

                            @endif
                </div>



                <ul class="pagination">
                    {{ $cars->links() }}

                </ul>
            </div>
        </div>
    </div>
</div>
<!--============= Product Auction Section Ends Here =============-->
@endsection
