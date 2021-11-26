<br>
<!-- users edit media object start -->
<div class="media mb-2">
    <a class="mr-2" href="#">
        <img src="app-assets/images/portrait/small/avatar-s-27.png" alt="users avatar"
            class="users-avatar-shadow rounded-circle" height="64" width="64">
    </a>
    <div class="media-body">
        <h4 class="media-heading">სამედიცინო ბარათი - ჩანაწერის დამატება</h4>
        <div class="col-6 px-0 d-flex">
            <span class="btn btn-sm btn-primary mr-25">ისტორიის ნომერი</span>
            <span class="btn btn-sm btn-secondary"><?php echo strtotime(date("Y-m-d H:i:s")) ?></span>
        </div>
    </div>
</div>
<!-- users edit media object ends -->
<!-- users edit account form start -->
<form novalidate="" id="medication-card-form" method="post" action="" autocomplete="off">

    <div class="col-12">
        <div class="row">

            <div class="col-12">

                <h4 class="form-section"> <i class="fa fa-plus-circle" aria-hidden="true"></i> შექმნა</h4>
            </div>


            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label for="personality_data">პიროვნების მონაცემები</label>
                        <textarea name="personality_data" class="form-control" placeholder="პიროვნების მონაცემები"
                            id="personality_data"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>



            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label for="urogenital_system"> შარდ-სასქესო სისტემა</label>
                        <textarea name="urogenital_system" class="form-control" placeholder=" შარდ-სასქესო სისტემა"
                            id="urogenital_system"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label for="cardiovascular_system">გულ-სისხლძარღვთა სისტემა</label>
                        <textarea name="cardiovascular_system" class="form-control" placeholder="გულ-სისხლძარღვთა სისტემა"
                            id="cardiovascular_system"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>



            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label for="endocrine_system">ენდოკრინული სისტემა</label>
                        <textarea name="endocrine_system" class="form-control" placeholder="ენდოკრინული სისტემა" id="endocrine_system"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label for="breathing_system">სასუნთქი სისტემა</label>
                        <textarea name="breathing_system" class="form-control" placeholder="სასუნთქი სისტემა" id="breathing_system"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>



            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label for="digestive_system">საჭმლის მომნელებელი სისტემა</label>
                        <textarea name="digestive_system" class="form-control" placeholder="საჭმლის მომნელებელი სისტემა"
                            id="digestive_system"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>



            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label for="nervous_system">ნერვული სისტემა</label>
                        <textarea name="nervous_system" class="form-control" placeholder="ნერვული სისტემა" id="nervous_system"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>



            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label for="musculoskeletal_system">ძვალ-სახსროვანი სისტემა</label>
                        <textarea name="musculoskeletal_system" class="form-control" placeholder="ძვალ-სახსროვანი სისტემა"
                            id="musculoskeletal_system"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>



            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label for="memory">მეხსიერება</label>
                        <textarea name="memory" class="form-control" placeholder="მეხსიერება" id="memory"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>



            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label for="emotional_realm">ემოციური სფერო</label>
                        <textarea name="emotional_realm" class="form-control" placeholder="ემოციური სფერო" id="emotional_realm"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label for="speech">მეტყველება</label>
                        <textarea name="speech" class="form-control" placeholder="მეტყველება" id="speech"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>



            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label for="awareness">ცნობიერება</label>
                        <textarea name="awareness" class="form-control" placeholder="ცნობიერება" id="awareness"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>



            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label for="occupational_therapy">ოკუპაციური თერაპია</label>
                        <textarea name="occupational_therapy" class="form-control" placeholder="ოკუპაციური თერაპია" id="occupational_therapy"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>



            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label for="physical_therapy">ფიზიკური თერაპია</label>
                        <textarea name="physical_therapy" class="form-control" placeholder="ფიზიკური თერაპია" id="physical_therapy"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label for="prosthetics_orthopedics">პროტეზისტის-ორთოპედია</label>
                        <textarea name="prosthetics_orthopedics" class="form-control" placeholder="პროტეზისტის-ორთოპედია"
                            id="prosthetics_orthopedics"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>



            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label for="orthopedic_assistant">ორთოპედის ასისტენტი</label>
                        <textarea name="orthopedic_assistant" class="form-control" placeholder="ორთოპედის ასისტენტი" id="orthopedic_assistant"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label for="evaluation_result">შეფასების შედეგი</label>
                        <textarea name="evaluation_result" class="form-control" placeholder="შეფასების შედეგი" id="evaluation_result"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label for="consultations">კონსულტაციები</label>
                        <textarea name="consultations" class="form-control" placeholder="კონსულტაციები" id="consultations"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label for="preliminary_diagnosis">წინასწარი დიაგნოზი</label>
                        <textarea name="preliminary_diagnosis" class="form-control" placeholder="წინასწარი დიაგნოზი" id="preliminary_diagnosis"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>



            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label for="required_examinations">საჭირო გამოკვლევები</label>
                        <textarea name="required_examinations" class="form-control" placeholder="საჭირო გამოკვლევები" id="required_examinations"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label for="final_diagnosis">საბოლოო დიაგნოზი</label>
                        <textarea name="final_diagnosis" class="form-control" placeholder="საბოლოო დიაგნოზი" id="final_diagnosis"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>



            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label for="rehabilitation_plan">რეაბილიტაციის გეგმა</label>
                        <textarea name="rehabilitation_plan" class="form-control" placeholder="რეაბილიტაციის გეგმა" id="rehabilitation_plan"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>



            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label for="necessary_aids">საჭირო დამხმარე საშუალებები</label>
                        <textarea name="necessary_aids" class="form-control" placeholder="საჭირო დამხმარე საშუალებები"
                            id="necessary_aids"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

        </div>



    </div>

    <input type="hidden" name="medication_card_id" id="medication_card_id">
    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
        <button type="button" onclick="insertMedicationCard(this.id)" id="insert-medication-card" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1"><i class="fa fa-edit"
                aria-hidden="true"></i> შენახვა</button>
        <button type="button" class="btn btn-light" id="user-register-reject" onclick="getReabilitation(this.id)"
            data-toggle="tab" href="#reabilitation-tab-content" aria-controls="linkOpt1"><i class="fa fa-ban"
                aria-hidden="true"></i> გაუქმება</button>
    </div>

    </div>
</form>