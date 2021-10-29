var btn = document.getElementById('btn_cargar_usuarios');
var loader = document.getElementById('loader');

btn.addEventListener('click',()=>{

    $(document).ready(function() {
        $('#tabla').DataTable( {
            "ajax":{
                "url":"php/leer-usuarios.php",
                "dataSrc":""
            },
            "columns":[
                {"data":"idCalibracion"},
                {"data":"calibreCave"},
                {"data":"tipoCali"},
                {"data":"variedad"},
                {"data":"codigoCali"}
            ]
        });
    
    });

});