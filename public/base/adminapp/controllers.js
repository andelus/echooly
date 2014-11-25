
//Creating our student Controller
var adminControllers = angular.module('adminControllers', []);
	//Creating a show controller
	//Show Dashboard
	adminControllers.controller('Dashboard' , function(){});
	
	//ShowStudentsController
	adminControllers.controller('ShowStudentsController', function($scope, $http, student){
         //loading icon
           
         $scope.loading = true;
		//To Show Students we are going to fetch data from our api $http provider
		//Holding our data in the scope
		
		//Using the student service we are fetching all students
		$scope.students = {};
		$scope.getStudents = function(){
			student.getStudents().success(function(data){
			$scope.students = data;
			$scope.currentPage = 1;
        	$scope.loading = false;
		});
		}
	
		$scope.getStudents();	
		//Getting The Clicked Student Id
		$scope.selectedStudent = {};
		$scope.editStudent = function(student){	
			$scope.selectedStudent = student;
			console.log($scope.selectedStudent);
			
		}
		//Updating the student row
		$scope.updateStudent = function(){
			var id = $scope.selectedStudent.id;
			$scope.loading = true;
			student.updateStudent(id,$scope.selectedStudent)
			.success(function(){

			$('#editModal').modal('hide');
			$scope.getStudents();	
				
			});
		}
		//Delete A student
		$scope.deleteStudent = function(){
			var id = $scope.selectedStudent.id;
			$scope.loading = true;
			student.deleteStudent(id).success(function(){
				$('#deleteModal').modal('hide');
				$scope.getStudents();
			});
		}
		//Create Student
		$scope.newStudent = {};
		$scope.createStudent = function(){
			var newStudent = $scope.newStudent;
			$scope.loading = true;
			console.log(newStudent);
			//Push the new student to our service
			student.createStudent(newStudent).success(function(){
				$('#createModal').modal('hide');
				$scope.getStudents();
			});
		}
		
	});
	

	//ShowTeachersController
	adminControllers.controller('ShowTeachersController', function($scope, $http,teacher){
         //loading icon
         $scope.loading = true;
         //Using the student service we are fetching all students
		$scope.teachers = {};
		$scope.getTeachers = function(){
			teacher.getTeachers().success(function(data){
			$scope.teachers = data;
			$scope.currentPage = 1;
        	$scope.loading = false;
		});
		}
	
		$scope.getTeachers();	
		//Getting The Clicked Student Id
		$scope.selectedTeacher = {};
		$scope.editTeacher = function(teacher){	
			$scope.selectedTeacher = teacher;
			console.log($scope.selectedTeacher);
			
		}
		//Updating the student row
		$scope.updateTeacher = function(){
			var id = $scope.selectedTeacher.id;
			$scope.loading = true;
			teacher.updateTeacher(id,$scope.selectedTeacher)
			.success(function(){

			$('#editModal').modal('hide');
			$scope.getTeachers();	
				
			});
		}
		//Delete A student
		$scope.deleteTeacher = function(){
			var id = $scope.selectedTeacher.id;
			$scope.loading = true;
			teacher.deleteTeacher(id).success(function(){
				$('#deleteModal').modal('hide');
				$scope.getTeachers();
			});
		}
		//Create Student
		$scope.newTeacher = {};
		$scope.createTeacher = function(){
			var newTeacher = $scope.newTeacher;
			$scope.loading = true;
			console.log(newTeacher);
			//Push the new student to our service
			teacher.createTeacher(newTeacher).success(function(){
				$('#createModal').modal('hide');
				$scope.getTeachers();
			});
		}
		
	
                           
	});
	//ShowCouresController
       adminControllers.controller('ShowCoursesController', function(){});

   //ShowExaminsController
       adminControllers.controller('ShowExamsController', function(){});

   //ShowAnnoncesController
       adminControllers.controller('ShowAnnoncesController', function(){});
