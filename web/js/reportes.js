(function() {
  $(document).ready(function() {
  $("#reportes_provincia").change(function() {
      $("#reportes_departamento").prop('disabled', true);
      $("#reportes_departamento").empty();
      $("#reportes_departamento").append($("<option />"));
      if ($("#reportes_provincia").val()) {
        return $.ajax({
          url: "/division_administrativa/" + $("#reportes_provincia").val() + "/departamentos.json"
        }).done(function(data) {
          var departamento, _i, _len, _ref;
          _ref = $(data);
          for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            departamento = _ref[_i];
            $("#reportes_departamento").append($("<option />").val(departamento.id).text(departamento.nombre));
          }
          return $("#reportes_departamento").prop('disabled', false);
        });
      } else {
        return $("#reportes_departamento").prop('disabled', false);
      }
    });

    var provincia = ($('#data').data('provincia')? '/' + $("#data").data("provincia"):'/'+0);
    var departamento = ($('#data').data('departamento'))? '/' + $("#data").data("departamento"):'/'+0;
    var anio = ($('#data').data('anio')? '/' + $("#data").data("anio"):'/'+0);
    var url = provincia + departamento + anio;
    $.ajax({
      url: "/reportes/superficies_expediente"+url
    }).done(function(data) {
      if (data) {
        var ctx = document.getElementById("superficieHa");
        var myChart = new Chart(ctx, {
          type: 'bar',
          data: data,
          options: {
                legend: {
                    display: false
                }
            }
        });
      }
    });
    $.ajax({
      url: "/reportes/tipos_actividad"+url
    }).done(function(data) {
      if (data) {
        var ctx = document.getElementById("tiposActividades");
        var myChart = new Chart(ctx, {
          type: 'pie',
          data: data,
        });
      }
    });
  });
}).call(this);
