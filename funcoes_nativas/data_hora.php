<?php
date_default_timezone_set('America/Sao_Paulo');
echo "Data atual: ".date("d/m/y") . "<br>";
echo "Hora atual: ".date("H:i:s"); . "br";
echo "Daqui a 7 dias será: ".date("d/m/y", strtotime("+7 days"));
?>