<br>
<!-- users edit media object start -->
<div class="media mb-2">
    <a class="mr-2" href="#">
        <img src="app-assets/images/portrait/small/avatar-s-27.png" alt="users avatar"
            class="users-avatar-shadow rounded-circle" height="64" width="64">
    </a>
    <div class="media-body">
        <h4 class="media-heading">მედიკამენტები - ჩანაწერის დამატება</h4>
        <div class="col-6 px-0 d-flex">
            <span class="btn btn-sm btn-primary mr-25">ისტორიის ნომერი</span>
            <span class="btn btn-sm btn-secondary"><?php echo strtotime(date("Y-m-d H:i:s")) ?></span>
        </div>
    </div>
</div>
<!-- users edit media object ends -->
<!-- users edit account form start -->
<form novalidate="" id="medications-form" action="" method="post" autocomplete="off">

    <div class="col-12">
        <div class="row">

            <div class="col-12">

                <h4 class="form-section"> ძირითადი ინფორმაცია</h4>
            </div>


            <div class="col-6">

                <div class="form-group">
                    <label>დოკუმენტის წყარო</label>
                    <select class="form-control" id="document_type" name="document_type" onchange="outDocument(this.id)">
                        <option></option>
                        <option value="1">შიდა დოკუმენტი</option>
                        <option value="2">გარე დოკუმენტი</option>
                    </select>
                </div>
            </div>



            <div id="blank-block">

<div class="col-12">

<h4 class="form-section"> გარე დოკუმენტი</h4>
</div>


<div class="col-6">

<div class="form-group">
                     <div class="controls">
                         <label for="document_number">დოკუმენტის ნომერი</label>
                         <input type="number" name="document_number" class="form-control"  placeholder="დოკუმენტის ნომერი" id="document_number" value="" >
                     <div class="help-block"></div></div>
                 </div>
                 </div>

                 <div class="col-6">

<div class="form-group">
                     <div class="controls">
                         <label>შექმნის თარიღი</label>
                         <input type="text" class="form-control datepicker" name="create_date"  placeholder="შექმნის თარიღი" id="create_date" value="" >
                     <div class="help-block"></div></div>
                 </div>
                 </div>

                 <div class="col-6">

<div class="form-group">
                     <div class="controls">
                         <label>ექიმი</label>
                         <input type="text" class="form-control" id="doctor" placeholder="ექიმი" id="" name="doctor" value="" >
                     <div class="help-block"></div></div>
                 </div>
                 </div>


                 <div class="col-6">

<div class="form-group">
                       <div class="controls">
                           <label>სამედიცინო დაწესებულება</label>
                           <input type="text" class="form-control"  placeholder="სამედიცინო დაწესებულება" id="medical_institution" name="medical_institution" value="" >
                       <div class="help-block"></div></div>
                   </div>
                   </div>


                   <div class="col-12">

<h4 class="form-section"> <i class="fa fa-file" aria-hidden="true"></i> მიმაგრებული ფაილები</h4>
</div>
                                    <div class="col-12">
        <div class="">
            <table class="table table-bordered table-striped" id="medications-files-table" style="display: table;">
                            <thead>
                                <tr>
                                    <th>სახელი</th>
                                    <th>ჩამოტვირთვა</th>
                                    <th>წაშლა</th>
                                </tr>
                            </thead>
                            <tbody id="medications-file-table">


                    </tbody>
                        </table>
            </div>

        </div>




                   <div class="col-12">
                        <div class="form-group">
                        <label for="file"></label>
                        <label id="medications_file" class="file center-block btn btn-dark btn-sm file-bg">

                            <input type="file" class="hidden file-input medications_file" id="medications_file" name="medications_file[]">
                          <img src="assets/images/icons/upload.png" class="upload-img"> ფაილის მიმაგრება
                            <span class="file-custom"></span>
                        </label>
                        <span class="upload-filename"></span>
                    </div>	</div>



                    <div class="col-12">

<button type="button" id="add-additional-file" onclick="additionalFileMedications(this.id)" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1"><i class="fa fa-plus" aria-hidden="true"></i>
ფაილის დამატება</button>
</div>



                    <div class="col-12">
<hr>
</div>
                        </div>

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="current">
                        <input type="checkbox" class="custom-control-input" value="1" name="current" id="current">
                        <label class="custom-control-label" for="current">მიმდინარე</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <label>ჩვენება</label>
                    <select class="form-control select2" name="indication" id="indication">
                        <option></option>

                    </select>
                </div>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>მკურნალობის დასაწყისი</label>
                        <input type="text" class="form-control datepicker" placeholder="მკურნალობის დასაწყისი" name="begin_treatment" id="begin_treatment"
                            value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>



            <div class="col-6">
                <div class="form-group">
                    <div class="controls">
                        <label>მკურნალობის დასასრული</label>
                        <input type="text" class="form-control datepicker" placeholder="მკურნალობის დასასრული" name="end_treatment" id="end_treatment"
                            value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" value="" name="course_over">
                        <input type="checkbox" class="custom-control-input" value="1" name="course_over" id="course_over">
                        <label class="custom-control-label" for="course_over">კურსი დასრულებულია</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="terminated_medications" value="">
                        <input type="checkbox" class="custom-control-input" value="1" name="terminated_medications" id="terminated_medications">
                        <label class="custom-control-label" for="terminated_medications">შეწყვეტილია</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>შეწყვეტის მიზეზი</label>
                        <input type="text" class="form-control" placeholder="შეწყვეტის მიზეზი" name="termination_reason" id="termination_reason" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>შენიშვნა</label>
                        <input type="text" class="form-control" placeholder="შენიშვნა" name="note" id="note" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-12">

                <h4 class="form-section"> მედიკამენტები</h4>
            </div>
            <div class="col-12">
                <button type="button" id="add-diagnose-type" onclick="addMedicationsModal(this.id,1)" data-toggle="modal"
                    data-target="#add-medications-modal" class="btn btn-primary btn-min-width mr-1 mb-1"><i
                        class="fa fa-plus"></i> ჩანაწერის დამატება</button>
                <table class="table table-striped table-bordered" id="medications-meds-table">
                    <thead>
                        <tr>
                            <th>პროდუქცია</th>
                            <th>გაცემის ტიპი</th>
                            <th>წაშლის ფორმა</th>
                            <th>ზომის ერთეული</th>
                            <th>რაოდენობა</th>
                            <th>მიღების ფორმა </th>
                        </tr>
                    </thead>
                    <tbody>



                    </tbody>
                </table>
            </div>





        </div>



    </div>

    <input type="hidden" id="medications_id" name="medications_id">
    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
        <button type="button" id="insert-medications-form" onclick="InsertMedications(this.id)" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1"><i
                class="fa fa-edit" aria-hidden="true"></i> შენახვა</button>
        <button type="button" class="btn btn-light" id="user-register-reject" onclick="getMedications(this.id)"
            data-toggle="tab" href="#medications-tab-content"><i class="fa fa-ban" aria-hidden="true"></i>
            გაუქმება</button>
    </div>

    </div>
</form>


<div class="modal fade text-left " id="add-medications-modal" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel8" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary white">
                <h4 class="modal-title" id="myModalLabel8">მედიკამენტები - ჩანაწერის დამატება</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body" id="add-medications-modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" onclick="insertMedicationsModal(this.id)" id="insert-medications-modal"><i class="fa fa-edit" aria-hidden="true"></i>
                    შენახვა</button>
                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal"><i class="fa fa-ban"
                        aria-hidden="true"></i> გაუქმება</button>

            </div>
        </div>
    </div>
</div>