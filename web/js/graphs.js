(function() {
  $(document).ready(function() {
    $.ajax({
      url: "/reportes/ingresos_expedientes"
    }).done(function(data) {
      if (data) {
        var ctx = document.getElementById("myChart");
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
      url: "/reportes/area_expediente"
    }).done(function(data) {
      if (data) {
        var oilCanvas = document.getElementById("oilChart");
        var pieChart = new Chart(oilCanvas, {
          type: 'pie',
          data: data
        });
      }
    });

  });
}).call(this);
