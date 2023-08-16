@include('layouts.header')
<!-- Blog Single Post Section -->

<section id="blog-single-post">
    <div class="container">
        <div class="row">

            <div class="col-md-offset-1 col-md-10 col-sm-12">
                <div class="blog-single-post-thumb">


                    <div class="blog-post-title">
                        <h2>{{ $post->title }}</h2>
                    </div>

                    <div class="blog-post-format">
                        <span><a href="#"><img src="{{ asset('assets/images/author-image1.jpg') }}" class="img-responsive img-circle"> Jen Lopez</a></span>
                        <span><i class="fa fa-date"></i> {{ $post->updated_at }}</span>
                        <span><a href="#"><i class="fa fa-comment-o"></i> 124 Comments</a></span>
                    </div>

                    <div class="blog-post-des">
                        <p>{{ $post->description }}</p>
                    </div>

                    <p>{{ $post->content }}</p>

                    <div class="blog-author">
                        <div class="media">
                            <div class="media-object pull-left">
                                <img src="{{ asset('assets/images/author-image1.jpg') }}" class="img-circle img-responsive" alt="blog">
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading"><a href="#">Jen Lopez ( Designer )</a></h3>
                            </div>
                        </div>
                    </div>

                    <div class="blog-comment">
                        <h3>Comments</h3>
                        <div class="media">
                            <div class="media-object pull-left">
                                <img src="{{ asset('assets/images/comment-image1.jpg') }}" class="img-responsive img-circle" alt="Blog Image 11">
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">David Jones</h3>
                                <span>3 days ago</span>
                                <p>Aliquam gravida arcu at risus blandit, in interdum metus varius. Cras efficitur, ex sit amet tincidunt rhoncus, dui ex hendrerit risus, ac dapibus ligula mi id leo. In auctor dui justo, ac consequat dui posuere ac.</p>
                            </div>
                        </div>
                    </div>

                    <div class="blog-comment-form">
                        <h3>Написать комментарий</h3>
                        <form action="#" method="post">
                            <input type="text" class="form-control" placeholder="Name" name="name" required>
                            <input type="email" class="form-control" placeholder="Email" name="email" required>
                            <textarea name="message" rows="5" class="form-control" id="message" placeholder="Message" message="message" required="required"></textarea>
                            <div class="col-md-3 col-sm-4">
                                <input name="submit" type="submit" class="form-control" id="submit" value="Post Your Comment">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer Section -->
@include('layouts.footer')
