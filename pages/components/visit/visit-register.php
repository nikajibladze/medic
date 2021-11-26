<?php if (isset($_POST["id"])) {
    $id = $_POST["id"];

} else {
    http_response_code(404);
    header('location:http://medical.ge/404.php');
    die;
}?>
<div class="tab-content px-1">
    <div class="tab-pane in active" id="active1" aria-labelledby="active-tab1" role="tabpanel">

        <!-- users edit media object start -->

        <!-- users edit media object ends -->
        <!-- users edit account form start -->
        <form novalidate="" autocomplete="off" id="visit-register-form">
            <h4 class="form-section" id="form-section"><i class="fa fa-user-plus"></i> ვიზიტის რეგისტრაცია </h4>
            <div class="row">

                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <div class="controls">
                            <label>პირადი ნომერი</label>
                            <input type="number" class="form-control" maxlength="11"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                onkeyup="VisitRegisterCheck(this.id,event)" placeholder="პირადი ნომერი" id="personal_id"
                                value="" name="personal">
                            <div class="help-block"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="controls">
                            <label>გვარი</label>
                            <input type="text" class="form-control" id="lastname" placeholder="გვარი" name="lastname"
                                value="">
                            <div class="help-block"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="controls">
                            <label>ვიზიტის თარიღი</label>
                            <input type="text" class="form-control datepicker" id="register_date" name="register_date"
                                placeholder="ვიზიტის თარიღი" value="">
                            <div class="help-block"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>ადრესატი ექიმი</label>
                        <select class="form-control select2" id="doctors" name="doctor">
                            <option></option>
                        </select>
                    </div>
                </div>

                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <div class="controls">
                            <label>სახელი</label>
                            <input type="text" class="form-control" id="firstname" name="name" placeholder="სახელი"
                                value="">
                            <div class="help-block"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="controls">
                            <label>რეგისტრაციის თარიღი</label>
                            <input type="text" class="form-control datepicker" disabled
                                value="<?php echo date("Y-m-d"); ?>" id="r" name="registerdate"
                                placeholder="რეგისტრაციის თარიღი" value="">
                            <div class="help-block"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>მდგომარეობა</label>
                        <select class="form-control select2" name="condition_type" id="conditions">
                            <option value=""></option>

                        </select>
                    </div>
                    <input type="hidden" class="form-control" id="history_id" name="history_id" placeholder="ისტორია"
                        value="">

                </div>
                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                    <button type="button" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1"
                        onclick="visitRegisterInsert(1)" id="visit-register-btn">შენახვა <i class="fa fa-plus-circle"
                            aria-hidden="true"></i></button>
                    <button type="button" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1"
                        onclick="visitRegisterInsert(2)" id="visit-register-btn">შეანხვა / დახურვა <i
                            class="fa fa-plus-circle" aria-hidden="true"></i></button>
                    <button type="button" class="btn btn-light" id="reject_visit" onclick="getVisit(this.id)">გაუქმება
                        <i class="fa fa-ban" aria-hidden="true"></i></button>
                </div>
            </div>
        </form>
    </div>

</div>