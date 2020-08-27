<html> 
<head> 
    <title> @yield('title') </title> 
    <!-- JS, Popper.js, and jQuery -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"\ rel="stylesheet">
    <link href="/css/roboto.min.css" rel="stylesheet"> 
    <link href="/css/material.min.css" rel="stylesheet"> 
    <link href="/css/ripples.min.css" rel="stylesheet">


<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css\
/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css\
/bootstrap-theme.min.css">
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js\"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script> -->

<script src="//code.jquery.com/jquery-1.10.2.min.js"></script> 
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="/js/ripples.min.js"></script> 
    <script src="/js/material.min.js"></script> 
    <script> $(document).ready(function() { 
    $.material.init(); }); 
    </script>

</head> 
<body>
    @include('navbar')

    @yield('content')

    <!-- <script src="//code.jquery.com/jquery-1.10.2.min.js"></script> 
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="/js/ripples.min.js"></script> 
    <script src="/js/material.min.js"></script> 
    <script> $(document).ready(function() { 
    $.material.init(); }); 
    </script> -->

</body> 
</html>