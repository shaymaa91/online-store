@extends("layouts.admin")
@section("title","عرض")
@section("title-side")
@endsection
@section("content")
<div class="m-portlet m-portlet--mobile">
    <form method='post' action='{{route("customer.index")}}'>
        @csrf
        <div class='m-form'>
            <div class="m-portlet__body">
                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">الاسم</label>
                        <div class="col-lg-6">
                            <input disabled id="name" value='{{ $item->user->name??"" }}' name="name" placeholder="name"
                                class="form-control" type="text">
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">الاميل</label>
                        <div class="col-lg-6">
                            <input disabled id="name" value='{{ $item->user->email??"" }}' name="email"
                                placeholder="email" class="form-control" type="text">
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">المدينة</label>
                        <div class="col-lg-6">
                            <input disabled id="city" value="{{ $item->city }}" name="city" placeholder="city"
                                class="form-control" type="text">
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> عنوان السكن</label>
                        <div class="col-lg-6">
                            <input disabled id="address" value="{{ $item->address }}" name="address"
                                class="form-control" type="text">
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">الهاتف المحمول</label>
                        <div class="col-lg-6">
                            <input disabled id="mobile" value="{{ $item->mobile }}" name="mobile" class="form-control"
                                type="text">
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">الهاتف الأرضي</label>
                        <div class="col-lg-6">
                            <input disabled id="phone" value="{{ $item->phone }}" name="phone" class="form-control"
                                type="text">
                        </div>
                    </div>
                    <!--div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">الصورة</label>
                        <div class="col-lg-6">
                            <input disabled type='file' class="form-control" name="image" id="image" />
                            @if($item->image)
                            <hr>
                            <img style='max-width:250px' src='{{asset("storage/images/$item->image")}}' />
                            @endif
                        </div>
                    </div-->
                    <hr>
                    @if($item->orders->count()>0)
                    <h3>طلبات الزبون</h3>
                    <table
                        class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline"
                        id="m_table_1" role="grid" aria-describedby="m_table_1_info" style="width: 1150px;">
                        <thead>
                            <tr role="row">
                                <th>
                                    #
                                </th>

                                <th>حالة الطلب</th>
                                <th>اجمالي السعر </th>
                                <th>اجمالي الكميات </th>
                                <th>رقم التلفون </th>
                                <th>رقم الجوال </th>
                                <th>المدينة </th>
                                <th>العنوان </th>
                                <th> تاريخ الطلب</th>
                                <th width='15%'>خيارات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($item->orders as $order)
                            <tr>
                                <td width="5%">
                                    <b>{{$order->id}}</b>
                                </td>

                                <td>{{$order->orderStatus->name}}</td>
                                <td>{{ $order->total_price }}</td>
                                <td>{{ $order->total_items}}</td>
                                <td>{{ $order->phone }}</td>
                                <td>{{ $order->mobile }}</td>
                                <td>{{ $order->city }}</td>
                                <td>{{ $order->address }}</td>
                                <td>{{ $order->created_at }}</td>
                                <td width="15%">
                                    <a class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only"
                                        href="{{route('order.show',$order->id)}}" title="عرض"><i class="la la-eye"></i>
                                    </a>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <div class='alert alert-info'><b>نأسف</b> !لا توجد طلبات لهذا الزبون
                        <button type="button" class="close pt-0" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    @endif
                </div>
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <a href="{{asset('admin/customer')}}" class="btn btn-secondary">الغاء الامر</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection