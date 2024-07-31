@extends('projectPanel.layouts.master')
@section('content')

    <section class="section section-search">
        <div class="container">
            <div class="banner-wrapper">
                <div class="banner-header">
                    <h6>Gülümsemenize özen göstermek için çalışıyoruz</h6>
                    <h1>Sağlıklı Yaşam İçin Harika Gülümseme!</h1>
                    <p>Çok yönlü bir anlayışla, tüm bu doğal hatalar, tam anlamıyla doğru bir şekilde, tüm verilerle
                        birlikte, gerçek bir veri ve neredeyse güzel bir yaşam mimarisine sahip, açıklayıcı bir şekilde
                        açıklanıyor.</p>
                    <a href="{{route('appointment')}}" class="btn-yellow">Randevu Alın</a>
                </div>
            </div>
        </div>
    </section>
    <section class="top-service-col">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-4 text-center">
                    <div class="service-box">
                        <div class="card">
                            <div class="card-body">
                                <div class="service-icon">
                                    <img src="{{asset('assets/img/service1.jpg')}}" alt="">
                                </div>
                                <h3>Kozmetik Diş Hekimliği</h3>
                                <p>Tüm bu doğal hataların bilincinde olarak, çok fazla bilgi ve mutlulukla, tam bir geri
                                    dönüş elde etmek için, aynı şeyi icat etmek için bir şeyler yapın.</p>
                                <div class="service-btn">
                                    <a href="#"><i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 text-center">
                    <div class="service-box">
                        <div class="card">
                            <div class="card-body">
                                <div class="service-icon">
                                    <img src="{{asset('assets/img/service2.jpg')}}" alt="">
                                </div>
                                <h3>Hızlı Muayene</h3>
                                <p>Her şeyde çok yönlü bir hata var ve bu hatanın nedeni tamamen açık, tam bir geri
                                    dönüş yok, aynı ipsa hatası da gönüllü.</p>
                                <div class="service-btn">
                                    <a href="#"><i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 text-center">
                    <div class="service-box">
                        <div class="card">
                            <div class="card-body">
                                <div class="service-icon">
                                    <img src="{{asset('assets/img/service3.jpg')}}" alt="">
                                </div>
                                <h3>En İyi Bakım</h3>
                                <p>Tüm bu doğal hatalarla ilgili bilinçli olarak, tüm bunlar göz önünde
                                    bulundurulduğunda, tam bir geri dönüş elde etmek için, her şey yolundayken aynı
                                    ipsa.</p>
                                <div class="service-btn">
                                    <a href="#"><i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature -->
    <section class="feature-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="left">
                        <h6>bizimle bağlantı kurun</h6>
                        <h2>Çok İyi Bir Bakım ve Güvenlik Sağlıyoruz!</h2>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="right">
                        <p>Çok yönlü bir doğal hatayla, tam bir açıklayıcı bilgiyle, tamamen gerçek bir hatayla, gerçek
                            bir veri ve yarı mimari bir yaşam tarzıyla, açık bir şekilde, çok yönlü bir hatayla ilgili
                            bir anlayışa sahip oldunuz.</p>
                        <a href="{{route('appointment')}}" class="btn-yellow">Randevu Alın</a>
                    </div>
                </div>
            </div>
            <div class="row feature-column">
                <div class="feature-box">
                    <div class="inner-feature-box text-center">
                        <div class="feature-icon">
                            <img src="{{asset('assets/img/feature1.png')}}" alt="">
                        </div>
                        <h4> tıbbi kayıtları<br>gözden geçirin</h4>
                        <p>Tüm bu doğal hataların yanı sıra istemli hatanın da farkındasınız.</p>
                        <div class="feature-btn">
                            <a href="#"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="feature-box">
                    <div class="inner-feature-box text-center">
                        <div class="feature-icon">
                            <img src="{{asset('assets/img/feature2.png')}}" alt="">
                        </div>
                        <h4>aylık kontroller <br>Mevcut</h4>
                        <p>Tüm bu doğal hataların yanı sıra istemli hatanın da farkındasınız.</p>
                        <div class="feature-btn">
                            <a href="#"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="feature-box">
                    <div class="inner-feature-box text-center">
                        <div class="feature-icon">
                            <img src="{{asset('assets/img/feature3.png')}}" alt="">
                        </div>
                        <h4>kanı kontrol et<br>baskıla</h4>
                        <p>Tüm bu doğal hataların yanı sıra istemli hatanın da farkındasınız.</p>
                        <div class="feature-btn">
                            <a href="#"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="feature-box">
                    <div class="inner-feature-box text-center">
                        <div class="feature-icon">
                            <img src="{{asset('assets/img/feature4.png')}}" alt="">
                        </div>
                        <h4>İyi Nitelikli<br>Doktorlar</h4>
                        <p>Tüm bu doğal hataların yanı sıra istemli hatanın da farkındasınız.</p>
                        <div class="feature-btn">
                            <a href="#"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="feature-box">
                    <div class="inner-feature-box text-center">
                        <div class="feature-icon">
                            <img src="{{asset('assets/img/feature5.png')}}" alt="">
                        </div>
                        <h4>7/24 Acil <br>Destekler</h4>
                        <p>Tüm bu doğal hataların yanı sıra istemli hatanın da farkındasınız.</p>
                        <div class="feature-btn">
                            <a href="#"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Feature -->
    <!-- Aboutus-col-->
    <section class="aboutus-col">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="about-left">
                        <img src="{{asset('assets/img/about-left.png')}}" alt="">
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="about-right">
                        <h6>DİŞLERİNİZİN BAKIMI</h6>
                        <h2>Dişleriniz Günlük Rutinimizde Önemli Bir Rol Oynuyor</h2>
                        <p>Çok yönlü bir doğal hatanın, tam bir açıklayıcı bilgi olarak, tam bir gerçekliğe sahip
                            olması, gerçek bir keşif verisi olması ve neredeyse açık bir şekilde hayat tarzının mimari
                            olarak anlaşılması, çok sayıda doğal hatanın tam olarak ortaya çıkmasıyla ortaya çıkan bir
                            anlayış.</p>
                        <p>Çok iyi bir başarı, tam bir geri dönüş, her veri için bir mimari ve çok iyi bir yaşam tarzı
                            açık bir şekilde açıklanmış ve her şeyde bir çok doğal hata varken, bir başkası da dahil
                            olmak üzere tüm bu verilerle birlikte, tam bir veritatis ve benzeri bir veritatis ile
                            birlikte yarı mimari güzel hayat, dikta güneş açıklayıcı.</p>
                        <p class="mb-0">Çok yönlü bir doğal hata, tam bir açıklayıcı bilgi, tam bir gerçek hata, tüm
                            verilerle birlikte gerçek bir mimari ve açık bir şekilde açıklanmış bir hayat hikayesi
                            laudantyum, totam rem aperiam, eaque ipsa quae ab illo mucit veritatis ve quasi mimari güzel
                            geçmiş hayat dikta sunt açıklayıcı Sed ut ut perspi ciatis unde omnis iste natus error sit
                            voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae a illo
                            mucit veritatis ve yarı mimari güzel hayat çok açık bir söz.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Aboutus-col-->

    <!-- Testimonial -->
    <section class="testimonial">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <!-- Slider -->
                    <div class="testimonial-slider slider">

                        <!-- Slider Item -->
                        <div class="testimonial-item">
                            <div class="row">
                                <div class="col-12 col-lg-9">
                                    <div class="left">
                                        <h6>Hastalarımızın Hikayeleri</h6>
                                        <h2>Referanslar</h2>
                                        <p>Çok yönlü bir doğal hatanın, tam bir açıklayıcı bilgi olarak, tam bir
                                            gerçekliğe sahip olması, gerçek bir keşif verisi olması ve neredeyse açık
                                            bir şekilde hayat tarzının mimari olarak anlaşılması, çok sayıda doğal
                                            hatanın tam olarak ortaya çıkmasıyla ortaya çıkan bir anlayış.</p>
                                        <p>Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inve nore
                                            veritatis ve quasi mimari güzel yaşam tarzı açık bir şekilde açıklanıyor ve
                                            her yerde bir çok şey için doğal bir hata var ve bu yüzden tam bir gerçek,
                                            tam olarak gerçek bir veri, aynı ipsa ve neredeyse güzel bir yaşam mimarisi,
                                            dikta ve xplicabo.</p>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <div class="testimonial-profile text-center">
                                        <div>
                                            <div class="profile-icon">
                                                <img src="{{asset('assets/img/profile1.jpg')}}" alt="">
                                            </div>
                                            <h4>Jillan Smith</h4>
                                            <span>Business Organiser</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Slider Item -->

                        <!-- Slider Item -->
                        <div class="testimonial-item">
                            <div class="row">
                                <div class="col-12 col-lg-9">
                                    <div class="left">
                                        <h6>Hastalarımızın Hikayeleri</h6>
                                        <h2>Referanslar</h2>
                                        <p>Çok yönlü bir doğal hatanın, tam bir açıklayıcı bilgi olarak, tam bir
                                            gerçekliğe sahip olması, gerçek bir keşif verisi olması ve neredeyse açık
                                            bir şekilde hayat tarzının mimari olarak anlaşılması, çok sayıda doğal
                                            hatanın tam olarak ortaya çıkmasıyla ortaya çıkan bir anlayış.</p>
                                        <p>Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inve nore
                                            veritatis ve quasi mimari güzel yaşam tarzı açık bir şekilde açıklanıyor ve
                                            her yerde bir çok şey için doğal bir hata var ve bu yüzden tam bir gerçek,
                                            tam olarak gerçek bir veri, aynı ipsa ve neredeyse güzel bir yaşam mimarisi,
                                            dikta ve xplicabo.</p>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <div class="testimonial-profile text-center">
                                        <div>
                                            <div class="profile-icon">
                                                <img src="{{asset('assets/img/profile1.jpg')}}" alt="">
                                            </div>
                                            <h4>Jillan Smith</h4>
                                            <span>Business Organiser</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Slider Item -->

                        <!-- Slider Item -->
                        <div class="testimonial-item">
                            <div class="row">
                                <div class="col-12 col-lg-9">
                                    <div class="left">
                                        <h6>Hastalarımızın Hikayeleri</h6>
                                        <h2>Referanslar</h2>
                                        <p>Çok yönlü bir doğal hatanın, tam bir açıklayıcı bilgi olarak, tam bir
                                            gerçekliğe sahip olması, gerçek bir keşif verisi olması ve neredeyse açık
                                            bir şekilde hayat tarzının mimari olarak anlaşılması, çok sayıda doğal
                                            hatanın tam olarak ortaya çıkmasıyla ortaya çıkan bir anlayış.</p>
                                        <p>Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inve nore
                                            veritatis ve quasi mimari güzel yaşam tarzı açık bir şekilde açıklanıyor ve
                                            her yerde bir çok şey için doğal bir hata var ve bu yüzden tam bir gerçek,
                                            tam olarak gerçek bir veri, aynı ipsa ve neredeyse güzel bir yaşam mimarisi,
                                            dikta ve xplicabo.</p>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <div class="testimonial-profile text-center">
                                        <div>
                                            <div class="profile-icon">
                                                <img src="{{asset('assets/img/profile1.jpg')}}" alt="">
                                            </div>
                                            <h4>Jillan Smith</h4>
                                            <span>Business Organiser</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Slider Item -->

                    </div>
                    <!-- /Slider -->

                </div>
            </div>
        </div>
    </section>

    <!-- Include jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Include Slick JS -->
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('.testimonial-slider').slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                adaptiveHeight: true
            });
        });
    </script>
    <!-- /Testimonial -->

    <!-- Doctor Section-->
    <section class="doctors-col">
        <div class="container">
            <div class="row justify-content-center">
                <div class="doctors-title text-center">
                    <h6>MEET OUR DOCTORS</h6>
                    <h2>Our Doctors</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="doctor-slider slider slick-initialized slick-slider">
                        <button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">Previous
                        </button>
                        <div class="slick-list draggable">
                            <div class="slick-track"
                                 style="opacity: 1; width: 40000px; transform: translate3d(-310px, 0px, 0px);">
                                <div class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true"
                                     tabindex="-1">
                                    <div>
                                        <div class="profile-widget" style="width: 100%; display: inline-block;">
                                            <div class="doc-img">
                                                <a href="doctor-profile.html" tabindex="-1">
                                                    <img class="img-fluid" alt="User Image"
                                                         src="{{asset('assets/img/doctors/doctor-08.jpg')}}">
                                                </a>
                                            </div>
                                            <div class="pro-content">
                                                <h3 class="title">
                                                    <a href="doctor-profile.html" tabindex="-1">Jillisa Tremblay</a>
                                                </h3>
                                                <p class="speciality">MBBS, MD - Dermatology</p>
                                                <div class="rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <span class="d-inline-block average-rating">(20)</span>
                                                </div>
                                                <ul class="available-info">
                                                    <li>
                                                        <i class="fas fa-map-marker-alt"></i> California, USA
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-calendar-check"></i> Available on Fri, 22 Mar
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-wallet"></i> $100 - $400
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="pro-footer">
                                                <ul class="policy-menu text-center">
                                                    <li><a href="#" tabindex="-1">View Profile</a></li>
                                                    <li><a href="#" tabindex="-1"> Book Now</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-current slick-active" data-slick-index="0"
                                     aria-hidden="false">
                                    <div>
                                        <div class="profile-widget" style="width: 100%; display: inline-block;">
                                            <div class="doc-img">
                                                <a href="doctor-profile.html" tabindex="0">
                                                    <img class="img-fluid" alt="User Image"
                                                         src="{{asset('assets/img/doctors/doctor-05.jpg')}}">
                                                </a>
                                            </div>
                                            <div class="pro-content">
                                                <h3 class="title">
                                                    <a href="doctor-profile.html" tabindex="0">Denby Cathey</a>
                                                </h3>
                                                <p class="speciality">MBBS, MD - Ophthalmology</p>
                                                <div class="rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star"></i>
                                                    <span class="d-inline-block average-rating">(66)</span>
                                                </div>
                                                <ul class="available-info">
                                                    <li>
                                                        <i class="fas fa-map-marker-alt"></i> Michigan, USA
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-calendar-check"></i> Available on Fri, 20 Mar
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-wallet"></i> $50 - $700
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="pro-footer">
                                                <ul class="policy-menu text-center">
                                                    <li><a href="#" tabindex="0">View Profile</a></li>
                                                    <li><a href="#" tabindex="0"> Book Now</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1">
                                    <div>
                                        <div class="profile-widget" style="width: 100%; display: inline-block;">
                                            <div class="doc-img">
                                                <a href="doctor-profile.html" tabindex="-1">
                                                    <img class="img-fluid" alt="User Image"
                                                         src="{{asset('assets/img/doctors/doctor-01.jpg')}}">
                                                </a>
                                            </div>
                                            <div class="pro-content">
                                                <h3 class="title">
                                                    <a href="doctor-profile.html" tabindex="-1">Orali Fisher</a>
                                                </h3>
                                                <p class="speciality">BDS - Dental Cosmetology</p>
                                                <div class="rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="far fa-star"></i>
                                                    <span class="d-inline-block average-rating">(23)</span>
                                                </div>
                                                <ul class="available-info">
                                                    <li>
                                                        <i class="fas fa-map-marker-alt"></i> Florida, USA
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-calendar-check"></i> Available on Mon, 22 Sep
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-wallet"></i> $150 - $220
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="pro-footer">
                                                <ul class="policy-menu text-center">
                                                    <li><a href="#" tabindex="-1">View Profile</a></li>
                                                    <li><a href="#" tabindex="-1"> Book Now</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1">
                                    <div>
                                        <div class="profile-widget" style="width: 100%; display: inline-block;">
                                            <div class="doc-img">
                                                <a href="doctor-profile.html" tabindex="-1">
                                                    <img class="img-fluid" alt="User Image"
                                                         src="{{asset('assets/img/doctors/doctor-02.jpg')}}">
                                                </a>
                                            </div>
                                            <div class="pro-content">
                                                <h3 class="title">
                                                    <a href="doctor-profile.html" tabindex="-1">Gennaro Weiner</a>
                                                </h3>
                                                <p class="speciality">MDS - Dental Cosmetology</p>
                                                <div class="rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="far fa-star"></i>
                                                    <span class="d-inline-block average-rating">(35)</span>
                                                </div>
                                                <ul class="available-info">
                                                    <li>
                                                        <i class="fas fa-map-marker-alt"></i> Newyork, USA
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-calendar-check"></i> Available on Fri, 22 Mar
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-wallet"></i> $50 - $300
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="pro-footer">
                                                <ul class="policy-menu text-center">
                                                    <li><a href="#" tabindex="-1">View Profile</a></li>
                                                    <li><a href="#" tabindex="-1"> Book Now</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1">
                                    <div>
                                        <div class="profile-widget" style="width: 100%; display: inline-block;">
                                            <div class="doc-img">
                                                <a href="doctor-profile.html" tabindex="-1">
                                                    <img class="img-fluid" alt="User Image"
                                                         src="{{asset('assets/img/doctors/doctor-03.jpg')}}">
                                                </a>
                                            </div>
                                            <div class="pro-content">
                                                <h3 class="title">
                                                    <a href="doctor-profile.html" tabindex="-1">Jerelyn Pino </a>
                                                </h3>
                                                <p class="speciality">MBBS, DNB - Cardiology</p>
                                                <div class="rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="far fa-star"></i>
                                                    <span class="d-inline-block average-rating">(27)</span>
                                                </div>
                                                <ul class="available-info">
                                                    <li>
                                                        <i class="fas fa-map-marker-alt"></i> Georgia, USA
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-calendar-check"></i> Available on Fri, 22 Mar
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-wallet"></i> $100 - $400
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="pro-footer">
                                                <ul class="policy-menu text-center">
                                                    <li><a href="#" tabindex="-1">View Profile</a></li>
                                                    <li><a href="#" tabindex="-1"> Book Now</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide" data-slick-index="4" aria-hidden="true" tabindex="-1">
                                    <div>
                                        <div class="profile-widget" style="width: 100%; display: inline-block;">
                                            <div class="doc-img">
                                                <a href="doctor-profile.html" tabindex="-1">
                                                    <img class="img-fluid" alt="User Image"
                                                         src="{{asset('assets/img/doctors/doctor-04.jpg')}}">
                                                </a>
                                            </div>
                                            <div class="pro-content">
                                                <h3 class="title">
                                                    <a href="doctor-profile.html" tabindex="-1">Rieko Thrash</a>
                                                </h3>
                                                <p class="speciality">MBBS, MS - General Surgery</p>
                                                <div class="rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="far fa-star"></i>
                                                    <span class="d-inline-block average-rating">(4)</span>
                                                </div>
                                                <ul class="available-info">
                                                    <li>
                                                        <i class="fas fa-calendar-check"></i> Louisiana, USA
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-wallet"></i> Available on Fri, 22 Mar
                                                    </li>
                                                    <li>
                                                        <i class="far fa-money-bill-alt"></i> $150 - $250
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="pro-footer">
                                                <ul class="policy-menu text-center">
                                                    <li><a href="#" tabindex="-1">View Profile</a></li>
                                                    <li><a href="#" tabindex="-1"> Book Now</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide" data-slick-index="5" aria-hidden="true" tabindex="-1">
                                    <div>
                                        <div class="profile-widget" style="width: 100%; display: inline-block;">
                                            <div class="doc-img">
                                                <a href="doctor-profile.html" tabindex="-1">
                                                    <img class="img-fluid" alt="User Image"
                                                         src="{{asset('assets/img/doctors/doctor-06.jpg')}}">
                                                </a>
                                            </div>
                                            <div class="pro-content">
                                                <h3 class="title">
                                                    <a href="doctor-profile.html" tabindex="-1">Ultima Douglas</a>
                                                </h3>
                                                <p class="speciality">MS - Orthopaedics</p>
                                                <div class="rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star"></i>
                                                    <span class="d-inline-block average-rating">(52)</span>
                                                </div>
                                                <ul class="available-info">
                                                    <li>
                                                        <i class="fas fa-map-marker-alt"></i> Texas, USA
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-calendar-check"></i> Available on Fri, 22 Mar
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-wallet"></i> $100 - $500
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="pro-footer">
                                                <ul class="policy-menu text-center">
                                                    <li><a href="#" tabindex="-1">View Profile</a></li>
                                                    <li><a href="#" tabindex="-1"> Book Now</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide" data-slick-index="6" aria-hidden="true" tabindex="-1">
                                    <div>
                                        <div class="profile-widget" style="width: 100%; display: inline-block;">
                                            <div class="doc-img">
                                                <a href="doctor-profile.html" tabindex="-1">
                                                    <img class="img-fluid" alt="User Image"
                                                         src="{{asset('assets/img/doctors/doctor-07.jpg')}}">
                                                </a>
                                            </div>
                                            <div class="pro-content">
                                                <h3 class="title">
                                                    <a href="doctor-profile.html" tabindex="-1">Neomah Oliveira</a>
                                                </h3>
                                                <p class="speciality">MBBS, MD - General Medicine</p>
                                                <div class="rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star"></i>
                                                    <span class="d-inline-block average-rating">(43)</span>
                                                </div>
                                                <ul class="available-info">
                                                    <li>
                                                        <i class="fas fa-map-marker-alt"></i> Kansas, USA
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-calendar-check"></i> Available on Fri, 22 Mar
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-wallet"></i> $100 - $1000
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="pro-footer">
                                                <ul class="policy-menu text-center">
                                                    <li><a href="#" tabindex="-1">View Profile</a></li>
                                                    <li><a href="#" tabindex="-1"> Book Now</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide" data-slick-index="7" aria-hidden="true" tabindex="-1">
                                    <div>
                                        <div class="profile-widget" style="width: 100%; display: inline-block;">
                                            <div class="doc-img">
                                                <a href="doctor-profile.html" tabindex="-1">
                                                    <img class="img-fluid" alt="User Image"
                                                         src="{{asset('assets/img/doctors/doctor-08.jpg')}}">
                                                </a>
                                            </div>
                                            <div class="pro-content">
                                                <h3 class="title">
                                                    <a href="doctor-profile.html" tabindex="-1">Jillisa Tremblay</a>
                                                </h3>
                                                <p class="speciality">MBBS, MD - Dermatology</p>
                                                <div class="rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <span class="d-inline-block average-rating">(20)</span>
                                                </div>
                                                <ul class="available-info">
                                                    <li>
                                                        <i class="fas fa-map-marker-alt"></i> California, USA
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-calendar-check"></i> Available on Fri, 22 Mar
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-wallet"></i> $100 - $400
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="pro-footer">
                                                <ul class="policy-menu text-center">
                                                    <li><a href="#" tabindex="-1">View Profile</a></li>
                                                    <li><a href="#" tabindex="-1"> Book Now</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="8" id="" aria-hidden="true"
                                     tabindex="-1">
                                    <div>
                                        <div class="profile-widget" style="width: 100%; display: inline-block;">
                                            <div class="doc-img">
                                                <a href="doctor-profile.html" tabindex="-1">
                                                    <img class="img-fluid" alt="User Image"
                                                         src="{{asset('assets/img/doctors/doctor-05.jpg')}}">
                                                </a>
                                            </div>
                                            <div class="pro-content">
                                                <h3 class="title">
                                                    <a href="doctor-profile.html" tabindex="-1">Denby Cathey</a>
                                                </h3>
                                                <p class="speciality">MBBS, MD - Ophthalmology</p>
                                                <div class="rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star"></i>
                                                    <span class="d-inline-block average-rating">(66)</span>
                                                </div>
                                                <ul class="available-info">
                                                    <li>
                                                        <i class="fas fa-map-marker-alt"></i> Michigan, USA
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-calendar-check"></i> Available on Fri, 20 Mar
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-wallet"></i> $50 - $700
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="pro-footer">
                                                <ul class="policy-menu text-center">
                                                    <li><a href="#" tabindex="-1">View Profile</a></li>
                                                    <li><a href="#" tabindex="-1"> Book Now</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="9" id="" aria-hidden="true"
                                     tabindex="-1">
                                    <div>
                                        <div class="profile-widget" style="width: 100%; display: inline-block;">
                                            <div class="doc-img">
                                                <a href="doctor-profile.html" tabindex="-1">
                                                    <img class="img-fluid" alt="User Image"
                                                         src="{{asset('assets/img/doctors/doctor-01.jpg')}}">
                                                </a>
                                            </div>
                                            <div class="pro-content">
                                                <h3 class="title">
                                                    <a href="doctor-profile.html" tabindex="-1">Orali Fisher</a>
                                                </h3>
                                                <p class="speciality">BDS - Dental Cosmetology</p>
                                                <div class="rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="far fa-star"></i>
                                                    <span class="d-inline-block average-rating">(23)</span>
                                                </div>
                                                <ul class="available-info">
                                                    <li>
                                                        <i class="fas fa-map-marker-alt"></i> Florida, USA
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-calendar-check"></i> Available on Mon, 22 Sep
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-wallet"></i> $150 - $220
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="pro-footer">
                                                <ul class="policy-menu text-center">
                                                    <li><a href="#" tabindex="-1">View Profile</a></li>
                                                    <li><a href="#" tabindex="-1"> Book Now</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="10" id="" aria-hidden="true"
                                     tabindex="-1">
                                    <div>
                                        <div class="profile-widget" style="width: 100%; display: inline-block;">
                                            <div class="doc-img">
                                                <a href="doctor-profile.html" tabindex="-1">
                                                    <img class="img-fluid" alt="User Image"
                                                         src="{{asset('assets/img/doctors/doctor-02.jpg')}}">
                                                </a>
                                            </div>
                                            <div class="pro-content">
                                                <h3 class="title">
                                                    <a href="doctor-profile.html" tabindex="-1">Gennaro Weiner</a>
                                                </h3>
                                                <p class="speciality">MDS - Dental Cosmetology</p>
                                                <div class="rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="far fa-star"></i>
                                                    <span class="d-inline-block average-rating">(35)</span>
                                                </div>
                                                <ul class="available-info">
                                                    <li>
                                                        <i class="fas fa-map-marker-alt"></i> Newyork, USA
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-calendar-check"></i> Available on Fri, 22 Mar
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-wallet"></i> $50 - $300
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="pro-footer">
                                                <ul class="policy-menu text-center">
                                                    <li><a href="#" tabindex="-1">View Profile</a></li>
                                                    <li><a href="#" tabindex="-1"> Book Now</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="11" id="" aria-hidden="true"
                                     tabindex="-1">
                                    <div>
                                        <div class="profile-widget" style="width: 100%; display: inline-block;">
                                            <div class="doc-img">
                                                <a href="doctor-profile.html" tabindex="-1">
                                                    <img class="img-fluid" alt="User Image"
                                                         src="{{asset('assets/img/doctors/doctor-03.jpg')}}">
                                                </a>
                                            </div>
                                            <div class="pro-content">
                                                <h3 class="title">
                                                    <a href="doctor-profile.html" tabindex="-1">Jerelyn Pino </a>
                                                </h3>
                                                <p class="speciality">MBBS, DNB - Cardiology</p>
                                                <div class="rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="far fa-star"></i>
                                                    <span class="d-inline-block average-rating">(27)</span>
                                                </div>
                                                <ul class="available-info">
                                                    <li>
                                                        <i class="fas fa-map-marker-alt"></i> Georgia, USA
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-calendar-check"></i> Available on Fri, 22 Mar
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-wallet"></i> $100 - $400
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="pro-footer">
                                                <ul class="policy-menu text-center">
                                                    <li><a href="#" tabindex="-1">View Profile</a></li>
                                                    <li><a href="#" tabindex="-1"> Book Now</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="12" id="" aria-hidden="true"
                                     tabindex="-1">
                                    <div>
                                        <div class="profile-widget" style="width: 100%; display: inline-block;">
                                            <div class="doc-img">
                                                <a href="doctor-profile.html" tabindex="-1">
                                                    <img class="img-fluid" alt="User Image"
                                                         src="{{asset('assets/img/doctors/doctor-04.jpg')}}">
                                                </a>
                                            </div>
                                            <div class="pro-content">
                                                <h3 class="title">
                                                    <a href="doctor-profile.html" tabindex="-1">Rieko Thrash</a>
                                                </h3>
                                                <p class="speciality">MBBS, MS - General Surgery</p>
                                                <div class="rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="far fa-star"></i>
                                                    <span class="d-inline-block average-rating">(4)</span>
                                                </div>
                                                <ul class="available-info">
                                                    <li>
                                                        <i class="fas fa-calendar-check"></i> Louisiana, USA
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-wallet"></i> Available on Fri, 22 Mar
                                                    </li>
                                                    <li>
                                                        <i class="far fa-money-bill-alt"></i> $150 - $250
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="pro-footer">
                                                <ul class="policy-menu text-center">
                                                    <li><a href="#" tabindex="-1">View Profile</a></li>
                                                    <li><a href="#" tabindex="-1"> Book Now</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="13" id="" aria-hidden="true"
                                     tabindex="-1">
                                    <div>
                                        <div class="profile-widget" style="width: 100%; display: inline-block;">
                                            <div class="doc-img">
                                                <a href="doctor-profile.html" tabindex="-1">
                                                    <img class="img-fluid" alt="User Image"
                                                         src="{{asset('assets/img/doctors/doctor-06.jpg')}}">
                                                </a>
                                            </div>
                                            <div class="pro-content">
                                                <h3 class="title">
                                                    <a href="doctor-profile.html" tabindex="-1">Ultima Douglas</a>
                                                </h3>
                                                <p class="speciality">MS - Orthopaedics</p>
                                                <div class="rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star"></i>
                                                    <span class="d-inline-block average-rating">(52)</span>
                                                </div>
                                                <ul class="available-info">
                                                    <li>
                                                        <i class="fas fa-map-marker-alt"></i> Texas, USA
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-calendar-check"></i> Available on Fri, 22 Mar
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-wallet"></i> $100 - $500
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="pro-footer">
                                                <ul class="policy-menu text-center">
                                                    <li><a href="#" tabindex="-1">View Profile</a></li>
                                                    <li><a href="#" tabindex="-1"> Book Now</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="14" id="" aria-hidden="true"
                                     tabindex="-1">
                                    <div>
                                        <div class="profile-widget" style="width: 100%; display: inline-block;">
                                            <div class="doc-img">
                                                <a href="doctor-profile.html" tabindex="-1">
                                                    <img class="img-fluid" alt="User Image"
                                                         src="{{asset('assets/img/doctors/doctor-07.jpg')}}">
                                                </a>
                                            </div>
                                            <div class="pro-content">
                                                <h3 class="title">
                                                    <a href="doctor-profile.html" tabindex="-1">Neomah Oliveira</a>
                                                </h3>
                                                <p class="speciality">MBBS, MD - General Medicine</p>
                                                <div class="rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star"></i>
                                                    <span class="d-inline-block average-rating">(43)</span>
                                                </div>
                                                <ul class="available-info">
                                                    <li>
                                                        <i class="fas fa-map-marker-alt"></i> Kansas, USA
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-calendar-check"></i> Available on Fri, 22 Mar
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-wallet"></i> $100 - $1000
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="pro-footer">
                                                <ul class="policy-menu text-center">
                                                    <li><a href="#" tabindex="-1">View Profile</a></li>
                                                    <li><a href="#" tabindex="-1"> Book Now</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="15" id="" aria-hidden="true"
                                     tabindex="-1">
                                    <div>
                                        <div class="profile-widget" style="width: 100%; display: inline-block;">
                                            <div class="doc-img">
                                                <a href="doctor-profile.html" tabindex="-1">
                                                    <img class="img-fluid" alt="User Image"
                                                         src="{{asset('assets/img/doctors/doctor-08.jpg')}}">
                                                </a>
                                            </div>
                                            <div class="pro-content">
                                                <h3 class="title">
                                                    <a href="doctor-profile.html" tabindex="-1">Jillisa Tremblay</a>
                                                </h3>
                                                <p class="speciality">MBBS, MD - Dermatology</p>
                                                <div class="rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <span class="d-inline-block average-rating">(20)</span>
                                                </div>
                                                <ul class="available-info">
                                                    <li>
                                                        <i class="fas fa-map-marker-alt"></i> California, USA
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-calendar-check"></i> Available on Fri, 22 Mar
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-wallet"></i> $100 - $400
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="pro-footer">
                                                <ul class="policy-menu text-center">
                                                    <li><a href="#" tabindex="-1">View Profile</a></li>
                                                    <li><a href="#" tabindex="-1"> Book Now</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button>
                    </div>
                    <div class="col-12 col-md-12 text-center pt-4">
                        <a href="#" class="view-all">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Doctor Section-->
@endsection
