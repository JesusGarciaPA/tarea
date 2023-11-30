<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="../css/admin.css">
    <style>
    *{
    font-family: Arial, Helvetica, sans-serif;
}
body{
    background-color: rgb(139, 139, 139);
    margin: 1%;
    padding: 2%;
    width: 93%;
    height: 100%;
    display: block;
}
          table{
    margin: auto;
    margin-top: 50px;
    text-align: center;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 16px;
    border-collapse: collapse;
}

table th,
table td{
  border: 1px solid #dee2e6;  
  padding: 5px 10px;
}

table th,
table td:first-child{
    background-color: #17a2b8;
    color: #fff;
    font-weight: 600;
    width: 100px;
}

table td span{
    margin-right: 15px;
    font-size: 17px;
    cursor: pointer;
}

table td span:hover{
    opacity: 0.7;
}

table td span:nth-child(1){
    color: #17a2b8;
}

table td span:nth-child(2){
    color: #28a745;
}

table td span:nth-child(3){
    color: #dc3545;
    margin-right: 0px;
}

table tr:nth-child(odd){
    background-color: rgba(0, 0, 0, 0.05);
}

table tr:hover{
    background-color: rgba(0, 0, 0, 0.1);
}
    </style>
</head>
<body>
    <div class="header">
        <h1>Control de Administrador</h1>
    </div>
    <div class="info">
        <h3>Control de inventario</h3>
    </div>
    <div class="table">
        <h3>Mobiliario</h3>
        <a href="../views/agregart1.php"><p>Agregar</p></a>
        <a href=""><p>Editar</p></a>
        <a href=""><p>Eliminar</p></a>
        <?php
            include('../php/tabla1.php');
        ?>
        <h3>Manteles</h3>
        <?php
            include('../php/tabla2.php');
        ?>
    </div>
</body>
</html>