(function() {
  $(document).ready(function() {
    $(".modal").on("shown.bs.modal", function () {
          if ($(".modal-backdrop").length > 1) {
              $(".modal-backdrop").not(':first').remove();
          }
      })

    /* Ejecuta la peticion ajax */
    $("#representante-legal-modal form").submit(function() {
      $.ajax({
          type: $(this).attr('method'),
          url: $(this).attr('action'),
          data: $(this).serialize()
        })
        .done(function(data) {
          var titular, _i, _len, _ref, _ref1, _ref2, _results;
          $("#representante-legal-list tbody").empty();
          _ref = $(data);
          _results = [];
          for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            titular = _ref[_i];
            _results.push($("#representante-legal-list tbody")
              .append($('<tr></tr>')
                .append($("<td><input type='radio' name=representantes-legales-radios' value='" + titular.id + "' id='titular-" + titular.id + "'></td>"))
                .append($('<td>' + titular.apellidoNombre + '</td>'))
                .append($('<td>' + ((_ref2 = titular.documento) != null ? _ref2 : '') + '</td>'))
                .append($('<td>' + ((_ref1 = titular.cuit) != null ? _ref1 : '') + '</td>'))));
          }
          return _results;
        });
      return false;
    });

    $("#representante-legal-modal-add").click(function() {
      var representanteLegal, _i, _len, _ref;
      _ref = $("#representante-legal-list input:checked");
      for (_i = 0, _len = _ref.length; _i < _len; _i++) {
        representanteLegal = _ref[_i];
        $("#appbundle_expedientes_representante_legal_id").val(representanteLegal.value);
        $("#appbundle_expedientes_representanteLegal").val($($(representanteLegal).parent().siblings()[0]).text());
      }
      $(".modal-backdrop").remove();
      return $("#representante-legal-modal").modal('hide');
    });

    // return $("form").submit(function() {
    //   $("#appbundle_expedientes_titulares option").prop('selected', true);
    //   return $("#appbundle_expedientes_titulares option").prop('selected', true);
    // });
  });
}).call(this);
