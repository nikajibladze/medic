<br>
<!-- users edit media object start -->
<div class="media mb-2">
    <a class="mr-2" href="#">
        <img src="app-assets/images/portrait/small/avatar-s-27.png" alt="users avatar"
            class="users-avatar-shadow rounded-circle" height="64" width="64">
    </a>
    <div class="media-body">
        <h4 class="media-heading">სისხლის მიმოქცევის სისტემა - ჩანაწერის დამატება</h4>
        <div class="col-6 px-0 d-flex">
            <span class="btn btn-sm btn-primary mr-25">ისტორიის ნომერი</span>
            <span class="btn btn-sm btn-secondary"><?php echo strtotime(date("Y-m-d H:i:s"))?></span>
        </div>
    </div>
</div>
<!-- users edit media object ends -->
<!-- users edit account form start -->
<form novalidate="" method="post" action="" id="blood-form" autocomplete="off">

    <div class="col-12">
        <div class="row">

            <div class="col-12">

                <h4 class="form-section"><i class="fa fa-plus"></i> შექმნა</h4>
            </div>

            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label>კაპილარული ავსების დრო წმ.</label>
                        <input type="number" class="form-control" placeholder="კაპილარული ავსების დრო წმ."
                            id="capillary_filling_time" value="" name="capillary_filling_time">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label>სისხლის სავარაუდო დანაკარგი მლ.</label>
                        <input type="number" class="form-control" placeholder="სისხლის სავარაუდო დანაკარგი მლ."
                            id="estimated_blood_loss" value="" name="estimated_blood_loss">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-12">

                <div class="form-group">
                    <div class="controls">
                        <label for="blood_circulation_text">დამატებითი ინფორმაცია</label>
                        <textarea name="blood_circulation_text" class="form-control" placeholder="დამატებითი ინფორმაცია"
                            id="blood_circulation_text"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-12">

                <h4 class="form-section"><i class="fa fa-heartbeat"></i> პულსი</h4>
            </div>

            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label>მოსვენებისას (მჯდომარე) წუთში</label>
                        <input type="number" class="form-control" name="pulse_at_rest"
                            placeholder="მოსვენებისას (მჯდომარე) წუთში" id="pulse_at_rest" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label>დატვირთვის შემდეგ (30 წმ-ის განმავლობაში) წუთში</label>
                        <input type="number" class="form-control"
                            placeholder="დატვირთვის შემდეგ (30 წმ-ის განმავლობაში) წუთში" id="pulse_after_loading"
                            name="pulse_after_loading" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label>3 წუთის შემდეგ</label>
                        <input type="number" class="form-control" placeholder="3 წუთის შემდეგ"
                            id="pulse_after_3_minutes" name="pulse_after_3_minutes" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-6">

                <div class="form-group">
                    <label>რითმი</label>
                    <select class="form-control" name="rhythm" id="rhythm">
                        <option></option>
                        <option value="1">რითმული</option>
                        <option value="2">არითმიული</option>

                    </select>
                </div>
            </div>


            <div class="col-6">

                <div class="form-group">
                    <label>ავსება</label>
                    <select class="form-control" name="fill_in" id="fill_in">
                        <option></option>
                        <option value="1">კარგი</option>
                        <option value="2">საშუალო</option>
                        <option value="3">სუსტი</option>

                    </select>
                </div>
            </div>

            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label for="pulse_text">დამატებითი ინფორმაცია</label>
                        <textarea name="pulse_text" class="form-control" placeholder="დამატებითი ინფორმაცია"
                            id="pulse_text"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-12">

                <h4 class="form-section"><i class="fa fa-heartbeat"></i> არტერიული წნევა</h4>
            </div>

            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label for="pressure_at_rest">მოსვენებისას (მჯდომარე) წუთში</label>
                        <input type="number" class="form-control" placeholder="მოსვენებისას (მჯდომარე) წუთში"
                            id="pressure_at_rest" value="" name="pressure_at_rest">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label for="pressure_after_loading">დატვირთვის შემდეგ (30 წმ-ის განმავლობაში) წუთში</label>
                        <input type="number" class="form-control"
                            placeholder="დატვირთვის შემდეგ (30 წმ-ის განმავლობაში) წუთში" id="pressure_after_loading"
                            name="pressure_after_loading" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label>3 წუთის შემდეგ</label>
                        <input type="number" class="form-control" placeholder="3 წუთის შემდეგ"
                            id="pressure_after_3_minutes" name="pressure_after_3_minutes" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>



            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label>სხვა ფუნქციური სინჯი</label>
                        <input type="text" class="form-control" placeholder="სხვა ფუნქციური სინჯი"
                            name="functional_test_text" id="functional_test_text" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>





            <div class="col-12">

                <h4 class="form-section"><i class="fa fa-heartbeat"></i> გული</h4>
            </div>

            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" class="custom-control-input" value="" name="pure_tones">
                        <input type="checkbox" class="custom-control-input" value="1" name="pure_tones" id="pure_tones">
                        <label class="custom-control-label" for="pure_tones">სუფთა ტონები</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" class="custom-control-input" value="" name="curved_tones">
                        <input type="checkbox" class="custom-control-input" value="1" name="curved_tones"
                            id="curved_tones">
                        <label class="custom-control-label" for="curved_tones">მოყრუებული ტონები</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" class="custom-control-input" value="" name="clear_tones">
                        <input type="checkbox" class="custom-control-input" value="1" name="clear_tones"
                            id="clear_tones">
                        <label class="custom-control-label" for="clear_tones">მკაფიო ტონები</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>სხვა</label>
                        <input type="text" class="form-control" placeholder="სხვა" id="heart_text" name="heart_text"
                            value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>საზღვრები</label>
                        <input type="text" class="form-control" placeholder="საზღვრები" id="boundaries_text"
                            name="boundaries_text" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


        </div>



    </div>

    <input type="hidden" value="" id="blood_id" name="edit_id">
    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
        <button type="button" onclick="insertBlood(this.id)" id="insert-blood"
            class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1"><i class="fa fa-edit" aria-hidden="true"></i>
            შენახვა</button>
        <button type="button" class="btn btn-light" id="user-register-reject" data-toggle="tab"
            href="#hearth-tab-content" onclick="getHearth(this.id)"><i class="fa fa-ban" aria-hidden="true"></i>
            გაუქმება</button>
    </div>

    </div>
</form>