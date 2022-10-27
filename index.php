<?php

require_once "controladores/plantillaC.php";

require_once "controladores/secretariasC.php";
require_once "modelos/secretariasM.php";

require_once "controladores/consultoriosC.php";
require_once "modelos/consultoriosM.php";

require_once "controladores/doctoresC.php";
require_once "modelos/doctoresM.php";

require_once "controladores/pacientesC.php";
require_once "modelos/pacientesM.php";

require_once "controladores/citasC.php";
require_once "modelos/citasM.php";

require_once "controladores/adminC.php";
require_once "modelos/adminM.php";

require_once "controladores/inicioC.php";
require_once "modelos/inicioM.php";


$plantilla = new Plantilla();
$plantilla -> LlamarPlantilla();