<?php 

include_once 'config.php';
include_once 'header.php';
//session_start();
if (isset($_SESSION["authen"])){  
  
  
?>       
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>DashBoard</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5   form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12">
        <div class="">
          <div class="x_content">
            <h3>Mirpur Outlet</h3>
            <div class="row">
              <?php
                $check_database_query = mysqli_query($conn, "SELECT * FROM mirpur_outlet");
                if (mysqli_num_rows($check_database_query) > 0) {
                  // output data of each row
                  while($row = mysqli_fetch_assoc($check_database_query)) {
              ?>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                <div class="tile-stats">
                  <div class="count">Product Id: <?php echo $row["product_id"] ?></div>
                  <h3>Total Sell:</h3>
                  <h3><?php echo $row["sell_amount"] ?></h3>
                </div>
              </div>
              <?php
                  } 
                }
                else {
                  echo "0 results";
                }
                
              ?>
            </div>      
          </div>
        </div>
      </div>
    </div>



    <div class="row">
      <div class="col-md-12">
        <div class="">
          <div class="x_content">
            <h3>Uttara Outlet</h3>
            <div class="row">
              <?php
                $check_database_query = mysqli_query($conn, "SELECT * FROM uttara_outlet");
                if (mysqli_num_rows($check_database_query) > 0) {
                  // output data of each row
                  while($row = mysqli_fetch_assoc($check_database_query)) {
              ?>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                <div class="tile-stats">
                  <div class="count">Product Id: <?php echo $row["product_id"] ?></div>
                  <h3>Total Sell:</h3>
                  <h3><?php echo $row["sell_amount"] ?></h3>
                </div>
              </div>
              <?php
                  } 
                }
                else {
                  echo "0 results";
                }
                
              ?>
            </div>      
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12">
        <div class="">
          <div class="x_content">
            <h3>Product ID : 01</h3>
            <div class="row">
              <?php
                $check_database_query = mysqli_query($conn, "SELECT * FROM mirpur_outlet where product_id = 1");
                $check_database_query2 = mysqli_query($conn, "SELECT * FROM uttara_outlet where product_id = 1");
                if (mysqli_num_rows($check_database_query) > 0 && mysqli_num_rows($check_database_query2) > 0) {
                  // output data of each row
                  $row = mysqli_fetch_assoc($check_database_query);
                  while( $row2 = mysqli_fetch_assoc($check_database_query2)) {
              ?>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                <div class="tile-stats">
                
                  <h3>mirpur_outlet</h3>
                  <?php
                  if($row["sell_amount"]>$row2["sell_amount"] ){
                  ?>
                  <h3><?php echo $row["sell_amount"]/$row2["sell_amount"] ?></h3>
                  <?php
                  }else{
                  ?>
                  <h3><?php echo $row["sell_amount"]/$row["sell_amount"] ?></h3>
                  <?php
                  }
                  ?>


                  <h3>uttara_outlet</h3>
                  <?php
                  if($row["sell_amount"]>$row2["sell_amount"] ){
                  ?>
                  <h3><?php echo $row2["sell_amount"]/$row2["sell_amount"] ?></h3>
                  <?php
                  }else{
                  ?>
                  <h3><?php echo $row2["sell_amount"]/$row["sell_amount"] ?></h3>
                  <?php
                  }
                  ?>
         
                </div>
              </div>
              <?php
                  } 
                }
                else {
                  echo "0 results";
                }
                
              ?>
            </div>      
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="">
          <div class="x_content">
            <h3>Product ID : 02</h3>
            <div class="row">
              <?php
                $check_database_query = mysqli_query($conn, "SELECT * FROM mirpur_outlet where product_id = 2");
                $check_database_query2 = mysqli_query($conn, "SELECT * FROM uttara_outlet where product_id = 2");
                if (mysqli_num_rows($check_database_query) > 0 && mysqli_num_rows($check_database_query2) > 0) {
                  // output data of each row
                  $row = mysqli_fetch_assoc($check_database_query);
                  while( $row2 = mysqli_fetch_assoc($check_database_query2)) {
              ?>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                <div class="tile-stats">
                
                <h3>mirpur_outlet</h3>
                  <?php
                  if($row["sell_amount"]>$row2["sell_amount"] ){
                  ?>
                  <h3><?php echo $row["sell_amount"]/$row2["sell_amount"] ?></h3>
                  <?php
                  }else{
                  ?>
                  <h3><?php echo $row["sell_amount"]/$row["sell_amount"] ?></h3>
                  <?php
                  }
                  ?>


                  <h3>uttara_outlet</h3>
                  <?php
                  if($row["sell_amount"]>$row2["sell_amount"] ){
                  ?>
                  <h3><?php echo $row2["sell_amount"]/$row2["sell_amount"] ?></h3>
                  <?php
                  }else{
                  ?>
                  <h3><?php echo $row2["sell_amount"]/$row["sell_amount"] ?></h3>
                  <?php
                  }
                  ?>
         
                </div>
              </div>
              <?php
                  } 
                }
                else {
                  echo "0 results";
                }
                
              ?>
            </div>      
          </div>
        </div>
      </div>
    </div>





  </div>
</div>
<!-- /page content -->
<?php
} else{
  
  header("Location: login.php");
  ob_end_flush();

}
include 'footer.php'; 
?>     
    