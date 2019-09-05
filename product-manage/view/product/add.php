<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<form action="index.php?page=add" method="post">
    <div class="form-group">
        <label for="productCode">Product Code: </label>
        <input type="text" name="productCode">
    </div>
    <div class="form-group">
        <label for="productName">Product Name:</label>
        <input type="text" name="productName">
    </div>
    <div class="form-group">
        <label for="productStock">Product Stock:</label>
        <input type="text" name="productStock">
    </div>
    <div class="form-group">
        <label for="productVendor">Product Vendor:</label>
        <input type="text" name="productVendor">
    </div>
    <div class="form-group">
        <label for="buyPrice">Product Price:</label>
        <input type="number" name="buyPrice">
    </div>
    <div class="form-group">
        <label for="MSRP">Product MSRP:</label>
        <input type="text" name="MSRP">
    </div>
    <div class="form-group">
        <input type="reset" name="reset" value="Reset">
    </div>


    <button type="submit" class="btn btn-default">Submit</button>
</form>
<a href="index.php">List Products</a>