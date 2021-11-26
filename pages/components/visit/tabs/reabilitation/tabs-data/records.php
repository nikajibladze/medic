<br>
<!-- users edit media object start -->
<div class="media mb-2">
    <a class="mr-2" href="#">
        <img src="app-assets/images/portrait/small/avatar-s-27.png" alt="users avatar"
            class="users-avatar-shadow rounded-circle" height="64" width="64">
    </a>
    <div class="media-body">
        <h4 class="media-heading">ყოველდღიური და საბოლოო ჩანაწერები - ჩანაწერის დამატება</h4>
        <div class="col-6 px-0 d-flex">
            <span class="btn btn-sm btn-primary mr-25">ისტორიის ნომერი</span>
            <span class="btn btn-sm btn-secondary"><?php echo strtotime(date("Y-m-d H:i:s")) ?></span>
        </div>
    </div>
</div>
<!-- users edit media object ends -->
<!-- users edit account form start -->
<form novalidate="" method="post" action="" id="reabilitation-records-form" autocomplete="off">

    <div class="col-12">
        <div class="row">

            <div class="col-12">

                <h4 class="form-section"> ყოველდღიური ჩანაწერები</h4>
            </div>


            <div class="col-12">
                <br>
                <button type="button" id="add-daily-btn" onclick="addReabilitationDaily(this.id)"
                    data-toggle="modal" data-target="#reabilitation-daily-modal"
                    class="btn btn-primary btn-min-width mr-1 mb-1"><i class="fa fa-plus"></i> ჩანაწერის
                    დამატება</button>
                <table class="table table-striped table-bordered" id="reabilitation-records-table">
                    <thead>
                        <tr>
                            <th>შემოსვლის დრო</th>
                            <th>სუბიექტური</th>
                            <th>ობიექტური</th>
                            <th>ჩატარებული პროცედურები</th>
                            <th>შემდგომი გეგმა</th>
                            <th>გასვლის დრო</th>
                        </tr>
                    </thead>
                    <tbody>



                    </tbody>
                </table>
            </div>



            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label for="subjective_data">სუბიექტური მონაცემები</label>
                        <textarea name="subjective_data" class="form-control" placeholder="სუბიექტური მონაცემები"
                            id="subjective_data"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label for="objective_data">ობიექტური მონაცემები</label>
                        <textarea name="objective_data" class="form-control" placeholder="ობიექტური მონაცემები" id="objective_data"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label for="conclusion">დასკვნა</label>
                        <textarea name="conclusion" class="form-control" placeholder="დასკვნა" id="conclusion"></textarea>
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






        </div>



    </div>

    <input type="hidden" id="reabilitation_records_id" name="reabilitation_records_id">
    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
        <button type="button" onclick="InsertReabilitationRecords(this.id)" id="insert-reabilitation-records" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1"><i class="fa fa-edit"
                aria-hidden="true"></i> შენახვა</button>
        <button type="button" class="btn btn-light" id="user-register-reject" onclick="getReabilitation(this.id)"
            data-toggle="tab" href="#reabilitation-tab-content" aria-controls="linkOpt1"><i class="fa fa-ban"
                aria-hidden="true"></i> გაუქმება</button>
    </div>

    </div>
</form>


<div class="modal fade text-left " id="reabilitation-daily-modal" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel8" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary white">
                <h4 class="modal-title" id="myModalLabel8">ყოველდღიური ჩანაწერები - ჩანაწერის დამატება</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body" id="reabilitation-daily-modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" onclick="insertReabilitaitonDailyModal(this.id)" id="insert-reabilitation-daily-modal" class="btn btn-outline-primary"><i class="fa fa-edit" aria-hidden="true"></i>
                    შენახვა</button>
                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal"><i class="fa fa-ban"
                        aria-hidden="true"></i> გაუქმება</button>

            </div>
        </div>
    </div>
</div>