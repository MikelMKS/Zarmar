<form class="form" id="updateProducto" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="text" hidden value="{{$registro[0]->id}}" id="id_reg" name="id_reg">
    <!---------------------->
    <div class="modal-header">
         <h4 class="modal-title col-12 text-center titulomodal">MODIFICAR PRODUCTO</h4>

    </div>
    <div class="modal-body bodymodal">
        <label for="nombre_productoEdit">NOMBRE:</label>
        <input type="text" class="form-control inputtext" value="{{$registro[0]->nombre}}" id="nombre_productoEdit" name="nombre_productoEdit" maxlength="200" autocomplete="off">

        <label for="descripcionEdit">DESCRIPCION:</label>
        <input type="text" class="form-control inputtext" value="{{$registro[0]->descripcion}}" id="descripcionEdit" name="descripcionEdit" maxlength="200" autocomplete="off">

        <label for="presentacionEdit">PRESENTACION:</label>
        <input type="text" class="form-control inputtext" value="{{$registro[0]->presentacion}}" id="presentacionEdit" name="presentacionEdit" maxlength="200" autocomplete="off">
        
        <label for="imagenEdit">IMAGEN:</label>
        <input type="file" class="form-control" name="imagenEdit" id="imagenEdit" accept="image/*">

        <label for="categoriaEdit">CATEGORIA:</label>
        <select class="form-control" id="categoriaEdit" name="categoriaEdit" onchange="categoriaSelectedEdit(this.value);">
            <option value=""></option>
            @foreach ($categoriasEdit as $c)
                <option value="{{$c->id}}" @if($registro[0]->id_categoria == $c->id) selected @endif>{{$c->nombre}}</option>
            @endforeach
        </select>
    </div>
    <div class="modal-body bodymodal">
        <h4 class="modal-title col-12 text-center titulomodal">PRECIOS</h4>
    <div id="seccionPreciosEdit">
        @if(!empty($categoria_uso[0]->presentacion_1) && !empty($categoria_uso[0]->presentacion_2) && !empty($categoria_uso[0]->presentacion_3))
            <label for='precio1Edit'>PRECIO I:</label>
            <input type='text' class='form-control inputtext pmask2' value="{{$registro[0]->precio1}}" id='precio1Edit' name='precio1Edit' autocomplete='off'>
            <label for='precio2Edit'>PRECIO II:</label>
            <input type='text' class='form-control inputtext pmask2' value="{{$registro[0]->precio2}}" id='precio2Edit' name='precio2Edit' autocomplete='off'>
            <label for='precio3Edit'>PRECIO III:</label>
            <input type='text' class='form-control inputtext pmask2' value="{{$registro[0]->precio3}}" id='precio3Edit' name='precio3Edit' autocomplete='off'>
        @elseif(!empty($categoria_uso[0]->presentacion_1) && !empty($categoria_uso[0]->presentacion_2))
            <label for='precio1Edit'>PRECIO I:</label>
            <input type='text' class='form-control inputtext pmask2' value="{{$registro[0]->precio1}}" id='precio1Edit' name='precio1Edit' autocomplete='off'>
            <label for='precio2Edit'>PRECIO II:</label>
            <input type='text' class='form-control inputtext pmask2' value="{{$registro[0]->precio2}}" id='precio2Edit' name='precio2Edit' autocomplete='off'>
        @else
            <label for='precio1Edit'>PRECIO I:</label>
            <input type='text' class='form-control inputtext pmask2' value="{{$registro[0]->precio1}}" id='precio1Edit' name='precio1Edit' autocomplete='off'>
        @endif
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-sm" onclick="$('#updateProducto').submit();">GUARDAR</button>
        <button type="button" class="btn btn-secondary btn-sm" onclick="$('#modaledit').modal('toggle');">CERRAR</button>
    </div>
    <!---------------------->
</form>

<script>
$("#updateProducto").on('submit', function(e){
    e.preventDefault();
    $.ajax({
        type: 'POST',
        url: 'updateProducto',
        data: new FormData(this),
        dataType: 'json',
        contentType: false,
        cache: false,
        processData:false,
        beforeSend: function(){
            swalLoading();
        },
        success: function(response){
            if(response.status == '0'){
                $('#modaledit').modal('toggle');
                swalTimer('success','ACTUALIZANDO','');
                window.location.reload(); 
            }else{
                swalTimer('warning',response.msg,2000);
            }
        },
        error: function (error){
            swalTimer('error','HA OCURRIDO UN ERROR, INTENTALO NUEVAMENTE',2000);
        }
    });
});
// ///////////////////////////////////////////////////////////////////////
$('#categoriaEdit').select2();
$('#categoriaEdit').select2({
    dropdownParent: $('#modaledit'),
    placeholder: '',
    language: {
        noResults: function(params) {
            return 'SIN RESULTADOS';
        }
    }
});

function categoriaSelectedEdit(val){
    $("#seccionPreciosEdit").html('{{Html::image('img/loading.gif', 'CARGANDO ESPERE', ['class' => 'center-block'])}}');
    $("#seccionPreciosEdit").load('{{route('seccionPreciosEdit')}}' + '?val=' + val);
}
// ///////////////////////////////////////////////////////////////////////
</script>