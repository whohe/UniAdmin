@include('header')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Incripcion de asignaturas por docente</h1>
                    <p class="mb-4">Hola señor administrador, aqui puedes registrar, borrar o actualizar los datos de los docentes y sus asignaturas en la institucion <a target="_self" href="#">UNIADMIN</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="idataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Documento identificacion</th>
                                            <th>Nombre</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>id</th>
                                            <th>Documento identificacion</th>
                                            <th>Nombre</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

    <!-- Logout Modal-->
    <div class="modal fade" id="deleteTeacherModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<input type='hidden' id='pasarela'>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Listo para borrar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Si esta seguro de borrar este registro, pulse el boton rojo.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-danger" id='delete'>Borrar registro</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Logout Modal-->
    <div class="modal fade" id="setSubjectsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<input type='hidden' id='pasarela'>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Actualizar datos</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
								<div class="modal-body">
								<form>
								  <div class="form-group">
										<select id='selectSubjects' class="form-select" multiple aria-label="multiple select example" style="width: 100%;height:300px;">
										</select>
								  </div>
								</form>
								</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary" id='delete' onClick="save()">Guardar</a>
                </div>
            </div>
        </div>
    </div>
@include('footer')
<script src="/assets/js/demo/datatables-teachers-subjects.js"></script>


