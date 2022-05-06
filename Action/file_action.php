<?php

    include '../config.php';
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    
    // Validate whether selected file is a CSV file
    if(!empty($_FILES['u_file']['name']) && in_array($_FILES['u_file']['type'], $csvMimes)){
        
        // If the file is uploaded
        if(is_uploaded_file($_FILES['u_file']['tmp_name'])){
            
            // Open uploaded CSV file with read-only mode
            $csvFile = fopen($_FILES['u_file']['tmp_name'], 'r');
            
            // Skip the first line
            fgetcsv($csvFile);
            
            // Parse data from CSV file line by line
            while(($line = fgetcsv($csvFile)) !== FALSE){
                // Get row data
                $product_name   = $line[0];
                $product_image  = $line[1];
                $product_category  = $line[2];
                $product_price = $line[3];
                $product_details = $line[4];
                $product_amount = $line[5];
                $supplier_name = $line[6];
                
                
                // Insert member data in the database
                $sql = "INSERT INTO product ( `product_name`, `product_image`, `product_category`, `product_price`, `product_details`, `product_amount`, `supplier_name`)
                 VALUES ('$product_name', '$product_image', '$product_category', $product_price, '$product_details', '$product_amount', '$supplier_name')";
                //$conn->query("INSERT INTO product (`product_name`, `product_image`, `product_category`, `product_price`, `product_details`, `product_amount`, `supplier_name`) VALUES ($product_name, $product_image, $product_category, $product_price, $product_details, $product_amount, $supplier_name)");
                if ($conn->query($sql) === TRUE) {
                    echo "New record created successfully";
                  } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                  }




                
                // $check_database_query = mysqli_query($conn, "SELECT * FROM mirpur_outlet where product_id = 1");
                // $check_database_query2 = mysqli_query($conn, "SELECT * FROM uttara_outlet where product_id = 1");
                // if (mysqli_num_rows($check_database_query) > 0 && mysqli_num_rows($check_database_query2) > 0) {
                //   // output data of each row

                //   //mirpur
                //   $row = mysqli_fetch_assoc($check_database_query);
                //   while( $row2 = mysqli_fetch_assoc($check_database_query2)) {
            
                //   if($row["sell_amount"]>$row2["sell_amount"] ){

                //   $mirpur_ratio =  $row["sell_amount"]/$row2["sell_amount"] ;
                //   }else{
                  
                //     $mirpur_ratio =  $row["sell_amount"]/$row["sell_amount"] ;
                 
                //   }
                  


                //  //uttara
                //   if($row["sell_amount"]>$row2["sell_amount"] ){
                  
                //     $uttara_ratio =  $row2["sell_amount"]/$row2["sell_amount"];
                  
                //   }else{
                //     $uttara_ratio = $row2["sell_amount"]/$row["sell_amount"] ;
                  
                //   }
                  
         
             
                //   } 
                // }
                // else {
                //   echo "0 results";
                // }

                // $product_id = 1;
                // $date = date();
                // $mirpur_product_amount = $product_amount* ( $mirpur_ratio/ ($mirpur_ratio + $uttara_ratio));
                // $uttara_product_amount = $product_amount* ( $uttara_ratio/ ($mirpur_ratio + $uttara_ratio));
                // $sql2 = "INSERT INTO mirpur_outlet_product ( `product_id`, `date`, `product_amount`)
                //  VALUES ('$product_id', '$date', '$mirpur_product_amount')";
                
                // if ($conn->query($sql2) === TRUE) {
                //     echo "New record created successfully";
                //   } else {
                //     echo "Error: " . $sql2 . "<br>" . $conn->error;
                //   }

                //   $sql3 = "INSERT INTO uttara_outlet_product ( `product_id`, `date`, `product_amount`)
                //  VALUES ('$product_id', '$date', '$uttara_product_amount')";
                
                // if ($conn->query($sql3) === TRUE) {
                //     echo "New record created successfully";
                //   } else {
                //     echo "Error: " . $sql2 . "<br>" . $conn->error;
                //   }
                
              
                    
            }
            
            // Close opened CSV file
            fclose($csvFile);
            
            echo "Successfull";
        }else{
          echo "error";
        }
    }else{
        echo "Invalid File";
    }

// Redirect to the listing page
header("refresh:1; url=../index.php");
                                            
                               
    
?>


