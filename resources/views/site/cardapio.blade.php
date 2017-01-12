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
                        <li class=""><h2 class="text-color-1">Conheça nosso cardápio</h2></li>
                        <li class="linha-header-index hidden-sm hidden-md"></li>
                    </ul>
                </div>
            </div>

            <div class="row text-center text-title-description">
                <h4>Conheça nosso cardápio</h4>
            </div>

            <div class="row text-center text-title-description">
                <h4 class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    Fundado em 1993, o Kyodai Sorocaba é o primeiro restaurante japonês tradicional de sorocaba
                    Fundado em 1993, o Kyodai Sorocaba é o primeiro restaurante japonês tradicional de sorocaba
                    Fundado em 1993, o Kyodai Sorocaba é o primeiro restaurante japonês tradicional de sorocaba
                </h4>
            </div>
        </div>
    </section>

    <section>

        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="container">
                <div class="row text-center">
                    <div class="panel visible-md visible-lg">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                   aria-expanded="true" aria-controls="collapseOne">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img-cardapio-width-height">
                                        <img src="site/assets/img/cardapio/cardapio-1.png"
                                             class="img-responsive centered">
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <h3 class="banner-menu-h3 text-center text-img-cardapio">Porções</h3>
                                    </div>
                                </a>
                            </h4>
                        </div>

                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                             aria-labelledby="headingOne">
                            <div class="panel-body">
                                <div class="divisor-default"></div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <ul class="list-inline">
                                        <li class="linha-header-index hidden-xs"></li>
                                        <li class=""><h4 class="text-color-1">Porções</h4></li>
                                        <li class="linha-header-index hidden-sm hidden-md"></li>
                                    </ul>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Lula</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shitaki com Lula</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Mignom</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Tofu</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Lula</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xs-12 visible-xs visible-sm">
                        <ul class="list-inline">
                            <li class=""><h4 class="text-color-1">Porções</h4></li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Lula</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shitaki com Lula</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Mignom</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Tofu</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Lula</p>
                    </div>
                </div>

            </div>


            <div class="container">
                <div class="row text-center">
                    <div class="panel visible-md visible-lg">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                                   aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img-cardapio-width-height">
                                        <img src="site/assets/img/cardapio/cardapio-2.png"
                                             class="img-responsive centered">
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <h3 class="banner-menu-h3 text-center text-img-cardapio">Sopas</h3>
                                    </div>
                                </a>
                            </h4>
                        </div>

                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <div class="divisor-default"></div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <ul class="list-inline">
                                        <li class="linha-header-index hidden-xs"></li>
                                        <li class=""><h4 class="text-color-1">Sopas</h4></li>
                                        <li class="linha-header-index hidden-sm hidden-md"></li>
                                    </ul>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Lula</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shitaki com Lula</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Mignom</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Tofu</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Lula</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xs-12 visible-xs visible-sm">
                        <ul class="list-inline">
                            <li class=""><h4 class="text-color-1">Sopas</h4></li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Lula</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shitaki com Lula</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Mignom</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Tofu</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Lula</p>
                    </div>
                </div>

            </div>


            <div class="container">
                <div class="row text-center">
                    <div class="panel visible-md visible-lg">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
                                   aria-expanded="false" aria-controls="collapseThree">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img-cardapio-width-height">
                                        <img src="site/assets/img/cardapio/cardapio-3.png"
                                             class="img-responsive centered">
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <h3 class="banner-menu-h3 text-center text-img-cardapio">Hossomaki</h3>
                                    </div>
                                </a>
                            </h4>
                        </div>

                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingThree">
                            <div class="panel-body">
                                <div class="divisor-default"></div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <ul class="list-inline">
                                        <li class="linha-header-index hidden-xs"></li>
                                        <li class=""><h4 class="text-color-1">Hossomaki</h4></li>
                                        <li class="linha-header-index hidden-sm hidden-md"></li>
                                    </ul>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Lula</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shitaki com Lula</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Mignom</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Tofu</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Lula</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xs-12 visible-xs visible-sm">
                        <ul class="list-inline">
                            <li class=""><h4 class="text-color-1">Hossomaki</h4></li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Lula</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shitaki com Lula</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Mignom</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Tofu</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Lula</p>
                    </div>
                </div>

            </div>


            <div class="container">
                <div class="row text-center">
                    <div class="panel visible-md visible-lg">
                        <div class="panel-heading" role="tab" id="headingFour">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour"
                                   aria-expanded="false" aria-controls="collapseFour">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img-cardapio-width-height">
                                        <img src="site/assets/img/cardapio/cardapio-4.png"
                                             class="img-responsive centered">
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <h3 class="banner-menu-h3 text-center text-img-cardapio">Urumaki</h3>
                                    </div>
                                </a>
                            </h4>
                        </div>

                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingFour">
                            <div class="panel-body">
                                <div class="divisor-default"></div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <ul class="list-inline">
                                        <li class="linha-header-index hidden-xs"></li>
                                        <li class=""><h4 class="text-color-1">Urumaki</h4></li>
                                        <li class="linha-header-index hidden-sm hidden-md"></li>
                                    </ul>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Lula</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shitaki com Lula</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Mignom</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Tofu</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Lula</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xs-12 visible-xs visible-sm">
                        <ul class="list-inline">
                            <li class=""><h4 class="text-color-1">Urumaki</h4></li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Lula</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shitaki com Lula</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Mignom</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Tofu</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Lula</p>
                    </div>
                </div>

            </div>


            <div class="container">
                <div class="row text-center">
                    <div class="panel visible-md visible-lg">
                        <div class="panel-heading" role="tab" id="headingFive">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive"
                                   aria-expanded="false" aria-controls="collapseFive">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img-cardapio-width-height">
                                        <img src="site/assets/img/cardapio/cardapio-5.png"
                                             class="img-responsive centered">
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <h3 class="banner-menu-h3 text-center text-img-cardapio">Temaki</h3>
                                    </div>
                                </a>
                            </h4>
                        </div>

                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingFive">
                            <div class="panel-body">
                                <div class="divisor-default"></div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <ul class="list-inline">
                                        <li class="linha-header-index hidden-xs"></li>
                                        <li class=""><h4 class="text-color-1">Temaki</h4></li>
                                        <li class="linha-header-index hidden-sm hidden-md"></li>
                                    </ul>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Lula</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shitaki com Lula</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Mignom</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Tofu</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Lula</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xs-12 visible-xs visible-sm">
                        <ul class="list-inline">
                            <li class=""><h4 class="text-color-1">Temaki</h4></li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Lula</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shitaki com Lula</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Mignom</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Tofu</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Lula</p>
                    </div>
                </div>

            </div>


            <div class="container">
                <div class="row text-center">
                    <div class="panel visible-md visible-lg">
                        <div class="panel-heading" role="tab" id="headingSix">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix"
                                   aria-expanded="false" aria-controls="collapseSix">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img-cardapio-width-height">
                                        <img src="site/assets/img/cardapio/cardapio-6.png"
                                             class="img-responsive centered">
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <h3 class="banner-menu-h3 text-center text-img-cardapio">Teishoku</h3>
                                    </div>
                                </a>
                            </h4>
                        </div>

                        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingSix">
                            <div class="panel-body">
                                <div class="divisor-default"></div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <ul class="list-inline">
                                        <li class="linha-header-index hidden-xs"></li>
                                        <li class=""><h4 class="text-color-1">Teishoku</h4></li>
                                        <li class="linha-header-index hidden-sm hidden-md"></li>
                                    </ul>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Lula</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shitaki com Lula</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Mignom</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Tofu</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Lula</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xs-12 visible-xs visible-sm">
                        <ul class="list-inline">
                            <li class=""><h4 class="text-color-1">Teishoku</h4></li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Lula</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shitaki com Lula</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Mignom</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Tofu</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Lula</p>
                    </div>
                </div>

            </div>


            <div class="container">
                <div class="row text-center">
                    <div class="panel visible-md visible-lg">
                        <div class="panel-heading" role="tab" id="headingSeven">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven"
                                   aria-expanded="false" aria-controls="collapseSeven">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img-cardapio-width-height">
                                        <img src="site/assets/img/cardapio/cardapio-7.png"
                                             class="img-responsive centered">
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <h3 class="banner-menu-h3 text-center text-img-cardapio">Nigiri</h3>
                                    </div>
                                </a>
                            </h4>
                        </div>

                        <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingSeven">
                            <div class="panel-body">
                                <div class="divisor-default"></div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <ul class="list-inline">
                                        <li class="linha-header-index hidden-xs"></li>
                                        <li class=""><h4 class="text-color-1">Nigiri</h4></li>
                                        <li class="linha-header-index hidden-sm hidden-md"></li>
                                    </ul>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Lula</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shitaki com Lula</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Mignom</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Tofu</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Lula</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xs-12 visible-xs visible-sm">
                        <ul class="list-inline">
                            <li class=""><h4 class="text-color-1">Nigiri</h4></li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Lula</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shitaki com Lula</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Mignom</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Tofu</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Lula</p>
                    </div>
                </div>

            </div>


            <div class="container">
                <div class="row text-center">
                    <div class="panel visible-md visible-lg">
                        <div class="panel-heading" role="tab" id="headingEight">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight"
                                   aria-expanded="false" aria-controls="collapseEight">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img-cardapio-width-height">
                                        <img src="site/assets/img/cardapio/cardapio-8.png"
                                             class="img-responsive centered">
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <h3 class="banner-menu-h3 text-center text-img-cardapio">Teppanyaki Teshoku</h3>
                                    </div>
                                </a>
                            </h4>
                        </div>

                        <div id="collapseEight" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingEight">
                            <div class="panel-body">
                                <div class="divisor-default"></div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <ul class="list-inline">
                                        <li class="linha-header-index hidden-xs"></li>
                                        <li class=""><h4 class="text-color-1">Teppanyaki Teshoku</h4></li>
                                        <li class="linha-header-index hidden-sm hidden-md"></li>
                                    </ul>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Lula</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shitaki com Lula</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Mignom</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Tofu</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Lula</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xs-12 visible-xs visible-sm">
                        <ul class="list-inline">
                            <li class=""><h4 class="text-color-1">Teppanyaki Teshoku</h4></li>
                        </ul>
                    </div>


                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Lula</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shitaki com Lula</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Mignom</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Tofu</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Lula</p>
                    </div>
                </div>

            </div>


            <div class="container">
                <div class="row text-center">
                    <div class="panel visible-md visible-lg">
                        <div class="panel-heading" role="tab" id="headingNine">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine"
                                   aria-expanded="false" aria-controls="collapseNine">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img-cardapio-width-height">
                                        <img src="site/assets/img/cardapio/cardapio-9.png"
                                             class="img-responsive centered">
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <h3 class="banner-menu-h3 text-center text-img-cardapio">Pratos Diversos</h3>
                                    </div>
                                </a>
                            </h4>
                        </div>

                        <div id="collapseNine" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingNine">
                            <div class="panel-body">
                                <div class="divisor-default"></div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <ul class="list-inline">
                                        <li class="linha-header-index hidden-xs"></li>
                                        <li class=""><h4 class="text-color-1">Pratos Diversos</h4></li>
                                        <li class="linha-header-index hidden-sm hidden-md"></li>
                                    </ul>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Lula</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shitaki com Lula</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Mignom</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Tofu</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Lula</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xs-12 visible-xs visible-sm">
                        <ul class="list-inline">
                            <li class=""><h4 class="text-color-1">Pratos Diversos</h4></li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Lula</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shitaki com Lula</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Mignom</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Tofu</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Lula</p>
                    </div>
                </div>

            </div>

        </div> <!--panel group -->


        <!--<div class="row text-center">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                               aria-expanded="true" aria-controls="collapseOne">
                                Collapsible Group Item #1
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                         aria-labelledby="headingOne">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid.
                        </div>
                    </div>
                </div>
            </div>

        </div>-->
    </section>

    @include('site.include.footer')
</main>



</body>
</html>
