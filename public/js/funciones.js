function valIsEmpty(value, extra=''){
  if (value !== null && $.type(value) !== 'undefined' && $.type(value) !== 'null' && $.type(value) !== '[]')
      return ( (value.length < 1 || $.trim((value).toString()).length < 1 || value === false || value.toString() === extra) ? true : false );
  else
      return true;
}

function number_format(amount, decimals) {
  amount += '';
  amount = parseFloat(amount.replace(/[^0-9\.]/g, ''));
  decimals = decimals || 0;
  if (isNaN(amount) || amount === 0) 
      return parseFloat(0).toFixed(decimals);
  amount = '' + amount.toFixed(decimals);
  var amount_parts = amount.split('.'),
      regexp = /(\d+)(\d{3})/;
  while (regexp.test(amount_parts[0]))
      amount_parts[0] = amount_parts[0].replace(regexp, '$1' + ',' + '$2');
  return amount_parts.join('.');
}

function swalLoading(){
  return swal({
    icon: 'img/loading.gif',
    text: 'CARGANDO...',
    id: 'swalloading',
    reverseButtons: false,
    closeOnClickOutside: false,
    buttons: false
  });
}

function swalLoading2(){
  return swal({
    icon: 'img/loading.gif',
    text: 'CALCULANDO...',
    id: 'swalloading',
    reverseButtons: false,
    closeOnClickOutside: false,
    buttons: false
  });
}

//success-warning-
function swalTimer(tipo,title,time){
  if(valIsEmpty(time)){
    return swal({
      icon: tipo,
      text: title,
      reverseButtons: false,
      closeOnClickOutside: false,
      buttons: false
    });
  }else{
  return swal({
    icon: tipo,
    text: title,
    reverseButtons: false,
    closeOnClickOutside: false,
    buttons: false,
    timer: time
  });
  }
}

function swalConfirm($title){
  return swal({
      icon: 'warning',
      text: $title,
      buttons: {
        confirm : {text:'CONFIRMAR',className:'sweet-warning'},
        cancel : 'CANCELAR'
    },
      dangerMode: true,
  });
}

function hideLoading() {
  swal.close();
}

$('.pmask').mask("#,##0", {
  reverse: true
});

$('.pmask2').mask("#,##0.00", {
  reverse: true
});

$('.pmask3').mask("##0", {
  reverse: true
});

// CARROUSEL

// CARROUSEL