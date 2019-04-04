$(document).ready(function() {
  $('[data-modal="item"]').click(function(e) {
    $('#' + modalName).on('hidden.bs.modal', function() {
      $(this).find('form').trigger('reset');
    });
    var id = $(this).data('id');
    var type = $(this).data('type');
    var modalName = $(this).data('modal-name');
    $.ajax({
      type: "GET",
      url: id + '/' + type + '/create',
      beforeSend: function() {
        $('.wait').show();
      },
      complete: function() {
        $('.wait').hide();
      },
      success: function(data) {
        $('#' + modalName).modal('show');
        $('#' + modalName + " .modal-dialog .modal-body").html(data);
        $('#' + modalName + " .modal-dialog .modal-body").find('.combobox').combobox();
        $("input[data-label]").each(function() {
            $(this).bootstrapSwitch({
                labelText: this.dataset.label,
                onText: "SI",
                offText: "NO"
            });
        });
      }
    });
  });

  $('.saveItem').on('click', function(e) {
    e.preventDefault();
    var id = $(this).data('id');
    var formName = $(this).data('form-name');
    $('input, select').prop('disabled', false);
    $('div[class="form-group has-error"]').removeClass('has-error');
    $('.help-block').remove();
    $('.wait').show();
    var data = $('form[id=form_' + formName + ']').serializeArray();
    $.ajax({
      type: "POST",
      headers: { 'content-type': 'application/x-www-form-urlencoded' },
      url: id + '/' + formName + '/create',
      data: data,
      dataType: 'json',
      success: function(response) {
        document.location.reload(true)
      },
      error: function(jqXHR) {
        $('.wait').hide();
        $.each(jqXHR.responseJSON.errors, function(k, v) {
          errorsText = "";
          if ((v) && (v.length > 0)) {
            $.each(v, function(n, errorText) {
              errorsText += errorText;
            });
            $('form[id=form_' + formName + '] #appbundle_' + formName + '_' + k).closest('div[class="form-group"]').addClass('has-error');
            $('form[id=form_' + formName + '] #appbundle_' + formName + '_' + k).closest('div').append("<span class='help-block'>" + errorsText + "</span>");
          } else {
            $('form[id=form_' + formName + '] #appbundle_' + formName + '_' + k).closest('div[class="form-group has-error"]').removeClass('has-error');
            $('form[id=form_' + formName + '] #appbundle_' + formName + '_' + k).tooltip('destroy');
          }
        });
      }
    });
    return false;
  });

  $('[data-modal="editItem"]').click(function(e) {
    var modalName = $(this).data('modal-name');
    var id = $(this).data('id');
    var itemId = $(this).data('item');
    var type = $(this).data('type');
    $('#' + modalName).on('hidden.bs.modal', function() {
      $(this).find('form').trigger('reset');
    });
    $('#' + modalName + " .modal-dialog .modal-header").html('<h4 class="modal-title w-100 font-weight-bold">Editar</h4>');
    $('#' + modalName + " .modal-dialog .modal-footer").html('<' +
      'button class = "btn btn-indigo saveEditItem"' +
      'data-formname = "' + type + '"' +
      'data-id = "' + id + '" data-item="' + itemId + '"> Guardar <i class = "fa fa-save ml-1" > </i></button > ').trigger('create');
    $(".saveEditItem").on("click", function(e) {
      e.preventDefault();
      saveEditItem(this);
    });
    var url = (type === 'expediente') ? id + '/' + type + '/edit' : id + '/' + type + '/' + itemId + '/edit';
    $.ajax({
      type: "GET",
      url: url,
      beforeSend: function() {
        $('.wait').show();
      },
      complete: function() {
        $('.wait').hide();
      },
      success: function(data) {
        $('#' + modalName).modal('show');
        $('#' + modalName + " .modal-dialog .modal-body").html(data);
        $('#' + modalName + " .modal-dialog .modal-body").find('.combobox').combobox();
        $("input[data-label]").each(function() {
            $(this).bootstrapSwitch({
                labelText: this.dataset.label,
                onText: "SI",
                offText: "NO"
            });
        });
      }
    });

  });

  function saveEditItem(item) {
    var id = $(item).data('id');
    var itemId = $(item).data('item');
    var formName = $(item).data('formname');
    $('input, select').prop('disabled', false);
    $('div[class="form-group has-error"]').removeClass('has-error');
    $('.help-block').remove();
    $('.wait').show();
    var data = $('form[id=form_' + formName + ']').serializeArray();
    var url = (formName === 'expediente') ? id + '/' + formName + '/edit' : id + '/' + formName + '/' + itemId + '/edit';
    $.ajax({
      type: "POST",
      headers: { 'content-type': 'application/x-www-form-urlencoded' },
      url: url,
      data: data,
      dataType: 'json',
      success: function(response) {
        document.location.reload(true);
      },
      error: function(jqXHR) {
        $('.wait').hide();
        $.each(jqXHR.responseJSON.errors, function(k, v) {
          errorsText = "";
          if ((v) && (v.length > 0)) {
            $.each(v, function(n, errorText) {
              errorsText += errorText;
            });
            $('form[id=form_' + formName + '] #appbundle_' + formName + '_' + k).closest('div[class="form-group"]').addClass('has-error');
            $('form[id=form_' + formName + '] #appbundle_' + formName + '_' + k).closest('div').append("<span class='help-block'>" + errorsText + "</span>");
          } else {
            $('form[id=form_' + formName + '] #appbundle_' + formName + '_' + k).closest('div[class="form-group has-error"]').removeClass('has-error');
            $('form[id=form_' + formName + '] #appbundle_' + formName + '_' + k).tooltip('destroy');
          }
        });
      }
    });
    return false;
  }
  $('.removeItem').click(function(e) {
      if (confirm($(this).data('message'))) {
        e.preventDefault();
        var type = $(this).data('type');
        var itemId = $(this).data('item');
        $.ajax({
            url: type + '/remove',
            headers: { 'content-type': 'application/x-www-form-urlencoded' },
            data: {
              'entityId': itemId
            },
            method: 'POST',
            success: function(reponse) {
              document.location.reload(true);
            },
          error: function(error) {
          },
        });
    }
  });
});
