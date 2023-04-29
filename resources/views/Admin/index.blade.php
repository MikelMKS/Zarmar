@extends('Admin.main')

@section('contenido')
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
<h5 class="card-title">PRODUCTOS&nbsp;&nbsp;<input type="button" class="btn btn-primary" value="AGREGAR" onclick="modaladd()"></h5>
{{-- <p>Desde este apartado podra editar el contenido de su pagina web</p> --}}
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
<table id="Dtable" class="styled-table" style="width:100%">
    <thead>
        <tr>
            <th class="col" style="width: 20% !important;">NOMBRE&nbsp;&nbsp;<span id="c0"><span></th>
            <th class="col" style="width: 20% !important;">CATEGORIA&nbsp;&nbsp;<span id="c1"><span></th>
            <th class="col" style="width: 15% !important;">DESCRIPCION&nbsp;&nbsp;<span id="c2"><span></th>
            <th class="col" style="width: 8% !important;">PRESENTACION&nbsp;&nbsp;<span id="c3"><span></th>
            <th class="col" style="width: 8% !important;">PRECIO I&nbsp;&nbsp;<span id="c4"><span></th>
            <th class="col" style="width: 8% !important;">PRECIO II&nbsp;&nbsp;<span id="c5"><span></th>
            <th class="col" style="width: 8% !important;">PRECIO III&nbsp;&nbsp;<span id="c6"><span></th>
            <th class="col" style="width: 8% !important;">ESTATUS&nbsp;&nbsp;<span id="c7"><span></th>
            <th class="col" style="width: 5% !important;"><i class="fa fa-cog fablanco" aria-hidden="true"></i></th>
        </tr>
    </thead>
    <tbody>
        @foreach($tabla as $t)
            <tr>
                <td @if(existeArchivo('img/carta', $t->id . '.png')) class="drillin lefti" onclick="showFoto('{{$t->id}}')" @else class="lefti" @endif>{{$t->nombre}}</td>
                <td class="lefti">{{$t->categoria}}</td>
                <td class="lefti">{{$t->descripcion}}</td>
                <td class="lefti">{{$t->presentacion}}</td>
                <td class="righti">{{flotFormatoM2Pesos($t->precio1)}}</td>
                <td class="righti">{{flotFormatoM2Pesos($t->precio2)}}</td>
                <td class="righti">{{flotFormatoM2Pesos($t->precio3)}}</td>
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
            <td class="filtercol"><input type="text" class="thfilter" idc="5" id="i5"></td>
            <td class="filtercol"><input type="text" class="thfilter" idc="6" id="i6"></td>
            <td class="filtercol"><input type="text" class="thfilter" idc="7" id="i7"></td>
            <td class="filtercol"></td>
        </tr> 
    </tfoot>
</table>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
<!--------------------------------------------------------------------------------------------->
<div class="modal fade" id="modaladd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top: 50px;max-width: 100%;">
    <div class="modal-dialog modal-md" role="document" style="height: 200px; width: 1500px;">
        <div class="modal-content" id="vpromo" style="margin-top:-5px;">
            <form class="form" id="saveProducto" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <!---------------------->
                <div class="modal-header">
                     <h4 class="modal-title col-12 text-center titulomodal">AGREGAR PRODUCTO</h4>
                </div>
                <div class="modal-body bodymodal">
                    <label for="nombre_producto">NOMBRE:</label>
                    <input type="text" class="form-control inputtext" id="nombre_producto" name="nombre_producto" maxlength="200" autocomplete="off">

                    <label for="descripcion">DESCRIPCION:</label>
                    <input type="text" class="form-control inputtext" id="descripcion" name="descripcion" maxlength="200" autocomplete="off">

                    <label for="presentacion">PRESENTACION:</label>
                    <input type="text" class="form-control inputtext" id="presentacion" name="presentacion" maxlength="200" autocomplete="off">

                    <label for="imagen">IMAGEN:</label>
                    <input type="file" class="form-control" name="imagen" id="imagen" accept="image/*">
                    
                    <label for="categoria">CATEGORIA:</label>
                    <select class="form-control" id="categoria" name="categoria" onchange="categoriaSelected(this.value);">
                        <option value=""></option>
                        @foreach ($categorias as $c)
                            <option value="{{$c->id}}">{{$c->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="modal-body bodymodal">
                    <h4 class="modal-title col-12 text-center titulomodal">PRECIOS</h4>
                    <div id="seccionPrecios">
                        <span style="color: rgb(134, 129, 129)">SELECCIONA UNA CATEGORIA</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-sm" onclick="$('#saveProducto').submit();">GUARDAR</button>
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
<!---------------------------------------------------------------------------------------------->
<div class="modal fade" id="modalImagen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top: 50px;height: 1000px; width: 1500px;">
    <div class="modal-dialog modal-md" role="document" style="height: 200px; width: 1500px;">
        <div class="modal-content" id="bodymodalImagen" style="margin-top:-5px;">

            </div>
        </div>
</div>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
<script type="text/javascript">
// ///////////////////////////////////////////////////////////////////////
var c_NOM = 0;
var c_CAT = 1;
var c_DES = 2;
var c_PRE = 3;
var c_PR1 = 4;
var c_PR2 = 5;
var c_PR3 = 6;
var c_STA = 7;
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
    $('#c'+c_CAT).html('('+number_format(Dtable.column(c_CAT,{filter: 'applied'}).data().filter(function(value, index){return value != "" ? true : false;}).count())+')');
    $('#c'+c_DES).html('('+number_format(Dtable.column(c_DES,{filter: 'applied'}).data().filter(function(value, index){return value != "" ? true : false;}).count())+')');
    $('#c'+c_PRE).html('('+number_format(Dtable.column(c_PRE,{filter: 'applied'}).data().filter(function(value, index){return value != "" ? true : false;}).count())+')');
    $('#c'+c_PR1).html('('+number_format(Dtable.column(c_PR1,{filter: 'applied'}).data().filter(function(value, index){return value != "" ? true : false;}).count())+')');
    $('#c'+c_PR2).html('('+number_format(Dtable.column(c_PR2,{filter: 'applied'}).data().filter(function(value, index){return value != "" ? true : false;}).count())+')');
    $('#c'+c_PR3).html('('+number_format(Dtable.column(c_PR3,{filter: 'applied'}).data().filter(function(value, index){return value != "" ? true : false;}).count())+')');
    $('#c'+c_STA).html('('+number_format(Dtable.column(c_STA,{filter: 'applied'}).data().filter(function(value, index){return value != "" ? true : false;}).count())+')');
}
// ///////////////////////////////////////////////////////////////////////
function modaladd(){
    $('#modaladd').modal({backdrop: 'static',keyboard: false});
    $('#modaladd').modal('show');
}
// ///////////////////////////////////////////////////////////////////////
$("#saveProducto").on('submit', function(e){
    e.preventDefault();
    $.ajax({
        type: 'POST',
        url: 'saveProducto',
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
    $('#modaledit').modal({backdrop: 'static',keyboard: false});
    $('#modaledit').modal('show');
    $("#bodymodaledit").html('{{Html::image('img/loading.gif', 'CARGANDO ESPERE', ['class' => 'center-block'])}}');
    $("#bodymodaledit").load('{{route('modificarProducto')}}' + '?id=' + id);
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
            url : "operacionesProducto" + '?id=' + id + '&t=' + t,
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
$('#categoria').select2();
$('#categoria').select2({
    dropdownParent: $('#modaladd'),
    placeholder: '',
    language: {
        noResults: function(params) {
            return 'SIN RESULTADOS';
        }
    }
});

function categoriaSelected(val){
    $("#seccionPrecios").html('{{Html::image('img/loading.gif', 'CARGANDO ESPERE', ['class' => 'center-block'])}}');
    $("#seccionPrecios").load('{{route('seccionPrecios')}}' + '?val=' + val);
}
// ///////////////////////////////////////////////////////////////////////
function showFoto(id){
    var url = "img/carta/"+id+".png";
    window.open(url);
}

function hideimage(){
    $('#modalImagen').modal('hide');
}
// ///////////////////////////////////////////////////////////////////////
</script>
@endsection