<br>
<!-- users edit media object start -->
<div class="media mb-2">
    <a class="mr-2" href="#">
        <img src="app-assets/images/portrait/small/avatar-s-27.png" alt="users avatar"
            class="users-avatar-shadow rounded-circle" height="64" width="64">
    </a>
    <div class="media-body">
        <h4 class="media-heading">ფიზიკური თერაპია - ჩანაწერის დამატება</h4>
        <div class="col-6 px-0 d-flex">
            <span class="btn btn-sm btn-primary mr-25">ისტორიის ნომერი</span>
            <span class="btn btn-sm btn-secondary"><?php echo strtotime(date("Y-m-d H:i:s")) ?></span>
        </div>
    </div>
</div>
<!-- users edit media object ends -->
<!-- users edit account form start -->
<form novalidate="" autocomplete="off" id="physical-therapy-form" action="" method="post">

    <div class="col-12">
        <div class="row">

            <div class="col-12">

                <h4 class="form-section"> <i class="fa fa-plus-circle" aria-hidden="true"></i> შექმნა</h4>
            </div>


            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label for="injury_history">დაზიანების ისტორია</label>
                        <textarea name="injury_history" class="form-control" placeholder="დაზიანების ისტორია" id="injury_history"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>



            <div class="col-6">

                <div class="form-group">
                    <div class="controls">
                        <label for="complain"> ჩივილი</label>
                        <textarea name="complain" class="form-control" placeholder="ჩივილი" id="complain"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-12">

                <h4 class="form-section"> ტკივილი</h4>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label>დილას</label><br>
                    <select class="form-control select2" id="in_morning" name="in_morning">
                        <option></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <label>საღამოს</label><br>
                    <select class="form-control select2" name="in_evening" id="in_evening">
                        <option></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <label>ღამით</label><br>
                    <select class="form-control select2" id="at_night" name="at_night">
                        <option></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <div class="controls">
                        <label>გამაღიზიანებელი ფაქტორები</label>
                        <input type="text" class="form-control" placeholder="გამაღიზიანებელი ფაქტორები" name="irritant_factors" id="irritant_factors" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <div class="controls">
                        <label>დაკვირვება</label>
                        <input type="text" class="form-control" placeholder="დაკვირვება" id="observation" name="observation" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <div class="controls">
                        <label>მომშვები ფაქტორები</label>
                        <input type="text" class="form-control" placeholder="მომშვები ფაქტორები" id="releasing_factors" name="releasing_factors" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <div class="controls">
                        <label>სიარულის მანერა</label>
                        <input type="text" class="form-control" placeholder="სიარულის მანერა" id="manner_walking" name="manner_walking" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <div class="controls">
                        <label>მედიკამენტები</label>
                        <input type="text" class="form-control" placeholder="მედიკამენტები" name="medications" id="medications" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <div class="controls">
                        <label>სხეულის პოზიცია მდგომარეობა</label>
                        <input type="text" class="form-control" placeholder="სხეულის პოზიცია მდგომარეობა" name="body_position_condition" id="body_position_condition"
                            value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <div class="controls">
                        <label>პაც. მოკლევადიანი მიზანი</label>
                        <input type="text" class="form-control" placeholder="პაც. მოკლევადიანი მიზანი" name="short_term_goal" id="short_term_goal" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <div class="controls">
                        <label>სახსრების მოძრაობა</label>
                        <input type="text" class="form-control" placeholder="სახსრების მოძრაობა" name="movement_of_funds" id="movement_of_funds" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <div class="controls">
                        <label>პაც. გრძელვადიანი მიზანი</label>
                        <input type="text" class="form-control" placeholder="პაც. გრძელვადიანი მიზანი" name="long_term_goal" id="long_term_goal" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>



            <div class="col-12">

                <h4 class="form-section"> შუალედური შეფასება</h4>
            </div>



            <div class="col-6">
                <div class="form-group">
                    <div class="controls">
                        <label>სუბიექტური</label>
                        <input type="text" class="form-control" placeholder="სუბიექტური" name="subjective" id="subjective" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <div class="controls">
                        <label>ობიექტური</label>
                        <input type="text" class="form-control" placeholder="ობიექტური" name="objective" id="objective" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <div class="controls">
                        <label>დასკვნა</label>
                        <input type="text" class="form-control" placeholder="დასკვნა" name="conclusion" id="conclusion" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <div class="controls">
                        <label>რეკომენდაცია</label>
                        <input type="text" class="form-control" placeholder="რეკომენდაცია" name="recommendation" id="recommendation" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <div class="controls">
                        <label>Funct</label>
                        <input type="text" class="form-control" placeholder="Funct" name="funct" id="funct" value="">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>
    <input type="hidden" id="physical_therapy_id" name="physical_therapy_id">
            </form>


            <div class="col-12">
            <form action="" method="post" id="physical-therapy-form-table">
                <table class="table table-bordered" id="therapy-table">
                    <thead>
                        <tr class="table-primary">
                            <th>rom</th>
                            <th>მარჯვენა Arom</th>
                            <th>მარჯვენა Prom</th>
                            <th>მარჯვენა Arom</th>
                            <th>მარჯვენა Prom</th>
                            <th>აღნიშვნა (ტკივილი, კრეპიტაცია)</th>
                            <th>MMT</th>
                            <th>მარჯვენა</th>
                            <th>მარცხენა</th>
                            <th>აღნიშვნა (ტკივილის ხარისხი)</th>
                        </tr>
                    </thead>
                    <tbody class="therapy-tb-body">
                        <tr>
                            <th class="table-primary">დორსა</th>
                            <td><input type="text" class="ocupation-table-input" id="dorsa_right_arom" name="dorsa_right_arom"></td>
                            <td><input type="text" class="ocupation-table-input" id="dorsa_right_prom" name="dorsa_right_prom"></td>
                            <td><input type="text" class="ocupation-table-input" id="dorsa_left_arom" name="dorsa_left_arom"></td>
                            <td><input type="text" class="ocupation-table-input" id="dorsa_left_prom" name="dorsa_left_prom"></td>
                            <td>
                                <select name="dorsa_marking_crepitation" id="dorsa_marking_crepitation" class="form-control">
                                <option value=""></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </td>
                            <td><input type="text" class="ocupation-table-input" id="dorsa_mmt" name="dorsa_mmt"></td>
                            <td><input type="text" class="ocupation-table-input" id="dorsa_right" name="dorsa_right"></td>
                            <td><input type="text" class="ocupation-table-input" id="dorsa_left" name="dorsa_left"></td>
                            <td>    <select name="dorsa_pain_degree" id="dorsa_pain_degree" class="form-control">
                                <option value=""></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select></td>
                        </tr>
                        <tr>
                            <th class="table-primary">პლანტა</th>
                            <td><input type="text" class="ocupation-table-input" id="planta_right_arom" name="planta_right_arom"></td>
                            <td><input type="text" class="ocupation-table-input" id="planta_right_prom" name="planta_right_prom"></td>
                            <td><input type="text" class="ocupation-table-input" id="planta_left_arom" name="planta_left_arom"></td>
                            <td><input type="text" class="ocupation-table-input" id="planta_left_prom" name="planta_left_prom"></td>
                            <td>
                                <select name="planta_marking_crepitation" id="planta_marking_crepitation" class="form-control">
                                <option value=""></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </td>
                            <td><input type="text" class="ocupation-table-input" id="planta_mmt" name="planta_mmt"></td>
                            <td><input type="text" class="ocupation-table-input" id="planta_right" name="planta_right"></td>
                            <td><input type="text" class="ocupation-table-input" id="planta_left" name="planta_left"></td>
                            <td>    <select name="planta_pain_degree" id="planta_pain_degree" class="form-control">
                                <option value=""></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select></td>
                        </tr>
                        <tr>
                            <th class="table-primary">ინვერს</th>
                            <td><input type="text" class="ocupation-table-input" id="invers_right_arom" name="invers_right_arom"></td>
                            <td><input type="text" class="ocupation-table-input" id="invers_right_prom" name="invers_right_prom"></td>
                            <td><input type="text" class="ocupation-table-input" id="invers_left_arom" name="invers_left_arom"></td>
                            <td><input type="text" class="ocupation-table-input" id="invers_left_prom" name="invers_left_prom"></td>
                            <td>
                                <select name="invers_marking_crepitation" id="invers_marking_crepitation" class="form-control">
                                <option value=""></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </td>
                            <td><input type="text" class="ocupation-table-input" id="invers_mmt" name="invers_mmt"></td>
                            <td><input type="text" class="ocupation-table-input" id="invers_right" name="invers_right"></td>
                            <td><input type="text" class="ocupation-table-input" id="invers_left" name="invers_left"></td>
                            <td>    <select name="invers_pain_degree" id="invers_pain_degree" class="form-control">
                                <option value=""></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select></td>
                        </tr>
                        <tr>
                            <th class="table-primary">ივერსია</th>
                            <td><input type="text" class="ocupation-table-input" id="iversia_right_arom" name="iversia_right_arom"></td>
                            <td><input type="text" class="ocupation-table-input" id="iversia_right_prom" name="iversia_right_prom"></td>
                            <td><input type="text" class="ocupation-table-input" id="iversia_left_arom" name="iversia_left_arom"></td>
                            <td><input type="text" class="ocupation-table-input" id="iversia_left_prom" name="iversia_left_prom"></td>
                            <td>
                                <select name="iversia_marking_crepitation" id="iversia_marking_crepitation" class="form-control">
                                <option value=""></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </td>
                            <td><input type="text" class="ocupation-table-input" id="iversia_mmt" name="iversia_mmt"></td>
                            <td><input type="text" class="ocupation-table-input" id="iversia_right" name="iversia_right"></td>
                            <td><input type="text" class="ocupation-table-input" id="iversia_left" name="iversia_left"></td>
                            <td>    <select name="iversia_pain_degree" id="iversia_pain_degree" class="form-control">
                                <option value=""></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select></td>
                        </tr>

                        <tr>
                            <th class="table-primary">მუხლის მოხრა</th>
                            <td><input type="text" class="ocupation-table-input" id="knee_flexion_right_arom" name="knee_flexion_right_arom"></td>
                            <td><input type="text" class="ocupation-table-input" id="knee_flexion_right_prom" name="knee_flexion_right_prom"></td>
                            <td><input type="text" class="ocupation-table-input" id="knee_flexion_left_arom" name="knee_flexion_left_arom"></td>
                            <td><input type="text" class="ocupation-table-input" id="knee_flexion_left_prom" name="knee_flexion_left_prom"></td>
                            <td>
                                <select name="knee_flexion_marking_crepitation" id="knee_flexion_marking_crepitation" class="form-control ">
                                <option value=""></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </td>
                            <td><input type="text" class="ocupation-table-input" id="knee_flexion_mmt" name="knee_flexion_mmt"></td>
                            <td><input type="text" class="ocupation-table-input" id="knee_flexion_right" name="knee_flexion_right"></td>
                            <td><input type="text" class="ocupation-table-input" id="knee_flexion_left" name="knee_flexion_left"></td>
                            <td>    <select name="knee_flexion_pain_degree" id="knee_flexion_pain_degree" class="form-control">
                                <option value=""></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select></td>
                        </tr>

                        <tr>
                            <th class="table-primary">გაშლა</th>
                            <td><input type="text" class="ocupation-table-input" id="unfold_right_arom" name="unfold_right_arom"></td>
                            <td><input type="text" class="ocupation-table-input" id="unfold_right_prom" name="unfold_right_prom"></td>
                            <td><input type="text" class="ocupation-table-input" id="unfold_left_arom" name="unfold_left_arom"></td>
                            <td><input type="text" class="ocupation-table-input" id="unfold_left_prom" name="unfold_left_prom"></td>
                            <td>
                                <select name="unfold_marking_crepitation" id="unfold_marking_crepitation" class="form-control ">
                                <option value=""></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </td>
                            <td><input type="text" class="ocupation-table-input" id="unfold_mmt" name="unfold_mmt"></td>
                            <td><input type="text" class="ocupation-table-input" id="unfold_right" name="unfold_right"></td>
                            <td><input type="text" class="ocupation-table-input" id="unfold_left" name="unfold_left"></td>
                            <td>    <select name="unfold_pain_degree" id="unfold_pain_degree" class="form-control">
                                <option value=""></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select></td>
                        </tr>
                        <tr>
                            <th class="table-primary">ბარძ.მოხრა</th>
                            <td><input type="text" class="ocupation-table-input" id="thigh_bending_right_arom" name="thigh_bending_right_arom"></td>
                            <td><input type="text" class="ocupation-table-input" id="thigh_bending_right_prom" name="thigh_bending_right_prom"></td>
                            <td><input type="text" class="ocupation-table-input" id="thigh_bending_left_arom" name="thigh_bending_left_arom"></td>
                            <td><input type="text" class="ocupation-table-input" id="thigh_bending_left_prom" name="thigh_bending_left_prom"></td>
                            <td>
                                <select name="thigh_bending_marking_crepitation" id="thigh_bending_marking_crepitation" class="form-control ">
                                <option value=""></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </td>
                            <td><input type="text" class="ocupation-table-input" id="thigh_bending_mmt" name="thigh_bending_mmt"></td>
                            <td><input type="text" class="ocupation-table-input" id="thigh_bending_right" name="thigh_bending_right"></td>
                            <td><input type="text" class="ocupation-table-input" id="thigh_bending_left" name="thigh_bending_left"></td>
                            <td>    <select name="thigh_bending_pain_degree" id="thigh_bending_pain_degree" class="form-control">
                                <option value=""></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select></td>
                        </tr>

                        <tr>
                            <th class="table-primary">გაშლა</th>
                            <td><input type="text" class="ocupation-table-input" id="unfold2_right_arom" name="unfold2_right_arom"></td>
                            <td><input type="text" class="ocupation-table-input" id="unfold2_right_prom" name="unfold2_right_prom"></td>
                            <td><input type="text" class="ocupation-table-input" id="unfold2_left_arom" name="unfold2_left_arom"></td>
                            <td><input type="text" class="ocupation-table-input" id="unfold2_left_prom" name="unfold2_left_prom"></td>
                            <td>
                                <select name="unfold2_marking_crepitation" id="unfold2_marking_crepitation" class="form-control ">
                                <option value=""></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </td>
                            <td><input type="text" class="ocupation-table-input" id="unfold2_mmt" name="unfold2_mmt"></td>
                            <td><input type="text" class="ocupation-table-input" id="unfold2_right" name="unfold2_right"></td>
                            <td><input type="text" class="ocupation-table-input" id="unfold2_left" name="unfold2_left"></td>
                            <td>    <select name="unfold2_pain_degree" id="unfold2_pain_degree" class="form-control">
                                <option value=""></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select></td>
                        </tr>

                        <tr>
                            <th class="table-primary">აბდუქც.</th>
                            <td><input type="text" class="ocupation-table-input" id="abduction_right_arom" name="abduction_right_arom"></td>
                            <td><input type="text" class="ocupation-table-input" id="abduction_right_prom" name="abduction_right_prom"></td>
                            <td><input type="text" class="ocupation-table-input" id="abduction_left_arom" name="abduction_left_arom"></td>
                            <td><input type="text" class="ocupation-table-input" id="abduction_left_prom" name="abduction_left_prom"></td>
                            <td>
                                <select name="abduction_marking_crepitation" id="abduction_marking_crepitation" class="form-control ">
                                <option value=""></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </td>
                            <td><input type="text" class="ocupation-table-input" id="abduction_mmt" name="abduction_mmt"></td>
                            <td><input type="text" class="ocupation-table-input" id="abduction_right" name="abduction_right"></td>
                            <td><input type="text" class="ocupation-table-input" id="abduction_left" name="abduction_left"></td>
                            <td>    <select name="abduction_pain_degree" id="abduction_pain_degree" class="form-control">
                                <option value=""></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select></td>
                        </tr>
                        <tr>
                            <th class="table-primary">ადუქც.</th>
                            <td><input type="text" class="ocupation-table-input" id="adduction_right_arom" name="adduction_right_arom"></td>
                            <td><input type="text" class="ocupation-table-input" id="adduction_right_prom" name="adduction_right_prom"></td>
                            <td><input type="text" class="ocupation-table-input" id="adduction_left_arom" name="adduction_left_arom"></td>
                            <td><input type="text" class="ocupation-table-input" id="adduction_left_prom" name="adduction_left_prom"></td>
                            <td>
                                <select name="adduction_marking_crepitation" id="adduction_marking_crepitation" class="form-control ">
                                <option value=""></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </td>
                            <td><input type="text" class="ocupation-table-input" id="adduction_mmt" name="adduction_mmt"></td>
                            <td><input type="text" class="ocupation-table-input" id="adduction_right" name="adduction_right"></td>
                            <td><input type="text" class="ocupation-table-input" id="adduction_left" name="adduction_left"></td>
                            <td>    <select name="adduction_pain_degree" id="adduction_pain_degree" class="form-control">
                                <option value=""></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select></td>
                        </tr>

                        <tr>
                            <th class="table-primary">გარეთ როტაც.</th>
                            <td><input type="text" class="ocupation-table-input" id="outside_rotation_right_arom" name="outside_rotation_right_arom"></td>
                            <td><input type="text" class="ocupation-table-input" id="outside_rotation_right_prom" name="outside_rotation_right_prom"></td>
                            <td><input type="text" class="ocupation-table-input" id="outside_rotation_left_arom" name="outside_rotation_left_arom"></td>
                            <td><input type="text" class="ocupation-table-input" id="outside_rotation_left_prom" name="outside_rotation_left_prom"></td>
                            <td>
                                <select name="outside_rotation_marking_crepitation" id="outside_rotation_marking_crepitation" class="form-control">
                                <option value=""></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </td>
                            <td><input type="text" class="ocupation-table-input" id="outside_rotation_mmt" name="outside_rotation_mmt"></td>
                            <td><input type="text" class="ocupation-table-input" id="outside_rotation_right" name="outside_rotation_right"></td>
                            <td><input type="text" class="ocupation-table-input" id="outside_rotation_left" name="outside_rotation_left"></td>
                            <td>    <select name="outside_rotation_pain_degree" id="outside_rotation_pain_degree" class="form-control">
                            <option value=""></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select></td>
                        </tr>

                        <tr>
                            <th class="table-primary">შიგნით როტაც.</th>
                            <td><input type="text" class="ocupation-table-input" id="inside_rotation_right_arom" name="inside_rotation_right_arom"></td>
                            <td><input type="text" class="ocupation-table-input" id="inside_rotation_right_prom" name="inside_rotation_right_prom"></td>
                            <td><input type="text" class="ocupation-table-input" id="inside_rotation_left_arom" name="inside_rotation_left_arom"></td>
                            <td><input type="text" class="ocupation-table-input" id="inside_rotation_left_prom" name="inside_rotation_left_prom"></td>
                            <td>
                                <select name="inside_rotation_marking_crepitation" id="inside_rotation_marking_crepitation" class="form-control">
                                <option value=""></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </td>
                            <td><input type="text" class="ocupation-table-input" id="inside_rotation_mmt" name="inside_rotation_mmt"></td>
                            <td><input type="text" class="ocupation-table-input" id="inside_rotation_right" name="inside_rotation_right"></td>
                            <td><input type="text" class="ocupation-table-input" id="inside_rotation_left" name="inside_rotation_left"></td>
                            <td>    <select name="inside_rotation_pain_degree" id="inside_rotation_pain_degree" class="form-control">
                                <option value=""></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select></td>
                        </tr>
                    </tbody>
                </table>
                </form>
            </div>

        </div>
    </div>
    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
        <button type="button" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1" onclick="InsertPhysicalTherapy(this.id)" id="insert-physical-detail"><i class="fa fa-edit"
                aria-hidden="true"></i> შენახვა</button>
        <button type="button" class="btn btn-light" id="user-register-reject" onclick="getReabilitation(this.id)"
            data-toggle="tab" href="#reabilitation-tab-content" aria-controls="linkOpt1"><i class="fa fa-ban"
                aria-hidden="true"></i> გაუქმება</button>
    </div>

    </div>

