<!DOCTYPE html>


<html lang="en" lang="no">
<head>
    <!--Setter bredden på siden til 1, gjør at grids kan bli oppgitt i prosent-->
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <!--Gir ÆØÅ-->
    <meta charset="utf-8" />
    <!--Linker extern css sheet-->
    <link rel="stylesheet" type="text/css" href="../CSS/main.css">

    <!--Website tab icon-->
    <link rel="icon" href="mainbilder/minilogo.png">
    <title>Henrik Hub</title>
</head>
<body>
<div class="hovedvindu">

<h2>Mine databasekilder</h2>
<?php
 include 'SELECT_Oversikt1.php';
 ?>
 </div>
</body>