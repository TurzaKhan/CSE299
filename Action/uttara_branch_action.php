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
                $product_id   = $line[0];
                $sell_amount  = $line[1];
                
                
                // Insert member data in the database
                $conn->query("INSERT INTO uttara_outlet ( `product_id`, `sell_amount`) VALUES ($product_id, $sell_amount)");
                    echo $product_id ;
                    
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