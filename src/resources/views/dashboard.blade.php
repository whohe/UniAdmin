@include('header')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                # de estudiantes registrados </div>
                                            <div id=registered_students class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                # de profesores registrados </div>
                                            <div id=registered_teachers class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
																						<div class="text-xs font-weight-bold text-info text-uppercase mb-1">
																							# de materias registradas
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div id=registered_subjects class="h5 mb-0 mr-3 font-weight-bold text-gray-800">0</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
																								Numero de materias con profesor activo registradas por mas de un estudiante
																						</div>
                                            <div id=consolidated class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Estadisticas</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="small font-weight-bold">% de materias con profesor inscrito <span
                                            class="float-right" id="subjectsTeachersHTML">20%</span></h4>
                                    <div class="progress mb-4">
                                        <div id=subjectsTeachers class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
																		<br>
                                    <h4 class="small font-weight-bold">% de estudiantes inscritos <span
                                            class="float-right" id="studentsHTML">40%</span></h4>
                                    <div class="progress mb-4">
                                        <div id="students" class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
																		<br>
                                    <h4 class="small font-weight-bold">% de materias con mas de un profesor <span
                                            class="float-right" id="subjectsWithMultipleTeachersHTML">60%</span></h4>
                                    <div class="progress mb-4">
                                        <div id="subjectsWithMultipleTeachers" class="progress-bar" role="progressbar" style="width: 60%"
                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6 mb-4">

                            <!-- Approach -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Saludos!</h6>
                                </div>
                                <div class="card-body">
                                    <p>¡Bienvenidos al nuevo sistema de seguimiento académico! Nos complace presentarles nuestro innovador reporte tipo dashboard, diseñado para ofrecer una visión completa y detallada de la información de los estudiantes registrados junto con sus respectivos profesores. Este intuitivo panel proporciona datos clave, como el progreso académico, la asistencia y otros indicadores relevantes para el seguimiento educativo.</p>
                                    <p class="mb-0">Además, estamos emocionados por anunciar que estamos trabajando en una funcionalidad adicional que permitirá a los usuarios descargar este informe de manera conveniente en formato PDF. </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="idataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Documento de identificacion</th>
                                            <th>Nombre</th>
                                            <th>Materias inscritas</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Documento de identificacion</th>
                                            <th>Nombre</th>
                                            <th>Materias inscritas</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
@include('footer')
<script src="/assets/js/demo/datatables-dashboard.js"></script>
