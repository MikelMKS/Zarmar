<form class="form" id="updateCategoria" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="text" hidden value="{{$registro[0]->id}}" id="id_reg" name="id_reg">
    <!---------------------->
    <div class="modal-header">
         <h4 class="modal-title col-12 text-center titulomodal">MODIFICAR CATEGORIA</h4>

    </div>
    <div class="modal-body bodymodal">
        <label for="nombre_categoriaEditar">NOMBRE CATEGORIA:</label>
        <input type="text" class="form-control inputtext" value="{{$registro[0]->nombre}}" onblur="this.value=this.value.toUpperCase()" id="nombre_categoriaEditar" name="nombre_categoriaEditar" placeholder="NOMBRE" maxlength="200" autocomplete="off">
        
        <label for="imagen">IMAGEN:</label>
        <input type="file" class="form-control" name="imagen" id="imagen" accept="image/*">
    </div>
    <div class="modal-body bodymodal">
        <h4 class="modal-title col-12 text-center titulomodal">PRESENTACIONES</h4>
    </div>
    <div class="modal-body bodymodal">
        <strong>PRESENTACION I</strong><br>
        <div style="display:inline-block">
            <label for="presentacion1">NOMBRE:</label>
            <input type="text" class="form-control inputtext" value="{{$registro[0]->presentacion_1}}" id="presentacion1Editar" name="presentacion1Editar" maxlength="200" autocomplete="off">
        </div>
            
        <div style="display:inline-block">
            <label for="presentacion1_descr">DESCRIPCION:</label>
            <input type="text" class="form-control inputtext" value="{{$registro[0]->presentacion_1_descr}}" id="presentacion1_descrEditar" name="presentacion1_descrEditar" maxlength="200" autocomplete="off">
        </div>
    </div>
    <div class="modal-body bodymodal">
        <strong>PRESENTACION II</strong><br>
        <div style="display:inline-block">
            <label for="presentacion2">NOMBRE:</label>
            <input type="text" class="form-control inputtext" value="{{$registro[0]->presentacion_2}}" id="presentacion2Editar" name="presentacion2Editar" maxlength="200" autocomplete="off">
        </div>
            
        <div style="display:inline-block">
            <label for="presentacion2_descr">DESCRIPCION:</label>
            <input type="text" class="form-control inputtext" value="{{$registro[0]->presentacion_2_descr}}" id="presentacion2_descrEditar" name="presentacion2_descrEditar" maxlength="200" autocomplete="off">
        </div>
    </div>
    <div class="modal-body bodymodal">
        <strong>PRESENTACION III</strong><br>
        <div style="display:inline-block">
            <label for="presentacion3">NOMBRE:</label>
            <input type="text" class="form-control inputtext" value="{{$registro[0]->presentacion_3}}" id="presentacion3Editar" name="presentacion3Editar" maxlength="200" autocomplete="off">
        </div>
            
        <div style="display:inline-block">
            <label for="presentacion3_descr">DESCRIPCION:</label>
            <input type="text" class="form-control inputtext" value="{{$registro[0]->presentacion_3_descr}}" id="presentacion3_descrEditar" name="presentacion3_descrEditar" maxlength="200" autocomplete="off">
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-sm" onclick="$('#updateCategoria').submit();">GUARDAR</button>
        <button type="button" class="btn btn-secondary btn-sm" onclick="$('#modaledit').modal('toggle');">CERRAR</button>
    </div>
    <!---------------------->
</form>

<script>
$("#updateCategoria").on('submit', function(e){
    e.preventDefault();
    $.ajax({
        type: 'POST',
        url: 'updateCategoria',
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
</script>