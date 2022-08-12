@extends('layouts.user')

@section('title', 'ID Card')

@section('content')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
<link href="{{ asset('assets\css\pages\card\id_card.css') }}" rel="stylesheet" type="text/css"/>
<script src="{{ asset('assets/js/dom-to-image.min.js') }}"></script>
    <!--begin::Content-->
    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 col-md-6 col-sm-6">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b card-stretch overflow-hidden">
                            <!--begin::Body-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h3 class="card-label">Preview</h3>
                                </div>

                                <div class="card-toolbar">
                                    <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-1" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Putar Tampilan" data-card-tool="toggle">
                                        <i class="ki ki-reload icon-nm"></i>
                                    </a>
                                </div>
                            </div>
                            @foreach ($pengguna as $p)
                            <div class="card-body login login-5 login-signin-on  col " align="center" id="kt_login" style="height: 1100px">
                                {{-- // Preview ID Card --}}
                                <div class="position-relative overflow-hidden">
                                    <div id="id_card_1" class="tabcontent">
                                        <div class="container">
                                            <div class="image-section">
                                                <img src="{{ asset('assets/media/desain/D-1-3.png') }}" id="template" alt="">
                                            </div>
                                            <div class="text-section" align="center">
                                                <h5 id="nama-id" class="text fw-bold mt-2"><bold>No ID :</bold></h5>
                                                <p id="no-id">098976546</p>
                                                <img id="profile-img" src="{{ asset($p->foto) }}"  alt="image" />
                                                <h4 style="margin:auto; font-size: 30px;" class="profile-nama mt-5">{{ $p->nama }}</h4>
                                                <p id="profile-jabatan" class="mx-auto"> {{ $p->jabatan }}</p>
                                                <div id="detail">
                                                    <p id="profile-telp">{{ $p->telp }}</p>
                                                    <p id="profile-email">{{ $p->email }}</p>
                                                    <p id="profile-tanggal">{{ $p->tanggal_bergabung }} / {{ $p->tanggal_berakhir }}</p>
                                                    <img src="{{ asset('assets/media/desain/SANAI.svg') }}" id="logo-lembaga" alt="Avatar">
                                                    @foreach ($lembaga as $l)
                                                    <p id="profile-telepon">{{ $l->telepon }}</p>
                                                    <p id="profile-alamat">{{ $l->alamat }}</p>
                                                    <p id="profile-alamat">{{ $l->email }}</p>
                                                    <p id="profile-alamat">{{ $l->website }}</p>
                                                    @endforeach
                                                </div>
                                                <div id="qrcode">
                                                    {!! QrCode::size(150)->generate($p); !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="card-footer d-flex justify-content-between">
                                <a href="#" class="btn btn-light-primary font-weight-bold"><i class="ki ki-copy icon-nm"></i> Salin Link</a>
                                {{-- <a href="user/print/{{ $p->id }}" class="btn btn-outline-secondary font-weight-bold"><i class="la la-print icon-dm"></i> Print</a> --}}
                                <button onclick="download()" class="btn btn-outline-secondary font-weight-bold"><i class="la la-print icon-dm"></i>Download</button>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Card-->
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b card-stretch">
                            <!--begin::Body-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h3 class="card-label">Desain Card</h3>
                                </div>
                            </div>

                            <div class="card-body">
                                {{-- // Tampilan Desain --}}
                                <div class="flex-shrink-0 mr-7 mt-lg-0 mt-3 desain">
                                    @foreach ($card as $c)
                                        <div class="symbol symbol-50 symbol-lg-150 gambar">
                                            <button onclick="template({{ $c->id }})" class="btn symbol symbol-50 symbol-lg-150" style="border: none" id="kt_login_signin"><img src="{{ asset($c->template) }}" alt="image" /></button>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Card-->
                    </div>
                        {{-- <canvas id="canvas" width="1000" height="1450" class="viewRender"></canvas> --}}
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->
@endsection

@push('script')

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    function template(id){
        let url = HOST_URL + '/card/' + id;
        $.ajax({
            url: url,
            method: "GET",
            dataType: 'json',
            success: function(response){
                let foto = $('#template');
                var template = response.data[0].template;
                foto.attr('src', template);
            }
        });
    }

        function download(){
            let data = document.querySelector('.container')

            domtoimage.toPng(data)
                .then(function (dataUrl) {
                    var link = document.createElement('a');
                    link.download = 'my-image-name.png';
                    link.href = dataUrl;
                    link.click();
                });

                let data1 = document.querySelector('.container-1')

            domtoimage.toPng(data1)
                .then(function (dataUrl) {
                    var link = document.createElement('a');
                    link.download = 'my-image-name.png';
                    link.href = dataUrl;
                    link.click();
                });
        }

    </script> 
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js?v=7.0.6') }}"></script>
    <script src="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js?v=7.0.6') }}"></script>
    <!--end::Global Theme Bundle-->

    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('assets/js/pages/widgets.js?v=7.0.6') }}"></script>
    <script src="{{ asset('assets/js/datatables/id_card.js?v=7.0.6') }}"></script>
    <!--end::Page Scripts-->
@endpush