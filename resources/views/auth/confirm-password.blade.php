@extends("auth.auth-layout")
@section('title','تأكيد كلمة المرور')
@section('main-title','تأكيد كلمة المرور')
@section('sub-title','هذه البيانات سرية في هذا الموقع. الرجاء التأكد من كلمة المرور قبل الاستمرار')

@section('content')
<form class="m-login__form m-form" method="POST" action="{{ route('password.confirm') }}">
    @csrf

    <div class="form-group m-form__group">
        <input class="form-control m-input" type="password" placeholder="كلمة المرور" name="password" required
            autocomplete="current-password">
    </div>



    <div class="m-login__form-action">
        <button id="" type="submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn">تأكيد
            كلمة المرور</button>&nbsp;&nbsp;

    </div>

</form>
@endsection