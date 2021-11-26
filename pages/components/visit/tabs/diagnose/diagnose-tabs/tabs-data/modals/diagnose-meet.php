<?php
if (isset($_POST["id"])) {
} else {
    die;
}
if (isset($_POST["type"])) {
    $type = $_POST["type"];
} else {
    die;
}
?>
<form action="" method="post" id="add-diagnose-meet-form" autocomplete="off">
    <div class="row">
    <?php

if ($type == "2") {
    ?>

                                 <div class="col-6">
                                 <div class="form-group">
                                     <label>სტრ. ერთეული</label><br>
                                     <select class="form-control select2" name="structure_appeal" id="structure_appeal">
                                     <option value=''></option>
                                     <option value='1'>სტრუქტურა 1 </option>
                                     <option value='2'>სტრუქტურა 2</option>
                                     <option value='3'>სტრუქტურა 3</option>
                                     <option value='4'>სტრუქტურა 4</option>
                                     </select>
                                 </div>    </div>



                                 <div class="col-6">
                                 <div class="form-group">
                                     <label>სპეციალისტი</label><br>
                                     <select class="form-control select2" id="specialist_meet" name="specialist">
                                     <option value=''></option>
                                     <option value='1'>სპეციალისტი 1 </option>
                                     <option value='2'>სპეციალისტი 2</option>
                                     <option value='3'>სპეციალისტი 3</option>
                                     <option value='4'>სპეციალისტი 4</option>
                                     </select>
                                 </div>    </div>


                                 <div class="col-6">
                                 <div class="form-group">
                                     <label>ადრესატი ექიმი</label>
                                     <select class="form-control select2" name="addressee_doctor" id="addressee_doctor_meet">
                                     <option value=""></option>
                                     </select>
                                 </div>    </div>

                                 <div class="col-6">

         <div class="form-group">
                                         <div class="controls">
                                             <label>თარიღი</label>
                                             <input type="text" class="form-control datepicker" placeholder="შექმნის თარიღი" name="date" id="date_meet" value="">
                                         <div class="help-block"></div></div>
                                     </div>
                                     </div>

                                     <div class="col-6">
                                 <div class="form-group">
                                     <label>მდგომარეობა</label>
                                     <select class="form-control select2" name="condition_meet" id="condition_meet">
                                     <option></option>
                                         <option value="1">გეგმიური</option>
                                         <option value="2">სასწრაფო</option>
                                     </select>
                                 </div>    </div>


                                 <div class="col-6">

         <div class="form-group">
                                         <div class="controls">
                                             <label>ინფორმაცია</label>
                                             <input type="text" class="form-control" placeholder="ინფორმაცია" id="information_meet" name="information" value="">
                                         <div class="help-block"></div></div>
                                     </div>
                                     </div>

                                     <?php } elseif ($type == "1") {?>

                                 <div class="col-6">
                                 <div class="form-group">
                                     <label>სპეციალისტი</label><br>
                                     <select class="form-control select2" name="civilian_specialist" id="civilian_specialist">
                                     <option value=''></option>
                                     <option value='1'>სპეციალისტი 1 </option>
                                     <option value='2'>სპეციალისტი 2</option>
                                     <option value='3'>სპეციალისტი 3</option>
                                     <option value='4'>სპეციალისტი 4</option>
                                     </select>
                                 </div>    </div>



                                 <div class="col-6">
                                 <div class="form-group">
                                     <label>კლინიკები</label>
                                     <select class="form-control select2" name="civilian_structure" id="civilian_structure">
                                     <option></option>
                                         <option value="1">კლინიკა 1</option>
                                         <option value="2">კლინიკა 2</option>
                                     </select>
                                 </div>    </div>


                                 <div class="col-6">
                                 <div class="form-group">
                                     <label>ადრესატი ექიმი</label>
                                     <select class="form-control select2" name="civilian_addressee_doctor" id="civilian_addressee_doctor">
                                     <option></option>

                                     </select>
                                 </div>    </div>

                                 <div class="col-6">

         <div class="form-group">
                                         <div class="controls">
                                             <label>თარიღი</label>
                                             <input type="text" class="form-control datepicker" placeholder="შექმნის თარიღი" name="civilian_date" id="civilian_date" value="">
                                         <div class="help-block"></div></div>
                                     </div>
                                     </div>

                                     <div class="col-6">
                                 <div class="form-group">
                                     <label>მდგომარეობა</label>
                                     <select class="form-control select2" name="civilian_condition" id="civilian_condition">
                                     <option></option>
                                         <option value="1">გეგმიური</option>
                                         <option value="2">სასწრაფო</option>
                                     </select>
                                 </div>    </div>


                                 <div class="col-6">

         <div class="form-group">
                                         <div class="controls">
                                             <label>ინფორმაცია</label>
                                             <input type="text" class="form-control" placeholder="ინფორმაცია" id="civilian_information" name="civilian_information" value="">
                                         <div class="help-block"></div></div>
                                     </div>
                                     </div>
                                        <?php }?>
                                    </div>
                                    <input type="hidden" id="diagnose_meet_id" name="diagnose_meet_id">
                                    </form>




