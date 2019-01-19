(function() {
  $(document).ready(function() {

    toggleAgriculturaFamiliar($('#appbundle_titulares_agriculturaFamiliar').bootstrapSwitch('state'));
    toggleRows($('#appbundle_titulares_personeria').val());
    toggleComunidadIndigena($('#appbundle_titulares_comunidadIndigena').bootstrapSwitch('state'));

    $( "#appbundle_titulares_personeria" ).change(function() {
       toggleRows(this.value);
    });

    $("#appbundle_titulares_agriculturaFamiliar").on('switchChange.bootstrapSwitch', function (event, state) {
      toggleAgriculturaFamiliar(state);
    });

    $("#appbundle_titulares_comunidadIndigena").on('switchChange.bootstrapSwitch', function (event, state) {
      toggleComunidadIndigena(state);
    });

    function toggleRows(type){
      $("[tipo-personeria]").each(function() {
        if (type == 'Jurídica') {
          $("[tipo-personeria='Física']").parent().closest('.form-group').hide();
          $(this).parent().closest('.form-group').show();
          toggleAgriculturaFamiliar(false);
        }
        if (type == 'Física') {
          $("[tipo-personeria='Jurídica']").parent().closest('.form-group').hide();
          $(this).parent().closest('.form-group').show();
          toggleComunidadIndigena(false);
        }
      });
    }

    function toggleAgriculturaFamiliar(state){
      if (state == true) {
        $('#appbundle_titulares_nroRenaf').closest('.form-group').show();
      } else {
        $('#appbundle_titulares_agriculturaFamiliar').val('');
        $('#appbundle_titulares_nroRenaf').closest('.form-group').hide();
        $('#appbundle_titulares_nroRenaf').val('');
      }
    }

    function toggleComunidadIndigena(state){
      if (state === true) {
        $('#appbundle_titulares_tipoComunidadIndigena').closest('.form-group').show();
        $('#appbundle_titulares_renaciRenoaf').closest('.form-group').show();
      } else {
        $('#appbundle_titulares_tipoComunidadIndigena').closest('.form-group').hide();
        $('#appbundle_titulares_renaciRenoaf').closest('.form-group').hide();
        $('#appbundle_titulares_comunidadIndigena').val('');
        $('#appbundle_titulares_tipoComunidadIndigena').val('');
        $('#appbundle_titulares_renaciRenoaf').val('');
      }
    }
  });
}).call(this);
