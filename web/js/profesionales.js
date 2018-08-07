(function() {
  $(document).ready(function() {
    $(".modal").on("shown.bs.modal", function () {
        if ($(".modal-backdrop").length > 1) {
            $(".modal-backdrop").not(':first').remove();
        }
      })

    /* Ejecuta la peticion ajax */
    $("#profesionales-modal form").submit(function() {
      $.ajax({
          type: $(this).attr('method'),
          url: $(this).attr('action'),
          data: $(this).serialize()
        })
        .done(function(data) {
          var titular, _i, _len, _ref, _ref1, _ref2, _results;
          $("#profesionales-list tbody").empty();
          _ref = $(data);
          _results = [];
          for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            titular = _ref[_i];
            _results.push($("#profesionales-list tbody")
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

    $("#profesionales-modal-add").click(function() {
      var profesional, _i, _len, _ref;
      _ref = $("#profesionales-list input:checked");
      for (_i = 0, _len = _ref.length; _i < _len; _i++) {
        profesional = _ref[_i];
        $("#appbundle_expedientes_profesional_cargo_id").val(profesional.value);
        $("#appbundle_expedientes_profesionalCargo").val($($(profesional).parent().siblings()[0]).text());
      }
      $(".modal-backdrop").remove();
      return $("#profesionales-modal").modal('hide');
    });

  });
}).call(this);
