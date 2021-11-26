<br>
<!-- users edit media object start -->
<div class="media mb-2">
    <a class="mr-2" href="#">
        <img src="app-assets/images/portrait/small/avatar-s-27.png" alt="users avatar"
            class="users-avatar-shadow rounded-circle" height="64" width="64">
    </a>
    <div class="media-body">
        <h4 class="media-heading">ცნობიერება - ჩანაწერის დამატება</h4>
        <div class="col-6 px-0 d-flex">
            <span class="btn btn-sm btn-primary mr-25">ისტორიის ნომერი</span>
            <span class="btn btn-sm btn-secondary"><?php echo strtotime(date("Y-m-d H:i:s"))?></span>
        </div>
    </div>
</div>
<!-- users edit media object ends -->
<!-- users edit account form start -->
<form novalidate="" id="aware-form" action="" method="POST" autocomplete="off">

    <div class="col-12">
        <div class="row">

            <div class="col-12">

                <h4 class="form-section"><i class="fa fa-plus"></i> შექმნა</h4>
            </div>


            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="without_pathology" value="">
                        <input type="checkbox" class="custom-control-input" value="1" name="without_pathology"
                            id="without_pathology_aware">
                        <label class="custom-control-label" for="without_pathology_aware">პათოლოგიების გარეშე/ნორმის
                            ფარგლებში</label>
                    </div>
                </fieldset>
            </div>



            <div class="col-6">
                <br>
                <div class="form-group">
                    <label for="eyeballs">გუგები D</label>
                    <select class="form-control" name="eyeballs" id="eyeballs">
                        <option></option>
                        <option value="1"> = S </option>
                        <option value="2"> > S </option>
                        <option value="3">
                            < S </option>

                    </select>
                </div>
            </div>

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="skull_base_fracture" value="">
                        <input type="checkbox" class="custom-control-input" value="1" name="skull_base_fracture"
                            id="skull_base_fracture">
                        <label class="custom-control-label" for="skull_base_fracture">ქალას ფუძის მოტეხილობის
                            ნიშნები</label>
                    </div>
                </fieldset>
            </div>


            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label for="loss_of_consciousness">გონების დაკარგვა (წთ)</label>
                        <input type="number" class="form-control" placeholder="გონების დაკარგვა (წთ)"
                            id="loss_of_consciousness" name="loss_of_consciousness" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>



            <div class="col-6">
                <br>
                <div class="form-group">
                    <label for="avpu">AVPU</label>
                    <select class="form-control" name="avpu" id="avpu">
                        <option></option>
                        <option value="1">A-აქტიური</option>
                        <option value="2">V-პასუხი სიტყვიერ გაღიზიანებაზე</option>
                        <option value="3">P-პასუხი ტკივილით გაღიზიანებაზე</option>
                        <option value="4">U-რეაქციაზე გაღიზიანება არ გამოიხატება</option>
                    </select>
                </div>
            </div>


            <div class="col-12">

                <h4 class="form-section"><i class="fa fa-line-chart" aria-hidden="true"></i> გლაზგოს კომის შკალა GCS
                </h4>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <label for="open_eye">თვალის გახელა</label>
                    <select class="form-control price" onchange="glasgoScale(this.id)" id="open-eye" name="open_eyes">
                        <option></option>
                        <option value="4">სპონტანური - 4 ქულა</option>
                        <option value="3">რეაგირებს ჩაძახილზე - 3 ქულა</option>
                        <option value="2">რეაგირებს ტკივილზე - 2 ქულა</option>
                        <option value="1">რეაქცია არ არის 1 ქულა</option>
                    </select>
                </div>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <label>ვერბალური მეტყველება</label>
                    <select class="form-control price" name="verbal_speech" onchange="glasgoScale(this.id)" id="verbal">
                        <option></option>
                        <option value="5">კონტაქტური/ორიენტირებული - 5 ქულა</option>
                        <option value="4">კონტაქტური/დეზორიენტირებული - 4 ქულა</option>
                        <option value="3">პასუხობს არაადექვატურად, ცალკეული სიტყვები - 3 ქულა</option>
                        <option value="2">გაუგებარი სიტყვები - 2 ქულა</option>
                        <option value="1">არ არის ვერბალური რეაქცია - 1 ქულა</option>
                    </select>
                </div>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <label>მოტორული რეაქცია</label>
                    <select class="form-control price" onchange="glasgoScale(this.id)" id="motor" name="motor_reaction">
                        <option></option>
                        <option value="6">A - აქტიური ასრულებს დავალებას - 6 ქულა</option>
                        <option value="5">V - პასუხი სიტყვიერ გაღიზიანებაზე ტკივილის ლოკალიზაცია - 5 ქულა</option>
                        <option value="4">P - პასუხი ტკივილით გაღიზიანებაზე მოცილების რეაქცია (ფლექსია)- 4 ქულა</option>
                        <option value="3">U - გაღიზიანებაზე რეაქცია არ გამოიხატება დეკორტიკალური რიგიდობა (გაშლა)- 3
                            ქულა</option>
                        <option value="2">დეცერებრაციული რიგიდობა (მოხრა) - 2 ქულა</option>
                        <option value="1">არ არის რეაქცია - 1 ქულა</option>
                    </select>
                </div>
            </div>



            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>საბოლოო ქულა</label>
                        <input type="number" disabled class="form-control" placeholder="საბოლოო ქულა" name=""
                            id="glasgo_count">
                        <input type="hidden" value="" name="sum_of_results" id="hidden_count">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label for="level_of_consciousness">ცნობიერების დონე</label>
                        <input type="number" class="form-control" placeholder="ცნობიერების დონე"
                            name="level_of_consciousness" id="level_of_consciousness" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>ცნობიერების სფერო</label>
                        <input type="text" class="form-control" placeholder="ცნობიერების სფერო"
                            id="field_of_consciousness" name="field_of_consciousness" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="hallucination" value="">
                        <input type="checkbox" class="custom-control-input" value="1" name="hallucination"
                            id="halutsinatsia">
                        <label class="custom-control-label" for="halutsinatsia">ჰალუცინაცია</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label for="vegetative_nervous_system">ვეგეტატიური ნერვული სისტემა</label>
                        <input type="text" class="form-control" name="vegetative_nervous_system"
                            id="vegetative_nervous_system" placeholder="ვეგეტატიური ნერვული სისტემა" id="" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label for="mental_status">ფსიქიური სტატუსი</label>
                        <input type="text" class="form-control" placeholder="ფსიქიური სტატუსი" name="mental_status"
                            id="mental_status" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label for="sleep">ძილი</label>
                        <input type="text" class="form-control" placeholder="ძილი" name="sleep" id="sleep" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>



            <div class="col-12">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label for="glasgow_coma_scale_text">დამატებითი ინფორმაცია</label>
                        <textarea name="glasgow_coma_scale_text" class="form-control"
                            placeholder="დამატებითი ინფორმაცია" id="glasgow_coma_scale_text"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>




        </div>

    </div>

    <input type="hidden" id="aware_id" name="edit_id">
    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
        <button type="button" onclick="insertAware(this.id)" id="insert-aware"
            class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1"><i class="fa fa-edit" aria-hidden="true"></i>
            შენახვა</button>
        <button type="button" class="btn btn-light" id="user-register-reject" onclick="getNervous(this.id)"
            data-toggle="tab" href="#nervous-tab-content" aria-controls="linkOpt1"><i class="fa fa-ban"
                aria-hidden="true"></i> გაუქმება</button>
    </div>

    </div>
</form>