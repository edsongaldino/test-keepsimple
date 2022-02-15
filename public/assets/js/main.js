(function($) {

	"use strict";

	$('[data-toggle="tooltip"]').tooltip()

  })(jQuery);

  
  $(document).on('click', '.removeVehicle', function (e) {

    e.preventDefault();
    var id = $(this).data('id');
    var token = $(this).data('token');
  
        swal({
            title: "Confirma a exclusão desse veículo?",
            type: "error",
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Sim!",
            cancelButtonText: "Não",
            showCancelButton: true,
        },
        function() {
          $.ajax({
            url: '/vehicle/remove',
            method: 'POST',
            data: {
              id: id,
              "_token": token
            },
          
          success: function() {   
            swal({title: "OK", text: "Registro removido!", type: "success"},
              function(){ 
                  location.reload();
              }
            );
          },
  
          error: function() {   
            swal({title: "OPS", text: "Erro ao remover registro!", type: "warning"},
              function(){ 
                  location.reload();
              }
            );
          }
  
          });
    });
  });


  $("#VehicleBrand").change(function() {
      var brand = $(this).val();
      $.ajax({
          method: 'get',
          url: "/vehicles/getModels/" + brand,
          success: function (response) {
              $("#VehicleModels").html(response);
          }
      });
  });
