
@extends("layouts.tamkeen-home")

@section("title","سلافا")



@section("content")
<section id="heading-breadcrumbs" class="brder-top-0 border-bottom-0" style="background-image:linear-gradient(rgba(255, 255, 255 ,70%), rgba(255, 255, 255 ,70%)), url(/tamkeen-proj/assets/imgs/gallery_item_1.jpg)">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2 text-right">لا يوجد صلاحية</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="{{asset('/')}}">الرئيسية</a></li>
                <li class="breadcrumb-item active">لا يوجد صلاحية</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
        <section class="inner-page-services">
          <div class="container py-5">

          <div class='alert alert-warning'>نأسف لا يوجد صلاحيات لعرض الصفحة المطلوبة</div>
        </div>

        </section>
      
@endsection