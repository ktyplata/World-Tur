<section  class="col-sm-8 col-sm-offset-2">
        <div class="panel-warning">
            <div class="panel-heading" style=" text-align: center">Este es el Módulo de Clientes</div>
<table class="table  table-responsive table-striped table-hover table-bordered" >
    <tr><td colspan="5" ><a href="<?php echo base_url(); ?>index.php/Admin/frmClientes" class="btn btn-info">Nuevo</a></td></tr>
    <tr>
        <td>Nombre</td>
        <td class="hidden-xs">Teléfono</td>
        <td class="hidden-xs">Dirección</td>
        
        <td colspan="2" style=" text-align: center">Acciones</td>
    </tr>
<?php
if(isset($cliente)){
    foreach ($cliente as $n){
        echo "<tr> <td>" . $n->Nombre . "</td>" .
            "<td class='hidden-xs'>" . $n->Telefono. "</td>" .
              "<td class='hidden-xs'>" . $n->Direccion. "</td>"   ;
        
                 
            
        
        echo "<td><a class='btn btn-success' href='frmUpCliente/$n->idCliente'>Modificar</a></td>"
            . "<td><a class='btn btn-danger' href='delCliente/$n->idCliente'>Eliminar</a></td></tr>";
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

