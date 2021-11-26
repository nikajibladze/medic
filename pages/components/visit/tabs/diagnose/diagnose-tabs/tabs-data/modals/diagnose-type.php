<form action="" method="post" id="add-diagnose-type-form" autocomplete="off">
    <div class="row">
                                 <div class="col-6">
                                 <div class="form-group">
                                     <label>დიაგნოზის ტიპი</label><br>
                                     <select class="form-control select2" name="type_of_diagnosis" id="type_of_diagnosis">
                                     <option value=''></option>
                                     <option value='1'>დიაგნოზი შემოსვლისას</option>
                                     <option value='2'>კლინიკური დიაგნოზი</option>
                                     <option value='3'>დასკვნითი კლინიკური დიაგნოზი</option>
                                     <option value='4'>ძირითადი ჰისტომორფოლოგიური დიაგნოზი</option>
                                     <option value='5'>ძირითადი ჰისტომორფოლოგიური გართულება</option>
                                     <option value='6'>თანმხლები ჰისტომორფოლოგიური დაავადება</option>
                                     <option value='7'>ძირითადი დაავადების გართულება</option>
                                     <option value='8'>თანმხლები დაავადება</option>
                                     </select>
                                 </div>    </div>
                                 <div class="col-6">
                                 <div class="form-group">
                                     <label>დაავადება</label>
                                     <select class="form-control select2" id="diagnos_disease_id" name="diagnos_disease_id">
                                     <option></option>

                                     </select>
                                 </div>    </div>


                                 <div class="col-6">
         <div class="form-group">
                                         <div class="controls">
                                             <label>კოდი</label>
                                             <input type="text" class="form-control" placeholder="კოდი" name="diagnos_code" id="diagnos_code" value="">
                                         <div class="help-block"></div></div>
                                     </div>
                                     </div>


                                     <div class="col-6">
         <div class="form-group">
                                         <div class="controls">
                                             <label>შექმნის თარიღი</label>
                                             <input type="text" class="form-control datepicker" placeholder="შექმნის თარიღი" name="create_date" id="create_date_type" value="">
                                         <div class="help-block"></div></div>
                                     </div>
                                     </div>

                                     <div class="col-12">
                <div class="form-group">
                    <div class="controls">
                        <label for="diagnos_type_text">დამატებითი ინფორმაცია</label>
                        <textarea name="diagnos_type_text" name="diagnos_type_text" rows="5" class="form-control" placeholder="დამატებითი ინფორმაცია" id="diagnos_type_text"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

    <input type="hidden" id="diagnose_type_id" name="diagnose_type_id">
                                    </div>
                                    </form>
