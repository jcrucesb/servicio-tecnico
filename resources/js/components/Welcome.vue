<template>
    <div id="welcome" class="container mt-3">
        <!---->
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img :src="'./img/st2.jpg'" class="d-block w-100" alt="">
                </div>
                <div class="carousel-item">
                    <img :src="'./img/st3.jpg'" class="d-block w-100" alt="">
                </div>
                <div class="carousel-item">
                    <img :src="'./img/st4.jpg'" class="d-block w-100" alt="">
                </div>
            </div>
            <p class="texto">Lorem ipsum dolor sit amet consectetur adipisicing elit.
               Beatae vel odio doloremque laboriosam obcaecati voluptate 
               magnam perspiciatis molestias voluptatibus magni temporibus explicabo
               quam, dolores quibusdam, consectetur repellendus aspernatur ad velit!</p>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="container"><h1 class="text-center">Nuestros Tecnicos Profesionales</h1></div>
        <div class="row mt-5">
            <!-- imagen -->
            <img :src="'./img/st5.jpg'"  class="container-image" alt="">
            <div class="container-body">
                <!--
                El contenedor de los nombres y la fecha
                hacemos que su width se ajuste y relleno el espacio sobrante con la propiedad flex : 1;
                Utilizamos :   align-items: flex-start;
                                justify-content: center;
                para llevar el contenido a la izquierda y centrarlo vericalmente
                -->
                <p class="name">Mario</p>
                <p class="date">Técnico en soldaduras</p>
            </div>
            <!-- imagen -->
            <img :src="'./img/st5.jpg'"  class="container-image" alt="">
            <div class="container-body">
                <!--
                El contenedor de los nombres y la fecha
                hacemos que su width se ajuste y relleno el espacio sobrante con la propiedad flex : 1;
                Utilizamos :   align-items: flex-start;
                                justify-content: center;
                para llevar el contenido a la izquierda y centrarlo vericalmente
                -->
                <p class="name">Carlos</p>
                <p class="date">Técnico en Software</p>
            </div>
            <!-- imagen -->
            <img :src="'./img/st5.jpg'"  class="container-image" alt="">
            <div class="container-body">
                <!--
                El contenedor de los nombres y la fecha
                hacemos que su width se ajuste y relleno el espacio sobrante con la propiedad flex : 1;
                Utilizamos :   align-items: flex-start;
                                justify-content: center;
                para llevar el contenido a la izquierda y centrarlo vericalmente
                -->
                <p class="name">Jose Hermosilla</p>
                <p class="date">Técnico en Hardware</p>
            </div>
        </div>    
        <!---->
        </div>
</template>
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style>
.container-image {
  border-radius : 40px;
  width : 90px;
  height : 90px;
}
.container-body {
  display : flex;
  flex-direction : column;
  height : 100%;
  flex : 1;
  padding-left : 5px;
  align-items: flex-start;
  justify-content: center;
}
.container-body p {
  margin : 2px;
}
.name {
  color : #0909ff;
  font-weight: bold;
}
</style>
