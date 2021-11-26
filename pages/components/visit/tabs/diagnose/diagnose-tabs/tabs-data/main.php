<br>
<!-- users edit media object start -->
<div class="media mb-2">
    <a class="mr-2" href="#">
        <img src="app-assets/images/portrait/small/avatar-s-27.png" alt="users avatar"
            class="users-avatar-shadow rounded-circle" height="64" width="64">
    </a>
    <div class="media-body">
        <h4 class="media-heading">ძირითადი ინფორმაცია - ჩანაწერის დამატება</h4>
        <div class="col-6 px-0 d-flex">
            <span class="btn btn-sm btn-primary mr-25">ისტორიის ნომერი</span>
            <span class="btn btn-sm btn-secondary"><?php echo strtotime(date("Y-m-d H:i:s")) ?></span>
        </div>
    </div>
</div>
<!-- users edit media object ends -->
<!-- users edit account form start -->
<form novalidate="" method="post" id="desease-main-form" action="" autocomplete="off">

    <div class="col-12">
        <div class="row">

            <div class="col-12">

                <h4 class="form-section"> <i class="fa fa-plus-circle" aria-hidden="true"></i> შექმნა</h4>
            </div>

            <div class="col-6">

                <div class="form-group">
                    <label>დოკუმენტის წყარო</label>
                    <select class="form-control" id="document_source" onchange="outDocumentDesease(this.id)" name="document_source">
                        <option></option>
                        <option value="1">შიდა დოკუმენტი</option>
                        <option value="2">გარე დოკუმენტი</option>
                    </select>
                </div>
            </div>




            <div id="blank-block-desease">

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
                         <input type="text" class="form-control" placeholder="ექიმი" id="doctor_name" name="doctor_name" value="" >
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
            <table class="table table-bordered table-striped" id="desease-files-table" style="display: table;">
                            <thead>
                                <tr>
                                    <th>სახელი</th>
                                    <th>ჩამოტვირთვა</th>
                                    <th>წაშლა</th>
                                </tr>
                            </thead>
                            <tbody id="desease-file-table">


                    </tbody>
                        </table>
            </div>

        </div>

                   <div class="col-12">
                        <div class="form-group">
                        <label for="file"></label>
                        <label id="desease_file" class="file center-block btn btn-dark btn-sm file-bg">

                            <input type="file" class="hidden file-input desease_file" id="desease_file" name="desease_file[]">
                          <img src="assets/images/icons/upload.png" class="upload-img"> ფაილის მიმაგრება
                            <span class="file-custom"></span>
                        </label>
                        <span class="upload-filename"></span>
                    </div>	</div>



                    <div class="col-12">

<button type="button" id="add-additional-file-desease" onclick="additionalFileDesease(this.id)" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1"><i class="fa fa-plus" aria-hidden="true"></i>
ფაილის დამატება</button>
</div>



                    <div class="col-12">
<hr>
</div>
                        </div>






            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label>მომართვის თარიღი</label>
                        <input type="text" class="form-control datepicker" placeholder="მომართვის თარიღი" name="adjustment_date" id="adjustment_date"
                            value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-6">

                <div class="form-group">
                    <label>ჯერადობა</label>
                    <select class="form-control" name="multiplicity" id="multiplicity">
                        <option></option>
                        <option value="1">პირველადი</option>
                        <option value="2">მეორადი</option>
                    </select>
                </div>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <label>დაავადება</label>
                    <select class="form-control select2" id="disease_id" name="disease_id">
                        <option></option>
                        <option value="1">დაავადება 1</option>
                        <option value="2">დაავადება 2 </option>
                        <option value="3">დაავადება 3</option>
                    </select>
                </div>
            </div>



            <div class="col-12">
                <br>
                <h4 class="form-section">დიაგნოზის ტიპი</h4>
            </div>

            <div class="col-12">
                <button type="button" id="add-diagnose-type" onclick="addDiagnoseType(this.id,1)" data-toggle="modal"
                    data-target="#diagnose-type-modal" class="btn btn-primary btn-min-width mr-1 mb-1"><i
                        class="fa fa-plus"></i> ჩანაწერის დამატება</button>
                <table class="table table-striped table-bordered" id="diagnose-type-table">
                    <thead>
                        <tr>
                            <th>დიაგნოზის ტიპი</th>
                            <th>დიაგნოზი</th>
                            <th>კოდი</th>
                            <th>შექმნის თარიღი</th>
                            <th>დამატებითი ინფორმაცია</th>
                        </tr>
                    </thead>
                    <tbody>



                    </tbody>
                </table>
            </div>

            <div class="col-12">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label for="diagnosis_info_text">დამატებითი ინფორმაცია</label>
                        <textarea name="diagnosis_info_text" class="form-control" placeholder="დამატებითი ინფორმაცია"
                            id="diagnosis_info_text"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-6">

                <div class="form-group">
                    <label>დაავადების სიმძიმე</label>
                    <select class="form-control  select2" id="severity_of_disease" name="severity_of_disease">
                        <option></option>
                        <option value="1">მსუბუქი</option>
                        <option value="2">საშუალო</option>
                        <option value="3">მძიმე</option>
                        <option value="4">კრიტიკული</option>
                    </select>
                </div>
            </div>

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="active_phase_disease" value="">
                        <input type="checkbox" class="custom-control-input" value="1" name="active_phase_disease" id="active_phase_disease">
                        <label class="custom-control-label" for="active_phase_disease">დაავადების აქტიური ფაზა</label>
                    </div>
                </fieldset>
            </div>


            <div class="col-6">
                <br>
                <div class="form-group">
                    <label>დაავადების გამოსავალი</label>
                    <select class="form-control  select2" id="solution_of_disease" name="solution_of_disease">
                        <option></option>
                        <option value="1">გამოჯანმრთელებული</option>
                        <option value="2">გაუმჯობესებული</option>
                        <option value="3">უცვლელი</option>
                        <option value="4">გაუარესება</option>
                        <option value="5">გარდაიცვალა</option>
                    </select>
                </div>
            </div>


            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>გამოჯანმრთელდა</label>
                        <input type="text" class="form-control datepicker" placeholder="გამოჯანმრთელდა" id="recovered" name="recovered" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <div class="controls">
                        <label>გარდაიცვალა</label>
                        <input type="text" class="form-control datepicker" placeholder="გარდაიცვალა" id="passed_away" name="passed_away" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <div class="controls">
                        <label>გარდაცვალების მიზეზი</label>
                        <input type="text" class="form-control" placeholder="გარდაცვალების მიზეზი" name="cause_of_death" id="cause_of_death" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <label>ტრამვა</label>
                    <select class="form-control select2" id="trauma" name="trauma">
                        <option></option>
                        <option value="1">ტერიტორიის შიგნით ფიზ. მომზადება</option>
                        <option value="2">ტერიტორიის შიგნით სხვა</option>
                        <option value="3">ტერიტორიის გარეთ</option>
                    </select>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <div class="controls">
                        <label>სად</label>
                        <input type="text" class="form-control" placeholder="სად" id="trauma_where" name="trauma_where" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <div class="controls">
                        <label>როდის</label>
                        <input type="text" class="form-control datepicker" placeholder="როდის" id="trauma_when" name="trauma_when" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <div class="controls">
                        <label>რა ვითარებაში</label>
                        <input type="text" class="form-control" placeholder="რა ვითარებაში" id="under_what_circumstances" name="under_what_circumstances" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="no_damage_observed">
                        <input type="checkbox" class="custom-control-input" value="1" name="no_damage_observed" id="no_damage_observed">
                        <label class="custom-control-label" for="no_damage_observed">დაზიანება არ აღენიშნება</label>
                    </div>
                </fieldset>
            </div>


            <div class="col-6">
                <br>
                <div class="form-group">
                    <label>დაზიანება</label>
                    <select class="form-control select2" id="injury" name="injury">
                        <option></option>
                        <option value="1">ჭრილობა</option>
                        <option value="2">ექსკორიაცია შიგნით სხვა</option>
                        <option value="3">დეფორმაცია გარეთ</option>
                        <option value="4">ამპუტაცია</option>
                        <option value="5">დაჟეჟილობა</option>
                        <option value="6">ნაჭდევი გარეთ</option>
                        <option value="7">ღია/დახ.მოტეხილობა</option>
                        <option value="8">ღრძობა-დაჭიმულობა</option>
                        <option value="9">ჰემატომა/სისხლჩაქცევა</option>
                        <option value="10">დაზიანება</option>
                        <option value="11">ნაკბენი</option>
                        <option value="12">პოლიტრამვა</option>
                    </select>
                </div>
            </div>


            <div class="col-6">
                <br>
                <div class="form-group">
                    <label>მდებარეობა</label>
                    <select class="form-control select2" id="injury_location" name="injury_location">
                        <option></option>
                        <option value="1">თავი</option>
                        <option value="2">სახე</option>
                        <option value="3">თვალი</option>
                        <option value="4">კისერი</option>
                        <option value="5">გულმკერდი</option>
                        <option value="6">ზურგი</option>
                        <option value="7">მუცელი</option>
                        <option value="8">მენჯი/გენიტ</option>
                        <option value="9">კიდური ზედა</option>
                        <option value="10">კიდური ქვედა</option>
                        <option value="11">ხერხემალი</option>
                    </select>
                </div>
            </div>



            <div class="col-6">
                <div class="form-group">
                    <label>ჭრილობა</label>
                    <select class="form-control select2" name="injury_wound" id="injury_wound">
                        <option></option>
                        <option value="1">ნახეთქი</option>
                        <option value="2">ნაკვეთი</option>
                        <option value="3">ნაჩხვლეტ-ნაკვეთი</option>
                        <option value="4">სკალპირებული</option>
                        <option value="5">ცეცხლნასროლი</option>
                        <option value="6">ნაფლეთი</option>
                        <option value="7">ნაჩხვლეტი</option>
                    </select>
                </div>
            </div>


            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" value="" name="prolonged_bleeding">
                        <input type="checkbox" class="custom-control-input" value="1" name="prolonged_bleeding" id="prolonged_bleeding">
                        <label class="custom-control-label" for="prolonged_bleeding">გახანგრძილვებული სისხლდება</label>
                    </div>
                </fieldset>
            </div>


            <div class="col-12">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label for="prolonged_bleeding_text">დამატებითი ინფორმაცია</label>
                        <textarea name="prolonged_bleeding_text" class="form-control" placeholder="დამატებითი ინფორმაცია"
                            id="prolonged_bleeding_text"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="infection">
                        <input type="checkbox" class="custom-control-input" value="1" name="infection" id="infection">
                        <label class="custom-control-label" for="infection">ინფექცია</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="allergy" id="">
                        <input type="checkbox" class="custom-control-input" value="1" name="allergy" id="allergy">
                        <label class="custom-control-label" for="allergy">ალერგია</label>
                    </div>
                </fieldset>
            </div>


            <div class="col-6">
                <br>
                <div class="form-group">
                    <label>ალერტგიის ტიპი</label>
                    <select class="form-control select2" id="allergy_type" name="allergy_type">
                        <option></option>
                        <option value="1">მედიკამენტებზე ალერგია</option>
                        <option value="2">საკვებზე ალერგია</option>
                        <option value="3">სხვა ალერგია</option>
                        <option value="4">იდიოსინკრაზია</option>
                    </select>
                </div>
            </div>

            <div class="col-12">
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="pregnancy">
                        <input type="checkbox" class="custom-control-input" value="1" name="pregnancy" id="pregnancy">
                        <label class="custom-control-label" for="pregnancy">ორსულობა</label>
                    </div>
                </fieldset>
            </div>


            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>შენიშვნა</label>
                        <input type="text" class="form-control" placeholder="შენიშვნა" id="note_text" name="note_text" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <label>გამოგზავნილი</label>
                    <select class="form-control select2" id="posted" name="posted">
                        <option></option>
                        <option value="1">ნაწილის სამედიცინო სამსახურიდან</option>
                        <option value="2">ლაზარეთიდან</option>
                        <option value="3">ჰოსპიტალიდან</option>
                        <option value="4">სამოქ. დაწესებულებიდან</option>
                        <option value="5">სხვა</option>
                    </select>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label>შემოყვანილია</label>
                    <select class="form-control select2" id="introduced_why" name="introduced_why">
                        <option></option>
                        <option value="1">სასწრაფო ჩვენებით</option>
                        <option value="2">გეგმიურად</option>
                    </select>
                </div>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <div class="controls">
                        <label>საათის შემდეგ</label>
                        <input type="text" class="form-control" placeholder="საათის შემდეგ" id="hours_later" name="hours_later" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <label>შემოყვანილი</label>
                    <select class="form-control select2" id="introduced" name="introduced">
                        <option></option>
                        <option value="1">დაავადების დაწყებიდან</option>
                        <option value="2">ტრამვის მიღებიდან</option>
                        <option value="3">მოწამვლიდან</option>
                    </select>
                </div>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <label>ჰოსპიტალიზებულია მიმდინარე წელს</label>
                    <select class="form-control select2" id="hospitalized_this_year" name="hospitalized_this_year">
                        <option></option>
                        <option value="1">პირველადი</option>
                        <option value="2">განმეორებითი</option>
                    </select>
                </div>
            </div>

            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="transferred_civilian_clinic" id="">
                        <input type="checkbox" class="custom-control-input" name="transferred_civilian_clinic" value="1"
                            id="transferred_civilian_clinic">
                        <label class="custom-control-label" for="transferred_civilian_clinic">სამოქალაქო კლინიკაში გადაგზავნა</label>
                    </div>
                </fieldset>
            </div>


            <div class="col-12">
                <br>
                <h4 class="form-section">შეხვედრა/მიმართვა</h4>
            </div>

            <div class="col-12">
                <button type="button" id="add-diagnose-meet" onclick="addDiagnoseMeet(this.id,0)" data-toggle="modal"
                    data-target="#diagnose-meet-modal" class="btn btn-primary btn-min-width mr-1 mb-1"><i
                        class="fa fa-plus"></i> ჩანაწერის დამატება</button>
                <table class="table table-striped table-bordered" id="diagnose-meet-table">
                    <thead>
                        <tr>
                            <th>სტრ. ერთეული</th>
                            <th>სპეციალისტი</th>
                            <th>ადრესატი ექიმი</th>
                            <th>მდებარეობა</th>
                            <th>სამოქალაქო კლინიკაში გადაგზავნა</th>
                    </thead>
                    <tbody>



                    </tbody>
                </table>
            </div>


            <div class="col-12">
                <br>
                <h4 class="form-section">შეტყობინების მიმღები</h4>
            </div>

            <div class="col-12">
                <button type="button" id="add-diagnose-recipient" onclick="addDiagnoseMessage(this.id)" data-toggle="modal"
                    data-target="#diagnose-message-modal" class="btn btn-primary btn-min-width mr-1 mb-1"><i
                        class="fa fa-plus"></i> ჩანაწერის დამატება</button>
                <table class="table table-striped table-bordered" id="diagnose-recipient-table">
                    <thead>
                        <tr>
                            <th>სახელი/გვარი</th>
                            <th>სტრ. ერთეული</th>
                            <th>თარიღი</th>
                            <th>დამატებითი ინფორმაცია</th>
                        </tr>
                    </thead>
                    <tbody>



                    </tbody>
                </table>
            </div>




        </div>



    </div>
    <input type="hidden" id="desease_main_id" name="desease_main_id">

    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
        <button type="button" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1" onclick="insertDeseaseMain(this.id)" id="insert-desease-main"><i class="fa fa-edit"
                aria-hidden="true"></i> შენახვა</button>
        <button type="button" class="btn btn-light" id="user-register-reject" onclick="getDiagnose(this.id)"
            data-toggle="tab" href="#diagnose-tab-content" aria-controls="linkOpt1"><i class="fa fa-ban"
                aria-hidden="true"></i> გაუქმება</button>
    </div>

    </div>
</form>



<div class="modal fade text-left " id="diagnose-type-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8"
    aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary white">
                <h4 class="modal-title" id="myModalLabel8">დიაგნოზის ტიპი - ჩანაწერის დამატება</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body" id="diagnose-type-modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" onclick="InsertDiagnoseType(this.id)" id="insert-diagnose-type" class="btn btn-outline-primary"><i class="fa fa-edit" aria-hidden="true"></i>
                    შენახვა</button>
                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal"><i class="fa fa-ban"
                        aria-hidden="true"></i> გაუქმება</button>

            </div>
        </div>
    </div>
</div>



<div class="modal fade text-left " id="diagnose-meet-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8"
    aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary white">
                <h4 class="modal-title" id="myModalLabel8">შეხვედრა/მიმართვა - ჩანაწერის დამატება</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body" id="diagnose-meet-modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" onclick="InsertDiagnoseMeet(this.id)" id="insert-diagnose-main"><i class="fa fa-edit" aria-hidden="true"></i>
                    შენახვა</button>
                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal"><i class="fa fa-ban"
                        aria-hidden="true"></i> გაუქმება</button>

            </div>
        </div>
    </div>
</div>

<div class="modal fade text-left " id="diagnose-message-modal" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel8" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary white">
                <h4 class="modal-title" id="myModalLabel8">შეტყობინების მიმღები - ჩანაწერის დამატება</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body" id="diagnose-message-modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" onclick="InsertDiagnoseRecipient(this.id)" class="btn btn-outline-primary"><i class="fa fa-edit" aria-hidden="true"></i>
                    შენახვა</button>
                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal"><i class="fa fa-ban"
                        aria-hidden="true"></i> გაუქმება</button>

            </div>
        </div>
    </div>
</div>