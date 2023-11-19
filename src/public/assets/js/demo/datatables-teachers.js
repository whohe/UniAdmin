// Call the dataTables jQuery plugin

function getRecord(row){
	$('#pasarela').val(row)
	$.get("/api/teachers/"+row, function( data ) {
		$('#dni').val(data['dni'])
		$('#name').val(data['name'])
		$('#phone').val(data['phone'])
		$('#email').val(data['email'])
		$('#address').val(data['address'])
		$('#city').val(data['city'])
	});
}

function editRow(){
	row=$('#pasarela').val()
	dni=$('#dni').val()
	name=$('#name').val()
	phone=$('#phone').val()
	email=$('#email').val()
	address=$('#address').val()
	city=$('#city').val()
	let data = {
		'dni':dni,
		'name':name,
		'phone':phone,
		'email':email,
		'address':address,
		'city':city,
	}
	$.ajax({
	    type: 'PUT',
	    url: "/api/teachers/"+row,
	    contentType: 'application/json',
	    data: JSON.stringify(data),
	}).done(function () {
		location.reload();
	})
}

function newRow(){
	dni=$('#new-dni').val()
	name=$('#new-name').val()
	phone=$('#new-phone').val()
	email=$('#new-email').val()
	address=$('#new-address').val()
	city=$('#new-city').val()
	let data = {
		'dni':dni,
		'name':name,
		'phone':phone,
		'email':email,
		'address':address,
		'city':city,
	}
	$.ajax({
	    type: 'POST',
	    url: "/api/teachers",
	    contentType: 'application/json',
	    data: JSON.stringify(data),
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
    	{ data: 'phone' },
    	{ data: 'email' },
    	{ data: 'address' },
    	{ data: 'city' },
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
		    url: "/api/teachers/"+id,
		    contentType: 'application/json',
		}).done(function () {
			location.reload();
		})
	});
});
