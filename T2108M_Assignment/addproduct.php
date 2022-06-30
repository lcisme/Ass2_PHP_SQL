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
        <form action="postProduct.php" method="post" class="col-md-6 bg-light p-3 my-3">
            <h2 class="text-center h3 py-3">Add Products</h2>
            <div class="form-group">
                <label for="name1">Name:</label>
                <input type="text" required class="form-control" id="name1" placeholder="Name Product" name="name1">
            </div>
            <div class="form-group">
                <label for="date1">Price:</label>
                <input type="text" required class="form-control" id="price1" placeholder="Price" name="price1">
            </div>
            <div class="form-group">
                <label for="unit1">Unit:</label>
                <input type="text" required class="form-control" id="unit1" placeholder="Unit" name="unit1">
            </div>
            <div class="form-group">
                <label >Quantity:</label>
                <input type="text" class="form-control" id="quantity1" placeholder="Quantity" name="quantity1">
            </div>
            <div class="form-group">
                <label >Description:</label>
                <input type="tel" required class="form-control" id="description1" placeholder="Description" name="description1">
            </div>
            <div class="form-group">
                <p>Status: </p>
                <input type="radio" id="deactice1" name="status1" value="0">
                <label >Deactice</label>
                <input type="radio" id="actice1" name="status1" value="1" checked="checked">
                <label >Actice</label><br>
            </div><br>
            <button  type="submit" class="btn btn-primary ">Submit</button>
        </form>
    </div>

</div>
</body>
</html>