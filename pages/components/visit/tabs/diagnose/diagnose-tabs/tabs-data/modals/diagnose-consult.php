<form action="" method="post" id="diagnose-destination-form" autocomplete="off">
    <div class="row">








                                     <div class="col-12">

         <div class="form-group">
                                         <div class="controls">
                                             <label>თარიღი</label>
                                             <input type="text" class="form-control datepicker" placeholder="თარიღი" name="consultation_date" id="consultation_date" value="<?php echo date("Y-m-d") ?>">
                                         <div class="help-block"></div></div>
                                     </div>
                                     </div>

                                     <div class="col-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="record_text">ჩანაწერი</label>
                                            <textarea class="form-control" placeholder="ჩანაწერი" name="record_text" id="record_text"></textarea>
                                        <div class="help-block"></div></div>
                                    </div>
                                    </div>

                                    <div class="col-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="consultation_destination">კონსულტაცია/დანიშნულება</label>
                                            <textarea name="consultation_destination" class="form-control" placeholder="კონსულტაცია/დანიშნულება" id="consultation_destination"></textarea>
                                        <div class="help-block"></div></div>
                                    </div>
                                    </div>
                <input type="hidden" id="consultation_id" name="consultation_id">
                                    </div>
                                    </form>