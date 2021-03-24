@extends("auth.auth-layout")
@section('title','نسيت كلمة المرور')
@section('main-title','نسيت كلمة المرور؟')
@section('sub-title','نسيت كلمة المرور؟ لا مشكلة. فقط أخبرنا بالبريد الالكتروني الخاص بك وسوف نرسل لك رابط لإعادة تعيين
كلمة المرور واختيار كلمة مرور جديدة.')

@section('content')
<form class="m-login__form m-form" method="POST" action="{{ route('password.email') }}">
    @csrf

    <div class="form-group m-form__group">
        <input class="form-control m-input" type="email" placeholder="أدخل البريد الالكتروني" name="email" id="email"
            value="{{old('email')}}" required autofocus>
    </div>



    <div class="m-login__form-action">
        <button id="" type="submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn">ارسال
            رابط اعادة تعيين كلمة المرور للبريد</button>&nbsp;&nbsp;

    </div>

</form>
@endsection