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

<div class = "easyui-panel" style = "width: 400px; padding: 50px">
        <div style="margin-bottom: 20px; text-align: center">
            <h1>BUSQUEDA</h1>
        </div>
        <form action = "" method = "POST">
            <div style = "margin-bottom: 10px">
            <input type = "text" placeholder = "Cedula..." name = "est_cedula" style = "width:100%; height: 34px; padding: 10px">
            </div>
            <div style = "margin-bottom: 10px">
            <input type = "text" placeholder = "Nombre..." name = "est_nombre" style = "width: 100%; height: 34px; padding: 10px">
            </div>
            <div style="text-align: center">
            
            <button name = "Buscar" type = "submit">Buscar</button>
            </div>
        </form>
</div>

<table id = "dg" title = "Estudiantes" class = "easyui-datagrid" style = "width: 700px; height: 250px"
        toolbar = "#toolbar" pagination = "true"
        rownumbers = "true" fitColumns = "true" singleSelect = "true">
    <thead>
        <tr>
            <th field="est_cedula" width="50">CEDULA</th>
            <th field="est_nombre" width="50">NOMBRE</th>
            <th field="est_apellido" width="50">APELLIDO</th>
            <th field="est_direccion" width="50">DIRECCION</th>
            <th field="est_telefono" width="50">TELEFONO</th>
        </tr>
    </thead>
<?php
include 'Models/conexion.php';

if (isset($_POST['est_cedula']) || isset($_POST['est_nombre'])) {
    $cedula = $_POST['est_cedula'];
    $nombre = $_POST['est_nombre'];
    
    

    $consulta = "SELECT * FROM estudiantes WHERE est_cedula LIKE '$cedula%' OR est_nombre LIKE '$nombre'";
    $respuesta = $conn -> query($consulta);
    while ($registroAlumnos = $respuesta -> fetch_assoc()){
        echo'<tr>
            <td>'.$registroAlumnos['est_cedula'].'</td>
            <td>'.$registroAlumnos['est_nombre'].'</td>
            <td>'.$registroAlumnos['est_apellido'].'</td>
            <td>'.$registroAlumnos['est_direccion'].'</td>
            <td>'.$registroAlumnos['est_telefono'].'</td>
            </tr>';
	}
}
?>
</table>
</body>
</html>