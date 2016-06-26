<section  class="col-sm-8 col-sm-offset-2">
        <div class="panel-warning">
            <div class="panel-heading" style=" text-align: center">Este es el Módulo de Transporte</div>
<table class="table  table-responsive table-striped table-hover table-bordered" >
    <tr><td colspan="4" ><a href="<?php echo base_url(); ?>index.php/Admin/frmtransporte" class="btn btn-info">Nuevo</a></td></tr>
    <tr>
        <td>NumLugares</td>
        <td class="hidden-xs">NomTransporte</td>
      
        
        <td colspan="2" style=" text-align: center">Acciones</td>
    </tr>
<?php
if(isset($trans)){
    foreach ($trans as $n){
        echo "<tr> <td>" . $n->NumLugares . "</td>" .
              "<td class='hidden-xs'>" . $n->NomTransporte. "</td>"   ;
        
                 
            
        
        echo "<td><a class='btn btn-success' href='frmUpCliente/$n->idTransporte'>Modificar</a></td>"
            . "<td><a class='btn btn-danger' href='delCliente/$n->idTransporte'>Eliminar</a></td></tr>";
    }
}else{
    echo "Sin registros";
}
?>
</table>
            <button class="btn btn-info visible-xs hidden-lg hidden-md hidden-sm" type="submit"> <span class="glyphicon glyphicon-plus-sign" >Ver Mas</span></button>
            </div>

</section>


