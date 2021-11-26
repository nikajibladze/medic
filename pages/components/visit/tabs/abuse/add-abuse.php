<?php if (isset($_POST["id"])) {
    $id = $_POST["id"];

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
        <h4 class="media-heading">ჩივილი/ანამნეზი - ჩანაწერის დამატება</h4>
        <div class="col-12 px-0 d-flex">
            <span class="btn btn-sm btn-primary mr-25">ისტორიის ნომერი</span>
            <span class="btn btn-sm btn-secondary"><?php echo strtotime(date("Y-m-d H:i:s")) ?></span>
        </div>
    </div>
</div>
<!-- users edit media object ends -->
<!-- users edit account form start -->
<form id="abuse-form" method="POST" autocomplete="off">
    <div class="row">
        <div class="col-12">
            <h4 class="form-section"> ჩივილი </h4>
        </div>
        <div class="col-12">
            <div class="form-group">
                <div class="controls">
                    <label for="">ჩივილი</label>

                    <input type="text" class="form-control" placeholder="ჩივილი" id="abuse_text" value=""
                        name="abuse_text">
                    <div class="help-block"></div>
                </div>
            </div>
        </div>

        <div class="col-12">
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" class="custom-control-input" value="" name="no_abuse" id="">
                    <input type="checkbox" class="custom-control-input" value="1" name="no_abuse" id="no_abuse">
                    <label class="custom-control-label" for="no_abuse">ჩივილი არ აქვს</label>
                </div>
            </fieldset>
        </div>

        <div class="col-12">
            <br>
            <h4 class="form-section"> ანამნეზი </h4>
        </div>

        <div class="col-12">
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="medicaments">
                    <input type="checkbox" class="custom-control-input" value="1" name="medicaments" id="medicaments">
                    <label class="custom-control-label" for="medicaments">მედიკამენტოზური დამოკიდებულება</label>
                </div>
            </fieldset>
        </div>

        <div class="col-12">
            <br>
            <div class="form-group">
                <div class="controls">
                    <label for="infomedicaments_text1">დამატებითი ინფორმაცია</label>
                    <textarea name="medicaments_text" class="form-control" placeholder="დამატებითი ინფორმაცია"
                        id="medicaments_text"></textarea>
                    <div class="help-block"></div>
                </div>
            </div>
        </div>

        <!-- <div class="col-12">
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="customCheck" id="customCheck4">
                    <label class="custom-control-label" for="customCheck4">ანამნეზის შეკრება ვერ ხდება</label>
                </div>
            </fieldset>
        </div> -->






        <div class="col-12">
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="allergy">
                    <input type="checkbox" class="custom-control-input" value="1" name="allergy" id="allergy">
                    <label class="custom-control-label" for="allergy">ალერგია</label>
                </div>
            </fieldset>
        </div>

        <div class="col-12">
            <br>
            <div class="form-group">
                <div class="controls">
                    <label for="allergy_text">დამატებითი ინფორმაცია</label>
                    <textarea name="allergy_text" class="form-control" placeholder="დამატებითი ინფორმაცია"
                        id="allergy_text"></textarea>
                    <div class="help-block"></div>
                </div>
            </div>
        </div>



        <div class="col-12">
            <br>
            <h4 class="form-section"> მავნე ჩვევები </h4>
        </div>

        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="tobacco">
                    <input type="checkbox" class="custom-control-input" value="1" name="tobacco" id="tobacco">
                    <label class="custom-control-label" for="tobacco">თამბაქო</label>
                </div>
            </fieldset>
        </div>

        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="alcohol">
                    <input type="checkbox" class="custom-control-input" value="1" name="alcohol" id="alcohol">
                    <label class="custom-control-label" for="alcohol">ალკოჰოლი</label>
                </div>
            </fieldset>
        </div>

        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="drugs">
                    <input type="checkbox" class="custom-control-input" value="1" name="drugs" id="drugs">
                    <label class="custom-control-label" for="drugs">ნარკოტიკები</label>
                </div>
            </fieldset>
        </div>

        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="bad_habits_other">
                    <input type="checkbox" class="custom-control-input" value="1" name="bad_habits_other"
                        id="bad_habits_other">
                    <label class="custom-control-label" for="bad_habits_other">სხვა</label>
                </div>
            </fieldset>
        </div>

        <div class="col-12">
            <br>
            <div class="form-group">
                <div class="controls">
                    <label for="bad_habits_text">დამატებითი ინფორმაცია</label>

                    <textarea name="bad_habits_text" class="form-control" placeholder="დამატებითი ინფორმაცია"
                        id="bad_habits_text"></textarea>
                    <div class="help-block"></div>
                </div>
            </div>
        </div>




        <div class="col-12">
            <br>
            <h4 class="form-section"> სისხლის მიმოქცევის სისტემის ავადმყოფობები </h4>
        </div>

        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="ischemic_heart">
                    <input type="checkbox" class="custom-control-input" value="1" name="ischemic_heart"
                        id="ischemic_heart">
                    <label class="custom-control-label" for="ischemic_heart">გულის იშემიური ავადმყოფობა</label>
                </div>
            </fieldset>
        </div>

        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="hypertensive_disease">
                    <input type="checkbox" class="custom-control-input" value="1" name="hypertensive_disease"
                        id="hypertensive_disease">
                    <label class="custom-control-label" for="hypertensive_disease">ჰიპერტენზიული ავადმყოფობა</label>
                </div>
            </fieldset>
        </div>

        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="blood_diseases_other">
                    <input type="checkbox" class="custom-control-input" value="1" name="blood_diseases_other"
                        id="blood_diseases_other">
                    <label class="custom-control-label" for="blood_diseases_other">სხვა</label>
                </div>
            </fieldset>
        </div>



        <div class="col-12">
            <br>
            <div class="form-group">
                <div class="controls">
                    <label for="blood_diseases_text">დამატებითი ინფორმაცია</label>
                    <textarea name="blood_diseases_text" class="form-control" placeholder="დამატებითი ინფორმაცია"
                        id="blood_diseases_text"></textarea>
                    <div class="help-block"></div>
                </div>
            </div>
        </div>





        <div class="col-12">
            <br>
            <h4 class="form-section"> სუნთქვის სისტემის ავადმყოფობები </h4>
        </div>

        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="asthma">
                    <input type="checkbox" class="custom-control-input" value="1" name="asthma" id="asthma">
                    <label class="custom-control-label" for="asthma">ასთმა</label>
                </div>
            </fieldset>
        </div>

        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="lung_disease">
                    <input type="checkbox" class="custom-control-input" value="1" name="lung_disease" id="lung_disease">
                    <label class="custom-control-label" for="lung_disease">ფილტვის ქრონიკული ავადმყოფობა</label>
                </div>
            </fieldset>
        </div>

        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="respiratory_system_other">
                    <input type="checkbox" class="custom-control-input" value="1" name="respiratory_system_other"
                        id="respiratory_system_other">
                    <label class="custom-control-label" for="respiratory_system_other">სხვა</label>
                </div>
            </fieldset>
        </div>

        <div class="col-12">
            <br>
            <div class="form-group">
                <div class="controls">
                    <label for="respiratory_system_text">დამატებითი ინფორმაცია</label>
                    <textarea name="respiratory_system_text" class="form-control" placeholder="დამატებითი ინფორმაცია"
                        id="respiratory_system_text"></textarea>
                    <div class="help-block"></div>
                </div>
            </div>
        </div>

        <div class="col-12">
            <br>
            <h4 class="form-section"> ენდოკრინული სისტემის, კვებისა და ნივთიერებათა ცვლის დარღვევით მიმდინარე
                ავადმყოფობები</h4>
        </div>

        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="diabetes">
                    <input type="checkbox" class="custom-control-input" value="1" name="diabetes" id="diabetes">
                    <label class="custom-control-label" for="diabetes">დიაბეტი</label>
                </div>
            </fieldset>
        </div>

        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="thyroid_disease">
                    <input type="checkbox" class="custom-control-input" value="1" name="thyroid_disease" value="1"
                        id="thyroid_disease">
                    <label class="custom-control-label" for="thyroid_disease">ფარისებრი ჯირკვლის ავადმყოფობა</label>
                </div>
            </fieldset>
        </div>

        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="endocrine_system_other">
                    <input type="checkbox" class="custom-control-input" value="1" name="endocrine_system_other"
                        id="endocrine_system_other">
                    <label class="custom-control-label" for="endocrine_system_other">სხვა</label>
                </div>
            </fieldset>
        </div>

        <div class="col-12">
            <br>
            <div class="form-group">
                <div class="controls">
                    <label for="endocrine_system_text">დამატებითი ინფორმაცია</label>
                    <textarea name="endocrine_system_text" class="form-control" placeholder="დამატებითი ინფორმაცია"
                        id="endocrine_system_text"></textarea>
                    <div class="help-block"></div>
                </div>
            </div>
        </div>

        <div class="col-12">
            <br>
            <h4 class="form-section"> ნერვული სისტემის ავადმყოფობები</h4>
        </div>

        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="epilepsy">
                    <input type="checkbox" class="custom-control-input" value="1" name="epilepsy" id="epilepsy">
                    <label class="custom-control-label" for="epilepsy">ეპილეფსია</label>
                </div>
            </fieldset>
        </div>


        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="sleep_disturbance">
                    <input type="checkbox" class="custom-control-input" value="1" name="sleep_disturbance"
                        id="sleep_disturbance">
                    <label class="custom-control-label" for="sleep_disturbance">ძილის დარღვევა</label>
                </div>
            </fieldset>
        </div>




        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="nervous_system_other">
                    <input type="checkbox" class="custom-control-input" value="1" name="nervous_system_other"
                        id="nervous_system_other">
                    <label class="custom-control-label" for="nervous_system_other">სხვა</label>
                </div>
            </fieldset>
        </div>

        <div class="col-12">
            <br>
            <div class="form-group">
                <div class="controls">
                    <label for="nervous_system_text">დამატებითი ინფორმაცია</label>
                    <textarea name="nervous_system_text" class="form-control" placeholder="დამატებითი ინფორმაცია"
                        id="nervous_system_text"></textarea>
                    <div class="help-block"></div>
                </div>
            </div>
        </div>




        <div class="col-12">
            <br>
            <h4 class="form-section"> ფსიქიკური და ქცევითი დარღვევები</h4>
        </div>
        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="mental_disorder">
                    <input type="checkbox" class="custom-control-input" value="1" name="mental_disorder"
                        id="mental_disorder">
                    <label class="custom-control-label" for="mental_disorder">ფსიქიკური აშლილობა</label>
                </div>
            </fieldset>
        </div>

        <div class="col-12">
            <br>
            <div class="form-group">
                <div class="controls">
                    <label for="mental_disorder_text">დამატებითი ინფორმაცია</label>
                    <textarea name="mental_disorder_text" class="form-control" placeholder="დამატებითი ინფორმაცია"
                        id="mental_disorder_text"></textarea>

                    <div class="help-block"></div>
                </div>
            </div>
        </div>



        <div class="col-12">
            <br>
            <h4 class="form-section"> შარდ-სასქესო სისტემის ავადმყოფობები</h4>
        </div>
        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="kidney_disease">
                    <input type="checkbox" class="custom-control-input" value="1" name="kidney_disease"
                        id="kidney_disease">
                    <label class="custom-control-label" for="kidney_disease">თირკმელების დაავადება</label>
                </div>
            </fieldset>
        </div>


        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="urolithiasis">
                    <input type="checkbox" value="1" class="custom-control-input" name="urolithiasis" id="urolithiasis">
                    <label class="custom-control-label" for="urolithiasis">უროლითიაზი</label>
                </div>
            </fieldset>
        </div>

        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="gynecological_diseases">
                    <input type="checkbox" class="custom-control-input" value="1" name="gynecological_diseases"
                        id="gynecological_diseases">
                    <label class="custom-control-label" for="gynecological_diseases">გინეკოლოგიური დაავადებები</label>
                </div>
            </fieldset>
        </div>

        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="genitourinary_system_other">
                    <input type="checkbox" class="custom-control-input" name="genitourinary_system_other" value="1"
                        id="genitourinary_system_other">
                    <label class="custom-control-label" for="genitourinary_system_other">სხვა</label>
                </div>
            </fieldset>
        </div>

        <div class="col-12">
            <br>
            <div class="form-group">
                <div class="controls">
                    <label for="genitourinary_system_text">დამატებითი ინფორმაცია</label>
                    <textarea name="genitourinary_system_text" class="form-control" placeholder="დამატებითი ინფორმაცია"
                        id="genitourinary_system_text"></textarea>

                    <div class="help-block"></div>
                </div>
            </div>
        </div>



        <div class="col-12">
            <br>
            <h4 class="form-section"> საჭმლის მომნელებელი სისტემის ავადმყოფობები</h4>
        </div>
        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="gastric_ulcer">
                    <input type="checkbox" class="custom-control-input" value="1" name="gastric_ulcer"
                        id="gastric_ulcer">
                    <label class="custom-control-label" for="gastric_ulcer">კუჭისა და 12-გ ნაწლავის წყლული</label>
                </div>
            </fieldset>
        </div>


        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="cholelithiasis">
                    <input type="checkbox" class="custom-control-input" name="cholelithiasis" value="1"
                        id="cholelithiasis">
                    <label class="custom-control-label" for="cholelithiasis">ქოლელითიაზი</label>
                </div>
            </fieldset>
        </div>


        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="digestive_system_other">
                    <input type="checkbox" class="custom-control-input" name="digestive_system_other" value="1"
                        id="digestive_system_other">
                    <label class="custom-control-label" for="digestive_system_other">სხვა</label>
                </div>
            </fieldset>
        </div>

        <div class="col-12">
            <br>
            <div class="form-group">
                <div class="controls">
                    <label for="digestive_system_text">დამატებითი ინფორმაცია</label>
                    <textarea name="digestive_system_text" class="form-control" placeholder="დამატებითი ინფორმაცია"
                        id="digestive_system_text"></textarea>

                    <div class="help-block"></div>
                </div>
            </div>
        </div>



        <div class="col-12">
            <br>
            <h4 class="form-section">ძვალ-კუნთოვანი სისტემისა და შემაერთებელი ქსოვილის ავადმყოფობები</h4>
        </div>
        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="restriction_movement">
                    <input type="checkbox" class="custom-control-input" value="1" name="restriction_movement"
                        id="restriction_movement">
                    <label class="custom-control-label" for="restriction_movement">მოძრაობის შეზღუდვა</label>
                </div>
            </fieldset>
        </div>


        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="arthropathies">
                    <input type="checkbox" class="custom-control-input" value="1" name="arthropathies"
                        id="arthropathies">
                    <label class="custom-control-label" for="arthropathies">ართროპათიები</label>
                </div>
            </fieldset>
        </div>


        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="dorsopathies">
                    <input type="checkbox" class="custom-control-input" value="1" name="dorsopathies" id="dorsopathies">
                    <label class="custom-control-label" for="dorsopathies">დორსოპათიები</label>
                </div>
            </fieldset>
        </div>

        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="muscular_diseases_other">
                    <input type="checkbox" class="custom-control-input" name="muscular_diseases_other" value="1"
                        id="muscular_diseases_other">
                    <label class="custom-control-label" for="muscular_diseases_other">სხვა</label>
                </div>
            </fieldset>
        </div>

        <div class="col-12">
            <br>
            <div class="form-group">
                <div class="controls">
                    <label for="muscular_diseases_text">დამატებითი ინფორმაცია</label>
                    <textarea name="muscular_diseases_text" class="form-control" placeholder="დამატებითი ინფორმაცია"
                        id="muscular_diseases_text"></textarea>

                    <div class="help-block"></div>
                </div>
            </div>
        </div>




        <div class="col-12">
            <br>
            <h4 class="form-section">ინფექციური და პარაზიტული ავადმყოფობები</h4>
        </div>
        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="tuberculosis">
                    <input type="checkbox" class="custom-control-input" value="1" name="tuberculosis" id="tuberculosis">
                    <label class="custom-control-label" for="tuberculosis">ტუბერკულოზი</label>
                </div>
            </fieldset>
        </div>


        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="hepatitis">
                    <input type="checkbox" class="custom-control-input" name="hepatitis" value="1" id="hepatitis">
                    <label class="custom-control-label" for="hepatitis">ჰეპატიტი</label>
                </div>
            </fieldset>
        </div>


        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="hiv_infection">
                    <input type="checkbox" class="custom-control-input" value="1" name="hiv_infection"
                        id="hiv_infection">
                    <label class="custom-control-label" for="hiv_infection">აივ ინფექცია</label>
                </div>
            </fieldset>
        </div>


        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="meningitis_Encephalitis">
                    <input type="checkbox" class="custom-control-input" value="1" name="meningitis_Encephalitis"
                        id="meningitis_Encephalitis">
                    <label class="custom-control-label" for="meningitis_Encephalitis">მენინგიტი / ენცეფალიტი</label>
                </div>
            </fieldset>
        </div>

        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="malaria">
                    <input type="checkbox" class="custom-control-input" value="1" name="malaria" id="malaria">
                    <label class="custom-control-label" for="malaria">მალარია</label>
                </div>
            </fieldset>
        </div>


        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="infectious_diseases_other">
                    <input type="checkbox" class="custom-control-input" name="infectious_diseases_other" value="1"
                        id="infectious_diseases_other">
                    <label class="custom-control-label" for="infectious_diseases_other">სხვა</label>
                </div>
            </fieldset>
        </div>

        <div class="col-12">
            <br>
            <div class="form-group">
                <div class="controls">
                    <label for="info7">დამატებითი ინფორმაცია</label>
                    <textarea name="infectious_diseases_text" class="form-control" placeholder="დამატებითი ინფორმაცია"
                        id="infectious_diseases_text"></textarea>

                    <div class="help-block"></div>
                </div>
            </div>
        </div>




        <div class="col-12">
            <br>
            <h4 class="form-section">სიმსივნე</h4>
        </div>
        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="malignant_tumor">
                    <input type="checkbox" class="custom-control-input" value="1" name="malignant_tumor"
                        id="malignant_tumor">
                    <label class="custom-control-label" for="malignant_tumor">ავთვისებიანი სიმსივნე</label>
                </div>
            </fieldset>
        </div>


        <div class="col-12">
            <br>
            <div class="form-group">
                <div class="controls">
                    <label for="malignant_tumor_text">დამატებითი ინფორმაცია</label>
                    <textarea name="malignant_tumor_text" class="form-control" placeholder="დამატებითი ინფორმაცია"
                        id="malignant_tumor_text"></textarea>

                    <div class="help-block"></div>
                </div>
            </div>
        </div>


        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="benign_tumor">
                    <input type="checkbox" class="custom-control-input" value="1" name="benign_tumor" id="benign_tumor">
                    <label class="custom-control-label" for="benign_tumor">კეთილთვისებიანი სიმსივნე</label>
                </div>
            </fieldset>
        </div>




        <div class="col-12">
            <br>
            <div class="form-group">
                <div class="controls">
                    <label for="benign_tumor_text">დამატებითი ინფორმაცია</label>
                    <textarea name="benign_tumor_text" class="form-control" placeholder="დამატებითი ინფორმაცია"
                        id="benign_tumor_text"></textarea>

                    <div class="help-block"></div>
                </div>
            </div>
        </div>



        <div class="col-12">
            <br>
            <h4 class="form-section">ქირურგიული ჩარევა</h4>
        </div>
        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="surgery">
                    <input type="checkbox" class="custom-control-input" value="1" name="surgery" id="surgery">
                    <label class="custom-control-label" for="surgery">ქირურგიული ჩარევა</label>
                </div>
            </fieldset>
        </div>


        <div class="col-12">
            <br>
            <div class="form-group">
                <div class="controls">
                    <label for="surgery_text">დამატებითი ინფორმაცია</label>
                    <textarea name="surgery_text" class="form-control" placeholder="დამატებითი ინფორმაცია"
                        id="surgery_text"></textarea>

                    <div class="help-block"></div>
                </div>
            </div>
        </div>


        <div class="col-12">
            <br>
            <h4 class="form-section">ჩატარებული ანესთეზია</h4>
        </div>
        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="anesthesia">
                    <input type="checkbox" class="custom-control-input" value="1" name="anesthesia" id="anesthesia">
                    <label class="custom-control-label" for="anesthesia">წარსულში ჩატარებული ანესთეზიები</label>
                </div>
            </fieldset>
        </div>


        <div class="col-12">
            <br>
            <div class="form-group">
                <div class="controls">
                    <label for="anesthesia_text">დამატებითი ინფორმაცია</label>
                    <textarea name="anesthesia_text" class="form-control" placeholder="დამატებითი ინფორმაცია"
                        id="anesthesia_text"></textarea>

                    <div class="help-block"></div>
                </div>
            </div>
        </div>




        <div class="col-12">
            <br>
            <h4 class="form-section">ტრავმა</h4>
        </div>
        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="head_trauma">
                    <input type="checkbox" class="custom-control-input" value="1" name="head_trauma" id="head_trauma">
                    <label class="custom-control-label" for="head_trauma">თავის ტრავმა</label>
                </div>
            </fieldset>
        </div>


        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="loss_consciousness">
                    <input type="checkbox" class="custom-control-input" value="1" name="loss_consciousness"
                        id="loss_consciousness">
                    <label class="custom-control-label" for="loss_consciousness">გონების დაკარგვა</label>
                </div>
            </fieldset>
        </div>

        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="fracture">
                    <input type="checkbox" class="custom-control-input" value="1" name="fracture" id="fracture">
                    <label class="custom-control-label" for="fracture">მოტეხილობა</label>
                </div>
            </fieldset>
        </div>


        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="self_harm">
                    <input type="checkbox" class="custom-control-input" value="1" name="self_harm" id="self_harm">
                    <label class="custom-control-label" for="self_harm">თვითდაზიანება</label>
                </div>
            </fieldset>
        </div>

        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="trauma_other">
                    <input type="checkbox" class="custom-control-input" value="1" name="trauma_other" id="trauma_other">
                    <label class="custom-control-label" for="trauma_other">სხვა</label>
                </div>
            </fieldset>
        </div>
        <div class="col-12">
            <br>
            <div class="form-group">
                <div class="controls">
                    <label for="trauma_text">დამატებითი ინფორმაცია</label>
                    <textarea name="trauma_text" class="form-control" placeholder="დამატებითი ინფორმაცია"
                        id="trauma_text"></textarea>

                    <div class="help-block"></div>
                </div>
            </div>
        </div>




        <div class="col-12">
            <br>
            <h4 class="form-section">სისხლისა და სისხლმბადი ორგანოების ავადმყოფობები</h4>
        </div>
        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="anemia">
                    <input type="checkbox" class="custom-control-input" value="1" name="anemia" id="anemia">
                    <label class="custom-control-label" for="anemia">ანემია</label>
                </div>
            </fieldset>
        </div>


        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="anemia_other">
                    <input type="checkbox" class="custom-control-input" name="anemia_other" value="1" id="anemia_other">
                    <label class="custom-control-label" for="anemia_other">სხვა</label>
                </div>
            </fieldset>
        </div>

        <div class="col-12">
            <br>
            <div class="form-group">
                <div class="controls">
                    <label for="anemia_text">დამატებითი ინფორმაცია</label>
                    <textarea name="anemia_text" class="form-control" placeholder="დამატებითი ინფორმაცია"
                        id="anemia_text"></textarea>

                    <div class="help-block"></div>
                </div>
            </div>
        </div>







        <div class="col-12">
            <br>
            <h4 class="form-section">თვალისა და მისი დანამატების ავადმყოფობები</h4>
        </div>
        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="impairment_of_vision">
                    <input type="checkbox" class="custom-control-input" value="1" name="impairment_of_vision"
                        id="impairment_of_vision">
                    <label class="custom-control-label" for="impairment_of_vision">მხედველობის დარღვევა</label>
                </div>
            </fieldset>
        </div>


        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="impairment_of_vision_other">
                    <input type="checkbox" class="custom-control-input" value="1" name="impairment_of_vision_other"
                        id="impairment_of_vision_other">
                    <label class="custom-control-label" for="impairment_of_vision_other">სხვა</label>
                </div>
            </fieldset>
        </div>

        <div class="col-12">
            <br>
            <div class="form-group">
                <div class="controls">
                    <label for="impairment_of_vision_text">დამატებითი ინფორმაცია</label>
                    <textarea name="impairment_of_vision_text" class="form-control" placeholder="დამატებითი ინფორმაცია"
                        id="impairment_of_vision_text"></textarea>

                    <div class="help-block"></div>
                </div>
            </div>
        </div>




        <div class="col-12">
            <br>
            <h4 class="form-section">ყურისა და დვრილისებრი მორჩის ავადმყოფობები</h4>
        </div>
        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="hearing_impairment">
                    <input type="checkbox" class="custom-control-input" name="hearing_impairment" value="1"
                        id="hearing_impairment">
                    <label class="custom-control-label" for="hearing_impairment">სმენის დაქვეითება</label>
                </div>
            </fieldset>
        </div>

        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="respiratory_disorders">
                    <input type="checkbox" class="custom-control-input" value="1" name="respiratory_disorders"
                        id="respiratory_disorders">
                    <label class="custom-control-label" for="respiratory_disorders">სუნთქვის დარღვევა</label>
                </div>
            </fieldset>
        </div>


        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="ear_diseases_other">
                    <input type="checkbox" class="custom-control-input" value="1" name="ear_diseases_other"
                        id="ear_diseases_other">
                    <label class="custom-control-label" for="ear_diseases_other">სხვა</label>
                </div>
            </fieldset>
        </div>

        <div class="col-12">
            <br>
            <div class="form-group">
                <div class="controls">
                    <label for="ear_diseases_text">დამატებითი ინფორმაცია</label>
                    <textarea name="ear_diseases_text" class="form-control" placeholder="დამატებითი ინფორმაცია"
                        id="ear_diseases_text"></textarea>

                    <div class="help-block"></div>
                </div>
            </div>
        </div>




        <div class="col-12">
            <br>
            <h4 class="form-section">ვენერიული დაავადება</h4>
        </div>
        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="Atashangi">
                    <input type="checkbox" class="custom-control-input" value="1" name="Atashangi" id="Atashangi">
                    <label class="custom-control-label" for="Atashangi">ათაშანგი</label>
                </div>
            </fieldset>
        </div>

        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="venereal_disease_other">
                    <input type="checkbox" class="custom-control-input" value="1" name="venereal_disease_other"
                        id="venereal_disease_other">
                    <label class="custom-control-label" for="venereal_disease_other">სხვა</label>
                </div>
            </fieldset>
        </div>

        <div class="col-12">
            <br>
            <div class="form-group">
                <div class="controls">
                    <label for="venereal_disease_text">დამატებითი ინფორმაცია</label>
                    <textarea name="venereal_disease_text" class="form-control" placeholder="დამატებითი ინფორმაცია"
                        id="venereal_disease_text"></textarea>

                    <div class="help-block"></div>
                </div>
            </div>
        </div>


        <div class="col-12">
            <br>
            <h4 class="form-section">ორსულობა / მშობიარობა</h4>
        </div>
        <div class="col-12">
            <br>
            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="pregnancy_childbirth">
                    <input type="checkbox" class="custom-control-input" value="1" name="pregnancy_childbirth"
                        id="pregnancy_childbirth">
                    <label class="custom-control-label" for="pregnancy_childbirth">ორსულობა / მშობიარობა</label>
                </div>
            </fieldset>
        </div>

        <div class="col-6">
            <br>
            <div class="form-group">
                <div class="controls">
                    <label for="multiplicity_pregnancy">ორსულობის ჯერადობა</label>
                    <input type="number" class="form-control" name="multiplicity_pregnancy"
                        placeholder="ორსულობის ჯერადობა" id="multiplicity_pregnancy" value="">
                    <div class="help-block"></div>
                </div>
            </div>
        </div>


        <div class="col-6">
            <br>
            <div class="form-group">
                <div class="controls">
                    <label for="physiological">მშობიარობის ჯერადობა / ფიზიოლოგიური</label>
                    <input type="number" class="form-control" placeholder="მშობიარობის ჯერადობა / ფიზიოლოგიური"
                        id="physiological" value="" name="physiological">
                    <div class="help-block"></div>
                </div>
            </div>
        </div>

        <div class="col-6">

            <div class="form-group">
                <div class="controls">
                    <label for="abnormal"> მშობიარობის ჯერადობა / პათოლოგიური</label>
                    <input type="number" class="form-control" placeholder="მშობიარობის ჯერადობა / პათოლოგიური"
                        id="abnormal" value="" name="abnormal">
                    <div class="help-block"></div>
                </div>
            </div>
        </div>

        <div class="col-6">

            <div class="form-group">
                <div class="controls">
                    <label for="stillbirth"> მშობიარობის ჯერადობა / მკვდრადშობადობა</label>
                    <input type="number" class="form-control" placeholder="მშობიარობის ჯერადობა / მკვდრადშობადობა"
                        id="stillbirth" value="stillbirth" name="stillbirth">
                    <div class="help-block"></div>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="form-group">
                <div class="controls">
                    <label for="arbitrary"> აბორტის ჯერადობა / თვითნებური</label>
                    <input type="number" class="form-control" placeholder="აბორტის ჯერადობა / თვითნებური" id="arbitrary"
                        value="" name="arbitrary">
                    <div class="help-block"></div>
                </div>
            </div>
        </div>

        <div class="col-6">

            <div class="form-group">
                <div class="controls">
                    <label for="artificial">აბორტის ჯერადობა / ხელოვნური</label>
                    <input type="number" class="form-control" placeholder="აბორტის ჯერადობა / ხელოვნური" id="artificial"
                        value="" name="artificial">
                    <div class="help-block"></div>
                </div>
            </div>
        </div>



        <div class="col-12">

            <div class="form-group">
                <div class="controls">
                    <label for="pregnancy_childbirth_text">დამატებითი ინფორმაცია</label>
                    <textarea name="pregnancy_childbirth_text" class="form-control" placeholder="დამატებითი ინფორმაცია"
                        id="pregnancy_childbirth_text"></textarea>

                    <div class="help-block"></div>
                </div>
            </div>
        </div>



        <div class="col-12">
            <br>
            <h4 class="form-section">გენეტიკური დაავადებები</h4>
        </div>

        <div class="col-12">

            <fieldset>
                <div class="custom-control custom-checkbox">
                    <input type="hidden" value="" name="genetic_diseases">
                    <input type="checkbox" class="custom-control-input" value="1" name="genetic_diseases"
                        id="genetic_diseases">
                    <label class="custom-control-label" for="genetic_diseases">გენეტიკური დაავადებები</label>
                </div>
            </fieldset>
        </div>



        <div class="col-12">
            <br>
            <div class="form-group">
                <div class="controls">
                    <label for="genetic_diseases_text">დამატებითი ინფორმაცია</label>
                    <textarea name="genetic_diseases_text" class="form-control" placeholder="დამატებითი ინფორმაცია"
                        id="genetic_diseases_text"></textarea>

                    <div class="help-block"></div>
                </div>
            </div>
        </div>




        <div class="col-12">
            <br>
            <h4 class="form-section">შრომის და საყოფაცხოვრებო ანამნეზი</h4>
        </div>

        <div class="col-6">
            <div class="form-group">
                <div class="controls">
                    <label for="family_history">ოჯახური ანამნეზი</label>
                    <input type="text" class="form-control" placeholder="ოჯახური ანამნეზი" id="family_history" value=""
                        name="family_history">
                    <div class="help-block"></div>
                </div>
            </div>
        </div>


        <div class="col-6">
            <div class="form-group">
                <div class="controls">
                    <label for="working_conditions">შრომის პირობები</label>
                    <input type="text" class="form-control" placeholder="შრომის პირობები" name="working_conditions"
                        id="working_conditions" value="">
                    <div class="help-block"></div>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="form-group">
                <div class="controls">
                    <label for="rest_conditions">დასვენების პირობები</label>
                    <input type="text" class="form-control" placeholder="შრომის პირობები" name="rest_conditions"
                        id="rest_conditions" value="">
                    <div class="help-block"></div>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="form-group">
                <div class="controls">
                    <label for="nutritional_conditions">კვების პირობები</label>
                    <input type="text" class="form-control" placeholder="კვების პირობები" name="nutritional_conditions"
                        id="nutritional_conditions" value="">
                    <div class="help-block"></div>
                </div>
            </div>
        </div>


        <div class="col-6">
            <div class="form-group">
                <div class="controls">
                    <label for="living_conditions">ცხოვრების პირობები</label>
                    <input type="text" class="form-control" placeholder="ცხოვრების პირობები" name="living_conditions"
                        id="living_conditions" value="">
                    <div class="help-block"></div>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="form-group">
                <div class="controls">
                    <label for="harmful_factors">მავნე ფაქტორების ზემოქმედება</label>
                    <input type="text" class="form-control" placeholder="მავნე ფაქტორების ზემოქმედება"
                        id="harmful_factors" name="harmful_factors" value="">
                    <div class="help-block"></div>
                </div>
            </div>
        </div>




        <div class="col-12">
            <div class="form-group">
                <div class="controls">
                    <label for="household_history_text">დამატებითი ინფორმაცია</label>
                    <textarea name="household_history_text" class="form-control" placeholder="დამატებითი ინფორმაცია"
                        name="household_history_text" id="household_history_text"></textarea>

                    <div class="help-block"></div>
                </div>
            </div>
        </div>


        <div class="col-12">
            <br>
            <h4 class="form-section">სხვა</h4>
        </div>




        <div class="col-12">
            <div class="form-group">
                <div class="controls">
                    <label for="abuse_anamnesis_text">დამატებითი ინფორმაცია</label>
                    <textarea name="abuse_anamnesis_text" class="form-control" placeholder="დამატებითი ინფორმაცია"
                        id="abuse_anamnesis_text" name="abuse_anamnesis_text"></textarea>

                    <div class="help-block"></div>
                </div>
            </div>
        </div>


    </div>


    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
        <button type="button" onclick="insertAbuse()" id="add-btn"
            class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1"><i class="fa fa-edit" aria-hidden="true"></i>
            შენახვა</button>
        <button type="button" class="btn btn-light" id="user-register-reject" onclick="backToAbuse(this.id)"><i
                class="fa fa-ban" aria-hidden="true"></i> გაუქმება</button>
    </div>
    </div>
    <input type="hidden" id="edit_id" name="edit_id">
</form>