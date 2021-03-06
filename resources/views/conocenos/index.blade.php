<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link  href="{{ asset('css/conocenos.css') }}" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />

    <title> Conocenos </title>
  </head>
  <body>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>-->


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" 
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" 
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    <nav class="navbar navbar-dark bg-dark" >
        <div class="container-fluid">
            <a class="navbar-brand " href="/home">
            <img src="/Imagenes/logos.ico" alt="" width="30" height="24">
            AgroWeb
            </a>
        </div>
    </nav>
    <section>
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-12 col-sm-6  col-lg-5">
                    <img src="/Imagenes/sena.jpg" alt=" Sena (CBA)" width="500" height="450">
                </div>
                <div class="col-12 col-sm-6">
                    <h3> 
                        ! Por que se crea este proyecto !! 
                    </h3>
                    <p> 
                        Este proyecto se crea con base de poder ayudar a los campesinos con sus productos.
                        Es decir los ayudamos a que ellos tengan acceso para poder vender sus productos a nivel,
                        Departamental y luego nacional.
                        <br>
                        <br>
                        Para esto creamos el proyecto AgoWeb el cual se encarga de una platadorma viertual a que los campesinos,
                        Puedan subir sus productos y venderlos en vez de que los  pierdan o se les da??e en sus fincas eso es,
                        AgroWeb :). 
                    </p>
                    <a href="{{ url()->previous() }}" class="btn btn-outline-dark" disabled> Atras </a>
                </div>
            </div>
            <br>
        </div>
    </section>
    <section>
        <div class="container mt-5 mb-5 text-start">
            <h4>
                SENA SOFIA:
            </h4>
            <p>
                Cl. 17, Mosquera, Cundinamarca<br>
                Numero de contacto
                (+5715462323)
                <br>
                http://bienestarcba.blogspot.com/
            </p>
            <div class="responsive-iframe">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.4265769693043!2d-74.21781468466101!3d4.695709043006906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9d58cf6e291b%3A0x8946ec678fcf04b4!2sSENA%20MOSQUERA%20(CBA)!5e0!3m2!1ses!2sco!4v1634868941334!5m2!1ses!2sco" 
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </div>
    </section>
    <div class="container mt-5 mb-5 text-center">
        <h1>
            Contribuyentes en el proyecto AgroWeb
        </h1>
    </div>
    <div>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    Yessica Cardenas 
                </div>
                <div class="swiper-slide">
                    Ivan Obando 
                </div>
                <div class="swiper-slide"> 
                    Yerson Quevedo 
                </div>
                <div class="swiper-slide"> 
                    Johan Alexander 
                </div>
                <div class="swiper-slide"> 
                    Jaider Gomez 
                </div>
                <div class="swiper-slide"> 
                    Kevin Gordillo 
                </div>
                <div class="swiper-slide"> 
                    Andrea Rativa 
                </div>
                <div class="swiper-slide"> 
                    Andres Garzon 
                </div>
                <div class="swiper-slide"> 
                    Juan David 
                </div>
                <div class="swiper-slide"> 
                    Juan Moreno 
                </div>
                <div class="swiper-slide"> 
                    Steffi Velandia 
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "cards",
            grabCursor: true,
        });
    </script>
 
    <br>
    <hr>
    <div class="px-4 py-5 my-5 text-center">
        <img class="d-block mx-auto mb-4" src="/Imagenes/logos.ico" alt="" width="72" height="57">
        <h1 class="display-5 fw-bold"> AgroWeb</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">
                Somos un equipo de trabajo del sena el cual crea esta pagina web para poder ayudar a los campesinos
                u agricultores a que pueden vender sin ningun problema todos sus productos.
            </p>
            <div class="container px-5">
        <img src="Imagenes/agroweb.jpeg" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
      </div>
        </div>
    </div>
  </body>
</html>