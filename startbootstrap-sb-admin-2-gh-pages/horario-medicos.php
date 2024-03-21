<?php
require "php/db_conect.php";
date_default_timezone_set('America/Mexico_City');
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Asignacion de Horarios Medicos</title>

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
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
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
                        <a class="collapse-item" href="medicos.php">Mostrar</a>
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
                <a class="nav-link" href="especialidades.php">
                    <i class="bi bi-clipboard2-pulse-fill"></i>
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
                    <div class="row">
                    <!-- DataTales Example -->
                    <div class="col-md-6">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h4 class="m-0 font-weight-bold text-primary">Asignacion de Horarios a Medicos</h4>
                        </div>
                        <div class="card-body">
                        <?php
                       // Verificar si 'nombre_medico' está definido en la URL
                        if (isset($_GET['nombre_medico'])) {
                        // Obtener el nombre del médico de la URL
                        $nombre_medico = urldecode($_GET['nombre_medico']);

                        // Mostrar el nombre del médico en un elemento <h4>
                        echo "<h4>$nombre_medico</h4>";
                        } else {
                        echo "No se proporcionó el nombre del médico";
                        }
                        ?>
                        <br> 
                        <form method="post">
                        <h4>Fecha de Atencion</h4>
                        <input type="date" class="form-control" style="width: 40%;" name="fecha_atencion" min="<?php echo date("Y-m-d"); ?>">
                        <br>
                        <h4>Horario inicial</h4>
                        <input type="time" class="form-control" style="width: 40%;" id="horario_inicial" name="horario_inicial" value="07:00" step="3600" onchange="validateTime();">
                        <br>
                        <h4>Horario Final</h4>
                        <input type="time" class="form-control" style="width: 40%;" id="horario_final" name="horario_final" value="20:00" step="3600" onchange="validateTime();">
                        <br>
                        <h4>Intervalo de Citas <b>En Minutos</b></h4> 
                        <select class="form-control" style="width: 40%;" name="intervalo_citas">
                            <option disabled>--Selecciona una Opcion---</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                            <option value="30">30</option>
                        </select>
                        <h4>Consultorio</h4> 
                    <?php 
                        // Consulta SQL para obtener todos los consultorios disponibles
                        $sql = "SELECT ID_CONSULTORIO, NUM_CONSULTORIO FROM consultorio WHERE DISPONIBILIDAD = 'Disponible'";

                        $result = $conn->query($sql);
                        echo '<select class="form-control"  style="width: 40%;" name="consultorio">';
                        echo '<option disabled>--Selecciona una Opcion---</option>';

                        if ($result->num_rows > 0) {
                            // Salida de cada fila
                            while($row = $result->fetch_assoc()) {
                                echo '<option value="'.$row["NUM_CONSULTORIO"].'">'.$row["NUM_CONSULTORIO"].'</option>';
                            }
                        } else {
                            echo '<option disabled>No hay consultorios disponibles</option>';
                        }

                        echo '</select>';
                        ?>

                        <h4>Estado</b></h4> 
                        <select class="form-control" style="width: 40%;" name="estado">
                            <option disabled>--Selecciona una Opcion---</option>
                            <option>Activo</option>
                            <option>Desactivado</option>
                        </select>
                        <br>
                        <?php
                          function generarHorarios($fecha_atencion, $horario_inicial, $horario_final, $intervalo_citas) {
                            $horario_inicial_segundos = strtotime($fecha_atencion . ' ' . $horario_inicial);
                            $horario_final_segundos = strtotime($fecha_atencion . ' ' . $horario_final);
                        
                            $horarios = array();
                        
                            for ($i = $horario_inicial_segundos; $i <= $horario_final_segundos; $i += $intervalo_citas * 60) {
                                $horario = date('H:i', $i);
                                $horarios[] = $horario;
                            }
                        
                            return $horarios;
                        }
                            
                            function procesarFormulario() {
                                global $conn; // Acceder a la variable de conexión a la base de datos

                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $nombre_medico = $_GET['nombre_medico'];
                            $fecha_atencion = $_POST['fecha_atencion'];
                            $horario_inicial = $_POST['horario_inicial'];
                            $horario_final = $_POST['horario_final'];
                            $intervalo_citas = $_POST['intervalo_citas'];
                            $estado = $_POST['estado'];
                            $id_consultorio = $_POST['consultorio'];
                            $id_medico = $_GET['id_medico']; // Obtener el id_medico de la URL

                            // Obtener el ID_CONSULTORIO correspondiente al NUM_CONSULTORIO seleccionado
                            $sql = "SELECT ID_CONSULTORIO FROM consultorio WHERE NUM_CONSULTORIO = '$id_consultorio'";
                            $result = $conn->query($sql);

                                if ($result->num_rows == 0) {
                                    // El id_consultorio no existe, muestra un mensaje de error
                                    echo "El NUM_CONSULTORIO no existe en la tabla consultorio.";
                                    return;
                                }

                                // Obtener el ID_CONSULTORIO
                                $row = $result->fetch_assoc();
                                $id_consultorio = $row['ID_CONSULTORIO'];

                            $horarios = generarHorarios($fecha_atencion, $horario_inicial, $horario_final, $intervalo_citas);

                            // Recorrer cada horario y realizar una inserción para cada uno
                            foreach ($horarios as $horario) {
                                // Crear consulta SQL
                                $sql = "INSERT INTO horario_medico (id_medico, fech_atencion, inicio_hora, fin_hora, intervalo, horarios, estado, fecha_de_registro, id_consultorio) VALUES ('$id_medico', '$fecha_atencion', '$horario_inicial', '$horario_final', '$intervalo_citas', '$horario', '$estado', NOW(), '$id_consultorio')";

                                // Ejecutar consulta SQL
                                if ($conn->query($sql) !== TRUE) {
                                    echo "Error al insertar los datos: " . $conn->error;
                                    return;
                                }
                        }
                        $id_medico = urlencode($id_medico); // Codificar el id del médico para usarlo en una URL
                        $nombre_medico = urlencode($nombre_medico); // Codificar el nombre del médico para usarlo en una URL
                        
                        echo '<script type="text/javascript">
                        alert("Los horarios se han cargado correctamente.");
                        window.location.href = "horario-medicos.php?id_medico=' . $id_medico . '&nombre_medico=' . $nombre_medico . '";
                      </script>';
                    exit;
                    }
                }
                        procesarFormulario();
                        ?>
                        <input type="submit" class="btn btn-success" value="Agregar Horario">
                        </div>
                    </form>
                    </div>
                </div>
            <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <h4 class="m-0 font-weight-bold text-primary">Filtrado de Horarios Medicos</h4>
                    <form method="GET" id="fechaForm">
                    <input type="hidden" name="id_medico" value="<?php echo $_GET['id_medico']; ?>">
                    <input type="date" class="form-control" style="width: 40%;" name="fecha_cita_asignada" onchange="document.getElementById('fechaForm').submit();" value="<?php echo $_GET['fecha_cita_asignada'] ?? ''; ?>">
                </div>           
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Horario</th>
                                <th scope="col">Fecha de Atencion</th>
                                <th scope="col">Consultorio</th>
                                <th scope="col">Intervalo</th>
                                <th scope="col">Modificaciones</th>
                            </tr>
                        </thead>
                        <tbody>  
                        <?php
               // Asegúrate de que id_medico está en la URL
        if (isset($_GET['id_medico'])) {
        // Obtener el id del médico de la URL
        $id_medico = $_GET['id_medico'];
        } else {
        // Manejar el caso en que id_medico no está en la URL
        // Por ejemplo, podrías redirigir al usuario a otra página o mostrar un mensaje de error
        die('Error: No se especificó el id del médico.');
        }

        // Obtener la fecha seleccionada, si existe
        $fecha_cita_asignada = isset($_GET['fecha_cita_asignada']) ? $_GET['fecha_cita_asignada'] : null;

        $sql = "SELECT horario_medico.horarios, horario_medico.fech_atencion, consultorio.NUM_CONSULTORIO, horario_medico.intervalo, horario_medico.id_medico 
        FROM horario_medico 
        INNER JOIN consultorio ON horario_medico.id_consultorio = consultorio.ID_CONSULTORIO
        WHERE horario_medico.id_medico = $id_medico";
         
         
         // Si se seleccionó una fecha, agregar una cláusula WHERE para filtrar por esa fecha
         if ($fecha_cita_asignada) {
            $sql .= " AND DATE(horario_medico.fech_atencion) = '$fecha_cita_asignada'";
        }
         
        // Ejecutar consulta SQL
        $result = $conn->query($sql);

        if ($result->num_rows > 0):
            // Iterar sobre los resultados
            while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo date('H:i', strtotime($row['horarios'])); ?></td>
                    <td><?php echo date('d-m-Y', strtotime($row['fech_atencion'])); ?></td>
                    <td><?php echo $row['NUM_CONSULTORIO']; ?></td>
                    <td><?php echo $row['intervalo']; ?></td>
                    <td>  <a href="#" onclick="eliminarHorario('<?php echo $row['id_medico'] ?>','<?php echo $row['horarios'] ?>'); return false;" class='btn btn-danger delete-horario-btn'>
                        <i class='bi bi-trash'></i>
                        </a>
                    </td>
                </tr>
            <?php endwhile;
        else: ?>
            <tr><td colspan='5'>No hay citas aun para este doctor</td></tr>
        <?php endif; 
        ?>
                        </tbody>
                    </table>                    
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
    <script src="js/horario-medicos.js"></script>
    <script src="js/app.js"></script>


    <script>
    function validateTime() {
    // Obtén los valores de los campos de entrada de tiempo
    var startTime = document.getElementById('horario_inicial').value;
    var endTime = document.getElementById('horario_final').value;
    var intervalo_citas = document.querySelector('select[name="intervalo_citas"]').value;

    // Compara los valores de tiempo
    if (startTime >= endTime) {
        // Muestra un mensaje de error
        alert("La hora inicial no puede ser igual o mayor a la hora final");
        document.getElementById('horario_final').value = '';
    }

}
    </script>

</body>

</html>