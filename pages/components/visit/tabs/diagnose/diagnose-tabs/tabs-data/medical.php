<br>
<!-- users edit media object start -->
<div class="media mb-2">
    <a class="mr-2" href="#">
        <img src="app-assets/images/portrait/small/avatar-s-27.png" alt="users avatar"
            class="users-avatar-shadow rounded-circle" height="64" width="64">
    </a>
    <div class="media-body">
        <h4 class="media-heading">მნიშვნელოვანი სამედიცინო ინფორმაცია - ჩანაწერის დამატება</h4>
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

                <h4 class="form-section"> <i class="fa fa-plus-circle" aria-hidden="true"></i> შექმნა</h4>
            </div>



            <div class="col-12">
                <button type="button" id="add-diagnose-type" onclick="addMedicalDiagnose(this.id,1)" data-toggle="modal"
                    data-target="#diagnose-medical-modal" class="btn btn-primary btn-min-width mr-1 mb-1"><i
                        class="fa fa-plus"></i> ჩანაწერის დამატება</button>
                <table class="table table-striped table-bordered" id="important-table">
                    <thead>
                        <tr>
                            <th>ინფორმაცია</th>
                            <th>თარიღი</th>
                            <th>ექიმი</th>
                        </tr>
                    </thead>
                    <tbody>



                    </tbody>
                </table>
            </div>

        </div>



    </div>

    <input type="hidden" name="information_id" id="information_id">
    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
        <button type="button" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1"><i class="fa fa-edit"
                aria-hidden="true"></i> შენახვა</button>
        <button type="button" class="btn btn-light" id="user-register-reject" onclick="getDiagnose(this.id)"
            data-toggle="tab" href="#diagnose-tab-content" aria-controls="linkOpt1"><i class="fa fa-ban"
                aria-hidden="true"></i> გაუქმება</button>
    </div>

    </div>
</form>

<div class="modal fade text-left " id="diagnose-medical-modal" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel8" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary white">
                <h4 class="modal-title" id="myModalLabel8">შეხვედრა/მიმართვა - ჩანაწერის დამატება</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body" id="diagnose-medical-modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" onclick="InsertImportant(this.id)" id="insert-important"><i class="fa fa-edit" aria-hidden="true"></i>
                    შენახვა</button>
                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal"><i class="fa fa-ban"
                        aria-hidden="true"></i> გაუქმება</button>

            </div>
        </div>
    </div>
</div>