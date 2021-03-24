@extends("auth.auth-layout")
@section('title','التحقق من البريد الالكتروني')
@section('main-title','التحقق من البريد الالكتروني')
@section('sub-title','شكرا لتسجيلك! قبل البدء ، هل يمكنك التحقق من عنوان بريدك الإلكتروني من خلال النقر على الرابط الذي
أرسلناه إليك عبر البريد الإلكتروني للتو؟ إذا لم تتلق البريد الإلكتروني ، فسنرسل لك رسالة أخرى بكل سرور.')

@section('content')
@if (session('status') == 'verification-link-sent')
<div class="mb-4 font-medium text-sm text-green-600 text-center">
    لقد قمنا بإرسال رابط تحقق جديد إلى البريد الالكتروني الذي تم تزويدنا به من طرفكم أثناء التسجيل
</div>
@endif
<form class="m-login__form m-form" method="POST" action="{{ route('verification.send') }}">
    @csrf

    <div class="m-login__form-action">
        <button id="" type="submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn">اعادة
            إرسال بريد التحقق</button>&nbsp;&nbsp;
    </div>

</form>

<form class="m-login__form m-form" method="POST" action="{{ route('logout') }}"">
                            @csrf
																
								<div class=" m-login__form-action">
    <button id="" type="submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn">تسجيل
        الخروج</button>&nbsp;&nbsp;
    </div>

</form>

</form>
@endsection