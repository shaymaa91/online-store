@extends("auth.auth-layout")
@section('title','اعادة تعيين كلمة المرور')
@section('main-title','اعادة تعيين كلمة المرور')

@section('content')
<form class="m-login__form m-form" method="POST" action="{{ route('password.update') }}">
    @csrf
    <input type="hidden" name="token" value="{{ $request->route('token') }}">
    <div class="form-group m-form__group">
        <input class="form-control m-input" type="email" id="email" placeholder="البريد الالكتروني" name="email"
            value="{{old('email', $request->email)}}" required autofocus>
    </div>
    <div class="form-group m-form__group">
        <input class="form-control m-input" type="password" placeholder="كلمة المرور" name="password" id="password"
            required>
    </div>
    <div class="form-group m-form__group">
        <input class="form-control m-input m-login__form-input--last" type="password" placeholder="تأكيد كلمة المرور"
            id="password_confirmation" name="password_confirmation" required>
    </div>


    <div class="m-login__form-action">
        <button id="" type="submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn">اعادة
            تعيين كلمة المرور</button>&nbsp;&nbsp;

    </div>

</form>
@endsection