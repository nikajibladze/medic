<br>
<!-- users edit media object start -->
<div class="media mb-2">
    <a class="mr-2" href="#">
        <img src="app-assets/images/portrait/small/avatar-s-27.png" alt="users avatar"
            class="users-avatar-shadow rounded-circle" height="64" width="64">
    </a>
    <div class="media-body">
        <h4 class="media-heading">საყრდენ მამოძრავებელი აპარატი - ჩანაწერის დამატება</h4>
        <div class="col-6 px-0 d-flex">
            <span class="btn btn-sm btn-primary mr-25">ისტორიის ნომერი</span>
            <span class="btn btn-sm btn-secondary"><?php echo strtotime(date("Y-m-d H:i:s"))?></span>
        </div>
    </div>
</div>
<!-- users edit media object ends -->
<!-- users edit account form start -->
<form novalidate="" action="" method="post" id="driven-form">

    <div class="col-12">
        <div class="row">

            <div class="col-12">

                <h4 class="form-section"> <i class="fa fa-plus-circle" aria-hidden="true"></i> შექმნა</h4>
            </div>



            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="without_pathology" value="">
                        <input type="checkbox" class="custom-control-input" value="1" name="without_pathology"
                            id="without_pathology">
                        <label class="custom-control-label" for="without_pathology">პათოლოგიის გარეშე / ნორმის
                            ფარგლებში</label>
                    </div>
                </fieldset>
            </div>


            <div class="col-12">
                <br>
                <h4 class="form-section"> კუნთოვანი სისტემა</h4>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <label for="muscular_development">კუნთოვანი განვითარება</label>
                    <select class="form-control" name="muscular_development" id="muscular_development">
                        <option></option>
                        <option value="1">სუსტი</option>
                        <option value="2">საშუალო</option>
                        <option value="2">კარგი</option>
                    </select>
                </div>
            </div>



            <div class="col-12">
                <br>
                <h4 class="form-section"> სახსროვანი აპარატი</h4>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <label for="movement_joints">მოძრაობა სახსრებში</label>
                    <select class="form-control" name="movement_joints" id="movement_joints">
                        <option></option>
                        <option value="1">თავისუფალი</option>
                        <option value="2">შეზღუდული</option>
                        <option value="2">მტკივნეული</option>
                    </select>
                </div>
            </div>



            <div class="col-12">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label for="musculoskeletal_system_text">დამატებითი ინფორმაცია</label>
                        <textarea name="musculoskeletal_system_text" class="form-control"
                            placeholder="დამატებითი ინფორმაცია" id="musculoskeletal_system_text"
                            name="musculoskeletal_system_text"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <input type="hidden" id="driven_id" name="edit_id">
    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
        <button type="button" onclick="InsertDriven(this.id , 1)"
            class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1"><i class="fa fa-edit" aria-hidden="true"></i>
            შენახვა</button>
        <button type="button" class="btn btn-light" id="user-register-reject" onclick="getDriven(this.id)"
            data-toggle="tab" href="#driven-tab-content" aria-controls="linkOpt1"><i class="fa fa-ban"
                aria-hidden="true"></i> გაუქმება</button>
    </div>

    </div>
</form>