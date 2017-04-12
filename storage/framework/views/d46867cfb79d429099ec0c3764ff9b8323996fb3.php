<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Jasindo Syariah</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Open+Sans|Raleway" rel="stylesheet">
<!--     <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
 -->
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/flexslider.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/bootstrap.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/font-awesome.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/style.css')); ?>" />
    <link href="https://fonts.googleapis.com/css?family=Italianno" rel="stylesheet"> 
    <!-- =======================================================
        Theme Name: MyBiz
        Theme URL: https://bootstrapmade.com/mybiz-free-business-bootstrap-theme/
        Author: BootstrapMade.com
        Author URL: https://bootstrapmade.com
    ======================================================= -->

    <style type="text/css">
        .top-nav{
            border-color: #00cc00;
        }
        .top-nav p:before{
            color: #00cc00;
        }
        .top-nav .top-left i:hover{
            color:#00cc00;
        }

    </style>



</head>
<body id="top" data-spy="scroll">

    <!--top header-->
    <header id="home">
        <section class="top-nav hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="top-left">

                            <ul>
                                <li><a href="#" ><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="top-right">
                            <p id="eri">Location:<span>Graha MR-21, Lantai 10 Jl. Menteng Raya No. 21 Jakarta Pusat 10340</span></p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!--main-nav-->

        <div id="main-nav">

            <nav class="navbar">
                <div class="container">

                    <div class="navbar-header">
                        <a href="index.html" class="navbar-brand">
                            <img src=<?php echo e(asset('images/logo.png')); ?> width="150" height="80" style="margin-top:-30px;" alt="Logo">  
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ftheme">
                            <span class="sr-only">Toggle</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="navbar-collapse collapse" id="ftheme">

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#home">Beranda</a></li>
                            <li><a href="#about">Tentang Jasindo Syariah</a></li>
                            <li><a href="#service">Produk</a></li>
                            <li><a href="#portfolio">media corner</a></li>
                            <li><a href="#contact">kontak</a></li>
                            <li class="hidden-sm hidden-xs">
                                <a href="#" id="ss"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </li>
                        </ul>

                    </div>

                    <div class="search-form">
                        <form>
                            <input type="text" id="s" size="40" placeholder="Search..." />
                        </form>
                    </div>

                </div>
            </nav>
        </div>

    </header>

    <!--slider-->
    <div id="slider" class="flexslider">

        <ul class="slides" >
            <li>
                <img src="images/DSC_0499.jpg" style="height: 50% !important">

                <div class="caption">
                    <h2><span>Jasindo Syariah</span></h2> 
                    <h2><span>PT Asuransi Jasindo Syariah</span></h2>
                    <p  style="color:white">merupakan perushaan asuransi umum dnegna prinsip syraiah yang pertama kali terbentuk sebagai hasil dari pemisahan usaha (spin-off) dari Unit usaha Takaful - PT Asuransi Jasindo Syariah</p>
                    <button class="btn">Baca Lebih Lanjut</button>                 
                </div>

            </li>
            <li>
                <img src="images/Marketing 1.jpg">

                <div class="caption">
                    <!-- <h2><span>Jasindo Syariah</span></h2>  -->
                    <h2><span>Visi Perusahaan</span></h2>
                    <p style="color:white">Menjadi perusahaan asuransi syariah yang handal dan terpercaya</p>
                    <button class="btn">Read More</button>                 
                </div>

            </li>
            <li>
                <img src="images/Marketing 2.jpg">

                <div class="caption">
                    <!-- <h2><span>Jasindo Syariah</span></h2> --> 
                    <h2><span>Misi Perusahaan</span></h2>
                    <p  style="color:white">Menyelenggarakan usaha asuransi syariah dengan senantiasa mengoptimalkan dana perserta melalui penerapan pelayanan prima</p>
                    <button class="btn">Read More</button>                 
                </div>

            </li>
        </ul>

    </div>

    <!--about-->
    <div id="about">

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                    <div class="about-heading">
                        <h2>Tentang Jasindo Syariah</h2> 
                        <p>
                            VISI : Menjadi perusahaan asuransi syariah yang handal dan terpercaya
                        </p>
                        <p>MISI : Menyelenggarakan usaha asuransi syariah dengan senantiasa mengoptimalkan dana peserta melalui penerapan pelayanan prima.</p>
                    </div>
                </div>
            </div>      
        </div>
        <hr style="width: 90%; border:2px solid #eee; margin:30px;">
        <!--about wrapper left-->
        <div class="container budaya-perusahaan-container">

            <div class="row">
                <div class="col-xs-12 hidden-sm col-md-5">

                    <div class="about-left">
                        <img src="images/marketing.jpg" alt="" style="margin-top :200px">
                    </div>

                </div>

                <!--about wrapper right-->
                <div class="col-xs-12 col-md-7">
                    <div class="about-right">
                        <div class="about-right-heading">
                            <h1>Budaya Perusahaan</h1>
                        </div>
  
                        <div class="about-right-boot">
                            <div class="about-right-wrapper">
                                <a href="#"><h3>Fathonah</h3></a>
                                <p>Menyelaraskan keunggulan perseorangan dengan tetap berinovasi serta menawarkan pelayanan prima melalui sumber daya manusia yang profesional dan berkualitas</p>
                            </div>
                        </div>

                        <div class="about-right-best">
                            <div class="about-right-wrapper">
                                <a href="#"><h3>Amanah</h3></a>
                                <p>Menerapkan <em>Good Corporate Governance</em> untuk memastikan layanan yang berkualitas, berintegritas dan transparan.</p><br/>
                            </div>
                        </div>

                        <div class="about-right-support">
                            <div class="about-right-wrapper">
                                <a href="#"><h3>Siddiq</h3></a>
                                <p>Menjalankan kegiatan usaha sesuai dengan kaidah-kaidah Islam degnan tetap mempertahankan daya saing yang berkesinambungan.</p>
                            </div>
                        </div>
                        <div class="about-right-support2">
                            <div class="about-right-wrapper">
                                <a href="#"><h3>Tabligh</h3></a>
                                <p>Melestarikan hubungan yang erat dengan pelanggan melalui pengembangan <em>Corporate Communication</em> dan pelayanan ritel yang arif dan proaktif</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--about bg-->
        <!-- <div id="about-bg">

            <div class="container">
                <div class="row">

                    <div class="about-bg-heading">
                        <h1>Jasindo Syariah</h1>
                        <p>Pencapaian Kami</p>
                    </div>

                    <div class=" col-xs-12 col-md-3">
                        <div class="about-bg-wrapper">
                                <span class="count"><h1><span class="border">32</span>15</h1></span>
                            <p>happy client</p>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-3">
                        <div class="about-bg-wrapper">
                            <span class="count"><h1>2217</h1></span>
                            <p>projects</p>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-3">
                        <div class="about-bg-wrapper">
                            <span class="count"><h1>1522</h1></span>
                            <p>branches</p>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-3">
                        <div class="about-bg-wrapper">
                            <span class="count"><h1>3151</h1></span>
                            <p>expert team</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="cover"></div>

        </div>  -->

        <!--service-->
        <div id="service" style="margin-top: 10px;">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-6 col-md-offset-3">
                        <div class="service-heading">
                            <h2>Produk</h2> 
                            <p>PRODUK ASURANSI - BUNDLING PRODUCT - PRODUK ASURANSI MIKRO</p>
                        </div>
                    </div>
                </div>      
            </div>

            <!--services wrapper-->
    <section class="services-style-one">
        <div class="outer-box clearfix">
            
            <div class="services-column">
                <div class="content-outer">
                    <div class="row clearfix">
                        
                        <div class="service-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="icon-img"><img src="images/icons/accident.png" width="50" height="50"></div>
                                <h4>ANEKA/<em>VARIOUS</em></h4>
                                <div class="text">Merupakan kumpulan dari sejumlah dari sejumlah produk asuransi, diantaranya yaitu <em>Personal Accident</em> untuk memberikan jaminan atas kecacatan atau hilangnya nyawa Peserta yang diakibatkan oleh kecelakaan; serta PA Plus untuk memberikan jaminan atas kecacatan atau hilangnya nyawa Peserta oleh kecelakaan dan Natural Death, Cash In Transit dan Cash In Safe untuk memberikan jaminan atas pengiriman uang, dll. </div>
                            </div>
                        </div>
                        
                        <div class="service-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="icon-img"><img src="images/icons/fire.png" width="50" height="50"></div>
                                <h4>KEBAKARAN/PROPERTY</h4>
                                <div class="text">Produk asuransi yang memberikan jaminan terhadap kerugian yang ditimbulkan oleh musibah kebakaran dan risiko-risiko lain yang dijamin didalam Polis terhadap aset harta benda/properti yang dimiliki oleh Peserta.</div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="service-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="icon-img"><img src="images/icons/vehicle.png" width="50" height="50"></div>
                                <h4>KENDARAAN BERMOTOR/MOTOR VEHICLE</h4>
                                <div class="text">Produk asuransi yang memberikan jaminan atas kerugian terhadap kendaraan bermotor milik Peserta. Jasindo Syariah memiliki 2 (dua) jenis produk asuransi kendaraan bermotor, yaitu Kendaraan Bermotor Roda Dua dan Kendaraan Bermotor Roda Empat.</div>
                            </div>
                        </div>
                        
                        <div class="service-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="icon-img"><img src="images/icons/delivery.png" width="50" height="50"></div>
                                <h4>PENGANGKUTAN/CARGO</h4>
                                <div class="text">Merupakan produk asuransi yang memberikan jaminan atas barang-barang logistik, baik yang dikirimkan melalui pengangkutan darat, laut dan maupun udara.</div>
                            </div>
                        </div>
                       <div class="clearfix"></div>
                        <div class="service-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="icon-img"><img src="images/icons/enginering.png" width="50" height="50"></div>
                                <h4>REKAYASA/ENGINEERING</h4>
                                <div class="text">Produk asuransi yang memberikan jaminan atas kerugian terhadap aset-aset <em>engineering</em>, seperti alat-alat produksi mesin-mesin pabrik dan proyek-proyek konstruksi.</div>
                            </div>
                        </div>
                        
                         <div class="service-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="icon-img"><img src="images/icons/plan.png" width="50" height="50"></div>
                                <h4>RANGKA PESAWAT TERBANG/AVIATION HULL</h4>
                                <div class="text">Produk ini bertujuan untuk memberikan jaminan perlindungan kerugian atas segala aktivitas terkait penerbangan / aviation seperti risiko terhadap rangka pesawat, tanggung jawab hukum aviasi terhadap pihak ketiga <em>(Aviation Liability), personal accident crew, loss of license</em> untuk Pilot, serta <em>ground handling liability.</em></div>
                            </div>
                        </div>
                        <div class="service-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="icon-img"><img src="images/icons/offshore.png" width="50" height="50"></div>
                                <h4>MIGAS/OIL AND GAS</h4>
                                <div class="text">Produk Asuransi yang dikhususkan pada kegiatan industri minyak dan gas ini memberikan jaminan ganti rugi terhadap kerusakan atau kerugian baik <em>on-shore</em> maupun <em>off-shore</em>.</div>
                            </div>
                        </div>
                        <div class="service-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="icon-img"><img src="images/icons/kapal.png" width="50" height="50"></div>
                                <h4>RANGKA KAPAL/MARINE HULL</h4>
                                <div class="text">Produk asuransi marine hull ini bertujuan untuk memberikan jaminan perlindungan kerugian atas kecelakaan maupun konsekuensi yang timbul dari aktivitas pelayaran dan kegiatan-kegiatan pendukungnya, dengan jaminan yang mencakup kerugian karena kerusakan fisik maupun tanggung jawab hukum kepada pihak ketiga.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Content Column-->
            <div class="content-column clearfix">
                <div class="content-box">
                    <div class="inner-box">
                        <!--Section Title-->
                        <div class="sec-title aligned-right">
                            <h2>Our Servi<span>ces</span></h2>
                        </div>
                        <div class="text">Lorem Ipsum is simply dummy text printing and typesetting industry. Lorem Ipsum has been industry's standard dummy text ever since 1500s, when an unknown printer specimen book. </div>
                        
                        <button class="btn">learn more</button>
                    </div>
                </div>
            </div>


        </div>
    </section>



            <!--service gapping-->
            <!-- <div class="service-footer hidden-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="service-footer-left">
                                <h3>Mari <span>Berkonsultasi dengan kami.</span> Book an appointment</h3>
                                <p>Lorem Ipsum is simply dummy text printing and typesetting industry. Lorem Ipsum has been industry's standard dummy text ever since 1500s, when an unknown printer specimen book.</p>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="service-footer-right">
                                <button class="btn">book now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>

        <!--portfolio-->
        <div id="portfolio">
            <div class="container">
                <div class="row">

                    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                        <div class="portfolio-heading">
                            <h2>MEDIA CORNER</h2> 
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent metus magna,malesuada porta elementum vitae.</p>
                        </div>
                    </div>

                </div>      
            </div>

            <div class="portfolio-thumbnail">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-xs-6 col-sm-3 col-md-3">
                            <div class="item">
                                <img src="images/portfolio/portfolio1.jpg" alt="">
                                <div class="caption">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                    <p>lorem ipsum amet</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-3 col-md-3">
                            <div class="item">
                                <img src="images/portfolio/portfolio2.jpg" alt="">
                                <div class="caption">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                    <p>lorem ipsum amet</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-3 col-md-3">
                            <div class="item">
                                <img src="images/portfolio/portfolio3.jpg" alt="">
                                <div class="caption">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                    <p>lorem ipsum amet</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-3 col-md-3">
                            <div class="item">
                                <img src="images/portfolio/portfolio4.jpg" alt="">
                                <div class="caption">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                    <p>lorem ipsum amet</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-3 col-md-3">
                            <div class="item">
                                <img src="images/portfolio/portfolio5.jpg" alt="">
                                <div class="caption">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                    <p>what you see</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-3 col-md-3">
                            <div class="item">
                                <img src="images/portfolio/portfolio6.jpg" alt="">
                                <div class="caption">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                    <p>lorem ipsum amet</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-3 col-md-3">
                            <div class="item">
                                <img src="images/portfolio/portfolio7.jpg" alt="">
                                <div class="caption">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                    <p>lorem ipsum amet</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-3 col-md-3">
                            <div class="item">
                                <img src="images/portfolio/portfolio8.jpg" alt="">
                                <div class="caption">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                    <p>lorem ipsum amet</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!--contact form-->
        <div id="get-touch">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                        <div class="get-touch-heading">
                            <h2>kontak kami</h2> 
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent metus magna,malesuada porta elementum vitae.</p>
                        </div>
                    </div>
                </div>   

                <div class="content">
                    <div class="row">
                        <div id="sendmessage">Your message has been sent. Thank you!</div>
                        <div id="errormessage"></div>
                        
                         <form action="" method="post" role="form" class="form contactForm">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Name Anda" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email Anda" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Pesan"></textarea>
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <div class="submit">
                                <button class="btn btn-default" type="submit">Kirim</button>
                            </div>
                        </form>
                    </div>
            </div>  
            </div>
        </div>


        <!--contact-->
        <div id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                        <div class="contact-heading">
                            <h2>Alamat</h2> 
                            <p>Graha MR-21, Lantai 10 Jl. Menteng Raya No. 21 Jakarta Pusat 10340
                            T:(021) 3983 1974/3983 1975
                            F:(021) 3983 1976</p>
                        </div>
                    </div>
                </div>      
            </div>

            <div id="google-map" data-latitude="-6.1845979" data-longitude="106.8356294"></div>
            
        </div>


        <!--client-->
        <!-- <div id="client">
            <div class="container">
                <div class="row">

                    <div class="col-sm-4 col-md-2">
                        <span></span><img src="images/client/client1.png" alt="">
                    </div>

                    <div class="col-sm-4 col-md-2">
                        <span></span><img src="images/client/client2.png" alt="">
                    </div>

                    <div class="col-sm-4 col-md-2">
                        <span></span><img src="images/client/client3.png" alt="">
                    </div>

                    <div class="col-sm-4 col-md-2">
                        <span></span><img src="images/client/client4.png" alt="">
                    </div>

                    <div class="col-sm-4 col-md-2">
                        <span></span><img src="images/client/client5.png" alt="">
                    </div>

                    <div class="col-sm-4 col-md-2">
                        <span></span><img src="images/client/client6.png" alt="">
                    </div>

                </div>
            </div>
        </div> -->

        <!--footer-->
        <!-- <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-heading">
                            <h3><span>about</span> us</h3>
                            <p>To explore strange new worlds to seek out new life and new civilizations to boldly go where no man has gone before. It's time to play the music.</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="footer-heading">
                            <h3><span>latest</span> news</h3>
                            <ul>
                                <li><a href="#">Trends don't matter, but techniques do</a></li>
                                <li><a href="#">Trends don't matter, but techniques do</a></li>
                                <li><a href="#">Trends don't matter, but techniques do</a></li>
                                <li><a href="#">Trends don't matter, but techniques do</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="footer-heading">
                            <h3><span>follow</span> us on instagram</h3>
                            <div class="insta">
                                <ul>
                                    <img src="images/footer/footer1.jpg" alt="">
                                    <img src="images/footer/footer2.jpg" alt="">
                                    <img src="images/footer/footer3.jpg" alt="">
                                    <img src="images/footer/footer4.jpg" alt="">
                                    <img src="images/footer/footer5.jpg" alt="">
                                    <img src="images/footer/footer6.jpg" alt="">
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div> -->

        <!--bottom footer-->
        <div id="bottom-footer" class="hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-left">
                            &copy; <!-- MyBix Theme. --> All rights reserved
                            <div class="credits">
                                <!-- 
                                    All the links in the footer should remain intact. 
                                    You can delete the links only if you purchased the pro version.
                                    Licensing information: https://bootstrapmade.com/license/
                                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=MyBiz
                                -->
                                <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="footer-right">
                            <ul class="list-unstyled list-inline pull-right">
                                <li><a href="#home">Home</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#service">Service</a></li>
                                <li><a href="#portfolo">Portfolio</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

    
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
<script type="text/javascript">
   $(document).ready(function(){
    $("#eri").click(function(){
        $(this).css('color','red');
    });
});
</script> 
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/jquery.inview.js"></script>
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/script.js"></script>
    <script src="contactform/contactform.js"></script>
    
</body>
</html>