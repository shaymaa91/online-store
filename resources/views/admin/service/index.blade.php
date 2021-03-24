@extends("layouts.admin")
@section("title","إدارة الخدمات")
@section("title-side")
<a href="{{asset('admin/service/create')}}"
    class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
    <span>
        <i class="la la-plus"></i>
        <span>
        اضافة خدمة جديدة
        </span>
    </span>
</a>
@endsection


@section("content")
<<<<<<< HEAD
        <form class='mb-3'>
=======
<form class='mb-3'>
>>>>>>> be145fe8b338c7378adb06497f28bf540ec4157e
            <div class="row">
                <div class='col-4'>
                    <input name='q' id='q' value='{{request()->q}}' autofocus type="text" class='form-control  p-4'
                        placeholder="كلمة البحث " />
                </div>
                <div class='col-2'>
                    <select name='active' id='active' class='form-control'>
                        <option value=''>الحالة</option>
                        <option {{ request()->active=='1'?"selected":"" }} value='1'>فعال</option>
                        <option {{ request()->active=='0'?"selected":"" }} value='0'>غير فعال</option>
                    </select>
                </div>
                <div class='col-4'>
                    <input type="submit" class='btn btn-primary mr-2' value='بحث' />
                    <input type="submit" class='btn btn-secondary' value='مسح البحث'
                        onclick="document.getElementById('q').value = ''; document.getElementById('active').value = ''; return true;" />
                </div>

            </div>
        </form>
<<<<<<< HEAD
   
=======
>>>>>>> be145fe8b338c7378adb06497f28bf540ec4157e
<table class="table table-striped table-sm mt-3">
    <thead>
        <tr>
            <th width="5%">#</th>
            <th> الخدمة</th>
            <th>وصف قصير</th>
            <th width="10%">النشاط</th>
            <th width="10%">الصورة</th>
            <th width="20%">خيارات</th>
        </tr>
    </thead>
    <tbody>
        @foreach($items as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->title }}</td>
            <td>{{ $item->slug }}</td>
            <td>{{ $item->active }}</td>
            <td><img style="width: 100px;" src="{{asset('storage/images/'.$item->image)}}"/>
            </td>
            <td>
                <form method='post' action='{{asset("service/".$item->id)}}'>
                    @csrf
                    @method("delete")
<<<<<<< HEAD
                    <a href='{{ route("service.show",$item->id) }}' class='btn btn-sm btn-info'> عرض</a>
=======
                    <a href='{{ route("service.show",$item->id) }}' class='btn btn-sm btn-info'> عرض </a>
>>>>>>> be145fe8b338c7378adb06497f28bf540ec4157e
                    <a href='{{ route("service.edit",$item->id) }}' class='btn btn-sm btn-primary'>تعديل </a>
                    
                    <a href='{{ route("service.delete",$item->id) }}' class='btn btn-warning btn-sm'
                        onclick='return confirm("هل أنت متأكد من الحذف ؟")'>حذف </a>
                        
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection