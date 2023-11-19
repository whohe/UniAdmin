// Call the dataTables jQuery plugin

$(document).ready(function() {
  var table = $('#idataTable').DataTable({
		ajax: {
			"url": '/api/dashboard-report'
    },
		columns: [
    	{ data: 0 },
    	{ data: 1 },
    	{ data: 2 },
    ]
  });

	$.get("/api/dashboard-data/", function( data ) {
		$('#registered_students').html(data[0][0]);
		$('#registered_teachers').html(data[0][1]);
		$('#registered_subjects').html(data[0][2]);
		$('#consolidated').html(data[0][3]);
		$('#subjectsTeachersHTML').html(data[1][0]+'%');
		$('#subjectsTeachers').css({'width' : data[1][0]+'%'});
		$('#studentsHTML').html(data[1][1]+'%');
		$('#students').css({'width' : data[1][1]+'%'});
		$('#subjectsWithMultipleTeachersHTML').html(data[1][2]+'%');
		$('#subjectsWithMultipleTeachers').css({'width' : data[1][2]+'%'});
	});
});
