<form action="" method="post" id="diagnose-records-form" autocomplete="off">
    <div class="row">

                                     <div class="col-12">

         <div class="form-group">
                                         <div class="controls">
                                             <label for="health_date">თარიღი</label>
                                             <input type="text" class="form-control datepicker" placeholder="თარიღი" id="health_date" name="health_date" value="<?php echo date("Y-m-d") ?>">
                                         <div class="help-block"></div></div>
                                     </div>
                                     </div>

                                     <div class="col-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="state_of_health">პაციენტის ჯანმრთელობის მდგომარეობა</label>
                                            <textarea name="state_of_health" class="form-control" placeholder="დამატებითი ინფორმაცია" id="state_of_health"></textarea>
                                        <div class="help-block"></div></div>
                                    </div>
                                    </div>

            <input type="hidden" name="diagnose_health_id" id="diagnose_health_id">
                                    </div>
                                    </form>