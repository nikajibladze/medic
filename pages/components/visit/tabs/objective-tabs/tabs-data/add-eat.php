<br>
<!-- users edit media object start -->
<div class="media mb-2">
    <a class="mr-2" href="#">
        <img src="app-assets/images/portrait/small/avatar-s-27.png" alt="users avatar"
            class="users-avatar-shadow rounded-circle" height="64" width="64">
    </a>
    <div class="media-body">
        <h4 class="media-heading">საჭმლის მომნელებელი სისტემა - ჩანაწერის დამატება</h4>
        <div class="col-6 px-0 d-flex">
            <span class="btn btn-sm btn-primary mr-25">ისტორიის ნომერი</span>
            <span class="btn btn-sm btn-secondary"><?php echo strtotime(date("Y-m-d H:i:s"))?></span>
        </div>
    </div>
</div>
<!-- users edit media object ends -->
<!-- users edit account form start -->
<form novalidate="" method="post" action="" id="eat-form">

    <div class="col-12">
        <div class="row">

            <div class="col-12">

                <h4 class="form-section"><i class="fa fa-plus"></i> მუცელი</h4>
            </div>


            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" class="custom-control-input" value="" name="without_pathology">
                        <input type="checkbox" class="custom-control-input" value="1" name="without_pathology"
                            id="without_pathology">
                        <label class="custom-control-label" for="without_pathology">პათოლოგიის გარეშე/ნორმის
                            ფარგლებში</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" class="custom-control-input" value="" name="breathing_act">
                        <input type="checkbox" class="custom-control-input" value="1" name="breathing_act"
                            id="breathing_act">
                        <label class="custom-control-label" for="breathing_act">მუცელი მონაწილეობს სუნთქვის
                            აქტში</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" class="custom-control-input" value="" name="soft_abdomen">
                        <input type="checkbox" class="custom-control-input" value="1" name="soft_abdomen"
                            id="soft_abdomen">
                        <label class="custom-control-label" for="soft_abdomen">რბილი</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" class="custom-control-input" value="" name="abdomen_painless">
                        <input type="checkbox" class="custom-control-input" value="1" name="abdomen_painless"
                            id="abdomen_painless">
                        <label class="custom-control-label" for="abdomen_painless">უმტკივნეულო</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <label>მტკივნეული</label>
                    <select class="form-control" name="abdomen_painful" id="abdomen_painful">
                        <option></option>
                        <option value="1">მარჯვენა ფერდქვეშა მიდამო (არე)</option>
                        <option value="2">მარცხენა ფერდქვეშა მიდამო (არე)</option>
                        <option value="3">ეპიგასტრიუმის მიდამო (არე)</option>
                        <option value="4">ჰიპოგასტრიუმის მიდამო (არე)</option>
                        <option value="5">მარჯვენა ილიოცეკალური მიდამო (არე)</option>
                    </select>
                </div>
            </div>


            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" class="custom-control-input" value="" name="abdomen_deformation">
                        <input type="checkbox" class="custom-control-input" value="1" name="abdomen_deformation"
                            id="abdomen_deformation">
                        <label class="custom-control-label" for="abdomen_deformation">დეფორმაცია</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" class="custom-control-input" value="" name="abdomen_ascites">
                        <input type="checkbox" class="custom-control-input" value="1" name="abdomen_ascites"
                            id="abdomen_ascites">
                        <label class="custom-control-label" for="abdomen_ascites">ასციტი</label>
                    </div>
                </fieldset>
            </div>


            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>ღვიძლი სცილდება საზღვრებს სმ</label>
                        <input type="number" class="form-control" placeholder="ღვიძლი სცილდება საზღვრებს სმ"
                            id="abdomen_liver" value="" name="abdomen_liver">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <label>ელენთა ისინჯება</label>
                    <select class="form-control" name="abdomen_spleen" id="abdomen_spleen">
                        <option></option>
                        <option value="1">კი</option>
                        <option value="2">არა</option>

                    </select>
                </div>
            </div>

            <div class="col-12">

                <h4 class="form-section"> ენა</h4>
            </div>
            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" class="custom-control-input" value="" name="Language_dry">
                        <input type="checkbox" class="custom-control-input" value="1" name="Language_dry"
                            id="Language_dry">
                        <label class="custom-control-label" for="Language_dry">მშრალი</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" class="custom-control-input" value="" name="Language_nadebit">
                        <input type="checkbox" class="custom-control-input" value="1" name="Language_nadebit"
                            id="Language_nadebit">
                        <label class="custom-control-label" for="Language_nadebit">ნადებით</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" class="custom-control-input" value="" name="Language_unadebo">
                        <input type="checkbox" class="custom-control-input" value="1" name="Language_unadebo"
                            id="Language_unadebo">
                        <label class="custom-control-label" for="Language_unadebo">უნადებო</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" class="custom-control-input" value="" name="Language_hyperemic">
                        <input type="checkbox" class="custom-control-input" name="Language_hyperemic"
                            id="Language_hyperemic">
                        <label class="custom-control-label" for="Language_hyperemic">ჰიპერემიული</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" class="custom-control-input" value="" name="Language_wet">
                        <input type="checkbox" class="custom-control-input" name="Language_wet" id="Language_wet">
                        <label class="custom-control-label" for="Language_wet">სველი</label>
                    </div>
                </fieldset>
            </div>


            <div class="col-12">
                <br>
                <h4 class="form-section"> ფარის გაღიზიანების ნიშნები</h4>
            </div>

            <div class="col-6">

                <div class="form-group">
                    <label for="shield_irritation">ფარის გაღიზიანების ნიშნები</label>
                    <select class="form-control" name="shield_irritation" id="shield_irritation">
                        <option></option>
                        <option value="1">არა</option>
                        <option value="2">კი D</option>
                        <option value="3">კი S</option>
                        <option value="4">არა D,S</option>
                    </select>
                </div>
            </div>

            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" class="custom-control-input" value="" name="carey">
                        <input type="checkbox" class="custom-control-input" value="1" name="carey" id="carey">
                        <label class="custom-control-label" for="carey">კერი</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" class="custom-control-input" value="" name="murphy">
                        <input type="checkbox" class="custom-control-input" value="1" name="murphy" id="murphy">
                        <label class="custom-control-label" for="murphy">მერფი</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" class="custom-control-input" value="" name="ortner">
                        <input type="checkbox" class="custom-control-input" value="1" name="ortner" id="ortner">
                        <label class="custom-control-label" for="ortner">ორტნერი</label>
                    </div>
                </fieldset>
            </div>


            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" class="custom-control-input" value="" name="bloomberg">
                        <input type="checkbox" class="custom-control-input" value="1" name="bloomberg" id="bloomberg">
                        <label class="custom-control-label" for="bloomberg">ბლუმბერგი</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" class="custom-control-input" value="" name="obraztsov">
                        <input type="checkbox" class="custom-control-input" value="1" name="obraztsov" id="obraztsov">
                        <label class="custom-control-label" for="obraztsov">ობრაზცოვი</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" class="custom-control-input" value="" name="voskresensky">
                        <input type="checkbox" class="custom-control-input" value="1" name="voskresensky"
                            id="voskresensky">
                        <label class="custom-control-label" for="voskresensky">ვოსკრესენსკი</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" class="custom-control-input" value="" name="sitkovsky">
                        <input type="checkbox" class="custom-control-input" value="1" name="sitkovsky" id="sitkovsky">
                        <label class="custom-control-label" for="sitkovsky">სიტკოვსკი</label>
                    </div>
                </fieldset>
            </div>


            <div class="col-6">
                <br>
                <div class="form-group">
                    <label>გულისრევა</label>
                    <select class="form-control" name="nausea" id="nausea">
                        <option></option>
                        <option value="1">კი</option>
                        <option value="2">არა</option>

                    </select>
                </div>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <label>ღებინება</label>
                    <select class="form-control" name="vomiting" id="vomiting">
                        <option></option>
                        <option value="1">კი</option>
                        <option value="2">არა</option>

                    </select>
                </div>
            </div>

            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label for="vomiting_frequency">ღებინება (ჯერადობა)</label>
                        <input type="number" class="form-control" placeholder="ღებინება (ჯერადობა)"
                            name="vomiting_frequency" id="vomiting_frequency" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>





            <div class="col-12">

                <h4 class="form-section"> დეფეკაცია</h4>
            </div>


            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" class="custom-control-input" value="" name="defecation_regular">
                        <input type="checkbox" class="custom-control-input" value="1" name="defecation_regular"
                            id="defecation_regular">
                        <label class="custom-control-label" for="defecation_regular">რეგულარული</label>
                    </div>
                </fieldset>
            </div>


            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" class="custom-control-input" value="" name="defecation_irregular">
                        <input type="checkbox" class="custom-control-input" value="1" name="defecation_irregular"
                            id="defecation_irregular">
                        <label class="custom-control-label" for="defecation_irregular">არარეგულარული</label>
                    </div>
                </fieldset>
            </div>



            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" class="custom-control-input" value="" name="defecation_involuntary">
                        <input type="checkbox" class="custom-control-input" value="1" name="defecation_involuntary"
                            id="defecation_involuntary">
                        <label class="custom-control-label" for="defecation_involuntary">უნებლიე</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>ჯერადობა</label>
                        <input type="number" class="form-control" placeholder="ჯერადობა" id="times" value=""
                            name="defecation_multiplicity">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>სწორი ნაწლავი</label>
                        <input type="text" class="form-control" placeholder="სწორი ნაწლავი" id="rectum_text" value=""
                            name="rectum_text">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-12">

                <h4 class="form-section"> განავალი</h4>
            </div>

            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" class="custom-control-input" value="" name="feces_formed">
                        <input type="checkbox" class="custom-control-input" value="1" name="feces_formed"
                            id="feces_formed">
                        <label class="custom-control-label" for="feces_formed">ფორმირებული</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" class="custom-control-input" value="" name="feces_unformed">
                        <input type="checkbox" class="custom-control-input" value="1" name="feces_unformed"
                            id="feces_unformed">
                        <label class="custom-control-label" for="feces_unformed">არაფორმირებული</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" class="custom-control-input" value="" name="feces_mucous">
                        <input type="checkbox" class="custom-control-input" value="1" name="feces_mucous"
                            id="feces_mucous">
                        <label class="custom-control-label" for="feces_mucous">ლორწოვანი</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" class="custom-control-input" value="" name="feces_bloody">
                        <input type="checkbox" class="custom-control-input" value="1" name="feces_bloody"
                            id="feces_bloody">
                        <label class="custom-control-label" for="feces_bloody">სისხლიანი</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label for="feces_text">დამატებითი ინფორმაცია</label>
                        <textarea name="feces_text" class="form-control" placeholder="დამატებითი ინფორმაცია"
                            id="feces_text"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>




        </div>



    </div>
    <input type="hidden" value="" id="eat_id" name="edit_id">

    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
        <button type="button" onclick="insertEat(this.id)" id="insert-eat"
            class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1"><i class="fa fa-edit" aria-hidden="true"></i>
            შენახვა</button>
        <button type="button" class="btn btn-light" id="user-register-reject" onclick="getStomach(this.id)"
            data-toggle="tab" href="#stomach-tab-content" aria-controls="linkOpt1"><i class="fa fa-ban"
                aria-hidden="true"></i> გაუქმება</button>
    </div>

    </div>
</form>