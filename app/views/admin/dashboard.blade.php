@extends('layouts.default')
  
    @section('content')
        <!--Side Bar-->
        @include('partials.sidebar')
     
        <!--Angularjs Information-->
        {{HTML::script('base/adminapp/app.js')}}
        {{HTML::script('base/adminapp/controllers.js')}}
        {{HTML::script('base/adminapp/dirPagination.js')}}
        {{HTML::script('base/adminapp/studentService.js')}}
        {{HTML::script('base/adminapp/teacherService.js')}}
        {{HTML::script('base/adminapp/housekeep.js')}}
          <div class="col-md-2"></div>
      <div class="col-xs-6 col-md-9">
           <!--Initation of the admin dashboard app-->
           <div ng-app="AdminDashboard">
             <div ng-view></div>
           </div>
       </div>
       


    @stop
  
	@section('menu')
		<ul class="nav navbar-nav navbar-right">
				  	
                  <li><a href="{{URL::route('admin.auth.logout')}}">Logout</a></li>
                  <li><a href="#">Aide</a></li>
                  <li class="profile"><a href=""><u>{{{$admin->name}}} {{{$admin->lastName}}}</u></a></li>
 		</ul>
 
   @stop