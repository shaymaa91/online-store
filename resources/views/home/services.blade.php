
@extends("layouts.tamkeen-home")

@section("title","الصفحة الرئيسية")

@section("servicesActive","active")


@section("content")
<section id="heading-breadcrumbs" class="brder-top-0 border-bottom-0" style="background-image:linear-gradient(rgba(255, 255, 255 ,70%), rgba(255, 255, 255 ,70%)), url(/tamkeen-proj/assets/imgs/gallery_item_1.jpg)">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2 text-right">خدماتنا</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="{{asset('/')}}">الرئيسية</a></li>
                <li class="breadcrumb-item active">خدماتنا</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
        <section class="inner-page-services">
          <div class="container py-5">

          @if($services->count())
          <div class="row row-cols-1 row-cols-md-3">
            @foreach($services as $item)
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
          {{$services->links()}}
          @else
          <div class='alert alert-warning'>نأسف لا يوجد خدمات لعرضها</div>
          @endif
        </div>

        </section>
      
@endsection