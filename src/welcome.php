<html>

<head>
  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="table.js"></script>
  <!------ Include the above in your HEAD tag ---------->
</head>

<body>


<?php
$product=$_POST['product'];
$qty=$_POST['qty'];
$price=$_POST['price'];
$discount=$_POST['discount'];
$total=$_POST['total'];
$sub_total=$_POST['sub_total'];
$count=COUNT($product);
?>

<div class="container">
      <div class="row clearfix">
        <div class="col-md-12">
            <table class="table table-bordered table-hover" id="tab_logic">
            <thead>
              <tr>
                <th class="text-center"> sno </th>
                <th class="text-center"> Description </th>
                <th class="text-center"> Qty </th>
                <th class="text-center"> Full Cost </th>
                <th class="text-center"> Subsidy </th>
                <th class="text-center"> Net Farmer Amount </th>
              </tr>
            </thead>
             <tbody>

<?php
for ($i=0;$i<$count;$i++)
{   ?>
           
            <tr>
                <td><?php echo $i+1; ?></td>
                <td>
                  <?php echo $product[$i]; ?>
                </td>
                <td>
                  <?php echo $qty[$i]; ?> 
                </td>
                <td>
                  <?php echo $price[$i]; ?> 
                </td>
                <td>
                  <?php echo $discount[$i]; ?> 
                </td>
                <td>
                  <?php echo $total[$i]; ?> 
                </td>
                
              </tr>
        
<?php }  ?>
</tbody>
</table>
</div>
</div>

 <div class="row clearfix">
        <div class="col-md-offset-8 col-md-4">
          <table class="table table-bordered table-hover" id="tab_logic">

            <tbody>

              <tr id='addr1'> </tr>
              <tr id='addr100'>
                <td class="text-center" colspan='3'>Grand Total</td>
                <td class="text-center"><input type="number" name='grand_total' value="<?php echo $sub_total?>" placeholder='0.00' class="form-control"
                    id="grand_total" readonly /></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

</body>

</html>