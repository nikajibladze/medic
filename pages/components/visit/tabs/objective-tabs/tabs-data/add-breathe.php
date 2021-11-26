<br>
<!-- users edit media object start -->
<div class="media mb-2">
    <a class="mr-2" href="#">
        <img src="app-assets/images/portrait/small/avatar-s-27.png" alt="users avatar"
            class="users-avatar-shadow rounded-circle" height="64" width="64">
    </a>
    <div class="media-body">
        <h4 class="media-heading">სასუნთქი სისტემა - ჩანაწერის დამატება</h4>
        <div class="col-6 px-0 d-flex">
            <span class="btn btn-sm btn-primary mr-25">ისტორიის ნომერი</span>
            <span class="btn btn-sm btn-secondary"><?php echo strtotime(date("Y-m-d H:i:s"))?></span>
        </div>
    </div>
</div>
<!-- users edit media object ends -->
<!-- users edit account form start -->
<form novalidate="" method="post" action="" id="breathe-form" autocomplete="off">

    <div class="col-12">
        <div class="row">

            <div class="col-12">

                <h4 class="form-section"> <i class="fa fa-plus-circle" aria-hidden="true"></i> შექმნა</h4>
            </div>



            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" class="custom-control-input" value="" name="pneumothorax" id="">
                        <input type="checkbox" class="custom-control-input" value="1" name="pneumothorax"
                            id="pneumothorax">
                        <label class="custom-control-label" for="pneumothorax">პნევმოთორაქსი</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" class="custom-control-input" value="" name="floating_chest" id="">
                        <input type="checkbox" class="custom-control-input" value="1" name="floating_chest"
                            id="floating_chest">
                        <label class="custom-control-label" for="floating_chest">მცურავი გულმკერდი</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <label>გამავლობა</label>
                    <select class="form-control" name="passage" id="passage">
                        <option></option>
                        <option value="1">ნორმის ფარგლებში</option>
                        <option value="2">დარღვეული</option>

                    </select>
                </div>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <label>ასპირაცია</label>
                    <select class="form-control" name="aspiration" id="aspiration">
                        <option></option>
                        <option value="1">კი</option>
                        <option value="2">არა</option>

                    </select>
                </div>
            </div>


            <div class="col-6">

                <div class="form-group">
                    <label>უცხო სხეული</label>
                    <select class="form-control" name="foreign_body" id="foreign_body">
                        <option></option>
                        <option value="1">კი D</option>
                        <option value="2">კი S</option>
                        <option value="3">კი DS</option>
                        <option value="4">არა</option>
                    </select>
                </div>
            </div>


            <div class="col-6">

                <div class="form-group">
                    <label>სუნთქვის დარღვევა</label>
                    <select class="form-control" name="respiratory_disorders" id="respiratory_disorders">
                        <option></option>
                        <option value="1">სპონტანური</option>
                        <option value="2">ტაქიპნოე</option>
                        <option value="3">გაგრძელებული</option>
                        <option value="4">აგონალური</option>
                        <option value="5">არ არის</option>
                    </select>
                </div>
            </div>

            <div class="col-6">

                <div class="form-group">
                    <label>გულმკერდის ექსკურსია</label>
                    <select class="form-control" name="chest_excursion" id="chest_excursion">
                        <option></option>
                        <option value="1">სიმეტრიული</option>
                        <option value="2">ასიმეტრიული D</option>
                        <option value="3">ასიმეტრიული S</option>
                        <option value="4">ასიმეტრიული D,S</option>

                    </select>
                </div>
            </div>


            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label>სპირომეტრია</label>
                        <input type="number" class="form-control" placeholder="ორსულობის ჯერადობა" name="spirometry"
                            id="spirometry" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">

                <div class="form-group">
                    <label>ხველა</label>
                    <select class="form-control" name="cough" id="cough">
                        <option></option>
                        <option value="1">კი</option>
                        <option value="2">არა</option>

                    </select>
                </div>
            </div>

            <div class="col-12">

                <h4 class="form-section"> ხმიანობა</h4>
            </div>


            <div class="col-6">

                <div class="form-group">
                    <label>ვეზიკულური</label>
                    <select class="form-control" name="vesicular" id="vesicular">
                        <option></option>
                        <option value="1">D</option>
                        <option value="2">S</option>
                        <option value="3">D,S</option>

                    </select>
                </div>
            </div>

            <div class="col-6">

                <div class="form-group">
                    <label>ბრონქული</label>
                    <select class="form-control" name="bronchial" id="bronchial">
                        <option></option>
                        <option value="1">D</option>
                        <option value="2">S</option>
                        <option value="3">D,S</option>

                    </select>
                </div>
            </div>

            <div class="col-6">

                <div class="form-group">
                    <label>შესუსტებული</label>
                    <select class="form-control" name="weakened" id="weakened">
                        <option></option>
                        <option value="1">D</option>
                        <option value="2">S</option>
                        <option value="3">D,S</option>

                    </select>
                </div>
            </div>

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" class="custom-control-input" value="" name="pueruli" id="">
                        <input type="checkbox" class="custom-control-input" value="1" name="pueruli" id="pueruli">
                        <label class="custom-control-label" for="pueruli">პუეურული</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">
                <br>
                <h4 class="form-section">დამატებითი ხმიანობა (ხიხინი)</h4>
            </div>


            <div class="col-6">

                <div class="form-group">
                    <label>მშრალი</label>
                    <select class="form-control" name="dry" id="dry">
                        <option></option>
                        <option value="1">D</option>
                        <option value="2">S</option>
                        <option value="3">D,S</option>

                    </select>
                </div>
            </div>


            <div class="col-6">

                <div class="form-group">
                    <label>სველი</label>
                    <select class="form-control" name="wet" id="wet">
                        <option></option>
                        <option value="1">D</option>
                        <option value="2">S</option>
                        <option value="3">D,S</option>

                    </select>
                </div>
            </div>


            <div class="col-6">

                <div class="form-group">
                    <label>წვრილ ბუშტოვანი</label>
                    <select class="form-control" name="thin_vesicular" id="thin_vesicular">
                        <option></option>
                        <option value="1">D</option>
                        <option value="2">S</option>
                        <option value="3">D,S</option>

                    </select>
                </div>
            </div>

            <div class="col-6">

                <div class="form-group">
                    <label>მსხვილ ბუშტოვანი</label>
                    <select class="form-control" name="large_vesicular" id="large_vesicular">
                        <option></option>
                        <option value="1">D</option>
                        <option value="2">S</option>
                        <option value="3">D,S</option>

                    </select>
                </div>
            </div>

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" class="custom-control-input" value="" name="crepitation" id="">
                        <input type="checkbox" class="custom-control-input" value="1" name="crepitation"
                            id="crepitation">
                        <label class="custom-control-label" for="crepitation">კრეპიტაცია</label>
                    </div>
                </fieldset>
            </div>




            <div class="col-12">
                <br>
                <h4 class="form-section">ქოშინი</h4>
            </div>


            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" class="custom-control-input" value="" name="inspirational" id="">
                        <input type="checkbox" class="custom-control-input" value="1" name="inspirational"
                            id="inspirational">
                        <label class="custom-control-label" for="inspirational">ინსპირაციული</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" class="custom-control-input" value="" name="expiratory" id="">
                        <input type="checkbox" class="custom-control-input" value="1" name="expiratory" id="expiratory">
                        <label class="custom-control-label" for="expiratory">ექსპირაციული</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" class="custom-control-input" value="" name="whistling" id="">
                        <input type="checkbox" class="custom-control-input" value="1" name="whistling" id="whistling">
                        <label class="custom-control-label" for="whistling">მსტვინავი</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" class="custom-control-input" value="" name="breath_crepitation" id="">
                        <input type="checkbox" class="custom-control-input" value="1" name="breath_crepitation"
                            id="breath_crepitation">
                        <label class="custom-control-label" for="breath_crepitation">კრეპიტაცია</label>
                    </div>
                </fieldset>
            </div>


            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" class="custom-control-input" value="" name="stridor" id="">
                        <input type="checkbox" class="custom-control-input" value="1" name="stridor" id="stridor">
                        <label class="custom-control-label" for="stridor">სტრიდორი</label>
                    </div>
                </fieldset>
            </div>



            <div class="col-12">
                <br>
                <h4 class="form-section">სასის რკალები</h4>
            </div>


            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" class="custom-control-input" value="" name="nadebi" id="">
                        <input type="checkbox" class="custom-control-input" value="1" name="nadebi" id="nadebi">
                        <label class="custom-control-label" for="nadebi">ნადებით</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" class="custom-control-input" value="" name="unadebo" id="">
                        <input type="checkbox" class="custom-control-input" value="1" name="unadebo" id="unadebo">
                        <label class="custom-control-label" for="unadebo">უნადებო</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" class="custom-control-input" value="" name="hyperemic" id="">
                        <input type="checkbox" class="custom-control-input" value="1" name="hyperemic" id="hyperemic">
                        <label class="custom-control-label" for="hyperemic">ჰიპერემიული</label>
                    </div>
                </fieldset>
            </div>


            <div class="col-12">
                <br>
                <h4 class="form-section">ტონზილები</h4>
            </div>


            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" class="custom-control-input" value="" name="tonsils_hyperemic" id="">
                        <input type="checkbox" class="custom-control-input" value="1" name="tonsils_hyperemic"
                            id="tonsils_hyperemic">
                        <label class="custom-control-label" for="tonsils_hyperemic">ჰიპერემიული</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" class="custom-control-input" value="" name="tonsils_hyperplastic" id="">
                        <input type="checkbox" class="custom-control-input" value="1" name="tonsils_hyperplastic"
                            id="tonsils_hyperplastic">
                        <label class="custom-control-label" for="tonsils_hyperplastic">ჰიპერპლაზიური</label>
                    </div>
                </fieldset>
            </div>


            <div class="col-12">
                <br>
                <h4 class="form-section">ნახველი</h4>
            </div>


            <div class="col-6">

                <div class="form-group">
                    <label for="sputum">ნახველი</label>
                    <select class="form-control" name="sputum" id="sputum">
                        <option></option>
                        <option value="1">კი</option>
                        <option value="2">არა</option>

                    </select>
                </div>
            </div>


            <div class="col-6">

                <div class="form-group">
                    <label for="sputum_color">ფერი</label>
                    <select class="form-control" name="sputum_color" id="sputum_color">
                        <option></option>
                        <option value="1">მუქი</option>
                        <option value="2">ღია ფერი</option>

                    </select>
                </div>
            </div>


            <div class="col-6">

                <div class="form-group">
                    <label for="sputum_consistency">კონსისტენცია</label>
                    <select class="form-control" name="sputum_consistency" id="sputum_consistency">
                        <option></option>
                        <option value="1">თხელი</option>
                        <option value="2">სქელი</option>

                    </select>
                </div>
            </div>


            <div class="col-6">

                <div class="form-group">
                    <label for="sputum_composition">შემადგენლობა</label>
                    <select class="form-control" name="sputum_composition" id="sputum_composition">
                        <option></option>
                        <option value="1">ლორწოვანი</option>
                        <option value="2">სისხლიანი</option>

                    </select>
                </div>
            </div>

            <div class="col-12">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label for="sputum_text">დამატებითი ინფორმაცია</label>
                        <textarea name="sputum_text" class="form-control" placeholder="დამატებითი ინფორმაცია"
                            id="sputum_text"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

        </div>



    </div>

    <input type="hidden" id="breathe_id" value="" name="edit_id">
    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
        <button type="button" onclick="InsertBreathe(this.id)" id="insert-breathe"
            class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1"><i class="fa fa-edit" aria-hidden="true"></i>
            შენახვა</button>
        <button type="button" class="btn btn-light" id="user-register-reject" data-toggle="tab"
            href="#hearth-tab-content" onclick="getHearth(this.id)"><i class="fa fa-ban" aria-hidden="true"></i>
            გაუქმება</button>
    </div>

    </div>
</form>