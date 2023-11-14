<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home page</title>
</head>
<body>
<table border="1 width" = '888'>
<tr>
    <th>Sl NO</th>
    <th>Title</th>
    <th>Content</th>
    <th>Author</th>
    <th>Date</th>
    <th>Tags</th>
</tr>
<?php foreach ($blogs as $key => $blog) { ?>
    <tr>
        <td><?php echo ++$key; ?></td>
        <td><?php echo $blog['title']; ?></td>
        <td><?php echo $blog['content']; ?></td>
        <td><?php echo $blog['author']; ?></td>
        <td><?php echo $blog['date']; ?></td>
        <td>
            <?php foreach ($blog['tags'] as $tag) { ?>
                <?php echo $tag; ?><br>
            <?php } ?>
        </td>
    </tr>
<?php } ?>
</table>
</body>
</html>