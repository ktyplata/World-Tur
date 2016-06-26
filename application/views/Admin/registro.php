<div class="col-sm-6 col-sm-offset-2" >
    
    
    
<h1 class="mbr-header__text">Registra a un Administrador</h1>

        
<?php echo form_open('Usuarios/addUsuario'); ?>
<form>
    
   
 
        <label for="user" >Usuario </label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-user"></i> </span>
         <input class="form-control" type="text" id="user" name="user" placeholder="Usuario" required="required" value="<?php echo set_value('user'); ?>">
        
    </div>
        
        
        <label  for="password">Password</label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-user"></i> </span>  
         <input class="form-control" type="password" id="password" name="password" placeholder="Password" required="required">
    </div>
       
        
          
    <div class="form-group">
           <input type="submit"  name="submit"  value="Agregar" class="btn btn-success btn-lg"  required="required" >
    </div>
    
</form>

                     
                          
                       

                   
</div>
