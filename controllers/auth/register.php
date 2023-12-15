
<?php 

   include __DIR__ . "/../../Model/User.php";
//    $db = SaidDatabase::connect();

    if(isset($_POST['submit'])){

     $user= new User($_POST['nom'],$_POST['email'],$_POST['password'],$_POST['adresse']);
     $user->create();
if($user){

      header("location:../../views/auth/login.php");

}else{
    echo 'thats bad';
}

    }
    
?>

