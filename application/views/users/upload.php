<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;?></title>
</head>
<body>
    <div class="container  mt-3">
        
        <div class="row">
            <div class="col-md-4 offset-md-4 mb-3 mt-3">
                <h1><?php echo $title ;?></h1>
                <?php if ($this->session->flashdata('message')) {?>
                    <div class="alert alert-danger"><?php $this->session->flashdata('message')?></div>
                <?php }?>    
                <?php echo form_open_multipart('users/upload',array('id'=>'loginForm', 'class'=>'sign-form'));?>
                    <div class="mb-3 mt-3">
                        <?php echo form_input(array('id'=>'userImage','name'=>'userImage','type'=>'file','placeholder'=>'file','class'=>'form-control'))?>
                        <?php echo form_error('userImage','<div class="error">', '</div>')?>
                    </div>
                    <div><?php echo form_input(array('id'=>'submit','name'=>'submit','type'=>'submit','value'=>'Submit'))?></div>
                <?php echo form_close();?>
            </div>
            <?php if(!empty($upload_data)){?>
                <div class="col-md-4">
                    <ul>
                        <?php foreach ($upload_data as $item => $value):?>
                            <li><?php echo $item;?>: <?php echo $value;?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php }?>
            
        </div>
    </div>
</body>
</html>