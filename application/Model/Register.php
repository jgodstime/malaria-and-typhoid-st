<?php

namespace Mini\Model;

use Mini\Core\Model;
use PDO;


class Register extends Model
{

    public function checkEmail($email){
        $query = $this->db -> prepare("SELECT email FROM user_tbl WHERE email = ? LIMIT 1");
        $query -> execute(array($email));
        if($query->rowCount()>0){
            return true;
        }else{
            return false;
        }
    }

    public function registerUser($name,$email,$phoneNumber,$address,$password){
        if($this->checkEmail($email)){
            $this->msg->error('User with that email already exist.', $_SERVER['HTTP_REFERER']);

        }else{
            $password = sha1($password);
            $queryInsert = $this->db->prepare("INSERT INTO user_tbl (id,name,email,phone,address,password,created_at) VALUES(?,?,?,?,?,?,now())");
            $queryInsert->execute(array('',$name,$email,$phoneNumber,$address,$password));
            $userId = $this->db->lastInsertId();

            $_SESSION["userId"] = $userId;

        //print_r($this->db->errorInfo());

            if($queryInsert){
                $this->msg->success('You are registered and logged in.', URL.'home/malaria');
            }else{
                $this->msg->error('Unable to register User at this time, please try again later.', $_SERVER['HTTP_REFERER']);
            }
        }
    

    }




    public function userLogIn($email,$password){
        
            $password = sha1($password);
            $query = $this->db->prepare("SELECT * FROM user_tbl WHERE email=? AND password=? LIMIT 1");
            $query -> execute(array($email,$password));
            if ($query->rowCount()>0){
                $result = $query->fetch(PDO::FETCH_ASSOC); 
                 $email= $result["email"];
                 $userId = $result["id"];
                 $passwordDb = $result["password"];
                 
        
                $_SESSION["userId"] = $userId;
    
                return $this->msg->success('You are logged in.', URL.'home/malaria');
               
              
        }else{
            return $this->msg->error('Invalid email and password combination.', $_SERVER['HTTP_REFERER']);
    
        }
            
       
        
    
    }
    
    




    

public function getUserInfo($id){
    $query = $this->db -> prepare("SELECT * FROM user_tbl WHERE id = ? LIMIT 1");
    $query -> execute(array($id));
    $result = $query->fetch();
    return $result;
}




public function userMalariaRecord(){
    $query = $this->db -> prepare("SELECT * FROM  malaria_tbl where user_id=? ORDER BY id DESC");
    $query->execute(array($_SESSION['userId']));
    if($query->rowCount()>0){

 
?>
<h2 class="">Your Malaria Result</h2>
<div class="table-responsive">

    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>User</th>
                <th>Fever</th>
                <th>Chill</th>
                <th>Headache</th>
                <th>Nausea and vomiting</th>
                <th>Muscle pain</th>
                <th>Fatigue</th>
                <th>Sweating</th>
                <th>Cough</th>
                <th>Seizure</th>
                <th>Body aches</th>
                <th>Result</th>
                <th>Comment</th>
                <th>Created at</th>
               
            </tr>
        </thead>
        <?php
        
        while($row = $query->fetch(PDO::FETCH_ASSOC)){ 

            ?>

        <tr class="text-left">
            <td><?php echo $this->getUserInfo($row['user_id'])->name;?></td>
            <td> <?php echo $row['fever'];?> </td>
            <td> <?php echo $row['chill'];?> </td>
            <td> <?php echo $row['headache'];?> </td>
            <td> <?php echo $row['nausea_and_vomiting'];?> </td>
            <td> <?php echo $row['muscle_pain'];?> </td>
            <td> <?php echo $row['fatigue'];?> </td>
            <td> <?php echo $row['sweating'];?> </td>
            <td> <?php echo $row['cough'];?> </td>
            <td> <?php echo $row['seizure'];?> </td>
            <td> <?php echo $row['body_aches'];?> </td>
            <td> <?php echo $row['result'];?> </td>
            <td> <?php echo $row['comment'];?> </td>
            <td> <?php echo $row['created_at'];?> </td>         
          
        </tr>

        <?php
         }    
        ?>
    </table>
</div>
<?php
    }else{
        echo '<div>
            <a class="list-group-item">No Record Found.</a>
        </div>';	
    }			

}
  



public function userTyphoidRecord(){
    $query = $this->db -> prepare("SELECT * FROM  typhoid_tbl where user_id=? ORDER BY id DESC");
    $query->execute(array($_SESSION['userId']));
    if($query->rowCount()>0){

 
?>
<h2 class="">Your Typhoid Result</h2>
<div class="table-responsive">

    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>User</th>
                <th>High fever</th>
                <th>Soar throat</th>
                <th>Loss of appetite</th>
                <th>Joint pain</th>
                <th>Diarrhoea</th>
                <th>Rashes</th>
                <th>Weight loss/weakness</th>
                <th>Constipation</th>
                <th>Abdominal pain</th>
                <th>Result</th>
                <th>Comment</th>
                <th>Created at</th>
               
            </tr>
        </thead>
        <?php
        
        while($row = $query->fetch(PDO::FETCH_ASSOC)){ 

            ?>

        <tr class="text-left">
            <td><?php echo $this->getUserInfo($row['user_id'])->name;?></td>
            <td> <?php echo $row['high_fever'];?> </td>
            <td> <?php echo $row['soar_throat'];?> </td>
            <td> <?php echo $row['loss_of_appetite'];?> </td>
            <td> <?php echo $row['joint_pain'];?> </td>
            <td> <?php echo $row['diarrhoea'];?> </td>
            <td> <?php echo $row['rashes'];?> </td>
            <td> <?php echo $row['weight_loss_and_weakness'];?> </td>
            <td> <?php echo $row['constipation'];?> </td>
            <td> <?php echo $row['abdominal_pain'];?> </td>
            <td> <?php echo $row['result'];?> </td>
            <td> <?php echo $row['comment'];?> </td>
            <td> <?php echo $row['created_at'];?> </td>         
          
        </tr>

        <?php
         }    
        ?>
    </table>
</div>
<?php
    }else{
        echo '<div>
            <a class="list-group-item">No Record Found.</a>
        </div>';	
    }			

}








    public function saveMalaria($userId,$fever,$chill,$headache,$nauseaAndVomiting, $musclePain, $fatique,  $sweating, $cough, $seizure, $bodyAches, $result)
    {
    

        switch(true){
            case in_array($result, range(0,5)):
            $message = "You are save Based on your selection, we detected a little bit of malaria.";
            break;

            case in_array($result, range(6,10)):
            $message = "Based on your selection, we detected a little bit of malaria.";
            break;

            case in_array($result, range(11,20)):
            $message = "20 Based on your selection, we detected a little bit of malaria.";
            break;

            case in_array($result, range(21,30)):
            $message = "30 Based on your selection, we detected a little bit of malaria.";
            break;

            case in_array($result, range(31, 40)):
            $message = "40Based on your selection, we detected a little bit of malaria.";
            break;

            case in_array($result, range(41,50)):
            $message = "50 Based on your selection, we detected a little bit of malaria.";
            break;
        }
        

        $queryInsert = $this->db->prepare("INSERT INTO malaria_tbl (id,user_id,fever,chill,headache,nausea_and_vomiting, muscle_pain, fatigue, sweating, cough, seizure, body_aches, result, comment,created_at) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,now())");
        $queryInsert->execute(array('',$userId,$fever,$chill,$headache,$nauseaAndVomiting, $musclePain, $fatique,  $sweating, $cough, $seizure, $bodyAches, $result, $message));

        // print_r($this->db->errorInfo());

       

        if($queryInsert){
            $this->msg->success($message, $_SERVER['HTTP_REFERER']);
        }else{
            $this->msg->success('Unable to diagnose at this time, please try again later.', $_SERVER['HTTP_REFERER']);
        }
    }


    
    public function saveTyphoid($userId,$highFever,$soarThroat,$lossOfAppetite, $jointPain, $diarrhoea,  $rashes, $weightLossAndWeakness, $constipation, $abdominalPain, $result)
    {
    
        switch(true){
            case in_array($result, range(0,5)):
            $message = "You are save Based on your selection, we detected a little bit of malaria.";
            break;

            case in_array($result, range(6,10)):
            $message = "Based on your selection, we detected a little bit of malaria.";
            break;

            case in_array($result, range(11,20)):
            $message = "20 Based on your selection, we detected a little bit of malaria.";
            break;

            case in_array($result, range(21,30)):
            $message = "30 Based on your selection, we detected a little bit of malaria.";
            break;

            case in_array($result, range(31, 40)):
            $message = "40Based on your selection, we detected a little bit of malaria.";
            break;

            case in_array($result, range(41,50)):
            $message = "50 Based on your selection, we detected a little bit of malaria.";
            break;
        }
        

        

        $queryInsert = $this->db->prepare("INSERT INTO typhoid_tbl (id,user_id,high_fever,soar_throat,loss_of_appetite,joint_pain, diarrhoea, rashes, weight_loss_and_weakness, constipation, abdominal_pain,  result, comment,created_at) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,now())");
        $queryInsert->execute(array('',$userId,$highFever,$soarThroat,$lossOfAppetite, $jointPain, $diarrhoea,  $rashes, $weightLossAndWeakness, $constipation, $abdominalPain, $result, $message));

        // print_r($this->db->errorInfo());


        if($queryInsert){
            $this->msg->success($message, $_SERVER['HTTP_REFERER']);
        }else{
            $this->msg->success('Unable to diagnose at this time, please try again later.', $_SERVER['HTTP_REFERER']);
        }
    }








}


