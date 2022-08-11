@extends('layouts.user')

@section('title', 'My Company')

@section('content')
    <!--begin::Content-->
    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid pb-25">
            <!--begin::Container-->
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-6">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b ">
                            <!--begin::Body-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h3 class="card-label">Pencarian ID Card</h3>
                                </div>
                            </div>
                        </div>
                        <!--end::Card-->

                        <!--begin::Card-->
                        <div class="card card-custom gutter-b card-stretch">
                            <!--begin::Body-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h3 class="card-label">List Kartu Saya</h3>
                                </div>

                                {{-- <div class="card-toolbar">
                                    <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-1" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Putar Tampilan" data-card-tool="toggle">
                                    <i class="ki ki-reload icon-nm"></i>
                                    </a>
                                </div> --}}
                            </div>

                            <div class="card-body">
                                {{-- // Preview ID Card --}}

                                <div class=" mr-7 mt-lg-0 mt-3 symbol-50 symbol-lg-120">
                                    <img class="mt-5 mr-4" src="{{ asset('assets/media/desain/1.png') }}" height="380" alt="image" />
                                    <img class="mt-5 mr-4" src="{{ asset('assets/media/desain/2.png') }}" height="380" alt="image" />
                                    <img class="mt-5 mr-4" src="{{ asset('assets/media/desain/7.png') }}" height="380" alt="image" />
                                    <img class="mt-5" src="{{ asset('assets/media/desain/8.png') }}" height="380" alt="image" />
                                    <img class="mt-5 mr-4" src="{{ asset('assets/media/desain/5.png') }}" height="380" alt="image" />
                                    <img class="mt-5 mr-4" src="{{ asset('assets/media/desain/6.png') }}" height="380" alt="image" />
                                </div>
                            </div>

                            <div class="card-footer d-flex justify-content-between">
                                <a href="#" class="btn btn-light-primary font-weight-bold"><i class="ki ki-copy icon-nm"></i> Salin Link</a>
                                <a href="#" class="btn btn-outline-secondary font-weight-bold"><i class="la la-print icon-dm"></i> Print</a>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->
@endsection