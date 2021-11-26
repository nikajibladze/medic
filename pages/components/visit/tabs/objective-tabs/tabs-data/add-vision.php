<br>
<!-- users edit media object start -->
<div class="media mb-2">
    <a class="mr-2" href="#">
        <img src="app-assets/images/portrait/small/avatar-s-27.png" alt="users avatar"
            class="users-avatar-shadow rounded-circle" height="64" width="64">
    </a>
    <div class="media-body">
        <h4 class="media-heading"><i class="fa fa-eye" aria-hidden="true"></i> მხედველობის ორგანო - ჩანაწერის დამატება
        </h4>
        <div class="col-6 px-0 d-flex">
            <span class="btn btn-sm btn-primary mr-25">ისტორიის ნომერი</span>
            <span class="btn btn-sm btn-secondary"><?php echo strtotime(date("Y-m-d H:i:s")) ?></span>
        </div>
    </div>
</div>
<!-- users edit media object ends -->
<!-- users edit account form start -->
<form novalidate="" method="post" action="" id="vision-form" autocomplete="off">

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
                            id="without_pathology_vision">
                        <label class="custom-control-label" for="without_pathology_vision">პათოლოგიების გარეშე/ნორმის
                            ფარგლებში</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">
                <br>
                <h4 class="form-section"><i class="fa fa-eye"></i> მხედველობის ორგანო</h4>
            </div>



            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label for="sharpness_of_sight_d">მხედველობის სიმახვილე D (VIS)</label>
                        <input type="text" class="form-control" placeholder="მხედველობის სიმახვილე D (VIS)"
                            name="sharpness_of_sight_d" id="sharpness_of_sight_d" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>მხედველობის სიმახვილე S (VIS)</label>
                        <input type="text" class="form-control" placeholder="მხედველობის სიმახვილე S (VIS)"
                            id="sharpness_of_sight_s" value="" name="sharpness_of_sight_s">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label>ოფთალმომეტრია D</label>
                        <input type="text" class="form-control" placeholder="ოფთალმომეტრია D" name="ophthalmometry_d"
                            id="ophthalmometry_d" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label>ოფთალმომეტრია S</label>
                        <input type="text" class="form-control" placeholder="ოფთალმომეტრია S" id="ophthalmometry_s"
                            name="ophthalmometry_s" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label>რეფრაქტომეტრია D</label>
                        <input type="text" class="form-control" placeholder="რეფრაქტომეტრია D" name="refractometry_d"
                            id="refractometry_d" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label>რეფრაქტომეტრია S</label>
                        <input type="text" class="form-control" placeholder="რეფრაქტომეტრია S" id="refractometry_s"
                            name="refractometry_s" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>



            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label>ტონომეტრია D</label>
                        <input type="text" class="form-control" placeholder="ტონომეტრია D" id="tonometry_d"
                            name="tonometry_d" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label>ტონომეტრია S</label>
                        <input type="text" class="form-control" placeholder="ტონომეტრია S" name="tonometry_s"
                            id="tonometry_s" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-12">

                <h4 class="form-section"> წინა საკანი</h4>
            </div>




            <div class="col-6">

                <div class="form-group">
                    <label for="within_norm">ნორმის ფარგლებში</label>
                    <select class="form-control" name="within_norm" id="within_norm">
                        <option></option>
                        <option value="1"> არა </option>
                        <option value="2"> კი D </option>
                        <option value="3"> კი S </option>
                        <option value="4"> კი DS </option>

                    </select>
                </div>
            </div>

            <div class="col-6">

                <div class="form-group">
                    <label>ღრმა</label>
                    <select class="form-control" name="deep" id="deep">
                        <option></option>
                        <option value="1"> არა </option>
                        <option value="2"> კი D </option>
                        <option value="3"> კი S </option>
                        <option value="4"> კი DS </option>

                    </select>
                </div>
            </div>

            <div class="col-6">

                <div class="form-group">
                    <label>ვიწრო</label>
                    <select class="form-control" name="narrow" id="narrow">
                        <option></option>
                        <option value="1"> არა </option>
                        <option value="2"> კი D </option>
                        <option value="3"> კი S </option>
                        <option value="4"> კი DS </option>

                    </select>
                </div>
            </div>


            <div class="col-6">

                <div class="form-group">
                    <label for="precipitate">პრეციპიტატი</label>
                    <select class="form-control" name="precipitate" id="precipitate">
                        <option></option>
                        <option value="1"> არ არის </option>
                        <option value="2"> კი დიდი D </option>
                        <option value="3"> კი დიდი S </option>
                        <option value="4"> კი დიდი DS </option>
                        <option value="5"> კი საშუალო D </option>
                        <option value="6"> კი საშუალო S </option>
                        <option value="7"> კი საშუალო DS </option>
                        <option value="8"> კი პიგმენტური D </option>
                        <option value="9"> კი პიგმენტური S </option>
                        <option value="10"> კი პიგმენტური DS </option>
                    </select>
                </div>
            </div>

            <div class="col-6">

                <div class="form-group">
                    <label>ენდოთერმული მტვერი</label>
                    <select class="form-control" name="endothermic_dust" id="endothermic_dust">
                        <option></option>
                        <option value="1"> არა </option>
                        <option value="2"> კი D </option>
                        <option value="3"> კი S </option>
                        <option value="4"> კი DS </option>

                    </select>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label>უჯრედები</label>
                    <select class="form-control" name="cells" id="cells">
                        <option></option>
                        <option value="1"> არა </option>
                        <option value="2"> კი D </option>
                        <option value="3"> კი S </option>
                        <option value="4"> კი DS </option>

                    </select>
                </div>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <label>ჰიფემა</label>
                    <select class="form-control" name="hyphema" id="hyphema">
                        <option></option>
                        <option value="1"> არა </option>
                        <option value="2"> კი D </option>
                        <option value="3"> კი S </option>
                        <option value="4"> კი DS </option>

                    </select>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label>სინექია</label>
                    <select class="form-control" name="sinecia" id="sinecia">
                        <option></option>
                        <option value="1"> არ არის </option>
                        <option value="2"> კი - წინა D </option>
                        <option value="3"> კი - წინა S </option>
                        <option value="4"> კი - წინა DS </option>
                        <option value="5">კი - უკანა D </option>
                        <option value="6"> კი - უკანა S </option>
                        <option value="7">კი - უკანა DS</option>
                        <option value="8">კი - D</option>
                        <option value="9">კი - S</option>
                        <option value="10">კი - DS</option>
                    </select>
                </div>
            </div>



            <div class="col-12">
                <br>
                <h4 class="form-section"> ფერადი გარსი</h4>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <label>სტრუქტურული</label>
                    <select class="form-control" name="structural" id="structural">
                        <option></option>
                        <option value="1"> არა </option>
                        <option value="2"> კი D </option>
                        <option value="3"> კი S </option>
                        <option value="4"> კი DS </option>

                    </select>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label>ატროფიული</label>
                    <select class="form-control" name="atrophic" id="atrophic">
                        <option></option>
                        <option value="1"> არა </option>
                        <option value="2"> კი D </option>
                        <option value="3"> კი S </option>
                        <option value="4"> კი DS </option>

                    </select>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label>ჰიპერემიული</label>
                    <select class="form-control" name="hyperemic" id="hyperemic">
                        <option></option>
                        <option value="1"> არა </option>
                        <option value="2"> კი D </option>
                        <option value="3"> კი S </option>
                        <option value="4"> კი DS </option>

                    </select>
                </div>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <label>შეშუპებული</label>
                    <select class="form-control" name="swollen" id="swollen">
                        <option></option>
                        <option value="1"> არა </option>
                        <option value="2"> კი D </option>
                        <option value="3"> კი S </option>
                        <option value="4"> კი DS </option>

                    </select>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label>უკანა სინექიები</label>
                    <select class="form-control" name="posterior_sinuses" id="posterior_sinuses">
                        <option></option>
                        <option value="1"> არა </option>
                        <option value="2"> კი D </option>
                        <option value="3"> კი S </option>
                        <option value="4"> კი DS </option>

                    </select>
                </div>
            </div>



            <div class="col-6">
                <div class="form-group">
                    <label>კოლობომა</label>
                    <select class="form-control" name="coloboma" id="coloboma">
                        <option></option>
                        <option value="1"> არა </option>
                        <option value="2"> კი D </option>
                        <option value="3"> კი S </option>
                        <option value="4"> კი DS </option>

                    </select>
                </div>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <label>რუბეოზი</label>
                    <select class="form-control" name="rubeoz" id="rubeoz">
                        <option></option>
                        <option value="1"> არა </option>
                        <option value="2"> კი D </option>
                        <option value="3"> კი S </option>
                        <option value="4"> კი DS </option>

                    </select>
                </div>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <label>ირიდოშიზისი</label>
                    <select class="form-control" id="iridosis" name="iridosis">
                        <option></option>
                        <option value="1"> არა </option>
                        <option value="2"> კი D </option>
                        <option value="3"> კი S </option>
                        <option value="4"> კი DS </option>

                    </select>
                </div>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <label>კვანძები - პიგმენტური</label>
                    <select class="form-control" name="nodes_pigmented" id="nodes_pigmented">
                        <option></option>
                        <option value="1"> არა </option>
                        <option value="2"> კი D </option>
                        <option value="3"> კი S </option>
                        <option value="4"> კი DS </option>

                    </select>
                </div>
            </div>



            <div class="col-6">
                <div class="form-group">
                    <label>კვანძები - koeppe</label>
                    <select class="form-control" id="nodes_koeppe" name="nodes_koeppe">
                        <option></option>
                        <option value="1"> არა </option>
                        <option value="2"> კი D </option>
                        <option value="3"> კი S </option>
                        <option value="4"> კი DS </option>

                    </select>
                </div>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <label>კვანძები - busacca</label>
                    <select class="form-control" name="nodes_busacca" id="nodes_busacca">
                        <option></option>
                        <option value="1"> არა </option>
                        <option value="2"> კი D </option>
                        <option value="3"> კი S </option>
                        <option value="4"> კი DS </option>

                    </select>
                </div>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <label>ანირიდია</label>
                    <select class="form-control" name="aniridia" id="aniridia">
                        <option></option>
                        <option value="1"> არა </option>
                        <option value="2"> სრული D </option>
                        <option value="3"> სრული S </option>
                        <option value="4"> სრული DS </option>
                        <option value="5"> არასრული D </option>
                        <option value="6"> არასრული S </option>
                        <option value="7"> არასრული DS </option>
                    </select>
                </div>
            </div>

            <div class="col-12">
                <br>
                <h4 class="form-section"> გუგა</h4>
            </div>


            <div class="col-6">
                <br>
                <div class="form-group">
                    <label>მრგვალი</label>
                    <select class="form-control" name="round" id="round">
                        <option></option>
                        <option value="1">არა</option>
                        <option value="2">კი D</option>
                        <option value="3">კი S </option>
                        <option value="4">კი DS </option>

                    </select>
                </div>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <label for="correct">სწორი</label>
                    <select class="form-control" name="correct" id="correct">
                        <option></option>
                        <option value="1">არა</option>
                        <option value="2">კი D</option>
                        <option value="3">კი S </option>
                        <option value="4">კი DS </option>

                    </select>
                </div>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <label>არასწორი</label>
                    <select class="form-control" name="wrong" id="wrong">
                        <option></option>
                        <option value="1">არა</option>
                        <option value="2">კი D</option>
                        <option value="3">კი S </option>
                        <option value="4">კი DS </option>

                    </select>
                </div>
            </div>


            <div class="col-6">
                <br>
                <div class="form-group">
                    <label>ანიზოქორია</label>
                    <select class="form-control" name="anisocoria" id="anisocoria">
                        <option></option>
                        <option value="1">არა</option>
                        <option value="2">კი D</option>
                        <option value="3">კი S </option>
                        <option value="4">კი DS </option>

                    </select>
                </div>
            </div>




            <div class="col-6">
                <br>
                <div class="form-group">
                    <label>კორექტოპია</label>
                    <select class="form-control" name="correctopia" id="correctopia">
                        <option></option>
                        <option value="1">არა</option>
                        <option value="2">კი D</option>
                        <option value="3">კი S </option>
                        <option value="4">კი DS </option>

                    </select>
                </div>
            </div>


            <div class="col-6">
                <br>
                <div class="form-group">
                    <label>ფსევდოკორია</label>
                    <select class="form-control" name="pseudocoria" id="pseudocoria">
                        <option></option>
                        <option value="1">არა</option>
                        <option value="2">კი D</option>
                        <option value="3">კი S </option>
                        <option value="4">კი DS </option>

                    </select>
                </div>
            </div>



            <div class="col-6">
                <br>
                <div class="form-group">
                    <label>მიდრიაზი</label>
                    <select class="form-control" name="mydriasis" id="mydriasis">
                        <option></option>
                        <option value="1">არ არის</option>
                        <option value="2">სპაზმური D</option>
                        <option value="3">სპაზმური S </option>
                        <option value="4">პარალიზური D </option>
                        <option value="5">პარალიზური S </option>
                        <option value="6">პარალიზური DS</option>

                    </select>
                </div>
            </div>



            <div class="col-6">
                <br>
                <div class="form-group">
                    <label>მიოზი</label>
                    <select class="form-control" name="miosis" id="miosis">
                        <option></option>
                        <option value="1">არ არის</option>
                        <option value="2">სპაზმური D</option>
                        <option value="3">სპაზმური S </option>
                        <option value="4">პარალიზური D </option>
                        <option value="5">პარალიზური S </option>
                        <option value="6">პარალიზური DS</option>

                    </select>
                </div>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <label>რეაქცია სინათლეზე შენახულია</label>
                    <select class="form-control" name="light_reaction_stored" id="light_reaction_stored">
                        <option></option>
                        <option value="1">კი D</option>
                        <option value="2">კი S </option>
                        <option value="3">კი DS </option>

                    </select>
                </div>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <label>რეაქცია სინათლეზე დუნეა</label>
                    <select class="form-control" name="light_reaction_dunea" id="light_reaction_dunea">
                        <option></option>
                        <option value="1">კი D</option>
                        <option value="2">კი S </option>
                        <option value="3">კი DS </option>

                    </select>
                </div>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <label>რეაქცია სინათლეზე არ არის</label>
                    <select class="form-control" name="light_reaction_is_not" id="light_reaction_is_not">
                        <option></option>
                        <option value="1">კი D</option>
                        <option value="2">კი S </option>
                        <option value="3">კი DS </option>

                    </select>
                </div>
            </div>


            <div class="col-12">
                <br>
                <h4 class="form-section"> ბროლი</h4>
            </div>
            <div class="col-12">
                <button type="button" id="crystal-add-id" onclick="crystalModalAdd(this.id)" data-toggle="modal"
                    data-target="#primary" class="btn btn-primary btn-min-width mr-1 mb-1"><i class="fa fa-plus"></i>
                    ჩანაწერის დამატება</button>
                <table class="table table-striped table-bordered" id="crystal-table">
                    <thead>
                        <tr>
                            <th>ბროლი</th>
                            <th>მდგომარეობა</th>
                            <th>კომენტარი</th>
                            <th>ლოკაცია</th>

                        </tr>
                    </thead>
                    <tbody>



                    </tbody>
                </table>

            </div>



            <div class="col-12">
                <br>
                <h4 class="form-section"> სკლერა</h4>
            </div>
            <div class="col-12">
                <button type="button" id="sclera-add-id" onclick="scleraModalAdd(this.id)" data-toggle="modal"
                    data-target="#sclera-modal" class="btn btn-primary btn-min-width mr-1 mb-1"><i
                        class="fa fa-plus"></i> ჩანაწერის დამატება</button>
                <table class="table table-striped table-bordered" id="sclera-table">
                    <thead>
                        <tr>
                            <th>სკლერა</th>
                            <th>მდგომარეობა</th>
                            <th>კომენტარი</th>
                            <th>ლოკაცია</th>

                        </tr>
                    </thead>
                    <tbody>



                    </tbody>
                </table>

            </div>


            <div class="col-12">
                <br>
                <h4 class="form-section"> მინისებრი სხული</h4>
            </div>
            <div class="col-12">
                <button type="button" id="mbody-add-id" onclick="mbodyModalAdd(this.id)" data-toggle="modal"
                    data-target="#mbody-modal" class="btn btn-primary btn-min-width mr-1 mb-1"><i
                        class="fa fa-plus"></i> ჩანაწერის დამატება</button>
                <table class="table table-striped table-bordered" id="body-table">
                    <thead>
                        <tr>
                            <th>მინისებრი სხეული</th>
                            <th>კომენტარი</th>
                            <th>ლოკაცია</th>

                        </tr>
                    </thead>
                    <tbody>



                    </tbody>
                </table>

            </div>


            <div class="col-12">
                <br>
                <h4 class="form-section">ბადურა</h4>
            </div>
            <div class="col-12">
                <button type="button" id="badura-add-id" onclick="baduraModalAdd(this.id)" data-toggle="modal"
                    data-target="#badura-modal" class="btn btn-primary btn-min-width mr-1 mb-1"><i
                        class="fa fa-plus"></i> ჩანაწერის დამატება</button>
                <table class="table table-striped table-bordered" id="badura-table">
                    <thead>
                        <tr>
                            <th>ბადურა</th>
                            <th>მდგომარეობა</th>
                            <th>კომენტარი</th>
                            <th>ლოკაცია</th>

                        </tr>
                    </thead>
                    <tbody>



                    </tbody>
                </table>

            </div>




        </div>

    </div>

    <input type="hidden" value="" id="vision_id" name="edit_id">
    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
        <button type="button" onclick="InsertVision(this.id)" id="insert-vision"
            class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1"><i class="fa fa-edit" aria-hidden="true"></i>
            შენახვა</button>
        <button type="button" class="btn btn-light" id="user-register-reject" onclick="getHead(this.id)"
            data-toggle="tab" href="#head-tab-content" aria-controls="linkOpt1"><i class="fa fa-ban"
                aria-hidden="true"></i> გაუქმება</button>
    </div>

    </div>
</form>

<div class="modal fade text-left " id="primary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary white">
                <h4 class="modal-title" id="myModalLabel8">ბროლი - ჩანაწერის დამატება</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body" id="crystal-add-modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" onclick="InsertCrystal(this.id)" id="insert-crystal"
                    class="btn btn-outline-primary"><i class="fa fa-edit" aria-hidden="true"></i>
                    შენახვა</button>
                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal"><i class="fa fa-ban"
                        aria-hidden="true"></i> გაუქმება</button>

            </div>
        </div>
    </div>
</div>

<div class="modal fade text-left " id="sclera-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8"
    aria-hidden="true">
    <div class="modal-dialog  modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary white">
                <h4 class="modal-title" id="myModalLabel8">სკლერა - ჩანაწერის დამატება</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body" id="sclera-add-modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" onclick="InsertSclera(this.id)" id="insert-sclera"
                    class="btn btn-outline-primary"><i class="fa fa-edit" aria-hidden="true"></i>
                    შენახვა</button>
                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal"><i class="fa fa-ban"
                        aria-hidden="true"></i> გაუქმება</button>

            </div>
        </div>
    </div>
</div>

<div class="modal fade text-left " id="mbody-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary white">
                <h4 class="modal-title" id="myModalLabel8">მინისებრი სხეული - ჩანაწერის დამატება</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body" id="mbody-add-modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" onclick="InsertBody(this.id)" id="insert-body" class="btn btn-outline-primary"><i
                        class="fa fa-edit" aria-hidden="true"></i>
                    შენახვა</button>
                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal"><i class="fa fa-ban"
                        aria-hidden="true"></i> გაუქმება</button>

            </div>
        </div>
    </div>
</div>


<div class="modal fade text-left " id="badura-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8"
    aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary white">
                <h4 class="modal-title" id="myModalLabel8">ბადურა - ჩანაწერის დამატება</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body" id="badura-add-modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" onclick="InsertBadura(this.id)" id="insert-badura"
                    class="btn btn-outline-primary"><i class="fa fa-edit" aria-hidden="true"></i>
                    შენახვა</button>
                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal"><i class="fa fa-ban"
                        aria-hidden="true"></i> გაუქმება</button>

            </div>
        </div>
    </div>
</div>