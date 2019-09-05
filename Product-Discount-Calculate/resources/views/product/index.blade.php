<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    @csrf
    Product Description: <input type="text" name="productDes">
    <br>
    List Price: <input type="text" name="listPrice">
    <br>
    Discount Percent: <input type="text" name="discountPercent">
    <br>
    <button type="submit">Calculate</button>
</form>
</body>
</html>
