<?php
              if($this->session->userdata('autentificado')){


              	?>
<h1 style="float: left; color: wheat; margin-left: 5%;"> Bienvenid@ <?php  echo $this->session->userdata('user'); 
	?> al CPanel  </h1> 
            <?php	
              }  else {
                  redirect('Admin/login');
}
              ?>
<?php
                if(!$this->session->userdata('autentificado')){
                    	 ?>
                   <?php
               }else{
               	?>
<a  href="<?php echo base_url();?>index.php/Usuarios/cerrarSesion"><button  class="btn btn-warning" style="color: white; margin-top: 10px; float: right; margin-right: 5%;"> Cerrar Sesion</button></a>
<?php
                        }
                        ?>
<br>

<script src="https://code.jquery.com/jquery-3.0.0.js" integrity="sha256-jrPLZ+8vDxt2FnE1zvZXCkCcebI/C8Dt5xyaQBjxQIo="
			  crossorigin="anonymous"></script>

<div class="col-sm-6 col-sm-offset-2" >
    
    
    
<h1 class="mbr-header__text">Modificar Viajes</h1>

        

<?php echo validation_errors(); ?>
<form action="<?php echo base_url();?>index.php/Viajes/upViajes" method="post">

    <?php foreach($viajes as $n){ ?>

    
<input type="hidden" id="idViajes" name="idViajes" value="<?php echo $n->idViajes; ?>">
 
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
         <select  class="form-control" name="idCliente" id="idCliente" placeholder="idCliente" required="required"> 
         
            <option value="<?php echo $n->idCliente; ?>"> <?php echo $n->idCliente; ?> </option>
             <option value="0"> Selecciona idCliente </option> 
             <option value="1"> 1</option>  
             <option value="2">2 </option>  
             <option value="3">3 </option>  
             <option value="4">4 </option>  
             <option value="9">9 </option>  
             <option value="10">10 </option>  
             <option value="11">11 </option>  
         
      
        </select>   
        
    </div>
         
         <label  for="idProcedencia">idProcedencia</label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-user-secret"></i> </span>
         <select  class="form-control" name="idProcedencia" id="idCliente" placeholder="idProcedencia" required="required"> 
         
            <option value="<?php echo $n->idProcedencia; ?>"> <?php echo $n->idProcedencia; ?> </option>
             <option value="0"> Selecciona idProcedencia</option> 
             <option value="1"> 1</option>  
             <option value="2">2 </option>  
             <option value="3">3 </option>  
             <option value="4">4 </option>  
             <option value="5">5 </option>  
             <option value="6">6 </option>  
             <option value="7">7 </option>  
             <option value="8">8</option>  
         
      
        </select>   
        
    </div>
         
         <label  for="idDestino">idDestino</label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-user-secret"></i> </span>
         <select  class="form-control" name="idDestino" id="idCliente" placeholder="idDestino" required="required"> 
         
            <option value="<?php echo $n->idDestino; ?>"> <?php echo $n->idDestino; ?> </option>
             <option value="0"> Selecciona idDestino</option> 
             <option value="3">3 </option>  
             <option value="4">4 </option>  
             <option value="5">5 </option>  
             <option value="6">6 </option>  
             <option value="7">7 </option>  
             <option value="8">8</option>   
         
      
        </select>   
        
    </div>
         
        
<!--         <label  for="TotalViaje">TotalViaje</label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-dollar"></i> </span>  
         <input class="form-control" type="number" id="TotalViaje" name="TotalViaje" placeholder="TotalViaje" required="required" value="<?php echo $n->TotalViaje; ?>">
    </div>
         
         <label  for="Preciohotel">PrecioHotel</label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-dollar"></i> </span>  
         <input class="form-control" type="number" id="Preciohotel" name="Preciohotel" placeholder="PrecioHotel" required="required" value="<?php echo $n->Preciohotel; ?>">
    </div>-->
        
        
          
    <div class="form-group">
           <input type="submit"  name="submit" onclick="return confirmar()" value="Modificar" class="btn btn-success btn-lg"  required="required" >
            <a  href="<?php echo base_url();?>index.php/Viajes/getViajes"><button style="float:right;" type="button"   class="btn btn-info btn-lg" > Cancelar</button></a>
    </div>
    <?php } ?>
</form>


                
                          
                       

                   
</div>

  <script type="text/javascript">
            function confirmar(){
        if(confirm('¿Realmente deseas modificar este viaje ?'))
            return true;
        
                else
                    return false;
        }
        </script>    