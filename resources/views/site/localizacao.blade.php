<?php
/**
 * Created by PhpStorm.
 * User: luizfernandosanches
 * Date: 21/11/16
 * Time: 15:42
 */ ?>

<html>

@include('site.include.head')

<body>

@include('site.include.header')

<main>

    <section class="bg-section-header-site header-size-site col-md-12 col-lg-12">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </section> <!-- bg-section-header-site header-size-site -->

    <section>
        <div class="container">
            <div class="row text-center">
                <div class="divisor-default"></div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="list-inline">
                        <li class="linha-header-index hidden-xs"></li>
                        <li class=""><h2 class="text-color-1">Fale Conosco</h2></li>
                        <li class="linha-header-index hidden-sm hidden-md"></li>
                    </ul>
                </div>
            </div>

            <div class="row text-title-description">
                <h4>Telefone: 3232 5039</h4>
                <h4 class="text-right localizacao-horario-margin">Horário de Funcionamento</h4><br>

                <h4>Rua Dr. Artur Martins, 41, Sorocaba - SP</h4>
                <h4 class="text-right localizacao-horario-margin">Segunda a Sexta: 18:00h as 23:00h</h4><br>
                <h4 class="text-right localizacao-horario-margin">Sábado: 18:00h as 23:00h</h4><br>

                <h4>contato@kyodai.com.br</h4>

                <h4 class="text-right localizacao-horario-margin">Delivery</h4><br>
                <h4 class="text-right localizacao-horario-margin">Segunda a Sábado: 19:00h as 22:30h</h4><br>
            </div>

        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div id="map"></div>
                <script>
                    function initMap() {
                        var infowindow = new google.maps.InfoWindow();

                        var uluru = {
                            lat: -23.502412,
                            lng: -47.458376
                        };

                        var map = new google.maps.Map(document.getElementById('map'), {
                            zoom: 17,
                            center: uluru
                        });
                        var marker = new google.maps.Marker({
                            position: uluru,
                            map: map
                        });

                        google.maps.event.addListener(map, 'mouseover', (function(marker) {
                            return function() {
                                infowindow.setContent('Kyodai');
                                infowindow.open(map, marker);
                            }
                        })(marker));


                    }
                </script>
                <script async defer
                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjTs0nbQbEecUygnKpThLfzRKES8nKS0A&callback=initMap">
                </script>
            </div>
        </div>
    </section>

    @include('site.include.footer')
</main>



</body>
</html>
