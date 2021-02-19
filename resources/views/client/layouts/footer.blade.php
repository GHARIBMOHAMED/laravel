@section('footer')
    <!--============= Footer Section Starts Here =============-->
    <footer class="bg_img padding-top oh" data-background="{{ asset('images/footer/footer-bg.jpg') }}">
        <div class="footer-top-shape">
            <img src=" {{ asset('css/img/footer-top-shape.png') }}" alt="css">
        </div>
        <div class="anime-wrapper">
            <div class="anime-1 plus-anime">
                <img src=" {{ asset('images/footer/p1.png ') }}" alt="footer">
            </div>
            <div class="anime-2 plus-anime">
                <img src=" {{ asset('images/footer/p2.png ') }}" alt="footer">
            </div>
            <div class="anime-3 plus-anime">
                <img src=" {{ asset('images/footer/p3.png ') }}" alt="footer">
            </div>
            <div class="anime-5 zigzag">
                <img src=" {{ asset('images/footer/c2.png ') }}" alt="footer">
            </div>
            <div class="anime-6 zigzag">
                <img src=" {{ asset('images/footer/c3.png ') }}" alt="footer">
            </div>
            <div class="anime-7 zigzag">
                <img src=" {{ asset('images/footer/c4.png ') }}" alt="footer">
            </div>
        </div>
        <div class="newslater-wrapper">
            <div class="container">
                <div class="newslater-area">
                    <div class="newslater-thumb">
                        <img src="  {{ asset('images/footer/newslater.png') }}" alt="footer">
                    </div>
                    <div class="newslater-content">
                        <div class="section-header left-style mb-low">
                            <h5 class="cate">Subscribe to Sbidu</h5>
                            <h3 class="title">To Get Exclusive Benefits</h3>
                        </div>
                        <form class="subscribe-form">
                            <input type="text" placeholder="Enter Your Email" name="email">
                            <button type="submit" class="custom-button">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-top padding-bottom padding-top">
            <div class="container">
                <div class="row mb--60">
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-widget widget-links">
                            <h5 class="title">Auction Categories</h5>
                            <ul class="links-list">
                                <li>
                                    <a href="{{ url('myfavorite') }}">Favorite</a>
                                </li>
                                <li>
                                    <a href="{{ url('mybid') }}">My bids</a>
                                </li>
                                <li>
                                    <a href="{{ url('product ') }}">Products</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-widget widget-links">
                            <h5 class="title">About Us</h5>
                            <ul class="links-list">
                                <li>
                                    <a href="{{ url('about') }}">About Bid Maroc</a>
                                </li>
                                <li>
                                    <a href="{{ url('contact') }}">Help</a>
                                </li>
                                <li>
                                    <a href="{{ url('referal') }}">Affiliates</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-widget widget-links">
                            <h5 class="title">We're Here to Help</h5>
                            <ul class="links-list">
                                <li>
                                    <a href="{{ url('profile') }}">Your Account</a>
                                </li>
                                <li>
                                    <a href="{{ url('contact') }}">Contact Us</a>
                                </li>
                                <li>
                                    <a href="{{ url('faq') }}">Help & FAQ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-widget widget-follow">
                            <h5 class="title">Follow Us</h5>
                            <ul class="links-list">
                                <li>
                                    <a href="#0"><i class="fas fa-phone-alt"></i>+212625881150</a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fas fa-blender-phone"></i>+212625881150</a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fas fa-envelope-open-text"></i>help@bidmaroc.com</a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fas fa-location-arrow"></i>mhamid saada 3</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="copyright-area">
                    <div class="footer-bottom-wrapper">
                        <div class="logo">
                            <a href="index.html"><img src="{{ asset('images/logo/footer-logo.png ') }}" style="max-height: 180px; max-width:200px; " alt="logo"></a>
                        </div>
                        <ul class="gateway-area">
                            <li>
                                <a href="#0"><img src="{{ asset('images/footer/paypal.png ') }}" alt="footer"></a>
                            </li>
                            <li>
                                <a href="#0"><img src="{{ asset('images/footer/visa.png ') }}" alt="footer"></a>
                            </li>
                            <li>
                                <a href="#0"><img src="{{ asset('images/footer/discover.png ') }}" alt="footer"></a>
                            </li>
                            <li>
                               <a href="#0"><img src="{{ asset('images/footer/mastercard.png ') }}" alt="footer"></a>
                            </li>
                        </ul>
                        <div class="copyright"><p>&copy; Copyright 2021 | <a href="#0">Bid Maroc</a> By <a href="#0">Gharib</a></p></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--============= Footer Section Ends Here =============-->



    <script src=" {{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src=" {{ asset('js/modernizr-3.6.0.min.js') }}"></script>
    <script src=" {{ asset('js/plugins.js') }}"></script>
    <script src=" {{ asset('js/bootstrap.min.js') }}"></script>
    <script src=" {{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script src=" {{ asset('js/wow.min.js') }}"></script>
    <script src=" {{ asset('js/waypoints.js') }}"></script>
    <script src=" {{ asset('js/nice-select.js') }}"></script>
    <script src=" {{ asset('js/counterup.min.js') }}"></script>
    <script src=" {{ asset('js/owl.min.js') }}"></script>
    <script src=" {{ asset('js/magnific-popup.min.js') }}"></script>
    <script src=" {{ asset('js/yscountdown.min.js') }}"></script>
    <script src=" {{ asset('js/jquery-ui.min.js') }}"></script>
    <script src=" {{ asset('js/main.js') }}"></script>
@endsection
