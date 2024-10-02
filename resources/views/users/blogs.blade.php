@extends('layouts.userlayout')
@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<div class="breacrumb-cover">
    <div class="container">
        <ul class="breadcrumbs">
            <li><a href="#">Home</a></li>
            <li>Blog</li>
        </ul>
    </div>
</div>
<div class="archive-header pt-50 pb-50 text-center">
    <div class="container">
        <h3 class="mb-30 text-center w-75 mx-auto">
            Relevant news and more for you. Welcome to our blog
        </h3>
        <div class="text-center">
            <div class="sub-categories">
                <a href="#" class="btn btn-tags-sm mb-10 mr-5">Recruitment</a>
                <a href="#" class="btn btn-tags-sm mb-10 mr-5">Branding</a>
                <a href="#" class="btn btn-tags-sm mb-10 mr-5">Workplage</a>
                <a href="#" class="btn btn-tags-sm mb-10 mr-5">Job Tips</a>
                <a href="#" class="btn btn-tags-sm mb-10 mr-5">Contributors</a>
            </div>
        </div>
    </div>
</div>
<div class="post-loop-grid">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="post-listing">
                    <div class="card-blog-1 mb-30 post-list hover-up wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                        <figure class="post-thumb">
                            <a href="{{route('users.blogpreview')}}">
                                <img alt="jobhub" src="assets/imgs/blog/thumb-1.png">
                            </a>
                        </figure>
                        <div class="card-block-info">
                            <h3 class="post-title mb-15"><a href="{{route('users.blogpreview')}}">21 Job Interview Tips: How To Make a Great Impression</a></h3>
                            <div class="post-meta text-muted d-flex align-items-center mb-15">
                                <div class="author d-flex align-items-center mr-30">
                                    <img alt="jobhub" src="assets/imgs/avatar/ava_16.png">
                                    <span>Steven</span>
                                </div>
                                <div class="date">
                                    <span><i class="fi-rr-edit mr-5 text-grey-6"></i>06 Sep 2022</span>
                                </div>
                            </div>
                            <p class="post-excerpt text-muted d-none d-lg-block">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ab, dicta minus aspernatur magnam atque excepturi.
                            </p>
                            <div class="card-2-bottom mt-30">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="keep-reading">
                                        <a href="{{route('users.blogpreview')}}" class="btn btn-border btn-brand-hover">Keep reading</a>
                                    </div>
                                    <div class="tags text-lg-end">
                                        <a href="#" class="btn btn-tags-sm mb-10 mr-5">Full-time</a>
                                        <a href="#" class="btn btn-tags-sm mb-10 mr-5">Brand</a>
                                        <a href="#" class="mt-10"><img alt="jobhub" src="assets/imgs/theme/icons/bookmark.svg"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end .card-blog-1-->
                    <div class="card-blog-1 mb-30 post-list hover-up wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                        <figure class="post-thumb">
                            <a href="{{route('users.blogpreview')}}">
                                <img alt="jobhub" src="assets/imgs/blog/thumb-2.png">
                            </a>
                        </figure>
                        <div class="card-block-info">
                            <h3 class="post-title mb-15"><a href="{{route('users.blogpreview')}}">Leveraging Job Rejection as a Catalyst for Growth</a></h3>
                            <div class="post-meta text-muted d-flex align-items-center mb-15">
                                <div class="author d-flex align-items-center mr-30">
                                    <img alt="jobhub" src="assets/imgs/avatar/ava_1.png">
                                    <span>Steven</span>
                                </div>
                                <div class="date">
                                    <span><i class="fi-rr-edit mr-5 text-grey-6"></i>06 Sep 2022</span>
                                </div>
                            </div>
                            <p class="post-excerpt text-muted d-none d-lg-block">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ab, dicta minus aspernatur magnam atque excepturi.
                            </p>
                            <div class="card-2-bottom mt-30">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="keep-reading">
                                        <a href="{{route('users.blogpreview')}}" class="btn btn-border btn-brand-hover">Keep reading</a>
                                    </div>
                                    <div class="tags text-lg-end">
                                        <a href="#" class="btn btn-tags-sm mb-10 mr-5">Remote</a>
                                        <a href="#" class="btn btn-tags-sm mb-10 mr-5">Adobe</a>
                                        <a href="#" class="mt-10"><img alt="jobhub" src="assets/imgs/theme/icons/bookmark.svg"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end .card-blog-1-->
                    <div class="card-blog-1 mb-30 post-list hover-up wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                        <figure class="post-thumb">
                            <a href="blog-single.html">
                                <img alt="jobhub" src="assets/imgs/blog/thumb-3.png">
                            </a>
                        </figure>
                        <div class="card-block-info">
                            <h3 class="post-title mb-15"><a href="blog-single.html">How to get better agents in NYC on the global</a></h3>
                            <div class="post-meta text-muted d-flex align-items-center mb-15">
                                <div class="author d-flex align-items-center mr-30">
                                    <img alt="jobhub" src="assets/imgs/avatar/ava_1.png">
                                    <span>Steven</span>
                                </div>
                                <div class="date">
                                    <span><i class="fi-rr-edit mr-5 text-grey-6"></i>06 Sep 2022</span>
                                </div>
                            </div>
                            <p class="post-excerpt text-muted d-none d-lg-block">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ab, dicta minus aspernatur magnam atque excepturi.
                            </p>
                            <div class="card-2-bottom mt-30">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="keep-reading">
                                        <a href="blog-single.html" class="btn btn-border btn-brand-hover">Keep reading</a>
                                    </div>
                                    <div class="tags text-lg-end">
                                        <a href="#" class="btn btn-tags-sm mb-10 mr-5">UI/UX</a>
                                        <a href="#" class="btn btn-tags-sm mb-10 mr-5">Freelancer</a>
                                        <a href="#" class="mt-10"><img alt="jobhub" src="assets/imgs/theme/icons/bookmark.svg"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end .card-blog-1-->
                    <div class="card-blog-1 mb-30 post-list hover-up wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                        <figure class="post-thumb">
                            <a href="blog-single.html">
                                <img alt="jobhub" src="assets/imgs/blog/thumb-4.png">
                            </a>
                        </figure>
                        <div class="card-block-info">
                            <h3 class="post-title mb-15"><a href="blog-single.html">Job Venue where you will get your dream</a></h3>
                            <div class="post-meta text-muted d-flex align-items-center mb-15">
                                <div class="author d-flex align-items-center mr-30">
                                    <img alt="jobhub" src="assets/imgs/avatar/ava_1.png">
                                    <span>Steven</span>
                                </div>
                                <div class="date">
                                    <span><i class="fi-rr-edit mr-5 text-grey-6"></i>06 Sep 2022</span>
                                </div>
                            </div>
                            <p class="post-excerpt text-muted d-none d-lg-block">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ab, dicta minus aspernatur magnam atque excepturi.
                            </p>
                            <div class="card-2-bottom mt-30">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="keep-reading">
                                        <a href="blog-single.html" class="btn btn-border btn-brand-hover">Keep reading</a>
                                    </div>
                                    <div class="tags text-lg-end">
                                        <a href="#" class="btn btn-tags-sm mb-10 mr-5">Figma</a>
                                        <a href="#" class="btn btn-tags-sm mb-10 mr-5">Adobe XD</a>
                                        <a href="#" class="mt-10"><img alt="jobhub" src="assets/imgs/theme/icons/bookmark.svg"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end .card-blog-1-->
                    <div class="card-blog-1 mb-30 post-list hover-up wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                        <figure class="post-thumb">
                            <a href="blog-single.html">
                                <img alt="jobhub" src="assets/imgs/blog/thumb-5.png">
                            </a>
                        </figure>
                        <div class="card-block-info">
                            <h3 class="post-title mb-15"><a href="blog-single.html">Job Gifts sales are going down this year, find out why</a></h3>
                            <div class="post-meta text-muted d-flex align-items-center mb-15">
                                <div class="author d-flex align-items-center mr-30">
                                    <img alt="jobhub" src="assets/imgs/avatar/ava_15.png">
                                    <span>Steven</span>
                                </div>
                                <div class="date">
                                    <span><i class="fi-rr-edit mr-5 text-grey-6"></i>06 Sep 2022</span>
                                </div>
                            </div>
                            <p class="post-excerpt text-muted d-none d-lg-block">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ab, dicta minus aspernatur magnam atque excepturi.
                            </p>
                            <div class="card-2-bottom mt-30">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="keep-reading">
                                        <a href="blog-single.html" class="btn btn-border btn-brand-hover">Keep reading</a>
                                    </div>
                                    <div class="tags text-lg-end">
                                        <a href="#" class="btn btn-tags-sm mb-10 mr-5">Figma</a>
                                        <a href="#" class="btn btn-tags-sm mb-10 mr-5">Adobe XD</a>
                                        <a href="#" class="mt-10"><img alt="jobhub" src="assets/imgs/theme/icons/bookmark.svg"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end .card-blog-1-->
                    <div class="card-blog-1 post-list hover-up wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                        <figure class="post-thumb">
                            <a href="blog-single.html">
                                <img alt="jobhub" src="assets/imgs/blog/thumb-6.png">
                            </a>
                        </figure>
                        <div class="card-block-info">
                            <h3 class="post-title mb-15"><a href="blog-single.html">Jewellery ideas for this outfit in 2021 and more</a></h3>
                            <div class="post-meta text-muted d-flex align-items-center mb-15">
                                <div class="author d-flex align-items-center mr-30">
                                    <img alt="jobhub" src="assets/imgs/avatar/ava_1.png">
                                    <span>Steven</span>
                                </div>
                                <div class="date">
                                    <span><i class="fi-rr-edit mr-5 text-grey-6"></i>06 Sep 2022</span>
                                </div>
                            </div>
                            <p class="post-excerpt text-muted d-none d-lg-block">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ab, dicta minus aspernatur magnam atque excepturi.
                            </p>
                            <div class="card-2-bottom mt-30">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="keep-reading">
                                        <a href="blog-single.html" class="btn btn-border btn-brand-hover">Keep reading</a>
                                    </div>
                                    <div class="tags text-lg-end">
                                        <a href="#" class="btn btn-tags-sm mb-10 mr-5">Figma</a>
                                        <a href="#" class="btn btn-tags-sm mb-10 mr-5">Adobe XD</a>
                                        <a href="#" class="mt-10"><img alt="jobhub" src="assets/imgs/theme/icons/bookmark.svg"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end .card-blog-1-->
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12 pl-40 pl-lg-15 mt-lg-30">
                <div class="widget_search mb-40">
                    <div class="search-form">
                        <form action="#">
                            <input type="text" placeholder="Search…">
                            <button type="submit"><i class="fi-rr-search"></i></button>
                        </form>
                    </div>
                </div>
                {{-- <div class="sidebar-shadow widget-categories">
                    <h5 class="sidebar-title">Category</h5>
                    <ul>
                        <li class="d-flex justify-content-between align-items-center">
                            <a href="blog-grid.html">Recruitment News</a>
                            <span class="count">28</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <a href="blog-grid.html">Job Venues</a>
                            <span class="count">32</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <a href="blog-grid.html">Full Time Job</a>
                            <span class="count">45</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <a href="blog-grid.html">Work From Home</a>
                            <span class="count">68</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <a href="blog-grid.html">Job Tips</a>
                            <span class="count">43</span>
                        </li>
                    </ul>
                </div> --}}
                <div class="sidebar-shadow sidebar-news-small">
                    <h5 class="sidebar-title">Latest news</h5>
                    <div class="post-list-small">
                        <div class="post-list-small-item d-flex align-items-center">
                            <figure class="thumb mr-15">
                                <img src="assets/imgs/blog/thumb-1.png" alt="">
                            </figure>
                            <div class="content">
                                <h5>You Should Have This Info Before Job Interview</h5>
                                <div class="post-meta text-muted d-flex align-items-center mb-15">
                                    <div class="author d-flex align-items-center mr-20">
                                        <img alt="jobhub" src="assets/imgs/avatar/ava_1.png">
                                        <span>Sarah</span>
                                    </div>
                                    <div class="date">
                                        <span>02 Oct</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-list-small-item d-flex align-items-center">
                            <figure class="thumb mr-15">
                                <img src="assets/imgs/blog/thumb-2.png" alt="">
                            </figure>
                            <div class="content">
                                <h5>How To Create a Resume for a Job in Social</h5>
                                <div class="post-meta text-muted d-flex align-items-center mb-15">
                                    <div class="author d-flex align-items-center mr-20">
                                        <img alt="jobhub" src="assets/imgs/avatar/ava_1.png">
                                        <span>Harding</span>
                                    </div>
                                    <div class="date">
                                        <span>17 Sep</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-list-small-item d-flex align-items-center">
                            <figure class="thumb mr-15">
                                <img src="assets/imgs/blog/thumb-3.png" alt="">
                            </figure>
                            <div class="content">
                                <h5>10 Ways to Avoid a Referee Disaster Zone</h5>
                                <div class="post-meta text-muted d-flex align-items-center mb-15">
                                    <div class="author d-flex align-items-center mr-20">
                                        <img alt="jobhub" src="assets/imgs/avatar/ava_1.png">
                                        <span>Steven</span>
                                    </div>
                                    <div class="date">
                                        <span>23 Sep</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-list-small-item d-flex align-items-center">
                            <figure class="thumb mr-15">
                                <img src="assets/imgs/blog/thumb-4.png" alt="">
                            </figure>
                            <div class="content">
                                <h5>How To Set Work-Life Boundaries From Any Location</h5>
                                <div class="post-meta text-muted d-flex align-items-center mb-15">
                                    <div class="author d-flex align-items-center mr-20">
                                        <img alt="jobhub" src="assets/imgs/avatar/ava_1.png">
                                        <span>Merias</span>
                                    </div>
                                    <div class="date">
                                        <span>14 Sep</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-list-small-item d-flex align-items-center">
                            <figure class="thumb mr-15">
                                <img src="assets/imgs/blog/thumb-5.png" alt="">
                            </figure>
                            <div class="content">
                                <h5>How to Land Your Dream Marketing Job</h5>
                                <div class="post-meta text-muted d-flex align-items-center mb-15">
                                    <div class="author d-flex align-items-center mr-20">
                                        <img alt="jobhub" src="assets/imgs/avatar/ava_1.png">
                                        <span>Rosie</span>
                                    </div>
                                    <div class="date">
                                        <span>12 Sep</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar-shadow">
                    <h5 class="sidebar-title">Popular Tags</h5>
                    <div class="block-tags">
                        <a href="#" class="btn btn-tags-sm mb-10 mr-5">Figma</a>
                        <a href="#" class="btn btn-tags-sm mb-10 mr-5">Adobe XD</a>
                        <a href="#" class="btn btn-tags-sm mb-10 mr-5">PSD</a>
                        <a href="#" class="btn btn-tags-sm mb-10 mr-5">HTML 5</a>
                        <a href="#" class="btn btn-tags-sm mb-10 mr-5">Css 3</a>
                        <a href="#" class="btn btn-tags-sm mb-10 mr-5">Javascript</a>
                        <a href="#" class="btn btn-tags-sm mb-10 mr-5">Jquery</a>
                        <a href="#" class="btn btn-tags-sm mb-10 mr-5">NodeJS</a>
                        <a href="#" class="btn btn-tags-sm mb-10 mr-5">MongoDb</a>
                        <a href="#" class="btn btn-tags-sm mb-10 mr-5">SEO expert</a>
                        <a href="#" class="btn btn-tags-sm mb-10 mr-5">Gimp</a>
                        <a href="#" class="btn btn-tags-sm mb-10 mr-5">PSD</a>
                        <a href="#" class="btn btn-tags-sm mb-10 mr-5">Photo editing</a>
                        <a href="#" class="btn btn-tags-sm mb-10 mr-5">Sketch</a>
                        <a href="#" class="btn btn-tags-sm mb-10 mr-5">jam</a>
                    </div>
                </div>
                <div class="sidebar-normal">
                    <div>
                        <h6 class="small-heading">Are you also hiring?</h6>
                        <ul class="ul-lists">
                            <li><a href="#">Writing &amp; Translation</a></li>
                            <li><a href="#">Video &amp; Animation</a></li>
                            <li><a href="#">Music &amp; Audio</a></li>
                            <li><a href="#">Digital Marketing</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Programming &amp; Tech</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="paginations wow animate__animated animate__fadeIn">
            <ul class="pager">
                <li><a href="#" class="pager-prev"></a></li>
                <li><a href="#" class="pager-number">1</a></li>
                <li><a href="#" class="pager-number">2</a></li>
                <li><a href="#" class="pager-number">3</a></li>
                <li><a href="#" class="pager-number">4</a></li>
                <li><a href="#" class="pager-number">5</a></li>
                <li><a href="#" class="pager-number active">6</a></li>
                <li><a href="#" class="pager-number">7</a></li>
                <li><a href="#" class="pager-next"></a></li>
            </ul>
        </div>
    </div>
</div>
<section class="section-box mt-50 mb-60">
    <div class="container">
        <div class="box-newsletter">
            <h5 class="text-md-newsletter">Sign up to get</h5>
            <h6 class="text-lg-newsletter">the latest jobs</h6>
            <div class="box-form-newsletter mt-30">
                <form class="form-newsletter">
                    <input type="text" class="input-newsletter" value="" placeholder="contact.alithemes@gmail.com">
                    <button class="btn btn-default font-heading icon-send-letter">Subscribe</button>
                </form>
            </div>
        </div>
        <div class="box-newsletter-bottom">
            <div class="newsletter-bottom"></div>
        </div>
    </div>
</section>
@endsection
