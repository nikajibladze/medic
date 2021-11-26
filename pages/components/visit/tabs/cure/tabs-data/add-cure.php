<br>
<!-- users edit media object start -->
<div class="media mb-2">
    <a class="mr-2" href="#">
        <img src="app-assets/images/portrait/small/avatar-s-27.png" alt="users avatar"
            class="users-avatar-shadow rounded-circle" height="64" width="64">
    </a>
    <div class="media-body">
        <h4 class="media-heading">მკურნალობა - ჩანაწერის დამატება</h4>
        <div class="col-6 px-0 d-flex">
            <span class="btn btn-sm btn-primary mr-25">ისტორიის ნომერი</span>
            <span class="btn btn-sm btn-secondary"><?php echo strtotime(date("Y-m-d H:i:s")) ?></span>
        </div>
    </div>
</div>
<!-- users edit media object ends -->
<!-- users edit account form start -->
<form novalidate="" id="cure-form" method="post" autocomplete="off" action="">

    <div class="col-12">
        <div class="row">

            <div class="col-12">

                <h4 class="form-section"> <i class="fa fa-plus-circle" aria-hidden="true"></i> შექმნა</h4>
            </div>
            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label>მომართვის თარიღი</label>
                        <input type="text" class="form-control datepicker" placeholder="მომართვის თარიღი" name="date_of_adjustment" id="date_of_adjustment"
                            value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-12">

                <h4 class="form-section"> მკურნალობა</h4>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <label>მდგომარეობა</label>
                    <select class="form-control select2" name="condition_cure" id="condition_cure">
                        <option></option>
                        <option value="1">სტაციონარული</option>
                        <option value="2">ამბულატორიული</option>
                    </select>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label>მკურნალობის აღწერა</label>
                    <select class="form-control select2" id="description_treatment" name="description_treatment">
                        <option></option>
                        <option value="1">კონსერვატიული</option>
                        <option value="2">ქირურგიული</option>
                        <option value="3">რეაბილიტაცია</option>
                        <option value="4">პალიატური</option>
                    </select>
                </div>
            </div>


            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label>მკურნალობის დასაწყისი</label>
                        <input type="text" class="form-control datepicker" placeholder="მკურნალობის დასაწყისი" id="begin_treatment"
                            value="" name="begin_treatment">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label>მკურნალობის დასასრული</label>
                        <input type="text" class="form-control datepicker" placeholder="მკურნალობის დასასრული" id="end_treatment"
                            value="" name="end_treatment">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-12">

                <h4 class="form-section"> ჩარევის პროცედურის კოდი</h4>
            </div>
            <div class="col-12">
                <button type="button" id="add-procedure-code-modal" onclick="addProcedureCode(this.id)" data-toggle="modal"
                    data-target="#cure-procedure-code-modal" class="btn btn-primary btn-min-width mr-1 mb-1"><i
                        class="fa fa-plus"></i> ჩანაწერის დამატება</button>
                <table class="table table-striped table-bordered" id="procedure-code-table">
                    <thead>
                        <tr>
                            <th>პროცედურის კოდი</th>
                            <th>პროცედურა</th>
                            <th>კომენტარი</th>
                        </tr>
                    </thead>
                    <tbody>



                    </tbody>
                </table>
            </div>


            <div class="col-12">
                <div class="form-group">
                    <div class="controls">
                        <label for="additional_information2">დამატებითი ინფორმაცია</label>
                        <textarea name="additional_information" class="form-control" placeholder="დამატებითი ინფორმაცია"
                            id="additional_information2"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <div class="controls">
                        <label for="treatment_result">მკურნალობის შედეგი</label>
                        <textarea name="treatment_result" class="form-control" placeholder="მკურნალობის შედეგი" id="treatment_result"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" id="patient_consent" name="patient_consent">
                        <input type="checkbox" class="custom-control-input" value="1" name="patient_consent" onclick="confirmFile()"
                            value="1" id="patient_confirm">
                        <label class="custom-control-label" for="patient_confirm">პაციენტის თანხმობა</label>
                    </div>
                </fieldset>
                <br>
            </div>


            <div class="row" id="patient_confirm_file">
            <div class="col-12">
        <div class="col-6">
            <table class="table table-bordered table-striped" id="files-table-cure">
                            <thead>
                                <tr>
                                    <th>სახელი</th>
                                    <th>ჩამოტვირთვა</th>
                                    <th>წაშლა</th>
                                </tr>
                            </thead>
                            <tbody id="file-table-cure">


                            </tbody>
                        </table>
            </div>

        </div>



            <div class="col-12" >
                <div class="form-group">
                    <label>მიმაგრებული ფაილი</label>
                    <label id="files" class="file center-block">
                        <input type="file" class="images" id="images" name="images[]">
                        <span class="file-custom"></span>
                    </label>
                </div>

            </div>

            <div class="col-12">

<button type="button" id="add-additional-file-cure" onclick="additionalFile(this.id)" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1"><i class="fa fa-plus" aria-hidden="true"></i>
ფაილის დამატება</button>
</div>

            </div>








            <div class="col-12">
                <br>
                <h4 class="form-section"> შეხვედრა /მიმართვა</h4>
            </div>

            <div class="col-12">
                <button type="button" id="add-cure-meet" onclick="addCureMeet(this.id)" data-toggle="modal"
                    data-target="#cure-meet-modal" class="btn btn-primary btn-min-width mr-1 mb-1"><i
                        class="fa fa-plus"></i> ჩანაწერის დამატება</button>
                <table class="table table-striped table-bordered" id="cure-meet-table">
                    <thead>
                        <tr>
                            <th>სტრ. ერთეული</th>
                            <th>სპეციალობა</th>
                            <th>ადრესატი ექიმი</th>
                            <th>თარიღი</th>
                            <th>მდგომარეობა</th>
                            <th>ინფორმაცია</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <input type="hidden" name="cure_id" id="cure_id">
    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
        <button type="button" onclick="InsertCure()" id="insert-cure" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1"><i class="fa fa-edit"
                aria-hidden="true"></i> შენახვა</button>
        <button type="button" class="btn btn-light" id="user-register-reject" onclick="getCure(this.id)"
            data-toggle="tab" href="#cure-tab-content" aria-controls="linkOpt1"><i class="fa fa-ban"
                aria-hidden="true"></i> გაუქმება</button>
    </div>

    </div>
</form>


<div class="modal fade text-left " id="cure-procedure-code-modal" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel8" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary white">
                <h4 class="modal-title" id="myModalLabel8">ჩარევის (პროცედურის) კოდი - ჩანაწერის დამატება</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body" id="cure-procedure-code-modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" id="insert-procedure-code" onclick="InsertProcedureCode(this.id)"><i class="fa fa-edit" aria-hidden="true"></i>
                    შენახვა</button>
                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal"><i class="fa fa-ban"
                        aria-hidden="true"></i> გაუქმება</button>

            </div>
        </div>
    </div>
</div>


<div class="modal fade text-left " id="cure-meet-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8"
    aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary white">
                <h4 class="modal-title" id="myModalLabel8">შეხვედრა /მიმართვა - ჩანაწერის დამატება</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body" id="cure-meet-modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" onclick="InsertCureMeet(this.id)" id="insert-cure-meet" class="btn btn-outline-primary" ><i class="fa fa-edit" aria-hidden="true"></i>
                    შენახვა</button>
                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal"><i class="fa fa-ban"
                        aria-hidden="true"></i> გაუქმება</button>

            </div>
        </div>
    </div>
</div>