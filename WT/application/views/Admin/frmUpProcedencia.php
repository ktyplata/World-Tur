
<?php
              if($this->session->userdata('autentificado')){


              	?>
<h1 style="float: left; color: wheat; margin-left: 5%;"> Bienvenid@ <?php  echo $this->session->userdata('user'); 
	?> al CPanel  </h1> 
            <?php	
              }  else { ?>
                  <?php echo "<script>
        alert('No se quien eres');
        
        </script>";?>
            <?php
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
    
    
    
<h1 class="mbr-header__text">Modificar Procedencia</h1>

        

<?php echo validation_errors(); ?>
<form action="<?php echo base_url();?>index.php/Procedencia/upProcedencia" method="post">
    <?php foreach($procedencias as $n){ ?>

    
   <input type="hidden" name ="idProcedencia" value="<?php echo $n->idProcedencia; ?>">
 
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
         <select  class="form-control" id="idProveedor" name="idProveedor" placeholder="idProveedor" required="required"> 
            
             <option value="<?php echo $n->idProveedor; ?>"> <?php echo $n->idProveedor; ?> </option>
             <option value="0"> Selecciona idProveedor </option>    
             <option value="1"> 1</option>  
             <option value="2">2 </option>  
             <option value="3">3 </option>  
             <option value="4">4 </option>  
             <option value="6">6 </option>  
             <option value="7">7 </option>  
         
      
        </select>  
    </div>

   
     <div class="form-group">
           <input type="submit"  name="submit" onclick="return confirmar()"   value="Modificar" class="btn btn-success btn-lg"  required="required" >
           <a  href="<?php echo base_url();?>index.php/Procedencia/getProcedencia"><button style="float:right;" type="button"   class="btn btn-info btn-lg" > Cancelar</button></a>
    </div>
    <?php } ?>
</form>

                     
                          
                       

                   
</div>
<script type="text/javascript">
            function confirmar(){
        if(confirm('¿Realmente deseas modificar esta procedencia ?'))
            return true;
        
                else
                    return false;
        }
        </script>  