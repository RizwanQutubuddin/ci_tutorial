<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Signup</title>
</head>
<body>
<div class="container  mt-3">
        
        <div class="row">
            <div class="col-md-4 offset-md-4 mb-3 mt-3">
                <h1><?php echo $title ;?></h1>
                <?php if ($this->session->flashdata('message')) {?>
                    <div class="alert alert-danger"><?php $this->session->flashdata('message')?></div>
                <?php }?>    
                <?php echo form_open('users/login',array('id'=>'loginForm', 'class'=>'form-control'));?>
                    <div class="mb-3 mt-3">
                        <?php echo form_input(array('id'=>'first_name','name'=>'first_name', 'class'=>'form-control','placeholder'=>'First Name','value'=>set_value('first_name')))?>
                        <?php echo form_error('first_name','<div class="error">', '</div>')?>
                    </div>
                    
                    <div class="mb-3 mt-3">
                        <?php echo form_input(array('id'=>'last_name','name'=>'last_name', 'class'=>'form-control','placeholder'=>'Last Name','value'=>set_value('last_name')))?>
                    </div>
                    <div class="mb-3 mt-3">
                        <?php echo form_input(array('id'=>'email','name'=>'email','placeholder'=>'Email','class'=>'form-control','value'=>set_value('email')))?>
                        <?php echo form_error('email','<div class="error">', '</div>')?>
                    </div>
                    <div class="mb-3 mt-3">
                        <?php echo form_input(array('id'=>'confirm','name'=>'confirm','type'=>'password', 'class'=>'form-control','placeholder'=>'Confirm Password','value'=>set_value('confirm')))?>
                        <?php echo form_error('confirm','<div class="error">', '</div>')?>
                    </div>
                    <div><?php echo form_input(array('id'=>'submit','name'=>'submit','type'=>'submit','value'=>'Submit','class'=>'btn btn-success'))?></div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</body>
</html>