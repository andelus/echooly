<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Echooly Beta</title>

    <!-- Bootstrap -->
    {{HTML::style('/css/bootstrap.min.css')}}
    {{HTML::style('/bower_components/angular-material/angular-material.css')}}
    <!-- Style -->
    {{HTML::style('/css/style.css')}}
    {{HTML::style('/css/animate.css')}}
    <!-- Montserrate font-->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!--Angular Material Design Dependencies-->
    
    
    {{HTML::script('/js/animations.js')}}
    {{HTML::script('/js/lib/lib/jquery.min.js')}}
    <!--Angular JS-->
    {{HTML::script('/lib/angular.min.js')}}
    {{HTML::script('/lib/angular-route.min.js')}}
    <!--Angular JS-->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
        <!--Creating a nav bar-->

          <nav class="navbar navbar-default " role="navigation">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="logo navbar-brand " href="{{{URL::to('/')}}}">{{ HTML::image('img/logo.png','alt logo',array('class' => 'img-responsive'))}}</a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                @yield('menu')

                

              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
        <!--Creating a nav bar-->

        <!--creating the container-->
        @yield('content')







    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    {{HTML::script('js/bootstrap.min.js')}}
    
  </body>
</html>