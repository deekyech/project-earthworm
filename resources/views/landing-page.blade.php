<!DOCTYPE html>
<html lang="en">

<head>
    <!--META TAGS-->
    <meta charset="utf-8">

    <meta name="description" content="Building modern responsive website using HTML5, CSS3 and Bootstrap!">
    <meta name="keywords" content="HTML5, CSS3, jQuery, Responsive Website, Bootstrap">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <!--END OF META TAGS-->

    <!--Title Goes Here-->
    <title>Earthworm | Farmer's best friend!</title>

    <!--RESOURCE LINKING-->

    <!--FAVICON-->
    <link rel="icon" href="{{ asset('assets/img/icon.ico') }}" type="image/x-icon"/>
    <link rel="shortcut icon" href="img/favicon.png">

    <!--FONT-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">

    <!--PLUGINS-->
    <!--font awesome-->
    <link rel="stylesheet" href="{{ asset('landing-page-assets/plugins/fontawesome/css/font-awesome.min.css') }}">

    <!--bootstrap-->
    <link rel="stylesheet" href="{{ asset('landing-page-assets/plugins/bootstrap/css/bootstrap.min.css') }}">

    <!--animate css-->
    <link rel="stylesheet" href="{{ asset('landing-page-assets/plugins/animate/animate.css') }}">

    <!--magnific-popup-->
    <link rel="stylesheet" href="{{ asset('landing-page-assets/plugins/magnific-popup/magnific-popup.css') }}">

    <!--Owl Carousel-->
    <link rel="stylesheet" href="{{ asset('landing-page-assets/plugins/owl-carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing-page-assets/plugins/owl-carousel/assets/owl.theme.blue.css') }}">
    <!--OUR CSS-->
    <link rel="stylesheet" href="{{ asset('landing-page-assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('landing-page-assets/css/resposive.css') }}">
    <link rel="stylesheet" href="{{ asset('landing-page-assets/css/custom.css') }}">

</head>

<body data-spy="scroll" data-target="#wg-menu" data-offset="70">

    <!--HEADER SECTION-->
    <header>
        <nav class="navbar navbar-fixed-top">
            <div class="container-fluid">
                <div class="wg-nav-wrapper">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#wg-menu">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="#home" class="navbar-brand">earthworm</a>
                    </div>
                    <div class="collapse navbar-collapse" id="wg-menu">
                        <ul class="nav navbar-nav">
                            <li><a href="#home" class="smooth-scroll">Home</a></li>
                            <li><a href="#services" class="smooth-scroll">What is Earthworm?</a></li>
                            <li><a href="#about" class="smooth-scroll">About</a></li>
                            {{-- <li><a href="#work" class="smooth-scroll">Why invest with Earthworm?</a></li> --}}
                            <li><a href="#team" class="smooth-scroll">Team</a></li>
                            {{-- <li><a href="#pricing" class="smooth-scroll">Pricing</a></li> --}}
                            <li><a href="#stats" class="smooth-scroll">Stats</a></li>
                            <li><a href="#testimonial" class="smooth-scroll">Testimonials</a></li>
                            {{-- <li><a href="#clients" class="smooth-scroll">Clients</a></li> --}}
                            <li><a href="#contact" class="smooth-scroll">Contact</a></li>
                            <li><a href="{{ route('login') }}">Login/Sign Up</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!--END OF HEADER SECTION-->
    <!--HOME SECTION-->
    <section id="home">
        <div class="home-cover bg-parallax wow animated fadeIn">
            <div class="home-content-box">
                <div class="home-content-box-inner">
                    <div class="home-heading wow animated zoomIn">
                        <h2>earthworm</h2>
                        <span>farmer's best friend!</span>
                    </div>
                    <!--.home-heading-->
                    <div class="home-btn wow animated zoomIn">
                        <a href="#services" class="btn btn-lg btn-general btn-white smooth-scroll" role="button" title="View Our Work">What is earthworm?</a>
                    </div>
                    <!--.home-btn-->
                </div>
                <!--.home-content-box-inner-->
            </div>
            <!--home-content-box-->
        </div>
        <!--.home-cover-->
    </section>
    <!--HOME SECTION ENDS HERE-->

    <!--SERVICES SECTION-->
    <section id="services">
        <div class="content-box">
            <div class="content-title wow animated fadeInDown" data-wow-duration=".5s" data-wow-delay=".2s">
                <h3>What is Earthworm?</h3>
                <div class="content-title-underline"></div>
            </div>
            <div class="container">
                <div class="row wow animated fadeInUp" data-wow-duration=".5s" data-wow-delay=".2s">
                    <div class="col-md-12 mx-auto text-center text-justify">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tempus ipsum sit amet ornare elementum. Vivamus consequat neque a ante volutpat, non eleifend urna dignissim. Vivamus congue dui eget velit tempus, vel convallis massa dapibus. Donec tincidunt ipsum mauris, ultrices porta neque tempus a. Integer varius orci sit amet maximus fermentum. Donec condimentum, felis in ultricies vestibulum, lectus felis iaculis dui, ultrices interdum purus tortor vel augue. Praesent blandit sem ut bibendum sodales. Nulla pulvinar eu purus id molestie. Etiam pharetra eleifend felis eget laoreet. Quisque tellus mi, ultricies ac arcu a, sollicitudin ullamcorper nunc. Suspendisse potenti.
                            <br />
Etiam faucibus, urna et laoreet volutpat, lorem ipsum gravida odio, id pretium lectus massa ac risus. In mattis nulla in felis laoreet, at lacinia libero commodo. Aliquam at pretium sem. Fusce congue orci ac placerat viverra. Maecenas ut rutrum quam, sit amet efficitur risus. Ut posuere urna est, nec bibendum augue finibus ac. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus vel justo mauris. Praesent gravida at odio non dignissim. Suspendisse potenti. Donec molestie dui non est ornare, id venenatis massa vulputate. Integer mattis justo dui, quis consequat lacus semper vel. Nunc volutpat ullamcorper purus, elementum rutrum nunc rutrum id. Morbi in mauris ipsum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Pellentesque nisl mauris, condimentum quis varius et, ornare at metus.</p>
                    </div>
                </div>
                <!--.row-->
            </div>
            <!--.container-->
        </div>
        <!--.content-box-->

    </section>
    <!--END OF SERVICES SECTION-->

    <!--ABOUT SECTION-->
    <section id="about">
        <!--RIGHT HAND IMAGE PART-->
        <div class="about-bg-diagonal bg-parallax"></div>

        <!--LEFT HAND SIDE ABOUT CONTENT-->
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="content-box">
                        <div class="content-box-outer">
                            <div class="content-box-inner">
                                <div class="content-title wow animated fadeInDown" data-wow-duration=".5s" data-wow-delay=".2s">
                                    <h3>About Earthworm</h3>
                                    <div class="content-title-underline"></div>
                                </div>
                                <!--.content-title-->
                                <div class="about-desc wow animated fadeInDown" data-wow-duration=".5s" data-wow-delay=".2s">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam quo, veritatis consectetur nesciunt minima doloribus voluptas similique, fugit eum ad possimus. Eveniet aliquid fugiat repudiandae assumenda soluta! Ducimus labore, aut.</p>
                                </div>
                                <!--description-->
                                <div class="about-btn">
                                    <a href="#work" title="Our Work" class="btn btn-lg btn-general btn-blue wow animated fadeInUp smooth-scroll" data-wow-duration=".5s" data-wow-delay=".2s">our work</a>
                                </div>
                            </div>
                            <!--inner box-->
                        </div>
                        <!--outer box-->
                    </div>
                    <!--.content-box-->
                </div>
                <!--.col-md-4-->
            </div>
            <!--.row-->
        </div>
        <!--.container-->
    </section>
    <!--END OF ABOUT SECTION-->

    {{-- <!--WORK SECTION-->
    <section id="work">
        <div class="content-box">
            <div class="content-title wow animated fadeInDown" data-wow-duration=".5s" data-wow-delay=".2s">
                <h3>Our Work</h3>
                <div class="content-title-underline"></div>
            </div>
            <div class="container-fluid">
                <div class="row no-gutters wow animated fadeInUp">
                    <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="img-wrapper">
                            <a href="img/work/1.jpg" title="Our Work Description goes here!"><img src="img/work/1.jpg" alt="" class="img-responsive"></a>
                        </div>
                    </div>
                    <!--work 1-->

                    <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="img-wrapper">
                            <a href="img/work/2.jpg" title="Our Work Description goes here!"><img src="img/work/2.jpg" alt="" class="img-responsive"></a>
                        </div>
                    </div>
                    <!--work 1-->

                    <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="img-wrapper">
                            <a href="img/work/3.jpg" title="Our Work Description goes here!"><img src="img/work/3.jpg" alt="" class="img-responsive"></a>
                        </div>
                    </div>
                    <!--work 1-->

                    <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="img-wrapper">
                            <a href="img/work/4.jpg" title="Our Work Description goes here!"><img src="img/work/4.jpg" alt="" class="img-responsive"></a>
                        </div>
                    </div>
                    <!--work 1-->

                    <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="img-wrapper">
                            <a href="img/work/5.jpg" title="Our Work Description goes here!"><img src="img/work/5.jpg" alt="" class="img-responsive"></a>
                        </div>
                    </div>
                    <!--work 1-->

                    <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="img-wrapper">
                            <a href="img/work/6.jpg" title="Our Work Description goes here!"><img src="img/work/6.jpg" alt="" class="img-responsive"></a>
                        </div>
                    </div>
                    <!--work 1-->

                    <div class="col-md-3 col-sm-4 col-xs-6 hidden-sm">
                        <div class="img-wrapper">
                            <a href="img/work/7.jpg" title="Our Work Description goes here!"><img src="img/work/7.jpg" alt="" class="img-responsive"></a>
                        </div>
                    </div>
                    <!--work 1-->

                    <div class="col-md-3 col-sm-4 col-xs-6 hidden-sm">
                        <div class="img-wrapper">
                            <a href="img/work/8.jpg" title="Our Work Description goes here!"><img src="img/work/8.jpg" alt="" class="img-responsive"></a>
                        </div>
                    </div>
                    <!--work 1-->
                </div>
                <!--.row-->
            </div>
            <!--.container-->
        </div>
        <!--.content-box-->
    </section>
    <!--END OF WORK SECTION--> --}}

    <!--TEAM SECTION-->
    <section id="team">
        <div class="content-box">
            <div class="content-title wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".3s">
                <h3 class="text-heading">our team</h3>
                <div class="content-title-underline"></div>
            </div>
            <div class="container">
                <div class="row wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                    <div class="col-md-12">
                        <div class="team-members owl-carousel owl-theme">

                            <div class="team-member">
                                <img src="{{ asset('landing-page-assets/img/team/dkh.jpeg') }}" alt="Team Member 1" class="img-responsive">
                                <div class="team-member-info">
                                    <h4 class="team-member-name">Dhiresh Hirani</h4>
                                    <h4 class="team-member-designation">Rollno: 1704146</h4>
                                    <ul class="social-list">
                                        <li><a href="" class="social-icon icon-gray"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="" class="social-icon icon-gray"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="" class="social-icon icon-gray"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--.team-member-->


                            <div class="team-member">
                                <img src="{{ asset('landing-page-assets/img/team/arjun.jpg') }}" alt="Team Member 2" class="img-responsive">
                                <div class="team-member-info">
                                    <h4 class="team-member-name">Arjun Parmani</h4>
                                    <h4 class="team-member-designation">Rollno: 1704148</h4>
                                    <ul class="social-list">
                                        <li><a href="" class="social-icon icon-gray"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="" class="social-icon icon-gray"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="" class="social-icon icon-gray"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--.team-member-->


                            <div class="team-member">
                                <img src="{{ asset('landing-page-assets/img/team/patro.jpeg') }}" alt="Team Member 3" class="img-responsive">
                                <div class="team-member-info">
                                    <h4 class="team-member-name">Pranay Patro</h4>
                                    <h4 class="team-member-designation">Rollno: 1704147</h4>
                                    <ul class="social-list">
                                        <li><a href="" class="social-icon icon-gray"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="" class="social-icon icon-gray"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="" class="social-icon icon-gray"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--.team-member-->

                        </div>
                    </div>
                </div>
                <!--.row-->
            </div>
            <!--.container-->
        </div>
        <!--.content-box-->
    </section>
    <!--END OF TEAM  SECTION-->

    <!--STATS SECTION-->
    <section id="stats">
        <div class="stats-cover bg-parallax">
            <div class="content-box">
                <div class="content-title wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".3s">
                    <h3 class="text-heading content-title-white">We Never Stop Improving</h3>
                    <div class="content-title-underline"></div>
                </div>
                <div class="container">
                    <div class="row wow animated fadeInUp text-center" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="col-md-3 col-sm-6">
                            <div class="stats-item">
                                <i class="fa fa-cloud-download fa-5x"></i>
                                <h2><span class="counter">{{ App\Farmer::count() }}</span>+</h2>
                                <p>Farmers</p>
                            </div>
                        </div>
                        <!--.col-->

                        <div class="col-md-3 col-sm-6">
                            <div class="stats-item">
                                <i class="fa fa-cloud-download fa-5x"></i>
                                <h2><span class="counter">{{ App\Investor::count() }}</span>+</h2>
                                <p>Investors</p>
                            </div>
                        </div>
                        <!--.col-->

                        <div class="col-md-3 col-sm-6">
                            <div class="stats-item">
                                <i class="fa fa-star-o fa-5x"></i>
                                <h2><span class="counter">{{ App\FundraiserLedger::count() }}</span>+</h2>
                                <p>Fundraisers</p>
                            </div>
                        </div>
                        <!--.col-->

                        <div class="col-md-3 col-sm-6">
                            <div class="stats-item">
                                <i class="fa fa-heart-o fa-5x"></i>
                                <h2><span class="counter">{{ App\ExpenseLedger::count() }}</span>+</h2>
                                <p>Expense Requests</p>
                            </div>
                        </div>
                        <!--.col-->

                    </div>
                    <!--.row-->
                </div>
                <!--.container-->
            </div>
            <!--.content-box-->
        </div>
    </section>
    <!--END OF STATS SECTION-->

    <!--TESTIMONIAL SECTION-->
    <section id="testimonial">
        <div class="testimonial-cover bg-parallax">
            <div class="content-box">
                <div class="content-title wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".3s">
                    <h3 class="content-title">What Out Customers Say</h3>
                    <div class="content-title-underline"></div>
                </div>
                <div class="container">
                    <div class="row wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="customers-testimonials text-center owl-carousel owl-theme">

                            <div class="testimonial">
                                <img src="{{ asset('landing-page-assets/img/client/client-1.jpg') }}" alt="testimonial" class="img-responsive img-circle">
                                <blockquote class="text-center">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam repudiandae obcaecati in ipsum eum, tempore, debitis animi labore corrupti, ipsa error dolore accusantium perferendis aliquam quasi, eius libero. Ab, laudantium.</p>
                                </blockquote>
                                <div class="testimonial-author">
                                    <p>
                                        <strong>Pinak Doshi</strong>
                                        <span>Farmer &amp; Land Owner</span>
                                    </p>
                                </div>
                            </div>
                            <!--.testimonial-->

                            <div class="testimonial">
                                <img src="{{ asset('landing-page-assets/img/client/client-2.jpg') }}" alt="testimonial" class="img-responsive img-circle">
                                <blockquote class="text-center">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam repudiandae obcaecati in ipsum eum, tempore, debitis animi labore corrupti, ipsa error dolore accusantium perferendis aliquam quasi, eius libero. Ab, laudantium.</p>
                                </blockquote>
                                <div class="testimonial-author">
                                    <p>
                                        <strong>Dharmik Doshi</strong>
                                        <span>Investor</span>
                                    </p>
                                </div>
                            </div>
                            <!--.testimonial-->

                            <div class="testimonial">
                                <img src="{{ asset('landing-page-assets/img/client/client-3.jpg') }}" alt="testimonial" class="img-responsive img-circle">
                                <blockquote class="text-center">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam repudiandae obcaecati in ipsum eum, tempore, debitis animi labore corrupti, ipsa error dolore accusantium perferendis aliquam quasi, eius libero. Ab, laudantium.</p>
                                </blockquote>
                                <div class="testimonial-author">
                                    <p>
                                        <strong>Vandana Doshi</strong>
                                        <span>Investor</span>
                                    </p>
                                </div>
                            </div>
                            <!--.testimonial-->
                        </div>
                        <!--.customers-testimonials-->
                    </div>
                    <!--.row-->
                </div>
                <!--.container-->
            </div>
            <!--.content-box-->
        </div>
    </section>
    <!--END OF TESTIMONIAL  SECTION-->

    {{-- <!--PRICING TABLE SECTION-->
    <section id="pricing">
        <div class="content-box">
            <div class="content-title wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".3s">
                <h3 class="text-heading">Our Pricing</h3>
                <div class="content-title-underline"></div>
            </div>
            <div class="container">
                <div class="row">

                    <div class="col-md-4 animated wow zoomIn" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="pricing-box">
                            <h4 class="pricing-title">Basic</h4>
                            <h3 class="pricing-value">49<sup>$</sup></h3>
                            <ul class="pricing-spec">
                                <li>
                                    <p>500 Emails</p>
                                </li>
                                <li>
                                    <p>5GB Disk Space</p>
                                </li>
                                <li>
                                    <p>5GB Bandwidth</p>
                                </li>
                                <li>
                                    <p>Unlimited Domains</p>
                                </li>
                            </ul>
                            <div class="pricing-btn">
                                <a href="#" role="button" class="btn btn-lg btn-general btn-blue">Purchase</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 wow animated bounceInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="pricing-box pricing-box-lg">
                            <h4 class="pricing-title">Enterprise</h4>
                            <h3 class="pricing-value">89<sup>$</sup></h3>
                            <ul class="pricing-spec">
                                <li>
                                    <p>2000 Emails</p>
                                </li>
                                <li>
                                    <p>25GB Disk Space</p>
                                </li>
                                <li>
                                    <p>25GB Bandwidth</p>
                                </li>
                                <li>
                                    <p>Unlimited Domains</p>
                                </li>
                            </ul>
                            <div class="pricing-btn">
                                <a href="#" role="button" class="btn btn-lg btn-general btn-white">Purchase</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 wow animated zoomIn" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="pricing-box">
                            <h4 class="pricing-title">Standard</h4>
                            <h3 class="pricing-value">69<sup>$</sup></h3>
                            <ul class="pricing-spec">
                                <li>
                                    <p>1500 Emails</p>
                                </li>
                                <li>
                                    <p>15GB Disk Space</p>
                                </li>
                                <li>
                                    <p>15GB Bandwidth</p>
                                </li>
                                <li>
                                    <p>Unlimited Domains</p>
                                </li>
                            </ul>
                            <div class="pricing-btn">
                                <a href="#" role="button" class="btn btn-lg btn-general btn-blue">Purchase</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--.row-->
            </div>
            <!--.container-->
        </div>
        <!--.content-box-->
    </section>
    <!--END OF PRICING TABLE SECTION--> --}}



    {{-- <!--CLIENTS SECTION-->
    <section id="clients">
        <div class="content-box">
            <div class="content-title wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".3s">
                <h3 class="text-heading">Clients</h3>
                <div class="content-title-underline"></div>
            </div>
            <div class="container">
                <div class="row wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                    <div class="col-md-12">
                        <div class="client-list owl-carousel owl-theme">
                            <div class="client"><img src="img/client/logos/logo-1.jpg" alt="Client Logo" class="img-responsive"></div>
                            <div class="client"><img src="img/client/logos/logo-2.jpg" alt="Client Logo" class="img-responsive"></div>
                            <div class="client"><img src="img/client/logos/logo-3.jpg" alt="Client Logo" class="img-responsive"></div>
                            <div class="client"><img src="img/client/logos/logo-4.jpg" alt="Client Logo" class="img-responsive"></div>
                            <div class="client"><img src="img/client/logos/logo-5.jpg" alt="Client Logo" class="img-responsive"></div>
                            <div class="client"><img src="img/client/logos/logo-6.jpg" alt="Client Logo" class="img-responsive"></div>
                            <div class="client"><img src="img/client/logos/logo-7.jpg" alt="Client Logo" class="img-responsive"></div>
                            <div class="client"><img src="img/client/logos/logo-8.jpg" alt="Client Logo" class="img-responsive"></div>
                        </div>
                    </div>
                </div>
                <!--.row-->
            </div>
            <!--.container-->
        </div>
        <!--.content-box-->
    </section>
    <!--END OF CLIENTS SECTION--> --}}

    <!--FOOTER SECTION-->
    <footer id="contact">
        <div class="footer-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-left">
                            <h3>Earthworm</h3>
                            <p>We believe in <strong>Empowerment</strong>, <strong>Upliftment</strong> &amp; <strong>Enrichment</strong> of the farmers of India. We aspire to free the farmers from debts and make them aatma-nirbhar!</p>
                            <div class="contact-info">
                                <address>
                                        <strong>Headquarters:</strong>
                                        <p>Thadomal Shahani Engineering College <br/>Linking Road <br/>Bandra West, <br>Mumbai.</p>
                                    </address>
                                <div class="phone-fax-email">
                                    <p>
                                        <strong>Phone:</strong> <span>+(91)-9867371111</span><br>
                                        <strong>Fax:</strong> <span>+(91)-9867371111</span><br>
                                        <strong>Email:</strong> <span>dhireshk.hirani@gmail.com</span><br>
                                    </p>
                                </div>
                            </div>
                            <!--.contact-address-->
                            <ul class="social-list">
                                <li class="social-icon"><a href="" class="icon-white"><i class="fa fa-facebook"></i></a></li>
                                <li class="social-icon"><a href="" class="icon-white"><i class="fa fa-twitter"></i></a></li>
                                <li class="social-icon"><a href="" class="icon-white"><i class="fa fa-google-plus"></i></a></li>
                                <li class="social-icon"><a href="" class="icon-white"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                        <!--.contact-left-->
                    </div>
                    <div class="col-md-6">
                        <div class="contact-right">
                            <h3>Contact Us</h3>
                            <form action="">
                                <input type="text" class="form-control" placeholder="Full Name">
                                <input type="email" class="form-control" placeholder="Email Address">
                                <textarea rows="3" class="form-control" placeholder="Your Message..."></textarea>

                                <div class="send-btn">
                                    <a class="btn btn-lg btn-general btn-white" role="button" href="#">Send</a>
                                </div>
                            </form>
                        </div>
                        <!--.contact-right-->
                    </div>
                </div>
            </div>
        </div>
        <!--contact-->

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer-copyrights">
                            <p>Copyrights &copy; 2021 All Rights Reserved by Earthworm Inc.</p>
                        </div>
                    </div>
                    <div class="col-md-6 hidden-xs">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#home">Home</a>|</li>
                                <li><a href="#services">What is earthworm?</a>|</li>
                                <li><a href="#about">About</a>|</li>
                                {{-- <li><a href="#work">Work</a>|</li> --}}
                                <li><a href="#team">Team</a>|</li>
                                {{-- <li><a href="#pricing">Pricing</a>|</li> --}}
                                <li><a href="#stats">Stats</a>|</li>
                                <li><a href="#testimonial">Testimonial</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a href="#home" class="btn btn-sm btn-general btn-blue btn-back-to-top smooth-scroll" role="button" title="home"><i class="fa fa-angle-up"></i></a>
    </footer>
    <!--END OF FOOTER SECTION-->

    <script src="{{ asset('landing-page-assets/js/jquery-3.3.1.min.js') }}"></script>
    <!--jQuery UI Easing PLugin-->
    <script src="{{ asset('landing-page-assets/plugins/easing/easing.min.js') }}"></script>
    <!--wow plugin-->
    <script src="{{ asset('landing-page-assets/plugins/wow/wow.min.js') }}"></script>
    <!--magnific popup-->
    <script src="{{ asset('landing-page-assets/plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <!--owl-carousel-->
    <script src="{{ asset('landing-page-assets/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
    <!--COUNTERUP-->
    <script src="{{ asset('landing-page-assets/plugins/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('landing-page-assets/plugins/counter-up/jquery.counterup.min.js') }}"></script>
    <!--bootstrap-->
    <script src="{{ asset('landing-page-assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!--CUSTOM SCRIPT-->
    <script src="{{ asset('landing-page-assets/js/script.js') }}"></script>
</body>

</html>
