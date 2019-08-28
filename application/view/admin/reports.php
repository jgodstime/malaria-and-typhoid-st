<?php
 $msg = new \Mini\Libs\FlashMessages();
 use Mini\Model\Admin;
 $Register = (new Admin);

?>

<div class="container">

<div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                <?php
            $Register->adminMalariaRecord();
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
            $Register->adminTyphoidRecord();
            ?>                </div>
            </div>
        </div>
    </div>

    


</div>

      