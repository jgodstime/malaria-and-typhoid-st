<?php

/**
 * Class HomeController
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */

namespace Mini\Controller;

use Mini\Core\View;

class HomeController
{
    var $View;
    public $msg;
   
    function __construct() {
        $this->View = new View();
        $this->msg = new \Mini\Libs\FlashMessages();
      
    }

    public function login()
    {
        if(isset($_POST['loginBtn'])){
            $password = ($_POST['password']);
            $email = ($_POST['email']);
         

            if(empty($password)){
                 $this->msg->error('Password is required.');	
            }if(empty($email)){
                $this->msg->error('Email is required.');	
            }
            if ($this->msg->hasErrors()){
                header('location:' . $_SERVER['HTTP_REFERER']);
              
            }else{
               (new \Mini\Model\Register)-> userLogIn($email,$password);
            }

            
        }else{

         // html data    
     $data["title"] = "User"; /* for <title></title> inside header.php in this case */
     // load views
     $this->View->render('home/login', $data);
         
    }
}



public function typhoid()
{

    if(isset($_POST['typhoidBtn'])){
       
        $userId = ($_SESSION['userId']);
        $highFever = $_POST['highFever'];
        $soarThroat = $_POST['soarThroat'];
        $lossOfAppetite = $_POST['lossOfAppetite'];
        $jointPain = $_POST['jointPain'];
        $diarrhoea = $_POST['diarrhoea'];
        $rashes = ($_POST['rashes']);
        $weightLossAndWeakness = $_POST['weightLossAndWeakness'];
        $constipation = $_POST['constipation'];
        $abdominalPain = $_POST['abdominalPain'];

        $result = $highFever + $soarThroat + $soarThroat + $lossOfAppetite + $jointPain + $diarrhoea + $rashes + $weightLossAndWeakness + $constipation + $abdominalPain;

        // if(empty($fever)){
        //      $this->msg->error('Fever is required.');	
        // }if(empty($chill)){
        //     $this->msg->error('Chill is required.');	
        // }if(empty($headache)){
        //     $this->msg->error('Headache is required.');	
        // }if(empty($nauseaAndVomiting)){
        //     $this->msg->error('nausea And Vomiting is required.');	
        // }if(empty($musclePain)){
        //     $this->msg->error('Muscle pain is required.');	
        // }if(empty($fatique)){
        //     $this->msg->error('Headache is required.');	
        // }if(empty($sweating)){
        //     $this->msg->error('Sweating is required.');	
        // }if(empty($cough)){
        //     $this->msg->error('Cough is required.');	
        // }if(empty($seizure)){
        //     $this->msg->error('seizure is required.');	
        // }if(empty($bodyAches)){
        //     $this->msg->error('Body ache is required.');	
        // }
        if ($this->msg->hasErrors()){
           
            header('location:' . $_SERVER['HTTP_REFERER']);
          die();
        }else{
           

           (new \Mini\Model\Register)->saveTyphoid($userId,$highFever,$soarThroat,$lossOfAppetite, $jointPain, $diarrhoea,  $rashes, $weightLossAndWeakness, $constipation, $abdominalPain, $result);
        }

    }
    

    $data["title"] = "Typhoid"; 
    $this->View->render('home/typhoid', $data);
     
}




    
    public function malaria()
    {

        if(isset($_POST['malariaBtn'])){
           
            $userId = ($_SESSION['userId']);
            $fever = $_POST['fever'];
            $chill = $_POST['chill'];
            $headache = $_POST['headache'];
            $nauseaAndVomiting = $_POST['nauseaAndVomiting'];
            $musclePain = $_POST['musclePain'];
            $fatique = $_POST['fatique'];
            $sweating = ($_POST['sweating']);
            $cough = $_POST['cough'];
            $seizure = $_POST['seizure'];
            $bodyAches = $_POST['bodyAches'];

            $result = $fever + $chill + $headache + $nauseaAndVomiting + $musclePain + $fatique + $sweating + $cough + $seizure + $bodyAches;

            // if(empty($fever)){
            //      $this->msg->error('Fever is required.');	
            // }if(empty($chill)){
            //     $this->msg->error('Chill is required.');	
            // }if(empty($headache)){
            //     $this->msg->error('Headache is required.');	
            // }if(empty($nauseaAndVomiting)){
            //     $this->msg->error('nausea And Vomiting is required.');	
            // }if(empty($musclePain)){
            //     $this->msg->error('Muscle pain is required.');	
            // }if(empty($fatique)){
            //     $this->msg->error('Headache is required.');	
            // }if(empty($sweating)){
            //     $this->msg->error('Sweating is required.');	
            // }if(empty($cough)){
            //     $this->msg->error('Cough is required.');	
            // }if(empty($seizure)){
            //     $this->msg->error('seizure is required.');	
            // }if(empty($bodyAches)){
            //     $this->msg->error('Body ache is required.');	
            // }
            if ($this->msg->hasErrors()){
               
                header('location:' . $_SERVER['HTTP_REFERER']);
            //   die();
            }else{
               
               (new \Mini\Model\Register)->saveMalaria($userId,$fever,$chill,$headache,$nauseaAndVomiting, $musclePain, $fatique,  $sweating, $cough, $seizure, $bodyAches, $result);
            }

        }
        

        $data["title"] = "Malaria"; 
        $this->View->render('home/malaria', $data);
         
    }
    
    

    public function reports()
    {
       
        //  require APP . 'view/home/index.php';
         $data["title"] = "Malaria"; 
         $this->View->render('home/reports', $data);
  
    }


    public function index()
    {
        
         require APP . 'view/home/index.php';
      
    }


    public function logout()
    {
        unset($_SESSION['userId']);
        $this->msg->info('You are logged out.',URL);	

        // header('location:'. URL.'home');
    }
}
