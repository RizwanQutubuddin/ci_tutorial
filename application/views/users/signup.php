<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Signup</title>
</head>
<body>
    <h1><?php echo $title ;?></h1>
    <div>
        <?php echo form_open('users/signup',array('id'=>'signupForm', 'class'=>'sign-form'));?>

        <div>
            <?php echo form_input(array('id'=>'first_name','name'=>'first_name','placeholder'=>'First Name','value'=>set_value('first_name')))?>
            <?php echo form_error('first_name','<div class="error">', '</div>')?>
        </div>
        <div><?php echo form_input(array('id'=>'last_name','name'=>'last_name','placeholder'=>'Last Name','value'=>set_value('last_name')))?></div>
        <div>
            <?php echo form_input(array('id'=>'email','name'=>'email','placeholder'=>'Email','value'=>set_value('email')))?>
            <?php echo form_error('email','<div class="error">', '</div>')?>

        </div>
        <div>
            <?php echo form_input(array('id'=>'password','name'=>'password','type'=>'password','placeholder'=>'Password','value'=>set_value('password')))?>
            <?php echo form_error('password','<div class="error">', '</div>')?>

        </div>
        <div>
            <?php echo form_input(array('id'=>'confirm','name'=>'confirm','type'=>'password','placeholder'=>'Confirm Password','value'=>set_value('confirm')))?>
            <?php echo form_error('confirm','<div class="error">', '</div>')?>

        </div>
        <div><?php echo form_input(array('id'=>'submit','name'=>'submit','type'=>'submit','value'=>'Submit'))?></div>

        <?php echo form_close();?>
    </div>
</body>
</html>