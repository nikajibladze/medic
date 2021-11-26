<form action="" method="post" id="important-form" autocomplete="off">
    <div class="row">





    <div class="col-6">

         <div class="form-group">
                                         <div class="controls">
                                             <label>ინფორმაცია</label>
                                             <input type="text" class="form-control" placeholder="ინფორმაცია" id="information_text" name="information_text" value="">
                                         <div class="help-block"></div></div>
                                     </div>
                                     </div>



                                     <div class="col-6">

         <div class="form-group">
                                         <div class="controls">
                                             <label>თარიღი</label>
                                             <input type="text" class="form-control datepicker" placeholder="თარიღი" id="information_date" name="information_date" value="<?php echo date("Y-m-d") ?>">
                                         <div class="help-block"></div></div>
                                     </div>
                                     </div>

                                     <div class="col-6">
                                 <div class="form-group">
                                     <label>ადრესატი ექიმი</label>
                                     <select class="form-control select2" id="doctor_id" name="doctor_id">
                                     <option></option>
                                     </select>
                                 </div>    </div>

                                <input type="hidden" name="important_id" id="important_id">
                                    </div>
                                    </form>