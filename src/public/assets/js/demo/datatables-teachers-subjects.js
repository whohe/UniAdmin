// Call the dataTables jQuery plugin
function getSubjects(row){
	$('#selectSubjects').empty();
	$('#pasarela').val(row);
	$.get("/api/teachers/"+row+"/subjects/", function( d ) {
		$.get("/api/subjects/", function( data ) {
			$.each(data['data'], function(index, value) {
				if (d.includes(value['id'])){
					$('#selectSubjects').append($('<option>', {
  	  			value: value['id'],
  	  		  text: value['name'],
  	  		  selected: true
  	  		}));
				}else{
					$('#selectSubjects').append($('<option>', {
  	  			value: value['id'],
  	  		  text: value['name'],
  	  		}));
				}
			});
		});
	});
}
function save(){
	row=$('#pasarela').val()
	selecteds = $('#selectSubjects').val();
	$.ajax({
	    type: 'POST',
	    url: "/api/teachers/"+row+"/subjects",
	    contentType: 'application/json',
	    data: JSON.stringify(selecteds),
	}).done(function () {
		location.reload();
	})
}
$(document).ready(function() {
  var table = $('#idataTable').DataTable({
		ajax: {
			"url": '/api/teachers/'
    },
		columns: [
    	{ data: 'id' },
    	{ data: 'dni' },
    	{ data: 'name' },
      {
      	// Columna de Acciones
        targets: -1,
        render: function(data, type, full, meta) {
        	//return '<button class="btn-danger" data-row="' + meta.row + '">'+meta.row+'</button>';
        	return '<button data-toggle="modal" data-target="#setSubjectsModal" class="btn-warning" data-row="' + full['id'] + '" onclick="getSubjects(' + full['id'] + ')">Asignar materias</button>';
        }
      }
    ]
  });
});
