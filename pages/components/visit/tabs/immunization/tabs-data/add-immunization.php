
            <br>
            <!-- users edit media object start -->
                <div class="media mb-2">
                            <a class="mr-2" href="#" onclick="prevent(event)">
                                <img src="app-assets/images/portrait/small/avatar-s-27.png" alt="users avatar" class="users-avatar-shadow rounded-circle" height="64" width="64">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">იმუნიზაცია - ჩანაწერის დამატება</h4>
                                <div class="col-6 px-0 d-flex">
                                    <span  class="btn btn-sm btn-primary mr-25">ისტორიის ნომერი</span>
                                    <span  class="btn btn-sm btn-secondary"><?php echo strtotime(date("Y-m-d H:i:s")) ?></span>
                                </div>
                            </div>
                        </div>
                        <!-- users edit media object ends -->
                        <!-- users edit account form start -->
                        <form novalidate="" id="immunization-form" autocomplete="off" action="" method="post">

                            <div class="col-12">
                            <div class="row">

                            <div class="col-12">

        <h4 class="form-section"> <i class="fa fa-plus-circle" aria-hidden="true"></i> შექმნა</h4>
        </div>


        <div class="col-6">

                        <div class="form-group">
                            <label>დოკუმენტის წყარო</label>
                            <select class="form-control" id="document_type" name="document_type" onchange="outDocumentImmunization(this.id)">
                            <option></option>
                                <option value="1">შიდა დოკუმენტი</option>
                                <option value="2">გარე დოკუმენტი</option>
                            </select>
                        </div>   </div>




<div id="blank-block-immunization">

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
            <table class="table table-bordered table-striped" id="psychology-files-table" style="display: table;">
                            <thead>
                                <tr>
                                    <th>სახელი</th>
                                    <th>ჩამოტვირთვა</th>
                                    <th>წაშლა</th>
                                </tr>
                            </thead>
                            <tbody id="immunization-file-table">


                    </tbody>
                        </table>
            </div>

        </div>




                   <div class="col-12">
                        <div class="form-group">
                        <label for="file"></label>
                        <label id="immunization_file" class="file center-block btn btn-dark btn-sm file-bg">

                            <input type="file" class="hidden file-input immunization_file" id="immunization_file" name="immunization_file[]">
                          <img src="assets/images/icons/upload.png" class="upload-img"> ფაილის მიმაგრება
                            <span class="file-custom"></span>
                        </label>
                        <span class="upload-filename"></span>
                    </div>	</div>



                    <div class="col-12">

<button type="button" id="add-additional-file" onclick="additionalFileImmunization(this.id)" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1"><i class="fa fa-plus" aria-hidden="true"></i>
ფაილის დამატება</button>
</div>



                    <div class="col-12">
<hr>
</div>
                        </div>

                        <div class="col-6">
         <div class="form-group">
                                         <div class="controls">
                                             <label>თარიღი</label>
                                             <input type="text" class="form-control datepicker" placeholder="თარიღი" id="vaccine_date" name="vaccine_date" value="">
                                         <div class="help-block"></div></div>
                                     </div>
                                     </div>


                                     <div class="col-6">
                                 <div class="form-group">
                                     <label>Vaccine</label>
                                     <select class="form-control select2" name="vaccine" id="vaccine">
                                     <option></option>
                                     </select>
                                 </div>    </div>



                        <div class="col-12">

<fieldset>
<div class="custom-control custom-checkbox">
    <input type="hidden" name="not_require_revaccination">
<input type="checkbox" class="custom-control-input" value="1" name="not_require_revaccination" id="not_require_revaccination">
<label class="custom-control-label" for="not_require_revaccination">არ საჭიროებს რევაქცინაციას</label>
</div>
</fieldset>
</div>


<div class="col-6">
<br>
         <div class="form-group">
                                         <div class="controls">
                                             <label>რევაქცინაცია</label>
                                             <input type="text" class="form-control datepicker" placeholder="რევაქცინაცია" name="revaccination" id="revaccination" value="">
                                         <div class="help-block"></div></div>
                                     </div>
                                     </div>
                                     <div class="col-6">
<br>
         <div class="form-group">
                                         <div class="controls">
                                             <label>უკუჩვენება</label>
                                             <input type="text" class="form-control" name="contraindications" id="contraindications" placeholder="უკუჩვენება" id="" value="">
                                         <div class="help-block"></div></div>
                                     </div>
                                     </div>


<div class="col-6">
                                 <div class="form-group">
                                     <label>აცრის შემდგომი გართულება</label>
                                     <select class="form-control select2" name="further_complication_vaccination" id="further_complication_vaccination">
                                     <option></option>
                                         <option value="1">მძიმე ადგილობრივი რეაქცია</option>
                                         <option value="2">ლიმფადენტი</option>
                                         <option value="3">ჰიპერმია და შეშუპება 7-8 სმ-ზე მეტი დიამეტრის</option>
                                         <option value="4">მწვავე დუნე დამბლა</option>
                                         <option value="5">გიენ-ბარეს სინდრომი</option>
                                         <option value="6">ენცეფალოპათია</option>
                                         <option value="7">ენცეფალიტი</option>
                                     </select>
                                 </div>    </div>

                                 <div class="col-6">
         <div class="form-group">
                                         <div class="controls">
                                             <label>ლოტ ნომერი</label>
                                             <input type="text" class="form-control" placeholder="ლოტ ნომერი" name="lot_number" id="lot_number" value="">
                                         <div class="help-block"></div></div>
                                     </div>
                                     </div>

                                     <div class="col-12">

<fieldset>
<div class="custom-control custom-checkbox">
    <input type="hidden" name="patient_rejection">
<input type="checkbox" class="custom-control-input" value="1" name="patient_rejection" id="patient_rejection">
<label class="custom-control-label" for="patient_rejection">პაციენტის უარი </label>
</div>
</fieldset>
</div>

<div class="col-12">
                                 <br>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="additional_information">დამატებითი ინფორმაცია</label>
                                            <textarea name="additional_information" class="form-control" placeholder="დამატებითი ინფორმაცია" name="additional_information" id="additional_information"></textarea>
                                        <div class="help-block"></div></div>
                                    </div>
                                    </div>


                                </div>



                                </div>

                <input type="hidden" id="immunization_id" name="immunization_id">
                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                    <button type="button" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1" id="insert-immunization" onclick="InsertImmunization(this.id)"><i class="fa fa-edit" aria-hidden="true"></i> შენახვა</button>
                                    <button type="button" class="btn btn-light" id="user-register-reject" onclick="getImmunization(this.id)"  data-toggle="tab" href="#immunization-tab-content"><i class="fa fa-ban" aria-hidden="true"></i> გაუქმება</button>
                                </div>

                            </div>
                        </form>



