
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Album example for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

  </head>

  <body>

    <header class="menu-area">
      <nav class="navbar navbar-expand-sm navbar-dark bg-dark mainmenu">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
            </li>

            @foreach ($parentCategories as $category)
            <li class="nav-item dropdown">
              @php
              $txtDropdown = 'class="nav-link"';
			  $isDropdown = false;
              if(count($category->subcategories))
              {
                $isDropdown = true;
                $txtDropdown = 'class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"';
              }
              @endphp
              
              <a {!! $txtDropdown !!} href="{{ route('category.show', $category->id) }}" id="cat{{ $category->id }}">{{ $category->category_name }}</a>
              @if($isDropdown)
                  @include('layouts.partials.subCategoryList',['subcategories' => $category->subcategories])
              @endif 
            </li>
            @endforeach
            
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>

          <div class="">
            @if (Auth::Check())
              <a href="{{url('/home')}}">Logout</a>
            @else 
              <a href="{{url('/login')}}">Login</a>
            @endif
          </div>

          <a class="btn btn-success btn-sm ml-3" href="{{route('cart.checkout')}}">
              <i class="fa fa-shopping-cart"></i> Cart Total Qty
              <span class="badge badge-light">{{Cart::getTotalQuantity()}}</span>
          </a>
        </div>
      </nav>
    </header>

    <main role="main">
        @include('layouts.partials.messages')
        @yield('content')

    </main>

    <footer class="text-muted bg-dark p-5 mt-5">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
        <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/holder.min.js"></script>
    <script src="{{ asset('js/site.js') }}"></script>
  </body>
</html>
