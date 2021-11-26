<br>
<!-- users edit media object start -->
<div class="media mb-2">
    <a class="mr-2" href="#">
        <img src="app-assets/images/portrait/small/avatar-s-27.png" alt="users avatar"
            class="users-avatar-shadow rounded-circle" height="64" width="64">
    </a>
    <div class="media-body">
        <h4 class="media-heading">კანი - ჩანაწერის დამატება</h4>
        <div class="col-6 px-0 d-flex">
            <span class="btn btn-sm btn-primary mr-25">ისტორიის ნომერი</span>
            <span class="btn btn-sm btn-secondary"><?php echo strtotime(date("Y-m-d H:i:s"))?></span>
        </div>
    </div>
</div>
<!-- users edit media object ends -->
<!-- users edit account form start -->
<form novalidate="" method="post" action="" id="skin-form">

    <div class="col-12">
        <div class="row">

            <div class="col-12">

                <h4 class="form-section"> <i class="fa fa-plus-circle" aria-hidden="true"></i> შექმნა</h4>
            </div>



            <!-- <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" value="1" name="without_pathology"
                            id="without_pathology">
                        <label class="custom-control-label" for="without_pathology">პათოლოგიების გარეშე</label>
                    </div>
                </fieldset>
            </div> -->

            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="without_pathology" value="">
                        <input type="checkbox" class="custom-control-input" value="1" name="without_pathology"
                            id="without_pathology2">
                        <label class="custom-control-label" for="without_pathology2">პათოლოგიების გარეშე</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="within_norm" value="">
                        <input type="checkbox" class="custom-control-input" value="1" name="within_norm"
                            id="within_norm">
                        <label class="custom-control-label" for="within_norm">ნორმის ფარგლებში</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="dew" value="">
                        <input type="checkbox" class="custom-control-input" value="1" name="dew" id="dew">
                        <label class="custom-control-label" for="dew">ნამიანი</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="hyperemic" value="">
                        <input type="checkbox" class="custom-control-input" value="1" name="hyperemic" id="hyperemic">
                        <label class="custom-control-label" for="hyperemic">ჰიპერემიული</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="hem" value="">
                        <input type="checkbox" class="custom-control-input" value="1" name="hem" id="hem">
                        <label class="custom-control-label" for="hem">ნაწიბური</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <label>ტურგორი</label>
                    <select class="form-control" id="turgor" name="turgor">
                        <option></option>
                        <option value="1">დაქვეითებული</option>
                        <option value="2">შენარჩუნებული</option>

                    </select>
                </div>
            </div>


            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="cold" value="">
                        <input type="checkbox" class="custom-control-input" value="1" name="cold" id="cold">
                        <label class="custom-control-label" for="cold">ცივი</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="adhesive" value="">
                        <input type="checkbox" class="custom-control-input" value="1" name="adhesive" id="adhesive">
                        <label class="custom-control-label" for="adhesive">წებოვანი</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="rash" value="">
                        <input type="checkbox" class="custom-control-input" value="1" name="rash" id="rash">
                        <label class="custom-control-label" for="rash">გამონაყარი</label>
                    </div>
                </fieldset>
            </div>



            <div class="col-6">
                <br>
                <div class="form-group">
                    <label>ფერი</label>
                    <select class="form-control" name="color" id="color">
                        <option></option>
                        <option value="1">ნორმა</option>
                        <option value="2">ჰიპერემიული</option>
                        <option value="3">ფერმკრთალი</option>
                        <option value="4">ციანოზური</option>
                    </select>
                </div>
            </div>




            <div class="col-12">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label for="skin_text">დამატებითი ინფორმაცია</label>
                        <textarea name="skin_text" class="form-control" placeholder="დამატებითი ინფორმაცია"
                            id="skin_text"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

        </div>



    </div>

    <input type="hidden" id="skin_id" value="" name="edit_id">
    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
        <button type="button" onclick="insertSkin(this.id)" id="insert-skin"
            class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1"><i class="fa fa-edit" aria-hidden="true"></i>
            შენახვა</button>
        <button type="button" class="btn btn-light" id="user-register-reject" onclick="getSkin(this.id)"
            data-toggle="tab" href="#skin-tab-content" aria-controls="linkOpt1"><i class=" fa fa-ban"
                aria-hidden="true"></i> გაუქმება</button>
    </div>

    </div>
</form>