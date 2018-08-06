<header>
	<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#">
	  	<img src="https://picsum.photos/30/30" width="30" height="30" class="d-inline-block align-top" alt="logo">
	  </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavDropdown">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="{{ url('/admin/users/') }}">Usuarios <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="{{ url('/admin/products/') }}">Productos <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="{{ url('/admin/categories/') }}">Categorías <span class="sr-only">(current)</span></a>
	      </li>

	    </ul>
	  </div>
	</nav>
</header>
