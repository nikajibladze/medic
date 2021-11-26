
            <br>
            <!-- users edit media object start -->
                <div class="media mb-2">
                            <a class="mr-2" href="#" onclick="prevent(event)">
                                <img src="app-assets/images/portrait/small/avatar-s-27.png" alt="users avatar" class="users-avatar-shadow rounded-circle" height="64" width="64">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">ოპერაციები - ჩანაწერის დამატება</h4>
                                <div class="col-6 px-0 d-flex">
                                    <span  class="btn btn-sm btn-primary mr-25">ისტორიის ნომერი</span>
                                    <span  class="btn btn-sm btn-secondary"><?php echo strtotime(date("Y-m-d H:i:s")) ?></span>
                                </div>
                            </div>
                        </div>
                        <!-- users edit media object ends -->
                        <!-- users edit account form start -->
                        <form  id="operations-form" method="post" action="" autocomplete="off">

                            <div class="col-12">
                            <div class="row">

                            <div class="col-12">

        <h4 class="form-section"> <i class="fa fa-plus-circle" aria-hidden="true"></i> შექმნა</h4>
        </div>


        <div class="col-6">

                        <div class="form-group">
                            <label>დოკუმენტის წყარო</label>
                            <select class="form-control" id="operations-document" name="document_type" onchange="outDocument(this.id)">
                            <option></option>
                                <option value="1">შიდა დოკუმენტი</option>
                                <option value="2">გარე დოკუმენტი</option>
                            </select>
                        </div>   </div>




<div id="blank-block-operations">

<div class="col-12">

<h4 class="form-section"> გარე დოკუმენტი</h4>
</div>


<div class="col-6">

<div class="form-group">
                     <div class="controls">
                         <label for="document_number">დოკუმენტის ნომერი</label>
                         <input type="number" class="form-control"  placeholder="დოკუმენტის ნომერი" name="document_number" id="document_number" value="" >
                     <div class="help-block"></div></div>
                 </div>
                 </div>

                 <div class="col-6">

<div class="form-group">
                     <div class="controls">
                         <label>შექმნის თარიღი</label>
                         <input type="text" class="form-control datepicker"  placeholder="შექმნის თარიღი" id="create_date" name="create_date" value="" >
                     <div class="help-block"></div></div>
                 </div>
                 </div>

                 <div class="col-6">

<div class="form-group">
                     <div class="controls">
                         <label>ექიმი</label>
                         <input type="text" class="form-control"  placeholder="ექიმი" name="doctor" id="doctor" value="" >
                     <div class="help-block"></div></div>
                 </div>
                 </div>


                 <div class="col-6">

<div class="form-group">
                       <div class="controls">
                           <label>სამედიცინო დაწესებულება</label>
                           <input type="text" class="form-control"  placeholder="სამედიცინო დაწესებულება" id="medical_institution" name="medical_institution" value="" >
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
                            <tbody id="operations-file-table">


                    </tbody>
                        </table>
            </div>

        </div>




                   <div class="col-12">
                        <div class="form-group">
                        <label for="file"></label>
                        <label id="operations_file" class="file center-block btn btn-dark btn-sm file-bg">

                            <input type="file" class="hidden file-input operations_file" id="operations_file" name="operations_file[]">
                          <img src="assets/images/icons/upload.png" class="upload-img"> ფაილის მიმაგრება
                            <span class="file-custom"></span>
                        </label>
                        <span class="upload-filename"></span>
                    </div>	</div>



                    <div class="col-12">

<button type="button" id="add-additional-file" onclick="additionalFileOperations(this.id)" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1"><i class="fa fa-plus" aria-hidden="true"></i>
ფაილის დამატება</button>
</div>





                    <div class="col-12">
<hr>
</div>
                        </div>



                        <div class="col-6">
         <div class="form-group">
                                         <div class="controls">
                                             <label>პროტოკოლის ნომერი</label>
                                             <input type="text" class="form-control" placeholder="პროტოკოლის ნომერი" id="protocol_number" name="protocol_number" value="">
                                         <div class="help-block"></div></div>
                                     </div>
                                     </div>









                                     <div class="col-6">
                                 <div class="form-group">
                                     <label>ოპერაციის დასახელება</label>
                                     <select class="form-control select2" name="operation_id" id="operation_id">
                                     <option></option>
                                         <option value="1">დასახელება 1</option>
                                         <option value="2">დასახელება 2</option>
                                         <option value="3">დასახელება 3</option>
                                         <option value="4">დასახელება 4</option>
                                     </select>
                                 </div>    </div>



                        <div class="col-6">
         <div class="form-group">
                                         <div class="controls">
                                             <label>ოპერაციის აღწერა</label>
                                             <input type="text" class="form-control" placeholder="ოპერაციის აღწერა" id="operation_description" name="operation_description" value="">
                                         <div class="help-block"></div></div>
                                     </div>
                                     </div>

                                     <div class="col-6">
         <div class="form-group">
                                         <div class="controls">
                                             <label>განყოფილება</label>
                                             <input type="text" class="form-control" name="department" placeholder="განყოფილება" id="department" value="">
                                         <div class="help-block"></div></div>
                                     </div>
                                     </div>



                                     <div class="col-6">
         <div class="form-group">
                                         <div class="controls">
                                             <label>ბარათის ნომერი</label>
                                             <input type="text" class="form-control" placeholder="ბარათის ნომერი" name="card_number" id="card_number" value="">
                                         <div class="help-block"></div></div>
                                     </div>
                                     </div>



                                     <div class="col-6">
         <div class="form-group">
                                         <div class="controls">
                                             <label>გაუტკივარება</label>
                                             <input type="text" class="form-control" placeholder="გაუტკივარება" id="pain_relief" name="pain_relief" value="">
                                         <div class="help-block"></div></div>
                                     </div>
                                     </div>


                                     <div class="col-6">
                                 <div class="form-group">
                                     <label>ოპერაციის ტიპი</label>
                                     <select class="form-control select2" name="operation_type" id="operation_type">
                                     <option></option>
                                         <option value="1">მცირე</option>
                                         <option value="2">სასწრაფო</option>
                                         <option value="3">გეგმიური</option>
                                     </select>
                                 </div>    </div>


                                 <div class="col-6">
         <div class="form-group">
                                         <div class="controls">
                                             <label>ოპერაციის თარიღი</label>
                                             <input type="text" class="form-control datepicker" placeholder="ოპერაციის თარიღი" name="operation_date" id="operation_date" value="">
                                         <div class="help-block"></div></div>
                                     </div>
                                     </div>

                                     <div class="col-6">
         <div class="form-group">
                                         <div class="controls">
                                             <label>ოპერაციის დასრულების თარიღი</label>
                                             <input type="text" class="form-control datepicker" placeholder="ოპერაციის დასრულების თარიღი" name="operation_end_date" id="operation_end_date" value="">
                                         <div class="help-block"></div></div>
                                     </div>
                                     </div>




                                     <div class="col-6">
         <div class="form-group">
                                         <div class="controls">
                                             <label>ოპერაციის ხანგრძლივობა</label>
                                             <input type="text" class="form-control" placeholder="ოპერაციის ხანგრძლივობა" name="operation_duration" id="operation_duration" value="">
                                         <div class="help-block"></div></div>
                                     </div>
                                     </div>


                                     <div class="col-6">
         <div class="form-group">
                                         <div class="controls">
                                             <label>საოპერაციო არის დამუშავება</label>
                                             <input type="text" class="form-control" placeholder="საოპერაციო არის დამუშავება" name="processing_operating" id="processing_operating" value="">
                                         <div class="help-block"></div></div>
                                     </div>
                                     </div>

                                     <div class="col-6">
         <div class="form-group">
                                         <div class="controls">
                                             <label>არე</label>
                                             <input type="text" class="form-control" placeholder="არე" id="area" name="area" value="">
                                         <div class="help-block"></div></div>
                                     </div>
                                     </div>

                                     <div class="col-6">
         <div class="form-group">
                                         <div class="controls">
                                             <label>ზომა</label>
                                             <input type="text" class="form-control" placeholder="ზომა" id="size" name="size" value="">
                                         <div class="help-block"></div></div>
                                     </div>
                                     </div>


                                     <div class="col-6">
         <div class="form-group">
                                         <div class="controls">
                                             <label>მიმართულება</label>
                                             <input type="text" class="form-control" placeholder="მიმართულება" id="direction" name="direction" value="">
                                         <div class="help-block"></div></div>
                                     </div>
                                     </div>



                                     <div class="col-6">
         <div class="form-group">
                                         <div class="controls">
                                             <label>შრეები</label>
                                             <input type="text" class="form-control" placeholder="შრეები" id="layers" name="layers" value="">
                                         <div class="help-block"></div></div>
                                     </div>
                                     </div>

                                     <div class="col-12">

                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="abnormal_changes">ოპერაციის დროს გამოვლენილი პათოლოგიური ცვლილებები</label>
                                            <textarea name="abnormal_changes" rows="5" class="form-control" placeholder="ოპერაციის დროს გამოვლენილი პათოლოგიური ცვლილებები" id="abnormal_changes"></textarea>
                                        <div class="help-block"></div></div>
                                    </div>
                                    </div>

                                    <div class="col-6">
                                 <div class="form-group">
                                     <label>ინტრაოპერაციული დიაგნოზი</label>
                                     <select class="form-control select2" name="intraoperative_diagnosis" id="intraoperative_diagnosis">
                                     <option></option>
                                         <option value="1">დიაგნოზი 1</option>
                                         <option value="2">დიაგნოზი 2</option>
                                         <option value="3">დიაგნოზი 3</option>
                                         <option value="4">დიაგნოზი 4 </option>
                                     </select>
                                 </div>    </div>

                                 <div class="col-6">
         <div class="form-group">
                                         <div class="controls">
                                             <label>ოპერაციის დასრულება (ნაკერების ტიპი, ნახვევი)</label>
                                             <input type="text" class="form-control" placeholder="ოპერაციის დასრულება (ნაკერების ტიპი, ნახვევი)" name="operation_complete" id="operation_complete" value="">
                                         <div class="help-block"></div></div>
                                     </div>
                                     </div>


                                     <div class="col-6">
         <div class="form-group">
                                         <div class="controls">
                                             <label>ჰემოსტაზი</label>
                                             <input type="text" class="form-control" placeholder="ჰემოსტაზი" name="hemostasis" id="hemostasis" value="">
                                         <div class="help-block"></div></div>
                                     </div>
                                     </div>


                                     <div class="col-6">
         <div class="form-group">
                                         <div class="controls">
                                             <label>დრენაჟების კანში გამოტანის ადგილები</label>
                                             <input type="text" class="form-control" placeholder="დრენაჟების კანში გამოტანის ადგილები" name="drainage_skin" id="drainage_skin" value="">
                                         <div class="help-block"></div></div>
                                     </div>
                                     </div>

                                     <div class="col-6">
         <div class="form-group">
                                         <div class="controls">
                                             <label>ამოკვეთილი მაკროპრეპარატის აღწერა</label>
                                             <input type="text" class="form-control" placeholder="ამოკვეთილი მაკროპრეპარატის აღწერა" name="description_macropreparation" id="description_macropreparation" value="">
                                         <div class="help-block"></div></div>
                                     </div>
                                     </div>


                                     <div class="col-6">
         <div class="form-group">
                                         <div class="controls">
                                             <label>გამოსაკვლევად გაგზავნის მითითება</label>
                                             <input type="text" class="form-control" placeholder="გამოსაკვლევად გაგზავნის მითითება" name="indication_sending_examination" id="indication_sending_examination" value="">
                                         <div class="help-block"></div></div>
                                     </div>
                                     </div>

                                     <div class="col-6">
                                 <div class="form-group">
                                     <label>პირველი ასისტენტი</label>
                                     <select class="form-control select2" id="first_assistant" name="first_assistant">
                                     <option></option>
                                         <option value="1">ასისტენტი 1</option>
                                         <option value="2">ასისტენტი 2</option>
                                         <option value="3">ასისტენტი 3</option>
                                         <option value="4">ასისტენტი 4</option>
                                     </select>
                                 </div>    </div>



                                 <div class="col-6">
                                 <div class="form-group">
                                     <label>მეორე ასისტენტი</label>
                                     <select class="form-control select2" name="second_assistant" id="second_assistant">
                                     <option></option>
                                         <option value="1">ასისტენტი 1</option>
                                         <option value="2">ასისტენტი 2</option>
                                         <option value="3">ასისტენტი 3</option>
                                         <option value="4">ასისტენტი 4</option>
                                     </select>
                                 </div>    </div>



                                 <div class="col-6">
                                 <div class="form-group">
                                     <label>საოპერაციო მედდა</label>
                                     <select class="form-control select2" id="surgical_nurse" name="surgical_nurse">
                                     <option></option>
                                         <option value="1">მედდა 1</option>
                                         <option value="2">მედდა 2</option>
                                         <option value="3">მედდა 3</option>
                                         <option value="4">მედდა 4</option>
                                     </select>
                                 </div>    </div>



                                 <div class="col-6">
                                 <div class="form-group">
                                     <label>ანესთეზიოლოგი</label>
                                     <select class="form-control select2" name="anesthesiologist" id="anesthesiologist">
                                     <option></option>
                                         <option value="1">ანესთეზიოლოგი 1</option>
                                         <option value="2">ანესთეზიოლოგი 2</option>
                                         <option value="3">ანესთეზიოლოგი 3</option>
                                         <option value="4">ანესთეზიოლოგი 4</option>
                                     </select>
                                 </div>    </div>



                                 <div class="col-6">
                                 <div class="form-group">
                                     <label>ქირურგი დასახელება</label>
                                     <select class="form-control select2" name="surgeon" id="surgeon">
                                     <option></option>
                                         <option value="1">ქირურგი 1</option>
                                         <option value="2">ქირურგი 2</option>
                                         <option value="3">ქირურგი 3</option>
                                         <option value="4">ქირურგი 4</option>
                                     </select>
                                 </div>    </div>




                                 <div class="col-6">
                                 <div class="form-group">
                                     <label>სპეციალობა</label>
                                     <select class="form-control select2" name="specialty" id="specialty">
                                     <option></option>

                                     </select>
                                 </div>    </div>

                                </div>

                                </div>

                             <input type="hidden" name="operations_id" id="operations_id">
                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                    <button type="button" onclick="InsertOperations(this.id)" id="insert-operations" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1"><i class="fa fa-edit" aria-hidden="true"></i> შენახვა</button>
                                    <button type="button" class="btn btn-light" id="user-register-reject" onclick="getOperations(this.id)"  data-toggle="tab" href="#operations-tab-content"><i class="fa fa-ban" aria-hidden="true"></i> გაუქმება</button>
                                </div>

                            </div>
                        </form>

