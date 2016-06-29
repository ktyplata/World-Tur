<div class="col-sm-6 col-sm-offset-2" >
    
    
    
<h1 class="mbr-header__text">Registra un Viaje</h1>

        
<?php echo form_open('Viajes/addViajes'); ?>
<form>
    
   
 
        <label for="Nombre" >Nombre </label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-user"></i> </span>
         <input class="form-control" type="text" id="Nombre" name="Nombre" placeholder="Nombre" required="required" value="<?php echo set_value('Nombre'); ?>">
        
    </div>
        
        
        <label  for="Precio">Precio</label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-dollar"></i> </span>  
         <input class="form-control" type="text" id="Precio" name="Precio" placeholder="Precio" required="required">
    </div>
       
        <label  for="NumEntradas">NumEntradas</label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-tasks"></i> </span>  
         <input class="form-control" type="text" id="NumEntradas" name="NumEntradas" placeholder="NumEntradas" required="required">
    </div>
        
        <label  for="Itinerario">Itinerario</label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-hotel"></i> </span>  
         <input class="form-control" type="text" id="Itinerario" name="Itinerario" placeholder="Itinerario" required="required">
    </div>
        
         <label  for="LugaresVisitados">Lugares Visitados</label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-home"></i> </span>  
         <input class="form-control" type="text" id="LugaresVisitados" name="LugaresVisitados" placeholder="Lugares Visitados" required="required">
    </div>
        
         <label  for="idCliente">idCliente</label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-user-secret"></i> </span>  
         <input class="form-control" type="number" id="idCliente" name="idCliente" placeholder="idCliente" required="required">
    </div>
         
         <label  for="idProcedencia">idProcedencia</label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-user-secret"></i> </span>  
         <input class="form-control" type="number" id="idProcedencia" name="idProcedencia" placeholder="idProcedencia" required="required">
    </div>
         
         
         <label  for="idDestino">idDestino</label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-user-secret"></i> </span>  
         <input class="form-control" type="number" id="idDestino" name="idDestino" placeholder="idDestino" required="required">
    </div>
        
         <label  for="TotalViaje">TotalViaje</label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-dollar"></i> </span>  
         <input class="form-control" type="number" id="TotalViaje" name="TotalViaje" placeholder="TotalViaje" required="required">
    </div>
         
         <label  for="Preciohotel">PrecioHotel</label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-dollar"></i> </span>  
         <input class="form-control" type="number" id="Preciohotel" name="Preciohotel" placeholder="PrecioHotel" required="required">
    </div>
        
          
    <div class="form-group">
           <input type="submit"  name="submit"  value="Agregar" class="btn btn-success btn-lg"  required="required" >
    </div>
    
</form>

                     
                          
                       

                   
</div>
