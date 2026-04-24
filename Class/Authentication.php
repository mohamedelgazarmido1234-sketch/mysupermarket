<?php

namespace App;

class Authentication{
     public function isAuth()
    {
        return isset($_SESSION['userID']); 
    }

    public function redirectIfNotAuth()
    {
        if (!$this->isAuth())
            header('location: Login.php');
    }

    public function redirectIfAuth()
    {
        if ($this->isAuth())
            header('location: index.php');

    }
    public function signup(){

    if(isset($_POST['signup'])){
            $username=$_POST['uname'];
            $email=$_POST['email'];
            $password=$_POST['pass'];
            $confirmpass=$_POST['confpassword'];
            $hash=password_hash($password,PASSWORD_DEFAULT);
            if($password != $confirmpass){
                Alert::printmessage("The confirm pass. not matching please try again :)", "danger");
            }
            else{
                $DB = new \App\Database();
$checkStmt = $DB->connect->prepare("SELECT * FROM `user` WHERE Uemail = ?");
$checkStmt->bind_param('s', $email);
$checkStmt->execute();
$result = $checkStmt->get_result();

if ($result->num_rows > 0) {
    Alert::printmessage("This Email is already registered!", "danger");
} 
else {
                $insertqueries = "INSERT INTO `user` VALUES (NULL,?,?,?)";
                $prepareStmt = $DB->connect->prepare($insertqueries);
                $prepareStmt->bind_param('sss', $username, $email, $hash);

                $checkqueries =$prepareStmt->execute();
                if($checkqueries){
                    header("location:Login.php?signupdone=1");

                }
                else{
                        Alert:: printmessage("Register failed :(, please correct information ", "danger");
                }   
            }
        }
    } 
    }  

    public function Login():void {
          if(isset($_POST['loginb'])){
        $email=$_POST['uemail'];
        $password=$_POST['upass'];

        $selectquery="SELECT * FROM `user` WHERE Uemail=?";
         $DB=new \App\Database(); 
         $prepareStmt=$DB->connect->prepare($selectquery);
         $prepareStmt->bind_param('s',$email);
         $resultobject=$prepareStmt->execute();;

         if(!$resultobject)
            alert::printmessage("Email is WRONG", "danger");
            
        else{
            $resultObj = $prepareStmt->get_result();
     

            if ($resultObj->num_rows == 1) {
                  $rowp=$resultObj->fetch_assoc();
         if(password_verify($password,$rowp['Upassword'])){
$_SESSION['userID'] = $rowp["UID"];
            $_SESSION['userName'] = $rowp["Uname"];
                         header("Location: index.php");
                         exit;

        }  
         else {
                        Alert::PrintMessage('Password is WRONG', 'Danger');
                    } 
                     }
                     else {
                    Alert::PrintMessage('Email is not valid', 'Danger');
                }
        }
        }
        }
    
    public function Logout(){
        if (isset($_GET['logout'])) {
            session_unset();
            session_destroy();
            header("location: signin.php");}
    }

}

?>