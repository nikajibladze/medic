
            <br>
            <!-- users edit media object start -->
                <div class="media mb-2">
                            <a class="mr-2" href="#" onclick="prevent(event)">
                                <img src="app-assets/images/portrait/small/avatar-s-27.png" alt="users avatar" class="users-avatar-shadow rounded-circle" height="64" width="64">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">ფსიქოლოგიური შემოწმება - ჩანაწერის დამატება</h4>
                                <div class="col-6 px-0 d-flex">
                                    <span  class="btn btn-sm btn-primary mr-25">ისტორიის ნომერი</span>
                                    <span  class="btn btn-sm btn-secondary"><?php echo strtotime(date("Y-m-d H:i:s")) ?></span>
                                </div>
                            </div>
                        </div>
                        <!-- users edit media object ends -->
                        <!-- users edit account form start -->
                        <form novalidate="" method="post" action="" id="psychology-examination-form">

                            <div class="col-12">
                            <div class="row">

                            <div class="col-12">

        <h4 class="form-section"> <i class="fa fa-plus-circle" aria-hidden="true"></i> შექმნა</h4>
        </div>



                        <div class="col-6">

                 <div class="form-group">
                                      <div class="controls">
                                          <label>თარიღი</label>
                                          <input type="text" class="form-control datepicker"  placeholder="თარიღი" id="examination_date" name="examination_date" value="" >
                                      <div class="help-block"></div></div>
                                  </div>
                                  </div>


                        <div class="col-6">

                 <div class="form-group">
                                      <div class="controls">
                                          <label>სპეციალისტი</label>
                                          <input type="text" class="form-control"  placeholder="სპეციალისტი" id="specialist" name="specialist" value="" >
                                      <div class="help-block"></div></div>
                                  </div>
                                  </div>



                                  <div class="col-6">
                                 <div class="form-group">
                                     <label>დიაგნოზი</label>
                                     <select class="form-control select2" name="diagnosis_id" id="diagnosis_id">
                                     <option></option>

                                     </select>
                                 </div>    </div>

                                 <div class="col-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="additional_information">დამატებითი ინფორმაცია</label>
                                            <textarea name="additional_information" class="form-control" placeholder="დამატებითი ინფორმაცია" id="additional_information"></textarea>
                                        <div class="help-block"></div></div>
                                    </div>
                                    </div>


                                    <div class="col-12">

<h4 class="form-section"> <i class="fa fa-file" aria-hidden="true"></i> მიმაგრებული ფაილები</h4>
</div>
                                    <div class="col-12">
        <div class="">
            <table class="table table-bordered table-striped" id="psychology-files-table" style="display: table;">
                            <thead>
                                <tr>
                                    <th>სახელი</th>
                                    <th>ჩამოტვირთვა</th>
                                    <th>წაშლა</th>
                                </tr>
                            </thead>
                            <tbody id="psy-file-table">


                    </tbody>
                        </table>
            </div>

        </div>




                   <div class="col-12">
                        <div class="form-group">
                        <label for="file"></label>
                        <label id="psychology_file" class="file center-block btn btn-dark btn-sm file-bg">

                            <input type="file" class="hidden file-input psychology_file" id="psychology_file" name="psychology_file[]">
                          <img src="assets/images/icons/upload.png" class="upload-img"> ფაილის მიმაგრება
                            <span class="file-custom"></span>
                        </label>
                        <span class="upload-filename"></span>
                    </div>	</div>



                    <div class="col-12">

<button type="button" id="add-additional-file" onclick="additionalFilePsychology(this.id)" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1"><i class="fa fa-plus" aria-hidden="true"></i>
ფაილის დამატება</button>
</div>




                                </div>



                                </div>


                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                    <button type="button" onclick="InsertPsychology(this.id)" id="insert-psycology-examination" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1"><i class="fa fa-edit" aria-hidden="true"></i> შენახვა</button>
                                    <button type="button" class="btn btn-light" id="user-register-reject" onclick="getPsychology(this.id)"  data-toggle="tab" href="#psychology-tab-content"><i class="fa fa-ban" aria-hidden="true"></i> გაუქმება</button>
                                </div>

                            </div>
                            <input type="hidden" id="psychology_id" name="psychology_id">
                        </form>


