// Call the dataTables jQuery plugin

function getRecord(row){
	$('#pasarela').val(row)
	$.get("/api/subjects/"+row, function( data ) {
		$('#name').val(data['name'])
		$('#description').val(data['description'])
		$('#credits').val(data['credits'])
		$('#knowledge_area').val(data['knowledge_area'])
		$('#type').val(data['type'])
	});
}

function editRow(){
	row=$('#pasarela').val()
	name=$('#name').val()
	description=$('#description').val()
	credits=$('#credits').val()
	knowledge_area=$('#knowledge_area').val()
	type=$('#type').val()
	let data = {
		'name':name,
		'description':description,
		'credits':credits,
		'knowledge_area':knowledge_area,
		'type':type,
	}
	$.ajax({
	    type: 'PUT',
	    url: "/api/subjects/"+row,
	    contentType: 'application/json',
	    data: JSON.stringify(data),
	}).done(function () {
		location.reload();
	})
}

function newRow(){
	name=$('#new-name').val()
	description=$('#new-description').val()
	credits=$('#new-credits').val()
	knowledge_area=$('#new-knowledge_area').val()
	type=$('#new-type').val()
	let data = {
		'name':name,
		'description':description,
		'credits':credits,
		'knowledge_area':knowledge_area,
		'type':type,
	}
	$.ajax({
	    type: 'POST',
	    url: "/api/subjects",
	    contentType: 'application/json',
	    data: JSON.stringify(data),
	}).done(function () {
		location.reload();
	})
}

$(document).ready(function() {
  var table = $('#idataTable').DataTable({
		ajax: {
			"url": '/api/subjects/'
    },
		columns: [
    	{ data: 'id' },
    	{ data: 'name' },
    	{ data: 'description' },
    	{ data: 'credits' },
    	{ data: 'knowledge_area' },
    	{ data: 'type' },
      {
      	// Columna de Acciones
        targets: -1,
        render: function(data, type, full, meta) {
        	//return '<button class="btn-danger" data-row="' + meta.row + '">'+meta.row+'</button>';
        	return '<button data-toggle="modal" data-target="#editTeacherModal" class="btn-primary" data-row="' + full['id'] + '" onclick="getRecord(' + full['id'] + ')">Editar</button><button data-toggle="modal" data-target="#deleteTeacherModal" class="btn-danger" data-row="' + full['id'] + '" onclick="$(\'#pasarela\').val(' + full['id'] + ')">Borrar</button>';
        }
      }
    ]
  });

  $('#delete').click(function(){
  	id=$("#pasarela").val()
		$.ajax({
		    type: 'DELETE',
		    url: "/api/subjects/"+id,
		    contentType: 'application/json',
		}).done(function () {
			location.reload();
		})
	});
});
