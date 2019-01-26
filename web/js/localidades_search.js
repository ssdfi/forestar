(function() {
  $(document).ready(function() {
    $(".modal").on("shown.bs.modal", function() {
      if ($(".modal-backdrop").length > 1) {
        $(".modal-backdrop").not(':first').remove();
      }
    })

    $('.modal').on('hidden.bs.modal', function () {
      $(this).find('form').trigger('reset');
    });

    $(document).on( "click",'.add-localidad',function (e) {
      e.preventDefault();
      var id = $(this).data('id');
      $('#localidades-modal').data('id',id);
      return;
    });

    $('#localidades-modal').on('shown.bs.modal', function() {
      $.ajax({
          type: 'get',
          url: '/division_administrativa/provincias.json',
          data: $(this).serialize()
        })
        .done(function(data) {
          var $provincias = $('#provincias');
          $provincias.empty();
          $provincias.append('<option id="" value=""> </option>');
          for (var i = 0; i < data.length; i++) {
            $provincias.append('<option id=' + data[i].id + ' value=' + data[i].id + '>' + data[i].nombre + '</option>');
          }
          return $provincias;
        });
    })

    $("#provincias").change(function() {
      var id = $(this).children(":selected").attr("id");
      $.ajax({
          type: 'get',
          url: '/division_administrativa/localidades.json?idProv='+id,
          data: $(this).serialize()
        })
        .done(function(data) {
          var localidad, _i, _len, _ref, _ref1, _ref2, _results;
          $("#localidades-list tbody").empty();
          _ref = $(data);
          _results = [];
          for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            localidad = _ref[_i];
            _results.push($("#localidades-list tbody")
              .append($('<tr></tr>')
                .append($("<td><input type='radio' name='localidad' value='" + localidad.id + "' id='localidad-" + localidad.id + "'></td>"))
                .append($('<td>' + localidad.nombre + '</td>'))
                .append($('<td>' + ((_ref2 = localidad.codigoPostal) != null ? _ref2 : '') + '</td>'))
                .append($('<td>' + ((_ref1 = localidad.cuit) != null ? _ref1 : '') + '</td>'))));
          }
        });
    });

    /* Ejecuta la peticion ajax */
    $("#localidades-modal form").submit(function() {
      var localidad = $('#localidad').val();
      $.ajax({
          type: $(this).attr('method'),
          url: $(this).attr('action'),
          data: $(this).serialize()
        })
        .done(function(data) {
          var localidad, _i, _len, _ref, _ref1, _ref2, _results;
          $("#localidades-list tbody").empty();
          _ref = $(data);
          _results = [];
          for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            localidad = _ref[_i];
            _results.push($("#localidades-list tbody")
              .append($('<tr></tr>')
                .append($("<td><input type='radio' name='localidad' value='" + localidad.id + "' id='localidad-" + localidad.id + "'></td>"))
                .append($('<td>' + localidad.nombre + '</td>'))
                .append($('<td>' + ((_ref2 = localidad.codigoPostal) != null ? _ref2 : '') + '</td>'))));
          }
          return _results;
          //  });
        });
      return false;
    });

    $("#localidades-modal-add").click(function() {
      var localidad, _i, _len, _ref;
      var id = $('#localidades-modal').data('id');
      _ref = $("#localidades-list input:checked");
      for (_i = 0, _len = _ref.length; _i < _len; _i++) {
        localidad = _ref[_i];
        $("#appbundle_titulares_domicilios_"+id+"_localidad_id").val(localidad.value);
        $("#appbundle_titulares_domicilios_"+id+"_localidad").val($($(localidad).parent().siblings()[0]).text());
        $("#appbundle_titulares_domicilios_"+id+"_codigoPostal").val($($(localidad).parent().siblings()[1]).text());
      }
      // $("#localidades-modal").empty();
      $(".modal-backdrop").remove();
      return $("#localidades-modal").modal('hide');
    });

    return $("form").submit(function() {
      $("#appbundle_expedientes_localidades option").prop('selected', true);
      return $("#appbundle_expedientes_localidades option").prop('selected', true);
    });
  });
}).call(this);
