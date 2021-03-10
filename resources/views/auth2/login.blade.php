<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ui8-unity-exchange.herokuapp.com/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Feb 2021 16:36:19 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>Sign in</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#fff">
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="The Premium Production-ready Crypto Asset Exchange Kit">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@ui8">
    <meta name="twitter:title" content="Unity Dashboard Kit: Exchange 🤑">
    <meta name="twitter:description" content="The Premium Production-ready Crypto Asset Exchange Kit">
    <meta name="twitter:creator" content="@ui8">
    <meta name="twitter:image" content="img/twitter-card.html">
    <meta property="og:title" content="Unity Dashboard Kit: Exchange 🤑">
    <meta property="og:type" content="Article">
    <meta property="og:url" content="https://ui8.net/ui8/products/unity-dashboard-kit--exchange">
    <meta property="og:image" content="img/fb-og-image.html">
    <meta property="og:description" content="The Premium Production-ready Crypto Asset Exchange Kit">
    <meta property="og:site_name" content="Unity Dashboard Kit: Exchange 🤑">
    <meta property="fb:admins" content="132951670226590">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Poppins:wght@500;600&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" media="all" href="{{ asset('backend/css/app.css') }}">
    <script>var viewportmeta = document.querySelector('meta[name="viewport"]');
if (viewportmeta) {
  if (screen.width < 375) {
    var newScale = screen.width / 375;
    viewportmeta.content = 'width=375, minimum-scale=' + newScale + ', maximum-scale=1.0, user-scalable=no, initial-scale=' + newScale + '';
  } else {
    viewportmeta.content = 'width=device-width, maximum-scale=1.0, initial-scale=1.0';
  }
}</script>
  </head>
  <body>
    <script>console.log(localStorage.getItem('darkMode'));
if (localStorage.getItem('darkMode') === "on") {
		document.body.classList.add("dark");
		document.addEventListener("DOMContentLoaded", function() {
		  document.querySelector('.js-switch-theme input').checked = true;
		});
}
</script>
    <div class="login">
      <div class="login__row">
        <div class="login__col"><a class="login__logo" href="index.html"><img src="img/logo_white.png" alt="" style="max-height: 70px"></a>
          <h1 class="login__title h1">Best Auction <br>Buy & Sell</h1>
          <div class="login__info h6">Number 1 in morocco</div>
          <div class="login__preview"><img src="img/figures-2.png" alt=""></div>
        </div>
        <div class="login__col"><a class="login__logo" href="index.html"><img src="img/logo_sm.png" alt=""></a>
        <form class="form"  method="POST" action="{{ route('login') }}">
            <div class="login__form">
                <div class="login__stage h4">Sign in to <br>Unity Exchange</div>
                <div class="login__field field js-field">
                <div class="actions__label">Email</div>
                <div class="field__wrap">
                    <input class="field__input js-field-input" type="email" id="email" placeholder="Email"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                             </span>
                         @enderror
                    </div>
                </div>
                <div class="login__field field js-field">
                <div class="actions__label">Password</div>
                <div class="field__wrap">
                    <input class="field__input js-field-input" type="password" placeholder="Password"  name="password" required autocomplete="current-password">
                    @error('password')
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                             </span>
                         @enderror
                    </div>
                </div>
                <div class="login__links text-right"><a class="login__link" href="#"><svg class="icon icon-link">
                    <use xlink:href="img/sprite.svg#icon-link"></use>
                    </svg>Forgot Password?</a></div><button class="login__btn btn btn_blue btn_wide" href="#" type="submit">Sign in</button><br><br>
                    <a class="login__btn btn btn_blue btn_wide" href="{{ url('login/google/') }}">Google Login</a>
                <div class="login__flex">
                <div class="login__text">Not a member?</div>
                <a class="login__link" href="sign-up.html"><svg class="icon icon-link">
                    <use xlink:href="img/sprite.svg#icon-link"></use>
                    </svg>Sign up now
                    </a>

                </div>
            </div>
        </form>
        </div>
      </div>
    </div>

<script src=" {{ asset('backend/js/lib/svg4everybody.min.js') }}"></script>
<script src=" {{ asset('backend/js/lib/owl.carousel.min.js') }}"></script>
<script src=" {{ asset('backend/js/lib/jquery.nice-select.min.js') }}"></script>
<script src=" {{ asset('backend/js/lib/apexcharts.min.js') }}"></script>
<script src=" {{ asset('backend/js/lib/jquery.magnific-popup.min.js') }}"></script>
<script src=" {{ asset('backend/js/charts.js') }}"></script>
<script src=" {{ asset('backend/js/app.js') }}"></script>
  </body>
</html>
