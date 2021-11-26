<br>
<!-- users edit media object start -->
<div class="media mb-2">
    <a class="mr-2" href="#">
        <img src="app-assets/images/portrait/small/avatar-s-27.png" alt="users avatar"
            class="users-avatar-shadow rounded-circle" height="64" width="64">
    </a>
    <div class="media-body">
        <h4 class="media-heading">პირის ღრუ - ჩანაწერის დამატება</h4>
        <div class="col-6 px-0 d-flex">
            <span class="btn btn-sm btn-primary mr-25">ისტორიის ნომერი</span>
            <span class="btn btn-sm btn-secondary"><?php echo strtotime(date("Y-m-d H:i:s")) ?></span>
        </div>
    </div>
</div>
<!-- users edit media object ends -->
<!-- users edit account form start -->
<form novalidate="" id="mounth-form" method="post" action="" autocomplete="off">

    <div class="col-12">
        <div class="row">

            <div class="col-12">

                <h4 class="form-section"> პირის ღრუ</h4>
            </div>

            <div class="col-12">
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" value="" name="without_pathology">
                        <input type="checkbox" class="custom-control-input" value="1" name="without_pathology" id="without_pathology_mounth">
                        <label class="custom-control-label" for="without_pathology_mounth">პათოლოგიის გარეშე/ნორმის ფარგლებში</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>დაავადებული კბილ(ებ)ი</label>
                        <input type="number" class="form-control" placeholder="დაავადებული კბილ(ებ)ი" name="diseased_teeth" id="diseased_teeth" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="causal_pain">
                        <input type="checkbox" class="custom-control-input" value="1" name="causal_pain" id="causal_pain">
                        <label class="custom-control-label" for="causal_pain">გამღიზიანებლით გამოწვეული მიზეზობრივი
                            ხასიათის ტკივილი</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="pain_when_pressing">
                        <input type="checkbox" class="custom-control-input" value="1" name="pain_when_pressing" id="pain_when_pressing">
                        <label class="custom-control-label" for="pain_when_pressing">ტკივილი კბილის კბილზე დაჭერისას</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="pain_of_deaf">
                        <input type="checkbox" class="custom-control-input" value="1" name="pain_of_deaf" id="pain_of_deaf">
                        <label class="custom-control-label" for="pain_of_deaf">ყრუ ხასიათის ტკივილი</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="pain_of_arbitrary">
                        <input type="checkbox" class="custom-control-input" value="1" name="pain_of_arbitrary" id="pain_of_arbitrary">
                        <label class="custom-control-label" for="pain_of_arbitrary">თვითნებითი ხასიათის ტკივილი</label>
                    </div>
                </fieldset>
            </div>


            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="night_pain">
                        <input type="checkbox" class="custom-control-input" value="1" name="night_pain" id="night_pain">
                        <label class="custom-control-label" for="night_pain">ღამის ტკივილი</label>
                    </div>
                </fieldset>
            </div>


            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="aesthetic_discomfort">
                        <input type="checkbox" class="custom-control-input" value="1" name="aesthetic_discomfort" id="aesthetic_discomfort">
                        <label class="custom-control-label" for="aesthetic_discomfort">ესთეტიკური დისკომფორტი</label>
                    </div>
                </fieldset>
            </div>



            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="bjen_defect">
                        <input type="checkbox" class="custom-control-input" value="1" name="bjen_defect" id="bjen_defect">
                        <label class="custom-control-label" for="bjen_defect">ბჟენის დეფექტი</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="crown_defect">
                        <input type="checkbox" class="custom-control-input" value="1" name="crown_defect" id="crown_defect">
                        <label class="custom-control-label" for="crown_defect">გვირგვინის დეფექტი</label>
                    </div>
                </fieldset>
            </div>


            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="root">
                        <input type="checkbox" class="custom-control-input" value="1" name="root" id="root">
                        <label class="custom-control-label" for="root">ფესვი</label>
                    </div>
                </fieldset>
            </div>


            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="facial_asymmetry">
                        <input type="checkbox" class="custom-control-input" value="1" name="facial_asymmetry" id="facial_asymmetry">
                        <label class="custom-control-label" for="facial_asymmetry">სახის ასიმეტრია</label>
                    </div>
                </fieldset>
            </div>


            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="existence_deposits">
                        <input type="checkbox" class="custom-control-input" value="1" name="existence_deposits" id="existence_deposits">
                        <label class="custom-control-label" for="existence_deposits">ქვისა და რბილი ნადების არსებობა</label>
                    </div>
                </fieldset>
            </div>


            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="bleeding_gums">
                        <input type="checkbox" class="custom-control-input" value="1" name="bleeding_gums" id="bleeding_gums">
                        <label class="custom-control-label" for="bleeding_gums">სისხლდენა ღრძილებიდან</label>
                    </div>
                </fieldset>
            </div>



            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="adentia">
                        <input type="checkbox" class="custom-control-input" value="1" name="adentia" id="adentia">
                        <label class="custom-control-label" for="adentia">ადენტია</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="halitosis">
                        <input type="checkbox" class="custom-control-input" value="1" name="halitosis" id="halitosis">
                        <label class="custom-control-label" for="halitosis">ჰალითოზი</label>
                    </div>
                </fieldset>
            </div>


            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="joint_pathology">
                        <input type="checkbox" class="custom-control-input" value="1" name="joint_pathology" id="joint_pathology">
                        <label class="custom-control-label" for="joint_pathology">საფეთქელ-ქვედა ყბის სახსრის
                            პათოლოგია</label>
                    </div>
                </fieldset>
            </div>


            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>სხვა</label>
                        <input type="text" class="form-control" placeholder="სხვა" id="mouth_other" name="mouth_other" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>თანკბილვა</label>
                        <input type="text" class="form-control" placeholder="თანკბილვა" id="occlusion_text" name="occlusion_text" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <div class="controls">
                        <label>პირის ღრუს ლორწოვანი გარსის მდგომარეობა</label>
                        <input type="text" class="form-control" placeholder="პირის ღრუს ლორწოვანი გარსის მდგომარეობა"
                            id="mouth_condition_text" name="mouth_condition_text" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-12">

                <h4 class="form-section">ობიექტური გამოკვლევები - პირის ღრუს დათვალიერება</h4>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <div class="controls">
                        <label>დეფექტის ლოკალიზაცია</label>
                        <input type="text" class="form-control" placeholder="დეფექტის ლოკალიზაცია" id="defect_localization_text" name="defect_localization_text" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label>კბილის მორყევის ხარისხი</label>
                    <select class="form-control" name="degree_tooth_extraction" id="degree_tooth_extraction">
                        <option></option>
                        <option value="1">I</option>
                        <option value="2">II</option>
                        <option value="3">III</option>
                    </select>
                </div>
            </div>


            <div class="col-12">
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="caries" value="">
                        <input type="checkbox" class="custom-control-input" value="1" name="caries" id="caries">
                        <label class="custom-control-label" for="caries">კარიესი-კ</label>
                    </div>
                </fieldset>
            </div>


            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                    <input type="hidden" name="archaic_caries_disease">
                        <input type="checkbox" class="custom-control-input" value="1" name="archaic_caries_disease" id="archaic_caries_disease">
                        <label class="custom-control-label" for="archaic_caries_disease">არქაკარიესული დაავადება-აკ</label>
                    </div>
                </fieldset>
            </div>


            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                    <input type="hidden" name="pulpit">
                        <input type="checkbox" class="custom-control-input" value="1" name="pulpit" id="pulpit">
                        <label class="custom-control-label" for="pulpit">პულპიტი-პ</label>
                    </div>
                </fieldset>
            </div>


            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                    <input type="hidden" name="periodontitis">
                        <input type="checkbox" class="custom-control-input" value="1" name="periodontitis" id="periodontitis">
                        <label class="custom-control-label" for="periodontitis">პერიოდონტიტი-პტ</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                    <input type="hidden" name="bjeni">
                        <input type="checkbox" class="custom-control-input" value="1" name="bjeni" id="bjeni">
                        <label class="custom-control-label" for="bjeni">ბჟენი-ბ</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                    <input type="hidden" name="artificial_teeth">
                        <input type="checkbox" class="custom-control-input" value="1" name="artificial_teeth" id="artificial_teeth">
                        <label class="custom-control-label" for="artificial_teeth">ხელოვნური კბილი-ხკ</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                    <input type="hidden" name="artificial_crown">
                        <input type="checkbox" class="custom-control-input" value="1" name="artificial_crown" id="artificial_crown">
                        <label class="custom-control-label" for="artificial_crown">ხელოვნური გვირგვინი</label>
                    </div>
                </fieldset>
            </div>





            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                    <input type="hidden" name="extruded_tooth">
                        <input type="checkbox" class="custom-control-input" value="1" name="extruded_tooth" id="extruded_tooth">
                        <label class="custom-control-label" for="extruded_tooth">ექსტრაგირებული კბილი-0</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                    <input type="hidden" name="tooth_root">
                        <input type="checkbox" class="custom-control-input" value="1" name="tooth_root" id="tooth_root">
                        <label class="custom-control-label" for="tooth_root">ფესვი-ფ</label>
                    </div>
                </fieldset>
            </div>


            <div class="col-12">
                <br>
                <h4 class="form-section"> პაროდონტის მდგომარეობა</h4>
            </div>



            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                    <input type="hidden" name="swelling">
                        <input type="checkbox" class="custom-control-input" value="1" name="swelling" id="swelling">
                        <label class="custom-control-label" for="swelling">შეშუპება</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">
                <fieldset>
                    <div class="custom-control custom-checkbox">
                    <input type="hidden" name="hyperemia">
                        <input type="checkbox" class="custom-control-input" value="1" name="hyperemia" id="hyperemia">
                        <label class="custom-control-label" for="hyperemia">ჰიპერემია</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                    <input type="hidden" name="cyanosis">
                        <input type="checkbox" class="custom-control-input" value="1" name="cyanosis" id="cyanosis">
                        <label class="custom-control-label" for="cyanosis">ციანოზი</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">
                <fieldset>
                    <div class="custom-control custom-checkbox">
                    <input type="hidden" name="retraction">
                        <input type="checkbox" class="custom-control-input" value="1" name="retraction" id="retraction">
                        <label class="custom-control-label" for="retraction">რეტრაქცია</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                    <input type="hidden" name="hypertrophy">
                        <input type="checkbox" class="custom-control-input" value="1" name="hypertrophy" id="hypertrophy">
                        <label class="custom-control-label" for="hypertrophy">ჰიპერტროფია</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">
                <fieldset>
                    <div class="custom-control custom-checkbox">
                    <input type="hidden" name="bleeding">
                        <input type="checkbox" class="custom-control-input" value="1" name="bleeding" id="bleeding">
                        <label class="custom-control-label" for="bleeding">სისხლდენა</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                    <input type="hidden" name="bone_pocket">
                        <input type="checkbox" class="custom-control-input" value="1" name="bone_pocket" id="bone_pocket">
                        <label class="custom-control-label" for="bone_pocket">ძვლოვანი ჯიბე</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">
                <fieldset>
                    <div class="custom-control custom-checkbox">
                    <input type="hidden" name="ridge_atrophy">
                        <input type="checkbox" class="custom-control-input" value="1" name="ridge_atrophy" id="ridge_atrophy">
                        <label class="custom-control-label" for="ridge_atrophy">ალვეოლური მორჩის ატროფია</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">
                <fieldset>
                    <div class="custom-control custom-checkbox">
                    <input type="hidden" name="periodontal_pocket">
                        <input type="checkbox" class="custom-control-input" value="1" name="periodontal_pocket" id="periodontal_pocket">
                        <label class="custom-control-label" for="periodontal_pocket">პაროდონტული ჯიბე</label>
                    </div>
                </fieldset>
            </div>


            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>პაროდონტული ჯიბის სიღრმე</label>
                        <input type="text" class="form-control" placeholder="პაროდონტული ჯიბის სიღრმე" id="periodontal_pocket_depth" name="periodontal_pocket_depth" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>სხვა</label>
                        <input type="text" class="form-control" placeholder="სხვა" id="periodontal_other" name="periodontal_other" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>



            <div class="col-12">
                <h4 class="form-section">ნადები</h4>
            </div>

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                    <input type="hidden" name="not_observed">
                        <input type="checkbox" class="custom-control-input" value="1" name="not_observed" id="not_observed">
                        <label class="custom-control-label" for="not_observed">არ აღენიშნება</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                    <input type="hidden" name="soft">
                        <input type="checkbox" class="custom-control-input" value="1" name="soft" id="soft">
                        <label class="custom-control-label" for="soft">რბილი</label>
                    </div>
                </fieldset>
            </div>


            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                    <input type="hidden" name="pigmented">
                        <input type="checkbox" class="custom-control-input" value="1" name="pigmented" id="pigmented">
                        <label class="custom-control-label" for="pigmented">პიგმენტური</label>
                    </div>
                </fieldset>
            </div>


            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                    <input type="hidden" name="tough">
                        <input type="checkbox" class="custom-control-input" value="1" name="tough" id="tough">
                        <label class="custom-control-label" for="tough">მაგარი</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">
                <fieldset>
                    <div class="custom-control custom-checkbox">
                    <input type="hidden" name="gingival">

                        <input type="checkbox" class="custom-control-input" value="1" name="gingival" id="gingival">
                        <label class="custom-control-label" for="gingival">ღრძილზედა</label>
                    </div>
                </fieldset>
            </div>


            <div class="col-12">
                <br>
                <h4 class="form-section">კბილები</h4>
            </div>



            <div class="col-12">
                <button type="button" id="teeth-add-id" onclick="addTeeth(this.id)" data-toggle="modal"
                    data-target="#teeth-modal" class="btn btn-primary btn-min-width mr-1 mb-1"><i
                        class="fa fa-plus"></i> ჩანაწერის დამატება</button>
                <table class="table table-striped table-bordered" id="teeth-table">
                    <thead>
                        <tr>
                            <th>კბილი</th>
                            <th>მდგომარეობა</th>

                        </tr>
                    </thead>

                </table>

            </div>







    <input type="hidden" id="mounth_id" name="edit_id"  onchange="nika()">

        </div>
    </div>


    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
        <button type="button" onclick="InsertMounth()" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1"><i class="fa fa-edit"
                aria-hidden="true"></i> შენახვა</button>
        <button type="button" class="btn btn-light" id="user-register-reject" onclick="getHead(this.id)"
            data-toggle="tab" href="#head-tab-content" aria-controls="linkOpt1"><i class="fa fa-ban"
                aria-hidden="true"></i> გაუქმება</button>
    </div>

    </div>
</form>


<div class="modal fade text-left " id="teeth-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8"
    aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary white">
                <h4 class="modal-title" id="myModalLabel8">კბილები - ჩანაწერის დამატება</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body" id="teeth-add-modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" onclick="InsertTeeth(this.id)" id="insert-teeth-id" class="btn btn-outline-primary"><i class="fa fa-edit" aria-hidden="true"></i>
                    შენახვა</button>
                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal"><i class="fa fa-ban"
                        aria-hidden="true"></i> გაუქმება</button>

            </div>
        </div>
    </div>
</div>
<script>

    </script>