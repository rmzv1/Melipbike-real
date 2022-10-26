$(function(){

  $('.imagen').click(function(){
      var imagen1=$(this).attr('src');
      var descripcion=$(this).attr('alt');
        $('.recibir-imagen').attr('src',imagen1);
        $('.descripcion-imagen').text(descripcion);
        $('#exampleModal').modal();
    
  })

});


  

  $(function(){
    $('.bici').on('click', function(){
        $('#bicicletas').modal;
        var ruta_imagen = $(this).attr('src');
        $('#imagen-modal').attr('src', ruta_imagen);
    });

    $('#bicicletas').on('click', function(){
        $('#bicicletas').modal('hide');
    })
})