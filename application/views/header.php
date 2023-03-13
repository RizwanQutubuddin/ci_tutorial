<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title?></title>
    <link href="<?php echo base_url().'assets/css/bootstrap.min.css'?>" rel='stylesheet'/>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
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
        <form class="d-flex">
            <input class="form-control me-2" type="text" placeholder="Search">
            <button class="btn btn-primary" type="button">Search</button>
        </form>
    </div>
  </div>
</nav>

<div class="container-fluid mt-3">
  <h3>Navbar Forms</h3>
  <p>You can also include forms inside the navigation bar.</p>
</div>

