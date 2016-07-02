<div class="col-sm-6 col-sm-offset-2" >
    
    
    
<h1 class="mbr-header__text">Modificar Destino</h1>

        
<?php echo form_open('Destino/upDestino');?>

    <?php foreach($destinos as $n){ ?>

    
   <input type="hidden" name ="id" value="<?php echo $n->idDestino; ?>">
 
       <label for="LugarLlegada" >LugarLlegada </label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-home"></i> </span>
         <input class="form-control" type="text" id="LugarLlegada" name="LugarLlegada" placeholder="LugarLlegada" required="required" value="<?php echo $n->LugarLlegada; ?>">
        
    </div>
        
        
        <label  for="HorarioLlegada">HorarioLlegada</label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-calendar"></i> </span>  
         <input class="form-control" type="datetime" id="HorarioLlegada" name="HorarioLlegada" placeholder="HorarioLlegada" required="required" value="<?php echo $n->HorarioLlegada; ?>">
    </div>
       
         
        <label  for="idHotel">idHotel</label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-user-secret"></i> </span>  
         <input class="form-control" type="number" id="idHotel" name="idHotel" placeholder="idHotel" required="required" value="<?php echo $n->idHotel; ?>">
    </div>
       
        
        
        
          
     <div class="form-group">
           <input type="submit"  name="submit"  value="Modificar" class="btn btn-success btn-lg"  required="required" >
    </div>
    <?php } ?>
</form>

                     
                          
                       

                   
</div>
