<form action="" method="post" id="add-examination-form" autocomplete="off">
    <div class="row">



                                 <div class="col-6">
                                 <div class="form-group">
                                     <label>პროცედურის კოდი</label><br>
                                     <select class="form-control select2" id="procedure_code" name="procedure_code">
                                     <option value='1'>კოდი 1</option>
                                     <option value='2'>კოდი 2</option>
                                     <option value='3'>კოდი 3</option>
                                     <option value='4'>კოდი 4</option>
                                     </select>
                                 </div>    </div>


                                 <div class="col-6">
                                 <div class="form-group">
                                     <label>პროცედურა</label>
                                     <select class="form-control select2" name="procedure_clinical" id="procedure_clinical">
                                     <option></option>

                                     </select>
                                 </div>    </div>


                                 <div class="col-6">
                                 <div class="form-group">
                                     <label>მომთხოვნი ექიმი</label>
                                     <select class="form-control select2" id="demanding_doctor" name="demanding_doctor">
                                     <option></option>
                                         <option value="1">ექიმი 1</option>
                                         <option value="2">ექიმი 2</option>
                                         <option value="3">ექიმი 3</option>
                                         <option value="4">ექიმი 4</option>
                                     </select>
                                 </div>    </div>




                                    <div class="col-6">
                                 <div class="form-group">
                                     <label>შემსრულებელი</label>
                                     <select class="form-control select2" name="performer_doctor" id="performer_doctor">
                                     <option></option>
                                         <option value="1">შემსრულებელი 1</option>
                                         <option value="2">შემსრულებელი 2</option>
                                         <option value="3">შემსრულებელი 3</option>
                                     </select>
                                 </div>    </div>




                                 <div class="col-6">

         <div class="form-group">
                                         <div class="controls">
                                             <label>თარიღი</label>
                                             <input type="text" class="form-control datepicker" placeholder="თარიღი" name="demanding_date" id="demanding_date" value="">
                                         <div class="help-block"></div></div>
                                     </div>
                                     </div>
                                    </div>
                                    <input type="hidden" id="examination_id" name="examination_id">
                                    </form>
