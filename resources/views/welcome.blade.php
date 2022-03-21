@extends('onePage.body')

@section('konten')
    <section id="content" class="our-services-area pt-60 pb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <div class="section-title text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h4 class="sub-title">Our <b>Knowledge</b></h4>
                        <h5 class="title mt-10">Bunch of Scribbles <span>to Rock Your Brain</span></h5>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->

            {{-- scroll konten nyamping --}}
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="our-services-tab pt-30">
                        <ul class="nav justify-content-center wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s"
                            id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="active" id="knowledge-tab" data-toggle="tab" href="#knowledge" role="tab"
                                    aria-controls="knowledge" aria-selected="true">
                                    <i class="lni-graduation"></i> <span>Knowledge <br> Base</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a id="article-tab" data-toggle="tab" href="#article" role="tab" aria-controls="article"
                                    aria-selected="false">
                                    <i class="lni-paperclip"></i> <span>Articles <br> </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a id="forum-tab" data-toggle="tab" href="#forum" role="tab" aria-controls="forum"
                                    aria-selected="false">
                                    <i class="lni-handshake"></i> <span>Forums <br> </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a id="market-tab" data-toggle="tab" href="#market" role="tab" aria-controls="market"
                                    aria-selected="false">
                                    <i class="lni-reply"></i> <span>Q n A <br> </span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            {{-- tab knowledge --}}
                            <div class="tab-pane fade show active" id="knowledge" role="tabpanel"
                                aria-labelledby="knowledge-tab">
                                <div class="row justify-content-center">
                                    @foreach ($posts as $post)
                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                            <div class="single-blog mt-30 wow fadeInUpBig p-3 border-left border-bottom"
                                                data-wow-duration="1s" data-wow-delay="0.4s">
                                                <div class="blog-image">
                                                    <a href="/post/{{ $post['slug'] }}"><img
                                                            src="https://picsum.photos/200?random={{ $post['no'] }}"
                                                            alt="knowledge"></a>
                                                </div>
                                                <div class="blog-content">
                                                    <h4 class="blog-title">
                                                        <a href="/post/{{ $post['slug'] }}">{{ $post['title'] }}</a>
                                                    </h4>
                                                    <div class="blog-author d-flex align-items-center">
                                                        <div class="author-image">
                                                            <img src="https://picsum.photos/50?grayscale&random={{ $post['no'] }}"
                                                                alt="author">
                                                        </div>
                                                        <div class="author-content media-body">
                                                            <h6 class="sub-title">Posted by</h6>
                                                            <p class="text">{{ $post['title'] }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- single blog -->
                                        </div>
                                    @endforeach
                                </div> <!-- row -->
                            </div>
                            {{-- end tab knowledge --}}
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
