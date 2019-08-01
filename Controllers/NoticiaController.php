<?php
require_once '../Models/Noticia.php';

$noticia = new Noticia();

$noticia->store($_POST);
$noticia->index();
