<!DOCTYPE html>
<html>
<head>
  <title>Add product</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<style>
    .container {
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
  <h1>Add product</h1><br>
    <form method="post" id="require" name="require" 
    action="<?= site_url('/submit-form') ?>">
      <div class="form-group">
        <label>Product_name</label>
        <input type="text" name="product_name" class="form-control">
      </div>

      <div class="form-group">
        <label>Product_number</label>
        <input type="text" name="product_number" class="form-control">
      </div>

      <div class="form-group">
        <label>Description</label>
        <input type="text" name="description" class="form-control">
      </div>

      <div class="form-group">
        <label>Vat</label>
        <input type="text" name="vat" class="form-control">
      </div>

      <div class="form-group">
        <label>Stock</label>
        <input type="text" name="stock" class="form-control">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-success">Add product</button>
        
      </div>
    </form>
    <a class="fa fa-align-right" aria-hidden="true" href="/productlist"><button class="btn btn-success">Back</button></a>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#require").length > 0) {
      $("#require").validate({
        rules: {
          product_number: {
            required: true,
          },
          stock: {
            required: true,
          },
        },
        messages: {
          product_number: {
            required: "Product number is required.",
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