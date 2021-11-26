<br>
<!-- users edit media object start -->
<div class="media mb-2">
    <a class="mr-2" href="#" onclick="prevent(event)">
        <img src="app-assets/images/portrait/small/avatar-s-27.png" alt="users avatar"
            class="users-avatar-shadow rounded-circle" height="64" width="64">
    </a>
    <div class="media-body">
        <h4 class="media-heading">მოთხოვნა - ჩანაწერის დამატება</h4>
        <div class="col-6 px-0 d-flex">
            <span class="btn btn-sm btn-primary mr-25">ისტორიის ნომერი</span>
            <span class="btn btn-sm btn-secondary"><?php echo strtotime(date("Y-m-d H:i:s"))?></span>
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


            <div class="col-6">

                <div class="form-group">
                    <label>დოკუმენტის წყარო</label>
                    <select class="form-control" id="out-doc-id" onchange="outDocument(this.id)">
                        <option></option>
                        <option value="1">შიდა დოკუმენტი</option>
                        <option value="2">გარე დოკუმენტი</option>
                    </select>
                </div>
            </div>




            <div id="blank-block">

                <div class="col-12">

                    <h4 class="form-section"> გარე დოკუმენტი</h4>
                </div>


                <div class="col-6">

                    <div class="form-group">
                        <div class="controls">
                            <label>დოკუმენტის ნომერი</label>
                            <input type="number" class="form-control" placeholder="დოკუმენტის ნომერი" id="" value="">
                            <div class="help-block"></div>
                        </div>
                    </div>
                </div>

                <div class="col-6">

                    <div class="form-group">
                        <div class="controls">
                            <label>შექმნის თარიღი</label>
                            <input type="text" class="form-control datepicker" placeholder="შექმნის თარიღი" id=""
                                value="">
                            <div class="help-block"></div>
                        </div>
                    </div>
                </div>

                <div class="col-6">

                    <div class="form-group">
                        <div class="controls">
                            <label>ექიმი</label>
                            <input type="number" class="form-control" placeholder="ექიმი" id="" value="">
                            <div class="help-block"></div>
                        </div>
                    </div>
                </div>


                <div class="col-6">

                    <div class="form-group">
                        <div class="controls">
                            <label>სამედიცინო დაწესებულება</label>
                            <input type="number" class="form-control" placeholder="სამედიცინო დაწესებულება" id=""
                                value="">
                            <div class="help-block"></div>
                        </div>
                    </div>
                </div>


                <div class="col-12">
                    <div class="form-group">
                        <label>მიმაგრებული ფაილი</label>
                        <label id="projectinput7" class="file center-block">
                            <input type="file" id="file">
                            <span class="file-custom"></span>
                        </label>
                    </div>
                </div>

                <div class="col-12">
                    <hr>
                </div>
            </div>



            <div class="col-6">
                <div class="form-group">
                    <div class="controls">
                        <label>პირადი ნომერი</label>
                        <input type="number" class="form-control" maxlength="11"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            onkeyup="" placeholder="პირადი ნომერი" id="personal_id" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <div class="controls">
                        <label>პაციენტი</label>
                        <input type="text" class="form-control" placeholder="პაციენტი" id="" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>



            <div class="col-6">
                <div class="form-group">
                    <div class="controls">
                        <label>თარიღი</label>
                        <input type="text" class="form-control datepicker" placeholder="თარიღი" id="" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <label>Vaccine</label>
                    <select class="form-control select2">
                        <option></option>
                        <option value="1">Vaccine 1</option>
                        <option value="2">Vaccine 2 </option>
                        <option value="3">Vaccine 3</option>
                    </select>
                </div>
            </div>



            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="customCheck" id="customCheck4">
                        <label class="custom-control-label" for="customCheck4">არ საჭიროებს რევაქცინაციას</label>
                    </div>
                </fieldset>
            </div>


            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>რევაქცინაცია</label>
                        <input type="text" class="form-control datepicker" placeholder="რევაქცინაცია" id="" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label>უკუჩვენება</label>
                        <input type="text" class="form-control" placeholder="უკუჩვენება" id="" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <label>აცრის შემდგომი გართულება</label>
                    <select class="form-control select2">
                        <option></option>
                        <option value="1">მძიმე ადგილობრივი რეაქცია</option>
                        <option value="2">ლიმფადენტი</option>
                        <option value="3">ჰიპერმია და შეშუპება 7-8 სმ-ზე მეტი დიამეტრის</option>
                        <option value="4">მწვავე დუნე დამბლა</option>
                        <option value="5">გიენ-ბარეს სინდრომი</option>
                        <option value="6">ენცეფალოპათია</option>
                        <option value="7">ენცეფალიტი</option>
                    </select>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <div class="controls">
                        <label>ლოტ ნომერი</label>
                        <input type="text" class="form-control" placeholder="ლოტ ნომერი" id="" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="customCheck" id="customCheck43">
                        <label class="custom-control-label" for="customCheck43">პაციენტის უარი </label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label for="info2">დამატებითი ინფორმაცია</label>
                        <textarea name="" class="form-control" placeholder="დამატებითი ინფორმაცია"
                            id="info2"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>







        </div>



    </div>


    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
        <button type="" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1"><i class="fa fa-edit"
                aria-hidden="true"></i> შენახვა</button>
        <button type="" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1"><i class="fa fa-edit"
                aria-hidden="true"></i> შენახვა/დახურვა</button>
        <button type="reset" class="btn btn-light" id="user-register-reject" onclick="getRequire(this.id)"
            data-toggle="tab" href="#immunization-tab-content"><i class="fa fa-ban" aria-hidden="true"></i>
            გაუქმება</button>
    </div>

    </div>
</form>