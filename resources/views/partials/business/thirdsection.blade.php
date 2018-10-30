<section class="well well2">
    <div class="container">
        <h2>
            NUESTROS
            <small>
                SERVICIOS
            </small>
        </h2>
        <div class="row offs1">
            <div class="col-md-6 col-sm-12">
                <ul class="link-list wow fadeInLeft" data-wow-duration='3s'>
                    <li>
                        @if($logged == true)
                            <a href="#" contenteditable="true" id="srv1">@{{ thirdsection.servicio1 }}</a>
                        @else
                            <a href="#">@{{ thirdsection.servicio1 }}</a>
                        @endif

                        <a href="#" class="btn-link l-h1 fa-angle-right"></a>
                    </li>
                    <li>

                        @if($logged == true)
                            <a href="#" contenteditable="true" id="srv2">@{{ thirdsection.servicio2 }}</a>
                        @else
                            <a href="#">@{{ thirdsection.servicio2 }}</a>
                        @endif

                        <a href="#" class="btn-link l-h1 fa-angle-right"></a>
                    </li>
                    <li>

                        @if($logged == true)
                            <a href="#" contenteditable="true" id="srv3">@{{ thirdsection.servicio3 }}</a>
                        @else
                            <a href="#">@{{ thirdsection.servicio3 }}</a>
                        @endif

                        <a href="#" class="btn-link l-h1 fa-angle-right"></a>
                    </li>
                    <li>

                        @if($logged == true)
                            <a href="#" contenteditable="true" id="srv4">@{{ thirdsection.servicio4 }}</a>
                        @else
                            <a href="#">@{{ thirdsection.servicio4 }}</a>
                        @endif

                        <a href="#" class="btn-link l-h1 fa-angle-right"></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 col-sm-12">
                @if($logged == true)
                    <h3 contenteditable="true">
                        <img class="width_img" src="{{asset('img/business/page-1_img6.jpg')}}" alt="" id="img6" v-on:click="changeImage('img6','inputimg6')">
                        <input type="file" accept="image/x-png,image/gif,image/jpeg"
                               id="inputimg6" v-model="thirdsection.image" style="display: none;"
                               v-on:change="evento(event,'img6')">
                    </h3>
                @else
                    <img class="width_img" src="{{asset('img/business/page-1_img6.jpg')}}" alt="">
                @endif

            </div>
        </div>
    </div>
</section>