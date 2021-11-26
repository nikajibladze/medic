<br>
<!-- users edit media object start -->
<div class="media mb-2">
    <a class="mr-2" href="#">
        <img src="app-assets/images/portrait/small/avatar-s-27.png" alt="users avatar"
            class="users-avatar-shadow rounded-circle" height="64" width="64">
    </a>
    <div class="media-body">
        <h4 class="media-heading">სასიცოცხლო პარამეტრები - ჩანაწერის დამატება</h4>
        <div class="col-6 px-0 d-flex">
            <span class="btn btn-sm btn-primary mr-25">ისტორიის ნომერი</span>
            <span class="btn btn-sm btn-secondary"><?php echo strtotime(date("Y-m-d H:i:s"))?></span>
        </div>
    </div>
</div>
<!-- users edit media object ends -->
<!-- users edit account form start -->

<form novalidate="" action="" method="post" id="parameters-form">

    <div class="col-12">
        <div class="row">

            <div class="col-12">
                <br>
                <h4 class="form-section"> <i class="fa fa-plus-circle" aria-hidden="true"></i> შექმნა</h4>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>ტემპერატურა</label>
                        <input type="number" class="form-control" placeholder="ტემპერატურა" id="temperature"
                            name="temperature" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>სისტ.წნევა მმ/ვწყ.სვ</label>
                        <input type="number" class="form-control" placeholder="სისტ.წნევა მმ/ვწყ.სვ "
                            id="system_pressure" id="system_pressure" name="system_pressure" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>დიასტ. წნევა მმ/ვწყ.სვ</label>
                        <input type="number" class="form-control" id="diast_pressure"
                            placeholder="დიასტ. წნევა მმ/ვწყ.სვ " name="diast_pressure" id="" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>პულსი 1'</label>
                        <input type="number" class="form-control" placeholder="პულსი 1' " name="pulse" id="pulse"
                            value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>გულისცემის სიხშირე 1'</label>
                        <input type="number" class="form-control" placeholder="გულისცემის სიხშირე 1'" id="heart_rate"
                            name="heart_rate" id="heart_rate" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>ჟანგბადით სატურაცია %</label>
                        <input type="number" class="form-control" name="oxygen_saturation"
                            placeholder="ჟანგბადით სატურაცია %" id="oxygen_saturation" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>სუნთქვის სიხშირე 1'</label>
                        <input type="number" class="form-control" placeholder="სუნთქვის სიხშირე 1'"
                            name="respiratory_rate" id="respiratory_rate" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>პაციენტის წონა (კგ)</label>
                        <input type="number" class="form-control" placeholder="პაციენტის წონა (კგ) "
                            name="patient_weight" id="patient_weight" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>დეფეკაცია 24 სთ-ში</label>
                        <input type="number" class="form-control" placeholder="დეფეკაცია 24 სთ-ში" name="defecation"
                            id="defecation" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>



            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>დრენაჟიდან გამოყოფილი სითხის რაოდენობა (მლ)</label>
                        <input type="number" class="form-control"
                            placeholder="დრენაჟიდან გამოყოფილი სითხის რაოდენობა (მლ)" name="fluid_released"
                            id="fluid_released" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>გამოყოფილი შარდის რაოდენობა (მლ)</label>
                        <input type="number" class="form-control" placeholder="გამოყოფილი შარდის რაოდენობა (მლ) "
                            name="urine_excreted" id="urine_excreted" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>მიღებული სითხის რაოდენობა (მლ)</label>
                        <input type="number" class="form-control" placeholder="მიღებული სითხის რაოდენობა (მლ)"
                            name="fluid_taken" id="fluid_taken" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label for="vital_options_text">დამატებითი ინფორმაცია</label>
                        <textarea name="vital_options_text" class="form-control" placeholder="დამატებითი ინფორმაცია"
                            id="vital_options_text"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


        </div>



    </div>

    <input type="hidden" id="parameters_id" value="" name="edit_id">
    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
        <button type="button" onclick="InsertParameters(this.id)" id="insert-parameters"
            class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1"><i class="fa fa-edit" aria-hidden="true"></i>
            შენახვა</button>
        <button type="button" class="btn btn-light" id="user-register-reject" onclick="getParameters(this.id)"
            data-toggle="tab" href="#parameters-tab-content"><i class="fa fa-ban" aria-hidden="true"></i>
            გაუქმება</button>
    </div>

    </div>
</form>