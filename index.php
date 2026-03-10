<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
<style>

/* ENCABEADO */
.encabezado {
    background-color: white;
    border-bottom: 2px solid #0C0101;
    padding: 20px 0;
}

.menu {
    display: flex;
    justify-content: center;
}

/* ETIQUETAS DEL MENU */
.menu a {
    font-family: "Arial Black", Arial, sans-serif;
    font-size: 16px;
    color: #0C0101;
    text-decoration: none;
    margin: 0 61px;
}

/* EFECTO AL PASAR */
.menu a:hover{
    text-decoration: underline;
}


/* SECCCION PRESENTACION */
.presentacion {
    display: flex;
    align-items: flex-start;
    gap: 80px;
    margin-top: 54px;
    justify-content: center;
}

/* FOTO */
.contenedor-foto {
    position: relative;
    width: 330px;
    height: 297px;
}

.sombra {
    position: absolute;
    width: 280px;
    height: 277px;
    background-color: #A5B0F5;
    border-radius: 20px;
    left: -40px;
    top: 45px;
}

.foto {
    position: absolute;
    width: 280px;
    height: 277px;
    border: 5px solid #000;
    border-radius: 20px;
    overflow: hidden;
    background-color: white;
}

.foto img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* INFORMACION */
.info {
    margin-top: 35px;
}

.nombre {
    font-family: "Arial Black", Arial, sans-serif;
    font-size: 24px;
    color: #000;
}

/* BOTONES */
.descripcion {
    font-family: Arial, sans-serif;
    font-size: 20px;
    color: #000;
    margin-top: 30px;
}

.botones {
    display: flex;
    gap: 20px;
    margin-top: 50px;
}

.contacto {
    width: 150px;
    height: 42px;
    background-color: #0BF6BF;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: "Arial Black", Arial;
    font-size: 18px;
    text-decoration: none; 
    color: #000;
    border-radius: 10px;
}

.github {
    width: 102px;
    height: 42px;
    border: 2px solid #000;
    border-radius: 10px;
    background-color: #fff;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 8px;
    text-decoration: none;
    color: #000;
    box-sizing: border-box;
}

.github span {
    font-family: "Arial Black", Arial;
    font-size: 20px;
}

.github img {
    width: 35px;
    height: 35px;
    object-fit: contain;
}

/*SEPARADOR */
.separador {
    width: 565px;
    border-bottom: 2px solid #000;
    margin-top: 60px;
}

.cuadrodecorativo {
    position: relative;
    overflow: hidden;
    padding: 120px 80px;
}
.cuadro-decorativo {
    position: absolute;
    width: 230px;
    height: 197px;
    border: 20px solid #A5B0F5;
    border-radius: 25px;
    right: -120px;
    top: 140px;
}

/* SESSION SOBRE MI */
.sobre-mi {
    margin-top: 140px;
    text-align: center;
}

.titulo-sobre {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
}

.titulo-sobre h2 {
    font-family: Arial, sans-serif;
    font-size: 24px;
    color: #000;
}

.linea {
    width: 98px;
    height: 2px;
    background-color: #000;
}

.descripcion-sobre {
    margin-top: 20px;
    font-family: Arial, sans-serif;
    font-size: 18px;
    color: #000;
    max-width: 800px;
    margin-left: auto;
    margin-right: auto;
}

.linkedin {
    width: 42px;
    height: 42px;
    border-radius: 10px;
    background-color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
}

.linkedin img {
    width: 34px;
    height: 34px;
}


</style>
</head>

<body>

<header class="encabezado">

    <nav class="menu">
        <a href="#">INICIO</a>
        <a href="#">SOBRE MI</a>
        <a href="#">INTERESES</a>
        <a href="#">PROYECTOS</a>
        <a href="#">CONTACTO</a>
    </nav>

</header>

<section class="presentacion">

<!-- Foto -->
    <div class="contenedor-foto">
        <div class="sombra"></div>

        <div class="foto">
            <img src="imagenes/foto.png" alt="Mi fotografia">
        </div>
    </div>

    <!-- Informacion -->
     <div class="info">

        <h1 class="nombre">WILFREDO JOSUÉ SORTO</h1>

        <p class="descripcion">
            Desarrollador FullStack
        </p>

        <div class="botones">

            <a class="contacto" href="#">
                CONTACTO
            </a>

                <a href="https://github.com/josueinge" class="github">
                <span>&lt;/&gt;</span>
                <img src="imagenes/github.png" alt="GitHub">
            </a>

            <a href="https://www.linkedin.com/in/wilfredo-josue-sorto-44a41a3b6/" class="linkedin">
                <img src="imagenes/linkedin.png" alt="LinkedIn">
            </a>

        </div>

        <div class="separador"></div>

    </div>

</section> 

<section class="sobre-mi">

    <div class="titulo-sobre">
        <div class="linea"></div>
        <h3>SOBRE MI</h2>
        <div class="linea"></div>
    </div>

    <p class="descripcion-sobre">
        Soy desarrollador y mi pasion es el desarrollo weby diseño de iconografía e interfaces de usuario. Cuento con conocimiento sólidos en PHP, JavaScript, CSS y html. Me dedico a disñar interfaces para sitios web, iconos y logos.
</p>
</section>

    <section class="cuadro-decorativo"></div>
</section>

</body>
</html>

