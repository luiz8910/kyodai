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
                        <li class="linha-header-index hidden-sm hidden-xs"></li>
                    </ul>
                </div>
            </div>

            <div class="row text-center text-title-description">
                <h4>Bem Vindo ao Kyodai - Sorocaba</h4>
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

    <section class="bg-section-contato">

        <div class="container">
            <div class="row form text-center">
                {!! Form::open(['route' => 'site.contato.store', 'method' => 'POST']) !!}

                <div class="form-group">
                    <div class="label-contato input-pink">Nome *</div>
                    <input type="text" name="nome" id="nome" required class="input-pink form-control">
                </div>

                <div class="form-group">
                    <div class="label-contato input-pink">Email *</div>
                    <input type="text" name="email" id="email" required class=" form-control">
                </div>

                <div class="form-group">
                    <div class="label-contato input-pink">Assunto *</div>
                    <input type="text" name="assunto" id="assunto" required class=" form-control">
                </div>

                <div class="form-group">
                    <div class="input-pink label-contato">Mensagem *</div>
                    <textarea class="form-control" name="mensagem"></textarea>
                </div>

                <div class="form-group">
                    {!! Form::submit('Enviar', ['class' => 'btn form-control input-pink', 'style' => 'color:white;']) !!}
                </div>

                {!! Form::close() !!}
            </div>
        </div>

    </section>
</main>
</body>
</html>