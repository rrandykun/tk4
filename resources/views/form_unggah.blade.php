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

        <?php //echo ini_get('post_max_size'); 
        ?>
        <div class="content">
            @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                {{ $error }} <br />
                @endforeach
            </div>
            @endif
            <br />
            <form action="/prosesunggah" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                Nama File:
                <br />
                <input type="text" name="judul" />
                <br /><br />
                Unggah Video:
                <br />
                <input type="file" name="file" />
                <br /><br />
                <input type="submit" value=" Simpan " />
            </form>
            <br /><br />
            <div class="links">
                <a href="/video">Lihat video</a>
                <a href="/">Kembali ke halaman awal</a>
            </div>

        </div>
    </div>
</body>

</html>