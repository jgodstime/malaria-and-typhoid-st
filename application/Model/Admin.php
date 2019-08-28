<?php

/**
 * Class Songs
 * This is a demo Model class.
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */

namespace Mini\Model;

use Mini\Core\Model;
use PDO;


class Admin extends Model
{




public function getUserInfo($id){
    $query = $this->db -> prepare("SELECT * FROM user_tbl WHERE id = ? LIMIT 1");
    $query -> execute(array($id));
    $result = $query->fetch();
    return $result;
}

    
     
public function adminLogIn($email,$password){
    if(!empty($email) or !empty($password)){
        $password = sha1($password);
        // die($password);
        $query = $this->db->prepare("SELECT * FROM admin WHERE email=? AND password=? LIMIT 1");
        $query -> execute(array($email,$password));
        if ($query->rowCount()>0){
            $result = $query->fetch(PDO::FETCH_ASSOC); 
             $email= $result["email"];
             $adminId = $result["id"];
             $passwordDb = $result["password"];
             
    
            $_SESSION["adminId"] = $adminId;

                header('location:'.URL.'admin/users');       
           
          
    }else{
        return $this->msg->error('Invalid email and password combination.', $_SERVER['HTTP_REFERER']);

    }
        
    }else{
        return $this->msg->error('Email and password are required.', $_SERVER['HTTP_REFERER']);
        
    }
    

}


  




public function adminMalariaRecord(){
    $query = $this->db -> prepare("SELECT * FROM  malaria_tbl ORDER BY id DESC");
    $query->execute();
    if($query->rowCount()>0){

 
?>
<h2 class="">Malaria Result</h2>
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
  



public function adminTyphoidRecord(){
    $query = $this->db -> prepare("SELECT * FROM  typhoid_tbl ORDER BY id DESC");
    $query->execute();
    if($query->rowCount()>0){

 
?>
<h2 class="">Typhoid Result</h2>
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






public function userRecords(){
    $query = $this->db -> prepare("SELECT * FROM  user_tbl ORDER BY id DESC");
    $query->execute();
    if($query->rowCount()>0){

 
?>
<h2 class=""> Users</h2>
<div class="table-responsive">

    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Created at</th>
               
            </tr>
        </thead>
        <?php
        
        while($row = $query->fetch(PDO::FETCH_ASSOC)){ 

            ?>

        <tr class="text-left">
           
            <td> <?php echo $row['name'];?> </td>
            <td> <?php echo $row['email'];?> </td>
            <td> <?php echo $row['phone'];?> </td>
            <td> <?php echo $row['address'];?> </td>
            <td><?php echo $row['created_at'];?></td>

           
          
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

    
}