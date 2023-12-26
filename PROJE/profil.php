<?php  

session_start();


include("php/config.php");
if(!isset($_SESSION['valid'])){
    header("Location: index2.php");
    
}

?>








<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/giris.css">
    <title>Profil</title>
 </head>
<body>
    
<div class="nav">
    
    <div class="logo">
    <p><a href="profil.php">Choice</a></p>
    
    </div>
    
    <div class="right-links">
        
        <?php  
        
        $id=$_SESSION['id'];
        $query= mysqli_query($con,"SELECT*FROM users WHERE Id=$id");
        
        while($result=mysqli_fetch_assoc($query)){
            
            $res_Uname=$result['Username'];
            $res_Email=$result['Email'];
            $res_Age=$result['Age'];
            $res_id=$result['Id'];
            
        }
        echo "<a href='profildegistir.php?Id=$res_id'>Profili degistir</a>";
    
        
        ?>
        
        
        
        
        <a href="etkinlikolustur.html"> <button class="btn">Etkinlik olustur</button></a>
        
        <a href="php/cikis.php"> <button class="btn">Cikis yap</button></a>
    </div>
    </div>
    <main>
    
    <div class="main-box top">
        <div class="top">
            
            <div class="box">
            
            <p>Merhaba <b><?php echo $res_Uname ?></b> ,Hos geldin </p>
            </div>
            
             <div class="box">
            
            <p>Senin Emailin<b> <?php echo $res_Email ?></b> ,Hos geldin </p>
            </div>
            
            
            
        
        </div>
        <div class="buttom">
        <div class="box">
            
            <p>ve sen <b><?php echo $res_Age ?></b>  yasındasın</p>
            </div>
        
        </div>
        
        
        </div>
    
    
    </main>
    
    </body>
    

    </html> 