

@extends('layouts.admin')
@section('content')



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

    

    <div class="col-lg-12">

									<!--begin::Portlet-->
									<div class="kt-portlet">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													إضافة تصنيف جديد
												</h3>
											</div>
                                        </div>
                                        

										<!--begin::Form-->
										<form class="kt-form kt-form--label-right" method="post" action="{{ route('admin.categories.store') }}" id="kt_form_1" novalidate="novalidate">
                                        <div class="form-group form-group-last kt-hide">
													<div class="alert alert-danger" role="alert" id="kt_form_1_msg">
														<div class="alert-icon"><i class="flaticon-warning"></i></div>
														<div class="alert-text">
															Oh snap! Change a few things up and try submitting again.
														</div>
														<div class="alert-close">
															<button type="button" class="close" data-dismiss="alert" aria-label="Close">
																<span aria-hidden="true"><i class="la la-close"></i></span>
															</button>
														</div>
													</div>
                                                </div>
                                                
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
											<div class="kt-portlet__body">
												<div class="kt-section kt-section--first">
													<div class="form-group">
														<label>العنوان:</label>
                                                        <input type="text" class="form-control" placeholder="اكتب عنوان التصنيف هنا" name="title" aria-describedby="email-error">
                                                        <div id="email-error" class="error invalid-feedback">This field is required.</div>
														<!-- <span class="form-text text-muted">Please enter your full name</span> -->
													</div>
													<div class="form-group">
														<label>الوصف:</label>
														<textarea class="form-control" id="exampleTextarea" rows="4"></textarea>
														<!-- <span class="form-text text-muted">We'll never share your email with anyone else</span> -->
													</div>
												
												</div>
											</div>
											<div class="kt-portlet__foot">
												<div class="kt-form__actions">
													<button type="submit" class="btn btn-primary">حفظ وعودة للأرشيف</button>
													<button type="reset" class="btn btn-secondary">مسح الكل</button>
												</div>
											</div>
										</form>

										<!--end::Form-->
									</div>

									<!--end::Portlet-->

								
								</div>

@endsection