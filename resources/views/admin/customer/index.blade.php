@extends("layouts.admin")
@section("title","إدارة الزبائن")

@section("title-side")

@endsection

@section("content")<div class="m-portlet m-portlet--mobile">
    <div class="m-portlet__body">
        <form class='row mb-3'>
            <div class='col-sm-8'>
                <input name='q' value='{{request()->q}}' autofocus type="text" class='form-control'
                    placeholder="Enter your search ..." />
            </div>
            <div class='col-sm-1'>
                <button class='btn btn-primary' value='Search'><i class='fa fa-search'></i></button>
            </div>

        </form>
        <table class="table table-striped table-sm mt-3">
            <thead>
                <tr>
                    <th>الاسم</th>
                    <th>البريد الالكتروني</th>
                    <th>المدينة</th>
                    <th>العنوان</th>
                    <th>الهاتف المحمول</th>
                    <th>التلفون</th>
                    <th width="22%">خيارات</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                <tr>
                    <td>{{$item -> user->name??""}}</td>
                    <td>{{$item -> user->email??""}}</td>
                    <td>{{ $item->city }}</td>
                    <td>{{ $item->address }}</td>
                    <td>{{ $item->mobile }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>
                        <a href='{{ asset("admin/customer/".$item->id) }}' class='btn btn-sm btn-info'>عرض</a>

                        <a href='{{ route("customer.delete",$item->id) }}' class='btn btn-warning btn-sm'
                            onclick='return confirm("Are you sure?")'>حذف</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection