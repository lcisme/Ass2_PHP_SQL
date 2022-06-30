<?php
$severName = "localhost";
$userName = "root";
$password = "";
$dbName = "t2108m";
// connect db
$conn = new mysqli($severName,$userName,$password,$dbName);
if($conn -> connect_error){
    die($conn -> connect_error);
}
$sql_txt = "select * from product where id=".$_GET["id"];
$result = $conn -> query($sql_txt);
$product = null;
if ($result -> num_rows>0){
    while ($row = $result -> fetch_assoc()){
        $product = $row;
    }
}
if ($product == null){
    die("Product Not Found");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Add Products</title>
</head>

<body>
<div class="container">
    <div class=" row justify-content-around">
        <form action="updateproduct.php?id=<?php echo $product["id"];?>" method="post" class="col-md-6 bg-light p-3 my-3">
            <h2 class="text-center h3 py-3">Add Products</h2>
            <div class="form-group">
                <label for="name1">Name:</label>
                <input type="text" value="<?php echo $product["name"]?>" required class="form-control" id="name1" placeholder="Name Product" name="name1">
            </div>
            <div class="form-group">
                <label for="date1">Price:</label>
                <input type="text" value="<?php echo $product["price"]?>" required class="form-control" id="price1" placeholder="Price" name="price1">
            </div>
            <div class="form-group">
                <label for="unit1">Unit:</label>
                <input type="text" value="<?php echo $product["unit"]?>" required class="form-control" id="unit1" placeholder="Unit" name="unit1">
            </div>
            <div class="form-group">
                <label for="quantity1">Quantity:</label>
                <input type="text" value="<?php echo $product["quantity"]?>" class="form-control" id="quantity1" placeholder="Quantity" name="quantity1">
            </div>
            <div class="form-group">
                <label for="description1">Description:</label>
                <input type="tel" value="<?php echo $product["description"]?>" required class="form-control" id="description1" placeholder="Description" name="description1">
            </div>
            <div class="form-group">
                <p>Status: </p>
                <input type="radio" id="deactice1" name="status1" value="0"
                    <?php if (($product["status"])==0)
                {
                    echo "checked='checked'";
                }
                ?>
                >
                <label>Deactice</label>
                <input  type="radio" id="actice1" name="status1" value="1"
                    <?php if (($product["status"])==1)
                    {
                        echo "checked='checked'";
                    }
                    ?>
                >
                <label>Actice</label><br>
            </div><br>
            <button  type="submit" class="btn btn-primary ">Submit</button>
        </form>
    </div>

</div>
</body>
</html>