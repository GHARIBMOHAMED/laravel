@section('footer')




<div class="popup popup_settings mfp-hide" id="popup-settings">
    <div class="popup__title h6">Account Settings</div>
    <div class="popup__tabs js-tabs">
      <div class="popup__select mobile-show"><select class="select js-tabs-select">
          <option>Profile</option>
          <option>Referrals</option>
          <option>Password</option>
          <option>2FA</option>
          <option>Sessions & Login History</option>
        </select></div>
      <div class="popup__nav"><a class="popup__link js-tabs-link active" href="#">Profile</a><a class="popup__link js-tabs-link" href="#">Referrals</a><a class="popup__link js-tabs-link" href="#">Password</a><a class="popup__link js-tabs-link" href="#">2FA</a><a class="popup__link js-tabs-link" href="#">Sessions & Login History</a></div>
      <div class="popup__container">
        <div class="popup__item js-tabs-item" style="display: block;">
          <div class="popup__user">
            <div class="popup__label popup__label_mb32">Your Avatar</div>
            <div class="popup__line">
              <div class="popup__ava"><img class="popup__pic" src="img/ava-header.png" alt=""></div>
              <div class="popup__details">
                <div class="popup__btns">
                  <div class="popup__loading"><input class="popup__file" type="file"><button class="popup__upload">Upload New</button></div><button class="popup__btn btn btn_gray">Delete Avatar</button>
                </div><a class="popup__default" href="#">Use default avatar</a>
              </div>
            </div>
          </div>
          <div class="popup__fieldset">
            <div class="popup__row">
              <div class="popup__field">
                <div class="popup__label">Your Full Name</div>
                <div class="popup__wrap"><input class="popup__input" type="text"></div>
              </div>
              <div class="popup__field">
                <div class="popup__label">Display Name</div>
                <div class="popup__wrap"><input class="popup__input" type="text"></div>
              </div>
            </div>
            <div class="popup__row">
              <div class="popup__field">
                <div class="popup__label">Email</div>
                <div class="popup__wrap"><input class="popup__input" type="email"></div>
              </div>
              <div class="popup__field">
                <div class="popup__label">Location</div>
                <div class="popup__wrap"><input class="popup__input" type="text"></div>
              </div>
            </div>
            <div class="popup__row">
              <div class="popup__field">
                <div class="popup__label">Deposit Assets</div>
                <div class="popup__wrap"><select class="select select_arrows select_sm">
                    <option>Enabled</option>
                    <option>Disabled</option>
                  </select></div>
              </div>
              <div class="popup__field">
                <div class="popup__label">Withdraw assets</div>
                <div class="popup__wrap"><select class="select select_arrows select_sm">
                    <option>Enabled $1,000,000 USD/day</option>
                    <option>Disable $1,000,000 USD/day</option>
                  </select></div>
              </div>
            </div>
          </div>
          <div class="popup__label">Notifications</div>
          <div class="popup__variants"><label class="checkbox"><input class="checkbox__input" type="checkbox" checked><span class="checkbox__in"><span class="checkbox__tick"></span><span class="checkbox__text">Promotions</span></span></label><label class="checkbox"><input class="checkbox__input" type="checkbox" checked><span class="checkbox__in"><span class="checkbox__tick"></span><span class="checkbox__text">Exchange</span></span></label><label class="checkbox"><input class="checkbox__input" type="checkbox"><span class="checkbox__in"><span class="checkbox__tick"></span><span class="checkbox__text">Withdrawals</span></span></label></div><button class="popup__btn btn btn_blue" type="submit">Update Profile</button>
        </div>
        <div class="popup__item js-tabs-item">
          <div class="popup__invite">
            <div class="popup__info h6">Invite your friends to Unity Exchange and Earn 15% on Friends trading fees</div>
            <div class="popup__label">Your Referral Link</div>
            <div class="popup__wrap"><input class="popup__input" type="text" value="https://unityexchange.design/ref?tranmautritam"><button class="popup__copy"><svg class="icon icon-copy">
                  <use xlink:href="img/sprite.svg#icon-copy"></use>
                </svg></button></div>
          </div>
          <div class="popup__category">Total Rewards</div>
          <div class="popup__flex">
            <div class="popup__money h3">128.256</div>
            <div class="popup__currency">USTD</div>
          </div>
          <div class="popup__parameters">
            <div class="popup__parameter">
              <div class="popup__head">
                <div class="popup__text">Inviter Rewards</div>
                <div class="popup__text">0.00 USDT</div>
              </div>
              <div class="popup__body">You’re earning 20% of the trading fees your referrals pay.</div>
            </div>
            <div class="popup__parameter">
              <div class="popup__head">
                <div class="popup__text">Total Invited</div>
                <div class="popup__text">64</div>
              </div>
            </div>
          </div>
        </div>
        <div class="popup__item js-tabs-item">
          <form class="popup__form">
            <div class="popup__title h6">Change Password</div>
            <div class="popup__field field js-field">
              <div class="field__label">current Password</div>
              <div class="field__wrap"><input class="field__input js-field-input" type="password"></div>
            </div>
            <div class="popup__field field js-field">
              <div class="field__label">new Password</div>
              <div class="field__wrap"><input class="field__input js-field-input" type="password"></div>
            </div>
            <div class="popup__field field js-field">
              <div class="field__label">Confirm new Password</div>
              <div class="field__wrap"><input class="field__input js-field-input" type="password"></div>
            </div><button class="popup__btn btn btn_blue btn_wide">Change Password</button>
          </form>
        </div>
        <div class="popup__item js-tabs-item">
          <div class="popup__box">
            <div class="popup__title h6">Scan Code</div>
            <div class="popup__scan">
              <div class="popup__preview"><img src="img/qr-code.png" alt=""></div>
              <div class="popup__details">
                <div class="popup__text">If you want to turn on 2FA, use <a href="#">Google Authenticator app</a> to scan code, then enter six-digit code provided by the app to the form below.</div><button class="popup__btn btn btn_blue">Download 2FA App</button>
              </div>
            </div>
          </div>
          <div class="popup__box">
            <div class="popup__title h6">Enter six-digit code</div>
            <div class="popup__numbers">
              <div class="popup__number success"><input type="tel" value="5"></div>
              <div class="popup__number success"><input type="tel" value="6"></div>
              <div class="popup__number success"><input type="tel" value="7"></div>
              <div class="popup__number success"><input type="tel" value="9"></div>
              <div class="popup__number"><input type="tel"></div>
              <div class="popup__number"><input type="tel"></div>
            </div>
          </div>
        </div>
        <div class="popup__item js-tabs-item">
          <div class="popup__box">
            <div class="popup__title h6">Active Sessions</div>
            <table class="popup__table">
              <tr>
                <th>DATE/TIME</th>
                <th>DEVICE</th>
                <th>LOCATION</th>
                <th>IP ADDRESS</th>
                <th> </th>
              </tr>
              <tr>
                <td>2020-12-02 07:50:18</td>
                <td>iMac Pro</td>
                <td><span class="popup__flag">🇺🇸</span> USA </td>
                <td>123.45.678.987</td>
                <td><button class="popup__close"><svg class="icon icon-close">
                      <use xlink:href="img/sprite.svg#icon-close"></use>
                    </svg></button></td>
              </tr>
            </table>
          </div>
          <div class="popup__box">
            <div class="popup__title h6">Login History</div>
            <table class="popup__table">
              <tr>
                <th>DATE/TIME</th>
                <th>DEVICE</th>
                <th>LOCATION</th>
                <th>IP ADDRESS</th>
                <th>2FA</th>
              </tr>
              <tr>
                <td>2020-12-02 07:50:18</td>
                <td>iMac Pro</td>
                <td><span class="popup__flag">🇻🇳</span> VN</td>
                <td>123.45.678.987</td>
                <td><svg class="icon icon-check">
                    <use xlink:href="img/sprite.svg#icon-check"></use>
                  </svg></td>
              </tr>
              <tr>
                <td>2020-12-02 07:50:18</td>
                <td>iPhone X</td>
                <td><span class="popup__flag">🇺🇸</span> USA </td>
                <td>123.45.678.987</td>
                <td><svg class="icon icon-check">
                    <use xlink:href="img/sprite.svg#icon-check"></use>
                  </svg></td>
              </tr>
              <tr>
                <td>2020-12-02 07:50:18</td>
                <td>iMac Pro</td>
                <td><span class="popup__flag">🇻🇳</span> VN</td>
                <td>123.45.678.987</td>
                <td><svg class="icon icon-check">
                    <use xlink:href="img/sprite.svg#icon-check"></use>
                  </svg></td>
              </tr>
              <tr>
                <td>2020-12-02 07:50:18</td>
                <td>iMac Pro</td>
                <td><span class="popup__flag">🇺🇸</span> USA </td>
                <td>123.45.678.987</td>
                <td><svg class="icon icon-check">
                    <use xlink:href="img/sprite.svg#icon-check"></use>
                  </svg></td>
              </tr>
              <tr>
                <td>2020-12-02 07:50:18</td>
                <td>iMac Pro</td>
                <td><span class="popup__flag">🇺🇸</span> USA </td>
                <td>123.45.678.987</td>
                <td><svg class="icon icon-check">
                    <use xlink:href="img/sprite.svg#icon-check"></use>
                  </svg></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div><!-- scripts-->


</body>

</html>


@endsection
