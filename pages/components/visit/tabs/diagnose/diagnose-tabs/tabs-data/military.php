<br>
<!-- users edit media object start -->
<div class="media mb-2">
    <a class="mr-2" href="#">
        <img src="app-assets/images/portrait/small/avatar-s-27.png" alt="users avatar"
            class="users-avatar-shadow rounded-circle" height="64" width="64">
    </a>
    <div class="media-body">
        <h4 class="media-heading">სამხედრო-საექიმო კომისიაზე გაგზავნა - ჩანაწერის დამატება</h4>
        <div class="col-6 px-0 d-flex">
            <span class="btn btn-sm btn-primary mr-25">ისტორიის ნომერი</span>
            <span class="btn btn-sm btn-secondary"><?php echo strtotime(date("Y-m-d H:i:s")) ?></span>
        </div>
    </div>
</div>
<!-- users edit media object ends -->
<!-- users edit account form start -->
<form novalidate="" id="diagnose-military-form" method="post" autocomplete="off" action="">

    <div class="col-12">
        <div class="row">

            <div class="col-12">

                <h4 class="form-section"> <i class="fa fa-plus-circle" aria-hidden="true"></i> შექმნა</h4>
            </div>


            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                    <input type="hidden" name="military_Medical_commission">
                        <input type="checkbox" class="custom-control-input" value="1" name="military_Medical_commission" id="military_Medical_commission">
                        <label class="custom-control-label" value="1" name="" for="military_Medical_commission">სამხედრო-საექიმო კომისიაზე გაგზავნა</label>
                    </div>
                </fieldset>
            </div>


            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label for="">სამედიცინო დახასიათება</label>
                        <input type="text" class="form-control" placeholder="სამედიცინო დახასიათება" id="medical_characterization" name="medical_characterization" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label for="">
                            სამსახურებრივი დახასიათება</label>
                        <input type="text" class="form-control" placeholder="სამედიცინო დახასიათება" name="job_description" id="job_description" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-12">

<h4 class="form-section"> <i class="fa fa-file" aria-hidden="true"></i> მიმაგრებული ფაილები</h4>
</div>
                                    <div class="col-12">
        <div class="">
            <table class="table table-bordered table-striped" id="commissionfirst-files-table" style="display: table;">
                            <thead>
                                <tr>
                                    <th>სახელი</th>
                                    <th>ჩამოტვირთვა</th>
                                    <th>წაშლა</th>
                                </tr>
                            </thead>
                            <tbody id="commissionfirst-file-table">


                    </tbody>
                        </table>
            </div>

        </div>

                   <div class="col-12">
                        <div class="form-group">
                        <label for="file"></label>
                        <label id="commision_first_file" class="file center-block btn btn-dark btn-sm file-bg">
                            <input type="file" class="hidden file-input commissionfirst_file" id="commissionfirst_file" name="commissionfirst_file[]">
                          <img src="assets/images/icons/upload.png" class="upload-img"> ფაილის მიმაგრება
                            <span class="file-custom"></span>
                        </label>
                        <span class="upload-filename"></span>
                    </div>	</div>

                    <div class="col-12" id="safaile">

<button type="button" id="add-additional-file-desease" onclick="additionalCommissionFirst(this.id)" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1"><i class="fa fa-plus" aria-hidden="true"></i>
ფაილის დამატება</button>
</div>



            <div class="col-6">
                <br>
                <div class="form-group">
                    <label for="">გათავისუფლება</label>
                    <select class="form-control" id="release" name="release_commission">
                        <option></option>
                        <option value="1">სრული</option>
                        <option value="2">ნაწილობრივ</option>
                        <option value="3">სამკურნალო შვებულება</option>
                    </select>
                </div>
            </div>



            <div class="col-6">
            <br>
                <div class="form-group">
                    <div class="controls">
                        <label for="begin_date">დასაწყისი</label>
                        <input type="text" class="form-control datepicker" placeholder="დასაწყისი" id="begin_date" name="begin_date" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label for="end_date">დასასრული</label>
                        <input type="text" class="form-control datepicker" placeholder="დასასრული" name="end_date" id="end_date" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label>რეკომენდაცია</label>
                        <input type="text" class="form-control" placeholder="რეკომენდაცია" id="recommendation" name="recommendation" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label for="commander_decision">მეთაურის (უფროსის) გადაწყვეტილება</label>
                    <select class="form-control" id="commander_decision" name="commander_decision">
                        <option></option>
                        <option value="1">ეთანხმება</option>
                        <option value="2">არ ეთანხმება</option>
                    </select>
                </div>
            </div>


            <div class="col-12">
                <div class="form-group">
                    <div class="controls">
                        <label for="reason_rejection">უარყოფის მიზეზი</label>
                        <textarea name="reason_rejection" class="form-control" placeholder="უარყოფის მიზეზი" id="reason_rejection"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>







            <div class="col-12">

<h4 class="form-section"> <i class="fa fa-file" aria-hidden="true"></i> მიმაგრებული ფაილები</h4>
</div>
                                    <div class="col-12">
        <div class="">
            <table class="table table-bordered table-striped" id="commissionsecond-files-table" style="display: table;">
                            <thead>
                                <tr>
                                    <th>სახელი</th>
                                    <th>ჩამოტვირთვა</th>
                                    <th>წაშლა</th>
                                </tr>
                            </thead>
                            <tbody id="commissionsecond-file-table">


                    </tbody>
                        </table>
            </div>

        </div>

                   <div class="col-12">
                        <div class="form-group">
                        <label for="file"></label>
                        <label id="commissionsecond_file" class="file center-block btn btn-dark btn-sm file-bg">

                            <input type="file" class="hidden file-input commissionsecond_file" id="commissionsecond_file" name="commissionsecond_file[]">
                          <img src="assets/images/icons/upload.png" class="upload-img"> ფაილის მიმაგრება
                            <span class="file-custom"></span>
                        </label>
                        <span class="upload-filename"></span>
                    </div>	</div>



                    <div class="col-12" id="safaile2">

<button type="button" id="add-additional-file-commission-second" onclick="additionalCommissionSecond(this.id)" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1"><i class="fa fa-plus" aria-hidden="true"></i>
ფაილის დამატება</button>
</div>





        </div>



    </div>

    <input type="hidden" id="commission_id" name="commission_id">
    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
        <button type="button" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1" onclick="InsertCommission(this.id)" id="insert-commission"><i class="fa fa-edit"
                aria-hidden="true"></i> შენახვა</button>
        <button type="button" class="btn btn-light" id="user-register-reject" onclick="getDiagnose(this.id)"
            data-toggle="tab" href="#diagnose-tab-content" aria-controls="linkOpt1"><i class="fa fa-ban"
                aria-hidden="true"></i> გაუქმება</button>
    </div>

    </div>
</form>