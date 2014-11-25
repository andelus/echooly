angular.module('studentService',[])
.factory('student',function($http){
return{

		//To List Students
		getStudents : function(){
			return $http.get('/api/admin/students');
		},
		//To Update A Student
		updateStudent : function(id,data){

			return $http.put('/api/admin/students/edit/'+id,data);
		},
		//To Create A Student
		createStudent : function(data){
			return $http.post('/api/admin/students/create/',data);
		},
		//To Delete A Student
		deleteStudent : function(id){
			return $http.delete('/api/admin/students/delete/'+id);
		}

		}
	
});