<br>
<!-- users edit media object start -->
<div class="media mb-2">
    <a class="mr-2" href="#">
        <img src="app-assets/images/portrait/small/avatar-s-27.png" alt="users avatar"
            class="users-avatar-shadow rounded-circle" height="64" width="64">
    </a>
    <div class="media-body">
        <h4 class="media-heading">რეფლექსები და ცდები - ჩანაწერის დამატება</h4>
        <div class="col-6 px-0 d-flex">
            <span class="btn btn-sm btn-primary mr-25">ისტორიის ნომერი</span>
            <span class="btn btn-sm btn-secondary"><?php echo strtotime(date("Y-m-d H:i:s"))?></span>
        </div>
    </div>
</div>
<!-- users edit media object ends -->
<!-- users edit account form start -->
<form novalidate="" method="post" action="" id="reflex-form" autocomplete="off">

    <div class="col-12">
        <div class="row">

            <div class="col-12">

                <h4 class="form-section"><i class="fa fa-plus"></i> შექმნა</h4>
            </div>



            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="without_pathology" value="">
                        <input type="checkbox" class="custom-control-input" value="1" name="without_pathology"
                            id="without_pathology_reflex">
                        <label class="custom-control-label" for="without_pathology_reflex">პათოლოგიების
                            გარეშე/ნორმის</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <label>კერნიგი</label>
                    <select class="form-control" name="kernig" id="kernig">
                        <option></option>
                        <option value="1"> D </option>
                        <option value="2"> S </option>
                        <option value="3"> D.S </option>

                    </select>
                </div>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <label>ბაბინსკი</label>
                    <select class="form-control" name="babinski" id="babinski">
                        <option></option>
                        <option value="1"> D </option>
                        <option value="2"> S </option>
                        <option value="3"> D.S </option>

                    </select>
                </div>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <label>კუნთების ტონუსი</label>
                    <select class="form-control" name="muscle_tone" id="muscle_tone">
                        <option></option>
                        <option value="1">მომატება D </option>
                        <option value="2">მომატება S </option>
                        <option value="3">მომატება D S </option>
                        <option value="4">დაქვეითება D </option>
                        <option value="5">დაქვეითება S </option>
                        <option value="6">დაქვეითება D S </option>

                    </select>
                </div>
            </div>

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="neck_muscle_rigidity" value="">
                        <input type="checkbox" class="custom-control-input" value="1" name="neck_muscle_rigidity"
                            id="neck_muscle_rigidity_reflex">
                        <label class="custom-control-label" for="neck_muscle_rigidity_reflex">კისრის კუნთების
                            რიგიდობა</label>
                    </div>
                </fieldset>
            </div>


            <div class="col-6">
                <br>
                <div class="form-group">
                    <label>ნისტაგმი</label>
                    <select class="form-control" name="nystagmus" id="nystagmus">
                        <option></option>
                        <option value="1">ვერტიკალური D </option>
                        <option value="2">ჰორიზონტალური D </option>
                        <option value="3">ვერტიკალური S </option>
                        <option value="4">ჰორიზონტალური S </option>
                        <option value="5">ვერტიკალური DS </option>
                        <option value="6">ჰორიზონტალური DS </option>

                    </select>
                </div>
            </div>

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="tonic_seizures" value="">
                        <input type="checkbox" class="custom-control-input" value="1" name="tonic_seizures"
                            id="tonic_seizures">
                        <label class="custom-control-label" for="tonic_seizures">ტონური კრუნჩხვები</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="clonic_seizures" value="">
                        <input type="checkbox" class="custom-control-input" value="1" name="clonic_seizures"
                            id="clonic_seizures">
                        <label class="custom-control-label" for="clonic_seizures">კლონური კრუნჩხვები</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="hypokinesia" value="">
                        <input type="checkbox" class="custom-control-input" value="1" name="hypokinesia"
                            id="hypokinesia">
                        <label class="custom-control-label" for="hypokinesia">ჰიპოკინეზია</label>
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
                        <input type="hidden" name="miosis" value="">
                        <input type="checkbox" class="custom-control-input" value="1" name="miosis" id="miosis">
                        <label class="custom-control-label" for="miosis">მიოზი</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="mydriasis" value="">
                        <input type="checkbox" class="custom-control-input" value="1" name="mydriasis" id="mydriasis">
                        <label class="custom-control-label" for="mydriasis">მიდრიაზი</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <label>ანიზოკორია</label>
                    <select class="form-control" name="anisocoria" id="anisocoria">
                        <option></option>
                        <option value="1"> D </option>
                        <option value="2"> S </option>
                        <option value="3"> D.S </option>

                    </select>
                </div>
            </div>

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="trism" value="">
                        <input type="checkbox" class="custom-control-input" value="1" name="trism" id="trism">
                        <label class="custom-control-label" for="trism">ტრიზმი</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <label>ფოტორეაქცია D</label>
                    <select class="form-control" name="photo_reaction_d" id="photo_reaction_d">
                        <option></option>
                        <option value="1">ნორმის ფარგლებში</option>
                        <option value="2">შესუსტებული</option>
                        <option value="3">არ არის</option>

                    </select>
                </div>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <label>ფოტორეაქცია S</label>
                    <select class="form-control" name="photo_reaction_s" id="photo_reaction_s">
                        <option></option>
                        <option value="1">ნორმის ფარგლებში</option>
                        <option value="2">შესუსტებული</option>
                        <option value="3">არ არის</option>

                    </select>
                </div>
            </div>


            <div class="col-12">
                <div class="form-group">
                    <div class="controls">
                        <label for="reflex_attemps_text">დამატებითი ინფორმაცია</label>
                        <textarea name="reflex_attemps_text" class="form-control" placeholder="დამატებითი ინფორმაცია"
                            id="reflex_attemps_text"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <input type="hidden" value="" id="reflex_id" name="edit_id">
    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
        <button type="button" onclick="InsertReflex(this.id)" id="insert-reflex"
            class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1"><i class="fa fa-edit" aria-hidden="true"></i>
            შენახვა</button>
        <button type="button" class="btn btn-light" id="user-register-reject" onclick="getNervous(this.id)"
            data-toggle="tab" href="#nervous-tab-content" aria-controls="linkOpt1"><i class="fa fa-ban"
                aria-hidden="true"></i> გაუქმება</button>
    </div>

    </div>
</form>