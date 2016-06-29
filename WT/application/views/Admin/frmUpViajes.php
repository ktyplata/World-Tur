<div class="col-sm-6 col-sm-offset-2" >
    
    
    
<h1 class="mbr-header__text">Modificar Viajes</h1>

        
<?php echo form_open('Viajes/upViajes');?>

    <?php foreach($viajes as $n){ ?>

    
   <input type="hidden" name ="id" value="<?php echo $n->idViajes; ?>">
 
        <label for="Nombre" >Nombre </label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-user"></i> </span>
         <input class="form-control" type="text" id="Nombre" name="Nombre" placeholder="Nombre" required="required" value="<?php echo $n->Nombre; ?>">
        
    </div>
        
        <label  for="Precio">Precio</label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-dollar"></i> </span>  
         <input class="form-control" type="text" id="Precio" name="Precio" placeholder="Precio" required="required" value="<?php echo $n->Precio; ?>">
    </div>
       
        <label  for="NumEntradas">NumEntradas</label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-tasks"></i> </span>  
         <input class="form-control" type="text" id="NumEntradas" name="NumEntradas" placeholder="NumEntradas" required="required" value="<?php echo $n->NumEntradas; ?>">
    </div>
        
        <label  for="Itinerario">Itinerario</label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-hotel"></i> </span>  
         <input class="form-control" type="text" id="Itinerario" name="Itinerario" placeholder="Itinerario" required="required" value="<?php echo $n->Itinerario; ?>">
    </div>
        
         <label  for="LugaresVisitados">Lugares Visitados</label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-home"></i> </span>  
         <input class="form-control" type="text" id="LugaresVisitados" name="LugaresVisitados" placeholder="Lugares Visitados" required="required" value="<?php echo $n->LugaresVisitados; ?>">
    </div>
        
         <label  for="idCliente">idCliente</label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-user-secret"></i> </span>  
         <input class="form-control" type="number" id="idCliente" name="idCliente" placeholder="idCliente" required="required" value="<?php echo $n->idCliente; ?>">
    </div>
         
         <label  for="idProcedencia">idProcedencia</label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-user-secret"></i> </span>  
         <input class="form-control" type="number" id="idProcedencia" name="idProcedencia" placeholder="idProcedencia" required="required" value="<?php echo $n->idProcedencia; ?>">
    </div>
         
         
         <label  for="idDestino">idDestino</label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-user-secret"></i> </span>  
         <input class="form-control" type="number" id="idDestino" name="idDestino" placeholder="idDestino" required="required" value="<?php echo $n->idDestino; ?>">
    </div>
        
         <label  for="TotalViaje">TotalViaje</label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-dollar"></i> </span>  
         <input class="form-control" type="number" id="TotalViaje" name="TotalViaje" placeholder="TotalViaje" required="required" value="<?php echo $n->TotalViaje; ?>">
    </div>
         
         <label  for="Preciohotel">PrecioHotel</label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-dollar"></i> </span>  
         <input class="form-control" type="number" id="Preciohotel" name="Preciohotel" placeholder="PrecioHotel" required="required" value="<?php echo $n->Preciohotel; ?>">
    </div>
        
        
          
    <div class="form-group">
           <input type="submit"  name="submit"  value="Modificar" class="btn btn-success btn-lg"  required="required" >
    </div>
    <?php } ?>
</form>

                     
                          
                       

                   
</div>

