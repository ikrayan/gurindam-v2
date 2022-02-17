@extends('onePage.navbar')

@section('konten')
    <div class="row justify-content-center">
        <div class="col-lg-9">
            <div class="single-blog mt-30 wow fadeInUpBig p-3" data-wow-duration="1s" data-wow-delay="0.3s">
                <div class="blog-image">
                    <a href="blog-details.html"><img src="https://picsum.photos/1920/540?random={{ $post['no'] }}"
                            alt="knowledge"></a>
                </div>
                <div class="blog-content">
                    <h3 class="blog-title"> {{ $post['title'] }} </h3>
                    <p>{{ $post['body'] }}</p>
                    <div class="blog-author d-flex align-items-center mt-3 pt-3 border-top">
                        <div class="author-image">
                            <img src="https://picsum.photos/50?grayscale&random={{ $post['no'] }}" alt="author">
                        </div>
                        <div class="author-content media-body">
                            <h6 class="sub-title">Posted by</h6>
                            <p class="text">{{ $post['title'] }}</p>
                        </div>
                    </div>
                </div>
                <a href="/" class="btn btn-danger rounded-pill mt-5 ">Back Home</a>
            </div> <!-- single blog -->

        </div>
    </div>

    </div>
    </div>
@endsection
