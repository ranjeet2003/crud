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
        <form name="createUser"action="<?php echo base_url().'index.php/user/create';?>">
            <div class="row">
                
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" value="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="text" name="email" value="" class="form-control">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Create</button>
                        <a href="" class="btn-secondary btn">Cancel</a>
                    </div>
                </div>
               
            </div>
            </form>
        </div>
    
</body>
</html>