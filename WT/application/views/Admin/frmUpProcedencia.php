<div class="col-sm-6 col-sm-offset-2" >
    
    
    
<h1 class="mbr-header__text">Modificar Destino</h1>

        
<?php echo form_open('Procedencia/upProcedencia');?>

    <?php foreach($procedencias as $n){ ?>

    
   <input type="hidden" name ="id" value="<?php echo $n->idProcedencia; ?>">
 
       <label for="LugarSalida" >LugarSalida </label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-user"></i> </span>
         <input class="form-control" type="text" id="LugarSalida" name="LugarSalida" placeholder="Lugar Salida" required="required" value="<?php echo $n->LugarSalida; ?>">
        
    </div>
        
        
        <label  for="HorarioSalida">HorarioSalida</label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-bus"></i> </span>  
         <input class="form-control" type="datetime" id="HorarioSalida" name="HorarioSalida" placeholder="Horario Salida" required="required" value="<?php echo $n->HorarioSalida; ?>">
    </div>
        
        
        <label  for="idProveedor">idProveedor</label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-user-secret"></i> </span>  
         <input class="form-control" type="number" id="idProveedor" name="idProveedor" placeholder="idProveedor" required="required"   value="<?php echo $n->idProveedor; ?>">
    </div>

   
     <div class="form-group">
           <input type="submit"  name="submit"  value="Modificar" class="btn btn-success btn-lg"  required="required" >
    </div>
    <?php } ?>
</form>

                     
                          
                       

                   
</div>
