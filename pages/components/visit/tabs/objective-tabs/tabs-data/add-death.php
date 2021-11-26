<br>
<!-- users edit media object start -->
<div class="media mb-2">
    <a class="mr-2" href="#">
        <img src="app-assets/images/portrait/small/avatar-s-27.png" alt="users avatar"
            class="users-avatar-shadow rounded-circle" height="64" width="64">
    </a>
    <div class="media-body">
        <h4 class="media-heading">სიკვდილი - ჩანაწერის დამატება</h4>
        <div class="col-6 px-0 d-flex">
            <span class="btn btn-sm btn-primary mr-25">ისტორიის ნომერი</span>
            <span class="btn btn-sm btn-secondary"><?php echo strtotime(date("Y-m-d H:i:s"))?></span>
        </div>
    </div>
</div>
<!-- users edit media object ends -->
<!-- users edit account form start -->
<form novalidate="" action="" method="post" id="death-form" autocomplete="off">

    <div class="col-12">
        <div class="row">

            <div class="col-12">

                <h4 class="form-section"> <i class="fa fa-plus-circle" aria-hidden="true"></i> შექმნა</h4>
            </div>





            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="breathing_stopped" value="">
                        <input type="checkbox" class="custom-control-input" value="1" name="breathing_stopped"
                            id="breathing_stopped">
                        <label class="custom-control-label" for="breathing_stopped">სუნთქვა შეწყვეტილია</label>
                    </div>
                </fieldset>
            </div>


            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="pulsation_main_arteries" value="">
                        <input type="checkbox" class="custom-control-input" value="1" name="pulsation_main_arteries"
                            id="pulsation_main_arteries">
                        <label class="custom-control-label" for="pulsation_main_arteries">პულსაცია მაგისტრალურ
                            არტერიებზე არ
                            ისინჯება</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="heart_tones_not_heard" value="">
                        <input type="checkbox" class="custom-control-input" value="1" name="heart_tones_not_heard"
                            id="heart_tones_not_heard">
                        <label class="custom-control-label" for="heart_tones_not_heard">გულის ტონები არ
                            მოისმინება</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="gugs_reaction_negative" value="">
                        <input type="checkbox" class="custom-control-input" value="1" name="gugs_reaction_negative"
                            id="gugs_reaction_negative">
                        <label class="custom-control-label" for="gugs_reaction_negative">გუგის რეაქცია სინათლეზე
                            უარყოფითი</label>
                    </div>
                </fieldset>
            </div>







            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="corneal_reaction" value="">
                        <input type="checkbox" class="custom-control-input" value="1" name="corneal_reaction"
                            id="corneal_reaction">
                        <label class="custom-control-label" for="corneal_reaction">რქოვანას რეაქციის არ
                            გამოვლენა</label>
                    </div>
                </fieldset>
            </div>


            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="corpse_spots" value="">
                        <input type="checkbox" class="custom-control-input" value="1" name="corpse_spots"
                            id="corpse_spots">
                        <label class="custom-control-label" for="corpse_spots">გვამური ლაქები</label>
                    </div>
                </fieldset>
            </div>


            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="corpse_firing" value="">
                        <input type="checkbox" class="custom-control-input" value="1" name="corpse_firing"
                            id="corpse_firing">
                        <label class="custom-control-label" for="corpse_firing">გვამური გაშეშება</label>
                    </div>
                </fieldset>
            </div>


            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="before_corpse_arrives" value="">
                        <input type="checkbox" class="custom-control-input" value="1" name="before_corpse_arrives"
                            id="before_corpse_arrives">
                        <label class="custom-control-label" for="before_corpse_arrives">გვამი მისვლამდე</label>
                    </div>
                </fieldset>
            </div>


            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label for="death_presence">სიკვდილი თანდასწრებით</label>
                        <input type="text" class="form-control datepicker" id="death_presence" name="death_presence"
                            placeholder="სიკვდილი თანდასწრებით" value="">
                        <div class="help-block"></div>
                    </div>
                </div>

            </div>

            <div class="col-12">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label for="death_text">დამატებითი ინფორმაცია</label>
                        <textarea name="death_text" class="form-control" placeholder="დამატებითი ინფორმაცია"
                            id="death_text"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>






        </div>



    </div>

    <input type="hidden" id="death_id" value="" name="edit_id">
    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
        <button type="button" onclick="InsertDeath(this.id)" id="insert-death"
            class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1"><i class="fa fa-edit" aria-hidden="true"></i>
            შენახვა</button>
        <button type="button" class="btn btn-light" id="user-register-reject" onclick="getDeath(this.id)"
            data-toggle="tab" href="#death-tab-content" aria-controls="linkOpt1"><i class="fa fa-ban"
                aria-hidden="true"></i> გაუქმება</button>
    </div>

    </div>
</form>