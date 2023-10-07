<x-layouts.header></x-layouts.header>
<!-- Page Header Start -->
<div class="container-fluid bg-primary py-5 mb-5">
    <div class="container py-5">
        <div class="row align-items-center py-4">
            <div class="col-md-6 text-center text-md-left">
                <h1 class="display-4 mb-4 mb-md-0 text-secondary text-uppercase">Blog</h1>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <div class="d-inline-flex align-items-center">
                    <a class="btn btn-sm btn-outline-light" href="">Home</a>
                    <i class="fas fa-angle-double-right text-light mx-2"></i>
                    <a class="btn btn-sm btn-outline-light disabled" href="">Blog</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Blog Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row align-items-end mb-4">
            <div class="col-lg-6">
                <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Latest Blog</h6>
                <h1 class="section-title mb-3">Latest Articles From Our Blog Post</h1>
            </div>
            <div class="col-lg-6">
                <h4 class="font-weight-normal text-muted mb-3">Eirmod kasd duo eos et magna, diam dolore stet sea clita sit ea erat lorem. Ipsum eos ipsum magna lorem stet</h4>
            </div>
        </div>
        <div class="row">
            @foreach($posts as $post)
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded w-100" src="img/blog-1.jpg" alt="">
                    <div class="blog-date">
                        <h4 class="font-weight-bold mb-n1">11</h4>
                        <small class="text-white text-uppercase">Jan</small>
                    </div>
                </div>
                <div class="d-flex mb-2">
                    <a class="text-secondary text-uppercase font-weight-medium" href="">Admin</a>
                    <span class="text-primary px-2">|</span>
                    <a class="text-secondary text-uppercase font-weight-medium" href="">{{$post->title}}</a>
                </div>
                <h5 class="font-weight-medium mb-2">{{$post->short_content}}</h5>
                <p class="mb-4">{{$post->content}}</p>
                <a class="btn btn-sm btn-primary py-2" href="{{ route('posts.show', ["post" =>$post->id])}}">Read more</a>
            </div>
            @endforeach
    </div>
</div>
<!-- Blog End -->
<x-layouts.footer></x-layouts.footer>

</div>
