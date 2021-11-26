<br>
<!-- users edit media object start -->
<div class="media mb-2">
    <a class="mr-2" href="#">
        <img src="app-assets/images/portrait/small/avatar-s-27.png" alt="users avatar"
            class="users-avatar-shadow rounded-circle" height="64" width="64">
    </a>
    <div class="media-body">
        <h4 class="media-heading">კლინიკო-ლაბორატორიული გამოკვლევა</h4>
        <div class="col-6 px-0 d-flex">
            <span class="btn btn-sm btn-primary mr-25">ისტორიის ნომერი</span>
            <span class="btn btn-sm btn-secondary"><?php echo strtotime(date("Y-m-d H:i:s")) ?></span>
        </div>
    </div>
</div>
<!-- users edit media object ends -->
<!-- users edit account form start -->
<form novalidate="" method="post" action="" id="clinical-lab-form">

    <div class="col-12">
        <div class="row">

            <div class="col-12">
                <br>
                <h4 class="form-section"> კლინიკური გამოკვლევა</h4>
            </div>





            <div class="col-12">
                <button type="button" id="add-examination" onclick="addClinic(this.id,1)" data-toggle="modal"
                    data-target="#clinic-modal" class="btn btn-primary btn-min-width mr-1 mb-1"><i
                        class="fa fa-plus"></i> ჩანაწერის დამატება</button>
                <table class="table table-striped table-bordered" id="clinical-examination-table">
                    <thead>
                        <tr>
                            <th>პროცედურის კოდი</th>
                            <th>პროცედურა</th>
                            <th>მომთხოვნი ექიმი</th>
                            <th>შემსრულებელი</th>
                            <th>სტატუსი</th>
                        </tr>
                    </thead>
                    <tbody>



                    </tbody>
                </table>
            </div>


            <div class="col-12">
                <br>
                <h4 class="form-section"> ლაბორატორიული გამოკვლევები</h4>
            </div>





            <div class="col-12">
                <button type="button" id="add-laboratory-tests" onclick="addLab(this.id)" data-toggle="modal"
                    data-target="#lab-modal" class="btn btn-primary btn-min-width mr-1 mb-1"><i class="fa fa-plus"></i>
                    ჩანაწერის დამატება</button>
                <table class="table table-striped table-bordered" id="laboratory-tests-table">
                    <thead>
                        <tr>
                            <th>ტესტის ტიპი</th>
                            <th>კოდი</th>
                            <th>თარიღი</th>
                            <th>ციტო</th>
                            <th>სპეციალისტი</th>
                            <th>სპეციალობა</th>
                            <th>სტუქტურული ერთეული</th>
                        </tr>
                    </thead>
                    <tbody>



                    </tbody>
                </table>
            </div>



        </div>



    </div>

    <input type="hidden" id="clinic_lab_id" name="clinic_lab_id">
    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
        <button type="button" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1"><i class="fa fa-edit"
                aria-hidden="true"></i> შენახვა</button>
        <button type="button" class="btn btn-light" id="user-register-reject" onclick="getClinicLab(this.id)"
            data-toggle="tab" href="#clinic-lab-tab-content" aria-controls="linkOpt1"><i class="fa fa-ban"
                aria-hidden="true"></i> გაუქმება</button>
    </div>

    </div>
</form>



<div class="modal fade text-left " id="clinic-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8"
    aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary white">
                <h4 class="modal-title" id="myModalLabel8">კლინიკური გამოკვლევა - ჩანაწერის დამატება</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body" id="clinic-add-modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" onclick="InsertExamination(this.id)" id="insert-examination" class="btn btn-outline-primary"><i class="fa fa-edit" aria-hidden="true"></i>
                    შენახვა</button>
                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal"><i class="fa fa-ban"
                        aria-hidden="true"></i> გაუქმება</button>

            </div>
        </div>
    </div>
</div>

<div class="modal fade text-left " id="lab-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8"
    aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary white">
                <h4 class="modal-title" id="myModalLabel8">ლაბორატორიული გამოკვლევები - ჩანაწერის დამატება</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body" id="lab-add-modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" onclick="InsertLabTests(this.id)" id="insert-lab-tests" class="btn btn-outline-primary"><i class="fa fa-edit" aria-hidden="true"></i>
                    შენახვა</button>
                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal"><i class="fa fa-ban"
                        aria-hidden="true"></i> გაუქმება</button>

            </div>
        </div>
    </div>
</div>