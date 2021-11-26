<br>
<!-- users edit media object start -->
<div class="media mb-2">
    <a class="mr-2" href="#">
        <img src="app-assets/images/portrait/small/avatar-s-27.png" alt="users avatar"
            class="users-avatar-shadow rounded-circle" height="64" width="64">
    </a>
    <div class="media-body">
        <h4 class="media-heading">ანთროპომეტრია - ჩანაწერის დამატება</h4>
        <div class="col-12 px-0 d-flex">
            <span class="btn btn-sm btn-primary mr-25">ისტორიის ნომერი</span>
            <span class="btn btn-sm btn-secondary"><?php echo strtotime(date("Y-m-d H:i:s"))?></span>
        </div>
    </div>
</div>
<!-- users edit media object ends -->
<!-- users edit account form start -->
<form method="post" action="" id="antropometry-form">
    <div class="row">
        <div class="col-6">

            <div class="col-12">
                <br>
                <h4 class="form-section"> <i class="fa fa-plus-circle" aria-hidden="true"></i> შექმნა</h4>
            </div>

            <div class="col-12">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label for="weight">წონა (კგ)</label>
                        <input type="number" class="form-control" name="weight" placeholder="წონა (კგ)" id="weight"
                            value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label for="height">სიმაღლე (სმ)</label>
                        <input type="number" class="form-control" placeholder="სიმაღლე (სმ)" name="height" id="height"
                            value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>სხეულის მასის ინდექსი (სმ)</label>
                        <input type="number" class="form-control" placeholder="სხეულის მასის ინდექსი (სმ)"
                            name="body_mass" id="body_mass" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label for="abdominal_circumference">მუცლის გარშემოწერილობა (სმ)</label>
                        <input type="number" class="form-control" placeholder="მუცლის გარშემოწერილობა"
                            name="abdominal_circumference" id="abdominal_circumference" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label for="head_circumference">თავის გარშემოწერილობა (სმ)</label>
                        <input type="number" class="form-control" placeholder="თავის გარშემოწერილობა (სმ)"
                            name="head_circumference" id="head_circumference" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-12">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>წელის გარშემოწერილობა (სმ)</label>
                        <input type="number" class="form-control" placeholder="წელის გარშემოწერილობა (სმ)"
                            name="waist_circumference" id="waist_circumference" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>სიმაღლე ჯდომისას (სმ)</label>
                        <input type="number" class="form-control" placeholder="სიმაღლე ჯდომისას (სმ)"
                            id="height_sitting" name="height_sitting" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-12">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>მარჯვენა ზედა კიდურის სიგრძე (სმ)</label>
                        <input type="number" class="form-control" placeholder="მარჯვენა ზედა კიდურის სიგრძე (სმ)"
                            name="right_upper_limb" id="right_upper_limb" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>



            <div class="col-12">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label for="left_upper_limb">მარცხენა ზედა კიდურის სიგრძე (სმ)</label>
                        <input type="number" class="form-control" placeholder="მარცხენა ზედა კიდურის სიგრძე (სმ)"
                            name="left_upper_limb" id="left_upper_limb" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-12">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>მარცხენა ქვედა კიდურის სიგრძე (სმ)</label>
                        <input type="number" class="form-control" placeholder="მარცხენა ქვედა კიდურის სიგრძე (სმ)"
                            name="left_lower_limb" id="left_lower_limb" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-12">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>მარჯვენა ქვედა კიდურის სიგრძე (სმ)</label>
                        <input type="number" class="form-control" placeholder="მარჯვენა ქვედა კიდურის სიგრძე (სმ)"
                            name="right_lower_limb" id="right_lower_limb" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label>აღნაგობა</label>
                    <select class="form-control" name="construction" id="construction">
                        <option value="1">ასთენიური</option>
                        <option value="2">ნორმოსთენიური</option>
                        <option value="3">ჰიპერსთენიური</option>
                    </select>
                </div>
            </div>

            <div class="col-12">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label for="right_cluster_dynamometer">მარჯვენა მტევნის დინამომეტრია</label>
                        <input type="number" class="form-control" placeholder="მარჯვენა მტევნის დინამომეტრია"
                            name="right_cluster_dynamometer" id="right_cluster_dynamometer" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>მარცხენა მტევნის დინამომეტრია</label>
                        <input type="number" class="form-control" placeholder="მარცხენა მტევნის დინამომეტრია"
                            name="left_cluster_dynamometer" id="left_cluster_dynamometer" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>




            <div class="col-12">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label for="traction_force_dynamometer">წევის ძალის დინამომეტრია</label>
                        <input type="number" class="form-control" placeholder="წევის ძალის დინამომეტრია"
                            id="traction_force_dynamometer" name="traction_force_dynamometer" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>სპირომეტრია</label>
                        <input type="number" class="form-control" placeholder="სპირომეტრია" id="spirometry"
                            name="spirometry" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>



            <div class="col-12">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label for="developmental_defect">განვითარების დეფექტი</label>
                        <input type="number" class="form-control" placeholder="განვითარების დეფექტი"
                            name="developmental_defect" id="developmental_defect" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>











        </div>


        <div class="col-6">

            <div class="col-12">
                <br>
                <h4 class="form-section"><i class="fa fa-heartbeat"></i> გულმკერდის გარშემოწერილობა</h4>
            </div>




            <div class="col-12">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label for="at_rest">მოსვენებისას</label>
                        <input type="number" class="form-control" placeholder="" id="at_rest" name="at_rest" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-12">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label for="when_inhaling">ჩასუნთქვისას</label>
                        <input type="number" class="form-control" placeholder="" id="when_inhaling" name="when_inhaling"
                            value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-12">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label for="on_exhalation">ამოსუნთქვისას</label>
                        <input type="number" class="form-control" placeholder="" id="on_exhalation" name="on_exhalation"
                            value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label for="chest_circumference_text">დამატებითი ინფორმაცია</label>
                        <textarea name="chest_circumference_text" class="form-control"
                            placeholder="დამატებითი ინფორმაცია" id="chest_circumference_text"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" id="antropometry_id" value="" name="edit_id">
    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
        <button type="button" onclick="insertAntropometry(this.id)" id="add-antropometry"
            class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1"><i class="fa fa-edit" aria-hidden="true"></i>
            შენახვა</button>
        <button type="button" class="btn btn-light" id="user-register-reject" onclick="getAntropometry(this.id)"
            data-toggle="tab" href="#antropometry-tab-content"><i class="fa fa-ban" aria-hidden="true"></i>
            გაუქმება</button>
    </div>
    </div>
</form>