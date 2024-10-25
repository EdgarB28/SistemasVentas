<?php include("template/cabecera.php"); ?>



<section id="seccion1">
    <br>
    <div class="container1">
        <div class="social-list">
            <ul>
                <li><a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i> </a></li>
                <li><a href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube"></i></a></li>
                <li><a href="https://www.tiktok.com" target="_blank"><i class="fab fa-tiktok"></i></a></li>
                <li><a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>

        <div class="carousel">
            <div class="carousel-images">
                <img src="/img/p1.jpg" alt="Imagen 1">
                <img src="/img/p2.jpg" alt="Imagen 2">

            </div>
            <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
            <button class="next" onclick="moveSlide(1)">&#10095;</button>
        </div>

        <div class="social-list">
            <ul>
                <li><a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube"></i></a></li>
                <li><a href="https://www.tiktok.com" target="_blank"><i class="fab fa-tiktok"></i></a></li>
                <li><a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
</section>
<script src="/js/script.js"></script> <!-- Enlaza tu JavaScript -->


<section id="seccion2">


    <h1>NUESTRAS MEJORES CATEGORÍAS</h1>
    <div class="container">

        <?php
        // Array de datos para las tarjetas
        $cards = [
            ['title' => 'Comida Criolla',  'image' => '/img/criolla.png', 'url' => '/criolla/index.php'],
            ['title' => 'Comida de la Selva', 'image' => '/img/selva.png', 'url' => '/selva/index.php'],
            ['title' => 'Comida Andina',  'image' => '/img/andina.png', 'url' => '/andina/index.php'],
            ['title' => 'Comida Marina', 'image' => '/img/marina.png', 'url' => '/marina/index.php'],
        ];

        // Generar las tarjetas
        foreach ($cards as $card) {
            echo '<div class="card">';
            echo '<img src="' . $card['image'] . '" alt="' . $card['title'] . '">';
            echo '<h3>' . $card['title'] . '</h3>';

            // Bloque de estrellas
            echo '<div class="stars">';
            for ($i = 0; $i < 5; $i++) {
                echo '<span class="star">★</span>'; // Estrella llena
            }
            echo '</div>';
            echo '<a href="' . $card['url'] . '" class="ver-button"> Ver más</a>'; // Botón "Ver más" como enlace
            echo '</div>';
        }
        ?>
    </div>
</section>


<script src="/js/script.js"></script> <!-- Incluir el archivo JavaScript -->

<?php include("template/pie.php"); ?>