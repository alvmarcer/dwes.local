<?php
require_once __DIR__ . '/../../src/entity/imagen.class.php';
require_once __DIR__ . '/../../src/entity/asociado.class.php';

// Imagenes
$imagenesHome[]= new Imagen ('1.jpg','descripción imagen 1',1,456,610,130);
$imagenesHome[]= new Imagen ('2.jpg','descripción imagen 2',1,456,610,130);
$imagenesHome[]= new Imagen ('3.jpg','descripción imagen 3',1,456,610,130);
$imagenesHome[]= new Imagen ('4.jpg','descripción imagen 4',1,456,610,130);
$imagenesHome[]= new Imagen ('5.jpg','descripción imagen 5',1,456,610,130);
$imagenesHome[]= new Imagen ('6.jpg','descripción imagen 6',1,456,610,130);
$imagenesHome[]= new Imagen ('7.jpg','descripción imagen 7',1,456,610,130);
$imagenesHome[]= new Imagen ('8.jpg','descripción imagen 8',1,456,610,130);
$imagenesHome[]= new Imagen ('9.jpg','descripción imagen 9',1,456,610,130);
$imagenesHome[]= new Imagen ('10.jpg','descripción imagen 10',1,456,610,130);
$imagenesHome[]= new Imagen ('11.jpg','descripción imagen 11',1,456,610,130);
$imagenesHome[]= new Imagen ('12.jpg','descripción imagen 12',1,456,610,130);

// Asociados
$asociadosHome[]= new Asociado('Asociado 1', 'log1.jpg', 'Desc. asociado 1');
$asociadosHome[]= new Asociado('Asociado 2', 'log2.jpg', 'Desc. asociado 2');
$asociadosHome[]= new Asociado('Asociado 3', 'log3.jpg', 'Desc. asociado 3');
$asociadosHome[]= new Asociado('Asociado 4', 'log1.jpg', 'Desc. asociado 4');
$asociadosHome[]= new Asociado('Asociado 5', 'log2.jpg', 'Desc. asociado 5');
$asociadosHome[]= new Asociado('Asociado 6', 'log3.jpg', 'Desc. asociado 6');

require_once __DIR__ . '/../views/index.view.php';
