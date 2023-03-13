<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container  mt-3">
        
        <div class="row">
            <div class="col-md-4 offset-md-4 mb-3 mt-3">
                <h1><?php echo $title ;?></h1>
                <?php if ($this->session->flashdata('message')) {?>
                    <div class="alert alert-danger"><?php $this->session->flashdata('message')?></div>
                <?php }?>    
                <?php echo form_open('users/login',array('id'=>'loginForm', 'class'=>'sign-form'));?>
                    <div class="mb-3 mt-3">
                        <?php echo form_input(array('id'=>'email','name'=>'email','placeholder'=>'Email','class'=>'form-control','value'=>set_value('email')))?>
                        <?php echo form_error('email','<div class="error">', '</div>')?>
                    </div>
                    <div class="mb-3 mt-3">
                        <?php echo form_input(array('id'=>'password','name'=>'password','type'=>'password','placeholder'=>'Password','class'=>'form-control','value'=>set_value('password')))?>
                        <?php echo form_error('password','<div class="error">', '</div>')?>
                    </div>
                    <div><?php echo form_input(array('id'=>'submit','name'=>'submit','type'=>'submit','value'=>'Submit'))?></div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</body>
</html>