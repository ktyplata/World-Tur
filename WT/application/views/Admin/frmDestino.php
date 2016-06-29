<div class="col-sm-6 col-sm-offset-2" >
    
    
    
<h1 class="mbr-header__text">Registra un Destino</h1>

        
<?php echo form_open('Destino/addDestino'); ?>
<form>
    
   
 
        <label for="NumLugares" >LugarLlegada </label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-home"></i> </span>
         <input class="form-control" type="text" id="NumLugares" name="NumLugares" placeholder="Número Lugares" required="required" value="<?php echo set_value('Nombre'); ?>">
        
    </div>
        
        
        <label  for="HorarioLlegada">HorarioLlegada</label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-calendar"></i> </span>  
         <input class="form-control" type="datetime" id="HorarioLlegada" name="HorarioLlegada" placeholder="HorarioLlegada" required="required">
    </div>
       
         
        <label  for="idHotel">idHotel</label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-user-secret"></i> </span>  
         <input class="form-control" type="number" id="idHotel" name="idHotel" placeholder="idHotel" required="required">
    </div>
       
          
    <div class="form-group">
           <input type="submit"  name="submit"  value="Agregar" class="btn btn-success btn-lg"  required="required" >
    </div>
    
</form>

                     
                          
                       

                   
</div>

