<?php
    include 'backyard/include/connect.php';
    session_start();
    
    $uid=$_POST['uid'];
    $pid=$_POST['pid'];
    //echo $pid;
    $product_review_rating=$_POST['product_review_rating'];
    $product_review_message=$_POST['product_review_message'];
    
        $sql=$link->insert("product_review",array("user_id"=>$uid,"product_id"=>$pid,"product_review_rating"=>$product_review_rating,"product_review_message"=>$product_review_message));
        if($sql)
        {
            echo "";
        }
        else
        {
            echo "Error";
        }
 ?>