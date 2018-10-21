var app = new Vue({
    el: '#app',
    data: {
        header:{
            telefono: '(311) 2141926 ',
            horario: ' 9am-6pm  Lunes-Viernes; 9am-2pm Sabado'
        },
        firstsection:{
            caption1:{
                title: ' Excelente servicio',
                content: 'Contamos con asesores profesionales, dispuestos a superar sus expectativas.',
                image: ''
            },
            caption2:{
                title: 'Soluciones a la medida',
                content: 'Nos adaptamos a las necesidades de su negocio.',
                image: ''
            },
            caption3:{
                title: 'Experiencia',
                content: 'Mas de 10 años de experiencia y nuestros clientes nos avalan.',
                image: ''
            },
            caption4:{
                title: 'Disponibilidad',
                content: 'Contamos con multiples oficinas para atenderlo.',
                image: ''
            },
            caption5:{
                title: 'Investigación',
                content: 'Estamos al dia con la nueva manera de trabajo del SAT.',
                image: ''
            }
        },
        secondsection:{
            empresa: 'MONTES BUENO Y ASOCIADOS',
            mensaje: 'La Organización está dirigida a Personas Físicas, Morales y Sociedades Independientemente al Giro que realicen.'
                 +'   Nuestra razón de ser  es brindar  asesoría a las pequeñas, medianas y grandes empresas en nuestro país en materia fiscal, contable y financiera, es por eso que MONTES BUENO Y ASOCIADOS SC se interesa en ofrecer  los mejores servicios en el Estado Nayarit y Puerto Vallarta, Jalisco, contando con profesionales con una amplia experiencia.'
        },
        thirdsection:{
            servicio1: 'Impuestos',
            servicio2: 'Defensa Fiscal',
            servicio3: 'Contabilidad y Nominas',
            servicio4: 'Aseoría Corporativa',
            image:''
        }
    },
    methods: {
        actualizar: function () {

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

    }
});