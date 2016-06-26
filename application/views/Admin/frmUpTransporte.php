<div class="col-sm-6 col-sm-offset-2" >
    
    
    
<h1 class="mbr-header__text">Modificar Transporte</h1>

        
<?php echo form_open('Transporte/upTransporte');?>

    <?php foreach($transportes as $n){ ?>

    
   <input type="hidden" name ="id" value="<?php echo $n->idHotel; ?>">
 
        <label for="NumLugares" >Número Lugares </label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-user"></i> </span>
         <input class="form-control" type="number" id="NumLugares" name="NumLugares" placeholder="Número Lugares" required="required" value="<?php echo $n->NumLugares; ?>">
        
    </div>
        
        
        <label  for="NomTransporte">Nombre Transporte</label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-bus"></i> </span>  
         <input class="form-control" type="text" id="NomTransporte" name="NomTransporte" placeholder="Nombre Transporte" required="required"  value="<?php echo $n->NomTransporte; ?>">
    </div>
        
        
    <div class="form-group">
           <input type="submit"  name="submit"  value="Modificar" class="btn btn-success btn-lg"  required="required" >
    </div>
    <?php } ?>
</form>

                     
                          
                       

                   
</div>




