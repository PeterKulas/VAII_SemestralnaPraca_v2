<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/main/index.css">
    <link rel="stylesheet" href="css/main/about.css">
    <link rel="stylesheet" href="css/main/contact.css">
    <link rel="stylesheet" href="/css/navbar_footer.css">
    <link rel="stylesheet" href="/css/registrationPage.css">
    <link rel="stylesheet" href="/css/loginPage.css">
    <link rel="stylesheet" href="/css/catalog.css">

    <title>BookRent - @yield('title')</title>
</head>

<body>
    <x-navbar />
    @yield('content')
    <x-footer />

    <script src="js/registrationFormValidation.js"></script>
</body>

</html>