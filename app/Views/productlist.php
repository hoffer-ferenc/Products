<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Product details</title>
<!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<div class="container mt-4">
<h1>Product details</h1>

<div class="d-flex justify-content-end">
<a href="<?php echo site_url('/addproduct') ?>" class="btn btn-primary">Add product</a>
</div>
<?php
     if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
      }
?>
  <div class="mt-3">
     <table id="table_id" class="table table-bordered">
       <thead>
          <tr>
             <th>Id</th>
             <th>Product Name</th>
             <th>Product Number</th>
             <th>Description</th>
             <th>Vat</th>
             <th>Record date</th>
             <th>Stock</th>
             <th>Edit/Delete</th>
          </tr>
       </thead>
       <tbody>
          <?php if($details): ?>
          <?php foreach($details as $detail): ?>
          <tr>
             <td><?php echo $detail['id']; ?></td>
             <td><?php echo $detail['product_name']; ?></td>
             <td><?php echo $detail['product_number']; ?></td>
             <td><?php echo $detail['description']; ?></td>
             <td><?php echo $detail['vat']; ?></td>
             <td><?php echo $detail['date_record']; ?></td>
             <td><?php echo $detail['stock']; ?></td>
             <td>
              <a href="<?php echo base_url('editproduct/'.$detail['id']);?>" class="btn btn-warning">Edit</a>
              <a href="<?php echo base_url('delete/'.$detail['id']);?>" class="btn btn-danger">Delete</a>
            </td>
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
     </table>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
      $('#table_id').DataTable();
  } );
</script>
</body>
</html>