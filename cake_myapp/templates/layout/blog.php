<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  
  <body>

    <nav class="navbar navbar-expand-lg navbar-light ">

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">

          <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>

    </nav>
    
    
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">A simple Blog Layout</h1>
        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
      </div>
    </div>
    
    <!-- <div class="container">

    <div class="row">
        <div class="col-4">
            <h3 style="color: #fff;" class="bg-info text-capitalize p-1">Recent Post</h3>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><a href ="#">Cras justo odio</a></li>
              <li class="list-group-item"><a href ="#">Dapibus ac facilisis in</a></li>
              <li class="list-group-item"><a href ="#">Morbi leo risus</a></li>
              <li class="list-group-item"><a href ="#">Porta ac consectetur ac</a></li>
              <li class="list-group-item"><a href ="#">Vestibulum at eros</a></li>
            </ul>
        </div>

        <div class="col-8">
            <div class="row">
               <div class="list-group ">
                  <a href="#" class="list-group-item list-group-item-action flex-column mb-2">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1">List group item heading</h5>
                      <small>3 days ago</small>
                    </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                    <small>Donec id elit non mi porta.</small>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action flex-column mb-2">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1">List group item heading</h5>
                      <small class="text-muted">3 days ago</small>
                    </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                    <small class="text-muted">Donec id elit non mi porta.</small>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1">List group item heading</h5>
                      <small class="text-muted">3 days ago</small>
                    </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                    <small class="text-muted">Donec id elit non mi porta.</small>
                  </a>
                </div>
            </div>
        </div>
    </div>

    </div> -->
    
    <!-- </div> -->
    <?php echo $this->fetch('content');
    ?>
    <footer class="bg-dark mt-3 text-light p-4 text-center">
        footer
    </footer>
  
  </body>
</html>