<div class="col-sm-6 col-sm-offset-2" >
    
    
    
<h1 class="mbr-header__text">Modificar Clientes</h1>

        
<?php echo form_open('Cliente/upClientes');?>

    <?php foreach($clientes as $n){ ?>

    
   <input type="hidden" name ="id" value="<?php echo $n->idCliente; ?>">
 
        <label for="Nombre" >Nombre </label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-user"></i> </span>
         <input class="form-control" type="text" id="Nombre" name="Nombre" placeholder="Nombre" required="required" value="<?php echo $n->Nombre; ?>">
        
    </div>
        
       
        <label  for="Telefono">Teléfono</label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-phone"></i> </span>  
         <input class="form-control" type="tel" id="Telefono" name="Telefono" placeholder="Teléfono" required="required" value="<?php echo $n->Telefono; ?>">
    </div>
        
        
         <label  for="Direccion">Dirección</label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-home"></i> </span>  
         <input class="form-control" type="text" id="Direccion" name="Direccion" placeholder="Dirección" required="required" value="<?php echo $n->Direccion; ?>">
    </div>
        
          
    <div class="form-group">
           <input type="submit"  name="submit"  value="Modificar" class="btn btn-success btn-lg"  required="required" >
    </div>
    <?php } ?>
</form>

                     
                          
                       

                   
</div>


