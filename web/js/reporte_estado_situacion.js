(function() {
  $(document).ready(function() {
    $("#division_administrativa_provincia").change(function() {
      var id = $(this).children(":selected").attr("value");
      if (id){
        $.ajax({
          type: 'get',
          url: '/division_administrativa/'+id+'/departamentos.json',
          data: $(this).serialize()
        })
        .done(function(data) {
          var $departamentos = $('#division_administrativa_departamento');
          $departamentos.empty();
          $departamentos.append('<option id="" value=""> </option>');
          for (var i = 0; i < data.length; i++) {
            $departamentos.append('<option id=' + data[i].id + ' value=' + data[i].id + '>' + data[i].nombre + '</option>');
          }
          return $departamentos;
        });
      } else {
        var $departamentos = $('#division_administrativa_departamento');
        $departamentos.empty();
      }
    });
  });
}).call(this);
