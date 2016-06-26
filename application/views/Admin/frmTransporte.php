<div class="col-sm-6 col-sm-offset-2" >
    
    
    
<h1 class="mbr-header__text">Registra un Transporte</h1>

        
<?php echo form_open('Transporte/addTransporte'); ?>
<form>
    
   
 
        <label for="NumLugares" >Número Lugares </label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-user"></i> </span>
         <input class="form-control" type="text" id="NumLugares" name="NumLugares" placeholder="Número Lugares" required="required" value="<?php echo set_value('Nombre'); ?>">
        
    </div>
        
        
        <label  for="NomTransporte">Nombre Transporte</label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-phone"></i> </span>  
         <input class="form-control" type="tel" id="NomTransporte" name="NomTransporte" placeholder="Nombre Transporte" required="required">
    </div>
       
          
    <div class="form-group">
           <input type="submit"  name="submit"  value="Agregar" class="btn btn-success btn-lg"  required="required" >
    </div>
    
</form>

                     
                          
                       

                   
</div>

