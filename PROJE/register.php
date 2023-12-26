<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/giris.css">
    <title>KayıtOl</title>
 </head>
<body>
    
    <div class="container">
    <div class="box form-box">
        <?php  
        
        include("php/config.php");
        if(isset($_POST['submit'])){
            $username= $_POST['username'];
            $email= $_POST['email'];
            $age= $_POST['age'];
            $password= $_POST['password'];
        //verifying the unique email
        
        $verify_query=mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");
        if(mysqli_num_rows($verify_query) !=0) {
            
            echo "<div class='message'>
                 <p>Bu email kullaniliyor,lutfen baska bir tane deneyin</p>
                 </div><br>";
            echo "<a href='javascript:self.history.back()' ><button class='btn'>Go Back</button>";
        }
        else{
            
            mysqli_query($con,"INSERT INTO users(Username,Email,Age,Password) VALUES('$username','$email','$age','$password')") or die("error occured");
             echo "<div class='message'>
                 <p>kayıt basarili</p>
                 </div><br>";
            echo "<a href='index2.php' ><button class='btn'>simdi giris yap</button>";
        }
            
            
            
        }else{
        
        ?>
        <header>Kayıt Ol</header>
        <form action="" method="post">
            
           <div class="field input">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" autocomplete="off" required>
            
            </div>
            
           <div class="field input">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" autocomplete="off" required>
            
            </div>
            
           
            <div class="field input">
            <label for="age">Age</label>
            <input type="number" name="age" id="age" autocomplete="off" required>
            
            </div>
            
            
             <div class="field input">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" autocomplete="off" required>
            
            </div>
            
            
            
            <div class="field">
            <input type="submit" class="btn" name="submit" value="Login" required>
            
            </div>
            
            <div class="links">
            
            uye olmaya hazir misiniz?<a href="index2.php">Giris yapin</a>
            </div>
            
        </form>
        </div>
      <?php } ?>
    </div>
    
    
    
    </body>
</html>