@include('layouts.header')
<!-- Blog Section -->

<section id="blog">
    <div class="container">
        <div class="row">
            @foreach($posts as $post)
            <div class="col-md-offset-1 col-md-10 col-sm-12">
                <div class="blog-post-thumb">
                    <div class="blog-post-image">
                        <a href="single-post.html">
                            <img src="images/blog-image1.jpg" class="img-responsive" alt="Blog Image">
                        </a>
                    </div>
                    <div class="blog-post-title">
                        <h3><a href="single-post.html">{{ $post->title }}</a></h3>
                    </div>
                    <div class="blog-post-format">
                        <span><a href="#"><img src="images/author-image1.jpg" class="img-responsive img-circle"> Jen Lopez</a></span>
                        <span><i class="fa fa-date"></i> {{ $post->updated_at }}</span>
                        <span><a href="#"><i class="fa fa-comment-o"></i> 35 Comments</a></span>
                    </div>
                    <div class="blog-post-des">
                        <p>{{ $post->description }}</p>
                        <a href="single-post.html" class="btn btn-default">Читать далее</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@include('layouts.footer')
