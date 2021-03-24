@extends("layouts.admin")
@section("title", "تعديل بيانات الزبون  ")
@section("title-side")

@endsection

@section("content")
<div class="m-portlet m-portlet--mobile">
    <form method='post' action='{{route("customer-details.update",$item->id)}}'>
        @csrf
    @method("put")
    <div class="m-portlet__body">
        <div class="m-form__section m-form__section--first">
            <div class="form-group m-form__group row">
                <label class="col-lg-3 col-form-label">الاسم كاملاً</label>
                <div class="col-lg-6">
                    <input type="text" class="form-control m-input" disabled name="name" value='{{ old("name",$item->name) }}'>

                </div>
            </div>
            <div class="form-group m-form__group row">
                <label class="col-lg-3 col-form-label">الإيميل </label>
                <div class="col-lg-6">
                    <input type="email" class="form-control m-input" disabled name="email" value='{{ old("email",$item->email) }}'>

                </div>
            </div>
            <div class="m-form__group form-group row">
                        <label class=" col-lg-3 col-form-label">فعال / غير فعال</label>
                        <div class="m-radio-inline col-lg-6">
                            <label class="m-radio m-radio--solid m-radio--brand">
                                <input {{$item->status=='1'?"checked":""}} type="radio" name="status"  value="1"
                                    aria-describedby="account_group-error"> فعال
                                <span></span>
                            </label>
                            <label class="m-radio m-radio--solid m-radio--brand">
                                <input {{$item->status=='0'?"checked":""}} type="radio" name="status" value="0"> غير فعال
                                <span></span>
                            </label>
                        </div>
                        <span class="m-form__help"></span>
                    </div>
        </div>
        <button class="btn btn-primary" type="submit">تعديل</button>
       <a class='btn btn-light' href='{{route("customer-details.index")}}'>الغاء الأمر</a>

    </div>
</form>
</div>

@endsection
