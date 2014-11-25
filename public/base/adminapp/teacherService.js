angular.module('teacherService',[])
.factory('teacher',function($http){
return{

		//To List Students
		getTeachers: function(){
			return $http.get('/api/admin/teachers');
		},
		//To Update A Student
		updateTeacher : function(id,data){

			return $http.put('/api/admin/teachers/edit/'+id,data);
		},
		//To Create A Student
		createTeacher : function(data){
			return $http.post('/api/admin/teachers/create/',data);
		},
		//To Delete A Student
		deleteTeacher : function(id){
			return $http.delete('/api/admin/teachers/delete/'+id);
		}

		}
	
});