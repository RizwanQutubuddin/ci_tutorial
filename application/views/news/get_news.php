<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get News</title>
</head>
<body>
    <h1>Get Data</h1>
    <?php echo $this->session->flashdata('message');?>
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Description</th>
                <th>Active</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($get_news)) { ?>
                <tr>
                    <td colspan="5">No recods found</td>
                </tr>
            <?php } else { ?>
            <?php foreach ($get_news as $news) { ?>
                <tr>
                    <td><?php echo $news['id'] ?></td>
                    <td><?php echo $news['title'] ?></td>
                    <td><?php echo $news['description'] ?></td>
                    <td><?php echo $news['active'] ?></td>
                    <td><?php echo anchor('news/edit/'.$news['id'],'Edit')?> | <?php echo anchor('news/delete/'.$news['id'],'Delete')?> | <?php echo anchor('news/details/'.$news['id'],'Details')?> </td>
                </tr>
            <?php }
            }?>
            
        </tbody>
    </table>
</body>
</html>