<header>
    <div class="container top-sect">
        <div class="navbar-header">
            <h1 >
                @if($logged == true)
                    <img src="{{asset("/img/mb/mba.jpg")}}" class="img-responsive" style="width: 350px; height: auto;" alt="">
                @else
                    <img src="{{asset("/img/mb/mba.jpg")}}" class="img-responsive" style="width: 350px; height: auto;" alt="" id="icono">
                @endif
            </h1>
            <a class="search-form_toggle" href="#"></a>
        </div>

        <div class="help-box text-right">
            @if($logged == true)
                <p contenteditable="true">¿ Quiere más información?</p>
                <a href="callto:#" contenteditable="true">@{{ header.telefono }}</a>
                <small><span>Horario:</span></small><small contenteditable="true">@{{ header.horario }}</small>
            @else
                <p>¿ Quiere más información?</p>
                <a href="callto:#">@{{ header.telefono }}</a>
                <small><span>Horario:</span>@{{ header.horario }}</small>
            @endif

        </div>
    </div>


    <div id="stuck_container" class="stuck_container">
        <div class="container">
            <nav class="navbar navbar-default navbar-static-top pull-left">
                <div class="" style="size: 0.95em;">
                    <ul class="nav navbar-nav sf-menu" data-type="navbar">
                        <li class="active">
                           <a href="{{route('templates.page1')}}">INICIO</a>
                        </li>
                        <li>
                            <a href="{{route('templates.page2')}}">NOSOTROS</a>
                        </li>
                        <li>
                            <a href="{{route('templates.page3')}}">SERVICIOS</a>
                        </li>
                        <li>
                            <a href="{{route('templates.page4')}}">CONTACTANOS</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>