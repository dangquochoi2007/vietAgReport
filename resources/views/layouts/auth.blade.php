<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">
    <meta name="robots" content="noindex">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('page-title') :: Authenticate</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/images/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/images/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/images/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('/images/favicons/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('/images/favicons/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="apple-mobile-web-app-title" content="Shopper">
    <meta name="application-name" content="Shopper">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/login.css', 'shopper') }}">
</head>
<body class="my-login-page">
    <section class="wrapper">
        <div class="container h-100">
            @yield('content')
        </div>
    </section>
</body>
</html>