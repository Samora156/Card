@extends('layouts.user')

@section('title', 'Update Card')

@section('content')
    <!--begin::Content-->
    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class=" container-fluid ">

                <!--begin::Form-->
                <form method="post" action="{{ route('update', $pengguna->id) }}" enctype="multipart/form-data"
                    class="form" id="kt_form">
                    @csrf
                    @method('POST')

                    <!--begin::Card-->
                    <div class="card card-custom gutter-bs">
                        <!--Begin::Header-->
                        <div class="card-header card-header-tabs-line">
                            <div class="card-toolbar">
                                <ul class="nav nav-tabs nav-tabs-space-lg nav-tabs-line nav-tabs-bold nav-tabs-line-3x "
                                    role="tablist">
                                    <li class="nav-item mr-3">
                                        <a class="nav-link active" data-toggle="tab"
                                            href="">
                                            <span class="nav-icon mr-2">
                                                <span class="svg-icon svg-icon-md svg-icon-primary mr-1"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo10/dist/../src/media/svg/icons/Communication/Add-user.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <polygon points="0 0 24 0 24 24 0 24"/>
                                                            <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                            <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
                                                        </g>
                                                    </svg><!--end::Svg Icon--></span>
                                                </span>
                                            <span class="nav-text font-weight-bold">Edit Data</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <!--begin::Toolbar-->
                            <div class="d-flex align-items-center">
                                <!--begin::Button-->
                                <a href="user/pengguna" class="btn btn-default font-weight-bold"> Batal </a>
                                <!--end::Button-->

                                <!--begin::Dropdown-->
                                <div class="btn-group ml-2">
                                    <button type="submit" class="btn btn-primary font-weight-bold"><i class="ki ki-check icon-sm"></i> Simpan </button>
                                </div>
                                <!--end::Dropdown-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->

                        <!--Begin::Body-->
                        <div class="card-body px-0">
                            <div class="tab-content pt-5">
                                <!--begin::Tab Content-->
                                <div class="tab-pane active" id="kt_apps_contacts_view_tab_2" role="tabpanel">
                                    <form class="form">
                                        <!--begin::Heading-->
                                        <div class="row">
                                            <div class="col-lg-9 col-xl-6 offset-xl-3">
                                                <h3 class="font-size-h6 mb-5"></h3>
                                            </div>
                                        </div>
                                        <!--end::Heading-->

                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 text-right col-form-label">Foto</label>
                                            <div class="col-9">
                                                <div class="image-input image-input-empty image-input-outline"
                                                    id="kt_image_5" style="background-image: url({{ $pengguna->foto }})">
                                                    <div class="image-input-wrapper"></div>

                                                    <label
                                                        class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                        data-action="change" data-toggle="tooltip" title=""
                                                        data-original-title="Change avatar">
                                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                                        <input type="file" name="foto" accept=".png, .jpg, .jpeg" />
                                                        <input type="hidden" name="profile_avatar_remove" />
                                                    </label>

                                                    <span
                                                        class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                        data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                    </span>

                                                    <span
                                                        class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                        data-action="remove" data-toggle="tooltip" title="Remove avatar">
                                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 text-right col-form-label">No ID</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <div class="input-group-prepend"><span
                                                            class="input-group-text"><i
                                                                class="la la-id-card"></i></span></div>
                                                    <input type="text" name="no_id"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="{{ $pengguna->nama }}" placeholder="00xx-xxxx-xxx" readonly />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 text-right col-form-label">Nama</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <div class="input-group-prepend"><span
                                                            class="input-group-text"><i
                                                                class="la la-user"></i></span></div>
                                                    <input type="text" name="nama"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="{{ $pengguna->nama }}" placeholder="Meita Wilianisa" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 text-right col-form-label">Jenis Kelamin</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <div class="input-group-prepend"><span
                                                            class="input-group-text"><i
                                                                class="la la-transgender"></i></span></div>
                                                    <input type="text" name="jenis_kelamin"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="{{ $pengguna->jenis_kelamin }}" placeholder="Perempuan/Laki-Laki" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 text-right col-form-label">Jabatan</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <div class="input-group-prepend"><span
                                                            class="input-group-text"><i
                                                                class="la la-map-pin"></i></span></div>
                                                    <input type="text" name="jabatan"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="{{ $pengguna->jabatan }}" placeholder="Assistant Manager" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 text-right col-form-label">Email</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <div class="input-group-prepend"><span
                                                            class="input-group-text"><i
                                                                class="la la-at"></i></span></div>
                                                    <input type="text" name="email"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="{{ $pengguna->email }}" placeholder="user@gmail.com" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 text-right col-form-label">Tgl Bergabung</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <div class="input-group-prepend"><span
                                                            class="input-group-text"><i
                                                                class="la la-calendar"></i></span></div>
                                                    <input type="date" name="tanggal_bergabung"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="{{ $pengguna->tanggal_bergabung }}" placeholder="Assistant Manager" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 text-right col-form-label">Tgl Berakhir</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <div class="input-group-prepend"><span
                                                            class="input-group-text"><i
                                                                class="la la-calendar"></i></span></div>
                                                    <input type="date" name="tanggal_berakhir"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="{{ $pengguna->tanggal_berakhir }}" placeholder="" required/>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!--end::Tab Content-->
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card-->

                </form>
                <!--end::Form-->
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

    <script>
        var avatar5 = new KTImageInput('kt_image_5');
    </script>
@endpush