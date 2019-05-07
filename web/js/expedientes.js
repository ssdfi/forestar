(function() {
  $(document).ready(function() {
    /* Elimina los titulares seleccionados */
    $("#remove-titular").click(function() {
      var titular, _i, _len, _ref, _results;
      _ref = $("#appbundle_expedientes_titulares option:selected");
      _results = [];
      for (_i = 0, _len = _ref.length; _i < _len; _i++) {
        titular = _ref[_i];
        _results.push(titular.remove());
      }
      return _results;
    });

    /* Elimina el profesional seleccionado */
    $("#remove-profesional").click(function() {
      $("#appbundle_expedientes_profesionalCargo").val('');
      return $("#appbundle_expedientes_profesional_cargo_id").val('');
    });

    /* Elimina el representante legal seleccionado */
    $("#remove-representante-legal").click(function() {
      $("#appbundle_expedientes_representanteLegal").val('');
      return $("#appbundle_expedientes_representante_legal_id").val('');
    });
    $('button[type=submit]').click(function(){
      $('.tab-pane input, .tab-pane textarea').on('invalid', function(){

       // Find the tab-pane that this element is inside, and get the id
       var $closest = $(this).closest('.tab-pane');
       var id = $closest.attr('id');

       // Find the link that corresponds to the pane and have it show
       $('.nav a[href="#' + id + '"]').tab('show');

    });
    });
  });
}).call(this);
