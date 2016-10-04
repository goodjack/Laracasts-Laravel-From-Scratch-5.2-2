<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <!-- Material Design fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <!-- Bootstrap Material Design -->
        <link rel="stylesheet" href="https://cdn.rawgit.com/FezVrasta/bootstrap-material-design/dist/dist/bootstrap-material-design.min.css">

        @yield('header')

    </head>
    <body>
        <nav class="navbar navbar-dark" style="background-color: #056f9d;">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                      Money101
                    </a>
                    <ul class="nav navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">首頁 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">信用卡比較</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">部落格</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">關於我們</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
	    @yield('content')

    	@yield('footer')

        <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
        <script src="https://cdn.rawgit.com/HubSpot/tether/v1.3.4/dist/js/tether.min.js"></script>
        <script src="https://cdn.rawgit.com/FezVrasta/bootstrap-material-design/dist/dist/bootstrap-material-design.iife.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="https://maxcdn.bootstrapcdn.com/js/ie10-viewport-bug-workaround.js"></script>
        <script>
          $('body').bootstrapMaterialDesign();
        </script>
    </body>
</html>