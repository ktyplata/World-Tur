<div class="col-sm-6 col-sm-offset-2" >
    
    
    
<h1 class="mbr-header__text">Modificar Usuarios</h1>

        
<?php echo form_open('Usuarios/upUsuario');?>

    <?php foreach($usuarios as $n){ ?>

    
   <input type="hidden" name ="id" value="<?php echo $n->idUsuario; ?>">
 
        <label for="user" >Usuario </label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-user"></i> </span>
         <input class="form-control" type="text" id="user" name="user" placeholder="Usuario" required="required" value="<?php echo $n->user;?>" >
        
    </div>
        
        
        <label  for="password">Password</label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-user"></i> </span>  
         <input class="form-control" type="password" id="password" name="password" placeholder="Password" required="required" value = "<?php echo $n->password; ?>">
    </div>
       
        
          
    <div class="form-group">
           <input type="submit"  name="submit"  value="Modificar" class="btn btn-success btn-lg"  required="required" >
    </div>
    <?php } ?>
</form>

                     
                          
                       

                   
</div>

