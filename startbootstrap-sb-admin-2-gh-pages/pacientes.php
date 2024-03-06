<?php
require "php/db_conect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gestion de Pacientes</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!--iconos de bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!--Sweet Alert Alertas Dinamicas-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!--Jquery-->
    <script src="vendor/jquery/jquery.js"></script>

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">



    <!--B DAY PICKER-->
    <script src="bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="bootstrap-datepicker/css/bootstrap-datepicker.css"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <i class="bi bi-hospital"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SGCM</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Inicio</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Control Principal
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="bi bi-clipboard-check-fill"></i>
                    <span>Citas</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Listado de Citas</h6>
                        <a class="collapse-item" href="citas.html">Mostrar</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="bi bi-people-fill"></i>
                    <span>Pacientes</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Listado de Pacientes</h6>
                        <a class="collapse-item" href="pacientes.php">Mostrar</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Otros
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="bi bi-people-fill"></i>
                    <span>Medicos</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Listado de Medicos</h6>
                        <a class="collapse-item" href="medicos.html">Mostrar</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item Asistentes - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAsistentes"
                    aria-expanded="true" aria-controls="collapseAsistentes">
                    <i class="bi bi-people-fill"></i>
                    <span>Asistentes</span>
                </a>
                <div id="collapseAsistentes" class="collapse" aria-labelledby="headingAsistentes"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Listado de Asistentes</h6>
                        <a class="collapse-item" href="asistentes.html">Mostrar</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="especialidades.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Especialidades Medicas</span></a>
            </li>

            <!-- Nav Item - Consultorios -->
            <li class="nav-item">
                <a class="nav-link" href="consultorio.html">
                    <i class="bi bi-building-fill-add"></i>
                    <span>Consultorios</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Administrador</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Editar Perfil
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h4 class="m-0 font-weight-bold text-primary">Lista de Pacientes</h4>
                            <br>
                            <a class="btn btn-success btn-icon-split" id="botonpaciente">
                                <span class="icon text-white">
                                    <i class="bi bi-person-fill-add"></i>
                                </span>
                                <span class="text">Agregar Paciente</span>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#Folio</th>
                                            <th>Nombre</th>
                                            <th>Sexo</th>
                                            <th>CURP</th>
                                            <th>Telefono</th>
                                            <th>Fecha de Nacimiento</th>
                                            <th>Domicilio</th>
                                            <th>Correo</th>
                                            <th>Fecha de Registro</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr data-id='<?php echo $row['ID_PACIENTE'] ?>'data-nombre='<?php echo $row['NOMBRE']; ?>' >
                                            <th>#Folio</th>
                                            <th>Nombre</th>
                                            <th>Sexo</th>
                                            <th>CURP</th>
                                            <th>Telefono</th>
                                            <th>Fecha de Nacimiento</th>
                                            <th>Domicilio</th>
                                            <th>Correo</th>
                                            <th>Fecha de Registro</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>                          
                                    <?php
    // Crear consulta SQL
    $sql = "SELECT * FROM paciente";

    // Ejecutar consulta SQL
    $result = $conn->query($sql);

    if ($result->num_rows > 0):
        // Iterar sobre los resultados
        while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['ID_PACIENTE']; ?></td>
                <td><?php echo $row['NOMBRE']; ?></td>
                <td><?php echo $row['SEXO']; ?></td>
                <td><?php echo $row['CURP']; ?></td>
                <td><?php echo $row['TELEFONO']; ?></td>
                <td><?php echo $row['FECHA_DE_NACIMIENTO']; ?></td>
                <td><?php echo $row['DOMICILIO']; ?></td>
                <td><?php echo $row['CORREO']; ?></td>
                <td><?php echo $row['FECHA_DE_REGISTRO']; ?></td>
                <td style='white-space: nowrap;'>
                    <a href='#' class='btn btn-warning botoneditar' data-id="<?php echo $row['ID_PACIENTE']; ?>" data-nombre="<?php echo $row['NOMBRE']; ?>" data-sexo="<?php echo $row['SEXO']; ?>" data-curp="<?php echo $row['CURP']; ?>" data-telefono="<?php echo $row['TELEFONO']; ?>" data-fecha_nacimiento="<?php echo $row['FECHA_DE_NACIMIENTO']; ?>" data-domicilio=<?php echo $row['DOMICILIO']; ?> data-correo=<?php echo $row['CORREO']; ?> data-contrasena=<?php echo $row['CONTRASENA']; ?>>
                        <i class='bi bi-pencil-square'></i>
                    </a>
                    <a href="#" onclick="eliminarPaciente('<?php echo $row['ID_PACIENTE'] ?>','<?php echo $row['NOMBRE'] ?>'); return false;" class='btn btn-danger delete-paciente-btn'>
                    <i class='bi bi-trash'></i>
                    </a>
                </td>
            </tr>
        <?php endwhile;
    else: ?>
        <tr><td colspan='10'>No hay registros</td></tr>
    <?php endif; ?>
</tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cerrar Sesion</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body"><b>Deseas Cerrar Sesion</b></div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-success" href="login.html">Cerrar Sesion</a>
                </div>
            </div>
        </div>
    </div>

    <!--Agregar Paciente-->

    <div class="modal fade" id="modal-date" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Agregar Nuevos Pacientes</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form action="insert.php" method="POST" enctype="multipart/form-data">
                        <span>Nombre</span>
                        <input type="text" class="form-control" name="nombre">
                        <span>Sexo</span>
                        <select class="form-control" name="sexo">
                            <option disabled>--Selecciona una Opcion---</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                            <option value="Otro">Otro</option>
                        </select>
                        <span>CURP</span>
                        <input type="text" class="form-control" maxlength="18" name="curp">
                        <span>Telefono</span>
                        <input type="number" class="form-control"
                            oninput="javascript: if (this.value.length > 10) this.value = this.value.slice(0, 10);"
                            pattern="[0-9]*" title="Ingrese solo números" name="telefono">

                        <span>Fecha de nacimiento</span>
                        <input type="date" class="form-control" name="fecha_nacimiento">
                        <span>Domicilio</span>
                        <input type="text" class="form-control" name="domicilio">
                        <span>Correo</span>
                        <input type="text" class="form-control" name="correo">
                        <span>Contraseña</span>
                        <input type="text" class="form-control" name="contrasena">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            <input type="submit" class="btn btn-success" value="Agregar Paciente">
                        </div>
                    </form>
                </div>
                
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    

    <!--Editar Paciente-->
<div class="modal fade" id="modal-edit" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Editar Paciente</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="update.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id_paciente" id="id_paciente">
                    <span>Nombre</span>
                    <input type="text" class="form-control" name="nombre" id="nombre">
                    <span>Sexo</span>
                    <select class="form-control" name="sexo" id="sexo">
                        <option disabled>--Selecciona una Opcion---</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                        <option value="Otro">Otro</option>
                    </select>
                    <span>CURP</span>
                    <input type="text" class="form-control" maxlength="18" name="curp" id="curp">
                    <span>Telefono</span>
                    <input type="number" class="form-control"
                        oninput="javascript: if (this.value.length > 10) this.value = this.value.slice(0, 10);"
                        pattern="[0-9]*" title="Ingrese solo números" name="telefono" id="telefono">

                    <span>Fecha de nacimiento</span>
                    <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento">
                    <span>Domicilio</span>
                    <input type="text" class="form-control" name="domicilio" id="domicilio">
                    <span>Correo</span>
                    <input type="text" class="form-control" name="correo" id="correo">
                    <span>Contraseña</span>
                    <input type="text" class="form-control" name="contrasena" id="contrasena">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <input type="submit" class="btn btn-success" value="Actualizar Paciente">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>


    <script src="js/app.js"></script>
</body>

</html>
