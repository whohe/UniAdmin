// Call the dataTables jQuery plugin

function getSubjects(row){
	$('#selectSubjects').empty();
	$('#pasarela').val(row);
	$.get("/api/students/"+row+"/subjects/", function( d ) {
		$.get("/api/enrolled-subjects/", function( data ) {
			$.each(data, function(index, value) {
				if (d.includes(value['id'])){
					$('#selectSubjects').append($('<option>', {
  	  			value: value['id'],
  	  		  text: value['subject']+' - '+value['teacher']+' - '+value['credits']+' creditos.',
  	  		  selected: true
  	  		}));
				}else{
					$('#selectSubjects').append($('<option>', {
  	  			value: value['id'],
  	  		  text:  value['subject']+' - '+value['teacher']+' - '+value['credits']+' creditos.',
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
	    url: "/api/students-subjects-validator",
	    contentType: 'application/json',
	    data: JSON.stringify(selecteds),
	}).done(function (d) {
		$('.toast-body').html(d['msg']);
		$('.toast').toast({
		  delay: 3000
		})
		$('.toast').toast('show');

		$('.toast-header').removeClass('bg-danger').addClass('bg-success');
		$.ajax({
		    type: 'POST',
		    url: "/api/students/"+row+"/subjects",
		    contentType: 'application/json',
		    data: JSON.stringify(selecteds),
		}).done(function () {
			setTimeout(function() {
				location.reload();
			}, 1000);
		})
	}).fail(function(d) {
		$('.toast-body').html(d['responseJSON']['msg']);
		$('.toast').toast({
		  delay: 3000
		})
		$('.toast').toast('show');
	})
}
function getRecord(row){
	$('#pasarela').val(row)
	$.get("/api/students/"+row, function( data ) {
		$('#dni').val(data['dni'])
		$('#name').val(data['name'])
		$('#phone').val(data['phone'])
		$('#email').val(data['email'])
		$('#address').val(data['address'])
		$('#city').val(data['city'])
		$('#semester').val(data['semester'])
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
	semester=$('#semester').val()
	let data = {
		'dni':dni,
		'name':name,
		'phone':phone,
		'email':email,
		'address':address,
		'city':city,
		'semester':semester,
	}
	$.ajax({
	    type: 'PUT',
	    url: "/api/students/"+row,
	    contentType: 'application/json',
	    data: JSON.stringify(data),
	}).done(function () {
		location.reload();
	})
}

$(document).ready(function() {
  var table = $('#idataTable').DataTable({
		ajax: {
			"url": '/api/students/'
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
