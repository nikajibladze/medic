<br>
<!-- users edit media object start -->
<div class="media mb-2">
    <a class="mr-2" href="#">
        <img src="app-assets/images/portrait/small/avatar-s-27.png" alt="users avatar"
            class="users-avatar-shadow rounded-circle" height="64" width="64">
    </a>
    <div class="media-body">
        <h4 class="media-heading">შარდ-სასქესო სისტემა - ჩანაწერის დამატება</h4>
        <div class="col-6 px-0 d-flex">
            <span class="btn btn-sm btn-primary mr-25">ისტორიის ნომერი</span>
            <span class="btn btn-sm btn-secondary"><?php echo strtotime(date("Y-m-d H:i:s"))?></span>
        </div>
    </div>
</div>
<!-- users edit media object ends -->
<!-- users edit account form start -->
<form novalidate="" method="post" action="" id="pis-form">

    <div class="col-12">
        <div class="row">

            <div class="col-12">

                <h4 class="form-section"><i class="fa fa-plus"></i> შექმნა</h4>
            </div>


            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" class="custom-control-input" name="without_pathology" id="">
                        <input type="checkbox" class="custom-control-input" value="1" name="without_pathology"
                            id="patology-no">
                        <label class="custom-control-label" for="patology-no">პათოლოგიების გარეშე/ნორმის
                            ფარგლებში</label>
                    </div>
                </fieldset>
            </div>



            <div class="col-6">
                <br>
                <div class="form-group">
                    <label for="urination">შარდვა</label>
                    <select class="form-control" name="urination" id="urination">
                        <option></option>
                        <option value="1">თავისუფალი</option>
                        <option value="2">გაძნელებული</option>
                        <option value="3">მტკივნეული</option>
                        <option value="4">უნებლიე</option>
                        <option value="5">ჰემატურია</option>
                        <option value="6">ანურია</option>
                    </select>
                </div>
            </div>

            <div class="col-6">
                <br>
                <div class="form-group">
                    <label for="kidney">თირკმელი</label>
                    <select class="form-control" name="kidney" id="kidney">
                        <option></option>
                        <option value="1">ისინჯება D</option>
                        <option value="2">ისინჯება S</option>
                        <option value="3">ისინჯება DS</option>
                        <option value="4">არ ისინჯება D</option>
                        <option value="5">არ ისინჯება S</option>
                        <option value="6">არ ისინჯება DS</option>
                    </select>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label for="shock_syndrome">დარტყმის სინდრომი</label>
                    <select class="form-control" name="shock_syndrome" id="shock_syndrome">
                        <option></option>
                        <option value="1">დადებითი D</option>
                        <option value="2">დადებითი S</option>
                        <option value="3">დადებითი DS</option>
                        <option value="4">უარყოფითი D</option>
                        <option value="5">უარყოფითი S</option>
                        <option value="6">უარყოფითი DS</option>
                    </select>
                </div>
            </div>

            <div class="col-6">

                <div class="form-group">
                    <label for="pregnancy">ორსულობა</label>
                    <select class="form-control" name="pregnancy" id="pregnancy">
                        <option></option>
                        <option value="1">არა</option>
                        <option value="2">კი</option>

                    </select>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label for="discharge_from_genitals">გამონადენი სასქესო ორგანოდან</label>
                    <select class="form-control" name="discharge_from_genitals" id="discharge_from_genitals">
                        <option></option>
                        <option value="1">ლორწოვანი</option>
                        <option value="2">სისხლიანი</option>
                        <option value="3">ჩირქოვანი</option>
                        <option value="4">სეროზული</option>
                        <option value="5">არ არის</option>
                        <option value="6">უარყოფითი</option>
                    </select>
                </div>
            </div>



            <div class="col-12">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label for="genital_system_text">დამატებითი ინფორმაცია</label>
                        <textarea name="genital_system_text" class="form-control" placeholder="დამატებითი ინფორმაცია"
                            id="genital_system_text"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>




        </div>



    </div>

    <input type="hidden" name="edit_id" id="pis_id">
    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
        <button type="button" onclick="InsertPis(this.id)" id="insert-pis"
            class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1"><i class="fa fa-edit" aria-hidden="true"></i>
            შენახვა</button>
        <button type="button" class="btn btn-light" id="user-register-reject" onclick="getStomach(this.id)"
            data-toggle="tab" href="#stomach-tab-content" aria-controls="linkOpt1"><i class="fa fa-ban"
                aria-hidden="true"></i> გაუქმება</button>
    </div>

    </div>
</form>