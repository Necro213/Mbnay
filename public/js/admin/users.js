$(function () {

    $(document).ready(function() {
        $('#userTable').DataTable( {
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": document.location.protocol+'//'+document.location.host+""  +"/admin/user/all",
                "type": "GET"
            },
            "columns": [
                { "data": "nombre" },
                { "data": "ape_paterno" },
                { "data": "ape_materno" },
                { "data": "email" },
                { "data": function () {
                    str = "<div>" +
                        "<button class='btn btn-warning btn-sm'>Editar</button>" +
                        "<button class='btn btn-danger btn-sm'>Eliminar</button>" +
                        "</div>";
                    return str;
                }}
            ]
        } );
    } );

    $('#guardar').on('click',function () {
        if($('#pass').val() != $('#confirm').val()){
            window.alert('Las contraseñas no coinciden');
            return;
        }
        var data = new FormData(document.getElementById("userForm"));
        $.ajax({
            url:document.location.protocol+'//'+document.location.host+""  +"/admin/user/register",
            type:"POST",
            data: data,
            contentType:false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        }).done(function(json){
            if(json.code == 200) {
                window.alert(json.msg);
                $('#userTable').dataTable().api().ajax.reload(null,false);
            }else{
                window.alert("Ocurrio un error en el servidor mensaje: \n"+json.msg);
            }
        }).fail(function(){

        });
    });

});