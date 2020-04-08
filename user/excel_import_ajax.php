<?php
include("../valid.php");

 if(isset($_FILES)){
    $filename=$_FILES["file"]["tmp_name"];    
     if($_FILES["file"]["size"] > 0)
     {
        $file = fopen($filename, "r");
        $heading = fgetcsv($file);
        if (empty($heading)) {
          echo json_encode(array('status'=>false,'message'=>'Invalid excel format')); die;
          return;
        }

          $sql = "insert into `demo` ";
          $arr = array();
          $i=0;
          $headingList = '';
          $valueList = '';
          while (! feof($file)) {
            $arr = fgetcsv($file);
  
              if (!empty($arr[0])) {
                  for ($j=0; $j < count($heading); $j++) {
                    if ($j==0) {
                      $valueList .= '("'.$arr[$j].'",';
                    }
                    elseif ($j< (count($heading)-1)) {
                        $valueList .= '"'.$arr[$j].'",';
                    } else {
                        $valueList .= '"'.$arr[$j].'"),';
                    }
                  }
              }
            $i++;
          }

          for ($j=0; $j < count($heading); $j++) {
            if ($j< (count($heading)-1)) {
                $headingList .= "`".$heading[$j]."`,";
            } else {
                $headingList .= "`".$heading[$j]."`";
            }
          }
          fclose($file); 

          $valueList = rtrim($valueList, ',');
          $sql .= "(".$headingList.") values ".$valueList;
          if (mysqli_query($conn, $sql)) {
            echo json_encode(array('status'=>true,'message'=>'Data imported successfully')); die;
          } else {
            echo json_encode(array('status'=>false,'message'=>'Failed to insert. Try again later.')); die;
          }

     }
  } else {
    echo json_encode(array('status'=>false,'message'=>'No file selected')); die;
  }   
 ?>