<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('/frontend')}}/img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Kampung Hijau Kemuning</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="{{asset('/frontend')}}/css/linearicons.css">
        <link rel="stylesheet" href="{{asset('/frontend')}}/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('/frontend')}}/css/bootstrap.css">
        <link rel="stylesheet" href="{{asset('/frontend')}}/css/magnific-popup.css">
        <link rel="stylesheet" href="{{asset('/frontend')}}/css/nice-select.css">							
        <link rel="stylesheet" href="{{asset('/frontend')}}/css/animate.min.css">
        <link rel="stylesheet" href="{{asset('/frontend')}}/css/owl.carousel.css">			
        <link rel="stylesheet" href="{{asset('/frontend')}}/css/jquery-ui.css">			
        <link rel="stylesheet" href="{{asset('/frontend')}}/css/main.css">
    </head>
    <body>	
      <header id="header" id="home">
          <div class="header-top">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
                          <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                          </ul>			
                      </div>
                      <div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
                          <a href="tel:+953 012 3654 896"><span class="lnr lnr-phone-handset"></span> <span class="text">+6287788079029</span></a>
                          <a href="mailto:support@colorlib.com"><span class="lnr lnr-envelope"></span> <span class="text">kampunghijaukemuning@gmail.com</span></a>			
                      </div>
                  </div>			  					
              </div>
        </div>
        <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">
              <div id="logo">
                <a href="/beranda"><img src="{{asset('/frontend')}}/img/logo1.png" alt="" title="" /></a>
              </div>
              <nav id="nav-menu-container">
                <ul class="nav-menu">
                  <li><a href="/beranda">Beranda</a></li>
                  <li><a href="{{url('sites/tentang')}}">Tentang</a></li>
                  <li><a href="{{url('sites/event')}}">Events</a></li>
                  <li><a href="{{url('sites/kegiatan')}}">Kegiatan</a></li>
                  <li><a href="{{url('sites/artikel')}}">Artikel</a></li>
                  <li><a href="{{url('sites/informasi')}}">Informasi</a></li>						          					          		          
                  <li><a href="{{url('sites/kontak')}}">Kontak</a></li>
                </ul>
              </nav><!-- #nav-menu-container -->		    		
            </div>
        </div>
      </header><!-- #header -->
          
        <!-- start banner Area -->
        <section class="banner-area relative about-banner" id="home">	
            <div class="overlay overlay-bg"></div>
            <div class="container">				
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="about-content col-lg-12">
                        <h1 class="text-white">
                            Event Detail	
                        </h1>	
                        <p class="text-white link-nav"><a href="/beranda">Beranda </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{url('sites/eventsdetail')}}"> Event Detail</a></p>
                    </div>	
                </div>
            </div>
        </section>
        <!-- End banner Area -->	
            
        <!-- Start event-details Area -->
        <section class="event-details-area section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 event-details-left">
                        <div class="main-img">
                            <img class="img-fluid" src="/img/{{$data->foto}}" alt="">
                        </div>
                        <div class="details-content">
                            <a href="#">
                                <h4>{{$data->nama_event}}</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 event-details-right">
                        <div class="single-event-details">
                            <h4>Details</h4>
                            <ul class="mt-10">
                                <li class="justify-content-between d-flex">
                                    <span>Tanggal Mulai :</span>
                                    <span>{{$data->tanggal_event}}</span>
                                </li>
                                <li class="justify-content-between d-flex">
                                    <span>Harga Tiket :</span>
                                    <span>Rp {{$data->harga_event}}</span>
                                </li>														
                            </ul>
                        </div>
                        <div class="single-event-details">
                            <h4>Lokasi</h4>
                            <ul class="mt-10">
                                <li class="justify-content-between d-flex">
                                    <span>Tempat Pelaksanaan :</span>
                                    <span>{{$data->lokasi}}</span>
                                </li>										
                            </ul>
                        </div>
                        <div class="single-event-details">
                            <h4>Sumber</h4>
                            <ul class="lg-10">
                                <li class="justify-content-between d-flex">
                                    <span>Link Sumber :</span>
                                  <a href="{{$data->link}}">{{$data->link}}</a>  
                                </li>										
                            </ul>
                        </div>		
                        

                        <form action="{{route('komentar.store')}}" method="POST" >
                            @csrf
                            <input type="hidden" name="event_id" value="{{$data->id}}">
                            <div class="single-event-details">
                                <h4>Komentar</h4>
        
                                <div class="col-md-12">
                                    <textarea style="margin-top: 10px;" id="komentar" type="text" class="form-control @error('komentar') is-invalid @enderror" name="komentar" value="{{ old('komentar') }}" required autocomplete="komentar" autofocus> </textarea>
        
                                    @error('komentar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <button style="margin-top: 20px;" type="submit" >Submit</button>
                                    <ul>
                                        @foreach ($data->komentars as $item)
                                            <li style="margin-top: 10px; margin-bottom: 10px;">Komentar : {{$item->komentar}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            
                        </form>

                        
                        
                        
                        
                    </div>

                    

                    <div class="social-nav row no-gutters">
                        <div class="row-lg-6 row-md-6 ">
                            <ul class="focials">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            </ul>                          
                            </div>
                    </div>
                </div>
            </div>	
        </section>
        <!-- End event-details Area -->
                
            
        <!-- Start cta-two Area -->
        
        <!-- End cta-two Area -->						    			

        <!-- start footer Area -->		
        <footer class="footer-area section-footer">
            <div class="container">
                <div class="row">
                    											
                </div>
                <div class="footer-bottom row align-items-center justify-content-between">
                    <p class="footer-text m-0 col-lg-6 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Kampung Hijau Kemuning | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by indahwdyst 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    <div class="col-lg-6 col-sm-12 footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </div>
                </div>						
            </div>
        </footer>	
        <!-- End footer Area -->	


        <script src="{{asset('/frontend')}}/js/vendor/jquery-2.2.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="{{asset('/frontend')}}/js/vendor/bootstrap.min.js"></script>			
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
          <script src="{{asset('/frontend')}}/js/easing.min.js"></script>			
        <script src="{{asset('/frontend')}}/js/hoverIntent.js"></script>
        <script src="{{asset('/frontend')}}/js/superfish.min.js"></script>	
        <script src="{{asset('/frontend')}}/js/jquery.ajaxchimp.min.js"></script>
        <script src="{{asset('/frontend')}}/js/jquery.magnific-popup.min.js"></script>	
        <script src="{{asset('/frontend')}}/js/jquery.tabs.min.js"></script>						
        <script src="{{asset('/frontend')}}/js/jquery.nice-select.min.js"></script>	
        <script src="{{asset('/frontend')}}/js/owl.carousel.min.js"></script>									
        <script src="{{asset('/frontend')}}/js/mail-script.js"></script>	
        <script src="{{asset('/frontend')}}/js/main.js"></script>	
    </body>
</html>