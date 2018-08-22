$(document).ready(function () {
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
});
