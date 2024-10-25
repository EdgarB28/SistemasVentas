<?php include("template/cabecera.php"); ?>
<div class="titulo">
<br><br><br><br>
<h1><center>COMIDA DE LA SELVA</center></h1>
</div>

<div class="container">


        <?php
        // Array de datos para las tarjetas
        $cards = [
            [
                'title' => 'Ensalada de Chonta',
                'image' => '../selva/img/chonta.png',
                'description' => 'Consiste en un ají o crema espesa con pechuga de gallina deshilachada',
                'price' => '$13.00'
            ],
            [
                'title' => 'Ichicapi',
                'image' => '../selva/img/ichicapi.png',
                'description' => 'Consiste en arroz cocinado con pollo, verduras, y sazonado con especias',
                'price' => '$10.00'
            ],
            [
                'title' => 'Juane',
                'image' => '../selva/img/juane.png',
                'description' => 'Es considerado un platillo típico en el Perú y uno de los de mayor consumo',
                'price' => '$10.00'
            ],
            [
                'title' => 'Patashca',
                'image' => '../selva/img/pata.png',
                'description' => 'El cau cau es un guiso de la gastronomía peruana a base de mondongo y papas',
                'price' => '$10.00'
            ],
            [
                'title' => 'Purcuma',
                'image' => '../selva/img/pur.png',
                'description' => 'Arroz chino elaborado en Perú , platillo bandera de la gastronomia Peruana',
                'price' => '$10.00'
            ],
            [
                'title' => 'Tacacho con cecina',
                'image' => '../selva/img/tacacho.png',
                'description' => 'Trocitos de pescado marinado con aharina y huevo',
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