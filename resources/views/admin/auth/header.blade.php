<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Binex | Log in | Sign Up</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('public/admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ url('public/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('public/admin/dist/css/adminlte.min.css') }}">
    <style>
        .login-logo img {
            filter: drop-shadow(2px 4px 6px rgba(0, 0, 0, 0.2)) contrast(1.2) brightness(1.1);
            transition: all 0.3s ease-in-out;
            margin-bottom: 15px;
        }

        .login-logo img:hover {
            filter: drop-shadow(4px 6px 8px rgba(0, 0, 0, 0.3)) contrast(1.3) brightness(1.2);
        }

        .login-logo p {
            font-size: 22px;
            color: #333;
            margin-top: 10px;
            font-weight: 500;
        }
    </style>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <img src="{{ url('public/assets/logo/logo.png') }}" class="img-fluid" alt="" style="width: 217px;">
            <p>Easy Earn With Binex</p>
        </div>

