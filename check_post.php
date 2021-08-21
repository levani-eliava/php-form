<?php
$name = $_POST["username"];
$email = $_POST["email"];
$Password = $_POST["Password"];
$message = $_POST["message"];

if(trim($name) == ""){
       echo "თქვენ არ ჩაწერეთ სახელი!!!";
}else if(strlen(trim($name)) <= 1 ){ 
       echo " ასეთი სახელი არ არსებობს!!!";
}else if(trim($email)== "" || trim($Password) == "" || trim($message) == "" ){
       echo "შეავსეთ ყველა ველი!!!";
}else{
       
         $_POST["Password"] = md5($Password); //md5 parolis shtixavs simboloebiT
         echo "<h1>ყველა მონაცემი</h1>";
         foreach($_POST as $key => $value){
               echo "<P>$value</p>";
         }
    
      //      $site = "index.php";
      // exit("<h1>მონაცემები გაგზავნილია</h1>");

           


       
}
?>