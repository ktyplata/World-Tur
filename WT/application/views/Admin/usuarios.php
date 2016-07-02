<section  class="col-sm-8 col-sm-offset-2">
        <div class="panel-warning">
            <div class="panel-heading" style=" text-align: center">Este es el Módulo de  Usuarios</div>
<table class="table  table-responsive table-striped table-hover table-bordered" >
    <tr><td colspan="4" ><a href="<?php echo base_url(); ?>index.php/Admin/registro" class="btn btn-info">Nuevo</a></td></tr>
    <tr>
        <td>Usuario</td>
        <td class="hidden-xs">Contraseña</td>
        
        <td colspan="2" style=" text-align: center">Acciones</td>
    </tr>
<?php
if(isset($usuarios)){
    foreach ($usuarios as $n){
        echo "<tr> <td>" . $n->user . "</td>" .
            "<td class='hidden-xs'>" . $n->password. "</td>" ;
        
                 
            
        
        echo "<td><a class='btn btn-success' href='frmUpUsuario/$n->idUsuario'>Modificar</a></td>"
            . "<td><a class='btn btn-danger' href='delUsuario/$n->idUsuario'>Eliminar</a></td></tr>";
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


