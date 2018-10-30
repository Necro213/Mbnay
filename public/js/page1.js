var app = new Vue({
    el: '#app',
    data: {
        header:{
            telefono: '',
            horario: ''
        },
        firstsection:{
            caption1:{
                title: '',
                content: '',
                image: ''
            },
            caption2:{
                title: '',
                content: '',
                image: ''
            },
            caption3:{
                title: '',
                content: '',
                image: ''
            },
            caption4:{
                title: '',
                content: '',
                image: ''
            },
            caption5:{
                title: '',
                content: '',
                image: ''
            }
        },
        secondsection:{
            empresa: '',
            mensaje: ''
        },
        thirdsection:{
            servicio1: '',
            servicio2: '',
            servicio3: '',
            servicio4: '',
            image:''
        }
    },
    methods: {
        actualizar: function () {
            this.header.telefono = $('#telefono').text();
            this.header.horario = $('#horario').text();

            this.firstsection.caption1.title = $('#c1title').text();
            this.firstsection.caption1.content = $('#c1content').text();

            this.firstsection.caption1.title = $('#c2title').text();
            this.firstsection.caption1.content = $('#c2content').text();

            this.firstsection.caption1.title = $('#c3title').text();
            this.firstsection.caption1.content = $('#c3content').text();

            this.firstsection.caption1.title = $('#c4title').text();
            this.firstsection.caption1.content = $('#c4content').text();

            this.firstsection.caption1.title = $('#c5title').text();
            this.firstsection.caption1.content = $('#c5content').text();

            this.secondsection.empresa = $('#empresa').text();
            this.secondsection.empresa = $('#mensaje').text();

            this.thirdsection.servicio1 = $('#srv1').text();
            this.thirdsection.servicio2 = $('#srv2').text();
            this.thirdsection.servicio3 = $('#srv3').text();
            this.thirdsection.servicio4 = $('#srv4').text();

            data = {'head': this.header, 'firstsection': this.firstsection, 'secondsection': this.secondsection, 'thirdsection': this.thirdsection};
            $.ajax({
                url:document.location.protocol+'//'+document.location.host+"/admin/page1/update",
                type:"POST",
                data: data,
                //contentType:false,
                //processData: false,
            }).done(function(json){
                alert(json.msg);
            }).fail(function(){

            });
        },
        changeImage: function (img, input) {
            $('#' + input).trigger('click');
        },
        evento:function (e,img) {
            e = e || window.event;
            var target = e.target || e.srcElement;

            var reader = new FileReader();
            reader.readAsDataURL(target.files[0]);
            reader.onload = function () {
                $('#'+img).attr('src',reader.result);
                //console.log(reader.result);
            };



        }
    },
    created(){
        $.ajax({
            url:document.location.protocol+'//'+document.location.host+""  +"/page1/data",
            type:"GET",
            //data: data,
            //contentType:false,
            //processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        }).done(function(json){
            app.$data.header.telefono = json.telefono;
            app.$data.header.horario = json.horario;
            app.$data.firstsection.caption1.title = json.FSC1title;
            app.$data.firstsection.caption1.content = json.FSC1content;
            //app.$data.firstsection.caption1.image = json.FSC1image;

            app.$data.firstsection.caption2.title = json.FSC2title;
            app.$data.firstsection.caption2.content = json.FSC2content;
            //app.$data.firstsection.caption2.image = json.FSC2image;

            app.$data.firstsection.caption3.title = json.FSC3title;
            app.$data.firstsection.caption3.content = json.FSC3content;
            //app.$data.firstsection.caption3.image = json.FSC3image;

            app.$data.firstsection.caption4.title = json.FSC4title;
            app.$data.firstsection.caption4.content = json.FSC4content;
            //app.$data.firstsection.caption4.image = json.FSC4image;

            app.$data.firstsection.caption5.title = json.FSC5title;
            app.$data.firstsection.caption5.content = json.FSC5content;
            //app.$data.firstsection.caption5.image = json.FSC5image;

            app.$data.secondsection.empresa = json.SSempresa;
            app.$data.secondsection.mensaje = json.SSmensaje;

            app.$data.thirdsection.servicio1 = json.TSservice1;
            app.$data.thirdsection.servicio2 = json.TSservice2;
            app.$data.thirdsection.servicio3 = json.TSservice3;
            app.$data.thirdsection.servicio4 = json.TSservice4;
            //app.$data.thirdsection.image = json.TSimage;


        }).fail(function(){

        });

    }
});