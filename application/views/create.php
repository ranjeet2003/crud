<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD App(Create user)</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assests/css/bootstrap.min.css';?>">
</head>
<body>
    <div class="navbar navbar-dark bg-dark">
        <div class ="container">
            <a href="#" class="navbar-brand">CRUD App</a>
        </div>
    </div>
        <div class="container" style="padding-top: 10px;">
        <h3>Create User</h3>
        <hr>
        <form method ="post" name="createUser"action="<?php echo base_url().'index.php/user/create';?>">
            <div class="row">
                
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" value="<?php echo set_value('name');?>" class="form-control">
                        <?php echo form_error('name');?>
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="text" name="email" value="<?php echo set_value('email');?>" class="form-control">
                        <?php echo form_error('email');?>
                    </div>
                    <div class="form-group">
                        <label>Mobile</label>
                        <input type="text" name="mobile" value="<?php echo set_value('mobile');?>" class="form-control">
                        <?php echo form_error('mobile');?>
                    </div>
                    <div class="form-group">
                        <label>D.O.B.</label>
                        <input type="date" name="dob" value="<?php echo set_value('dob');?>" class="form-control">
                        <?php echo form_error('dob');?>
                    </div>
                    <div class="form-group">
                        <label>Pin Code</label>
                        <input type="text" name="pin" value="<?php echo set_value('pin');?>" class="form-control">
                        <?php echo form_error('pin');?>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Create</button>
                        <a href="<?php echo base_url().'index.php/user/index';?>" class="btn-secondary btn">Cancel</a>
                    </div>
                </div>
               
            </div>
            </form>
        </div>
    
</body>
</html>