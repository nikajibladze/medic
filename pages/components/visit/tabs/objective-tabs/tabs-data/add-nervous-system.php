<br>
<!-- users edit media object start -->
<div class="media mb-2">
    <a class="mr-2" href="#">
        <img src="app-assets/images/portrait/small/avatar-s-27.png" alt="users avatar"
            class="users-avatar-shadow rounded-circle" height="64" width="64">
    </a>
    <div class="media-body">
        <h4 class="media-heading">ნერვული სისტემა - ჩანაწერის დამატება</h4>
        <div class="col-6 px-0 d-flex">
            <span class="btn btn-sm btn-primary mr-25">ისტორიის ნომერი</span>
            <span class="btn btn-sm btn-secondary"><?php echo strtotime(date("Y-m-d H:i:s"))?></span>
        </div>
    </div>
</div>
<!-- users edit media object ends -->
<!-- users edit account form start -->
<form novalidate="" method="post" action="" id="nervous-system-form" autocomplete="off">

    <div class="col-12">
        <div class="row">

            <div class="col-12">

                <h4 class="form-section"><i class="fa fa-plus"></i> შექმნა</h4>
            </div>



            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="without_pathology" value="">
                        <input type="checkbox" class="custom-control-input" value="1" name="without_pathology"
                            id="without_pathology_nervous">
                        <label class="custom-control-label" for="without_pathology_nervous">პათოლოგიის გარეშე</label>
                    </div>
                </fieldset>
            </div>


            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="aggressive" value="">
                        <input type="checkbox" class="custom-control-input" value="1" name="aggressive" id="aggressive">
                        <label class="custom-control-label" for="aggressive">აგრესიული</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="aggression_cannot_revealed" value="">
                        <input type="checkbox" class="custom-control-input" value="1" name="aggression_cannot_revealed"
                            id="aggression_cannot_revealed">
                        <label class="custom-control-label" for="aggression_cannot_revealed">აგრესია ვერ
                            ვლინდება</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="aggression_physical" value="">
                        <input type="checkbox" class="custom-control-input" value="1" name="aggression_physical"
                            id="aggression_physical">
                        <label class="custom-control-label" for="aggression_physical">აგრესია ფიზიკური</label>
                    </div>
                </fieldset>
            </div>


            <div class="col-6">
                <br>
                <div class="form-group">
                    <label for="orientation_time">ორიენტაცია დროში</label>
                    <select class="form-control" name="orientation_time" id="orientation_time">
                        <option></option>
                        <option value="1">კი</option>
                        <option value="2">არა</option>

                    </select>
                </div>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <label for="orientation_space">ორიენტაცია სივრცეში</label>
                    <select class="form-control" name="orientation_space" id="orientation_space">
                        <option></option>
                        <option value="1">კი</option>
                        <option value="2">არა</option>

                    </select>
                </div>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <label for="orientation_environment">ორიენტაცია გარემოში</label>
                    <select class="form-control" name="orientation_environment" id="orientation_environment">
                        <option></option>
                        <option value="1">კი</option>
                        <option value="2">არა</option>

                    </select>
                </div>
            </div>

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="facial_asymmetry" value="">
                        <input type="checkbox" class="custom-control-input" value="1" name="facial_asymmetry"
                            id="facial_asymmetry">
                        <label class="custom-control-label" for="facial_asymmetry">სახის ასიმეტრია</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="speech_difficulty" value="">
                        <input type="checkbox" class="custom-control-input" value="1" name="speech_difficulty"
                            id="speech_difficulty">
                        <label class="custom-control-label" for="speech_difficulty">მეტყველების გაძნელება</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="disruption_coordination" value="">
                        <input type="checkbox" class="custom-control-input" value="1" name="disruption_coordination"
                            id="disruption_coordination">
                        <label class="custom-control-label" for="disruption_coordination">კოორდინაციის მოშლა</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label for="skull_nerves">ქალა-ტვინის ნერვები</label>
                        <input type="text" class="form-control" placeholder="ქალა-ტვინის ნერვები" name="skull_nerves"
                            id="skull_nerves" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label for="reflective_sphere">რეფლექტურული სფერო</label>
                        <input type="text" class="form-control" placeholder="რეფლექტურული სფერო"
                            name="reflective_sphere" id="reflective_sphere" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label for="driving_field">მამოძრავებლი სფერო</label>
                        <input type="text" class="form-control" placeholder="მამოძრავებლი სფერო" name="driving_field"
                            id="driving_field" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <label for="romberg_pose">რომბერგის პოზა</label>
                    <select class="form-control" name="romberg_pose" id="romberg_pose">
                        <option></option>
                        <option value="1">მყარი</option>
                        <option value="2">არამყარი</option>

                    </select>
                </div>
            </div>


            <div class="col-6">
                <br>
                <div class="form-group">
                    <label for="nose_finger_test">ცხვირ-თითის სინჯი</label>
                    <select class="form-control" name="nose_finger_test" id="nose_finger_test">
                        <option></option>
                        <option value="1">ასრულებს</option>
                        <option value="2">ვერასრულებს</option>

                    </select>
                </div>
            </div>


            <div class="col-12">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label for="nervous_system_text">დამატებითი ინფორმაცია</label>
                        <textarea name="nervous_system_text" class="form-control" placeholder="დამატებითი ინფორმაცია"
                            id="nervous_system_text"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <input type="hidden" name="edit_id" id="nervous_system_id">
    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
        <button type="button" onclick="InsertNervousSystem(this.id)" id="insert-nervous-system"
            class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1"><i class="fa fa-edit" aria-hidden="true"></i>
            შენახვა</button>
        <button type="button" class="btn btn-light" id="user-register-reject" onclick="getNervous(this.id)"
            data-toggle="tab" href="#nervous-tab-content" aria-controls="linkOpt1"><i class="fa fa-ban"
                aria-hidden="true"></i> გაუქმება</button>
    </div>

    </div>
</form>