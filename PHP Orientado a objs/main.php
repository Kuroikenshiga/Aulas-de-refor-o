<?php
require_once('Pessoa.php');
$p = new Pessoa("Eneildes",strtotime('1990-10-21'));
echo date('d-m-Y',$p->getDataNascimento());

?>