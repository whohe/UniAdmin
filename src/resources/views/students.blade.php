@include('header')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Estudiantes</h1>
                    <p class="mb-4">Hola señor administrador, aqui puedes registrar, borrar o actualizar los datos de los estudiantes de la institucion <a target="_self" href="#">UNIADMIN</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
													<button type="button" data-toggle="modal" data-target="#newTeacherModal" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
													  Nuevo Estudiante
													</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="idataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Documento de identificacion</th>
                                            <th>Nombre</th>
                                            <th>Telefono</th>
                                            <th>Email</th>
                                            <th>Direccion</th>
                                            <th>Ciudad</th>
                                            <th>Semestre</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>id</th>
                                            <th>Documento de identificacion</th>
                                            <th>Nombre</th>
                                            <th>Telefono</th>
                                            <th>Email</th>
                                            <th>Direccion</th>
                                            <th>Ciudad</th>
                                            <th>Semestre</th>
                                            <th>Acciones</th>
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
    <div class="modal fade" id="editTeacherModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
								    <label for="dni">Documento de identidad</label>
								    <input type="text" class="form-control" id="dni" placeholder="Ingrese numero de documento">
								  </div>
								  <div class="form-group">
								    <label for="name">Nombre</label>
								    <input type="text" class="form-control" id="name" placeholder="Ingrese nombre">
								  </div>
								  <div class="form-group">
								    <label for="phone">Telefono</label>
								    <input type="text" class="form-control" id="phone" placeholder="Ingrese numero de telefono">
								  </div>
								  <div class="form-group">
								    <label for="email">E-mail</label>
								    <input type="text" class="form-control" id="email" placeholder="Ingrese email">
								  </div>
								  <div class="form-group">
								    <label for="address">Direccion</label>
								    <input type="text" class="form-control" id="address" placeholder="Ingrese direccion">
								  </div>
								  <div class="form-group">
								    <label for="city">Ciudad</label>
								    <input type="text" class="form-control" id="city" placeholder="Ingrese ciudad">
								  </div>
								  <div class="form-group">
								    <label for="city">Semestre</label>
								    <input type="text" class="form-control" id="semester" placeholder="Ingrese Semestre">
								  </div>
								</form>
								</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary" id='delete' onClick="editRow()">Actualizar</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Logout Modal-->
    <div class="modal fade" id="newTeacherModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
								    <label for="dni">Documento de identidad</label>
								    <input type="text" class="form-control" id="new-dni" placeholder="Ingrese numero de documento">
								  </div>
								  <div class="form-group">
								    <label for="name">Nombre</label>
								    <input type="text" class="form-control" id="new-name" placeholder="Ingrese nombre">
								  </div>
								  <div class="form-group">
								    <label for="phone">Telefono</label>
								    <input type="text" class="form-control" id="new-phone" placeholder="Ingrese numero de telefono">
								  </div>
								  <div class="form-group">
								    <label for="email">E-mail</label>
								    <input type="text" class="form-control" id="new-email" placeholder="Ingrese email">
								  </div>
								  <div class="form-group">
								    <label for="address">Direccion</label>
								    <input type="text" class="form-control" id="new-address" placeholder="Ingrese direccion">
								  </div>
								  <div class="form-group">
								    <label for="city">Ciudad</label>
								    <input type="text" class="form-control" id="new-city" placeholder="Ingrese ciudad">
								  </div>
								  <div class="form-group">
								    <label for="city">Semestre</label>
								    <input type="text" class="form-control" id="new-semester" placeholder="Ingrese semestre">
								  </div>
								</form>
								</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary" id='enivar' onClick="newRow()">Enviar</a>
                </div>
            </div>
        </div>
    </div>
@include('footer')
<script src="/assets/js/demo/datatables-students.js"></script>
