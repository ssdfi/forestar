(function() {
  $(document).ready(function() {
    $(".modal").on("shown.bs.modal", function () {
          if ($(".modal-backdrop").length > 1) {
              $(".modal-backdrop").not(':first').remove();
          }
      })

    $("#appbundle_expedientes_titulares").click(function(){
      window.open('../../titulares/'+$(this).val(), '_blank');
    });
    /* Ejecuta la peticion ajax */
    $("#titulares-modal form").submit(function() {
      $.ajax({
          type: $(this).attr('method'),
          url: $(this).attr('action'),
          data: $(this).serialize()
        })
        .done(function(data) {
          //$("#titulares-modal form").on("ajax:success", function(e, data, status, xhr) {
          var titular, _i, _len, _ref, _ref1, _ref2, _results;
          $("#titulares-list tbody").empty();
          _ref = $(data);
          _results = [];
          for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            titular = _ref[_i];
            _results.push($("#titulares-list tbody")
              .append($('<tr></tr>')
                .append($("<td><input type='checkbox' value='" + titular.id + "' id='titular-" + titular.id + "'></td>"))
                .append($('<td>' + titular.apellidoNombre + '</td>'))
                .append($('<td>' + ((_ref2 = titular.documento) != null ? _ref2 : '') + '</td>'))
                .append($('<td>' + ((_ref1 = titular.cuit) != null ? _ref1 : '') + '</td>'))));
          }
          return _results;
          //  });
        });
      return false;
    });

    $("#titulares-modal-add").click(function() {
      var titular, _i, _len, _ref;
      _ref = $("#titulares-list input:checked");
      for (_i = 0, _len = _ref.length; _i < _len; _i++) {
        titular = _ref[_i];
        $("#appbundle_expedientes_titulares").append((function() {
        })(), $("<option value='" + titular.value + "'>" + $($(titular).parent().siblings()[0]).text() + "</option>"));
      }
      $(".modal-backdrop").remove();
      return $("#titulares-modal").modal('hide');
    });

    return $("form").submit(function() {
      $("#appbundle_expedientes_titulares option").prop('selected', true);
      return $("#appbundle_expedientes_titulares option").prop('selected', true);
    });
  });
}).call(this);
