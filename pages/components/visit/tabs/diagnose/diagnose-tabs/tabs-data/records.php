<br>
<!-- users edit media object start -->
<div class="media mb-2">
    <a class="mr-2" href="#">
        <img src="app-assets/images/portrait/small/avatar-s-27.png" alt="users avatar"
            class="users-avatar-shadow rounded-circle" height="64" width="64">
    </a>
    <div class="media-body">
        <h4 class="media-heading">ჩანაწერები - ჩანაწერის დამატება</h4>
        <div class="col-6 px-0 d-flex">
            <span class="btn btn-sm btn-primary mr-25">ისტორიის ნომერი</span>
            <span class="btn btn-sm btn-secondary"><?php echo strtotime(date("Y-m-d H:i:s")) ?></span>
        </div>
    </div>
</div>
<!-- users edit media object ends -->
<!-- users edit account form start -->
<form novalidate="">

    <div class="col-12">
        <div class="row">



            <div class="col-12">
                <br>
                <h4 class="form-section">პაციენტის ჯანმრთელობის მდგომარეობა</h4>
            </div>

            <div class="col-12">
                <button type="button" id="add-diagnose-type" onclick="addDiagnoseHealth(this.id)" data-toggle="modal"
                    data-target="#diagnose-health-modal" class="btn btn-primary btn-min-width mr-1 mb-1"><i
                        class="fa fa-plus"></i> ჩანაწერის დამატება</button>
                <table class="table table-striped table-bordered" id="diagnose-health-table">
                    <thead>
                        <tr>
                            <th>თარიღი</th>
                            <th>პაციენტრის ჯანმრთელობის მდგომარეობა</th>

                        </tr>
                    </thead>
                    <tbody>



                    </tbody>
                </table>
            </div>


            <div class="col-12">
                <br>
                <h4 class="form-section">კონსულტაცია/დანიშნულება</h4>
            </div>

            <div class="col-12">
                <button type="button" id="add-diagnose-type" onclick="addDiagnoseConsult(this.id)" data-toggle="modal"
                    data-target="#diagnose-consult-modal" class="btn btn-primary btn-min-width mr-1 mb-1"><i
                        class="fa fa-plus"></i> ჩანაწერის დამატება</button>
                <table class="table table-striped table-bordered" id="diagnose-destination-table">
                    <thead>
                        <tr>
                            <th>თარიღი</th>
                            <th>ჩანაწერი</th>
                            <th>კონსულტაცია/დანიშნულება</th>
                        </tr>
                    </thead>
                    <tbody>



                    </tbody>
                </table>
            </div>





        </div>



    </div>

    <input type="hidden" id="diagnose_record_id" name="diagnose_record_id">
    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
        <button type="button" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1"><i class="fa fa-edit"
                aria-hidden="true"></i> შენახვა</button>
        <button type="button" class="btn btn-light" id="user-register-reject" onclick="getDiagnose(this.id)"
            data-toggle="tab" href="#diagnose-tab-content" aria-controls="linkOpt1"><i class="fa fa-ban"
                aria-hidden="true"></i> გაუქმება</button>
    </div>

    </div>
</form>



<div class="modal fade text-left " id="diagnose-health-modal" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel8" aria-hidden="true">
    <div class="modal-dialog   modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary white">
                <h4 class="modal-title" id="patient-header">პაციენტის ჯანმრთელობის მდგომარეობა - ჩანაწერის დამატება</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body" id="diagnose-health-modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" onclick="InsertDiagnoseHealth(this.id)" id="insert-diagnose-health" class="btn btn-outline-primary"><i class="fa fa-edit" aria-hidden="true"></i>
                    შენახვა</button>
                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal"><i class="fa fa-ban"
                        aria-hidden="true"></i> გაუქმება</button>

            </div>
        </div>
    </div>
</div>



<div class="modal fade text-left " id="diagnose-consult-modal" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel8" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary white">
                <h4 class="modal-title" id="myModalLabel8">კონსულტაცია/დანიშნულება - ჩანაწერის დამატება</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body" id="diagnose-consult-modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" onclick="InsertDiagnoseDestination(this.id)" id="insert-diagnose-destination"><i class="fa fa-edit" aria-hidden="true"></i>
                    შენახვა</button>
                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal"><i class="fa fa-ban"
                        aria-hidden="true"></i> გაუქმება</button>

            </div>
        </div>
    </div>
</div>