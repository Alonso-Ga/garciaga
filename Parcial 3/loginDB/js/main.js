$(function() {

    $('.btn-link[aria-expanded="true"]').closest('.accordion-item').addClass('active');
  $('.collapse').on('show.bs.collapse', function () {
	  $(this).closest('.accordion-item').addClass('active');
	});

  $('.collapse').on('hidden.bs.collapse', function () {
	  $(this).closest('.accordion-item').removeClass('active');
	});

    $(document).ready(function()
 {
          $("#Verificacion").click(function()
					{
            var usuario=$('#username').val();
            var contrasena=$('#password').val();

            if( usuario='Alonsolabile' && contrasena=='1234') 
            {
						$('.modal-body').html("Bienvenido PanaParce");
            $('#Modal').modal('show');
					 }
            else 
					 {
              $('.modal-body').html("Ingrese las credenciales correctas");
              $('#myModal').modal('show');
           }
             });
         });

});