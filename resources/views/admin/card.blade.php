@extends('layouts.admin')

@section('title', 'Desain Card')

@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container ">
                <div class="row">
                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-6">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b card-stretch">
                            <!--begin::Body-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h3 class="card-label">Desain Card</h3>
                                </div>

                                <!--begin::Toolbar-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Button-->
                                    <a href="user/desain-add" class="btn btn-primary font-weight-bolder">
                                        <span class="svg-icon svg-icon-md">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"/>
                                                    <circle fill="#000000" cx="9" cy="15" r="6"/>
                                                    <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"/>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>	Tambah Desain
                                    </a>
                                    <!--end::Button-->
                                </div>
                                <!--end::Toolbar-->
                            </div>

                            <div class="card-body">
                                {{-- // Tampilan Desain --}}

                                <div class="flex-shrink-0 mr-7 mt-lg-0 mt-3">
                                    <div class="symbol symbol-50 symbol-lg-150">
                                        <img src="{{ asset('assets/media/desain/A.jpg') }}" alt="image" />
                                    </div>
                                    <div class="symbol symbol-50 symbol-lg-150">
                                        <img src="{{ asset('assets/media/desain/B.jpg') }}" alt="image" />
                                    </div>
                                    <div class="symbol symbol-50 symbol-lg-150">
                                        <img src="{{ asset('assets/media/desain/C.jpg') }}" alt="image" />
                                    </div>
                                    <div class="symbol symbol-50 symbol-lg-150">
                                        <img src="{{ asset('assets/media/desain/D.jpg') }}" alt="image" />
                                    </div>
                                    <div class="symbol symbol-50 symbol-lg-150">
                                        <img src="{{ asset('assets/media/desain/E.jpg') }}" alt="image" />
                                    </div>
                                    <div class="symbol symbol-50 symbol-lg-150">
                                        <img src="{{ asset('assets/media/desain/F.jpg') }}" alt="image" />
                                    </div>
                                    <div class="symbol symbol-50 symbol-lg-150">
                                        <img src="{{ asset('assets/media/desain/G.jpg') }}" alt="image" />
                                    </div>
                                    <div class="symbol symbol-50 symbol-lg-150">
                                        <img src="{{ asset('assets/media/desain/H.jpg') }}" alt="image" />
                                    </div>
                                </div>
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

@push('script')
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js?v=7.0.6') }}"></script>
    <script src="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js?v=7.0.6') }}"></script>
    <!--end::Global Theme Bundle-->

    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('assets/js/pages/widgets.js?v=7.0.6') }}"></script>
    <!--end::Page Scripts-->

    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('assets/js/datatables/lembaga.js?v=7.0.6') }}"></script>
    <!--end::Page Scripts-->
@endpush