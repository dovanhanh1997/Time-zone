<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<form action="index.php?page=add" method="post">
    <button>Add Product</button>
</form>

<div class="container">
    <h2>List Product</h2>
<table class="table table-striped">
    <tr>
        <th>Product Code</th>
        <th>Product Name</th>
        <th>Product Vendor</th>
        <th>Product Stock</th>
        <th>Product Price</th>
        <th>MSRP</th>
    </tr>
    <?php foreach ($products as $product){
       ?>
        <tr>
            <td><?php echo $product->productCode ?></td>
            <td><?php echo $product->productName ?></td>
            <td><?php echo $product->productVendor ?></td>
            <td><?php echo $product->productStock ?></td>
            <td><?php echo $product->productPrice ?></td>
            <td><?php echo $product->MSRP ?></td>
        </tr>
        <?php
    }?>
</table>
</div>

<?php
function test(){
    echo 'hello';
}
?>