@extends('template.app')
@section('content')
<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- post Atas -->
            <div class="col-md-6">
                <div class="post post-thumb">
                    <a class="post-img" href="#"><img src="{{asset('front/img/post-1.jpg')}}" alt=""></a>
                    <div class="post-body">
                        <div class="post-meta">
                            <a class="post-category cat-2" href="category.html">JavaScript</a>
                            <span class="post-date">November 27, 2024</span>
                        </div>
                        <h3 class="post-title"><a href="#">Ekstensi Chrome Melindungi Terhadap
                                        CPU Berbasis JavaScript
                                        Serangan Saluran Samping</a></h3>
                    </div>
                </div>
            </div>
            <!-- /post Atas -->

            <!-- post Atas -->
            <div class="col-md-6">
                <div class="post post-thumb">
                    <a class="post-img" href="#"><img src="{{asset('front/img/post-2.jpg')}}" alt=""></a>
                    <div class="post-body">
                        <div class="post-meta">
                            <a class="post-category cat-3" href="#">PHP</a>
                            <span class="post-date">November 27, 2024</span>
                        </div>
                        <h3 class="post-title"><a href="blog-post.html"> PHP merupakan singkatan dari PHP : Hypertext Preprocessor adalah salah satu Bahasa scripting open source yang banyak digunakan oleh Web . </a></h3>
                    </div>
                </div>
            </div>
            <!-- /post  Atas-->
        </div>
        <!-- /row -->

        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Postingan terkini</h2>
                </div>
            </div>
            <div class="clearfix visible-md visible-lg"></div>
        </div>
        <!-- /row -->

        <!-- row -->
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="clearfix visible-md visible-lg"></div>

                    <!-- post Content-->
                    <div class="col-md-6">
                        <div class="post">
                            <a class="post-img" href="#"><img src="{{asset('front/img/post-4.jpg')}}"
                                    alt=""></a>
                            <div class="post-body">
                                <div class="post-meta">
                                    <a class="post-category cat-2" href="category.html">JavaScript</a>
                                    <span class="post-date">November 27, 2024</span>
                                </div>
                                <h3 class="post-title"><a href="blog-post.html">Ekstensi Chrome Melindungi Terhadap
                                        CPU Berbasis JavaScript
                                        Serangan Saluran Samping</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="post">
                            <a class="post-img" href="#"><img src="{{asset('front/img/post-4.jpg')}}"
                                    alt=""></a>
                            <div class="post-body">
                                <div class="post-meta">
                                    <a class="post-category cat-2" href="category.html">JavaScript</a>
                                    <span class="post-date">November 27, 2024</span>
                                </div>
                                <h3 class="post-title"><a href="blog-post.html">Ekstensi Chrome Melindungi Terhadap
                                        CPU Berbasis JavaScript
                                        Serangan Saluran Samping</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- /post Content -->

                    <div class="clearfix visible-md visible-lg"></div>
                </div>
            </div>

            <div class="col-md-4">
                <!-- post widget Terkait -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2>Paling Popoler</h2>
                    </div>
                    <div class="post post-widget">
                        <a class="post-img" href="#"><img src="{{asset('front/img/widget-2.jpg')}}"
                                alt=""></a>
                        <div class="post-body">
                            <h3 class="post-title"><a href="blog-post.html">Pagedraw UI Builder Mengubah Situs Web Anda
                                    Desain Maket
                                    Menjadi Kode Secara Otomatis</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- /row Terkait -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->

@endsection