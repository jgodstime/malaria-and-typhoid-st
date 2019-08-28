
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
                    <h2 class="text-primary text-center">Typhoid Diagnose</h2>
                </div>
                <div class="panel-body " style="margin-bottom:30px;">
                   
                   <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" role="form">
                   
                            <div class="col-md-6">
                                <div class="form-group text-left">
                                    <label for="">High fever</label>
                                   <select name="highFever"  class="form-control" required >
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
                                    <label for="">Soar throat</label>
                                   <select name="soarThroat"  class="form-control" required >
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
                                    <label for="">Loss of appetite</label>
                                   <select name="lossOfAppetite"  class="form-control" required >
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
                                    <label for="">Joint pain</label>
                                   <select name="jointPain"  class="form-control" required >
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
                                    <label for="">Diarrhoea</label>
                                   <select name="diarrhoea"  class="form-control" required >
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
                                    <label for="">Rashes</label>
                                   <select name="rashes"  class="form-control" required >
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
                                    <label for="">Weight loss/weakness</label>
                                   <select name="weightLossAndWeakness"  class="form-control" required >
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
                                    <label for="">Constipation</label>
                                   <select name="constipation"  class="form-control" required >
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
                                    <label for="">Abdominal pain</label>
                                   <select name="abdominalPain"  class="form-control" required >
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
                       <button type="submit" name="typhoidBtn" class="btn btn-primary btn-block ">Diagnose</button>
                       </div>
                   </form>
                   
                </div>
               
            </div>
        </div>


       
    </div>
</div>
