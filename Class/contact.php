<?php
namespace App;

class contact{

public function pcreate(){
   if (isset($_POST['csubmit'])) {
            $name = $_POST['ccname'];
            $email = $_POST['ccemail'];
            $message = $_POST['message'];
            
                $insertStatement = 'INSERT INTO `contact_messages` VALUES(NULL,?,?,?)';
            $myDBObject = new \App\Database(); 
            $queryObject = $myDBObject->connect->prepare($insertStatement);
            
            $queryObject->bind_param('sss', $name, $email, $message);
            $checkQuery = $queryObject->execute();
            
            if ($checkQuery)
                \App\Alert::PrintMessage("Message Sent Successfully", "Normal");
            else
                \App\Alert::PrintMessage("Failed To Send Message", "Danger");
        }
    }
    

public function pread(){
    $selectStatement = 'SELECT * FROM `contact_messages` ORDER BY cid DESC';
        $myDBObject = new \App\Database();
        $queryStmtObject = $myDBObject->connect->prepare($selectStatement);
        $queryStmtObject->execute();
        return $queryStmtObject->get_result();

}
public function pupdate(){
    if (isset($_GET['msgToUpdate'])) {
        $msgId = $_GET['msgToUpdate'];
     
        $updateStatement = "UPDATE `contact_messages` SET cname = CONCAT(cname, ' ✅') WHERE cid = ? AND cname NOT LIKE '%✅%'";
        
        $myDBObject = new \App\Database();
        $queryStmtObject = $myDBObject->connect->prepare($updateStatement);
        $queryStmtObject->bind_param('i', $msgId);
        $checkQuery = $queryStmtObject->execute();
        
        if ($checkQuery) {
            header('location: viewmessage.php');
            exit();
        }
    }

}
public function pdelete(){
    if (isset($_GET['msgToDelete'])) {
            $msgId = $_GET['msgToDelete'];
            $deleteStatement = 'DELETE FROM `contact_messages` WHERE cid = ?';
            $myDBObject = new \App\Database();
            $queryStmtObject = $myDBObject->connect->prepare($deleteStatement);
            $queryStmtObject->bind_param('i', $msgId);
            $checkQuery = $queryStmtObject->execute();
            if ($checkQuery)
                header('location: viewmessage.php');
        }

}
}
?>