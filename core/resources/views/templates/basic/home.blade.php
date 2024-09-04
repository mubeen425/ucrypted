@extends($activeTemplate . 'layouts.frontend')
@section('content')
    @php
        $banner   = getContent('banner.content', true);
        $elements = getContent('banner.element');
    @endphp
<style>

    .hero-countdown-wrap {
    background: black;
    border-radius: 16px;
    text-align: center;
    padding: 80px 90px;
    border: 1px solid rgba(255, 255, 255, 0.12);
}

.btns {
    user-select: none;
    -moz-user-select: none;
    background: var(--tg-white) none repeat scroll 0 0;
    border: medium none;
    border-radius: 30px;
    color: var(--tg-black);
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    font-size: 18px;
    font-weight: 700;
    letter-spacing: -0.42px;
    line-height: 1;
    margin-bottom: 0;
    padding: 24px 44px;
    text-align: center;
    text-transform: none;
    touch-action: manipulation;
    transition: all 0.4s ease;
    vertical-align: middle;
    white-space: nowrap;
}
.hero-countdown-wrap .banner-countdown-wrap {
    margin-top: 70px;
}
.hero-countdown-wrap .banner-countdown-wrap .time-count {
    display: flex;
    align-items: center;
    flex-direction: column-reverse;
    background: var(--tg-secondary-color);
    border-radius: 10px;
    min-width: 110px;
    color: var(--tg-paragraph-color);
    font-weight: 500;
    font-size: 14px;
    padding: 15px 15px 20px;
    position: relative;
    line-height: 1.4;
}
.hero-countdown-wrap .banner-countdown-wrap .time-count span {
    line-height: .9;
    font-size: 35px;
    font-weight: 700;
    color: var(--tg-white);
    font-family: var(--tg-heading-font-family);
    display: block;
    margin-top: 7px;
    margin-bottom: 0;
}
@media (max-width: 991px) {
    .hero-countdown-wrap {
        padding: 60px 50px;
    }
    .hero-countdown-wrap .banner-countdown-wrap .coming-time {
        gap: 30px 49px;
    }
    .hero-countdown-wrap .banner-countdown-wrap .coming-time .time-count:before,
    .hero-countdown-wrap .banner-countdown-wrap .coming-time .time-count:after {
        display: none;
    }
}
@media (max-width: 767px) {
    .hero-countdown-wrap {
        padding: 40px 30px;
    }
    .hero-countdown-wrap .banner-countdown-wrap .coming-time {
        gap: 30px 60px;
    }
}
@media (max-width: 375px) {
    .hero-countdown-wrap {
        padding: 40px 20px;
    }
}
.hero-countdown-wrap .hero-countdown-wrap-title {
    color: var(--tg-white);
    font-size: 40px;
    font-weight: 600;
    margin-bottom: 0;
    margin-top: -0.25em;
}
@media (max-width: 991px) {
    .hero-countdown-wrap .hero-countdown-wrap-title {
        font-size: 30px;
    }
}
@media (max-width: 767px) {
    .hero-countdown-wrap .hero-countdown-wrap-title {
        font-size: 24px;
    }
}
.hero-countdown-wrap .skill-feature_list {
    list-style: none;
    padding: 0;
    margin: 37px 0 25px;
    display: flex;
    justify-content: space-between;
    align-items: end;
}
.hero-countdown-wrap .skill-feature_list li {
    color: var(--tg-white);
    text-align: left;
    position: relative;
}
</style>
    <section class="banner-section">
        <div class="banner-section__shape light-mood">
            <img src="{{ asset($activeTemplateTrue . 'images/shapes/banner_1.png') }}">
        </div>
        <div class="banner-section__shape dark-mood">
            <img src="{{ asset($activeTemplateTrue . 'images/shapes/banner_1_dark.png') }}">
        </div>
        <div class="banner-section__shape-one light-mood">
            <img src="{{ asset($activeTemplateTrue . 'images/shapes/bg.png') }}">
        </div>
        <div class="banner-section__shape-one dark-mood">
            <img src="{{ asset($activeTemplateTrue . 'images/shapes/bg_dark.png') }}">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner-content ">
                        <h1 class="banner-content__title">
                            @php echo highLightedString(@$banner->data_values->heading); @endphp
                        </h1>
                        <p class="banner-content__desc">
                            @php echo highLightedString(@$banner->data_values->subheading,'fw-bold'); @endphp
                        </p>
                        <div class="banner-content__button d-flex align-items-center gap-3">
                            <a href="{{ @$banner->data_values->button_link }}" class="btn btn--base">
                                {{ __(@$banner->data_values->button_text) }}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-right">
                        <div class="banner-right__thumb">
                           <video poster="https://www.okx.com/cdn/assets/imgs/238/7400EDA3A1C0043A.png?x-oss-process=image/format,webp" class="index_animation__wghyD index_show__awyvo" title="video" autoplay="" loop="" muted="" playsinline="" width="282" height="585" src="https://www.okx.com/cdn/assets/files/237/C81A5CD8CA2D3072.mp4"></video>
                          <!--  <div class="banner-right__thumb-shape">
                                <img src="{{ getImage('assets/images/frontend/banner/' . @$banner->data_values->image_two, '155x155') }}">
                            </div> -->
                        </div>
                   <!--     <div class="banner-right__shape">
                            <img src="{{ getImage('assets/images/frontend/banner/' . @$banner->data_values->image_three, '450x285') }}">
                        </div> -->
                        <div class="banner-right__bg">
                            <div class="banner-right__shape-bg-one bg"></div>
                            <div class="banner-right__shape-bg-two bg"></div>
                            <div class="banner-right__shape-bg-three bg"></div>
                        </div>
                    </div>
                </div>
            </div>
            
              
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-slider">
                        @foreach ($elements as $element)
                            <div class="single-slider__item">
                                <span class="single-slider__desc">
                                    <span class="badge badge--success">{{ __(@$element->data_values->badge) }}</span>
                                    {{ __(@$element->data_values->title) }}
                                    <a href="{{ @$element->data_values->link }}" class="single-slider__link"> @lang('More') </a>
                                </span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
              <div class="container mt-5">
        <div class="hero-countdown-wrap">
            <h2 class="hero-countdown-wrap-title mt-5 mb-5">App</h2>
            <div class="row">
                <!-- Left column with image -->
                <div class="col-md-6">
                    <img src="https://www.okx.com/cdn/assets/imgs/231/0447318BCB7B22EB.png" class="img-fluid" alt="Image">
                </div>
                
                <!-- Right column with title, paragraph, and button -->
                <div class="col-md-6">
                    <h3 class="" style="font-size:44px; margin-top: 50px;">One wallet for all your needs</h3>
                    <p class="mb-4">
                        Enjoy access to the multi-chain DEX, NFT marketplace, DeFi, and thousands of DApps — all from one secure and easy-to-use wallet.
                    </p>
                    <a href="https://ucrypted.com/user/register" class="btns" style="background:white; color:black;">Get Started</a>
                </div>
            </div>
        </div>
    </div>
        </div>
    </section>


    @if ($sections->secs != null)
        @foreach (json_decode($sections->secs) as $sec)
            @include($activeTemplate . 'sections.' . $sec)
        @endforeach
    @endif
@endsection

@push('script-lib')
    <script src="{{ asset($activeTemplateTrue . 'js/slick.min.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'js/swiper.js') }}"></script>
@endpush

@push('style-lib')
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue . 'css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue . 'css/swiper.css') }}">
@endpush

@php app()->offsetSet('swiper_assets',true) @endphp
