<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
</head>
<body>
     
<form action="check_post.php" method="Post" class="conteiner">
       <p><label for="">Name</label><br>
       <input type="text" name="username" placeholder="name"></p>
       <p><label for="">Email</label><br>
       <input type="email" name="email" placeholder="email"></p>
       <p><label for="">Password</label><br>
       <input type="Password" name="Password" placeholder="Password"></p>
       <textarea name="message" placeholder="message"></textarea>
       <p><input type="submit" value="sent"></p>
</form>

<style>
       .conteiner{
              width:300px;
              margin:0 auto;
          
       }
</style>




</body>
</html>