<?php
include("Models/conexion.php");
//sql
$where = "";


if (isset($_POST["buscar"])) {
    $nombre = $_POST["est_nombre"];
    $cedula = $_POST["est_cedula"];
    if (empty($_POST["est_cedula"])) {
        $where = "WHERE est_nombre LIKE '".$nombre."%'";
    } else if (empty($_POST["est_nombre"])) {
        $where = "WHERE est_cedula = '".$cedula."'";
    } else {
        $where = "WHERE est_nombre LIKE '".$nombre."%' AND est_cedula = '".$cedula."'";
    }
}
/////////////////////// CONSULTA A LA BASE DE DATOS ////////////////////////
$sql = "SELECT * FROM estudiantes $where";
$resAlumnos = $conn -> query($sql);
$resCedulas = $conn -> query($sql);
?>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.10.1/themes/black/easyui.css">
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.10.1/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.10.1/themes/color.css">

    <script type="text/javascript" src="jquery-easyui-1.10.1/jquery.min.js"></script>
    <script type="text/javascript" src="jquery-easyui-1.10.1/jquery.easyui.min.js"></script>
</head>

<body>
    <header>
        <div>
            <h2>Búsqueda</h2>
        </div>
    </header>
    <section>
        <form method = "post">
            <input type = "text" placeholder = "Nombre..." name = "est_nombre"></input>
            <select name = "est_cedula">
                <option value = "">Cedula</option>
                <?php
                while ($option = $resCedulas -> fetch_assoc()) {
                    echo '<option value = "'.$option['est_cedula'].'">'.$option['est_cedula'].'</option>';
                }
                ?>
            </select>
            <button name = "buscar" type = "submit">Buscar</button>
        </form>
        </br></br>
        <table id = "dg" title = "Estudiantes" class = "easyui-datagrid" style = "width: 700px; height: 250px" toolbar = "#toolbar" pagination = "true" rownumbers = "true" fitColumns = "true" singleSelect = "true">
            <thead>
                <tr>
                    <th field = "est_cedula" width = "50">CEDULA</th>
                    <th field = "est_nombre" width = "50">NOMBRE</th>
                    <th field = "est_apellido" width = "50">APELLIDO</th>
                    <th field = "est_direccion" width = "50">DIRECCION</th>
                    <th field = "est_telefono" width = "50">TELEFONO</th>
                </tr>
            </thead>
            <?php
            if (!empty($nombre) || !empty($_POST['est_cedula'])) {
                while ($registroAlumnos = $resAlumnos -> fetch_assoc()) {
                    echo '<tr>
						 <td>'.$registroAlumnos['est_cedula'].'</td>
						 <td>'.$registroAlumnos['est_nombre'].'</td>
						 <td>'.$registroAlumnos['est_apellido'].'</td>
						 <td>'.$registroAlumnos['est_direccion'].'</td>
                         <td>'.$registroAlumnos['est_telefono'].'</td>
						 </tr>';
                }              
            }
            if (mysqli_num_rows($resAlumnos) == 0){

                echo '<td>No hay registros</td>';
            }
            ?>
        </table>
    </section>
</body>

</html>