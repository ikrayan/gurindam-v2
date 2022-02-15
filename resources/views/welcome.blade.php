@extends('onePage/body')

@section('konten')
    <section id="about" class="about-area pt-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="about-title text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h2 class="welcome"><b>Gurindam</b> Crafted to</h2>
                        <h3 class="title">Capture our <span>knowledge and context</span> in a discoverable
                            format to <span>unblock ourselves.</span></h3>
                    </div>
                </div>
            </div> <!-- row -->
            {{-- jargon gurindam --}}
            <div class="py-4">
                <div class="row no-gutters justify-content-center">
                    <div class="col-lg-4 col-md-7">
                        <div class="single-service d-flex wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="d-flex flex-column text-center">
                                <div class="service-icon mb-20">
                                    <img src="{{ asset('onepage/assets/images/service-1.png') }}" alt="Icon">
                                </div>
                                <div class="service-content media-body">
                                    <h4 class="service-title">Increase productivity</h4>
                                    <p class="text">If somebody somewhere has the right answer, suddenly you have
                                        it
                                        too, so collaborate better.</p>
                                </div>
                            </div>
                            <div class="shape shape-1">
                                <img src="{{ asset('onepage/assets/images/shape/shape-1.svg') }}" alt="shape">
                            </div>
                            <div class="shape shape-2">
                                <img src="{{ asset('onepage/assets/images/shape/shape-2.svg') }}" alt="shape">
                            </div>
                        </div> <!-- single service -->
                    </div>
                    <div class="col-lg-4 col-md-7">
                        <div class="single-service service-border d-flex wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay="0.5s">
                            <div class="d-flex flex-column text-center">
                                <div class="service-icon mb-20">
                                    <img style="width: 100px" src="{{ asset('onepage/assets/images/service-up2.png') }}"
                                        alt="Icon">
                                </div>
                                <div class="service-content media-body">
                                    <h4 class="service-title">Accelerate Service time</h4>
                                    <p class="text">Shorten the time between initial idea and realization. Take
                                        delays
                                        and misinformation out of the equation.</p>
                                </div>
                            </div>
                            <div class="shape shape-3">
                                <img src="{{ asset('onepage/assets/images/shape/shape-3.svg') }}" alt="shape">
                            </div>
                        </div> <!-- single service -->
                    </div>
                    <div class="col-lg-4 col-md-7">
                        <div class="single-service d-flex wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
                            <div class="d-flex flex-column text-center">
                                <div class="service-icon mb-20">
                                    <img src="{{ asset('onepage/assets/images/service-3.png') }}" alt="Icon">
                                </div>
                                <div class="service-content media-body">
                                    <h4 class="service-title">Protect institutional knowledge</h4>
                                    <p class="text">People come and people go, but if we capture our contributions
                                        in
                                        one central place, that expertise sticks around.</p>
                                </div>
                            </div>
                            <div class="shape shape-4">
                                <img src="{{ asset('onepage/assets/images/shape/shape-4.svg') }}" alt="shape">
                            </div>
                            <div class="shape shape-5">
                                <img src="{{ asset('onepage/assets/images/shape/shape-5.svg') }}" alt="shape">
                            </div>
                        </div> <!-- single service -->
                    </div>
                </div>
            </div>
            {{-- end jargon gurindam --}}

            <div class="row justify-content-center pt-60">
                <div class="col-lg-10">
                    <div class="about-content">
                        <div class="about-counter">
                            <div class="row">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <div class="single-counter counter-color-1 mt-30 d-flex wow fadeInUp"
                                        data-wow-duration="1s" data-wow-delay="0.3s">
                                        <div class="counter-shape">
                                            <span class="shape-1"></span>
                                            <span class="shape-2"></span>
                                        </div>
                                        <div class="counter-content media-body">
                                            <span class="counter-count"><span class="counter">1000</span></span>
                                            <p class="text">Knowledge</p>
                                        </div>
                                    </div> <!-- single counter -->
                                </div>
                                <div class="col-sm-4">
                                    <div class="single-counter counter-color-2 mt-30 d-flex wow fadeInUp"
                                        data-wow-duration="1s" data-wow-delay="0.6s">
                                        <div class="counter-shape">
                                            <span class="shape-1"></span>
                                            <span class="shape-2"></span>
                                        </div>
                                        <div class="counter-content media-body">
                                            <span class="counter-count"><span class="counter">99</span>%</span>
                                            <p class="text">Answered Questions</p>
                                        </div>
                                    </div> <!-- single counter -->
                                </div>
                                <div class="col-sm-3">
                                    <div class="single-counter counter-color-3 mt-30 d-flex wow fadeInUp"
                                        data-wow-duration="1s" data-wow-delay="0.9s">
                                        <div class="counter-shape">
                                            <span class="shape-1"></span>
                                            <span class="shape-2"></span>
                                        </div>
                                        <div class="counter-content media-body">
                                            <span class="counter-count"><span class="counter">100</span></span>
                                            <p class="text">Forums</p>
                                        </div>
                                    </div> <!-- single counter -->
                                </div>
                            </div> <!-- row -->
                        </div> <!-- about counter -->
                    </div> <!-- about content -->
                </div>
            </div>
        </div>
    </section>
@endsection
