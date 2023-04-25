<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    
    
    <link rel="stylesheet" href="css/fitness.css" type="text/css">
</head>
<body>
<!-- Button trigger modal -->
<div class="container align-center"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Add Product
  </button>
</div>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">Add Yor Product Here</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="insert.php" method="POST">
          <input type="text" name="product_name" id="product_name" placeholder="Product Name">
          <input type="text" name="Price" id="Price" placeholder="Price">
        <label>Mfg.Date</label>
          <input type="date" name="mfgdate" id="mfgdate">
        <label>Exp.Date</label>
            <input type="date" name="Exp_date" id="Exp_date">
            <input type="number" name="qut" id="quantity" placeholder="Quantity(Box)">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="sumbit" class="btn btn-primary">ADD</button>
        </div>
      </form>
      </div>
    </div>
  </div>
</body>
</html>