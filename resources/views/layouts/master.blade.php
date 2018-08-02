<!DOCTYPE html>
<html>
<head>
	<title>Imzoughene</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('accueil')}}">Accueil</a>
          <a class="dropdown-item" href="{{url('service')}}">Service</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{url('contact')}}">Contact</a>
        </div>
      </li>
     
    </ul>
    
  </div>
</nav>

@yield('content')

<script type="text/javascript" src="{{asset('js/jquery.min.js')}}">
	
</script>

<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}">
	
</script>
</body>
</html>