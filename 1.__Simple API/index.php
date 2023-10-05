<?php 
    $con = mysqli_connect("localhost","root","","api");
    if($con) {
        
        $q = "SELECT * FROM api_data";
        $result = mysqli_query($con, $q);
        if($result){
            header("Content-Type: JSON");
            $i = 1;
            while($r = mysqli_fetch_assoc($result)){
                $response[$i]['id'] = $r['id'];
                $response[$i]['name'] = $r['name'];
                $response[$i]['age'] = $r['age'];
                $response[$i]['email'] = $r['email'];
                $i++;
            }
            echo json_encode($response,JSON_PRETTY_PRINT);
        }
        
    }else{
        echo "Database connection failed";
    }
?>