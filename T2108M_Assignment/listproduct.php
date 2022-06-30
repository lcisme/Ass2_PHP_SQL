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
$sql_txt = "select * from product";
$result = $conn -> query($sql_txt);
$listproduct = [];
if ($result -> num_rows>0){
    while ($row = $result -> fetch_assoc()){
        $listproduct[] = $row;
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>List Product</title>
</head>
<style>
    .color tr:nth-child(2n-1){
        background-color: #309dbe;
    }
    .color tr:nth-child(2n+2){
        background-color: #e5d189;
    }
</style>
<body>

<h1 style="text-align: center">Danh Sach San Pham</h1>
<a style="color:#000; margin-left: 630px; background-color: pink; padding: 5px" class="color-primary-key" href="addproduct.php">ADD</a><br><br>

<ul>
    <div class="container">
        <table class="table color">
            <thead>
            <tr class="table-danger">
                <th>Name</th>
                <th>Price</th>
                <th>Unit</th>
                <th>Quantity</th>
                <th>Description</th>
                <th>Status</th>
                <th>Option</th>
            </tr>
            </thead>
            <tbody>
                        <?php foreach ($listproduct as $sp): ?>
                            <tr>
                                <td>   <?php echo $sp["name"];?></td>
                                <td>   <?php echo $sp["price"];?></td>
                                <td>   <?php echo $sp["unit"];?></td>
                                <td>   <?php echo $sp["quantity"];?></td>
                                <td>   <?php echo $sp["description"];?></td>
                                <td>   <?php if ($sp["status"] == 0)
                                       {
                                        echo ("Deactice");
                                       }
                                            else if ($sp["status"] == 1)
                                       {
                                          echo ("Actice");
                                       }?></td>
                                <td>
                                    <a style="color:#000;" onclick="return confirm('Are you sure?')" class="color-primary-key" href="editproduct.php ?id=<?php echo $sp["id"];?>">Edit</a><br>
                                    <a style="color:#000;" onclick="return confirm('Are you sure?')" class="color-primary-key" href="deleteproduct.php ?id=<?php echo $sp["id"];?>">Delete</a><br>
                                </td>
                            </tr>
                        <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</ul>

</body>
</html>
