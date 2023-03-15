<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ;?></title>
</head>
    <body>

        <div class="container mt-3">
            <h2><?php echo $title ;?></h2>
            <p>User Info</p>
            <div class="card" style="width:400px">
                <?php if($user->profile_photo){?>
                    <img class="card-img-top" src="<?php echo base_url('uploads/'.$user->profile_photo)?>" alt="user image" style="width:100%">

                <?php } else {?>
                    <img class="card-img-top" src="<?php echo base_url('assets/images/userImages.png')?>" alt="user image" style="width:100%">

                <?php }?>
                
                <div class="card-body">
                <h4 class="card-title"><?php echo ucfirst($user->first_name)." ".ucfirst($user->last_name)?></h4>
                <p class="card-text">Email: <?php echo $user->email?></p>
                <p class="card-text">Active: <?php echo $user->active?></p>
                <p class="card-text">Created_at: <?php echo $user->created_at?></p>

            
            </div>
        </div>
    </body>    
</html>