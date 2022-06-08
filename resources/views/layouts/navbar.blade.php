<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="#">Item Shop</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('/')}}"><i class="uil uil-home me-1"></i>Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/items')}}"><i class="uil uil-list-ul me-1"></i>List</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/manage')}}"><i class="uil uil-apps me-1"></i></i>Manage</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/register')}}"><i class="uil uil-apps me-1"></i></i>Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/login')}}"><i class="uil uil-apps me-1"></i></i>Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</body>
</html>
