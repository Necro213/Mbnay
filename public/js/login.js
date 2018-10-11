$(function () {
   $('#sesion').on('click',function () {
       var data = new FormData(document.getElementById("loginForm"));
       $.ajax({
           url:document.location.protocol+'//'+document.location.host+""  +"/dologin",
           type:"POST",
           data: data,
           contentType:false,
           processData: false,
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
       }).done(function(json){
           if(json.code == 200) {
               swal({
                   type: 'success',
                   title: 'Bienvenido',
                   text: '',
               }).then(function () {
                   window.location.replace(document.location.protocol+'//'+document.location.host+"/admin");
               });
           }else{
               window.alert("Ocurrio un error en el servidor mensaje: \n"+json.msg);
           }
       }).fail(function(){

       });
   });
});