

                                     <div class="col-12">
         <button type="button" id="add-doctors-record" onclick="addDoctorRecord(this.id)" data-toggle="modal" data-target="#add-doctor-modal" class="btn btn-primary btn-min-width mr-1 mb-1"><i class="fa fa-plus"></i> ჩანაწერის დამატება</button>
<table class="table table-striped table-bordered" id="doctor-duty-table">
                                                        <thead>
                                                        <tr>

                                                            <th>თარიღი</th>
                                                            <th>სპეციალისტი</th>
                                                            <th>სპეციალობა</th>
                                                            <th>სტრ. ერთეული</th>
                                                        </thead>
                                                        <tbody>



                                                        </tbody>
                                                    </table>
                                                    </div>


                        <div class="modal fade text-left " id="add-doctor-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8"   aria-hidden="true">
									  <div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
										<div class="modal-content">
										  <div class="modal-header bg-primary white">
											<h4 class="modal-title" id="myModalLabel8">მორიგე ექიმის ჩანაწერი - ჩანაწერის დამატება</h4>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											  <span aria-hidden="true">×</span>
											</button>
										  </div>
										  <div class="modal-body" id="add-doctor-modal-body">

										  </div>
										  <div class="modal-footer">
                                          <button type="button" onclick="InsertDoctorRecord()" id="insert-doctor-record" class="btn btn-outline-primary"><i class="fa fa-edit" aria-hidden="true"></i> შენახვა</button>
											<button type="button" class="btn grey btn-outline-secondary"  data-dismiss="modal"><i class="fa fa-ban" aria-hidden="true"></i> გაუქმება</button>

										  </div>
										</div>
									  </div>
									</div>
