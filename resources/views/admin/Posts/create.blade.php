@extends('layouts.admin')
@section('content')


<!--begin::Form-->
<form class="kt-form kt-form--label-right" method="post" action="{{ route('admin.posts.store') }}" id="kt_form_1" novalidate="novalidate" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
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
                        إضافة </a>


                    <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
                </div>
            </div>

        </div>
    </div>

    <!-- end:: Subheader -->


    <div class="row" style="margin: 10px">

        <div class="col-lg-8">


            <div class="row">
                <div class="col-12">
                    <div class="kt-portlet">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                    إضافة تصنيف جديد
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-12">
                    <div class="kt-portlet">
                        <div class="kt-portlet__body">
                            <div class="kt-section kt-section--first">
                                <div class="form-group">
                                    <label style="font-weight: bold;margin-bottom:20px">العنوان:</label>
                                    <input type="text" class="form-control" placeholder="اكتب عنوان التصنيف هنا" name="title" aria-describedby="email-error">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="row">
                <div class="col-12">
                    <div class="kt-portlet">
                        <div class="kt-portlet__body">
                            <div class="kt-section kt-section--first">
                                <div class="form-group">
                                    <label style="font-weight: bold;margin-bottom:20px">الوصف:</label>
                                    <input type="text" class="form-control" placeholder="اكتب عنوان التصنيف هنا" name="description" aria-describedby="email-error">

                                    <!-- <span class="form-text text-muted">We'll never share your email with anyone else</span> -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="kt-portlet">
                        <div class="kt-portlet__body">
                            <div class="kt-section kt-section--first">

                                <div class="form-group">
                                    <label style="font-weight: bold;margin-bottom:20px">التفاصيل:</label>

                                    <textarea name="body" id="editor1" rows="10" cols="80"></textarea>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--begin::Portlet-->
            <div class="kt-portlet">


                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <button type="submit" class="btn btn-primary">حفظ وعودة للأرشيف</button>
                        <button type="reset" class="btn btn-secondary">مسح الكل</button>
                    </div>
                </div>

            </div>
        </div>

        <!--begin::Portlet-->

        <div class="col-lg-4">

            <div class="row">
                <div class="col-12">
                    <div class="kt-portlet">
                        <div class="kt-portlet__body">
                            <div class="kt-section kt-section--first">
                                <div class="form-group">
                                    <label style="font-weight: bold;margin-bottom:20px">عنوان اشاري:</label>
                                    <input type="text" class="form-control" placeholder="اكتب عنوان التصنيف هنا" name="caption" aria-describedby="email-error">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-3">
                    <div class="kt-portlet">
                        <div class="kt-portlet__body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-8">
                                        <label style="font-weight: bold;margin-bottom:20px;margin-left:20px">فعّال :</label>

                                    </div>
                                    <div class="col-4">
                                        <label class="kt-checkbox kt-checkbox--tick kt-checkbox--brand" style="font-weight: bold;margin-bottom:20px;margin-left:20px">
                                            <input type="checkbox" name="is_active">
                                            <span></span>
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="kt-portlet">
                        <div class="kt-portlet__body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-8">
                                        <label style="font-weight: bold;margin-bottom:20px;margin-left:20px">خبر بارز :</label>

                                    </div>
                                    <div class="col-4">
                                        <label class="kt-checkbox kt-checkbox--tick kt-checkbox--brand" style="font-weight: bold;margin-bottom:20px;margin-left:20px">
                                            <input type="checkbox" name="is_featured">
                                            <span></span>
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="kt-portlet">
                        <div class="kt-portlet__body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-8">
                                        <label style="font-weight: bold;margin-bottom:20px;margin-left:20px">سلايدر :</label>

                                    </div>
                                    <div class="col-4">
                                        <label class="kt-checkbox kt-checkbox--tick kt-checkbox--brand" style="font-weight: bold;margin-bottom:20px;margin-left:20px">
                                            <input type="checkbox" name="is_news_crasoul">
                                            <span></span>
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="kt-portlet">
                        <div class="kt-portlet__body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-8">
                                        <label style="font-weight: bold;margin-bottom:20px;margin-left:20px">عاجل :</label>

                                    </div>
                                    <div class="col-4">
                                        <label class="kt-checkbox kt-checkbox--tick kt-checkbox--brand" style="font-weight: bold;margin-bottom:20px;margin-left:20px">
                                            <input type="checkbox" name="is_news_breaknews">
                                            <span></span>
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- //Features -->

            <div class="row">
                <div class="col-12">
                    <div class="kt-portlet">
                        <div class="kt-portlet__body">
                            <div class="form-group ">
                                <label style="font-weight: bold;margin-bottom:20px">التصنيف :</label>
                                <select name="category_id" class="form-control form-control--fixed kt-selectpicker" multiple data-max-options="2" data-width="200">
                                    <option value="" disabled>اختر التصنيف</option>
                                    @foreach($categories as $c)
                                    <option value="{{ $c->id }}">{{ $c->title }}</option>
                                    @endforeach
                                </select>
                            </div>


                        </div>


                    </div>

                </div>
            </div>


            <div class="row">
                <div class="col-12">
                    <div class="kt-portlet">
                        <div class="kt-portlet__body">
                            <div class="form-group">
                                <label style="font-weight: bold;margin-bottom:20px">الصورة :</label>
                                <input type="file" class="form-control" name="img" aria-describedby="email-error">
                          
                                @if(Session::has('message'))
                                <div class="alert alert-success mt-5"> {{ Session::get('message') }}</div>
                                @endif
                                @if (count($errors) > 0)
         <div class = "alert alert-danger">
            <ul>
               @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
               @endforeach
            </ul>
         </div>
      @endif
      
    

                                <!-- <span class="form-text text-muted">We'll never share your email with anyone else</span> -->
                            </div>

                        </div>
                    </div>

                </div>
            </div>


            <div class="row">
                <div class="col-12">
                    <div class="kt-portlet">
                        <div class="kt-portlet__body">



                            <div class="kt-section kt-section--first">
                                <div class="form-group">
                                    <label style="font-weight: bold;margin-bottom:20px">الوسوم:</label>
                                    <input type="text" class="form-control" data-role="tagsinput" name="tags" aria-describedby="email-error">
                                </div>

                            </div>
                        </div>




                    </div>

                </div>
            </div>

        </div>

    </div>
    </div>









    </div>
</form>

<!--end::Form-->
@endsection