$(document).ready(function () {
  function init(){
    var tipoActividad = $('#appbundle_actividadescertificadas_tipoActividad');
    if (tipoActividad.val() > 0) {
      hideFields(tipoActividad.val());
    } else {
      tipoActividad.prop('disabled',false);
      tipoActividad.change(function() {
        hideFields($(this).val(),this);
      });
    }
  }
  init();

  function hideFields(type){
    var form = $('form[name=appbundle_actividadescertificadas]');
    var bundle = '#appbundle_actividadescertificadas_';
    switch (type) {
      case '3':
        //raleo
        form.find(bundle+`alturaPoda`).closest('div div .form-group').remove();
        form.find(bundle+`alturaPromedioPlantacion`).closest('div div .form-group').remove();
        form.find(bundle+`cantidadArbolesPodados`).closest('div div .form-group').remove();
        form.find(bundle+`alturaPromedioPlantacion`).closest('div div .form-group').remove();
        form.find(bundle+`numeroPoda`).closest('div div .form-group').remove();
        form.find(bundle+`porcentajeFallas`).closest('div div .form-group').remove();
        form.find(bundle+`turnoCorta`).closest('div div .form-group').remove();
        form.find(bundle+`riego`).closest('div div .form-group').remove();
        form.find(bundle+`edadCepa`).closest('div div .form-group').remove();
        form.find(bundle+`edadRebrote`).closest('div div .form-group').remove();
        form.find(bundle+`numeroBrotesCepas`).closest('div div .form-group').remove();
        form.find(bundle+`longitudFilas`).closest('div div .form-group').remove();
        form.find(bundle+`numeroFilas`).closest('div div .form-group').remove();
        form.find(bundle+`distanciaPlantas`).closest('div div .form-group').remove();
        form.find(bundle+`cantidadArboles`).closest('div div .form-group').remove();
        $('#appbundle_actividadescertificadas_tipoActividad').prop('disabled',true);
        break;
      case '2':
      // poda
        form.find(bundle+`densidadPrevia`).closest('div div .form-group').remove();
        form.find(bundle+`densidad`).closest('div div .form-group').remove();
        form.find(bundle+`numeroArbolesExtraidos`).closest('div div .form-group').remove();
        form.find(bundle+`porcentajeFallas`).closest('div div .form-group').remove();
        form.find(bundle+`turnoCorta`).closest('div div .form-group').remove();
        form.find(bundle+`riego`).closest('div div .form-group').remove();
        form.find(bundle+`edadCepa`).closest('div div .form-group').remove();
        form.find(bundle+`edadRebrote`).closest('div div .form-group').remove();
        form.find(bundle+`numeroBrotesCepas`).closest('div div .form-group').remove();
        form.find(bundle+`longitudFilas`).closest('div div .form-group').remove();
        form.find(bundle+`numeroFilas`).closest('div div .form-group').remove();
        form.find(bundle+`distanciaPlantas`).closest('div div .form-group').remove();
        form.find(bundle+`cantidadArboles`).closest('div div .form-group').remove();
        $('#appbundle_actividadescertificadas_tipoActividad').prop('disabled',true);
        break;
      case '1':
      //macizo
        form.find(bundle+`edadPlantacion`).closest('div div .form-group').remove();
        form.find(bundle+`dapPromedio`).closest('div div .form-group').remove();
        form.find(bundle+`densidadPrevia`).closest('div div .form-group').remove();
        form.find(bundle+`numeroArbolesExtraidos`).closest('div div .form-group').remove();
        form.find(bundle+`alturaPoda`).closest('div div .form-group').remove();
        form.find(bundle+`alturaPromedioPlantacion`).closest('div div .form-group').remove();
        form.find(bundle+`cantidadArbolesPodados`).closest('div div .form-group').remove();
        form.find(bundle+`numeroPoda`).closest('div div .form-group').remove();
        form.find(bundle+`edadCepa`).closest('div div .form-group').remove();
        form.find(bundle+`edadRebrote`).closest('div div .form-group').remove();
        form.find(bundle+`numeroBrotesCepas`).closest('div div .form-group').remove();
        form.find(bundle+`longitudFilas`).closest('div div .form-group').remove();
        form.find(bundle+`numeroFilas`).closest('div div .form-group').remove();
        form.find(bundle+`distanciaPlantas`).closest('div div .form-group').remove();
        form.find(bundle+`cantidadArboles`).closest('div div .form-group').remove();
        $('#appbundle_actividadescertificadas_tipoActividad').prop('disabled',true);
        break;
      case '6':
      //cortina
        form.find(bundle+`edadPlantacion`).closest('div div .form-group').remove();
        form.find(bundle+`dapPromedio`).closest('div div .form-group').remove();
        form.find(bundle+`densidadPrevia`).closest('div div .form-group').remove();
        form.find(bundle+`numeroArbolesExtraidos`).closest('div div .form-group').remove();
        form.find(bundle+`alturaPoda`).closest('div div .form-group').remove();
        form.find(bundle+`alturaPromedioPlantacion`).closest('div div .form-group').remove();
        form.find(bundle+`cantidadArbolesPodados`).closest('div div .form-group').remove();
        form.find(bundle+`numeroPoda`).closest('div div .form-group').remove();
        form.find(bundle+`porcentajeFallas`).closest('div div .form-group').remove();
        form.find(bundle+`densidad`).closest('div div .form-group').remove();
        form.find(bundle+`edadCepa`).closest('div div .form-group').remove();
        form.find(bundle+`edadRebrote`).closest('div div .form-group').remove();
        form.find(bundle+`numeroBrotesCepas`).closest('div div .form-group').remove();
        $('#appbundle_actividadescertificadas_tipoActividad').prop('disabled',true);
        break;
      case '4':
      //manejoRebrote
        form.find(bundle+`edadPlantacion`).closest('div div .form-group').remove();
        form.find(bundle+`dapPromedio`).closest('div div .form-group').remove();
        form.find(bundle+`densidadPrevia`).closest('div div .form-group').remove();
        form.find(bundle+`numeroArbolesExtraidos`).closest('div div .form-group').remove();
        form.find(bundle+`alturaPoda`).closest('div div .form-group').remove();
        form.find(bundle+`alturaPromedioPlantacion`).closest('div div .form-group').remove();
        form.find(bundle+`cantidadArbolesPodados`).closest('div div .form-group').remove();
        form.find(bundle+`numeroPoda`).closest('div div .form-group').remove();
        form.find(bundle+`densidad`).closest('div div .form-group').remove();
        form.find(bundle+`porcentajeFallas`).closest('div div .form-group').remove();
        form.find(bundle+`turnoCorta`).closest('div div .form-group').remove();
        form.find(bundle+`riego`).closest('div div .form-group').remove();
        form.find(bundle+`longitudFilas`).closest('div div .form-group').remove();
        form.find(bundle+`numeroFilas`).closest('div div .form-group').remove();
        form.find(bundle+`distanciaPlantas`).closest('div div .form-group').remove();
        form.find(bundle+`cantidadArboles`).closest('div div .form-group').remove();
        $('#appbundle_actividadescertificadas_tipoActividad').prop('disabled',true);
        break;
      case '5':
      // enriquecimientoBN
        form.find(bundle+`edadPlantacion`).closest('div div .form-group').remove();
        form.find(bundle+`dapPromedio`).closest('div div .form-group').remove();
        form.find(bundle+`densidadPrevia`).closest('div div .form-group').remove();
        form.find(bundle+`numeroArbolesExtraidos`).closest('div div .form-group').remove();
        form.find(bundle+`alturaPoda`).closest('div div .form-group').remove();
        form.find(bundle+`alturaPromedioPlantacion`).closest('div div .form-group').remove();
        form.find(bundle+`cantidadArbolesPodados`).closest('div div .form-group').remove();
        form.find(bundle+`numeroPoda`).closest('div div .form-group').remove();
        form.find(bundle+`porcentajeFallas`).closest('div div .form-group').remove();
        form.find(bundle+`turnoCorta`).closest('div div .form-group').remove();
        form.find(bundle+`riego`).closest('div div .form-group').remove();
        form.find(bundle+`edadCepa`).closest('div div .form-group').remove();
        form.find(bundle+`edadRebrote`).closest('div div .form-group').remove();
        form.find(bundle+`numeroBrotesCepas`).closest('div div .form-group').remove();
        form.find(bundle+`longitudFilas`).closest('div div .form-group').remove();
        form.find(bundle+`numeroFilas`).closest('div div .form-group').remove();
        form.find(bundle+`cantidadArboles`).closest('div div .form-group').remove();
        form.find(bundle+`distanciaPlantas`).closest('div div .form-group').remove();
        form.find(bundle+`cantidadArboles`).closest('div div .form-group').remove();
        $('#appbundle_actividadescertificadas_tipoActividad').prop('disabled',true);
        break;
      default:
    }
  }
});
