 @section('head')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <style>
     @import url("https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&amp;family=Poppins:wght@300;400;500;600&amp;display=swap");
     html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5,
h6, p, blockquote, pre, a, abbr, acronym, address, big,
 small,
strike, strong,ul, li, fieldset, form, label, legend, table, caption,
tbody, tfoot, thead, tr, th, td, article, aside, canvas, details,
embed, figure, figcaption, footer, header, hgroup, menu, nav,
output, ruby, section, summary, time, mark, audio, video {

  font-family: 'DM Sans', sans-serif!important;

  font-weight: 700;
     }
     .activelink {
        bottom: -1px;
    left: 0;
    color: #ff381e!important;
    display: inline-block;
	transition: color 0.5s;
     }
 </style>
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
                            <option value="Bn">FR</option>
                        </select>
                    </li>
                </ul>
               @if(auth()->user()) <ul class="cart-button-area">
                    <li>
                        <a href="#0" class="cart-button"><i class="flaticon-shopping-basket"></i><span class="amount">01</span></a>
                    </li>
                    <li>

                            <a href="/" id="log"  onclick="event.preventDefault();" style="color: antiquewhite;">
                            {{ auth()->user()->name }}</a>


                             <form action="{{ route('logout') }}" method="POST" hidden id="logout_form">@csrf</form>
                    </li>
                    @else
                    <li class="menu ml-auto">
                        <a style="color: antiquewhite;" href="/signin">login</a>
                    </li>
                    <li class="menu ml-3">
                        <a style="color: antiquewhite;" href="/signup">Register</a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="/">
                        <img src=" {{ asset('images/logo/logo.png')}}" style="max-height: 180px; max-width:200px; " alt="logo">
                    </a>
                </div>
                <ul class="menu ml-auto">
                    <li>
                        <a class="{{ Request::path()=== '/' ? 'activelink' : ''  }}" href="/">home</a>
                    </li>
                    <li>
                        <a href="/product" class="{{ Request::path()=== 'product' ? 'activelink' : '' }}">Auction</a>
                    </li>
                    <li>
                        <li>
                            <a href="/about" class="{{ Request::path()=== 'about' ? 'activelink' : ''  }}" >About Us</a>
                        </li>
                    </li>
                    <li>
                        <a href="/contact" class="{{ Request::path()=== 'contact' ? 'activelink' : ''  }}" >Contact</a>
                    </li>
                    @if(auth()->user())
                    <li>
                        <a href="/dashboard" class="{{ Request::path()=== 'dashboard' ? 'activelink' : ''  }}" >Dashboard</a>
                    </li>
                    @endif
                </ul>
                <form class="search-form" action="/product1" method="GET">
                    <input type="text" name="filter[model]" placeholder="Search for brand, model...." >
                    <button  type="submit"><i class="fas fa-search"></i></button>
                </form>
                <div class="search-bar d-md-none">
                    <a href=""><i class="fas fa-search"></i></a>
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
            <img src=" {{ asset('images/logo/logo.png') }}" alt="logo">
        </a>
        <span class="side-sidebar-close-btn"><i class="fas fa-times"></i></span>
    </div>
    <div class="bottom-content">
        <div class="cart-products">
            <h4 class="title">Shopping cart</h4>
            <div class="single-product-item">
                <div class="thumb">
                    <a href="#0"><img src=" {{ asset('images/shop/shop01.jpg') }}" alt="shop"></a>
                </div>
                <div class="content">
                    <h4 class="title"><a href="#0">Color Pencil</a></h4>
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
@if(Request::path()==='/')
@else
<div class="hero-section style-2">
    <div class="container">
        <ul class="breadcrumb">
            <li>
                <a href="/">Home</a>
            </li>
            <li>
                <span>
                    {{ Request::path()=== 'product' ? 'product' : '' }}
                    {{ Request::path()=== 'about' ? 'about' : ''  }}
                    {{ Request::path()=== 'contact' ? 'contact' : ''  }}
                    {{ Request::path()=== 'faq' ? 'FAQ' : ''  }}
                </span>
            </li>

            <li>
                <span>
                    @if(Request::path()=== 'dashboard')

                        <a href="">Dashboard</a> @endif
                        {{ Request::path()=== 'mybid' ? 'mybid' : ''  }}
                        {{ Request::path()=== 'profile' ? 'profile' : ''  }}
                        {{ Request::path()=== 'wining' ? 'wining' : ''  }}
                        {{ Request::path()=== 'notification' ? 'notification' : ''  }}
                        {{ Request::path()=== 'myfavorite' ? 'my favorite' : ''  }}
                        {{ Request::path()=== 'referal' ? 'referal' : ''  }}

                </span>
            </li>
        </ul>
    </div>
    <div class="bg_img hero-bg bottom_center" data-background="{{ asset('images/banner/hero-bg.png') }}"></div>
</div>
@endif
<style>
    .swal2-title {

  font-style: italic;
  font-size: 30px
}
</style>
<script>
    $('#log').click(function(){
        Swal.fire({icon: 'error',
        title: 'Do you want to log out',
        showCloseButton: 'true',
        width:'25%',
        confirmButtonClass: 'btn btn-warning w-25 mr-05',
        buttonsStyling: false,
        }).then((result)=>{
                if(result.isConfirmed){
                    event.preventDefault();
            document.getElementById('logout_form').submit();
        }else{
            Swal.close()
        }


       });

    });

    @if(empty(auth()->user()->password) && auth()->user())


    setTimeout(
    function() {
    (async () => {


        const { value: password } = await Swal.fire({
  title: 'Enter your password',
  input: 'password',
  inputLabel: 'Password',
  inputPlaceholder: 'Enter your password',
  width:'35%',
  inputAttributes: {
    maxlength: 10,
    autocapitalize: 'off',
    autocorrect: 'off'
  }
});

if (password) {
    $.ajax({
             url: 'http://127.0.0.1:8000/fillpass/'+password ,
             method:'POST',
             data: password,
             contentType: 'application/json',
             headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

                        success: function(response) {
                            if(response) {

                                //$('#deleteForm1').attr("action", '/newCar/'+response.id);

                            }
                        }
                        });

  Swal.fire(`Entered password: ${password}`)
}


})()}, 5000);

@endif
</script>
@endsection
