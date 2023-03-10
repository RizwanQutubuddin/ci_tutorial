<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <h1><?= $title?></h1>

    <h2>Welcome Index page</h2>
    <ul>
        <?php foreach ($users as $user) {?>
            <li><?=$user?></li>
        <?php } ?>
    </ul>

    <h3><?php echo base_url() ?></h3>
    <h4><?= anchor('user/signup','Sign Up')?></h4>

</body>
</html>