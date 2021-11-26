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
<form novalidate="" id="rehabilitation-card-form" action="" method="post" autocomplete="off">

    <div class="col-12">
        <div class="row">

            <div class="col-12">

                <h4 class="form-section"> <i class="fa fa-plus-circle" aria-hidden="true"></i> შექმნა</h4>
            </div>

            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label>სახელი გვარი</label>
                        <input type="text" class="form-control" placeholder="სახელი გვარი" id="name_surname" name="name_surname" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>
            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label>პირადი ნომერი</label>
                        <input type="number" class="form-control" placeholder="პირადი ნომერი" id="personal_number" onkeydown="if(this.value.length==11 &amp;&amp; event.keyCode!=8) return false;" value="" name="personal_number">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label>დაბადების თარიღი</label>
                        <input type="text" class="form-control datepicker" placeholder="დაბადების თარიღი" name="birth_date" id="birth_date"
                            value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label>ქვედანაყოფი</label>
                        <input type="text" class="form-control" placeholder="ქვედანაყოფი" id="subdivision" name="subdivision" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label>სამხედრო წოდება</label>
                        <input type="text" class="form-control" placeholder="სამხედრო წოდება" id="military_rank" name="military_rank" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <div class="controls">
                        <label>შემოსვლის თარიღი</label>
                        <input type="text" class="form-control datepicker" placeholder="შემოსვლის თარიღი" name="date_entry" id="date_entry"
                            value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <div class="controls">
                        <label>გაწერის თარიღი</label>
                        <input type="text" class="form-control datepicker" placeholder="გაწერის თარიღი" id="date_discharge" name="date_discharge" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <label>დომინანტი მხარე</label>
                    <select class="form-control" name="dominant_side" id="dominant_side">
                        <option></option>
                        <option value="1">მარჯვენა</option>
                        <option value="2">მარცხენა</option>
                    </select>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <div class="controls">
                        <label>დაშავების თარიღი</label>
                        <input type="text" class="form-control datepicker" placeholder="დაშავების თარიღი" name="date_injury" id="date_injury"
                            value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <div class="controls">
                        <label>დაშავების ადგილი</label>
                        <input type="text" class="form-control" placeholder="დაშავების ადგილი" id="place_injury" name="place_injury" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-12">
                <div class="form-group">
                    <div class="controls">
                        <label for="entry_diagnosis">შემოსვლის დიაგნოზი</label>
                        <textarea name="entry_diagnosis" class="form-control" placeholder="შემოსვლის დიაგნოზი" id="entry_diagnosis"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>



            <div class="col-12">
                <div class="form-group">
                    <div class="controls">
                        <label for="instrumental_examinations_conducted">ჩატარებული ინსტრუმენტული გამოკვლევები</label>
                        <textarea name="instrumental_examinations_conducted" class="form-control" placeholder="ჩატარებული ინსტრუმენტული გამოკვლევები"
                            id="instrumental_examinations_conducted"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-12">
                <div class="form-group">
                    <div class="controls">
                        <label for="consultations_conducted">ჩატარებული კონსულტაციები</label>
                        <textarea name="consultations_conducted" class="form-control" placeholder="ჩატარებული კონსულტაციები"
                            id="consultations_conducted"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-12">

                <div class="form-group">
                    <div class="controls">
                        <label for="treatment">მკურნალობა (მიმდინარე, მედიკამენტოზური)</label>
                        <textarea name="treatment" class="form-control" placeholder="მკურნალობა (მიმდინარე, მედიკამენტოზური)"
                            id="treatment"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>



            <div class="col-12">

                <div class="form-group">
                    <div class="controls">
                        <label for="result_of_rehabilitation">რეაბილიტაციის შედეგი</label>
                        <textarea name="result_of_rehabilitation" class="form-control" placeholder="რეაბილიტაციის შედეგი" id="result_of_rehabilitation"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-12">

                <div class="form-group">
                    <div class="controls">
                        <label for="further_recommendations">შემდგომი რეკომენდაციები</label>
                        <textarea name="further_recommendations" class="form-control" placeholder="შემდგომი რეკომენდაციები"
                            id="further_recommendations"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-12">

                <div class="form-group">
                    <div class="controls">
                        <label for="further_rehabilitation_course">შემდგომი რეაბილიტაციის კურსი</label>
                        <textarea name="further_rehabilitation_course" class="form-control" placeholder="შემდგომი რეაბილიტაციის კურსი"
                            id="further_rehabilitation_course"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-12">

                <div class="form-group">
                    <div class="controls">
                        <label for="recommended">რეკომენდირებული - სპორტის სახეობა</label>
                        <textarea name="recommended" class="form-control" placeholder="რეკომენდირებული - სპორტის სახეობა"
                            id="recommended"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


        </div>



    </div>


    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
        <button type="button" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1" onclick="InsertReabilitation(this.id)" id="insert-rehabilitation-card"><i class="fa fa-edit"
                aria-hidden="true"></i> შენახვა</button>
        <button type="button" class="btn btn-light" id="user-register-reject" onclick="getReabilitation(this.id)"
            data-toggle="tab" href="#reabilitation-tab-content" aria-controls="linkOpt1"><i class="fa fa-ban"
                aria-hidden="true"></i> გაუქმება</button>
    </div>

    </div>
</form>