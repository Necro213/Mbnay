
@extends('layout.'.$layout)


@section('content')
    <section class="well well4">
        <div class="container">
            <h2 class='offs5'>
                Nuestros
                <small>
                    servicios
                </small>
            </h2>
            <div class="row offs3">
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <a class="thumb" data-fancybox-group='1' href="{{asset('img/mb/costos-de-gestion.jpg')}}">
                        <img class="" src="{{asset('img/mb/costos-de-gestion.jpg')}}" alt="">
                        <span class='thumb_overlay'></span>
                    </a>
                    <p class="lead">
                        Impuestos
                    </p>
                    <p class="ins767-1">
                        Cálculo de contribuciones Federales y Estatales
                        en Materia Fiscal.
                    </p>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <a class="thumb" data-fancybox-group='1' href="{{asset('img/mb/presupuestos.jpg')}}">
                        <img class="" src="{{asset('img/mb/presupuestos.jpg')}}" alt="">
                        <span class='thumb_overlay'></span>
                    </a>
                    <p class="lead">
                        Defensa Fiscal
                    </p>
                    <p class="ins767-1">
                        Presentación de medios de Defensa en contra de créditos fiscales, actos de fiscalización, y cualquier medio en la cual la autoridad tenga un  perjuicio hacia el contribuyente.

                    </p>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <a class="thumb" data-fancybox-group='1' href="{{asset('img/mb/Herramientas-de-contabilidad-empresarial-1024x682.jpg')}}">
                        <img class="" src="{{asset('img/mb/Herramientas-de-contabilidad-empresarial-1024x682.jpg')}}" alt="">
                        <span class='thumb_overlay'></span>
                    </a>
                    <p class="lead">
                       Contabilidad y Nominas
                    </p>
                    <p class="ins767-1">
                        Elaboración de contabilidad registros, conciliaciones, capturas y asesoramiento en todos los aspectos contables sujetos a cada contribuyente, así como todo lo relacionado a una relación laboral su cumplimiento en material fiscal, de seguridad social y su aspecto legal
                    </p>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <a class="thumb" data-fancybox-group='1' href="{{asset('img/mb/53d826d237de7.jpg')}}">
                        <img class="" src="{{asset('img/mb/53d826d237de7.jpg')}}" alt="">
                        <span class='thumb_overlay'></span>
                    </a>
                    <p class="lead">
                        Asesoria Corporativa
                    </p>
                    <p class="ins767-1">
                        Elaboración de estados financieros, proyectos de inversión, estructuras corporativas y consejeros de negocios.                    </p>
                </div>
            </div>
        </div>
    </section>

    {{--<section class="well well6 parallax parallax1" data-url="images/parallax2.jpg" data-mobile="
      true" data-speed="0.7">
        <div class="container">
            <div class="wrap text-center">
                <strong>
                    WE OFFER<br />
                    IDEAS THAT RAISE
                    <small>
                        YOUR BUSINESS
                    </small>
                </strong>
            </div>
        </div>
    </section>
    --}}
    <section class="well well2">
        <div class="container">
            <h2>
                Lista de
                <small>
                    Servicios
                </small>
            </h2>
            <div class="row offs1">
                <div class="col-md-6 col-sm-12">
                    <ul class="link-list wow fadeInLeft" data-wow-duration='3s'>
                        <li>

                            <a href="#">Impuestos</a>

                            <a href="#" class="btn-link l-h1 fa-angle-right"></a>
                        </li>
                        <li>

                            <a href="#">Defensa Fiscal</a>

                            <a href="#" class="btn-link l-h1 fa-angle-right"></a>
                        </li>
                        <li>

                            <a href="#">Contabilidad y Nominas</a>

                            <a href="#" class="btn-link l-h1 fa-angle-right"></a>
                        </li>
                        <li>

                            <a href="#">Asesoria Corporativa</a>

                            <a href="#" class="btn-link l-h1 fa-angle-right"></a>
                        </li>
                        <li>

                            <a href="#">Sistema de Control Fiscal</a>

                            <a href="#" class="btn-link l-h1 fa-angle-right"></a>
                        </li>
                        <li>

                            <a href="#">Facturación Electronica</a>

                            <a href="#" class="btn-link l-h1 fa-angle-right"></a>
                        </li>
                        <li>

                            <a href="#">Servicios Inmobiliarios</a>

                            <a href="#" class="btn-link l-h1 fa-angle-right"></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-12">
                    <p>
                        Nulla nulla tellus, tincidunt vel eros gravida, cursus cursus nisl. Nullam ac magna nisi. Integer dictum sagittis vulputate. Nulla a purus felis. Nam nec egestas justo. Nunc id risus neque. Pellentesque vestibulum lectus sed ex efficitur lacinia. Sed efficitur nunc sed rhoncus tempor. Quisque ultricies
                        <br /><br />
                        Maecenas dignissim, metus a luctus lacinia, nisl purus commodo tortor, vel rutrum urna arcu non massa. Quisque tellus velit, dignissim interdum enim in, sodales suscipit purus. Curabitur et tincidunt elit. Phasellus pulvinar bibendum dapibus. Sed mollis sapien in justo tincidunt, quis venenatis orci ornare. Proin sed nisi ut diam volutpat malesuada. Nullam cursus aliquet nunc
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="well well4">
        <div class="container">
            <h2>
                Otros
                <small>
                    Servicios
                </small>
            </h2>
            <div class="row offs3">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <img class="" src="{{asset('img/mb/53d826d237de7-1024x640.jpg')}}" alt="">
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <p class="lead lead_offs2">
                        Sistema de Control Fiscal
                    </p>
                    <p class="ins767-1">
                        Este novedoso sistema fue desarrollado por el despacho Montes Bueno y Asociados para dar el cumplimiento oportuno de las obligaciones fiscales de cada uno de los clientes…
                        <a href="http://despachomb.grupombnay.com" target="_blank" class="btn-link l-h1 fa-angle-right"></a>
                    </p>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 clear991">
                    <img class="" src="{{asset('img/mb/5220781413814230-1025x680.jpg')}}" alt="">
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <p class="lead lead_offs2">
                        Facturación electronica
                    </p>
                    <p class="ins767-1">
                        Montes Bueno Y Asociados SC Te Ofrece el servicio del Software Konesh que cuenta con un sistema fácil y sencillo de usar, que permitirá emitir facturas electrónicas y realizar el timbrado de nomina…
                    </p>
                </div>
            </div>
            <div class="row row_offs">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <img class="" src="{{asset('img/mb/gestión-inmobiliaria-colombia-mauricio-vives-carrilo-1025x540.jpg')}}" alt="">
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <p class="lead lead_offs2">
                        Servicios Inmobiliarios
                    </p>
                    <p class="ins767-1">
                        Nuestra empresa preocupada por el servicio integral realiza convenio de colaboración con la empresa inmuebla Tepic, Una franquicia dedicada al sector inmobiliario.
                        <br>
                        <b>Teléfono: 214 15 51</b>
                        <a href="#" class="btn-link l-h1 fa-angle-right"></a>
                    </p>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 clear991">
                    <img class="" src="images/page-3_img7.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

@endsection




<!--adminlte::layouts.landing-->

