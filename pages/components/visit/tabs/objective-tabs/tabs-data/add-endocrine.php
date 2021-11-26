<br>
<!-- users edit media object start -->
<div class="media mb-2">
    <a class="mr-2" href="#">
        <img src="app-assets/images/portrait/small/avatar-s-27.png" alt="users avatar"
            class="users-avatar-shadow rounded-circle" height="64" width="64">
    </a>
    <div class="media-body">
        <h4 class="media-heading">ენდოკრინული სისტემა - ჩანაწერის დამატება</h4>
        <div class="col-6 px-0 d-flex">
            <span class="btn btn-sm btn-primary mr-25">ისტორიის ნომერი</span>
            <span class="btn btn-sm btn-secondary"><?php echo strtotime(date("Y-m-d H:i:s"))?></span>
        </div>
    </div>
</div>
<!-- users edit media object ends -->
<!-- users edit account form start -->
<form novalidate="" method="post" id="endocrine-form" autocomplete="off">

    <div class="col-12">
        <div class="row">

            <div class="col-12">

                <h4 class="form-section"> <i class="fa fa-plus-circle" aria-hidden="true"></i> შექმნა</h4>
            </div>



            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="without_pathology" value="">
                        <input type="checkbox" class="custom-control-input" value="1" name="without_pathology"
                            id="without_pathology_e">
                        <label class="custom-control-label" for="without_pathology_e">პათოლოგიის გარეშე /
                            ნორმის
                            ფარგლებში</label>
                    </div>
                </fieldset>
            </div>




            <div class="col-6">
                <br>
                <div class="form-group">
                    <label for="subcutaneous_adipose_tissue">კანქვეშა ცხიმოვანი ქსოვილი</label>
                    <select class="form-control" id="subcutaneous_adipose_tissue" name="subcutaneous_adipose_tissue">
                        <option></option>
                        <option value="1">ნორმის ფარგლებში</option>
                        <option value="2">ზომიერი</option>
                        <option value="3">ჭარბი</option>
                    </select>
                </div>
            </div>


            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>დამატებითი ინფორმაცია</label>
                        <input type="text" class="form-control" placeholder="დამატებითი ინფორმაცია"
                            name="subcutaneous_text" id="subcutaneous_text" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">

                <div class="form-group">
                    <label>თმიანობა</label>
                    <select class="form-control" name="hairs" id="hairs">
                        <option></option>
                        <option value="1">მამაკაცის</option>
                        <option value="2">ქალის</option>
                    </select>
                </div>
            </div>



            <div class="col-6">

                <div class="form-group">
                    <label>გარეთა სასქესო ნიშნები სქესს შეესაბამება</label>
                    <select class="form-control" name="correspond_sex" id="correspond_sex">
                        <option></option>
                        <option value="1">კი</option>
                        <option value="2">არა</option>
                    </select>
                </div>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <div class="controls">
                        <label>დამატებითი ინფორმაცია</label>
                        <input type="text" class="form-control" placeholder="დამატებითი ინფორმაცია"
                            id="endocrine_system_text" name="endocrine_system_text" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>



            <div class="col-12">
                <br>
                <h4 class="form-section"> ფარისებრი ჯირკვალი</h4>
            </div>


            <div class="col-6">
                <br>
                <div class="form-group">
                    <label>ზომა</label>
                    <select class="form-control" name="size" id="size">
                        <option></option>
                        <option value="1">ნორმის ფარგლებში</option>
                        <option value="2">არ ისინჯება</option>
                    </select>
                </div>
            </div>


            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>დამატებითი ინფორმაცია</label>
                        <input type="text" class="form-control" placeholder="დამატებითი ინფორმაცია" name="size_text"
                            id="size_text" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <div class="controls">
                        <label>კონსისტენცია</label>
                        <input type="text" class="form-control" placeholder="კონსისტენცია" id="consistency"
                            name="consistency" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <div class="controls">
                        <label>მტკივნეულობა</label>
                        <input type="text" class="form-control" placeholder="მტკივნეულობა" id="pain" name="pain"
                            value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-12">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label for="pain_text">დამატებითი ინფორმაცია</label>
                        <textarea name="pain_text" class="form-control" placeholder="დამატებითი ინფორმაცია"
                            id="pain_text"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>






        </div>



    </div>

    <input type="hidden" id="endocrine_id" value="" name="edit_id">
    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
        <button type="button" onclick="InsertEndocrine(this.id)" id="insert-endocrine"
            class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1"><i class="fa fa-edit" aria-hidden="true"></i>
            შენახვა</button>
        <button type="reset" class="btn btn-light" id="user-register-reject" onclick="getEndocrine(this.id)"
            data-toggle="tab" href="#endocrine-tab-content" aria-controls="linkOpt1"><i class="fa fa-ban"
                aria-hidden="true"></i> გაუქმება</button>
    </div>

    </div>
</form>