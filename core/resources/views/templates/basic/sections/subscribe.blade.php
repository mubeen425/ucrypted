@php
$content = getContent('subscribe.content',true);
@endphp
 <!--==============================
    Partner Area
    ==============================-->
    <div class="pt-130 bg-black2">
        <div class="container">
            <div class="section-title text-center mb-50">
                <h2 class="title style2">Our partners</h2>
            </div>
            <div class="slider-area">
                <div class="row partner-slider1">
                    <div class="col-lg-4">
                        <div class="partner-card">
                            <div class="partner-card-img">
                                <img src="assets/img/update/client/client-1-4.svg" alt="img">
                            </div>
                            <p class="partner-card-text">Stable crypto currency and an important part of the UniFox ecosystem</p>
                            <a class="btn btn3" href="blog.html">EXPLORE</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="partner-card">
                            <div class="partner-card-img">
                                <img src="assets/img/update/client/client-1-2.svg" alt="img">
                            </div>
                            <p class="partner-card-text">Online exchanger, specializing in the exchange of private
                                individuals</p>
                            <a class="btn btn3" href="blog.html">EXPLORE</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="partner-card">
                            <div class="partner-card-img">
                                <img src="assets/img/update/client/client-1-5.svg" alt="img">
                            </div>
                            <p class="partner-card-text">A company that provides all IT services within the ecosystem of UniFox</p>
                            <a class="btn btn3" href="blog.html">EXPLORE</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="partner-card">
                            <div class="partner-card-img">
                                <img src="assets/img/update/client/client-1-4.svg" alt="img">
                            </div>
                            <p class="partner-card-text">Stable crypto currency and an important part of the UniFox ecosystem</p>
                            <a class="btn btn3" href="blog.html">EXPLORE</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="partner-card">
                            <div class="partner-card-img">
                                <img src="assets/img/update/client/client-1-2.svg" alt="img">
                            </div>
                            <p class="partner-card-text">Online exchanger, specializing in the exchange of private
                                individuals</p>
                            <a class="btn btn3" href="blog.html">EXPLORE</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="partner-card">
                            <div class="partner-card-img">
                                <img src="assets/img/update/client/client-1-5.svg" alt="img">
                            </div>
                            <p class="partner-card-text">A company that provides all IT services within the ecosystem of UniFox</p>
                            <a class="btn btn3" href="blog.html">EXPLORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<section class="subscribe-section py-120">
    <div class="container">
        <div class="subscribe-wrapper section-bg">
            <div class="subscribe-wrapper__shape">
                <img src="{{ getImage('assets/images/frontend/subscribe/'.@$content->data_values->shape_image_one,'30x30') }}">
            </div>
            <div class="subscribe-wrapper__shape-one">
                <img src="{{ getImage('assets/images/frontend/subscribe/'.@$content->data_values->shape_image_one,'30x30') }}">
            </div>
            <div class="row justify-content-center gy-4 align-items-center">
                <div class="col-lg-6">
                    <div class="subscribe-wrapper__thumb">
                        <img src="{{ getImage('assets/images/frontend/subscribe/'.@$content->data_values->image,'500x330') }}">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="subscribe-wrapper__item">
                        <span class="subscribe-wrapper__subtitle">
                            @php echo __(@$content->data_values->heading); @endphp
                        </span>
                        <h3 class="subscribe-wrapper__title"> @php echo __(@$content->data_values->subheading); @endphp </h3>
                        <form class="subscribe-wrapper__form d-flex justify-content-between " id="subscribe-form">
                            <input type="email" name="email" class="form--control" placeholder="{{ __(@$content->data_values->placeholder) }}">
                            <button class="btn btn--base" type="submit"> {{ __(@$content->data_values->button_text) }} </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('script')
<script>
    "use strict";
    (function ($) {
        $('#subscribe-form').on('submit', function (e) {
            e.preventDefault();
            let formData = new FormData($(this)[0]);
            let $this    = $(this);
            $.ajax({
                headers: { 'X-CSRF-TOKEN': "{{ csrf_token() }}" },
                url: "{{ route('subscribe') }}",
                method: "POST",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function () {
                    $this.find('button[type=submit]').html(`
                        <span class="right-sidebar__button-icon">
                            <i class="las la-spinner la-spin"></i>
                        </span>`
                    ).attr('disabled',true);
                },
                complete: function (e) {
                    $this.find('button[type=submit]').html(`{{ __(@$content->data_values->button_text) }}`
                    ).attr('disabled', false);
                },
                success: function (resp) {
                    if (resp.success) {
                        notify('success', resp.message);
                    } else {
                        notify('error', resp.message || resp.error);
                    }
                }
            });
        });
    })(jQuery);
</script>
@endpush
