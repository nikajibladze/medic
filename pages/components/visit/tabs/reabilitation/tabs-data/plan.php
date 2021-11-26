<br>
<!-- users edit media object start -->
<div class="media mb-2">
    <a class="mr-2" href="#">
        <img src="app-assets/images/portrait/small/avatar-s-27.png" alt="users avatar"
            class="users-avatar-shadow rounded-circle" height="64" width="64">
    </a>
    <div class="media-body">
        <h4 class="media-heading">რეაბილიტაციის გეგმა - ჩანაწერის დამატება</h4>
        <div class="col-6 px-0 d-flex">
            <span class="btn btn-sm btn-primary mr-25">ისტორიის ნომერი</span>
            <span class="btn btn-sm btn-secondary"><?php echo strtotime(date("Y-m-d H:i:s")) ?></span>
        </div>
    </div>
</div>
<!-- users edit media object ends -->
<!-- users edit account form start -->
<form novalidate="" id="reabilitation-plan-form" action="" method="post" autocomplete="off">

    <div class="col-12">
        <div class="row">

            <div class="col-12">

                <h4 class="form-section"> <i class="fa fa-plus-circle" aria-hidden="true"></i> შექმნა</h4>
            </div>


            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label for="clinical_findings">კლინიკური აღმოჩენები</label>
                        <textarea name="clinical_findings" class="form-control" placeholder="კლინიკური აღმოჩენები" id="clinical_findings"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>



            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label for="functional_findings">ფუნქციური აღმოჩენებია</label>
                        <textarea name="functional_findings" class="form-control" placeholder="ფუნქციური აღმოჩენები" id="functional_findings"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label for="short_term_goal">მოკლევადიანი მიზანია</label>
                        <textarea name="short_term_goal" class="form-control" placeholder="მოკლევადიანი მიზანი" id="short_term_goal"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>



            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label for="long_term_goal">გრძელვადიანი მიზანი</label>
                        <textarea name="long_term_goal" class="form-control" placeholder="გრძელვადიანი მიზანი" id="long_term_goal"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label for="treatment_plan">სამკურნალო გეგმა</label>
                        <textarea name="treatment_plan" class="form-control" placeholder="სამკურნალო გეგმა" id="treatment_plan"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>



            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label for="recommendation">რეკომენდაცია</label>
                        <textarea name="recommendation" class="form-control" placeholder="რეკომენდაცია" id="recommendation"></textarea>
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



        </div>



    </div>

    <input type="hidden" name="reabilitation_plan_id" id="reabilitation_plan_id">
    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
        <button type="button" onclick="insertReabilitationPlan(this.id)" id="insert-reabilitaiton-plan" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1"><i class="fa fa-edit"
                aria-hidden="true"></i> შენახვა</button>
        <button type="button" class="btn btn-light" id="user-register-reject" onclick="getReabilitation(this.id)"
            data-toggle="tab" href="#reabilitation-tab-content" aria-controls="linkOpt1"><i class="fa fa-ban"
                aria-hidden="true"></i> გაუქმება</button>
    </div>

    </div>
</form>