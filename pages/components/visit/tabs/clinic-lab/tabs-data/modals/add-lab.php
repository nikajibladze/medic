<form action="" method="post" id="lab-tests-form" autocomplete="off">
    <div class="row">



                                 <div class="col-6">
                                 <div class="form-group">
                                     <label>ტესტის კოდი</label><br>
                                     <select class="form-control select2" id="Test_code" name="Test_code">
                                     <option></option>
                                         <option value="1">123</option>
                                         <option value="2">333222</option>
                                         <option value="3">44344343</option>
                                     </select>
                                 </div>    </div>


                                 <div class="col-6">

         <div class="form-group">
                                         <div class="controls">
                                             <label>ტესტის ტიპი</label>
                                             <input type="text" class="form-control" placeholder="ტესტის ტიპი" id="Test_type" name="Test_type" value="">
                                         <div class="help-block"></div></div>
                                     </div>
                                     </div>


                                 <div class="col-6">

         <div class="form-group">
                                         <div class="controls">
                                             <label>თარიღი</label>
                                             <input type="text" class="form-control datepicker" placeholder="თარიღი" id="Test_date" name="Test_date" value="">
                                         <div class="help-block"></div></div>
                                     </div>
                                     </div>


                                 <div class="col-6">
                                 <div class="form-group">
                                     <label>მომთხოვნი ექიმი</label>
                                     <select class="form-control select2" id="demanding_doctor" name="demanding_doctor">
                                     <option></option>
                                         <option value="1">ექიმი 1</option>
                                         <option value="2">ექიმი 2</option>
                                         <option value="3">ექიმი 3</option>
                                         <option value="4">ექიმი 4</option>
                                         <option value="4">ნიკა ჯიბლაძე</option>
                                     </select>
                                 </div>    </div>




                                 <div class="col-12">

           <fieldset>
<div class="custom-control custom-checkbox">
    <input type="hidden" name="Cyto">
<input type="checkbox" class="custom-control-input" value="1" name="Cyto" id="Cyto">
<label class="custom-control-label" for="Cyto">ციტო</label>
</div>
</fieldset>
</div>
<input type="hidden" name="lab_tests_id" id="lab_tests_id">
                                    </div>
                                    </form>
