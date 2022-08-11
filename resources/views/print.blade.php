<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="../../../">
        <meta charset="utf-8" />
        <title>Print | Get Card</title>
        <meta name="description" content="Advanced search datatables examples" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
        <style>
            #img
            {
                border-radius: 50%; 
                margin-left: 25px;
                margin-top: 77px;
            }

            #bg-1
            {
                width: 1000px;
                height: 450px;
            }

            #id-2
            {
                width:1000px;
                height:1450px;
                position:absolute;
                opacity: 0.88;
                font-family: 'Josefin Sans', sans-serif;
                transition: 0.4s;
                border-radius: 2%;
            }

            #id-2::before
            {
                content: "";
                position: absolute;
                width: 100%;
                height: 100%;
                background: url('{{ asset("assets/media/desain/1.png") }}');   /*if you want to change the background image replace logo.png*/
                background-repeat:repeat-x;
                background-size: 100% 100%;
                border-radius: 2%;
                z-index: -1;
                text-align:center;
            }
            .container
            {
                font-size: 12px;
                font-family: 'Josefin Sans', sans-serif;
            }
            .id-3
            {
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
                margin:auto;		  	
                border-radius:2%;
            }
        </style>
    </head>
    <body>
        <script type="text/javascript">	
            window.print();
        </script>
        @foreach ($pengguna as $p)
            <div class="id_card">
                <div id="bg-1">
                    <div id="id-2">
                        <center>
                            <h1 style="font-size: 50px"><bold>No ID :</bold></h1>
                            <h2 style="font-size: 40px">098976546</h2>
                            <img id="img" src="{{ asset($p->foto) }}"  width="1000" height="1000" alt="image"/>
                        </center>
                        <div class="container" align="center">
                            <h4 style="font-weight: bold;margin-top:10%; font-size: 65px">{{ $p->nama }}</h4>
                            <p style="margin:auto; font-size: 50px">{{ $p->jabatan }}</p>
                            <hr align="center" style="border: 1px solid black;width:80%;margin-top:3%;margin-bottom:3%"></hr>
                            {!! QrCode::size(350)->generate($p); !!}
                        </div>
                    </div>
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
                        </center>   	
                    </div>
                </div>
            </div>
        @endforeach
    </body>
</html>