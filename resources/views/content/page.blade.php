 
    @yield('head')
    
<!-- header section inicio  -->
    <header class="header">

        <nav class="navbar">
            <a href="<?= url('shoping')?>">Tienda</a>
            <a href="#blogs">Resetas</a>
            <a href="#contact">Puerta</a>
        </nav>

        <a href="#" class="logo">
            <img src="../images/logo.svg" alt="">
        </a>

        <div class="icons">
            <div class="fas fa-search" id="search-btn"><span> Buscar</span></div>
            <div class="fas fa-user" id="user-btn">
                <span> Mi Cuenta <li class="nav-item dropdown"></li></span> 
            </div>
            <div class="fas fa-shopping-cart" id="cart-btn"> <spam>Mi Carrito</spam></div>
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>

        <div class="search-form">
            <input type="search" id="search-box" placeholder="¿Que deseas Comprar?...">
            <label for="search-box" class="fas fa-search"></label>
        </div>
        <div class="user-actions">
            <li class="nav-item_dropdown">
                <a href="<?= url('register')?>" class="bi bi-person-plus-fill"><span>Crea tu Cuenta</span></a>
                <a href="<?= url('login')?>" class="bi bi-box-arrow-in-right"><span>Iniciar Sesion</span></a>
            </li>
        </div>

        <div class="cart-items-container">
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="../images/menu-1.png" alt="">
                <div class="content">
                    <h3>nombre producto</h3>
                    <div class="price">$15.99/-</div>
                </div>
            </div>
            <a href="./Vistas/shoping.html" class="btn">comprar ahora</a>
        </div>

    </header>
<!-- header section final -->


    @yield('content')

    <footer class="footer-distributed">

        <div class="footer-left">
            <img src="./images/logo.svg" alt="">

            <p class="footer-links">
                <a href="#">Inicio</a>
                |
                <a href="#">Mision</a>
                |
                <a href="#">Contacto</a>
                |
                <a href="#">Resetas</a>
            </p>

            <p class="footer-company-name">Copyright © 2021 <strong>Chocolate El Real</strong> Derechos reservados</p>
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Huejutla</span>
                    Hidalgo</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+52 7712013894</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:ElReaL.co@gmail.com">ElReal@gmail.com</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>Acerca de la Compania</span>
                <strong>EL REAL</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quas accusantium perferendis quis, ex ipsa soluta, mollitia totam dicta, quisquam autem. Deleniti, ullam eius quisquam amet eligendi culpa voluptatem perspiciatis.
                and
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus fuga laboriosam incidunt saepe perferendis reprehenderit nisi quasi, eligendi facere veniam corporis pariatur eveniet ullam? Quam amet aliquam vero autem necessitatibus..
            </p>
            <div class="footer-icons">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>

    </footer>

    <!-- custom(archivo) js file link animations (animaciones)-->
    <script src="<?=url('/js/script.js')?>"></script>

</body>
</html>