@extends("layouts.admin")
@section("title","ادارة الشرائح الرئيسية")

@section("title-side")
<a href="{{asset('admin/slider/create')}}"
    class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
    <span>
        <i class="la la-plus"></i>
        <span>
            اضافة شريحة جديد
        </span>
    </span>
</a>
@endsection

@section("content")
<div class="m-portlet m-portlet--mobile">
    <div class="m-portlet__body">
        <form class='row mb-3'>
            <div class='col-sm-8'>
                <input type='text' class='form-control' name='q' placeholder='أدخل كلمة البحث هنا' />
            </div>
            <div class='col-sm-3'>
                <select name='active' class='form-control'>
                    <option value=''>الحالة</option>
                    <option value='1'>فعال</option>
                    <option value='0'>غير فعال</option>
                </select>
            </div>
            <div class='col-sm-1 text-right'>
                <button class='btn btn-primary'><i class='fa fa-search'></i></button>
            </div>
        </form>
        <!--begin: Datatable -->
        <div id="m_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <div class="row">
                <div class="col-sm-12">
                    <table
                        class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline"
                        id="m_table_1" role="grid" aria-describedby="m_table_1_info" style="width: 1150px;">
                        <thead>
                            <tr role="row">
                                <th class="dt-right sorting_disabled" rowspan="1" colspan="1" style="width: 31.5px;"
                                    aria-label="Record ID">
                                    <label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                        <input type="checkbox" value="" class="m-group-checkable">
                                        <span></span>
                                    </label>
                                </th>
                                <th class="sorting_desc" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1"
                                    style="width: 38.25px;" aria-sort="descending"
                                    aria-label="Order ID: activate to sort column ascending">العنوان الرئيسي</th>
                               
                                <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1"
                                    style="width: 67.25px;" aria-label="Country: activate to sort column ascending">
                                    الصوره</th>
                                <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1"
                                    style="width: 67.25px;" aria-label="Country: activate to sort column ascending">
                                    فعال</th>
                                <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1"
                                    style="width: 67.25px;" aria-label="Country: activate to sort column ascending">
                                    نافذة جديدة</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 70.5px;"
                                    aria-label="Actions">اجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($items as $item)
                            <tr role="row" class="odd">
                                <td class=" dt-right" tabindex="0">
                                    <label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                        <input type="checkbox" value="" class="m-checkable">
                                        <span></span>
                                    </label>
                                </td>
                                <td class="sorting_1">{{ $item->title }}</td>
                                <td class="sorting_1">
                                <img width='150' src='{{asset("/storage/images/$item->image")}}'>
                                </td>
                               
                               
                               <td class="sorting_1">{{ $item->active }}</td>
                                <td class="sorting_1">{{ $item->new_window }}</td>
                                <td nowrap="">
                                    <a class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only"
                                        href="{{route('slider.edit',$item->id)}}" title="تعديل"><i
                                            class="la la-edit"></i> </a>
                                    <a class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only"
                                        href="{{route('slider.delete',$item->id)}}"
                                        onclick="return confirm('هل انت متأكد من حذف {{$item->name}} ؟')" title="حذف"><i
                                            class="la la-remove"></i> </a>
                                
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection