

@extends('layouts.admin')
@section('content')



<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

    <!-- begin:: Subheader -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">التصنيفات</h3>
                <span class="kt-subheader__separator kt-hidden"></span>
                <div class="kt-subheader__breadcrumbs">
                    <a href="{{url('/admin')}}" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                    <span class="kt-subheader__breadcrumbs-separator"></span>
                    <a href="" class="kt-subheader__breadcrumbs-link">
                        التصنيفات </a>
                    <span class="kt-subheader__breadcrumbs-separator"></span>
                    <a href="" class="kt-subheader__breadcrumbs-link">
                        عرض </a>
                   
                    
                    <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
                </div>
            </div>

        </div>
    </div>

    <!-- end:: Subheader -->

    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__head kt-portlet__head--lg">
                <div class="kt-portlet__head-label">
                <div class="kt-portlet__head-wrapper">
                        <div class="kt-portlet__head-actions">
                            
                            <h3 >
                                <i class="la la-pen"></i>
                                عدد المقالات - {{count($posts)}}
                            </h3>
                        </div>
                    </div>
                </div>



                <div class="kt-portlet__head-toolbar">
                    <div class="kt-portlet__head-wrapper">
                        <div class="kt-portlet__head-actions">
                            
                            <a href="{{ route('admin.posts.create') }}" class="btn btn-brand btn-elevate btn-icon-sm">
                                <i class="la la-plus"></i>
                                تصنيف جديد
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="kt-portlet__body">



                <!--begin: Datatable -->
                <div class="kt-separator kt-separator--border-dashed kt-separator--space-md"></div>
                <div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                        @if(session()->has('message'))

        {{ session()->get('message') }}

@endif
                            <table class="table table-striped- table-bordered table-hover table-checkable dataTable dtr-inline" id="kt_table_1" role="grid" aria-describedby="kt_table_1_info" style="width: 2178px;">
                                <thead>
                                    <tr role="row" >
                                        <th class="sorting_asc" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 203.25px;font-weight:bold" aria-sort="ascending" aria-label="Record ID: activate to sort column descending">الترتيب</th>
                                        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 181.25px;font-weight:bold" aria-label="Order ID: activate to sort column ascending">الصورة</th>
                                        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 181.25px;font-weight:bold" aria-label="Order ID: activate to sort column ascending">العنوان</th>
                                        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 181.25px;font-weight:bold" aria-label="Country: activate to sort column ascending">نوع التصنيف</th>
                                        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 262.25px;font-weight:bold" aria-label="Ship City: activate to sort column ascending">عدد المنشورات	</th>
                                        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 312.25px;font-weight:bold" aria-label="Company Agent: activate to sort column ascending">المشرف</th>
                                        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 206.25px;font-weight:bold" aria-label="Ship Date: activate to sort column ascending">وقت النشر</th>
                                        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 161.25px;font-weight:bold" aria-label="Status: activate to sort column ascending">التصنيف الرئيسي</th>
                                        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 132.25px;font-weight:bold" aria-label="Type: activate to sort column ascending">الحالة</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 192.5px;" aria-label="Actions">إجراءات</th>
                                    </tr>
                                </thead>
                              
                                <tbody>
                                    <tr role="row" class="odd">
                                    @if(count($posts))
                                    @foreach ($posts as $p) 
                                
                                        <td class="sorting_1" tabindex="0 " style="font-weight:bold" >{{ $p->id }}</td>
                                        <td><center><img src="{{ asset('storage/images/'.$p->img) }}" alt="" width="80" height="60"></center></td>
                                        <td width="40%"  style="font-weight:bold">{{ $p->title }}</td>

                                        <td  style="font-weight:bold">Indonesia</td>
                                        <td  style="font-weight:bold">Cihaur</td>
                                        <td  style="font-weight:bold">@if($p->user) {{$p->user->name}} @endif</td>
                                        <td  style="font-weight:bold">{{ $p->created_at->format('H:i - d.m.Y') }}</td>
                                        <td><span class="kt-badge  kt-badge--primary kt-badge--inline kt-badge--pill" style="font-weight:bold">@if($p->category){{  $p->category->title }}@endif</span></td>
                                        <td  style="font-weight:bold">
                                        @if($p->is_active == 1)
                                        <span class="kt-badge kt-badge--success kt-badge--dot">
                                            @else
                                            <span class="kt-badge kt-badge--danger kt-badge--dot">
                                            @endif
                                   

                                        </span>&nbsp;
                                        
                                      
                                            @if($p->is_active == 1)
                                            <span class="kt-font-bold kt-font-success">
                                           <span style="font-weight:bold"> فعّال</span>
                                            @else
                                            <span class="kt-font-bold kt-font-danger">
                                            <span style="font-weight:bold">  غير فعّال</span>
                                            @endif
                                        </span></td>
                                        <td>  <a href="{{ route('admin.posts.edit',$p->id)}}" class="btn btn-sm btn-clean btn-icon btn-icon-md"  > <i class="la la-edit"></i> </a>
                                        <span class="dropdown"> <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-sm btn-clean btn-icon btn-icon-md" href="javascript:;" id="kt_notify_btn"> <i class="la la-remove"></i> </a>  
                                        <form class="kt-form " method="POST" action="{{ route('admin.posts.destroy',$p->id)}}">
                                            {{ method_field('DELETE') }}
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            
                                        </form>
                                    </td>
                                

                                    </tr>
                                    @endforeach
                                    @else
                                   <td colspan="10">لا يوجد مقالات</td>
                                   @endif
                                </tbody>
                            </table>
                            <div id="kt_table_1_processing" class="dataTables_processing card" style="display: none;">جاري التحميل...</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="kt_table_1_info" role="status" aria-live="polite">Showing 1 to 10 of 40 entries</div>
                        </div>
                        <div class="col-sm-12 col-md-7 dataTables_pager">
                            <div class="dataTables_length" id="kt_table_1_length"><label>عرض <select name="kt_table_1_length" aria-controls="kt_table_1" class="custom-select custom-select-sm form-control form-control-sm">
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                    </select></label></div>
                            <div class="dataTables_paginate paging_simple_numbers" id="kt_table_1_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled" id="kt_table_1_previous"><a href="#" aria-controls="kt_table_1" data-dt-idx="0" tabindex="0" class="page-link"><i class="la la-angle-left"></i></a></li>
                                    <li class="paginate_button page-item active"><a href="#" aria-controls="kt_table_1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="kt_table_1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="kt_table_1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="kt_table_1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                    <li class="paginate_button page-item next" id="kt_table_1_next"><a href="#" aria-controls="kt_table_1" data-dt-idx="5" tabindex="0" class="page-link"><i class="la la-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!--end: Datatable -->
            </div>
        </div>
    </div>

    <!-- end:: Content -->
</div>


@endsection