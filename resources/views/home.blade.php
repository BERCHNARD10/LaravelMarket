@extends('content.page')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @section('head')
    <title>Chocolate El Real</title>

    <!-- cdn, bootstrap icons links  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- link css  -->
    <link rel="stylesheet" href="../css/app.css">

</head>
    @endsection

    @section('content')
<body>

<!-- home section inicio  -->

<section class="home" id="home">

    <div class="content">
        <h3>El Mejor Chocolate de Mexico</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat labore, sint cupiditate distinctio tempora reiciendis.</p>
        <a href="<?= url('shoping')?>" class="btn">Comprar Ahora</a>
    </div>

</section>

<!-- home section final -->

<!-- about section inicio  -->

<section class="about" id="about">

    <h1 class="heading"> <span>Sobre</span> Nosotros </h1>

    <div class="row">

        <div class="image">
            <img src="../resources/images/home-img1.jpg" alt="">
        </div>

        <div class="content">
            <h3>¿Qué hace que nuestro Chocolate sea especial?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus qui ea ullam, enim tempora ipsum fuga alias quae ratione a officiis id temporibus autem? Quod nemo facilis cupiditate. Ex, vel?</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit amet enim quod veritatis, nihil voluptas culpa! Neque consectetur obcaecati sapiente?</p>
            <a href="#" class="btn">Leer Mas</a>
        </div>

    </div>

</section>

<!-- about section final -->

<!-- menu section inicio  -->

<section class="menu" id="menu">
    <div class="container">
        <div class="row">
            <h1 class="heading"> Nuestros Productos mas <span>Populares</span> </h1>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="product-box position-relative">

                </div>
            </div>
        </div>
    </div>
    

    <div class="box-container">
        <div class="box">
            <div class="image-container">
                <img src="../resources/images/menu-1.png" alt="">
            </div>
            <h3>sabroso y saludable</h3>
            <div class="price">$15.99 <span>20.99</span></div>
            <a href="#" class="btn">Añadir al Carrito</a>
        </div>

        <div class="box">
            <img src="../resources/images/menu-2.png" alt="">
            <h3>sabroso y saludable</h3>
            <div class="price">$15.99 <span>20.99</span></div>
            <a href="#" class="btn">Añadir al Carrito</a>
        </div>

        <div class="box">
            <img src="../resources/images/menu-3.png" alt="">
            <div class="price">
                <h3>sabroso y saludable</h3>
                $15.99 <span>20.99</span></div>
            <a href="#" class="btn">Añadir al Carrito</a>
        </div>

        <div class="box">
            <img src="../resources/images/menu-4.png" alt="">
            <h3>sabroso y saludable</h3>
            <div class="price">$15.99 <span>20.99</span></div>
            <a href="#" class="btn">Añadir al Carrito</a>
        </div>

        <div class="box">
            <img src="../resources/images/menu-5.png" alt="">
            <h3>sabroso y saludable</h3>
            <div class="price">$15.99 <span>20.99</span></div>
            <a href="#" class="btn">Añadir al Carrito</a>
        </div>

        <div class="box">
            <img src="../resources/images/menu-6.png" alt="">
            <h3>sabroso y saludable</h3>
            <div class="price">$15.99 <span>20.99</span></div>
            <a href="#" class="btn">Añadir al Carrito</a>
        </div>
    </div>

</section>

<!-- menu section final -->

<section class="products" id="products">

    <h1 class="heading"> Otros <span>Productos</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="../resources/images/menu-5.png" alt="">
            </div>
            <div class="content">
                <h3>chocolate fresco</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$15.99 <span>$20.99</span></div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="../resources/images/menu-5.png" alt="">
            </div>
            <div class="content">
                <h3>chocolate fresco</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$15.99 <span>$20.99</span></div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="../resources/images/menu-5.png" alt="">
            </div>
            <div class="content">
                <h3>chocolate fresco</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$15.99 <span>$20.99</span></div>
            </div>
        </div>

    </div>

</section>

<!-- review section inicio  -->

<section class="review" id="review">

    <h1 class="heading"> Reseñas <span>destacadas</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="../resources/images/quote-img.png" alt="" class="quote">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi nobis? Necessitatibus aut laborum, nisi quas eaque laudantium consequuntur iste ex aliquam minus vel? Nemo.</p>
            <img src="../images/pic-1.png" class="user" alt="">
            <h3>Juan Perez</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">
            <img src="../resources/images/quote-img.png" alt="" class="quote">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi nobis? Necessitatibus aut laborum, nisi quas eaque laudantium consequuntur iste ex aliquam minus vel? Nemo.</p>
            <img src="./images/pic-2.png" class="user" alt="">
            <h3>Maria Ines</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        
        <div class="box">
            <img src="../resources/images/quote-img.png" alt="" class="quote">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi nobis? Necessitatibus aut laborum, nisi quas eaque laudantium consequuntur iste ex aliquam minus vel? Nemo.</p>
            <img src="../resources/images/pic-3.png" class="user" alt="">
            <h3>Papi God</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

    </div>

</section>

<!-- review section final -->

<!-- contact section inicio  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>Nuestro</span> Contacto </h1>

    <div class="row">

        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30153.788252261566!2d72.82321484621745!3d19.141690214227783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1629452077891!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
         <!--<iframe class="map" title="Google Maps" aria-label="Google Maps" data-src="" width="100%" height="100%" frameborder="0" scrolling="no" allowfullscreen="" src="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/media/googleMap.4be2d908.html?defaultLocation=0&amp;showZoom=true&amp;showStreetView=true&amp;showMapType=true&amp;language=en&amp;id=dataItem-jkmgiv0i&amp;googleMapsScriptPath=%2Fservices%2Feditor-elements-library%2Fdist%2Fthunderbolt%2Fmedia%2Fgoogle-map.min.0f1d35e4.js&amp;origin=https%3A%2F%2Fwww.wix.com" ></iframe>-->
       <form action="">
            <h3>Ingrese su Informacion</h3>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" placeholder="nombre">
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" placeholder="email">
            </div>
            <div class="inputBox">
                <span class="fas fa-phone"></span>
                <input type="number" placeholder="numero">
            </div>
            <input type="submit" value="contactar ahora" class="btn">
        </form>

    </div>

</section>

<!-- contact section final -->

<!-- blogs section inicio  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> Descubre  <span>nuestras recetas</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="../resources/images/blog-1.jpeg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">Chocolate Sabroso Y Refrescante</a>
                <span>por usuario / 21 diciembre, 2022</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dicta.</p>
                <a href="#" class="btn">leer mas</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="../resources/images/blog-2.jpeg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">Chocolate Sabroso Y Refrescante</a>
                <span>por usuario / 21 diciembre, 2022</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dicta.</p>
                <a href="#" class="btn">leer mas</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="../resources/images/blog-3.jpeg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">Chocolate Sabroso Y Refrescante</a>
                <span>por usuario / 21 diciembre, 2022</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dicta.</p>
                <a href="#" class="btn">leer mas</a>
            </div>
        </div>

    </div>

</section>

<!-- blogs section final -->

<!-- footer section inicio  -->

<!-- footer section final -->

@endsection