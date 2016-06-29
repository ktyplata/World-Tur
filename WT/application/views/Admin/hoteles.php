<section  class="col-sm-8 col-sm-offset-2">
        <div class="panel-warning">
            <div class="panel-heading" style=" text-align: center">Este es el Módulo de Hotel</div>
<table class="table  table-responsive table-striped table-hover table-bordered" >
    <tr><td colspan="6" ><a href="<?php echo base_url(); ?>index.php/Admin/frmHotel" class="btn btn-info">Nuevo</a></td></tr>
    <tr>
        <td>Nombre</td>
        <td class="hidden-xs">Dirección</td>
        <td class="hidden-xs">Teléfono</td>
        <td class="hidden-xs">Costo Hotel</td>
        
        
        <td colspan="2" style=" text-align: center">Acciones</td>
    </tr>
<?php
if(isset($ho)){
    foreach ($ho as $n){
        echo "<tr> <td>" . $n->NombreHotel . "</td>" .
                "<td class='hidden-xs'>" . $n->Direccion. "</td>" .
            "<td class='hidden-xs'>" . $n->Telefono. "</td>" .
                "<td class='hidden-xs'>" . $n->CostoHotel. "</td>" 
                ;
        
                 
            
        
        echo "<td><a class='btn btn-success' href='frmUpHotel/$n->idHotel'>Modificar</a></td>"
            . "<td><a class='btn btn-danger' href='delHotel/$n->idHotel'>Eliminar</a></td></tr>";
    }
}else{
    echo "Sin registros";
}
?>
</table>
            <button class="btn btn-info visible-xs hidden-lg hidden-md hidden-sm" type="submit"> <span class="glyphicon glyphicon-plus-sign" >Ver Mas</span></button>
            </div>

</section>

