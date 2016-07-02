<section  class="col-sm-12">
        <div class="panel-warning">
            <div class="panel-heading" style=" text-align: center">Este es el Módulo de Viajes</div>
<table class="table  table-responsive table-striped table-hover table-bordered" >
    <tr><td colspan="12" ><a href="<?php echo base_url(); ?>index.php/Admin/frmViajes" class="btn btn-info">Nuevo</a></td></tr>
    <tr>
        <td>Nombre</td>
        <td class="hidden-xs">Precio</td>
        <td class="hidden-xs">NumEntradas</td>
        <td class="hidden-xs">Itinerario</td>
        <td class="hidden-xs">Lugares Visitados</td>
        <td class="hidden-xs">idCliente</td>
        <td class="hidden-xs">idProcedencia</td>
        <td class="hidden-xs">idDestino</td>
        <td class="hidden-xs">TotalViaje</td>
        <td class="hidden-xs">PrecioHotel</td>
        
        <td colspan="2" style=" text-align: center">Acciones</td>
    </tr>
<?php
if(isset($viajes)){
    foreach ($viajes as $n){
        echo "<tr> <td>" . $n->Nombre . "</td>" .
            "<td class='hidden-xs'>" . $n->Precio. "</td>" .
            "<td class='hidden-xs'>" . $n->NumEntradas. "</td>" .
            "<td class='hidden-xs'>" . $n->Itinerario. "</td>" .
            "<td class='hidden-xs'>" . $n->LugaresVisitados. "</td>" .
            "<td class='hidden-xs'>" . $n->idCliente. "</td>" .
            "<td class='hidden-xs'>" . $n->idProcedencia. "</td>" .
            "<td class='hidden-xs'>" . $n->idDestino. "</td>" .
            "<td class='hidden-xs'>" . $n->TotalViaje. "</td>" .
            "<td class='hidden-xs'>" . $n->Preciohotel. "</td>" 
                
                
                ;
        
                 
            
        
        echo "<td><a class='btn btn-success' href='frmUpViajes/$n->idViajes'>Modificar</a></td>"
            . "<td><a class='btn btn-danger' href='delViajes/$n->idViajes'>Eliminar</a></td></tr>";
    }
}else{
    echo "Sin registros";
}
?>
</table>
            
            
            <?php
        echo $this->pagination->create_links(); 
        ?>
            <button class="btn btn-info visible-xs hidden-lg hidden-md hidden-sm" type="submit"> <span class="glyphicon glyphicon-plus-sign" >Ver Mas</span></button>
            </div>

</section>





