<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="APLIKASI PBAK IAIN KENDARI">
    <meta name="author" content="TIM PENGEMBANG SISTEM TIPD IAIN KENDARI">
    <link rel="apple-touch-icon" sizes="76x76" href="https://appel.iainkendari.ac.id/favicon.ico">
    <link rel="icon" type="image/png" href="https://appel.iainkendari.ac.id/favicon.ico">
    <title>Login PBAK IAIN Kendari 2023</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/sign-in/signin.css" rel="stylesheet">
</head>

<body class="text-center">
    <form action="{{route('login')}}" method="post" enctype="multipart/form" class="form-signin">
        @csrf
        <img class="mb-4" src="{{asset('/')}}/logo-pbak-2023.png" alt="" width="300">
        <h2 class="h3 mb-3 font-weight-normal">Login untuk masuk</h2>
        <label for="username" class="sr-only">Username</label>
        <input type="text" id="username" name="username" class="form-control" placeholder="Username Anda" required autofocus>
        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-dark btn-block" type="submit">Login</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2023</p>
    </form>
</body>

</html>