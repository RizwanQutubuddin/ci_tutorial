<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel='stylesheet'/>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="javascript:void(0)">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <?php echo anchor('pages/view/about','About',array('class' => 'nav-link'))?>
            </li>
            <li class="nav-item">
                <?php echo anchor('pages/view/service','Service',array('class' => 'nav-link'))?>
            </li>
            <li class="nav-item">
                <?php echo anchor('pages/view/contact','Contact',array('class' => 'nav-link'))?>
            </li>
        </ul>


        <ul class="navbar-nav">
        
            <?php if($this->session->userdata('authenticated')){?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><?php echo ucfirst($this->session->userdata('first_name'))?></a>
                    <ul class="dropdown-menu">
                    
                        <li><?php echo anchor('users/upload','Change Image',array('class' => 'dropdown-item'))?></li>
                        <li><a class="dropdown-item" href="#">Change Password</a></li>
                        <li><?php echo anchor('users/logout','Logout',array('class' => 'dropdown-item'))?></li>
                    </ul>
                </li>
            <?php }else{?>
                <li class="nav-item">
                    <?php echo anchor('users/login','Login',array('class' => 'nav-link'))?>
                </li>
                <li class="nav-item">
                    <?php echo anchor('users/signup','Signup',array('class' => 'nav-link'))?>
                </li>
            <?php }?>
            
        </ul>
        
    </div>
  </div>
</nav>

