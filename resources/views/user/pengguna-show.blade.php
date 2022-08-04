@extends('layouts.user')

@section('title', 'ID Card')

@section('content')
<style>

#img {
  border-radius: 50%;
  margin-left: 10px; 
}

    #id {
    width:250px;
    height:450px;
    position:absolute;
    opacity: 0.88;
    margin:auto;
    margin-left: 100px;
    font-family: 'Josefin Sans', sans-serif;
    transition: 0.4s;
    background-color: #FFFFFF;
    border-radius: 2%;
    }

    #id::before {
    content: "";
    position: absolute;
    width:250px;
    height:450px;
    background: url('{{ asset("assets/media/desain/1.png") }}');   /*if you want to change the background image replace logo.png*/
    background-repeat:repeat-x;
    background-size: 250px 445px;
    /* opacity: 0.2; */
    z-index: -1;
    margin:auto;
    text-align:center;
    }

    .container{
        font-size: 12px;
        font-family: 'Josefin Sans', sans-serif;
    }
    .id-1{
        transition: 0.4s;
        width:250px;
        height:450px;
        background: url('{{ asset("assets/media/desain/2.png") }}');   /*if you want to change the background image replace logo.png*/
        text-align:center;
        font-size: 16px;
        font-family: 'Mouse Memoirs', sans-serif;
        background-size: 250px 445px;
        margin:auto;
        margin-top:500px;
    }
</style>
    <!--begin::Content-->
    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b card-stretch">
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

                            <div class="card-body col">
                                {{-- // Preview ID Card --}}
                                <div class="flex-shrink-0 mr-7 mt-lg-0 mt-3 symbol-50 symbol-lg-120 ">
                                    <div id="id" class="mx-auto border border-black ml-10">
                                        <center>
                                        <h5 class="text fw-bold mt-2"><bold>No ID :</bold></h5>
                                        <p>098976546</p>
                                        <img id="img" class="mt-5 " src="{{ asset($p->foto) }}"  width="105" height="138" alt="image" />
                                        <div class="container" align="center">
                                            <h4 style="margin:auto" class="mt-7">{{ $p->nama }}</h4>
                                            <p style="margin:auto">{{ $p->jabatan }}</p>
                                            <hr align="center" style="border: 1px solid black;width:80%;margin-top:13%"></hr>
                                            {!! QrCode::size(100)->generate($p); !!}
                                        </div>
                                    </center>
                                    </div>
                                </div>
                                <div class="flex-shrink-0 mr-7 mt-lg-0 mt-3 symbol-50 symbol-lg-120 col">
                                    <div class="id-1 mx-auto border border-black ml-10">	
                                        <center>
                                        <img src="{{ asset('assets/media/desain/SANAI.svg') }}" alt="Avatar" width="250px" height="250px">
                                        <div class="container" align="center">
                                            <p style="margin:auto">{{ $p->nama }}</p>
                                            <h2 style="color:#00BFFF;margin-left:2%">THE STATE OF  </h2>
                                            <p style="margin:auto">If lost and found please return to the nearest police station</p>
                                            <hr align="center" style="border: 1px solid black;width:80%;margin-top:13%"></hr> 
                                            <p align="center" style="margin-top:-2%">Authorized Signature</p>
                                        </div>
                                    </center>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <a href="#" class="btn btn-light-primary font-weight-bold"><i class="ki ki-copy icon-nm"></i> Salin Link</a>
                                <a href="user/print/{{ $p->id }}" class="btn btn-outline-secondary font-weight-bold"><i class="la la-print icon-dm"></i> Print</a>                            
                            </div>    
                            @endforeach
                            <!--end::Body-->
                        </div>
                        <!--end::Card-->
                    </div>

                    <div class="col-xl-8 col-lg-6 col-md-6 col-sm-6">
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
                    {{-- <script>
                        window.print();
                    </script> --}}
                    @foreach ($pengguna as $p)
                        <div type="hidden" class="viewRender"></div>
                    @endforeach
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

    function getData(id){
    let url = HOST_URL + '/user/print/' + id;
    $.ajax({
        url: url,
        method: "GET",
        dataType: 'json',
        success: function(response){
            // $('.viewRender').html(response.render);
            // $('.viewRender').html('hide');
            window.print(response.render);
        }
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
    <!--end::Page Scripts-->
@endpush

<!--begin::Card-->
{{-- <div class="card card-custom col-4">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">Preview</h3>
        </div>
    </div>
    <div class="card-body">
        Preview ID Card
    </div>
    <div class="card-footer d-flex justify-content-between">
        <a href="#" class="btn btn-light-primary font-weight-bold">Manage</a>
        <a href="#" class="btn btn-outline-secondary font-weight-bold">Learn more</a>
    </div>
</div>

<div class="card card-custom col-4">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">Desain Card:</h3>
        </div>
    </div>
    <div class="card-body">
        Desain ID Card
    </div>
</div> --}}
<!--end::Card-->