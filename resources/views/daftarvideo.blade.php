<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TK4</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #121212;
            color: #ffff;
            font-family: 'Nunito', sans-serif, bold;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="content">
            <table class="table table-bordered table-striped" border="0">
                <thead>
                    <tr>
                        <th width="1%">Video</th>
                        <th>Nama File</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($video as $g)
                    <tr>
                        <td>
                            <video width="320" height="240" controls>
                                <source src="{{ url('/uploaded_files/'.$g->file) }}" type="video/mp4">
                                <source src="{{ url('/uploaded_files/'.$g->file) }}" type="video/mpeg">
                                <source src="{{ url('/uploaded_files/'.$g->file) }}" type="video/avi">
                                <source src="{{ url('/uploaded_files/'.$g->file) }}" type="video/mkv">
                                
                                Your browser does not support the video tag.
                            </video>
                        </td>
                        <td>{{$g->judul}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <br /><br />
            <div class="links">
                <a href="/">Kembali ke halaman awal</a>
            </div>
        </div>
    </div>
</body>

</html>