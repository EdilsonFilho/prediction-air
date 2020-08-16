$(function () {
  $.ajaxSetup({
    headers: {
      "X-CSRF-TOKEN": $('input[name="_token"]').val(),
    },
  });

  $('[data-toggle="tooltip"]').tooltip();

  // Utilizar no input data-ays-ignore="true" para ignorar ou
  // "ays-ignore" como classe no input
  // É interessante usar o setTimeout para
  // ter certeza que o select2 será carregado
  // e só depois a verificação de alteração
  // nos campos será feita.
  setTimeout(() => {
    $("form.areyousure").areYouSure({
      message:
        "Existem mudanças que ainda não foram salvas. Você realmente deseja sair da página?",
    });
  }, 2000);

  $(".datepicker")
    .datepicker({
      autoclose: true,
      language: "pt-BR",
      format: "dd/mm/yyyy",
    })
    .mask("00/00/0000", {
      placeholder: "__/__/____",
    });

  $(".datepicker-only-year").datepicker({
    autoclose: true,
    language: "pt-BR",
    format: "yyyy",
    viewMode: "years",
    minViewMode: "years",
  });

  $(".datepicker-only-month-year").datepicker({
    autoclose: true,
    language: "pt-BR",
    format: "mm-yyyy",
    startView: "months",
    minViewMode: "months",
  });

  // https://igorescobar.github.io/jQuery-Mask-Plugin/docs.html
  $(".money").mask("000.000.000.000.000,00", {
    reverse: true,
  });

  $(".only-numbers").mask("0#");

  $(".percent").mask("##0,00", {
    reverse: true,
  });

  $(".uppercase").keyup(function () {
    $(this).val($(this).val().toUpperCase());
  });

  var SPMaskBehavior = function (val) {
      return val.replace(/\D/g, "").length === 11
        ? "(00) 00000-0000"
        : "(00) 0000-00009";
    },
    spOptions = {
      onKeyPress: function (val, e, field, options) {
        field.mask(SPMaskBehavior.apply({}, arguments), options);
      },
    };

  $(".phone").mask(SPMaskBehavior, spOptions);
});

function showAlert(title, message, button) {
  var title = title || "Alerta!";
  var message = message || "Campos com (*) são obrigatórios.";
  var button = button || "CERTO, ENTENDI!";

  $("#modal-alert .title").html(title);
  $("#modal-alert .message").html(message);
  $("#modal-alert .btn-name").html(button);

  $("#modal-alert").modal({
    show: true,
  });
}

function confirmDelete(id, route, model) {
  route = route || false;
  model = model || false;

  var oldUrlAction = $("#modal-notification").parent().attr("action");

  $("#modal-notification")
    .modal({
      show: true,
    })
    .on("shown.bs.modal", function (e) {
      $("#modal-notification")
        .parent()
        .append('<input type="hidden" value="' + id + '" name="id" />');

      if (route) {
        $("#modal-notification").parent().attr("action", route);
      } else {
        $("#modal-notification")
          .parent()
          .attr("action", oldUrlAction + "/" + id);
      }

      if (model) {
        $("#modal-notification")
          .parent()
          .append('<input type="hidden" value="' + model + '" name="model" />');
      }

      var params = getParamsFromUrl();

      if (params.has("page")) {
        $("#modal-notification")
          .parent()
          .append(
            '<input type="hidden" value="' +
              params.get("page") +
              '" name="page" />'
          );
      }
    })
    .on("hidden.bs.modal", function (e) {
      $("#modal-notification").parent().attr("action", oldUrlAction);
    });
}

function getParamsFromUrl() {
  return new Map(
    location.search
      .slice(1)
      .split("&")
      .map((kv) => kv.split("="))
  );
}

function changeMenu() {
  $.ajax({
    method: "post",
    url: $("body").data("base-url") + "/dashboard/settings/change-menu",
    data: {
      _token: $('input[name="_token"]').val(),
    },
    success: function (response) {
      // console.log(response);
    },
    error: function (error) {
      // console.log(error);
    },
  });
}

function uploadImage(form) {
  $.LoadingOverlay("show", {
    imageColor: "#ccc",
    text: "Enviando imagem. Aguarde...",
    textColor: "#ccc",
  });

  setTimeout(() => {
    $(form).submit();
  }, 1000);
}
