(function() {
  $(document).ready(function() {
    $(".modal").on("shown.bs.modal", function () {
          if ($(".modal-backdrop").length > 1) {
              $(".modal-backdrop").not(':first').remove();
          }
      });

    $(document).on( "click",'.remove-titular-agrupado',function (e) {
      e.preventDefault();
      name = $(this).closest('button').attr('data-name');
      $("#"+name+"titular_agrupado_id").val('');
      $("#"+name+"titularAgrupado").val('');
      return true;
    });

    $(document).on( "click",'.add-titular-agrupado',function (e) {
      e.preventDefault();
      $('.titular-agrupado-modal').attr('data-name',$(this).data('name'));
      return;
    });

    /* Ejecuta la peticion ajax */
    $("#titular-agrupado-modal form").submit(function() {
      $.ajax({
          type: $(this).attr('method'),
          url: $(this).attr('action'),
          data: $(this).serialize()
        })
        .done(function(data) {
          var titular, _i, _len, _ref, _ref1, _ref2, _results;
          $("#titulares-agrupados-list tbody").empty();
          _ref = $(data);
          _results = [];
          for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            titular = _ref[_i];
            _results.push($("#titulares-agrupados-list tbody")
              .append($('<tr></tr>')
                .append($("<td><input type='radio' name=titulares-agrupados-radios' value='" + titular.id + "' id='titular-" + titular.id + "'></td>"))
                .append($('<td>' + titular.apellidoNombre + '</td>'))
                .append($('<td>' + ((_ref2 = titular.documento) != null ? _ref2 : '') + '</td>'))
                .append($('<td>' + ((_ref1 = titular.cuit) != null ? _ref1 : '') + '</td>'))));
          }
          return _results;
        });
      return false;
    });

    $("#titular-agrupado-modal-add").click(function() {
      var titular, _i, _len, _ref, name, index;
      _ref = $("#titulares-agrupados-list input:checked");
      for (_i = 0, _len = _ref.length; _i < _len; _i++) {
        titular = _ref[_i];
        name = $('.titular-agrupado-modal').attr('data-name');
        $('#'+name+'titular_agrupado_id').val(titular.value);
        $('#'+name+'titularAgrupado').val($($(titular).parent().siblings()[0]).text());
      }
      $(".modal-backdrop").remove();
      // $('form#agrupado-modal')[0].reset();
      $("#titulares-agrupados-list tbody").empty();
      return $("#titular-agrupado-modal").modal('hide');
    });

    return $("form").submit(function() {
      $("#appbundle_expedientes_titulares option").prop('selected', true);
      return $("#appbundle_expedientes_titulares option").prop('selected', true);
    });
  });
}).call(this);
