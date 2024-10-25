<?php include("template/cabecera.php"); ?>
<div class="titulo">
<br><br><br><br>
<h1><center>COMIDA MARINA</center></h1>
</div>

<div class="container">


        <?php
        // Array de datos para las tarjetas
        $cards = [
            [
                'title' => 'Ají de Gallina',
                'image' => '/criolla/img/aji.png',
                'description' => 'Consiste en un ají o crema espesa con pechuga de gallina deshilachada',
                'price' => '$10.00'
            ],
            [
                'title' => 'Arroz con Pollo',
                'image' => '/criolla/img/arrozconpollo.png',
                'description' => 'Consiste en arroz cocinado con pollo, verduras, y sazonado con especias',
                'price' => '$10.00'
            ],
            [
                'title' => 'Pollo a la Brasa',
                'image' => '/criolla/img/brasa.png',
                'description' => 'Es considerado un platillo típico en el Perú y uno de los de mayor consumo',
                'price' => '$10.00'
            ],
            [
                'title' => 'Caucau',
                'image' => '/criolla/img/caucau.png',
                'description' => 'El cau cau es un guiso de la gastronomía peruana a base de mondongo y papas',
                'price' => '$10.00'
            ],
            [
                'title' => 'Chaufa de Pollo/Carne',
                'image' => '/criolla/img/chaufa.png',
                'description' => 'Arroz chino elaborado en Perú , platillo bandera de la gastronomia Peruana',
                'price' => '$10.00'
            ],
            [
                'title' => 'Chicharrón',
                'image' => '/criolla/img/chicharron.png',
                'description' => 'Trocitos de pescado marinado con aharina y huevo',
                'price' => '$10.00'
            ],
           
            [
                'title' => 'Tallarines Verdes',
                'image' => '/criolla/img/verdes.png',
                'description' => 'Tallarines bañados en pasta verde , con pieza de carne',
                'price' => '$10.00'
            ],
            
        ];

        // Generar las tarjetas
        foreach ($cards as $card) {
            echo '<div class="card-horizontal">';
            echo '<img src="' . $card['image'] . '" alt="' . $card['title'] . '">';
            echo '<div class="card-content">';
            echo '<h3>' . $card['title'] . '</h3>';
            echo '<p>' . $card['description'] . '</p>';
            echo '<p class="price">' . $card['price'] . '</p>';
            echo '</div>'; // Cierra card-content
            echo '<button class="ver-button">+</button>'; // Botón "Ver más" en la esquina inferior derecha
            echo '</div>'; // Cierra card-horizontal
        }
        ?>
    </div>








<?php include("template/pie.php"); ?>