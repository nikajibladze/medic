<br>
<!-- users edit media object start -->
<div class="media mb-2">
    <a class="mr-2" href="#">
        <img src="app-assets/images/portrait/small/avatar-s-27.png" alt="users avatar"
            class="users-avatar-shadow rounded-circle" height="64" width="64">
    </a>
    <div class="media-body">
        <h4 class="media-heading">ლიმფური სისტემა - ჩანაწერის დამატება</h4>
        <div class="col-6 px-0 d-flex">
            <span class="btn btn-sm btn-primary mr-25">ისტორიის ნომერი</span>
            <span class="btn btn-sm btn-secondary"><?php echo strtotime(date("Y-m-d H:i:s"))?></span>
        </div>
    </div>
</div>

<!-- users edit media object ends -->
<!-- users edit account form start -->
<form novalidate="" action="" method="post" id="limphatic-form">

    <div class="col-12">
        <div class="row">

            <div class="col-12">

                <h4 class="form-section"> <i class="fa fa-plus-circle" aria-hidden="true"></i> შექმნა</h4>
            </div>



            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="without_pathology" value="" />
                        <input type="checkbox" class="custom-control-input" value="1" name="without_pathology"
                            id="without_pathology_l">
                        <label class="custom-control-label" for="without_pathology_l">პათოლოგიის გარეშე / ნორმის
                            ფარგლებში</label>
                    </div>
                </fieldset>
            </div>




            <div class="col-6">
                <br>
                <div class="form-group">
                    <label>პერიფერიული ლიმფური კვნაძები</label>
                    <select class="form-control" id="peripheral_lymph_nodes" name="peripheral_lymph_nodes">
                        <option></option>
                        <option value="1">ისინჯება</option>
                        <option value="2">არ ისინჯება</option>
                    </select>
                </div>
            </div>


            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="front_side_neck" value="" />
                        <input type="checkbox" class="custom-control-input" name="front_side_neck" value="1"
                            id="front_side_neck">
                        <label class="custom-control-label" for="front_side_neck">კისრის წინა გვერდითი მიდამო</label>
                    </div>
                </fieldset>
            </div>



            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="back_side_neck" value="" />
                        <input type="checkbox" class="custom-control-input" name="back_side_neck" value="1"
                            id="back_side_neck">
                        <label class="custom-control-label" for="back_side_neck">კისრის უკანა გვერდითი მიდამო</label>
                    </div>
                </fieldset>
            </div>



            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="under_jaw" value="" />
                        <input type="checkbox" class="custom-control-input" name="under_jaw" value="1" id="under_jaw">
                        <label class="custom-control-label" for="under_jaw">ყბისქვეშა მიდამო</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="sublingual_area" value="" />
                        <input type="checkbox" class="custom-control-input" name="sublingual_area" value="1"
                            id="sublingual_area">
                        <label class="custom-control-label" for="sublingual_area">ენისქვეშა მიდამო</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="under_hips" value="" />
                        <input type="checkbox" class="custom-control-input" name="under_hips" value="1" id="under_hips">
                        <label class="custom-control-label" for="under_hips">იღლიისქვეშა მიდამო</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="around_abdomen" value="" />
                        <input type="checkbox" class="custom-control-input" name="around_abdomen" value="1" value="1"
                            id="around_abdomen">
                        <label class="custom-control-label" for="around_abdomen">საზარდულის მიდამო</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>ზომა</label>
                        <input type="number" class="form-control" placeholder="ზომა" id="size" name="size" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>კონსისტენცია</label>
                        <input type="text" class="form-control" placeholder="კონსისტენცია" id="consistency"
                            name="consistency" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>მტკივნეულობა</label>
                        <input type="text" class="form-control" placeholder="მტკივნეულობა" id="pain" name="pain"
                            value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>მოძრაობა</label>
                        <input type="text" class="form-control" placeholder="მოძრაობა" id="movement" name="movement"
                            value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>სხვა</label>
                        <input type="text" class="form-control" placeholder="სხვა" id="other" name="other" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>




            <div class="col-12">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label for="lymphatic_system_text">დამატებითი ინფორმაცია</label>
                        <textarea name="lymphatic_system_text" id="lymphatic_system_text" class="form-control"
                            placeholder="დამატებითი ინფორმაცია"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>






        </div>
    </div>

    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
        <button type="button" onclick="InsertLimphatic(this.id,1)" id="insert-limphatic"
            class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1"><i class="fa fa-edit" aria-hidden="true"></i>
            შენახვა</button>
        <button type="button" class="btn btn-light" id="user-register-reject" onclick="getLimphatic(this.id)"
            data-toggle="tab" href="#limphatic-tab-content" aria-controls="linkOpt1"><i class="fa fa-ban"
                aria-hidden="true"></i> გაუქმება</button>
    </div>

    </div>
    <input type="hidden" id="limphatic_id" name="edit_id" value="">
</form>