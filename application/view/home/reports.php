<?php
 $msg = new \Mini\Libs\FlashMessages();
 use Mini\Model\Register;
 $Register = (new Register);

?>

<div class="container">

<div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                <?php
            $Register->userMalariaRecord();
            ?>                </div>
            </div>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                <?php
            $Register->userTyphoidRecord();
            ?>                </div>
            </div>
        </div>
    </div>

    


</div>

      