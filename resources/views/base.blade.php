<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') &ndash; AIOT</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    {{--    Styles --}}
    <link rel="stylesheet" href="/css/app.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class=" grey-layer">
<div class="flex-center position-ref full-height ">
    @if (Route::has('login'))
        <div class="top-right links">
            @hasSection('top-links')
                @yield('top-links')
            @endif
            @auth
                <a href="{{ route('logout') }}">Logout</a>
            @else
                <a href="{{ route('login') }}" data-toggle="modal" data-target="#exampleModalCenter">Login</a>
            @endauth
        </div>
    @endif
    {{--MAIN CONTENT--}}
    <main>
        @yield('main')
        @yield('front')
    </main>
   <!-- <div class="links">
        <a href="{{ route('login') }}">Login</a>
        <a href="/">Home</a>
        <a href="https://laracasts.com">Laracasts</a>
        <a href="https://laravel-news.com">News</a>
        <a href="https://blog.laravel.com">Blog</a>
    </div>-->
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('authenticate') }}">
                    @csrf
                    {{-- if any errors by authentication   --}}
                    @if( $errors->any() )
                        <p class="alert alert-danger">Nice try! Try one more time!</p>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputEmail1">User</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                               aria-describedby="emailHelp" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                               placeholder="Password">
                    </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/72f783b1a3.js" crossorigin="anonymous"></script>
</body>
</html>
