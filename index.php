<!-- Barra de navegacion -->
<?php 
include ("./components/header.php");
?>

        <main>
            <div class="container_introduccion">
                <img src="./components/img/img_introduccion.png" alt="imagen escuela" class="img_introduccion">
                <div class="texto_introduccion">
                    <h1>Bienvenidos</h1>
                    <h3>Escuela Provincial De Educacion Tecnica N°3</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates veritatis, dolorum, expedita quaerat voluptatum soluta inventore hic voluptatem doloremque fugit quibusdam molestias impedit deserunt, facere laudantium cum quae. Autem, alias!</p>
                </div>
            </div>
            <div class="icon_ab">
                <img src="./components/img/icon_abajo.png" alt="icono abajo" class="icon_abajo">
            </div>
            <div class="h2_destacado">
                <h2>Destacados</h2>
            </div>
            <div class="carousel_container">
                <div class="carousel_slide">
                    <img src="./components/img/img1.jpg" alt="" class="img_carousel">
                    <div class="text"><h3>titulo1</h3> <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis nostrum eius sit praesentium, ab culpa quibusdam temporibus, dolore illo sed architecto consequatur a adipisci minima eaque consequuntur eos sequi vero.</p></div>
                </div>

                <div class="carousel_slide">
                    <img src="./components/img/img2.jpg" alt="" class="img_carousel">
                    <div class="text"><h3>titulo1</h3> <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum autem, aut veniam quas in voluptatibus perferendis odit molestias. Deserunt, reprehenderit soluta. Magnam, culpa adipisci! At minima enim libero excepturi ullam.</p></div>
                </div>

                <div class="carousel_slide">
                    <img src="./components/img/img3.jpg" alt="" class="img_carousel">
                    <div class="text"><h3>titulo1</h3> <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt numquam et iusto quam natus velit eligendi hic tempore atque ipsa, necessitatibus cum, debitis molestias, architecto voluptatum minus ea nemo reiciendis.</p></div>
                </div>
                <div class="botones_container">
                    <button class="left" onclick="leftSlide()">&#10094;</button>
                    <button class="right" onclick="rightSlide()">&#10095;</button>
                </div>
                <div class="carousel_indicators">
                    <span class="indicator" onclick="goToSlide(0)"></span>
                    <span class="indicator" onclick="goToSlide(1)"></span>
                    <span class="indicator" onclick="goToSlide(2)"></span>
                </div>
            </div>

            <div class="cards_container">
                <div class="card_item">
                    <img src="./components/img/icon_agenda.png" alt="" class="img_card">
                    <h3 class="h3_card">Agenda de aulas y eventos</h3>
                    <a href="" class="mas_card">Ver mas</a>
                </div>

                <div class="card_item">
                    <img src="./components/img/icon_youtube.png" alt="" class="img_card">
                    <h3 class="h3_card">Videos colaborativos</h3>
                    <a href="" class="mas_card">Ver mas</a>
                </div>
            </div>
        </main>

    <!-- footer -->
    <?php
        include ("./components/footer.php")
    ?>



</body>
</html>