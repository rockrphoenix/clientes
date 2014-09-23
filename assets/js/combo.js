$(document).ready(function(){

    //autocomplete codigo postal
    $(function () {
        $("#advanced_search_module_country").autocomplete({
            source: '../clases/class.listar.php',
            select: function(event,ui){
                var contenido= ui.item.value.split(',');
                $("#advanced_search_module_location").val(contenido[1]);
               
                setTimeout(function(){$("#advanced_search_module_country").val(contenido[0])},100);
            }
        });
    });
});