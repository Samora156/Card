<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="../../../">
        <meta charset="utf-8" />
        <title>Print | Get Card</title>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="description" content="Advanced search datatables examples" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

        <!--begin::Fonts-->
        {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
        <!--end::Fonts-->

        <!--begin::Page Vendors Styles(used by this page)-->
        <link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css?v=7.0.6') }}" rel="stylesheet" type="text/css" />
        <!--end::Page Vendors Styles-->

        <!--begin::Global Theme Styles(used by all pages)-->
        <link href="{{ asset('assets/plugins/global/plugins.bundle.css?v=7.0.6') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.6') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/style.bundle.css?v=7.0.6') }}" rel="stylesheet" type="text/css" />
        <!--end::Global Theme Styles-->

        <!--begin::Layout Themes(used by all pages)-->
        <!--end::Layout Themes-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" /> --}}
        {{-- <style>

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
            </style> --}}
            <style>
                #img {
                    border-radius: 50%;
                    margin-left: 25px; 
                    margin-top: 77px;
                }
              #bg-1 {
                width: 1000px;
                height: 450px;
                       
              }
              
              #id-2 {
                width:1000px;
                height:1450px;
                position:absolute;
                opacity: 0.88;
              font-family: 'Josefin Sans', sans-serif;
              
                            transition: 0.4s;
                            /* background-color: #FFFFFF; */
                            border-radius: 2%;
                      }
              
              #id-2::before {
                content: "";
                position: absolute;
                width: 100%;
                height: 100%;
                background: url('{{ asset("assets/media/desain/1.png") }}');   /*if you want to change the background image replace logo.png*/
                background-repeat:repeat-x;
                background-size: 100% 100%;
                border-radius: 2%;
                /* opacity: 0.2; */
                z-index: -1;
                text-align:center;
               
              }
               .container{
                            font-size: 12px;
                            font-family: 'Josefin Sans', sans-serif;
                        }
                       .id-3{
                            margin-top: 2000px;
                            transition: 0.4s;
                            width:1000px;
                            height:1450px;
                            background: #FFFFFF;
                            text-align:center;
                            font-size: 16px;
                            background: url('{{ asset("assets/media/desain/2.png") }}');   /*if you want to change the background image replace logo.png*/
                            font-family: 'Josefin Sans', sans-serif;
                            background-size: 100% 100%;
                            /* float: left; */
                            margin:auto;		  	
                            border-radius:2%;
                        }
              </style>
    </head>
    <body>
    <script type="text/javascript">	
        window.print();
    </script>                        <!--begin::Card-->
                            @foreach ($pengguna as $p)
                            <div id="bg-1">
                                    <div id="id-2" >
                                        <center>
                                            <h1 style="font-size: 50px"><bold>No ID :</bold></h1>
                                            <h2 style="font-size: 40px">098976546</h2>
                                            <img id="img" src="{{ asset($p->foto) }}"  width="440" height="440" alt="image" />
                                        </center>
                                        <div class="container" align="center">
                                            <h4 style="font-weight: bold;margin-top:10%; font-size: 65px">{{ $p->nama }}</h4>
                                            <p style="margin:auto; font-size: 50px">{{ $p->jabatan }}</p>
                                            <hr align="center" style="border: 1px solid black;width:80%;margin-top:3%;margin-bottom:3%"></hr>
                                            {!! QrCode::size(350)->generate($p); !!}
                                        </div>
                                    </div>
                                    {{-- <div class="id-1 mx-auto border border-black ml-10">	
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
                                    </div> --}}
                                </div>
                                <div id="bg-1" style="margin-top: 800px">
                                    <div class="id-3">
                                        <center>
                                            <img src="{{ asset('assets/media/desain/SANAI.svg') }}" alt="Avatar" width="900px" height="900px">
                                        <div class="container" align="center">
                                            <p style="margin-top:1%; font-size: 30px">Nama :</p>
                                            <p style="font-weight: bold;margin-top:-1%; font-size: 30px">{{ $p->nama }}</p>
                                            <p style="margin-top:1%; font-size: 30px">Tempat Lahir :</p>
                                            <p style="font-weight: bold;margin-top:-1%; font-size: 30px">{{ $p->tempat_lahir }}</p>
                                            <p style="margin-top:1%; font-size: 30px">Tanggal Lahir :</p>
                                            <p style="font-weight: bold;margin-top:-1%; font-size: 30px">{{ $p->tanggal_lahir }}</p>
                                            <p style="margin-top:1%; font-size: 30px">Jenis Kelamin :</p>
                                            <p style="font-weight: bold;margin-top:-1%; font-size: 30px">{{ $p->jenis_kelamin }}</p>      	
                                            <p style="margin-top:1%; font-size: 30px">Jabatan :</p>
                                            <p style="font-weight: bold;margin-top:-1%; font-size: 30px">{{ $p->jabatan }}</p>      	

                                    </div>
                                </div>
                                @endforeach
{{-- ontainer--> --}}
        <!--end::Entry-->
    <!--end::Content-->
    
    {{-- <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js?v=7.0.6') }}"></script>
    <script src="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js?v=7.0.6') }}"></script>
    <!--end::Global Theme Bundle-->
    
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('assets/js/pages/widgets.js?v=7.0.6') }}"></script>
    <!--end::Page Scripts--> --}}
    
</body>
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