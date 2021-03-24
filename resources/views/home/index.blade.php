
@extends("layouts.tamkeen-home")

@section("title","الصفحة الرئيسية")

@section("homeActive","active")

@section("content")

@if($homeSliders->count())
  <?php $index = 0 ?>
  <section class="main-slider">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        @foreach($homeSliders as $item)
          <li data-target="#carouselExampleIndicators" data-slide-to="{{$index}}" class="{{$index++==0?'active':''}}"></li>
        @endforeach
      </ol>
      <div class="carousel-inner">
        <?php $index = 0 ?>
        @foreach($homeSliders as $item)
        <div class="carousel-item {{$index++==0?'active':''}}">
          <div class="container">
            <div class="row">
              <div
                class="col-12 col-md-6 align-self-center slider-caption  animate__animated animate__slow animate__zoomIn">
                <h2 class="main-color">{{$item->title}}</h2>
                <p>{{$item->subtitle}}
                </p>
                @if($item->url)
                  <a href='{{$item->url}}' {{$item->new_window?'target="_blank"':''}} class="btn btn-success"> {{$item->button_text??'اضغط هنا'}}</a>
                @endif
              </div>
              <div class="col-12 col-md-6 pt-5">
                <div class="slider-img">
                  <img src="{{asset("/storage/images/$item->image")}}" class="d-block  animate__animated animate__slow animate__zoomIn"
                    alt="...">
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"> <i class="fas fa-arrow-right"></i></span>
        <!--  <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>
@endif

  <section class="about" id="about-us-sec">
    <div class="container">
      <div class="row mt-5">
        <div class="col-md-5 about-img   animate__animated animate__delay-2s animate__slow animate__zoomIn">
          <img class="featurette-image img-fluid" src="/tamkeen-proj/assets/imgs/about_img.png">
        </div>
        <div
          class="col-md-7 align-self-center about-text  animate__animated animate__delay-2s animate__slow animate__slideInLeft">
          <h2 class="about-heading">دعم واستشارات على مدار <span class="number">24</span> ساعة</h2>
          <p class="about_description">نعتني بزبائننا على الدوام
            الاستشارات مفتوحة والدعم الفني على اتصال، نعتني بزبائننا على الدوام
            الاستشارات مفتوحة
            والدعم الفني على اتصال
          </p>
          <button class="btn btn-success">تواصل معنا</button>

        </div>

      </div>
    </div>
  </section>




  @if($homeServices->count())
  <section class="services animate__animated animate__slower animate__delay-3s animate__fadeInUp" id="services-sec">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2 class="main-color text-center">خدماتنا</h2>
        </div>
      </div>
      <div class="row row-cols-1 row-cols-md-3 inner-page-services">
        @foreach($homeServices as $item)
        <div class="col mb-4">
          <div class="card h-100">
            <a href="" class="card-img-top">
              <img src="{{asset("/storage/images/$item->image")}}" class="" alt="...">
            </a>
            <div class="card-body">
              <h5 class="card-title"><a href='{{asset("services/".$item->slug)}}'>{{$item->title}}</a></h5>
              <p class="card-text">{{$item->summary}}.</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <div class="row">
        <div class="col text-center">
          <a href="{{asset('services')}}" class="btn btn-success">لمشاهدة جميع خدماتنا</a>
        </div>
      </div>
    </div>
  </section>
  @endif


  <section class="achievements main-bg-color py-5">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 text-center  animate__animated animated__delay-8s animate__slower animate__zoomInUp">
          <i class="fa fa-diamond fa-3x secondary-color" aria-hidden="true"></i>
          <h4 class="my-3">التصنيفات</h4>
          <h3 class="countup secondary-color mb-0" cup-end="1500" cup-append="" cup-prepend="$" cup-duration="">1500
          </h3>
        </div>
        <div class="col-sm-3 text-center animate__animated animated__delay-8s animate__slower animate__zoomInUp">
          <i class="fa fa-diamond fa-3x secondary-color" aria-hidden="true"></i>
          <h4 class="my-3">المنتجات</h4>
          <h3 class="countup secondary-color mb-0" cup-end="100" cup-append="%" cup-prepend="" cup-duration="">1500</h3>
        </div>
        <div class="col-sm-3 text-center animate__animated animate__slower animated__delay-8s animate__zoomInUp">
          <i class="fa fa-diamond fa-3x secondary-color" aria-hidden="true"></i>
          <h4 class="my-3">الخدمات</h4>
          <h3 class="countup secondary-color mb-0" cup-end="100" cup-append="+" cup-prepend="" cup-duration="">1500</h3>
        </div>
        <div class="col-sm-3 text-center animate__animated animate__slower animated__delay-8s animate__zoomInUp">
          <i class="fa fa-diamond fa-3x secondary-color" aria-hidden="true"></i>
          <h4 class="my-3">الجوائز</h4>
          <h3 class="countup secondary-color mb-0" cup-end="99" cup-append="" cup-prepend="" cup-duration="">1500</h3>
        </div>
      </div>
    </div>
  </section>
  <section class="testimonials  animate__animated animate__slower animated__delay-10s animate__fadeInUp"
    id="testimonials-sec">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2 class="main-color text-center pb-4">قالوا عنا</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 text-center">
          <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="testimonial-img">
                  <img src="/tamkeen-proj/assets/imgs/gallery_item_1.jpg" class="d-block" alt="...">
                </div>
                <div class="testimonial-caption ">
                  <h4 class="main-color my-3">محمد أحمد</h4>
                  <p>
                    خدمات عالية الجودة في مجال التصميم الجرافيكي وتصميم صفحات السوشال ميديا وتصميم التطبيقات المختلفة
                    للموبايل والويب
                  </p>
                </div>

              </div>
              <div class="carousel-item">
                <div class="testimonial-img">
                  <img src="/tamkeen-proj/assets/imgs/gallery_item_1.jpg" class="d-block" alt="...">
                </div>
                <div class="testimonial-caption ">
                  <h4 class="main-color my-3">محمد أحمد</h4>
                  <p>
                    خدمات عالية الجودة في مجال التصميم الجرافيكي وتصميم صفحات السوشال ميديا وتصميم التطبيقات المختلفة
                    للموبايل والويب
                  </p>
                </div>

              </div>
            </div>
            <div class="testamonial-arrows">
              <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="next">
                <i class="fa fa-arrow-right"></i>
                <!--  <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                <i class="fa fa-arrow-left"></i>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  @endsection