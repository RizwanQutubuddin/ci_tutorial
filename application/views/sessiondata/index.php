<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session</title>
</head>
<body>
    <h1>Session</h1>
    <p>'array' : <?php print_r($this->session->flashdata('array'));?></p>

    <h5>userdata('name') : <?php echo $this->session->userdata('name');?>
    <h5>userdata('email') : <?php echo $this->session->userdata('email');?>
    <h5>userdata('phone') : <?php echo $this->session->userdata('phone');?>

    <h5>tempdata:dob : <?php echo $this->session->tempdata('dob');?>
    <h5>mark_as_tempt name : <?php echo $this->session->tempdata('name');?>

    <h5>flashdata array : <?php print_r($this->session->flashdata('array'));?>
    <h5>flashdata id : <?php echo $this->session->flashdata('id');?>
    <h5>flashdata message : <?php echo $this->session->flashdata('message');?>
    <h5>mark_as_flash phone : <?php echo $this->session->flashdata('phone');?>
</body>
</html>