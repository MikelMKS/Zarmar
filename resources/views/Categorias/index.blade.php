@extends('Admin.main')

@section('contenido')
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
<h5 class="card-title">CATEGORIAS&nbsp;&nbsp;<input type="button" class="btn btn-primary" value="AGREGAR" onclick="modaladd()"></h5>
{{-- <p>Desde este apartado podra editar el contenido de su pagina web</p> --}}
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
<table id="Dtable" class="styled-table" style="width:100%">
    <thead>
        <tr>
            <th class="col" style="width: 35% !important;">NOMBRE&nbsp;&nbsp;<span id="c0"><span></th>
            <th class="col" style="width: 15% !important;">PRESENTACION I&nbsp;&nbsp;<span id="c1"><span></th>
            <th class="col" style="width: 15% !important;">PRESENTACION II&nbsp;&nbsp;<span id="c2"><span></th>
            <th class="col" style="width: 15% !important;">PRESENTACION III&nbsp;&nbsp;<span id="c3"><span></th>
            <th class="col" style="width: 10% !important;">ESTATUS&nbsp;&nbsp;<span id="c4"><span></th>
            <th class="col" style="width: 10% !important;"><i class="fa fa-cog fablanco" aria-hidden="true"></i> OPERACIONES</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tabla as $t)
            <tr>
                <td>{{$t->nombre}}</td>
                <td>@if($t->presentacion_1 != null) {{$t->presentacion_1}}<br><span style="color:cornflowerblue">{{$t->presentacion_1_descr}}</span> @endif</td>
                <td>@if($t->presentacion_1 != null) {{$t->presentacion_2}}<br><span style="color:cornflowerblue">{{$t->presentacion_2_descr}}</span> @endif</td>
                <td>@if($t->presentacion_1 != null) {{$t->presentacion_3}}<br><span style="color:cornflowerblue">{{$t->presentacion_3_descr}}</span> @endif</td>
                <td>{{$t->nombre_estatus}}</td>
                <td>
                    @if($t->estatus == 0)
                    <i class="fa fa-wrench faazul pointer" onclick="modificar('{{$t->id}}');"></i>&nbsp;&nbsp;
                    <i class="fa fa-power-off fanaranja pointer" onclick="operaciones('{{$t->id}}',1);"></i>
                    @else
                    <i class="fa fa-power-off famorado pointer" onclick="operaciones('{{$t->id}}',2);"></i>&nbsp;&nbsp;
                    <i class="fa fa-trash farojo pointer" onclick="operaciones('{{$t->id}}',3);"></i>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td class="filtercol"><input type="text" class="thfilter" idc="0" id="i0"></td>
            <td class="filtercol"><input type="text" class="thfilter" idc="1" id="i1"></td>
            <td class="filtercol"><input type="text" class="thfilter" idc="2" id="i2"></td>
            <td class="filtercol"><input type="text" class="thfilter" idc="3" id="i3"></td>
            <td class="filtercol"><input type="text" class="thfilter" idc="4" id="i4"></td>
            <td class="filtercol"></td>
        </tr> 
    </tfoot>
</table>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
<!--------------------------------------------------------------------------------------------->
<div class="modal fade" id="modaladd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top: 50px;max-width: 100%;">
    <div class="modal-dialog modal-md" role="document" style="height: 200px; width: 1500px;">
        <div class="modal-content" id="vpromo" style="margin-top:-5px;">
            <form class="form" id="saveCategoria" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <!---------------------->
                <div class="modal-header">
                     <h4 class="modal-title col-12 text-center titulomodal">AGREGAR CATEGORIA</h4>
                </div>
                <div class="modal-body bodymodal">
                    <label for="nombre_categoria">NOMBRE CATEGORIA:</label>
                    <input type="text" class="form-control inputtext" onblur="this.value=this.value.toUpperCase()" id="nombre_categoria" name="nombre_categoria" maxlength="200" autocomplete="off">

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
                        <input type="text" class="form-control inputtext" id="presentacion1" name="presentacion1" maxlength="200" autocomplete="off">
                    </div>
                        
                    <div style="display:inline-block">
                        <label for="presentacion1_descr">DESCRIPCION:</label>
                        <input type="text" class="form-control inputtext" id="presentacion1_descr" name="presentacion1_descr" maxlength="200" autocomplete="off">
                    </div>
                </div>
                <div class="modal-body bodymodal">
                    <strong>PRESENTACION II</strong><br>
                    <div style="display:inline-block">
                        <label for="presentacion2">NOMBRE:</label>
                        <input type="text" class="form-control inputtext" id="presentacion2" name="presentacion2" maxlength="200" autocomplete="off">
                    </div>
                        
                    <div style="display:inline-block">
                        <label for="presentacion2_descr">DESCRIPCION:</label>
                        <input type="text" class="form-control inputtext" id="presentacion2_descr" name="presentacion2_descr" maxlength="200" autocomplete="off">
                    </div>
                </div>
                <div class="modal-body bodymodal">
                    <strong>PRESENTACION III</strong><br>
                    <div style="display:inline-block">
                        <label for="presentacion3">NOMBRE:</label>
                        <input type="text" class="form-control inputtext" id="presentacion3" name="presentacion3" maxlength="200" autocomplete="off">
                    </div>
                        
                    <div style="display:inline-block">
                        <label for="presentacion3_descr">DESCRIPCION:</label>
                        <input type="text" class="form-control inputtext" id="presentacion3_descr" name="presentacion3_descr" maxlength="200" autocomplete="off">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-sm" onclick="$('#saveCategoria').submit();">GUARDAR</button>
                    <button type="button" class="btn btn-secondary btn-sm" onclick="$('#modaladd').modal('toggle');">CERRAR</button>
                </div>
                <!---------------------->
            </form>
        </div>
    </div>
</div> 
<!---------------------------------------------------------------------------------------------->
<div class="modal fade" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top: 50px;max-width: 100%;">
    <div class="modal-dialog modal-md" role="document" style="height: 200px; width: 1500px;">
        <div class="modal-content" id="bodymodaledit" style="margin-top:-5px;">
            
        </div>
    </div>
</div> 
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
<script type="text/javascript">
// ///////////////////////////////////////////////////////////////////////
var c_NOM = 0;
var c_PR1 = 1;
var c_PR2 = 2;
var c_PR3 = 3;
var c_STA = 4;
// ///////////////////////////////////////////////////////////////////////
Dtable();
function Dtable(){
var Dtable = $('#Dtable').DataTable({
    "sDom": "tp",
    scrollY: "500px",
    scrollX: true,
    paging: false,
    "language": {
        "sProcessing": "Procesando...",
        "sLengthMenu": "# REG _MENU_ ",
        "sZeroRecords": "No se encontraron resultados",
        "sEmptyTable": "Ningún dato disponible en esta tabla",
        "sInfo": "_START_ - _END_",
        "sInfoEmpty": "",
        "sInfoFiltered": "",
        "sInfoPostFix": "",
        "sSearch": "<i class='fa fa-search'></i>",
        "sUrl": "",
        "sInfoThousands": ","
    },
    columnDefs: [
        { "targets": c_NOM }
    ],
})

contador(Dtable);

$('.thfilter').on('keyup change blur',function () {let idc = this.getAttribute("idc");Dtable.columns(idc).search( this.value ).draw();contador(Dtable);});

Dtable.on('click', '.chk', function (e) { selectLista(e, this); });
}

function contador(Dtable) {
    $('#c'+c_NOM).html('('+number_format(Dtable.column(c_NOM,{filter: 'applied'}).data().filter(function(value, index){return value != "" ? true : false;}).count())+')');
    $('#c'+c_PR1).html('('+number_format(Dtable.column(c_PR1,{filter: 'applied'}).data().filter(function(value, index){return value != "" ? true : false;}).count())+')');
    $('#c'+c_PR2).html('('+number_format(Dtable.column(c_PR2,{filter: 'applied'}).data().filter(function(value, index){return value != "" ? true : false;}).count())+')');
    $('#c'+c_PR3).html('('+number_format(Dtable.column(c_PR3,{filter: 'applied'}).data().filter(function(value, index){return value != "" ? true : false;}).count())+')');
    $('#c'+c_STA).html('('+number_format(Dtable.column(c_STA,{filter: 'applied'}).data().filter(function(value, index){return value != "" ? true : false;}).count())+')');
}
// ///////////////////////////////////////////////////////////////////////
function modaladd(){
    $('#modaladd').modal({backdrop: 'static',keyboard: false})
    $('#modaladd').modal('show');
}
// ///////////////////////////////////////////////////////////////////////
$("#saveCategoria").on('submit', function(e){
    e.preventDefault();
    $.ajax({
        type: 'POST',
        url: 'saveCategoria',
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
function modificar(id){
    $('#modaledit').modal({backdrop: 'static',keyboard: false})
    $('#modaledit').modal('show');
    $("#bodymodaledit").html('{{Html::image('img/loading.gif', 'CARGANDO ESPERE', ['class' => 'center-block'])}}');
    $("#bodymodaledit").load('{{route('modificarCategoria')}}' + '?id=' + id);
}

function operaciones(id,t){
    var msg = null;
    if(t == 1){
        msg = "¿ESTAS SEGURO DE QUE QUIERES DESACTIVAR EL REGISTRO?";
    }else if(t == 2){
        msg = "¿ESTAS SEGURO DE QUE QUIERES REACTIVAR EL REGISTRO?";
    }else if(t == 3){
        msg = "¿ESTAS SEGURO DE QUE QUIERES ELIMINAR EL REGISTRO?";
    }

    swalConfirm(msg).then((value) => {
    if(value == true){
        $.ajax({
            type : "get",
            url : "operacionesCategoria" + '?id=' + id + '&t=' + t,
            beforeSend : function () {
                swalLoading();
            },
            success:  function (response) {
                    swalTimer('success','ACTUALIZANDO','');
                    window.location.reload(); 
            },
            error: function (error){
                swalTimer('error','HA OCURRIDO UN ERROR, INTENTALO NUEVAMENTE',2000);
            }
        });
    }
    });
}
// ///////////////////////////////////////////////////////////////////////
</script>
@endsection