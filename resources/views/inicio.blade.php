<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>UPTFLIX | Inicio</title>

    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-inicio">

    <div class="row justify-content-center p-5">
        <div class="col-xl-5 col-lg-12 col-md-5">
            <div class="card o-hidden border-0 shadow-lg my-5 bg-transparent align-items-center">
                <div class="col-lg-10">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h1 text-warning mb-4">UPTFLIX</h1>
                        </div>
                        <a href="{{ route('login') }}">
                            <input type="button" style="font-size: 1rem" value="Iniciar Sesion"
                                class="btn btn-primary btn-user btn-block">
                        </a>
                        <br>
                        <a href="{{ route('registro') }}">
                            <input type="button" style="font-size: 1rem" value="Registrarse"
                                class="btn btn-success btn-user btn-block">
                        </a>
                        <br>
                        <a href="{{ route('login.Admin') }}">
                            <input type="button" style="font-size: 1rem" value="Administrador"
                                class="btn btn-dark btn-user btn-block">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>

</body>

</html>
