@extends("layouts.tamkeen-home")

@section("title","تفاصيل المنتج")
@section("css")
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

<style>
/*****************globals*************/
body {
    font-family: 'open sans';
    overflow-x: hidden;
}

img {
    max-width: 100%;
}

.preview {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
}

@media screen and (max-width: 996px) {
    .preview {
        margin-bottom: 20px;
    }
}

.preview-pic {
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
}

.preview-thumbnail.nav-tabs {
    border: none;
    margin-top: 15px;
}

.preview-thumbnail.nav-tabs li {
    width: 18%;
    margin-right: 2.5%;
}

.preview-thumbnail.nav-tabs li img {
    max-width: 100%;
    display: block;
}

.preview-thumbnail.nav-tabs li a {
    padding: 0;
    margin: 0;
}

.preview-thumbnail.nav-tabs li:last-of-type {
    margin-right: 0;
}

.tab-content {
    overflow: hidden;
}

.tab-content img {
    width: 100%;
    -webkit-animation-name: opacity;
    animation-name: opacity;
    -webkit-animation-duration: .3s;
    animation-duration: .3s;
}

.card {
    margin: 50px;
    background: #eee;
    padding: 3em;
    line-height: 1.5em;
}

@media screen and (min-width: 997px) {
    .wrapper {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
    }
}

.details {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
}

.colors {
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
}

.product-title,
.price,
.sizes,
.current_price,
.colors {
    text-transform: UPPERCASE;
    font-weight: bold;
}

.checked,
.current_price span {
    color: #ff9f1a;
    text-decoration: line-through;
}

.price span {
    color: #ff9f1a;
}

.product-title,
.rating,
.product-description,
.price,
.vote,
.sizes {
    margin-bottom: 15px;
}

.product-title {
    margin-top: 0;
}

.size {
    margin-right: 10px;
}

.size:first-of-type {
    margin-left: 40px;
}

.color {
    display: inline-block;
    vertical-align: middle;
    margin-right: 10px;
    height: 2em;
    width: 2em;
    border-radius: 2px;
}

.review,
.back {
    font-weight: bold;

}

.color:first-of-type {
    margin-left: 20px;
}

.add-to-cart,
.like {
    background: #ff9f1a;
    padding: 1.2em 1.5em;
    border: none;
    text-transform: UPPERCASE;
    font-weight: bold;
    color: #fff;
    -webkit-transition: background .3s ease;
    transition: background .3s ease;
}

.add-to-cart:hover,
.like:hover {
    background: #b36800;
    color: #fff;
}

.not-available {
    text-align: center;
    line-height: 2em;
}

.not-available:before {
    font-family: fontawesome;
    content: "\f00d";
    color: #fff;
}

.orange {
    background: #ff9f1a;
}

.green {
    background: #85ad00;
}

.blue {
    background: #0076ad;
}

.tooltip-inner {
    padding: 1.3em;
}

@-webkit-keyframes opacity {
    0% {
        opacity: 0;
        -webkit-transform: scale(3);
        transform: scale(3);
    }

    100% {
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1);
    }
}

@keyframes opacity {
    0% {
        opacity: 0;
        -webkit-transform: scale(3);
        transform: scale(3);
    }

    100% {
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1);
    }
}

/*# sourceMappingURL=style.css.map */
</style>
@endsection
@section("js")

@endsection
@section("content")

<div class="container">
    <div class="card">
        <div class="container-fliud">
            <div class="wrapper row">
                <div class="preview col-md-6">
                    <div class="preview-pic tab-content">
                        <div class="tab-pane active" id="pic-1"><img src='{{asset("storage/assets/img/{$product->main_image}")}}' /></div>
                        <div class="tab-pane" id="pic-2"><img src="http://placekitten.com/400/252" /></div>
                        <div class="tab-pane" id="pic-3"><img src="http://placekitten.com/400/252" /></div>
                        <div class="tab-pane" id="pic-4"><img src="http://placekitten.com/400/252" /></div>
                        <div class="tab-pane" id="pic-5"><img src="http://placekitten.com/400/252" /></div>
                    </div>
                    <ul class="preview-thumbnail nav nav-tabs">
                        <li class="active"><a data-target="#pic-1" data-toggle="tab"><img
                                    src="{{asset('tamkeen-proj/img/watch.jpg')}}" /></a></li>
                        <li><a data-target="#pic-2" data-toggle="tab"><img
                                    src="{{asset('tamkeen-proj/img/watch.jpg')}}" /></a></li>
                        <li><a data-target="#pic-3" data-toggle="tab"><img
                                    src="{{asset('tamkeen-proj/img/watch.jpg')}}" /></a></li>
                        <li><a data-target="#pic-4" data-toggle="tab"><img
                                    src="{{asset('tamkeen-proj/img/watch.jpg')}}" /></a></li>
                        <li><a data-target="#pic-5" data-toggle="tab"><img
                                    src="{{asset('tamkeen-proj/img/watch.jpg')}}" /></a></li>
                    </ul>
                </div>

                <div class="details col-md-6">

                    <h3 class="product-title">{{$product->slug}}</h3>
                    <div class="rating">
                        <div class="stars">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <span class="review-no">41 reviews</span>

                    </div>
                    <p class="product-description">{{$product->details}}</p>

                    <h4 class="current_price"> price: <span>{{$product->regular_price}}</span></h4>
                    <h4 class="price">price after sale: <span>{{$product->sale_price}}</span></h4>

                    <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
                    <h5 class="sizes">sizes:
                        <span class="size" data-toggle="tooltip" title="small">s</span>
                        <span class="size" data-toggle="tooltip" title="medium">m</span>
                        <span class="size" data-toggle="tooltip" title="large">l</span>
                        <span class="size" data-toggle="tooltip" title="xtra large">xl</span>
                    </h5>

                    <h5 class="colors">colors:
                        <span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
                        <span class="color green"></span>
                        <span class="color blue"></span>
                    </h5>
                    <div class="action">
                        <button class="add-to-cart btn btn-default" type="button">add to cart</button>
                        <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
                        <br> <br>
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox"></div>
                    </div>
                    <br> <br> <br>
                    <div>
                        <a class="back" href="/">Go Back</a>
                    </div>

                </div>
            </div>
        </div>
        <div>
            <h3 class="review">Product Review</h3>
            <div class="fb-comments" data-href="{{Request::url()}}" data-width="" data-numposts="5">
            </div>
        </div>
    </div>

    @endsection