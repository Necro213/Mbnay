<section class="well well1 well1_ins1">
    <div class="container center991">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="thumbnail thumb-shadow">
                    @if($logged == true)
                        <h3 contenteditable="true">
                            <img src="{{asset('img/business/page-1_img1.jpg')}}" alt="" id="img1" v-on:click="changeImage('img1','inputimg1')">
                            <input type="file" accept="image/x-png,image/gif,image/jpeg"
                                   id="inputimg1" v-model="firstsection.caption1.image" style="display: none;"
                                    v-on:change="evento(event,'img1')">
                        </h3>
                    @else
                        <img src="{{asset('img/business/page-1_img1.jpg')}}" alt="">
                    @endif

                    <div class="caption bg2">
                        @if($logged == true)
                            <h3 contenteditable="true">
                               @{{ firstsection.caption1.title }}
                            </h3>
                        @else
                            <h3>
                                @{{ firstsection.caption1.title }}
                            </h3>
                        @endif

                        <div class="wrap">
                            @if($logged == true)
                                <p contenteditable="true">
                                    @{{ firstsection.caption1.content }}
                                </p>
                            @else
                                <p>
                                    @{{ firstsection.caption1.content }}
                                </p>
                            @endif

                            <a href="#" class="btn-link fa-angle-right"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="thumbnail thumb-shadow">
                    <div class="thumbnail thumb-shadow">
                        @if($logged == true)
                            <h3 contenteditable="true">
                                <img src="{{asset('img/business/page-1_img2.jpg')}}" alt="" id="img2" v-on:click="changeImage('img2','inputimg2')">
                                <input type="file" accept="image/x-png,image/gif,image/jpeg"
                                       id="inputimg2" v-model="firstsection.caption2.image" style="display: none;"
                                       v-on:change="evento(event,'img2')">
                            </h3>
                        @else
                            <img src="{{asset('img/business/page-1_img2.jpg')}}" alt="">
                        @endif
                    <div class="caption bg3">
                        @if($logged == true)
                            <h3 contenteditable="true">
                                @{{ firstsection.caption2.title }}
                            </h3>
                        @else
                            <h3>
                                @{{ firstsection.caption2.title }}
                            </h3>
                        @endif

                        <div class="wrap">
                            @if($logged == true)
                                <p class="thumb_ins1" contenteditable="true">
                                    @{{ firstsection.caption2.content }}
                                </p>
                            @else
                                <p class="thumb_ins1">
                                    @{{ firstsection.caption2.content }}
                                </p>
                            @endif

                            <a href="#" class="btn-link fa-angle-right"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row wow fadeIn" data-wow-duration='2s'>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="thumbnail thumb-shadow">
                    @if($logged == true)
                        <h3 contenteditable="true">
                            <img src="{{asset('img/business/page-1_img3.jpg')}}" alt="" id="img3" v-on:click="changeImage('img3','inputimg3')">
                            <input type="file" accept="image/x-png,image/gif,image/jpeg"
                                   id="inputimg3" v-model="firstsection.caption3.image" style="display: none;"
                                   v-on:change="evento(event,'img3')">
                        </h3>
                    @else
                        <img src="{{asset('img/business/page-1_img3.jpg')}}" alt="">
                    @endif
                    <div class="caption bg3">
                        @if($logged == true)
                            <h3 contenteditable="true">
                                @{{ firstsection.caption3.title }}
                            </h3>
                        @else
                            <h3>
                                @{{ firstsection.caption3.title }}
                            </h3>
                        @endif

                        <div class="wrap">
                            @if($logged == true)
                                <p contenteditable="true">
                                    @{{ firstsection.caption3.content }}
                                </p>
                            @else
                                <p>
                                    @{{ firstsection.caption3.content }}
                                </p>
                            @endif

                            <a href="#" class="btn-link fa-angle-right"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="thumbnail thumb-shadow">
                    @if($logged == true)
                        <h3 contenteditable="true">
                            <img src="{{asset('img/business/page-1_img4.jpg')}}" alt="" id="img4" v-on:click="changeImage('img4','inputimg4')">
                            <input type="file" accept="image/x-png,image/gif,image/jpeg"
                                   id="inputimg4" v-model="firstsection.caption4.image" style="display: none;"
                                   v-on:change="evento(event,'img4')">
                        </h3>
                    @else
                        <img src="{{asset('img/business/page-1_img4.jpg')}}" alt="">
                    @endif
                    <div class="caption bg-primary">
                        @if($logged == true)
                            <h3 contenteditable="true">
                                @{{ firstsection.caption4.title }}
                            </h3>
                        @else
                            <h3>
                                @{{ firstsection.caption4.title }}
                            </h3>
                        @endif

                        <div class="wrap">
                            @if($logged == true)
                                <p contenteditable="true">
                                    @{{ firstsection.caption4.content }}
                                </p>
                            @else
                                <p>
                                    @{{ firstsection.caption4.content }}
                                </p>
                            @endif

                            <a href="#" class="btn-link fa-angle-right"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="thumbnail thumb-shadow">
                    @if($logged == true)
                        <h3 contenteditable="true">
                            <img src="{{asset('img/business/page-1_img5.jpg')}}" alt="" id="img5" v-on:click="changeImage('img5','inputimg5')">
                            <input type="file" accept="image/x-png,image/gif,image/jpeg"
                                   id="inputimg5" v-model="firstsection.caption5.image" style="display: none;"
                                   v-on:change="evento(event,'img5')">
                        </h3>
                    @else
                        <img src="{{asset('img/business/page-1_img5.jpg')}}" alt="">
                    @endif
                    <div class="caption bg2">
                        @if($logged == true)
                            <h3 contenteditable="true">
                                @{{ firstsection.caption5.title }}
                            </h3>
                        @else
                            <h3>
                                @{{ firstsection.caption5.title }}
                            </h3>
                        @endif

                        <div class="wrap">
                            @if($logged == true)
                                <p contenteditable="true">
                                    @{{ firstsection.caption5.content }}
                                </p>
                            @else
                                <p>
                                    @{{ firstsection.caption5.content }}
                                </p>
                            @endif

                            <a href="#" class="btn-link fa-angle-right"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>