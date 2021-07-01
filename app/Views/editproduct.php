<!DOCTYPE html>
<html>
<head>
  <title>Edit product</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   <style> .container {
      max-width: 500px;
    }
    .error {
      display: block;
      padding-top: 5px;
      font-size: 14px;
      color: red;
    }
  </style>
</head>
<body>
  <div class="container mt-2">
  <h1>Edit product</h1><br>
    <form method="post" id="require" name="require" 
    action="<?= site_url('/update') ?>">
      <input type="hidden" name="id" id="id" value="<?php echo $product_obj['id']; ?>">

      <div class="form-group">
        <label>Product Name</label>
        <input type="text" name="product_name" class="form-control" value="<?php echo $product_obj['product_name']; ?>">
      </div>

      <div class="form-group">
        <label>Product Number</label>
        <input type="text" name="product_number" class="form-control" value="<?php echo $product_obj['product_number']; ?>">
      </div>

      <div class="form-group">
        <label>Description</label>
        <input type="text" name="description" class="form-control" value="<?php echo $product_obj['description']; ?>">
      </div>

      <div class="form-group">
        <label>Vat</label>
        <input type="text" name="vat" class="form-control" value="<?php echo $product_obj['vat']; ?>">
      </div>

      <div class="form-group">
        <label>Stock</label>
        <input type="text" name="stock" class="form-control" value="<?php echo $product_obj['stock']; ?>">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-warning">Edit Data</button>
        
      </div>
    </form>
    <a class="fa fa-align-right" aria-hidden="true" href="/productlist"><button class="btn btn-warning">Back</button></a>
    <br>
    <?php
     if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
      }
     ?>
  <div class="mt-3">
     <table id="table_id" class="table table-bordered">
       <thead>
          <tr>
             <th>Product Name</th>
             <th>Product Number</th>
             <th>Description</th>
             <th>Record date</th>
             <th>Modified stock date</th>
             <th>Stock</th>
             <th>Last stock record</th>
          </tr>
       </thead>
       <tbody>
          <tr>
             <td><?php echo $product_obj['product_name']; ?></td>
             <td><?php echo $product_obj['product_number']; ?></td>
             <td><?php echo $product_obj['description']; ?></td>
             <td><?php echo $product_obj['date_record']; ?></td>
             <td><?php echo $product_obj['modify_date']; ?></td>
             <td><?php echo $product_obj['stock']; ?></td>
             <td><?php echo $product_obj['modify_amount']; ?></td>
          </tr>
       </tbody>
     </table>
  </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#require").length > 0) {
      $("#require").validate({
        rules: {
          product_name: {
            required: true,
          },
          product_number: {
            required: true,
          },
          description: {
            required: true,
            maxlength: 60,
          },
          vat: {
            required: true,
          },
          stock: {
            required: true,
          },
        },
        messages: {
          product_name: {
            required: "Product Name is required.",
          },
          product_number: {
            required: "product Number is required.",
          },
          description: {
            required: "description is required.",
            maxlength: "The email should be or equal to 60 chars.",
          },
          vat: {
            required: "Vat is required.",
          },
          stock: {
            required: "Stock is required.",
          },
        },
      })
    }
  </script>
</body>
</html>