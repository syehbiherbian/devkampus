@extends('web.app')
@section('content')
    <header id="header" class="header">  
        <div class="container">       
            <h1 class="logo">
                <a class="scrollto" href="#hero">
                    <span class="logo-icon-wrapper"><img class="logo-icon" src="{{asset('template/web/assets/images/icon.png')}}" alt="icon"></span>
                    <span class="text"><span class="highlight">Developer</span>Kampus</span></a>
            </h1><!--//logo-->
            <nav class="main-nav navbar-right" role="navigation">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button><!--//nav-toggle-->
                </div><!--//navbar-header-->
                <div id="navbar-collapse" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active nav-item"><a class="scrollto" href="#about">About</a></li>
                        <li class="nav-item"><a class="scrollto" href="#testimonials">Testimonials</a></li>                      
                        <li class="nav-item"><a class="scrollto" href="#team">Team</a></li>
                        <li class="nav-item"><a class="scrollto" href="#pricing">Course</a></li>
                        <li class="nav-item"><a class="scrollto" href="#contact">Contact</a></li>
                    </ul><!--//nav-->
                </div><!--//navabr-collapse-->
            </nav><!--//main-nav-->                     
        </div><!--//container-->
    </header><!--//header-->
    
    <div id="hero" class="hero-section">
        
        <div id="hero-carousel" class="hero-carousel carousel carousel-fade slide" data-ride="carousel" data-interval="10000">
            
            <div class="figure-holder-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="figure-holder">
                            {{-- <img class="figure-image img-responsive" src="{{asset('template/web/assets/images/imac.png')}}" alt="image" /> --}}
                        </div><!--//figure-holder-->
                    </div><!--//row-->
                </div><!--//container-->
            </div><!--//figure-holder-wrapper-->
            
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li class="active" data-slide-to="0" data-target="#hero-carousel"></li>
                <li data-slide-to="1" data-target="#hero-carousel"></li>
                <li data-slide-to="2" data-target="#hero-carousel"></li>
            </ol>
            
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                
                <div class="item item-1 active">
                    <div class="item-content container">
                        <div class="item-content-inner">
                            
                            <h2 class="heading">Developer Kampus tempat untuk belajar porogramming <br class="hidden-xs">dari dasar hingga mahir</h2>
                            <p class="intro">Sangat membantu untuk anda yang ingin menjadi programmer.</p>
                            <a class="btn btn-primary btn-cta scrollto" href="#picing">Daftar Sekarang</a>
                            
                        </div><!--//item-content-inner-->
                    </div><!--//item-content-->
                </div><!--//item-->
                
                <div class="item item-2">
                    <div class="item-content container">
                        <div class="item-content-inner">
                            
                            <h2 class="heading">Anda Suka Web Development?</h2>
                            <p class="intro">Kami Siap membantu anda dalam mengembangkan skill anda dibidang web development</p>
                            <a class="btn btn-primary btn-cta scrollto" href="#picing">Daftar Sekarang</a>
                            
                        </div><!--//item-content-inner-->
                    </div>
                </div><!--//item-->
                
                <div class="item item-3">
                    <div class="item-content container">
                        <div class="item-content-inner">
                            
                            <h2 class="heading">Siap untuk menjadi Android Developer?</h2>
                            <p class="intro">Tingkatkan skill android anda bersama kami.</p>
                            <a class="btn btn-primary btn-cta scrollto" href="#picing">Daftar Sekarang</a>
                            
                        </div><!--//item-content-inner-->
                    </div>
                </div><!--//item-->
            </div><!--//carousel-inner-->

        </div><!--//carousel-->
    </div><!--//hero-->
    
    <div id="about" class="about-section">
        <div class="container text-center">
            <h2 class="section-title">Tentang Developer Kampus</h2>
            <p class="intro">Developer Kampus adalah Kumpulan anak anak muda yang berniat untuk membantu membangkitkan industri teknologi indonesia dengan membuat sebuah lembaga kursus khusus bidang programming</p>
            <ul class="technologies list-inline">
                <li><img src="{{asset('template/web/assets/images/logo-bootstrap.svg')}}" alt="Bootstrap"></li>
                <li><img src="{{asset('template/web/assets/images/logo-html5.svg')}}" alt="HTML5"></li>
                <li><img src="{{asset('template/web/assets/images/logo-css3.svg')}}" alt="CSS3"></li>
                <li><img src="{{asset('template/web/assets/images/logo-jquery.svg')}}" alt="Jquery"></li>
                <li><img src="{{asset('template/web/assets/images/laravel.png')}}" heigt="53" width="60" alt="Laravel"></li>
                <li><img src="{{asset('template/web/assets/images/codeigniter.png')}}" heigt="53" width="60" alt="Codeigniter"></li>
                <li><img src="{{asset('template/web/assets/images/php.png')}}" heigt="53" width="60" alt="PHP"></li>
                <li><img src="{{asset('template/web/assets/images/android.jpg')}}" heigt="53" width="60" alt="Android"></li>
                <li><img src="{{asset('template/web/assets/images/c++.png')}}" heigt="53" width="60" alt="C++"></li>
                <li><img src="{{asset('template/web/assets/images/java.png')}}" heigt="53" width="60" alt="C++"></li>
            </ul>
            
            <div class="items-wrapper row">
                <div class="item col-mg-4 col-sm-4 col-sm-12">
                    <div class="item-inner">
                        <div class="figure-holder">
                            <img class="figure-image" src="{{asset('template/web/assets/images/figure-1.png')}}" alt="image">
                        </div><!--//figure-holder-->
                        <h3 class="item-title">Web Desain</h3>
                        <div class="item-desc">
                            Kami mempunyai tim yang menekuni dunia desain, sehingga para peserta diajarkan membuat UI/UX yang baik, dari para instruktur.
                        </div><!--//item-desc-->
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item col-mg-4 col-sm-4 col-sm-12">
                    <div class="item-inner">
                        <div class="figure-holder">
                            <img class="figure-image" src="{{asset('template/web/assets/images/figure-2.png')}}" alt="image">
                        </div><!--//figure-holder-->
                        <h3 class="item-title">Web Development</h3>
                        <div class="item-desc">
                            Bagi para peserta yang ingin menjadi web developer, kami juga siap menyediakan kursus web development diantaranya PHP Native, Codeigniter, dan Laravel Course</div><!--//item-desc-->
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item col-mg-4 col-sm-4 col-sm-12">
                    <div class="item-inner">
                        <div class="figure-holder">
                            <img class="figure-image" src="{{asset('template/web/assets/images/figure-3.png')}}" alt="image">
                        </div><!--//figure-holder-->
                        <h3 class="item-title">Android Development</h3>
                        <div class="item-desc">
                            Para peserta dapat memilih kursus dari pemula atau pun langsung ke level advance. Disini kami sediakan tim untuk membantu para peserta.</div><!--//item-desc-->
                    </div><!--//item-inner-->
                </div><!--//item-->
            </div><!--//items-wrapper-->
        </div><!--//container-->
    </div><!--//about-section-->
    
    <div id="testimonials" class="testimonials-section">
        <div class="container">
            <h2 class="section-title text-center">Apa Kata Mereka?</h2>
            <div class="item center-block">
                <div class="profile-holder">
                    <img class="profile-image img-circle" src="{{asset('template/web/assets/images/pp.jpg')}}" alt="profile">
                </div>
                <div class="quote-holder">
                    <blockquote class="quote">
                        <p>Pengalaman luar biasa bergabung disini, semoga ke depannya developer kampus dapat lebih baik lagi dalam hal pengajaran materi</p>
                        <div class="quote-source">  
                            <span class="name">Andre Alifridho,</span>
                            <span class="meta">Tangerang</span>
                        </div><!--//quote-source-->
                    </blockquote>
                </div><!--//quote-holder-->
            </div><!--//item-->
            <div class="item item-reversed center-block">
                <div class="profile-holder">
                    <img class="profile-image img-circle" src="{{asset('template/web/assets/images/pardi.jpg')}}" alt="profile">
                </div>
                <div class="quote-holder">
                    <blockquote class="quote">
                        <p>Bangga rasanya bergabung disini, selain mendapat pengajaran kita juga dapat berkonsultasi dengan para instruktur jika ada masalah skripsi atau pun masalah lain yang berhubungan dengan coding.</p>
                        <div class="quote-source">
                            <span class="name">Supardi,</span>
                            <span class="meta">Tangerang</span>
                        </div><!--//quote-source-->
                    </blockquote>
                </div><!--//quote-holder-->
            </div><!--//item-->
        </div><!--//container-->
    </div><!--//testimonials-->
    
    {{-- <div id="features" class="features-section">
        <div class="container text-center">
            <h2 class="section-title">Discover Features</h2>
            <p class="intro">AppKit comes with an AngularJS version, 4 colour schemes and 100+ components</p> --}}
            
            {{-- <div class="tabbed-area row">
                
                <!-- Nav tabs -->
                <ul class="feature-nav nav nav-pill nav-stacked text-left col-md-4 col-sm-6 col-xs-12 col-md-push-8 col-sm-push-6 col-xs-push-0" role="tablist">
                     <li role="presentation" class="active"><a href="#feature-1" aria-controls="feature-1" role="tab" data-toggle="tab"><i class="fa fa-magic"></i>20+ Use Case-based App Pages</a></li>
                     <li role="presentation"><a href="#feature-2" aria-controls="feature-2" role="tab" data-toggle="tab"><i class="fa fa-cubes"></i>100+ Components and Widgets</a></li>
                     <li role="presentation"><a href="#feature-3" aria-controls="feature-3" role="tab" data-toggle="tab"><i class="fa fa-bar-chart"></i>Useful Chart Libraries</a></li>
                    
                    <li role="presentation"><a href="#feature-4" aria-controls="feature-4" role="tab" data-toggle="tab"><i class="fa fa-star"></i>AngularJS Version Included</a></li>
                    
                    <li role="presentation"><a href="#feature-5" aria-controls="feature-5" role="tab" data-toggle="tab"><i class="fa fa-rocket"></i>Built on Bootstrap 3</a></li>
                    
                    <li role="presentation"><a href="#feature-6" aria-controls="feature-6" role="tab" data-toggle="tab"><i class="fa fa-tablet"></i>Fully Responsive</a></li>
                    <li role="presentation"><a href="#feature-7" aria-controls="feature-7" role="tab" data-toggle="tab"><i class="fa fa-file-code-o"></i>Valid HTML5 + CSS3</a></li>
                    <li role="presentation"><a href="#feature-8" aria-controls="feature-8" role="tab" data-toggle="tab"><i class="fa fa-heart"></i>Free Updates &amp; Support + Documentation</a></li>
                    
                </ul>
                
                <!-- Tab panes -->
                <div class="feature-content tab-content col-md-8 col-sm-6 col-xs-12 col-md-pull-4 col-sm-pull-6 col-xs-pull-0">
                    <div role="tabpanel" class="tab-pane fade in active" id="feature-1">
                        <a href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><img class="img-responsive" src="{{asset('template/web/assets/images/feature-1.png" alt="screenshot" ></a>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="feature-2">
                        <a href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><img class="img-responsive" src="assets/images/feature-2.png" alt="screenshot" ></a>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="feature-3">
                        <a href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><img class="img-responsive" src="assets/images/feature-3.png" alt="screenshot" ></a>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="feature-4">
                        <a href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><img class="img-responsive" src="assets/images/feature-4.png" alt="screenshot" ></a>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="feature-5">
                        <a href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><img class="img-responsive" src="assets/images/feature-5.png" alt="screenshot" ></a>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="feature-6">
                        <a href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><img class="img-responsive" src="assets/images/feature-6.png" alt="screenshot" ></a>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="feature-7">
                        <a href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><img class="img-responsive" src="assets/images/feature-7.png" alt="screenshot" ></a>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="feature-8">
                        <a href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><img class="img-responsive" src="assets/images/feature-8.png" alt="screenshot" ></a>
                    </div>
                    
                </div><!--//feature-content-->

                
            </div><!--//tabbed-area--> --}}
            
        {{-- </div> --}}<!--//container-->
    {{-- </div> --}}<!--//features-->
    
    <div class="team-section" id="team">
        <div class="container text-center">
            <h2 class="section-title">Our Team</h2>
            <p class="intro">Lihat tim kami</p>
            <div class="story">
                <p>Developer kampus terdiri dari beberapa orang yang berminat untuk memajukan dunia programming di indonesia. Kami berkomitmen untuk mengembangkan talenta talenta yang berbakat.</p>
            </div>
            <div class="members-wrapper row">
                <div class="item col-md-6 col-sm-6 col-xs-12">
                    <div class="item-inner">
                        <div class="profile">
                            <img class="profile-image img-circle" src="{{asset('template/web/assets/images/ppsyehbi.jpg')}}" alt="Xiaoying Riley" />
                        </div>
                        
                        <div class="member-content">
                            <h3 class="member-name">Syehbi Herbian</h3>
                            <div class="member-title">Co-Founder</div>
                            <ul class="social list-inline">
                                <li><a class="facebook" href="https://www.facebook.com/sebbydong/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="github" href="https://github.com/syehbiherbian" target="_blank"><i class="fa fa-github"></i></a></li>
                               <li><a class="linkedin" href="https://id.linkedin.com/in/syehbiherbian" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                
                            </ul>
                            <div class="member-desc">
                               <p>Berpengalaman di bidang web programming, sekarang sedang bekerja sebagai web developer di digital agency di daerah tangerang <a href="https://twitter.com/syehbiherbian" target="_blank">Twitter</a> and <a href="https://www.facebook.com/sebbydong/" target="_blank">Facebook</a>. Follow me if you like what i do</p>
                            </div><!--//member-desc-->
                        </div><!--//member-content-->
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item col-md-6 col-sm-6 col-xs-12">
                    <div class="item-inner">
                        <div class="profile">
                            <img class="profile-image" src="{{asset('template/web/assets/images/dodi.png')}}" alt="Dodi Rivaldi" />
                        </div>
                        
                        <div class="member-content">
                            <h3 class="member-name">Dodi Rivaldi</h3>
                            <div class="member-title">Founder</div>
                            <ul class="social list-inline">
                                <li><a class="facebook" href="https://www.facebook.com/sebbydong/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="github" href="https://github.com/syehbiherbian" target="_blank"><i class="fa fa-github"></i></a></li>
                               <li><a class="linkedin" href="https://id.linkedin.com/in/syehbiherbian" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                               
                                
                            </ul>
                            <div class="member-desc">
                                <p>Dodi adalah salah satu asisten lab disalah satu perguruan tinggi swasta di tangerang, saat ini ia juga menjadi android developer di salah satu digital agency. 
</p>
                            </div><!--//member-desc-->
                        </div><!--//member-content-->
                    </div><!--//item-inner-->
                </div><!--//item-->
            </div><!--//members-wrapper-->
            <a class="btn btn-cta btn-primary" href="#" style="margin-top: 25px;">Lihat Lebih Lanjut</a>
        </div>

    </div><!--//team-section-->
    
    <div id="pricing" class="pricing-section">
        <div class="container text-center">
            <h2 class="section-title">Daftar Kursus</h2>
            <div class="intro">AppKit's future updates are 100% FREE for existing customers</div>
            <div class="pricing-wrapper">
                <div class="item item-1 col-md-4 col-sm-4 col-xs-12">
                    <div class="item-inner">
                        <h3 class="item-heading">Single Application</h3>
                        <div class="price-figure">
                            <span class="currency">$</span><span class="number">20</span>
                        </div><!--//price-figure-->
                        <div class="price-desc">
                            <p>Restricted to a single installation...</p>
                            <a href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank">License Details</a>
                            
                            
                        </div><!--//price-desc-->
                        <a class="btn btn-cta" href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm">Buy Now</a>
                        
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item item-2 col-md-4 col-sm-4 col-xs-12">
                    <div class="item-inner">
                        <h3 class="item-heading">Multiple Applications</h3>
                        <div class="price-figure">
                            <span class="currency">$</span><span class="number">80</span>
                        </div><!--//price-figure-->
                        <div class="price-desc">
                            <p>May extend to multiple installations...</p>
                            <a href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank">License Details</a>
                            
                            
                        </div><!--//price-desc-->
                        <a class="btn btn-cta" href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm">Buy Now</a>
                        
                    </div><!--//item-inner-->
                </div><!--//item-->
                
                <div class="item item-3 col-md-4 col-sm-4 col-xs-12">
                    <div class="item-inner">
                        <h3 class="item-heading">Extended</h3>
                        <div class="price-figure">
                            <span class="currency">$</span><span class="number">1200</span>
                        </div><!--//price-figure-->
                        <div class="price-desc">
                            <p>May license, sublicense, redistribute, or resell the item...</p>
                            <a href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank">License Details</a>
                        </div><!--//price-desc-->
                        <a class="btn btn-cta" href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank">Buy Now</a>
                        
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item item-3 col-md-4 col-sm-4 col-xs-12">
                    <div class="item-inner">
                        <h3 class="item-heading">Extended</h3>
                        <div class="price-figure">
                            <span class="currency">$</span><span class="number">1200</span>
                        </div><!--//price-figure-->
                        <div class="price-desc">
                            <p>May license, sublicense, redistribute, or resell the item...</p>
                            <a href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank">License Details</a>
                        </div><!--//price-desc-->
                        <a class="btn btn-cta" href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank">Buy Now</a>
                        
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item item-3 col-md-4 col-sm-4 col-xs-12">
                    <div class="item-inner">
                        <h3 class="item-heading">Extended</h3>
                        <div class="price-figure">
                            <span class="currency">$</span><span class="number">1200</span>
                        </div><!--//price-figure-->
                        <div class="price-desc">
                            <p>May license, sublicense, redistribute, or resell the item...</p>
                            <a href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank">License Details</a>
                        </div><!--//price-desc-->
                        <a class="btn btn-cta" href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank">Buy Now</a>
                        
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item item-3 col-md-4 col-sm-4 col-xs-12">
                    <div class="item-inner">
                        <h3 class="item-heading">Extended</h3>
                        <div class="price-figure">
                            <span class="currency">$</span><span class="number">1200</span>
                        </div><!--//price-figure-->
                        <div class="price-desc">
                            <p>May license, sublicense, redistribute, or resell the item...</p>
                            <a href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank">License Details</a>
                        </div><!--//price-desc-->
                        <a class="btn btn-cta" href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank">Buy Now</a>
                        
                    </div><!--//item-inner-->
                </div><!--//item-->
            </div><!--//pricing-wrapper-->
            
        </div><!--//container-->
    </div><!--//pricing-section-->
    <div id="contact" class="contact-section">
        <div class="container text-center">
            <h2 class="section-title">Contact Us</h2>
            <div class="contact-content">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis.</p>
                
            </div>
            <a class="btn btn-cta btn-primary" href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm">Get in Touch</a>
            
        </div><!--//container-->
    </div><!--//contact-section-->
    
    <footer class="footer text-center">
        <div class="container">
            <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
            <small class="copyright">Designed with <i class="fa fa-heart"></i> by Developer Kampus</small>
            
            
        </div><!--//container-->
    </footer>
@endsection