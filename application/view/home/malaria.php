
<?php
 $msg = new \Mini\Libs\FlashMessages();
 use Mini\Model\Register;
 $Register = (new Register);
?>
<div class="container">
    <div class="row">
    <div class="col-md-6 col-md-offset-3" >
        <div class="panel">
                <div class="panel-heading">
                    <?php echo $msg->display(); ?>   
                    <h2 class="text-primary text-center">Malaria Diagnose</h2>
                </div>
                <div class="panel-body " style="margin-bottom:30px;">
                   
                   <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" role="form">
                   
                            <div class="col-md-6">
                                <div class="form-group text-left">
                                    <label for="">Fever</label>
                                   <select name="fever"  class="form-control" required >
                                   <option value="0">0</option>
                                   <option value="1">1</option>
                                   <option value="2">2</option>
                                   <option value="3">3</option>
                                   <option value="4">4</option>
                                   <option value="5">5</option>
                                   </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group text-left">
                                    <label for="">Chills</label>
                                   <select name="chill"  class="form-control" required >
                                   <option value="0">0</option>
                                   <option value="1">1</option>
                                   <option value="2">2</option>
                                   <option value="3">3</option>
                                   <option value="4">4</option>
                                   <option value="5">5</option>
                                   </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group text-left">
                                    <label for="">Headache</label>
                                   <select name="headache"  class="form-control" required >
                                   <option value="0">0</option>
                                   <option value="1">1</option>
                                   <option value="2">2</option>
                                   <option value="3">3</option>
                                   <option value="4">4</option>
                                   <option value="5">5</option>
                                   </select>
                                </div>
                            </div>



                            <div class="col-md-6">
                                <div class="form-group text-left">
                                    <label for="">Nausea and Vomiting</label>
                                   <select name="nauseaAndVomiting"  class="form-control" required >
                                   <option value="0">0</option>
                                   <option value="1">1</option>
                                   <option value="2">2</option>
                                   <option value="3">3</option>
                                   <option value="4">4</option>
                                   <option value="5">5</option>
                                   </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group text-left">
                                    <label for="">Muscle Pain</label>
                                   <select name="musclePain"  class="form-control" required >
                                   <option value="0">0</option>
                                   <option value="1">1</option>
                                   <option value="2">2</option>
                                   <option value="3">3</option>
                                   <option value="4">4</option>
                                   <option value="5">5</option>
                                   </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group text-left">
                                    <label for="">Fatique</label>
                                   <select name="fatique"  class="form-control" required >
                                   <option value="0">0</option>
                                   <option value="1">1</option>
                                   <option value="2">2</option>
                                   <option value="3">3</option>
                                   <option value="4">4</option>
                                   <option value="5">5</option>
                                   </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group text-left">
                                    <label for="">Sweating</label>
                                   <select name="sweating"  class="form-control" required >
                                   <option value="0">0</option>
                                   <option value="1">1</option>
                                   <option value="2">2</option>
                                   <option value="3">3</option>
                                   <option value="4">4</option>
                                   <option value="5">5</option>
                                   </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group text-left">
                                    <label for="">Cough</label>
                                   <select name="cough"  class="form-control" required >
                                   <option value="0">0</option>
                                   <option value="1">1</option>
                                   <option value="2">2</option>
                                   <option value="3">3</option>
                                   <option value="4">4</option>
                                   <option value="5">5</option>
                                   </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group text-left">
                                    <label for="">Seizure</label>
                                   <select name="seizure"  class="form-control" required >
                                   <option value="0">0</option>
                                   <option value="1">1</option>
                                   <option value="2">2</option>
                                   <option value="3">3</option>
                                   <option value="4">4</option>
                                   <option value="5">5</option>
                                   </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group text-left">
                                    <label for="">Body Aches</label>
                                   <select name="bodyAches"  class="form-control" required >
                                   <option value="0">0</option>
                                   <option value="1">1</option>
                                   <option value="2">2</option>
                                   <option value="3">3</option>
                                   <option value="4">4</option>
                                   <option value="5">5</option>
                                   </select>
                                </div>
                            </div>
                       
                       

                      
                       <!-- <div class="form-group text-left">
                           <label for="">Service Description</label>
                            
                            <textarea name="description" id="input" class="form-control" ></textarea>
                            
                       </div> -->
                   
                       
                       <div class="col-md-12">
                       <button type="submit" name="malariaBtn" class="btn btn-primary btn-block ">Diagnose</button>
                       </div>
                   </form>
                   
                </div>
               
            </div>
        </div>


       
    </div>
</div>
