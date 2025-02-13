<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $appName }}</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicons/Favicon.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicons/Favicon.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicons/Favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('PointSpace/register/css/global.css') }}" />
    <link rel="stylesheet" href="{{ asset('PointSpace/register/css/styleguide.css') }}" />
    <link rel="stylesheet" href="{{ asset('PointSpace/register/css/style.css') }}" />
  </head>
  <body>
    <div class="landing-v">
      <div class="div">
        <div class="navigation-web">
          <div class="currency">
            <div class="link">
              <div class="icon"></div>
              <div class="lable">USD</div>
            </div>
          </div>
          <div class="language">
            <div class="link-2">
              <div class="icon"></div>
              <div class="lable">English</div>
            </div>
          </div>
          <div class="text-wrapper">Privacy Policy</div>
          <div class="text-wrapper-2">Term of Use</div>
          <p class="element-all-rights-re">© 2024 All rights reserved</p>
        </div>
        <div class="footer-links-wrapper">
          <div class="footer-links">
            <div class="text-wrapper-3">About</div>
            <div class="text-wrapper-4">Community</div>
            <div class="text-wrapper-5">Become host</div>
            <div class="text-wrapper-6">Bookings support</div>
            <div class="flexcontainer">
              <p class="text-i">
                <span class="span">About PointSpaceHow it works<br /></span>
              </p>
              <p class="text-i">
                <span class="span">Newsroom<br /></span>
              </p>
              <p class="text-i"><span class="span">Media</span></p>
            </div>
            <div class="flexcontainer-i">
              <p class="text-i">
                <span class="span">Diversity &amp; Belonging<br /></span>
              </p>
              <p class="text-i">
                <span class="span">Against Discrimination<br /></span>
              </p>
              <p class="text-i">
                <span class="span">Accessibility<br /></span>
              </p>
              <p class="text-i"><span class="span">Invite friends</span></p>
            </div>
            <div class="flexcontainer-2">
              <p class="text-i">
                <span class="span">Host your space<br /></span>
              </p>
              <p class="text-i">
                <span class="span">Resource Center<br /></span>
              </p>
              <p class="text-i"><span class="span">Success StoriesCommunity</span></p>
            </div>
            <div class="flexcontainer-3">
              <p class="text-i">
                <span class="span">Help Center<br /></span>
              </p>
              <p class="text-i">
                <span class="span">Cancellation<br /></span>
              </p>
              <p class="text-i">
                <span class="span">Refund<br /></span>
              </p>
              <p class="text-i"><span class="span">Trust &amp; Safety</span></p>
            </div>
          </div>
        </div>
        <header class="header">
          <p class="find-homes-or-hotels">
            <span class="text-wrapper-7">Find Your Office Spaceor Working Space</span>
            <span class="text-wrapper-8">in few clicks</span>
          </p>
          <div class="video">
            <p class="we-are-running-our-s">Get special offer 30%OFF for first order</p>
            <p class="watch-video-to-learn">Watch video to learn more</p>
            <div class="buttons-icon-active"><div class="icon-2"></div></div>
          </div>
          <div class="search">
            <div class="overlap-group">
              <div class="forms-selectbox">
                <div class="icon-3"></div>
                <div class="placeholder">Bandung</div>
                <div class="field-title">Location</div>
              </div>
              <div class="forms-selectbox-2">
                <div class="icon-4"></div>
                <div class="placeholder">Office Space</div>
                <div class="field-title">Type</div>
              </div>
              <img class="line" src="img/line.svg" />
            </div>
            <div class="icon-wrapper"><div class="icon-5"></div></div>
          </div>
          <div class="menu">
            <div class="sign-up">
              <div class="overlap-group-2">
                <div class="text-wrapper-9">Sign Up</div>
                <div class="buttons-icon-resting"><div class="icon-6"></div></div>
              </div>
            </div>
            <div class="logo-full">
              <img class="logo-dark-icon" src="{{ asset('PointSpace/img/dark-icon.svg') }}" />
              <div class="roomsfy">PointSpace</div>
            </div>
            <div class="buttons-filled">
              <div class="overlap"><div class="lable-2">Sign in</div></div>
            </div>
          </div>
        </header>
        <div class="frame">
          <div class="browse-by-category">
            <div class="overlap-group-3">
              <img class="bg" src="{{ asset('PointSpace/img/bg.png') }}" />
              <div class="item">
                <img class="img" src="{{ asset('PointSpace/img/img-2.png') }}" />
                <div class="text-wrapper-10">Office Space</div>
                <div class="text-wrapper-11">12 office spaces</div>
              </div>
              <div class="item-2">
                <img class="img" src="{{ asset('PointSpace/img/img-5.png') }}" />
                <div class="text-wrapper-10">Coworking Space</div>
                <div class="text-wrapper-11">124 coworking spaces</div>
              </div>
              <div class="item-3">
                <img class="img" src="{{ asset('PointSpace/img/img-4.png') }}" />
                <div class="text-wrapper-10">Virtual Office</div>
                <div class="text-wrapper-11">14 virtual offices</div>
              </div>
              <div class="item-4">
                <img class="img" src="{{ asset('PointSpace/img/img-3.png') }}" />
                <div class="text-wrapper-10">Meeting Room</div>
                <div class="text-wrapper-11">15 meeting rooms</div>
              </div>
              <div class="browse-by-property-t">Browse by Category</div>
              <div class="icon-7"></div>
              <div class="icon-8"></div>
            </div>
          </div>
          <div class="popular">
            <div class="overlap-group-wrapper">
              <div class="overlap-group-4">
                <div class="text-wrapper-12">PointLab Banda</div>
                <p class="element-night">Rp 250.000 - Rp 500.000</p>
                <p class="text-wrapper-13">Jl. Banda No 30 Bandung</p>
                <img class="img-2" src="img/img.png" />
                <div class="rating">
                  <div class="text-wrapper-14">4.91</div>
                  <div class="text-wrapper-15">(98)</div>
                  <div class="star"></div>
                </div>
              </div>
            </div>
            <div class="overlap-wrapper">
              <div class="overlap-group-4">
                <div class="text-wrapper-12">Block 71</div>
                <p class="p">Rp 250.000 - Rp 500.000</p>
                <p class="text-wrapper-13">Jl. Ir H. Juanda 131 Bandung</p>
                <img class="img-2" src="img/img-6.png" />
                <div class="rating">
                  <div class="text-wrapper-16">4.65</div>
                  <div class="text-wrapper-15">(93)</div>
                  <div class="star"></div>
                </div>
              </div>
            </div>
            <div class="div-wrapper">
              <div class="overlap-group-4">
                <div class="text-wrapper-12">NextSpace</div>
                <p class="element-night-2">Rp 250.000 - Rp 500.000</p>
                <div class="text-wrapper-13">Jl. Trunojoyo 11 ,Bandung</div>
                <img class="img-3" src="img/img-7.png" />
                <div class="rating">
                  <div class="text-wrapper-14">4.55</div>
                  <div class="text-wrapper-15">(35)</div>
                  <div class="star"></div>
                </div>
              </div>
            </div>
            <div class="popular-aparments-ne">Popular space near you</div>
            <div class="buttons-icon-with">
              <div class="link-3">
                <div class="icon-9"></div>
                <div class="lable-3">Load more</div>
              </div>
            </div>
          </div>
          <div class="testimoni">
            <div class="frame-2">
              <div class="text"><div class="text-wrapper-17">What they say ?</div></div>
            </div>
            <div class="boxes">
              <div class="element">
                <div class="group">
                  <div class="group-2">
                    <div class="text-2">
                      <div class="text-wrapper-18">Nina Sabilla</div>
                      <div class="text-wrapper-19">Freelance Designer</div>
                    </div>
                    <img class="stars" src="img/stars.png" />
                    <img class="mask-group" src="img/mask-group-3.png" />
                  </div>
                  <p class="great-workspace-with">
                    &#34;Great workspace with a productive atmosphere and fast Wi-Fi. Love the cozy setup and friendly
                    community!&#34;
                  </p>
                </div>
              </div>
              <div class="group-wrapper">
                <div class="group-3">
                  <div class="group-4">
                    <div class="group-2">
                      <div class="text-2">
                        <div class="text-wrapper-20">Andre Susanto</div>
                        <div class="text-wrapper-19">UI/UX Designer</div>
                      </div>
                      <img class="stars" src="img/stars-2.png" />
                      <img class="mask-group" src="img/mask-group.png" />
                    </div>
                    <p class="great-workspace-with">
                      &#34;Great workspace with a productive atmosphere and fast Wi-Fi. Love the cozy setup and friendly
                      community!&#34;
                    </p>
                  </div>
                </div>
              </div>
              <div class="element-2">
                <div class="group-5">
                  <div class="group-6">
                    <div class="group-7">
                      <div class="text-2">
                        <div class="text-wrapper-21">Hanifah Latief</div>
                        <div class="text-wrapper-22">Web Developer</div>
                      </div>
                      <img class="stars-2" src="img/stars-3.png" />
                      <img class="mask-group" src="img/mask-group-2.png" />
                    </div>
                    <p class="great-workspace-with-2">
                      &#34;Great workspace with a productive atmosphere and fast Wi-Fi. Love the cozy setup and friendly
                      community!&#34;
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>