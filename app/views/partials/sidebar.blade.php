<section id="sidebar">
<div class="sidebar">
	<ul class="nav">
		<label for="Menu">Menu Principal</label>

		<!--Student Sidebar-->
		@if(Auth::Student()->check())
		<li><a href="{{URL::route('student.dashboard')}}"><span class="glyphicon glyphicon-home"></span> Accueil</a></li>
		<li><a href="{{URL::route('student.courses')}}"><span class="glyphicon glyphicon-calendar"></span> Cours</a></li>
		<li><a href="#"><span class="glyphicon glyphicon-book"></span> Examens</a></li>
		<li><a href="#"><span class="glyphicon glyphicon-tasks"></span> Taches</a></li>
		<li><a href="#"><span class="glyphicon glyphicon-send"></span> Messages</a></li>
		<!--Student Sidebar-->





		<!--Teacher SideBar-->
		@elseif(Auth::Student()->check())
		<li><a href="#">{{HTML::image('img/icons/home.png')}}Accueil</a></li>
		<li><a href="#">{{HTML::image('img/icons/course.png')}}Cours</a></li>
		<li><a href="#">{{HTML::image('img/icons/exams.png')}}Examens</a></li>
		<li><a href="#">{{HTML::image('img/icons/tasks.png')}}Taches</a></li>
		<li><a href="#">{{HTML::image('img/icons/mail.png')}}Etudiants</a></li>
		<!--Teacher SideBar-->




		<!--Adminstration Sidebar-->
		@elseif(Auth::Admin()->check())
		<li><a href="#"><span class="glyphicon glyphicon-dashboard"></span>Dashboard</a></li>
		<li><a href="#Students"><span class="glyphicon glyphicon-user"></span>Etudiants</a></li>
		<li><a href="#Teachers"><span class="glyphicon glyphicon-briefcase"></span>Enseignants</a></li>
		<li><a href="#Courses"><span class="glyphicon glyphicon-calendar"></span>Cours</a></li>
		<li><a href="#Exams"><span class="glyphicon glyphicon-book"></span>Examens</a></li>
		<li><a href="#"><span class="glyphicon glyphicon-bullhorn"></span>Annonces</a></li>
		@endif
		<!--Adminstration Sidebar-->




	</ul>
</div>	
</section>