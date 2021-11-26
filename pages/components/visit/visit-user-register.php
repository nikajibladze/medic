<?php if (isset($_POST["id"])) {
    $id = $_POST["id"];
    if (isset($_POST["personal_id"])) {
        $personal_id = $_POST["personal_id"];
    } else {
        die;
    }
} else {
    http_response_code(404);
    header('location:http://medical.ge/404.php');
    die;
}?>
<!-- users edit media object start -->
<div class="media mb-2">
    <a class="mr-2" href="#" onclick="prevent(event)">
        <img src="app-assets/images/portrait/small/avatar-s-27.png" alt="users avatar"
            class="users-avatar-shadow rounded-circle" height="64" width="64">
    </a>
    <div class="media-body">
        <h4 class="media-heading">ახალი ისტორიის გახსნა</h4>
        <div class="col-12 px-0 d-flex">
            <span class="btn btn-sm btn-primary mr-25">ისტორიის ნომერი</span>
            <span class="btn btn-sm btn-secondary"><?php echo strtotime(date("Y-m-d H:i:s")) ?></span>
        </div>
    </div>
</div>
<!-- users edit media object ends -->
<!-- users edit account form start -->
<form novalidate="" id="patient_history" autocomplete="off">
    <div class="row">
        <div class="col-12 col-sm-6">
            <div class="form-group">
                <div class="controls">
                    <label>პირადი ნომერი</label>
                    <input type="number" class="form-control" maxlength="11"
                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                        placeholder="პირადი ნომერი" id="personal_no" value="" name="personal_no">


                    <div class="help-block"></div>
                </div>
            </div>



            <div class="form-group">
                <div class="controls">
                    <label>გვარი</label>
                    <input type="text" class="form-control" placeholder="გვარი" name="last_name" value="" required="">
                    <div class="help-block"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="controls">
                    <label>დაბადების თარიღი</label>
                    <input type="text" class="form-control datepicker" name="birth_date" placeholder="დაბადების თარიღი"
                        value="" required="">
                    <div class="help-block"></div>
                </div>
            </div>

            <div class="form-group">
                <label>სისხლის ჯგუფი</label>
                <select class="form-control select2" id="blood_groops" name="blood_group">
                    <option value="">სისხლის ჯგუფი</option>

                </select>
            </div>

            <div class="form-group">
                <div class="controls">
                    <label>დაზღვევა</label>
                    <input type="text" class="form-control" placeholder="დაზღვევა" name="" value="" required="">
                    <div class="help-block"></div>
                </div>
            </div>

        </div>
        <div class="col-12 col-sm-6">
            <div class="form-group">
                <div class="controls">
                    <label>სახელი</label>
                    <input type="text" class="form-control" placeholder="სახელი" value="" name="first_name" required="">
                    <div class="help-block"></div>
                </div>
            </div>
            <div class="form-group">
                <label>სქესი</label>
                <select class="form-control" name="gender">
                    <option value=""></option>
                    <option value="1">მამრობითი</option>
                    <option value="2">მდედრობითი</option>

                </select>
            </div>

            <div class="form-group">
                <div class="controls">
                    <label>ასაკი</label>
                    <input type="number" class="form-control" placeholder="ასაკი" value="" required="">
                    <div class="help-block"></div>
                </div>
            </div>

            <div class="form-group">
                <label>რეზუსი</label>
                <select class="form-control select2" id="rhesus_types" name="rhesus">
                    <option value=""></option>


                </select>
            </div>

            <div class="form-group">
                <div class="controls">
                    <label>პოლისის ნომერი</label>
                    <input type="text" class="form-control" placeholder="პოლისის ნომერი" value="" required="">
                    <div class="help-block"></div>
                </div>
            </div>
        </div>

        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
            <button type="button" id="patient_history" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1"
                onclick="patientHistory(this.id)"><i class="fa fa-plus-circle" aria-hidden="true"></i>
                შენახვა</button>

            <button type="button" class="btn btn-light" id="user-register-reject"
                onclick="getVisitRegiter(this.id,1)"><i class="fa fa-ban" aria-hidden="true"></i> გაუქმება</button>
        </div>
    </div>
</form>