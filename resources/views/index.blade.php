<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="themepaa">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Sajal">
    <meta name="description" content="Sajal">
    @php 
                $proName = App\Models\Profile::first();
                
                if($proName->freelance_status==1){
                $FS='Available';}
                else{
                $FS='Busy';}
              @endphp
    <!-- title -->
    <title>
              {{ $proName->name }}
            </title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    @include('frontend.include.css')
</head>
<!-- Body Start -->

<body data-spy="scroll" data-target="#navbar-collapse-toggle" data-offset="70">
    <!-- page loading -->
    
    <!-- end page loading  <div id="loading">
        <div class="load-circle"><span class="one"></span></div>
    </div>-->
    <header>
        <nav class="navbar header-nav header-dark navbar-expand-lg">
            <div class="container">
                <!-- Brand -->
                <a class="navbar-brand" href="index.html">  {{ $proName->name }}<span class="theme-bg"></span></a>
                <!-- / -->
                <!-- Mobile Toggle -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-toggle" aria-controls="navbar-collapse-toggle" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <!-- / -->
                <!-- Top Menu -->
                <div class="collapse navbar-collapse justify-content-end" id="navbar-collapse-toggle">
                    <ul class="navbar-nav ml-auto">
                        <li><a class="nav-link active" href="#home">Home</a></li>
                        <li><a class="nav-link" href="#about">About Us</a></li>
                        <li><a class="nav-link" href="#services">services</a></li>
                        <li><a class="nav-link" href="#work">Portfolio</a></li>
                        <li><a class="nav-link" href="#blog">Blog</a></li>
                        <li><a class="nav-link" href="#contactus">Contact</a></li>
                    </ul>
                </div>
                <!-- / -->
            </div><!-- Container -->
        </nav> <!-- Navbar -->
    </header>
    <!-- Main -->
    <main>
        <!-- Home Banner -->
        <section id="home" class="home-banner-01">
            <div class="container">
                <div class="row full-screen align-items-center p-100px-tb">
                    <div class="col-md-6">
                        <div class="ht-text">
                            <h6>Hello there...</h6>
                            <h1>{{ $proName->name }} {{ $proName->lastname}}</h1>
                            <h2>{{ $proName->designation }}<span id="type-it"></span></h2>
                            <p>Step into my digital realm where technology's symphony harmonizes with the art of storytelling. </p>
                            <div class="btn-bar go-to">
                                <a class="m-btn m-btn-theme" href="#work">my work</a>
                                <a class="m-btn m-btn-t-theme" href="#contactus">Hire Me</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="{{asset('image/header_img.png')}}" title="" alt="">
                    </div>
                </div>
            </div>
            <div class="go-to go-to-next">
                <a href="#about">
                    <span></span>
                </a>
            </div>
        </section>
        <!-- End Home Banner -->
        <!-- about us -->
        <section id="about" class="section gray-bg">
            <div class="container">
                <div class="row sm-m-25px-b m-35px-b">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h3 class="dark-color text-uppercase">ABOUT ME</h3>
                            <p class="text-uppercase small">{{ $proName->designation }}</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-5 m-15px-tb">
                        <div class="about-me-img box-shadow">
                            <img src="{{asset('image/pro_img.jpg')}}" title="" alt="">
                            <div class="nav social-icon">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 m-15px-tb">
                        <div class="about-me">
                            <h4>I'M {{ $proName->name }} {{ $proName->lastname}}</h4>
                            <h6>{{ $proName->designation }}</span></h6>
                            <p>blending my educational background in BBA with my unwavering passion for new technology and gaming.</p>
                            <div class="row about-list">
                                <div class="col-md-6">
                                    <div class="media">
                                        <label>Birthday</label>
                                        <p>{{ $proName->birthday }}</p>
                                    </div>
                                    <div class="media">
                                        <label>Age</label>
                                        <p>22 Yr</p>
                                    </div>
                                    <div class="media">
                                        <label>Residence</label>
                                        <p>{{ $proName->residence }}</p>
                                    </div>
                                    <div class="media">
                                        <label>Address</label>
                                        <p>{{ $proName->address }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="media">
                                        <label>E-mail</label>
                                        <p>{{ $proName->email }}</p>
                                    </div>
                                    <div class="media">
                                        <label>Phone</label>
                                        <p>{{ $proName->phone }}</p>
                                    </div>
                                    <div class="media">
                                        <label>Skype</label>
                                        <p>{{ $proName->skype}}</p>
                                    </div>
                                    <div class="media">
                                        <label>Freelance</label>
                                        <p>{{ $FS}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-bar">
                                <a class="m-btn m-btn-theme" href="#work">Download CV</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end about us -->
        <!-- fun -->
        <section class="section">
            <div class="container">
                <div class="row sm-m-25px-b m-35px-b">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h3 class="dark-color text-uppercase">My Skills</h3>
                            <p class="text-uppercase small">A Lead Content Wrtiter based in Bangladesh</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-lg-6 m-15px-tb">
                        <!-- skill -->
                        <div class="skill-lt">
                            <h6 class="dark-color">HTML5</h6>
                            <div class="skill-bar">
                                <div class="skill-bar-in theme-bg" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100">
                                    <span>92%</span>
                                </div>
                            </div>
                        </div>
                        <!-- end skill -->
                        <!-- skill -->
                        <div class="skill-lt">
                            <h6 class="dark-color">WordPress</h6>
                            <div class="skill-bar">
                                <div class="skill-bar-in theme-bg" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100">
                                    <span>75%</span>
                                </div>
                            </div>
                        </div>
                        <!-- end skill -->
                        <!-- skill -->
                        <div class="skill-lt">
                            <h6 class="dark-color">Magento</h6>
                            <div class="skill-bar">
                                <div class="skill-bar-in theme-bg" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                    <span>86%</span>
                                </div>
                            </div>
                        </div><!-- /skill -->
                        <!-- end skill -->
                        <!-- skill -->
                        <div class="skill-lt">
                            <h6 class="dark-color">UI/UX</h6>
                            <div class="skill-bar">
                                <div class="skill-bar-in theme-bg" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100">
                                    <span>88%</span>
                                </div>
                            </div>
                        </div>
                        <!-- end skill -->
                    </div>
                    <div class="col-lg-5 m-15px-tb">
                        <div class="row">
                            <div class="col-6 m-15px-tb">
                                <div class="feature-box-2 media align-items-center">
                                    <div class="icon">
                                        <i class="fas fa-compact-disc"></i>
                                    </div>
                                    <div class="media-body">
                                        <h5>80 Albumes Listened</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 m-15px-tb">
                                <div class="feature-box-2 media align-items-center">
                                    <div class="icon">
                                        <i class="fas fa-trophy"></i>
                                    </div>
                                    <div class="media-body">
                                        <h5>15 Awards Won</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 m-15px-tb">
                                <div class="feature-box-2 media align-items-center">
                                    <div class="icon">
                                        <i class="fas fa-mug-hot"></i>
                                    </div>
                                    <div class="media-body">
                                        <h5>1 000 Cups of coffee</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 m-15px-tb">
                                <div class="feature-box-2 media align-items-center">
                                    <div class="icon">
                                        <i class="fas fa-flag"></i>
                                    </div>
                                    <div class="media-body">
                                        <h5>10 Countries Visited</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End fun -->
        <!-- resume -->
        <section id="services" class="section gray-bg">
            <div class="container">
                <div class="row sm-m-25px-b m-35px-b">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h3 class="dark-color text-uppercase">My Services</h3>
                            <p class="text-uppercase small">A Lead Content Writer based in Bangladesh</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- feaure box -->
                    <div class="col-sm-6 col-lg-4 m-15px-tb">
                        <div class="feature-box-1 box-shadow-lg">
                            <div class="icon">
                                <i class="icon-desktop"></i>
                            </div>
                            <div class="feature-content">
                                <h5>Unique design</h5>
                                <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites.</p>
                            </div>
                        </div>
                    </div>
                    <!-- / -->
                    <!-- feaure box -->
                    <div class="col-sm-6 col-lg-4 m-15px-tb">
                        <div class="feature-box-1 box-shadow-lg">
                            <div class="icon">
                                <i class="icon-pricetags"></i>
                            </div>
                            <div class="feature-content">
                                <h5>Different Layout</h5>
                                <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites.</p>
                            </div>
                        </div>
                    </div>
                    <!-- / -->
                    <!-- feaure box -->
                    <div class="col-sm-6 col-lg-4 m-15px-tb">
                        <div class="feature-box-1 box-shadow-lg">
                            <div class="icon">
                                <i class="icon-chat"></i>
                            </div>
                            <div class="feature-content">
                                <h5>Make it Simple</h5>
                                <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites.</p>
                            </div>
                        </div>
                    </div>
                    <!-- / -->
                    <!-- feaure box -->
                    <div class="col-sm-6 col-lg-4 m-15px-tb">
                        <div class="feature-box-1 box-shadow-lg">
                            <div class="icon">
                                <i class="icon-mobile"></i>
                            </div>
                            <div class="feature-content">
                                <h5>Responsiveness</h5>
                                <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites.</p>
                            </div>
                        </div>
                    </div>
                    <!-- / -->
                    <!-- feaure box -->
                    <div class="col-sm-6 col-lg-4 m-15px-tb">
                        <div class="feature-box-1 box-shadow-lg">
                            <div class="icon">
                                <i class="icon-target"></i>
                            </div>
                            <div class="feature-content">
                                <h5>Testing for Perfection</h5>
                                <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites.</p>
                            </div>
                        </div>
                    </div>
                    <!-- / -->
                    <!-- feaure box -->
                    <div class="col-sm-6 col-lg-4 m-15px-tb">
                        <div class="feature-box-1 box-shadow-lg">
                            <div class="icon">
                                <i class="icon-tools-2"></i>
                            </div>
                            <div class="feature-content">
                                <h5>Advanced Options</h5>
                                <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites.</p>
                            </div>
                        </div>
                    </div>
                    <!-- / -->
                </div>
            </div>
        </section>
        <!-- End resume -->
        <!-- Work -->
        <section id="work" class="section">
            <div class="container">
                <div class="row sm-m-25px-b m-35px-b">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h3 class="dark-color text-uppercase">LATEST WORKS</h3>
                            <p class="text-uppercase small">A Lead Content Writer based in Bangladesh</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="portfolio-content lightbox-gallery">
                    <div class="grid-item product branding">
                        <div class="portfolio-box-01">
                            <div class="portfolio-img">
                                <img src="static/img/portfolio-1.jpg" title="" alt="">
                            </div>
                            <div class="portfolio-info">
                                <h5>Our Photography</h5>
                                <span>Design</span>
                            </div>
                            <a class="link-overlay" href="#"></a>
                        </div>
                    </div> <!-- grid item -->
                    <div class="grid-item product branding">
                        <div class="portfolio-box-01">
                            <div class="portfolio-img">
                                <img src="static/img/portfolio-6.jpg" title="" alt="">
                            </div>
                            <div class="portfolio-info">
                                <h5>Our Photography</h5>
                                <span>Design</span>
                            </div>
                            <a class="link-overlay" href="#"></a>
                        </div>
                    </div> <!-- grid item -->
                    <div class="grid-item product branding">
                        <div class="portfolio-box-01">
                            <div class="portfolio-img">
                                <img src="static/img/portfolio-2.jpg" title="" alt="">
                            </div>
                            <div class="portfolio-info">
                                <h5>Our Photography</h5>
                                <span>Design</span>
                            </div>
                            <a class="link-overlay" href="#"></a>
                        </div>
                    </div> <!-- grid item -->
                    <div class="grid-item product branding">
                        <div class="portfolio-box-01">
                            <div class="portfolio-img">
                                <img src="static/img/portfolio-3.jpg" title="" alt="">
                            </div>
                            <div class="portfolio-info">
                                <h5>Our Photography</h5>
                                <span>Design</span>
                            </div>
                            <a class="link-overlay" href="#"></a>
                        </div>
                    </div> <!-- grid item -->
                    <div class="grid-item product branding">
                        <div class="portfolio-box-01">
                            <div class="portfolio-img">
                                <img src="static/img/portfolio-4.jpg" title="" alt="">
                            </div>
                            <div class="portfolio-info">
                                <h5>Our Photography</h5>
                                <span>Design</span>
                            </div>
                            <a class="link-overlay" href="#"></a>
                        </div>
                    </div> <!-- grid item -->
                    <div class="grid-item product branding">
                        <div class="portfolio-box-01">
                            <div class="portfolio-img">
                                <img src="static/img/portfolio-5.jpg" title="" alt="">
                            </div>
                            <div class="portfolio-info">
                                <h5>Our Photography</h5>
                                <span>Design</span>
                            </div>
                            <a class="link-overlay" href="#"></a>
                        </div>
                    </div> <!-- grid item -->
                </div> <!-- portfolio-content -->
            </div>
        </section>
        <!-- End work -->
        <!-- Testiminails -->
        <section class="section gray-bg">
            <div class="container">
                <div class="row sm-m-25px-b m-35px-b">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h3 class="dark-color text-uppercase">Testimonials</h3>
                            <p class="text-uppercase small">A Lead Content Writer based in Bangladesh</p>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel" data-items="2" data-nav-dots="true" data-md-items="2" data-sm-items="1" data-xs-items="1" data-xx-items="1" data-space="30">
                    <!-- testimonials -->
                    <div class="testimonial-col-01">
                        <div class="media">
                            <div class="img">
                                <img src="static/img/team-1.jpg" title="" alt="">
                            </div>
                            <div class="media-body p-25px-l">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <div class="tc-info">
                                    <h6 class="font-alt dark-color font-w-600">Nancy Bayers</h6>
                                    <span>Co-founder</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / -->
                    <!-- testimonials -->
                    <div class="testimonial-col-01">
                        <div class="media">
                            <div class="img">
                                <img src="static/img/team-2.jpg" title="" alt="">
                            </div>
                            <div class="media-body p-25px-l">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <div class="tc-info">
                                    <h6 class="font-alt dark-color font-w-600">Nancy Bayers</h6>
                                    <span>Co-founder</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / -->
                    <!-- testimonials -->
                    <div class="testimonial-col-01">
                        <div class="media">
                            <div class="img">
                                <img src="static/img/team-3.jpg" title="" alt="">
                            </div>
                            <div class="media-body p-25px-l">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <div class="tc-info">
                                    <h6 class="font-alt dark-color font-w-600">Nancy Bayers</h6>
                                    <span>Co-founder</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / -->
                    <!-- testimonials -->
                    <div class="testimonial-col-01">
                        <div class="media">
                            <div class="img">
                                <img src="static/img/team-4.jpg" title="" alt="">
                            </div>
                            <div class="media-body p-25px-l">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <div class="tc-info">
                                    <h6 class="font-alt dark-color font-w-600">Nancy Bayers</h6>
                                    <span>Co-founder</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / -->
                </div>
            </div>
        </section>
        <!-- End Testiminails -->
        <!-- Blog -->
        <section id="blog" class="section white-bg">
            <div class="container">
                <div class="row sm-m-25px-b m-35px-b">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h3 class="dark-color text-uppercase">Latest Blogs</h3>
                            <p class="text-uppercase small">A Lead Content Writer based in Bangladesh</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                     @php
                    $blogs = App\Models\Blog::orderBy('created_at', 'desc')->get();
                    
                        $count=0;
                    @endphp
                        <!-- Table rows with data -->
                        @foreach( $blogs as $blog)
                        @php
                    
                        $count++;
                        @endphp
                    <div class="col-lg-4 m-15px-tb">
                        <div class="blog-grid">
                            <div class="blog-grid-img">
                                <a  href="{{ $blog->blog_link }}" target="_blank">
                                    <img src="{{ asset('uploads/'. $blog->blog_image) }}" title="" alt="">
                                </a>
                            </div>
                            <div class="blog-gird-info">
                                <div class="b-meta">
                                    <span class="date">{{ $blog->created_at }}</span>
                                    
                                </div>
                                <h5><a  href="{{ $blog->blog_link }}" target="_blank">{{ $blog->blog_title }}</a></h5>
                                
                                <div class="btn-grid">
                                    <a class="m-btn-link" href="{{ $blog->blog_link }}" target="_blank">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- col -->
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End Blog -->
        <section id="contactus" class="section gray-bg">
            <div class="container">
                <div class="row sm-m-25px-b m-35px-b">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h3 class="dark-color text-uppercase">Get in touch</h3>
                            <p class="text-uppercase small">A Lead Content Writer based in Bangladesh</p>
                        </div>
                    </div>
                </div>
                <!-- form -->
                <div class="row justify-content-center">
                    <div class="col-lg-8 m-15px-tb">
                        <div class="contact-form box-shadow">
                            <h4 class="dark-color font-alt m-20px-b">Say Something</h4>
                            <form id="contact-form" method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input name="Name" id="name" placeholder="Name *" class="form-control" type="text">
                                            <span class="input-focus-effect theme-bg"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input name="Email" id="email" placeholder="Email *" class="form-control" type="email">
                                            <span class="input-focus-effect theme-bg"></span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input name="Subject" id="subject" placeholder="Subject *" class="form-control" type="text">
                                            <span class="input-focus-effect theme-bg"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" id="message" placeholder="Your message *" rows="3" class="form-control"></textarea>
                                            <span class="input-focus-effect theme-bg"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="send">
                                            <button class="m-btn m-btn-theme" onclick="send_mail()" type="button" value="Send"> send message</button>
                                        </div>
                                        <span id="suce_message" class="text-success" style="display: none">Message Sent Successfully</span>
                                        <span id="err_message" class="text-danger" style="display: none">Message Sending Failed</span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> <!-- col -->
                    <div class="col-lg-4 m-15px-tb">
                        <div class="contact-info media box-shadow">
                            <div class="icon">
                                <i class="ti-location-pin"></i>
                            </div>
                            <div class="media-body">
                                <h6 class="dark-color font-alt">Our Address</h6>
                                <p>{{$proName->address}}</p>
                            </div>
                        </div>
                        <div class="contact-info media box-shadow">
                            <div class="icon">
                                <i class="ti-mobile"></i>
                            </div>
                            <div class="media-body">
                                <h6 class="dark-color font-alt">Our Phone</h6>
                                <p>Personal: {{$proName->phone}}<br>
                                    Office: {{$proName->office_phone}}<br></p>
                            </div>
                        </div>
                        <div class="contact-info media box-shadow">
                            <div class="icon">
                                <i class="ti-email"></i>
                            </div>
                            <div class="media-body">
                                <h6 class="dark-color font-alt">Our Email</h6>
                                <p>{{$proName->email}}<br>{{$proName->office_email}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end form -->
            </div>
        </section>
    </main>
    <!-- main end -->
    <!-- Footer-->
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 m-10px-tb">
                    <div class="nav justify-content-center justify-content-md-start">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                    </div>
                </div>
                <div class="col-md-6 m-10px-tb text-center text-md-right">
                    <a href="{{route('login')}}">Login</a>
                    <p>© 2023 copyright all right reserved</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer End -->
    <!-- jquery -->
  
    
   @include('frontend.include.script')
    <!-- end -->
    <!-- end body -->
</body>

</html>