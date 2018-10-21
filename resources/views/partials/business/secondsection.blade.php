<section class="well well2 wow fadeIn  bg1" data-wow-duration='3s'>
    <div class="container">
        <h2 class="txt-pr">
            ¡ BIENVENIDOS
            @if($logged == true)
                <small contenteditable="true">
                    @{{ secondsection.empresa }} !
                </small>
            @else
                <small>
                    @{{ secondsection.empresa }} !
                </small>
            @endif
        </h2>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                @if($logged == true)
                    <p contenteditable="true">
                        @{{ secondsection.mensaje }}
                        <a href="#" class="btn-link l-h1 fa-angle-right"></a>
                    </p>
                @else
                    <p>
                        @{{ secondsection.mensaje }}
                        <a href="#" class="btn-link l-h1 fa-angle-right"></a>
                    </p>
                @endif
            </div>
        </div>
    </div>
</section>
