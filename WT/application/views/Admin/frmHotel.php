<div class="col-sm-6 col-sm-offset-2" >
    
    
    
<h1 class="mbr-header__text">Registra un Hotel</h1>

        
<?php echo form_open('Hotel/addHotel'); ?>
<form>
    
   
 
        <label for="NombreHotel" >Nombre </label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-hotel"></i> </span>
         <input class="form-control" type="text" id="NombreHotel" name="NombreHotel" placeholder="Nombre Hotel" required="required" value="<?php echo set_value('NombreHotel'); ?>">
        
    </div>
        
        
         <label  for="Direccion">Dirección</label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-home"></i> </span>  
         <input class="form-control" type="text" id="Direccion" name="Direccion" placeholder="Dirección" required="required">
    </div>
       
          <label  for="Telefono">Teléfono</label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-phone"></i> </span>  
         <input class="form-control" type="tel" id="Telefono" name="Telefono" placeholder="Teléfono" required="required">
    </div>
          
          
          <label  for="CostoHotel">Costo Hotel</label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-dollar"></i> </span>  
         <input class="form-control" type="text" id="CostoHotel" name="CostoHotel" placeholder="Costo Hotel" required="required">
    </div>
        
          
    <div class="form-group">
           <input type="submit"  name="submit"  value="Agregar" class="btn btn-success btn-lg"  required="required" >
    </div>
    
</form>

                     
                          
                       

                   
</div>


