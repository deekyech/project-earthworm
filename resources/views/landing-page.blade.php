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
                        <p>
                            Indian farmers are highly distressed about outstanding bank loans piling up due to successive crop failures. Adverse climatic conditions, unpredictable weather, short of rainfall, pests and diseases, poor farming practices or neglect by farmers can end up in crop failures and cause immense loss to farmers. Every year, Government of India spends a vast sum of money to waive off these loans.
                        </p>
                        <p>
                            Project Earthworm aims to come up with a solution that can save farmers from inescapable debt and also help the Government of India save a huge amount of money every year. In the urban cities, the people have a feeling of compassion for the farmers who work so hard and still lead such unfair lives. Our solution is to make a portal that will allow any person to provide these farmers with monetary help. The sponsor in return gets an incentive in the form of organic produce. The farmers can crowdsource their expense and need not opt for a bank loan.
                        </p>
                        <p>
                            If the harvest is successful, then the farmer, as a loan obligation, gives a chunk of the produce to the sponsor, who gets an unadulterated farm fresh organic supply of the crop. Given that the demand for farm fresh organic supply is ever rising in the cities, the sponsor gets a trustworthy source of organic supply at a fraction of the price charged by big brands in the name of organic food.
                        </p>
                        <p>
                            If the harvest fails, the farmer has no obligation towards the sponsor. This helps the farmer to remain debt free and the sponsor has saved the farmer from going into debt.
                        </p>
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
                                <div class="about-desc wow animated fadeInDown text-justify" data-wow-duration=".5s" data-wow-delay=".2s">
                                    <p>Project Earthworm is an initiative by three students from Computer Engineering Department of the Thadomal Shahani Engineering College. The idea behind the project is to uplift the farmers from huge debts, free them from ruthless bankers and money-lenders, and to make them aatma-nirbhar!</p>
                                </div>
                                <!--description-->
                                <div class="about-btn">
                                    <a href="#team" title="View Our Team" class="btn btn-lg btn-general btn-blue wow animated fadeInUp smooth-scroll" data-wow-duration=".5s" data-wow-delay=".2s">view our team</a>
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
