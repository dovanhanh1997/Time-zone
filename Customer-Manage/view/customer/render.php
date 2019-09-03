<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <h1>LIBRARIES MANAGER</h1><br><br>
    <h2><a href="books/bookList.php">Book</a>|Reader|Borrow Books|Categories</h2>
</head>
<body>
<h3>Categories List</h3>
<div>
    <table border="0" style="border-collapse: collapse; width: 100%; border: 1px solid navy;">
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Delete/Edit</th>

        </tr><?php
        foreach ($customers as $key => $customer) {
            ?><tr>
            <td><?php echo ++$key ?></td>
            <td><?php echo $customer->name ?></td>
            <td><?php echo $customer->email ?></td>
            <td><?php echo $customer->address ?></td>
            <td><a href="./index.php?page=delete&id=<?php echo $customer->id; ?>">Delete</a></td>
            <td><a href="./index.php?page=edit&id=<?php echo $customer->id; ?>">Edit</a></td>
            </tr><?php
        }
        ?>
    </table>
</div>
<a href="./index.php?page=add">Add category</a>
</body>
</html>