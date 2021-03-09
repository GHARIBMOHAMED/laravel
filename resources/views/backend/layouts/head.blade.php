@section('head')
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ui8-unity-exchange.herokuapp.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Feb 2021 16:36:01 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>Home page</title>
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
    <meta name="twitter:image" content=" {{ asset('img/twitter-card.html')}}">
    <meta property="og:title" content="Unity Dashboard Kit: Exchange 🤑">
    <meta property="og:type" content="Article">
    <meta property="og:url" content="https://ui8.net/ui8/products/unity-dashboard-kit--exchange">
    <meta property="og:image" content=" {{ asset('img/fb-og-image.html')}}">
    <meta property="og:description" content="The Premium Production-ready Crypto Asset Exchange Kit">
    <meta property="og:site_name" content="Unity Dashboard Kit: Exchange 🤑">
    <meta property="fb:admins" content="132951670226590">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Poppins:wght@500;600&amp;display=swap" rel="stylesheet">

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

<div class="page">
<div class="sidebar">
    <div class="sidebar__head"><a class="sidebar__logo" href="index.html">
        <img class="sidebar__pic sidebar__pic_light" src=" {{ asset('img/logo-b.png')}}" alt="" style="padding-left: 20%"/>
        <img class="sidebar__pic sidebar__pic_dark" src=" {{ asset('img/logo_white.png')}}" alt="" style="padding-left: 20%" /></a>
        <button class="sidebar__toggle">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
          <path d="M22 12H3" stroke="#11142d"></path>
          <g stroke="#808191">
            <path d="M22 4H13"></path>
            <path opacity=".301" d="M22 20H13"></path>
          </g>
          <path d="M7 7l-5 5 5 5" stroke="#11142d"></path>
        </svg></button><button class="sidebar__close"><svg class="icon icon-close">
          <use xlink:href=" {{ asset('img/sprite.svg#icon-close')}}"></use>
        </svg></button></div>
    <div class="sidebar__body">
      <nav class="sidebar__nav">
        <a class="sidebar__item active" href="{{ url('/newhome') }}">
          <div class="sidebar__icon"><svg class="icon icon-home">
              <img src="{{ asset('img/dashboard.png')}}"/>
            </svg></div>
          <div class="sidebar__text">Dashboard</div>
        </a>

        <a class="sidebar__item " href="{{ url('/newhome') }}">
          <div class="sidebar__icon"><svg class="icon icon-home">
              <img src="{{ asset('img/car.png')}}"/>
            </svg></div>
          <div class="sidebar__text">Cars</div>
        </a>

        <a class="sidebar__item " href="{{ url('/newhome') }}">
          <div class="sidebar__icon"><svg class="icon icon-home">
              <img src="{{ asset('img/users.png')}}"/>
            </svg></div>
          <div class="sidebar__text">Users</div>
        </a>

        <a class="sidebar__item " href="{{ url('/newhome') }}">
          <div class="sidebar__icon"><svg class="icon icon-home">
              <img src="{{ asset('img/bids.png')}}"/>
            </svg></div>
          <div class="sidebar__text">Bids</div>
        </a>

        <a class="sidebar__item " href="{{ url('/newhome') }}">
          <div class="sidebar__icon"><svg class="icon icon-home">
              <img src="{{ asset('img/orders.png')}}"/>
            </svg></div>
          <div class="sidebar__text">Orders</div>
        </a>

        <a class="sidebar__item " href="{{ url('/newhome') }}">
          <div class="sidebar__icon"><svg class="icon icon-home">
              <img src="{{ asset('img/profile.png')}}"/>
            </svg></div>
          <div class="sidebar__text">Profile</div>
        </a>
        </nav>


      <form class="sidebar__search"><input class="sidebar__input" type="text" placeholder="Search" /><button class="sidebar__start"><svg class="icon icon-search">
            <use xlink:href=" {{ asset('img/sprite.svg#icon-search')}}"></use>
          </svg></button></form>
    </div>
    <div class="sidebar__bottom"><label class="switch switch_theme js-switch-theme"><input class="switch__input" type="checkbox" /><span class="switch__in"><span class="switch__box"></span><span class="switch__icon"><svg class="icon icon-theme-light">
              <use xlink:href=" {{ asset('img/sprite.svg#icon-theme-light')}}"></use>
            </svg><svg class="icon icon-theme-dark">
              <use xlink:href=" {{ asset('img/sprite.svg#icon-theme-dark')}}"></use>
            </svg></span></span></label><a class="sidebar__user" href="sign-in.html"><img src=" {{ auth()->user()->avatar }}" alt="avatar" /></a></div>
  </div>

  <div class="page__content">
    <div class="header">
      <form class="header__search"><input class="header__input" type="text" placeholder="Search" /><button class="header__start"><svg class="icon icon-search">
            <use xlink:href=" {{ asset('img/sprite.svg#icon-search')}}"></use>
          </svg></button></form><a class="header__logo" href="index.html"><img src=" {{ asset('img/logo_sm.png')}}" alt="" /></a>
      <div class="header__group">
        <div class="header__item header__item_notifications"><button class="header__head active"><svg class="icon icon-notification">
              <use xlink:href=" {{ asset('img/sprite.svg#icon-notification')}}"></use>
            </svg></button>
          <div class="header__body">
            <div class="header__notifications">
              <div class="header__notification">
                <div class="header__icon"><img src=" {{ asset('img/paper.svg')}}" alt="" /></div>
                <div class="header__details">
                  <div class="header__info">Wrapped Bitcoin is now listed on Unity Exchange</div>
                  <div class="header__line">
                    <div class="header__time">24m ago</div>
                    <div class="header__status"></div>
                  </div>
                </div>
              </div>
              <div class="header__notification">
                <div class="header__icon"><img src=" {{ asset('img/paper.svg')}}" alt="" /></div>
                <div class="header__details">
                  <div class="header__info">Wrapped Bitcoin is now listed on Unity Exchange</div>
                  <div class="header__line">
                    <div class="header__time">24m ago</div>
                    <div class="header__status"></div>
                  </div>
                </div>
              </div>
              <div class="header__notification">
                <div class="header__icon"><img src=" {{ asset('img/paper.svg')}}" alt="" /></div>
                <div class="header__details">
                  <div class="header__info">Wrapped Bitcoin is now listed on Unity Exchange</div>
                  <div class="header__line">
                    <div class="header__time">24m ago</div>
                    <div class="header__status"></div>
                  </div>
                </div>
              </div>
              <div class="header__notification">
                <div class="header__icon"><img src=" {{ asset('img/paper.svg')}}" alt="" /></div>
                <div class="header__details">
                  <div class="header__info">Wrapped Bitcoin is now listed on Unity Exchange</div>
                  <div class="header__line">
                    <div class="header__time">24m ago</div>
                    <div class="header__status"></div>
                  </div>
                </div>
              </div>
              <div class="header__notification">
                <div class="header__icon"><img src=" {{ asset('img/paper.svg')}}" alt="" /></div>
                <div class="header__details">
                  <div class="header__info">Wrapped Bitcoin is now listed on Unity Exchange</div>
                  <div class="header__line">
                    <div class="header__time">24m ago</div>
                    <div class="header__status"></div>
                  </div>
                </div>
              </div>
            </div><a class="header__btn btn btn_blue btn_wide" href="notifications.html">See all notifications</a>
          </div>
        </div>
        <div class="header__item header__item_download"><button class="header__head"><svg class="icon icon-arrow-down-square">
              <use xlink:href=" {{ asset('img/sprite.svg#icon-arrow-down-square')}}"></use>
            </svg></button>
          <div class="header__body">
            <div class="header__row">
              <div class="header__col">
                <div class="header__category">Downloads</div>
                <div class="header__downloads"><a class="header__download" href="#"><img src=" {{ asset('img/app-store.svg')}}" alt="" /></a><a class="header__download" href="#"><img src=" {{ asset('img/google-play.svg')}}" alt="" /></a></div>
              </div>
              <div class="header__col">
                <div class="header__category">Scan Code</div>
                <div class="header__code"><img src=" {{ asset('img/qr-code.png')}}" alt="" /></div>
              </div>
            </div>
          </div>
        </div>
        <div class="header__item header__item_lang"><button class="header__head">Eng/USD</button>
          <div class="header__body">
            <div class="header__lang">
              <div class="header__cell"><a class="header__link active" href="#"><span class="header__flag">🇺🇸</span> English</a><a class="header__link" href="#"><span class="header__flag">🇨🇳</span> 中文</a><a class="header__link" href="#"><span class="header__flag">🇪🇸</span> Española</a><a class="header__link" href="#"><span class="header__flag">🇫🇷</span> Français</a><a class="header__link" href="#"><span class="header__flag">🇻🇳</span> Tiếng Việt</a></div>
              <div class="header__cell"><a class="header__link active" href="#">USD</a><a class="header__link" href="#">EUR</a><a class="header__link" href="#">JPY</a><a class="header__link" href="#">BTC</a></div>
            </div>
          </div>
        </div>
      </div><a class="header__user" href="sign-in.html"><img src=" {{ auth()->user()->avatar }}" alt="" /></a><button class="header__toggle"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
          <path d="M22 12H3" stroke="#11142d"></path>
          <g stroke="#808191">
            <path d="M22 4H13"></path>
            <path opacity=".301" d="M22 20H13"></path>
          </g>
          <path d="M7 7l-5 5 5 5" stroke="#11142d"></path>
        </svg></button>
    </div>
@endsection















