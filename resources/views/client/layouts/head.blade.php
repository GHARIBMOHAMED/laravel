 @section('head')


 <!--============= ScrollToTop Section Starts Here =============-->
 <div class="overlayer" id="overlayer">
    <div class="loader">
        <div class="loader-inner"></div>
    </div>
</div>
<a href="#0" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
<div class="overlay"></div>
<!--============= ScrollToTop Section Ends Here =============-->


<!--============= Header Section Starts Here =============-->
<header>
    <div class="header-top">
        <div class="container">
            <div class="header-top-wrapper">
                <ul class="customer-support">
                    <li>
                        <a href="#0" class="mr-3"><i class="fas fa-phone-alt"></i><span class="ml-2 d-none d-sm-inline-block">Customer Support</span></a>
                    </li>
                    <li>
                        <i class="fas fa-globe"></i>
                        <select name="language" class="select-bar">
                            <option value="en">En</option>
                            <option value="Bn">Bn</option>
                            <option value="Rs">Rs</option>
                            <option value="Us">Us</option>
                            <option value="Pk">Pk</option>
                            <option value="Arg">Arg</option>
                        </select>
                    </li>
                </ul>
                <ul class="cart-button-area">
                    <li>
                        <a href="#0" class="cart-button"><i class="flaticon-shopping-basket"></i><span class="amount">08</span></a>
                    </li>
                    <li>
                        <a href="sign-in.html" class="user-button"><i class="flaticon-user"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="index.html">
                        <img src=" images/logo/logo.png" style="max-height: 180px; max-width:200px; " alt="logo">
                    </a>
                </div>
                <ul class="menu ml-auto">
                    <li>
                        <a href="/">home</a>
                    </li>
                    <li>
                        <a href="/">Auction</a>
                    </li>
                    <li>
                        <li>
                            <a href="/about">About Us</a>
                        </li>
                    </li>
                    <li>
                        <a href="/contact">Contact</a>
                    </li>
                </ul>
                <form class="search-form">
                    <input type="text" placeholder="Search for brand, model....">
                    <button type="submit"><i class="fas fa-search"></i></button>
                </form>
                <div class="search-bar d-md-none">
                    <a href="#0"><i class="fas fa-search"></i></a>
                </div>
                <div class="header-bar d-lg-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</header>
<!--============= Header Section Ends Here =============-->

<!--============= Cart Section Starts Here =============-->
<div class="cart-sidebar-area">
    <div class="top-content">
        <a href="index.html" class="logo">
            <img src=" images/logo/logo2.png" alt="logo">
        </a>
        <span class="side-sidebar-close-btn"><i class="fas fa-times"></i></span>
    </div>
    <div class="bottom-content">
        <div class="cart-products">
            <h4 class="title">Shopping cart</h4>
            <div class="single-product-item">
                <div class="thumb">
                    <a href="#0"><img src=" images/shop/shop01.jpg" alt="shop"></a>
                </div>
                <div class="content">
                    <h4 class="title"><a href="#0">Color Pencil</a></h4>
                    <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                    <a href="#" class="remove-cart">Remove</a>
                </div>
            </div>
            <div class="single-product-item">
                <div class="thumb">
                    <a href="#0"><img src=" images/shop/shop02.jpg" alt="shop"></a>
                </div>
                <div class="content">
                    <h4 class="title"><a href="#0">Water Pot</a></h4>
                    <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                    <a href="#" class="remove-cart">Remove</a>
                </div>
            </div>
            <div class="single-product-item">
                <div class="thumb">
                    <a href="#0"><img src=" images/shop/shop03.jpg" alt="shop"></a>
                </div>
                <div class="content">
                    <h4 class="title"><a href="#0">Art Paper</a></h4>
                    <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                    <a href="#" class="remove-cart">Remove</a>
                </div>
            </div>
            <div class="single-product-item">
                <div class="thumb">
                    <a href="#0"><img src=" images/shop/shop04.jpg" alt="shop"></a>
                </div>
                <div class="content">
                    <h4 class="title"><a href="#0">Stop Watch</a></h4>
                    <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                    <a href="#" class="remove-cart">Remove</a>
                </div>
            </div>
            <div class="single-product-item">
                <div class="thumb">
                    <a href="#0"><img src=" images/shop/shop05.jpg" alt="shop"></a>
                </div>
                <div class="content">
                    <h4 class="title"><a href="#0">Comics Book</a></h4>
                    <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                    <a href="#" class="remove-cart">Remove</a>
                </div>
            </div>
            <div class="btn-wrapper text-center">
                <a href="#0" class="custom-button"><span>Checkout</span></a>
            </div>
        </div>
    </div>
</div>
<!--============= Cart Section Ends Here =============-->
@endsection
