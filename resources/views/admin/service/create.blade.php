@extends("layouts.admin")
@section("title","إضافة خدمة جديدة")

@section("content")
<div class="m-portlet m-portlet--mobile">
    <form enctype='multipart/form-data' method="post" action='{{route("service.index")}}'>
        @csrf
        <div class='m-form'>
            <div class="m-portlet__body">
                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">الخدمة</label>
                        <div class="col-lg-6">
                            <input id="title" value="{{ old('title') }}" name="title" placeholder="الخدمة"
                                class="form-control" type="text">
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">الوصف القصير</label>
                        <div class="col-lg-6">
                            <input id="slug" value="{{ old('slug') }}" name="slug" placeholder="الوصف القصير"
                                class="form-control" type="text">
                        </div>
                    </div>
                    <div class="m-form__group form-group row">
                        <label class=" col-lg-3 col-form-label">النشاط</label>
                        <div class="m-radio-inline col-lg-6">
                            <label class="m-radio m-radio--solid m-radio--brand">
                                <input {{old('active')=='1'?"checked":""}} type="radio" name="active" checked=""
                                    value="1" aria-describedby="account_group-error"> فعال
                                <span></span>
                            </label>
                            <label class="m-radio m-radio--solid m-radio--brand">
                                <input {{old('active')=='0'?"checked":""}} type="radio" name="active" value="0"> غير
                                فعال
                                <span></span>
                            </label>
                        </div>
                        <span class="m-form__help"></span>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">باختصار</label>
                        <div class="col-lg-6">
                            <textarea id="summary" rows='8' name="summary" placeholder="اختصر في نقاط"
                                class="form-control">{{old("summary")}}</textarea>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">التفاصيل</label>
                        <div class="col-lg-6">
                            <textarea id="details" rows='8' name="details" placeholder="معلومات أكثر"
                                class="form-control">{{old("details")}}</textarea>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">الصورة</label>
                        <div class="col-lg-6">
                            <input multiple id="image" name="image" type='file' class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <button type="submit" class="btn btn-primary">اضافة</button>
                            <a href="{{asset('admin/service')}}" class="btn btn-secondary">الغاء الامر</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection