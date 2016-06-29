<section  class="col-sm-8 col-sm-offset-2">
        <div class="panel-warning">
            <div class="panel-heading" style=" text-align: center">Este es el Módulo de Procedencia</div>
<table class="table  table-responsive table-striped table-hover table-bordered" >
    <tr><td colspan="5" ><a href="<?php echo base_url(); ?>index.php/Admin/frmDestino" class="btn btn-info">Nuevo</a></td></tr>
    <tr>
        <td>LugarLlegada</td>
        <td class="hidden-xs"> HorarioLlegada</td>
        <td class="hidden-xs">idHotel</td>
      
        
        <td colspan="2" style=" text-align: center">Acciones</td>
    </tr>
<?php
if(isset($dest)){
    foreach ($dest as $n){
        echo "<tr> <td>" . $n->LugarLlegada . "</td>" .
                 "<td class='hidden-xs'>" . $n->HorarioLlegada. "</td>"  .
              "<td class='hidden-xs'>" . $n->idHotel. "</td>"   ;
        
                 
            
        
        echo "<td><a class='btn btn-success' href='frmUpDestino/$n->idDestino'>Modificar</a></td>"
            . "<td><a class='btn btn-danger' href='delDestino/$n->idDestino'>Eliminar</a></td></tr>";
    }
}else{
    echo "Sin registros";
}
?>
</table>
            <button class="btn btn-info visible-xs hidden-lg hidden-md hidden-sm" type="submit"> <span class="glyphicon glyphicon-plus-sign" >Ver Mas</span></button>
            </div>

</section>


