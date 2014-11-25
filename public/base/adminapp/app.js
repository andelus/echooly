var AdminDashboard = angular.module('AdminDashboard', ['adminControllers','ngRoute','angularUtils.directives.dirPagination','studentService','teacherService'], function($interpolateProvider) {
        $interpolateProvider.startSymbol('//');//var for ceate modul ta3 angular js pour dashboar admin
        $interpolateProvider.endSymbol('//');
	});
                //Admin Dashbpard Routing 
	AdminDashboard.config(['$routeProvider',function($routeProvider){
		
		$routeProvider
			.when('/',{
				templateUrl: '../dashboard/administration/dashboard.html',
				controller : 'Dashboard'}
				)
                //Students Routes
			.when('/Students', {
				templateUrl : '../dashboard/administration/students/students.html', 
				controller: 'ShowStudentsController'}
				 )
		//Teachers Route
			.when('/Teachers',{
				templateUrl : '../dashboard/administration/teachers/teachers.html',
				controller : 'ShowTeachersController'
							  })
			///
			//Coures Route
			.when('/Courses',{
				templateUrl :'../dashboard/administration/courses/courses.html',
				controller : 'ShowCoursesController'
			})
			//Examins Route
			.when('/Exams',{
				templateUrl :'../dashboard/administration/exams/exams.html',
				controller : 'ShowExamsController'
			})
			//Annonces Route
			.when('/Annonces',{
				templateUrl :'../dashboard/administration/annonces/annonces.html',
				controller : 'ShowAnnoncesController'
			});
	}]);

AdminDashboard.filter('unique', function() {
   return function(collection, keyname) {
      var output = [], 
          keys = [];

      angular.forEach(collection, function(item) {
          var key = item[keyname];
          if(keys.indexOf(key) === -1) {
              keys.push(key);
              output.push(item);
          }
      });

      return output;
   };
});

