<div class="col-sm-6 col-sm-offset-2" >
    
    
    
<h1 class="mbr-header__text">Registra a un Cliente</h1>

        
<?php echo form_open('Cliente/addCliente'); ?>
<form>
    
   
 
        <label for="Nombre" >Nombre </label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-user"></i> </span>
         <input class="form-control" type="text" id="Nombre" name="Nombre" placeholder="Nombre" required="required" value="<?php echo set_value('Nombre'); ?>">
        
    </div>
        
        
        <label  for="Telefono">Teléfono</label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-phone"></i> </span>  
         <input class="form-control" type="tel" id="Telefono" name="Telefono" placeholder="Teléfono" required="required">
    </div>
        
        
         <label  for="Direccion">Dirección</label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-home"></i> </span>  
         <input class="form-control" type="text" id="Direccion" name="Direccion" placeholder="Dirección" required="required">
    </div>
       
        
          
    <div class="form-group">
           <input type="submit"  name="submit"  value="Agregar" class="btn btn-success btn-lg"  required="required" >
    </div>
    
</form>

                     
                          
                       

                   
</div>

