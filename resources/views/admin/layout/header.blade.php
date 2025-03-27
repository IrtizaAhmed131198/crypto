<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Binex</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{url('public/admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{url('public/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('public/admin/dist/css/adminlte.min.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{url('public/admin/plugins/summernote/summernote-bs4.min.css')}}">
  <!-- CodeMirror -->
  {{-- <link rel="stylesheet" href="https://cdn.lineicons.com/3.0/lineicons.css"> --}}
  <link rel="icon" type="image/png" href="{{ url('public/front/images/favicon.png') }}">

  <link rel="stylesheet" href="{{url('public/admin/plugins/codemirror/codemirror.css')}}">
  <link rel="stylesheet" href="{{url('public/admin/plugins/codemirror/theme/monokai.css')}}">
    {{-- <link rel="stylesheet" href="{{url('public/admin/dist/css/line-awesome.min.css')}}"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .layout-navbar-fixed .wrapper .main-header{
        margin: 0 !important;
    }
    .footer-menu a {
        color: #3a3a3a;
        font-size: 16px;
        font-weight: 600;
    }

    .footer-menu ul li {
        margin: 0 14px;
        display: flex;
        align-items: center;
    }
    .footer-menu ul li:hover i {
        color: orange;
    }

    .footer-menu ul li:hover a {
        color: orange;
    }
    .footer-menu ul li.active i {
        color: orange;
    }

    .footer-menu ul li.active a {
        color: orange;
    }
        a.navbar-brand img {
        max-width: 100px;
    }
    .layout-footer-fixed .wrapper .content-wrapper{
        margin: 0 !important;
    }
    .footer-menu {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: #ededed;
    }
    body::before {
            background-image: none;
            background: url("{{ url('front/images/loginBackground.png') }}") no-repeat center center fixed;
            background-size: cover;
            opacity: 0.5; /* Adjust the opacity based on your preference */
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            position: fixed;
            z-index: -2;
        }
    thead,
    tfoot,
    .card-header {
      background-color: #212529 !important;
      color: #fff !important;
    }

    .btn-custom {
      color: #fff !important;
      background-color: #212529 !important;
      border-color: #13237e !important;
    }

    .btn-custom:hover {
      color: #fff !important;
      background-color: #16205a !important;
      border-color: #0e1a5c !important;
    }

    .page-item.active .page-link {
      background-color: #212529 !important;
      border-color: #13237e !important;
    }

    thead th {
      white-space: nowrap;
    }

    .main-footer {
      text-align: center;
      font-size: 13px;
    }

    .main-footer span{
      font-weight: 600;
    }

    .main-footer span a{
      color: #212529;
    }
    [class*=sidebar-dark-] .nav-sidebar>.nav-item.menu-open>.nav-link, [class*=sidebar-dark-] .nav-sidebar>.nav-item:hover>.nav-link, [class*=sidebar-dark-] .nav-sidebar>.nav-item>.nav-link:focus {
      background-color: #212529;
      color: #fff !important;
    }
    .content-header .container-fluid .row .col-sm-6 h1 {
      font-size: 1.5rem;
    }
    .qr_code {
        text-align: center;
        margin-top: 15px;
        padding: 15px;
    }

    .copy-container {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-top: 15px;
    }
    .copy-btn, .share-btn {
        cursor: pointer;
        padding: 8px 12px;
        border: none;
        background-color: #007bff;
        color: white;
        border-radius: 5px;
    }
    .copy-btn:hover, .share-btn:hover {
        background-color: #0056b3;
    }
    .hidden-input {
        position: absolute;
        left: -9999px;
    }

    /* footer nav */
    .footer-menu ul li {
        margin: 0 10px;
        display: flex;
        align-items: center;
        flex-direction: column;
        white-space: nowrap;
        flex-wrap: nowrap;
    }
    .footer-menu ul.navbar-nav {
        flex-direction: row;
        justify-content: space-evenly;
        align-items: center;
        gap: 10px;
        width: 100%;
        overflow-x: auto;
    }

    @media screen and (min-width: 1200px) {
        .banner {
            margin-bottom: 3.5rem;
            padding: 2.5rem;
            height: 245px;
        }

        .banner__img img {
            position: absolute;
            top: -150px;
            right: 0;
        }
    }

    @media screen and (max-width: 575px) {
        .banner__img img {
            display: none;
        }
    }

    .banner {
        border-radius: 24px;
    }

    .banner {
        /* margin-bottom: 3.5rem; */
        padding: 2.5rem;
        height: 245px;
    }

    .text-4xl {
        font-size: 2.25rem;
    }

    .text-white {
        color: #FFFFFF;
    }

    .banner__cta {
        width: 100%;
    }

    .banner__img {
        position: relative;
    }

    .banner__img img {
        position: absolute;
        top: -250px;
        right: 0;
    }
    /* footer nav */

    .portos {
        display: grid !important;
        grid-template-columns: repeat(auto-fill, minmax(285px, 285px));
        gap: 1rem;
    }

    @media screen and (min-width: 1200px) {
        .portos {
            margin-bottom: 2rem;
        }
    }

    .porto {
        font-weight: bold;
        padding: 1rem;
        border-radius: 16px;
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    }

    .text-xl {
        font-size: 1.25rem;
    }

    .text-gray-500 {
        color: #919EAB;
    }

    .text-error {
        color: #FF4842;
    }

    li.list-group-item img {
        width: 23px;
    }

    .float-whatsapp{
        position:fixed;
        width:60px;
        height:60px;
        bottom:40px;
        right:40px;
        background-color:#25d366;
        color:#FFF;
        border-radius:50px;
        text-align:center;
    font-size:30px;
        box-shadow: 2px 2px 3px #999;
    z-index:100;
    }

    .float-telegram {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 110px; /* Positioned above WhatsApp */
        right: 40px;
        background-color: #0088cc;
        color: #FFF;
        border-radius: 50px;
        text-align: center;
        font-size: 30px;
        box-shadow: 2px 2px 3px #999;
        z-index: 100;
    }

    .my-float{
        margin-top:16px;
    }
  </style>
</head>
