<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error Page</title>
    <style>
        body {
            background: #fff;
        }

        .error-container {
            height: 100vh !important;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-family: montserrat, sans-serif;

        }

        .big-text {
            font-size: 200px;
            font-weight: 900;
            font-family: sans-serif;
            background: url(https://cdn.pixabay.com/photo/2018/05/30/15/39/thunderstorm-3441687_960_720.jpg) no-repeat;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-size: cover;
            background-position: center;
        }

        .small-text {
            font-family: montserrat, sans-serif;
            color: rgb(0, 0, 0);
            font-size: 24px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .button {
            color: #fff;
            padding: 12px 36px;
            font-weight: 600;
            border: none;
            position: relative;
            font-family: 'Raleway', sans-serif;
            display: inline-block;
            text-transform: uppercase;
            -webkit-border-radius: 90px;
            -moz-border-radius: 90px;
            border-radius: 90px;
            margin: 2px;
            margin-top: 2px;
            background-image: linear-gradient(to right, #09b3ef 0%, #1e50e2 51%, #09b3ef 100%);
            background-size: 200% auto;
            flex: 1 1 auto;
            text-decoration: none;

        }


        .button:hover,
        .button:focus {
            color: #ffffff;
            background-position: right center;
            -webkit-box-shadow: 0px 5px 15px 0px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0px 5px 15px 0px rgba(0, 0, 0, 0.1);
            box-shadow: 0px 5px 15px 0px rgba(0, 0, 0, 0.1);
            text-decoration: none;
        }

        @media (max-width: 768px) {
            .big-text {
                font-size: 30vw;
            }

            .small-text {
                font-size: 8vw;
            }

            .button {
                padding: 10px 30px;
                font-size: 4vw;
            }
        }
    </style>
</head>

<body>
    <div class="container error-container">
        <div class="row  d-flex align-items-center justify-content-center">
            <div class="col-md-12 text-center">
                <h1 class="big-text">Oops!</h1>
                <h2 class="small-text">404 - PAGE NOT FOUND</h2>

            </div>
            <div class="col-md-6  text-center">
                <p>
                    URL yang dicari nampaknya tidak ditemukan, mungkin Anda salah mengetik alamatnya. Coba periksa
                    kembali atau hubungi administrator situs.
                </p>

                <a href="{{ url('login') }}" class="button button-dark-blue iq-mt-15 text-center">Kembali Ke LOGIN</a>

            </div>

        </div>
    </div>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</body>

</html>
