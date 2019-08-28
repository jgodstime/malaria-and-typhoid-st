<?php
namespace Mini\Controller;

use Mini\Core\View;
use Mini\Model\Register;


class RegisterController
{
    var $View;
    public $msg;
   
    function __construct() {
        $this->View = new View();
        $this->msg = new \Mini\Libs\FlashMessages();
    }


    public function index()
    {
        if(isset($_POST['registerCustomerBtn'])){
            $name = ucwords($_POST['name']);
            $email = ($_POST['email']);
            $phoneNumber = $_POST['phone'];
            $password = $_POST['password'];
            $address = ucwords($_POST['address']);
           


            if(empty($name)){
                $this->msg->error('Full name is required.');
            }if(empty($email)){
                $this->msg->error('Email is required.');
            }if(empty($phoneNumber)){
                $this->msg->error('Phone number is required.');
            }if(empty($password)){
                $this->msg->error('password is required.');
            }if(empty($address)){
                $this->msg->error('Address is required.');
            }
            if ($this->msg->hasErrors()){
                header('location:' . $_SERVER['HTTP_REFERER']);
                die();
            }else{
                
                (new Register())->registerUser($name,$email,$phoneNumber,$address,$password);
            }

        }
            // html data
            $data["title"] = "Register Member"; /* for <title></title> inside header.php in this case */
            // load views
            $this->View->render('home/register', $data);
    }

    public function meeting()
    {
        if(isset($_POST['regMeetingBtn'])){
            $meetingDate = $_POST['meetingDate'];
            $meetingType = ucwords($_POST['meetingType']);
            $ministerInCharge = $_POST['ministerInCharge'];
            $startTime = $_POST['startTime'];
            $endTime = $_POST['endTime'];
            $offering = $_POST['offering'];
            $tithe = $_POST['tithe'];
            $minutesOfMeeting = $_POST['minutesOfMeeting'];
            $maleAttendance = $_POST['maleAttendance'];
            $femaleAttendance = $_POST['femaleAttendance'];
            $childrenAttendance = $_POST['childrenAttendance'];
            $totalAttendance = $maleAttendance + $femaleAttendance + $childrenAttendance;


            if(empty($meetingDate)){
                $this->msg->error('Meeting date is required.');
            }if(empty($meetingType)){
                $this->msg->error('Meeting type is required.');
            }if(empty($ministerInCharge)){
                $this->msg->error('Minister incharge is required.');
            }if(empty($startTime)){
                $this->msg->error('Start time is required.');
            }if(empty($endTime)){
                $this->msg->error('End time is required.');
            }if(empty($offering)){
                $this->msg->error('Offering is required.');
            }if(empty($tithe)){
                $this->msg->error('Tithe is required.');
            }if(empty($minutesOfMeeting)){
                $this->msg->error('Minute of meeting is required.');
            }if(empty($maleAttendance)){
                $this->msg->error('Male attendance is required.');
            }if(empty($femaleAttendance)){
                $this->msg->error('Female attendance is required.');
            }if(empty($childrenAttendance)){
                $this->msg->error('Children attendance is required.');
            }
            if ($this->msg->hasErrors()){
                header('location:' . $_SERVER['HTTP_REFERER']);
                die();
            }else{
                
                (new Register())->registerMeeting($meetingDate,$meetingType,$ministerInCharge,$startTime,$endTime,$offering,$tithe,$minutesOfMeeting,$maleAttendance,$femaleAttendance,$childrenAttendance,$totalAttendance);
            }

        }
            // html data
            $data["title"] = "Register Member"; /* for <title></title> inside header.php in this case */
            // load views
            $this->View->render('home/regMeeting', $data);
    }

    public function meetingRecord()
    {
        $data["title"] = "Meeting Record"; /* for <title></title> inside header.php in this case */
            // load views
            $this->View->render('home/meetingRecord', $data);
    }

    public function membershipRecord()
    {
        $data["title"] = "Membership Record"; /* for <title></title> inside header.php in this case */
            // load views
            $this->View->render('home/membershipRecord', $data);
    }
   
}
