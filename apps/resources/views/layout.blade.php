<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    @yield('title')

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <!-- <script type="text/javascript" src="ckeditor/ckeditor.js"></script> -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
</head>

<body>

    <div class="wrapper">
        <div id="navbar">
            <!-- Page Content  -->
            <div class="container-fluid">

                @yield('main-content')
        
            </div>
        </div>
        
    </div>
    <div class="overlay">
    </div>
</body>
</html>