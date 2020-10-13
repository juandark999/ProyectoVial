<?php

include_once '../lib/helpers.php';
include_once '../view/partialsPlantilla/header.php';



if(isset($_GET['function']) && $_GET['function']=="getLogin"){
    echo "<body id='imagen'>";

echo "<div class='main-panel'>";

    resolve();

    echo "</div>";
    include_once '../view/partialsPlantilla/footer.php';
    echo "</body>";


}else{
echo "<body>";

echo "<div class='wrapper static-sidebar'>";
include_once '../view/partialsPlantilla/navbar.php';
include_once '../view/partialsPlantilla/sidebar.php';

echo "<div class='main-panel'>";


if (isset($_GET['module'])) {
    resolve();
    echo "</div>";
    include_once '../view/partialsPlantilla/footer.php';
    echo "</body>";
} else {

    include_once '../view/partialsPlantilla/content.php';
    echo "<div>";
    include_once '../view/partialsPlantilla/pie_de_pagina.php';
    echo "</div>";

    echo "</div>";

    include_once '../view/partialsPlantilla/footer.php';

    echo "</body>";
}

}

