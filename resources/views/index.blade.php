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

              @php 
                $content = App\Models\Content::first();
            
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
                <a class="navbar-brand" href="{{route('home')}}">  {{ $proName->name }}<span class="theme-bg"></span></a>
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
                        <li><a class="nav-link" href="{{route('web.blog')}}">Blog</a></li>
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
                            <h6>  {{ $content->greetings }}</h6>
                            <h1>{{ $proName->name }} {{ $proName->lastname}}</h1>
                            <h2>{{ $proName->designation }}<span id="type-it"></span></h2>
                          <!--  <p>Step into my digital realm where technology's symphony harmonizes with the art of storytelling. </p>
                -->
                    <p> {{ $content->intro }}</p>
                <div class="btn-bar go-to">
                                <a class="m-btn m-btn-theme" href="#work">my work</a>
                                <a class="m-btn m-btn-t-theme" href="#contactus">Hire Me</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('uploads/'. $content->pro_image) }}" title="" alt="Pro Image">
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
                            <img src="{{ asset('uploads/'. $content->about_image) }}" title="" alt="About Image">
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
                          <!--  <p>blending my educational background in BBA with my unwavering passion for new technology and gaming.</p>
                --> 
                        <p> {{ $content->about_intro}}</p>
                          
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
                            
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-lg-6 m-15px-tb">
                        <!-- skill -->
                        <div class="skill-lt">
                            <h6 class="dark-color">Understanding of Branding</h6>
                            <div class="skill-bar">
                                <div class="skill-bar-in theme-bg" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100">
                                    <span>92%</span>
                                </div>
                            </div>
                        </div>
                        <!-- end skill -->
                        <!-- skill -->
                        <div class="skill-lt">
                            <h6 class="dark-color">On Page SEO</h6>
                            <div class="skill-bar">
                                <div class="skill-bar-in theme-bg" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                    <span>95%</span>
                                </div>
                            </div>
                        </div>
                        <!-- end skill -->
                        <!-- skill -->
                        <div class="skill-lt">
                            <h6 class="dark-color">Emotional Intelligence</h6>
                            <div class="skill-bar">
                                <div class="skill-bar-in theme-bg" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                    <span>86%</span>
                                </div>
                            </div>
                        </div><!-- /skill -->
                        <!-- end skill -->
                        <!-- skill -->
                        <div class="skill-lt">
                            <h6 class="dark-color">Audience Understanding</h6>
                            <div class="skill-bar">
                                <div class="skill-bar-in theme-bg" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100">
                                    <span>88%</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill-lt">
                            <h6 class="dark-color">Marketing</h6>
                            <div class="skill-bar">
                                <div class="skill-bar-in theme-bg" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100">
                                    <span>93%</span>
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
                                        <i class="fas fa-pen-alt"></i>
                                    </div>
                                    <div class="media-body">
                                        <h5>500+ published article</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 m-15px-tb">
                                <div class="feature-box-2 media align-items-center">
                                    <div class="icon">
                                        <i class="fas fa-trophy"></i>
                                    </div>
                                    <div class="media-body">
                                        <h5>Awarded as exceptional writer</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 m-15px-tb">
                                <div class="feature-box-2 media align-items-center">
                                    <div class="icon">
                                        <i class="fas fa-funnel-dollar"></i>
                                    </div>
                                    <div class="media-body">
                                        <h5>Expert in multiple niche</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 m-15px-tb">
                                <div class="feature-box-2 media align-items-center">
                                    <div class="icon">
                                        <i class="fas fa-traffic-light"></i>
                                    </div>
                                    <div class="media-body">
                                        <h5>High-Traffic generator</h5>
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
                            <p class="text-uppercase small">Checkout my awesome services to enhance your business</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- feaure box -->
                    <div class="col-sm-6 col-lg-4 m-15px-tb">
                        <div class="feature-box-1 box-shadow-lg">
                            <div class="icon">
                                <i class="icon-search"></i>
                            </div>
                            <div class="feature-content">
                                <h5>SEO-friendly content development</h5>
                                <p>
                                Drive traffic and engagement with our expertly crafted content.

                                </p></div>
                        </div>
                    </div>
                    <!-- / -->
                    <!-- feaure box -->
                    <div class="col-sm-6 col-lg-4 m-15px-tb">
                        <div class="feature-box-1 box-shadow-lg">
                            <div class="icon">
                                <i class="icon-notebook"></i>
                            </div>
                            <div class="feature-content">
                                <h5>Script wiring</h5>
                            <p>Craft compelling narratives that captivate your audience.</p>
                            </div>
                        </div>
                    </div>
                    <!-- / -->
                    <!-- feaure box -->
                    <div class="col-sm-6 col-lg-4 m-15px-tb">
                        <div class="feature-box-1 box-shadow-lg">
                            <div class="icon">
                                <i class="icon-strategy"></i>
                            </div>
                            <div class="feature-content">
                                <h5>All in one branding solution</h5>
                                <p>Elevate your brand identity with a holistic approach to branding.</p>
                            </div>
                        </div>
                    </div>
                    <!-- / -->
                    <!-- feaure box -->
                    <div class="col-sm-6 col-lg-4 m-15px-tb">
                        <div class="feature-box-1 box-shadow-lg">
                            <div class="icon">
                                <i class="icon-camera"></i>
                            </div>
                            <div class="feature-content">
                                <h5>Instagram management</h5>
                                <p>Maximize your Instagram potential with our strategic management.</p>
                            </div>
                        </div>
                    </div>
                    <!-- / -->
                    <!-- feaure box -->
                    <div class="col-sm-6 col-lg-4 m-15px-tb">
                        <div class="feature-box-1 box-shadow-lg">
                            <div class="icon">
                                <i class="icon-facebook"></i>
                            </div>
                            <div class="feature-content">
                                <h5>Social media marketing</h5>
                                <p>Amplify your reach and engagement with targeted social media strategies.</p>
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
                                <h5>Organic traffic generation</h5>
                                <p>Boost your online visibility and draw in your target audience naturally.</p>
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
                            <h3 class="dark-color text-uppercase">Latest Works</h3>
                            <p class="text-uppercase small">Watch My Recent Awesome works</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                     @php
                     $blogs = App\Models\Blog::orderBy('created_at', 'desc')
                        ->take(3) // This limits the query to the latest 3 blog posts
                      ->get();
                    
                    @endphp
                        <!-- Table rows with data -->
                        @foreach( $blogs as $blog)
                       
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
        <!-- End work -->
        <!-- Testiminails -->
        <section class="section gray-bg">
            <div class="container">
                <div class="row sm-m-25px-b m-35px-b">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h3 class="dark-color text-uppercase">Testimonials</h3>
                            <p class="text-uppercase small">A Lead {{ $proName->designation }} based in Bangladesh</p>
                        </div>
                    </div>
                </div>
                <div id="client-review-carousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#client-review-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#client-review-carousel" data-slide-to="1"></li>
                            <li data-target="#client-review-carousel" data-slide-to="2"></li>
                            <li data-target="#client-review-carousel" data-slide-to="3"></li>
                        </ol>

                        <!-- Slides -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-4">
                                                <img class="img-thumbnail" style="width:100px;" src="data:image/jpeg;base64,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" alt="">
                                            </div>
                                            <div class="col-md-8">
                                            <p>
                                                "Sajal Ehsan's content writing service is exceptional. They consistently deliver high-quality, deadline-driven content that exceeds expectations. I highly recommend their team for anyone seeking top-notch content."
                                            </p>
                                            <h6 class="font-alt dark-color font-w-600">Mark Anderson</h6>
                                            <span>CEO</span>
                                        </div>
                                    </div>
                                </div>
                            <!-- Slide 1 -->
                            <div class="carousel-item ">
                            <div class="row">
                                <div class="col-md-4">
                                <img class="img-thumbnail "src="https://media.licdn.com/dms/image/C5603AQG289VBiL-jUw/profile-displayphoto-shrink_100_100/0/1643183369027?e=1699488000&v=beta&t=wsLOe6CMIXd5igGro7CqQkzbg-JLipMZ-qjOedEErik" alt="Elman">
                                </div> 
                                <div class="col-md-8">
                                <p>{{ $proName->name }} possesses outstanding writing abilities, making him an indispensable asset. His commitment and innovative flair are clear in each piece of content he generates. If you're in search of a skilled tech content writer who can adeptly convey your concepts to a wider audience, {{ $proName->name }} is the ideal selection. His determined pursuit of quality and his ability to simplify complex subjects make him an indispensable contributor to any tech-oriented venture.</p>
                                <h6 class="font-alt dark-color font-w-600">Elman Uchwas</h6>
                                <span>Co-founder</span>
                                </div>
                            </div>
                            </div>

                            <!-- Slide 2 -->
                            <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4">
                                <img class="img-thumbnail " src="https://media.licdn.com/dms/image/D5603AQHke2yjWVwIJw/profile-displayphoto-shrink_100_100/0/1672046163372?e=1699488000&v=beta&t=ppG4f8SyZuJwMXU6j_WHOixj6HUk_sdgGUQSiuzvw5g" alt="">
                                </div>
                                <div class="col-md-8">
                                <p>
                                I'm delighted to recommend {{$proName->name}} as a tech content writer. His ability to distill complex technical topics into clear and engaging content is truly impressive.

                                    {{$proName->name}} consistently delivers high-quality articles, blog posts, and documentation that not only inform but also inspire readers. His passion for technology shines through in every piece he creates.                                </p>
                                      <h6 class="font-alt dark-color font-w-600">Abu Naeem</h6>
                                <span>Content Writer</span>
                                </div>
                            </div>
                            </div>

                            <!-- Slide 3 -->
                            <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4">
                                <img  class="img-thumbnail "  src="https://media.licdn.com/dms/image/C5603AQEfh93zTImAcg/profile-displayphoto-shrink_100_100/0/1630252794758?e=1699488000&v=beta&t=LRrLmh-YbnmTrQjdjm2GPvt3a7t1A4dkkRTk6Nn9Mdo" alt="">
                                </div>
                                <div class="col-md-8">
                                <p>
                                {{$proName->name}} {{$proName->lastname}} is an energetic and innovative guy.He is known to me since 2014 He is a great entrepreneur, e-learning expert, youth activist & also A great organizer.He is a fast learner and has hard working ability.
                                </p>    
                                
                                <h6 class="font-alt dark-color font-w-600">G M Helal</h6>
                                <span>Marketing Manager</span>
                                </div>
                            </div>
                            </div>

                            <!-- Slide 4 -->
                           
                        </div>

                        <!-- Controls -->
                        <a class="carousel-control-prev" href="#client-review-carousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#client-review-carousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        </div>
            </div>
        </section>
        <!-- End Testiminails -->
        
        <section id="contactus" class="section ">
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
                    <p>© 2023 copyright all right reserved by {{$proName->name}}</p>
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