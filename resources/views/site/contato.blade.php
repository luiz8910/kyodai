<html>
@include('site.include.head')

<body>
@include('site.include.header')

<main>
    <section class="bg-section-header-site header-size-site  section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"></div>
            </div>
        </div>
    </section> <!-- bg-section-header-site header-size-site -->

    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h2 class="text-center "><i class="linha-1">_____</i> Fale Conosco <i class="linha-1">_____</i></h2><br>
                </div>
            </div><br>
            <div class="row ">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-center text-title-description">
                    <p class="">
                        Fundado em 1993, o Kyodai Sorocaba é o primeiro restaurante japonês tradicional de sorocaba
                        Fundado em 1993, o Kyodai Sorocaba é o primeiro restaurante japonês tradicional de sorocaba
                        Fundado em 1993, o Kyodai Sorocaba é o primeiro restaurante japonês tradicional de sorocaba
                    </p>
                </div>
            </div> <!-- ./ row -->
        </div>
    </section>
    <!-- <div class="clearfix">...</div> -->
    <section class="bg-section-contato section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    {!! Form::open(['route' => 'site.contato.store', 'method' => 'POST']) !!}
                    
                    <form class="form-horizontal">
                        <div class="input-group">
                            <span class="input-group-addon input-pink" id="basic-addon1">Nome *</span>
                            <input type="text" class="form-control"  aria-describedby="basic-addon1">
                        </div><br><br>
                        
                        <div class="input-group">
                            <span class="input-group-addon input-pink" id="basic-addon1">Email *</span>
                            <input type="email" class="form-control"  aria-describedby="basic-addon1">
                        </div><br><br>
                        
                        <div class="input-group">
                            <span class="input-group-addon input-pink" id="basic-addon1">Assunto *</span>
                            <input type="text" class="form-control" aria-describedby="basic-addon1">
                        </div><br><br>
                        
                        <div class="input-group">
                            <span class="input-group-addon input-pink" id="basic-addon1">Mensagem *</span>
                            <textarea class="form-control" rows="3"></textarea>
                        </div><br>

                    </form>
                  
                

                    <br><br>
                    {!! Form::submit('Enviar', ['class' => 'btn btn-lg input-pink right button']) !!}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>

    @include('site.include.footer')
</main>
</body>
</html>