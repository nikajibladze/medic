<br>
<!-- users edit media object start -->
<div class="media mb-2">
    <a class="mr-2" href="#">
        <img src="app-assets/images/portrait/small/avatar-s-27.png" alt="users avatar"
            class="users-avatar-shadow rounded-circle" height="64" width="64">
    </a>
    <div class="media-body">
        <h4 class="media-heading">ოკუპაციური თერაპია - ჩანაწერის დამატება</h4>
        <div class="col-6 px-0 d-flex">
            <span class="btn btn-sm btn-primary mr-25">ისტორიის ნომერი</span>
            <span class="btn btn-sm btn-secondary"><?php echo strtotime(date("Y-m-d H:i:s")) ?></span>
        </div>
    </div>
</div>
<!-- users edit media object ends -->
<!-- users edit account form start -->
<form novalidate="" method="post" action="" id="reabilitation-ocupation-form" autocomplete="off">

    <div class="col-12">
        <div class="row">

            <div class="col-12">

                <h4 class="form-section"> <i class="fa fa-plus-circle" aria-hidden="true"></i> შექმნა</h4>
            </div>



            <div class="col-6">
                <div class="form-group">
                    <label>დომინანტი ხელი</label>
                    <select class="form-control select2" id="dominant_hand" name="dominant_hand">
                        <option></option>
                        <option value="1">მარჯვენა</option>
                        <option value="2">მარცხენა</option>

                    </select>
                </div>
            </div>




            <div class="col-6">
                <div class="form-group">
                    <label>ტკივილის შკალა</label>
                    <select class="form-control select2" name="pain_scale" id="pain_scale">
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

            <div class="col-12">

                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" value="" name="arom_prom">
                        <input type="checkbox" class="custom-control-input" value="1" name="arom_prom" id="arom_prom">
                        <label class="custom-control-label" for="arom_prom">AROM/PROM</label>
                    </div>
                </fieldset>
            </div>


            <div class="col-6">
                <br>
                <div class="form-group">
                    <label>ძალა ზედა კიდურში</label>
                    <select class="form-control select2" id="strength_upper_limb" name="strength_upper_limb">
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



            <div class="col-12">

                <div class="form-group">
                    <div class="controls">
                        <label for="patient_safety">პაციენტის უსაფრთხოება</label>
                        <textarea name="patient_safety" class="form-control" placeholder="პაციენტის უსაფრთხოება"
                            id="patient_safety"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-12">

                <div class="form-group">
                    <div class="controls">
                        <label for="sensitivity">მგრძნობელობა</label>
                        <textarea name="sensitivity" class="form-control" placeholder="მგრძნობელობა" id="sensitivity"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-12">

                <div class="form-group">
                    <div class="controls">
                        <label for="purpose_of_patient">პაციენტის მიზანი</label>
                        <textarea name="purpose_of_patient" class="form-control" placeholder="პაციენტის მიზანი" id="purpose_of_patient"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-12">

                <h4 class="form-section"> ADL’s ყოველდღიური აქტივობები</h4>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <label>ჭამა</label>
                    <select class="form-control select2" name="eating" id="eating">
                        <option></option>
                        <option value="1">დამოუკიდებლად</option>
                        <option value="2">დამხმარე საშუალებები</option>
                        <option value="3">ესაჭიროება დახმარება</option>
                        <option value="4">დამოკიდებულია</option>
                    </select>
                </div>
            </div>



            <div class="col-6">
                <div class="form-group">
                    <label>პირადი ჰიგიენა</label>
                    <select class="form-control select2" name="personal_hygiene" id="personal_hygiene">
                        <option></option>
                        <option value="1">დამოუკიდებლად</option>
                        <option value="2">დამხმარე საშუალებები</option>
                        <option value="3">ესაჭიროება დახმარება</option>
                        <option value="4">დამოკიდებულია</option>
                    </select>
                </div>
            </div>



            <div class="col-6">
                <div class="form-group">
                    <label>ზედა კიდურების დაბანა</label>
                    <select class="form-control select2" name="bathing_upper_limbs" id="bathing_upper_limbs">
                        <option></option>
                        <option value="1">დამოუკიდებლად</option>
                        <option value="2">დამხმარე საშუალებები</option>
                        <option value="3">ესაჭიროება დახმარება</option>
                        <option value="4">დამოკიდებულია</option>
                    </select>
                </div>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <label>ქვედა კიდურების დაბანა</label>
                    <select class="form-control select2" name="bathing_lower_limbs" id="bathing_lower_limbs">
                        <option></option>
                        <option value="1">დამოუკიდებლად</option>
                        <option value="2">დამხმარე საშუალებები</option>
                        <option value="3">ესაჭიროება დახმარება</option>
                        <option value="4">დამოკიდებულია</option>
                    </select>
                </div>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <label>ზედა კიდურზე ჩაცმა</label>
                    <select class="form-control select2" name="dress_upper_limb" id="dress_upper_limb">
                        <option></option>
                        <option value="1">დამოუკიდებლად</option>
                        <option value="2">დამხმარე საშუალებები</option>
                        <option value="3">ესაჭიროება დახმარება</option>
                        <option value="4">დამოკიდებულია</option>
                    </select>
                </div>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <label>ქვედა კიდურზე ჩაცმა</label>
                    <select class="form-control select2" name="dress_lower_limb" id="dress_lower_limb">
                        <option></option>
                        <option value="1">დამოუკიდებლად</option>
                        <option value="2">დამხმარე საშუალებები</option>
                        <option value="3">ესაჭიროება დახმარება</option>
                        <option value="4">დამოკიდებულია</option>
                    </select>
                </div>
            </div>


            <div class="col-12">

                <div class="form-group">
                    <div class="controls">
                        <label for="transfer">ტრანსფერი</label>
                        <textarea name="transfer" class="form-control" placeholder="ტრანსფერი" id="transfer"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>



            <div class="col-12">

                <h4 class="form-section">Instrumental ADL’s</h4>
            </div>


            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="cooking">
                        <input type="checkbox" class="custom-control-input" value="1" name="cooking" id="cooking">
                        <label class="custom-control-label" for="cooking">საჭმლის მომზადება</label>
                    </div>
                </fieldset>
            </div>


            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                    <input type="hidden" name="cleaning" value="">
                        <input type="checkbox" class="custom-control-input" value="1" name="cleaning" id="cleaning">
                        <label class="custom-control-label" for="cleaning">დასუფთავება</label>
                    </div>
                </fieldset>
            </div>


            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                    <input type="hidden" name="washing" value="">
                        <input type="checkbox" class="custom-control-input" value="1" name="washing" id="washing">
                        <label class="custom-control-label" for="washing">სარეცხი</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                    <input type="hidden" name="communication" value="">
                        <input type="checkbox" class="custom-control-input" value="1" name="communication" id="communication">
                        <label class="custom-control-label" for="communication">კომუნიკაცია</label>
                    </div>
                </fieldset>
            </div>


            <div class="col-12">
                <br>
                <fieldset>
                    <div class="custom-control custom-checkbox">
                    <input type="hidden" name="driving_car" value="">
                        <input type="checkbox" class="custom-control-input" value="1" name="driving_car" id="driving_car">
                        <label class="custom-control-label" for="driving_car">მანქანის მართვა</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">
                <br>

                <div class="form-group">
                    <div class="controls">
                        <label for="shopping">საყიდლები</label>
                        <textarea name="shopping" class="form-control" placeholder="საყიდლები" id="shopping"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>


            <div class="col-12">
                <div class="row">
                    <div class="col-6">
                        <div class="col-12">

                            <h4 class="form-section">მარცხენა მხრის სახსარი</h4>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label>გაშლა-ამოხრა</label>
                                    <input type="text" class="form-control" placeholder="გაშლა-ამოხრა" value=""
                                        required="" name="left_shoulder_unfold" id="left_shoulder_unfold">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label>აბდუქცია</label>
                                    <input type="text" class="form-control" placeholder="აბდუქცია" value="" id="left_shoulder_abduction" name="left_shoulder_abduction" required="">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label>ჰორიზონტალური გაშლა</label>
                                    <input type="text" class="form-control" name="left_shoulder_horizontal_unfolding" id="left_shoulder_horizontal_unfolding" placeholder="ჰორიზონტალური გაშლა" value=""
                                        required="">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label>ჰორიზონტალური მოხრა</label>
                                    <input type="text" class="form-control" name="left_shoulder_horizontal_bending" id="left_shoulder_horizontal_bending" placeholder="ჰორიზონტალური მოხრა" value=""
                                        required="">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label>შიგნით როტაცია</label>
                                    <input type="text" class="form-control" name="left_shoulder_rotate_inside" id="left_shoulder_rotate_inside" placeholder="შიგნით როტაცია" value=""
                                        required="">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label>გარეთ როტაცია</label>
                                    <input type="text" class="form-control" name="left_shoulder_out_rotation" id="left_shoulder_out_rotation" placeholder="გარეთ როტაცია" value=""
                                        required="">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-6">
                        <div class="col-12">

                            <h4 class="form-section">მარჯვენა მხრის სახსარი</h4>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label>გაშლა-ამოხრა</label>
                                    <input type="text" class="form-control" placeholder="გაშლა-ამოხრა" id="right_shoulder_unfold" name="right_shoulder_unfold" value=""
                                        required="">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label>აბდუქცია</label>
                                    <input type="text" class="form-control" placeholder="აბდუქცია" name="right_shoulder_abduction" id="right_shoulder_abduction" value="" required="">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label>ჰორიზონტალური გაშლა</label>
                                    <input type="text" class="form-control" name="right_shoulder_horizontal_unfolding" id="right_shoulder_horizontal_unfolding" placeholder="ჰორიზონტალური გაშლა" value=""
                                        required="">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label>ჰორიზონტალური მოხრა</label>
                                    <input type="text" class="form-control" name="right_shoulder_horizontal_bending" id="right_shoulder_horizontal_bending" placeholder="ჰორიზონტალური მოხრა" value=""
                                        required="">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label>შიგნით როტაცია</label>
                                    <input type="text" class="form-control" name="right_shoulder_rotate_inside" id="right_shoulder_rotate_inside" placeholder="შიგნით როტაცია" value=""
                                        required="">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label>გარეთ როტაცია</label>
                                    <input type="text" class="form-control" name="right_shoulder_out_rotation" id="right_shoulder_out_rotation" placeholder="გარეთ როტაცია" value=""
                                        required="">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>



            <div class="col-12">
                <div class="row">
                    <div class="col-6">
                        <div class="col-12">

                            <h4 class="form-section">მარცხენა იდაყვის სახსარი/წინამხარი</h4>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label>გაშლა/მოხრა</label>
                                    <input type="text" class="form-control" name="left_elbow_unfold" id="left_elbow_unfold" placeholder="გაშლა/მოხრა" value=""
                                        required="">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label>პრონაცია/სუპინაცია</label>
                                    <input type="text" class="form-control" name="left_elbow_pronation_supination" id="left_elbow_pronation_supination" placeholder="პრონაცია/სუპინაცია" value=""
                                        required="">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-6">
                        <div class="col-12">

                            <h4 class="form-section">მარჯვენა იდაყვის სახსარი/წინამხარი</h4>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label>გაშლა/მოხრა</label>
                                    <input type="text" class="form-control" name="right_elbow_unfold" id="right_elbow_unfold" placeholder="გაშლა/მოხრა" value=""
                                        required="">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label>პრონაცია/სუპინაცია</label>
                                    <input type="text" class="form-control" name="right_elbow_pronation_supination" id="right_elbow_pronation_supination" placeholder="პრონაცია/სუპინაცია" value=""
                                        required="">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>


            <div class="col-12">
                <div class="row">
                    <div class="col-6">
                        <div class="col-12">

                            <h4 class="form-section">მარცხენა სხივ-მაჯის სახსარი</h4>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label>გაშლა/მოხრა</label>
                                    <input type="text" class="form-control" name="left_wrist_unfold" id="left_wrist_unfold" placeholder="გაშლა/მოხრა" value=""
                                        required="">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label>ულნარული დევიაცია</label>
                                    <input type="text" class="form-control" name="left_wrist_ulnar_deviation" id="left_wrist_ulnar_deviation" placeholder="ულნარული დევიაცია" value=""
                                        required="">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label>რადიალური დევიაცია</label>
                                    <input type="text" class="form-control" name="left_wrist_radial_deviation" id="left_wrist_radial_deviation" placeholder="რადიალური დევიაცია" value=""
                                        required="">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                        </div>



                    </div>
                    <div class="col-6">
                        <div class="col-12">

                            <h4 class="form-section">მარჯვენა სხივ-მაჯის სახსარი</h4>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label>გაშლა/მოხრა</label>
                                    <input type="text" class="form-control" name="right_wrist_unfold" id="right_wrist_unfold" placeholder="გაშლა/მოხრა" value=""
                                        required="">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label>ულნარული დევიაცია</label>
                                    <input type="text" class="form-control" name="right_wrist_ulnar_deviation" id="right_wrist_ulnar_deviation" placeholder="ულნარული დევიაცია" value=""
                                        required="">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label>რადიალური დევიაცია</label>
                                    <input type="text" class="form-control" id="right_wrist_radial_deviation" name="right_wrist_radial_deviation" placeholder="რადიალური დევიაცია" value=""
                                        required="">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                        </div>






            <input type="hidden" id="ocupation_id" name="ocupation_id">
                    </div>

                </div>
            </div>



        </div>
    </div>

    </form>

    <form action="" method="post" id="ocupation-right-form" autocomplete="off">
    <div class="col-12">
                <table class="table table-bordered" id="therapy-table">
                    <thead>
                        <tr class="table-primary">
                            <th>მარჯვენა</th>
                            <th>TH I</th>
                            <th>IF II</th>
                            <th>MF III </th>
                            <th>RF IV </th>
                            <th>SF V</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="table-primary">MCP</th>
                            <td class="ocupation-table-td"><input type="text" class="ocupation-table-input" id="mcp_th" name="mcp_th"></td>
                            <td class="ocupation-table-td"><input type="text" class="ocupation-table-input" id="mcp_if" name="mcp_if"></td>
                            <td class="ocupation-table-td"><input type="text" class="ocupation-table-input" id="mcp_mf" name="mcp_mf"></td>
                            <td class="ocupation-table-td"><input type="text" class="ocupation-table-input" id="mcp_rf" name="mcp_rf"></td>
                            <td class="ocupation-table-td"><input type="text" class="ocupation-table-input" id="mcp_sf" name="mcp_sf"></td>

                        </tr>
                        <tr>
                            <th class="table-primary">PIP</th>
                            <td class="ocupation-table-td"><input type="text" class="ocupation-table-input" id="pip_th" name="pip_th"></td>
                            <td class="ocupation-table-td"><input type="text" class="ocupation-table-input" id="pip_if" name="pip_if"></td>
                            <td class="ocupation-table-td"><input type="text" class="ocupation-table-input" id="pip_mf" name="pip_mf"></td>
                            <td class="ocupation-table-td"><input type="text" class="ocupation-table-input" id="pip_rf" name="pip_rf"></td>
                            <td class="ocupation-table-td"><input type="text" class="ocupation-table-input" id="pip_sf" name="pip_sf"></td>

                        </tr>
                        <tr>
                            <th class="table-primary">DIP</th>
                            <td class="ocupation-table-td"><input type="text" class="ocupation-table-input" id="dip_th" name="dip_th"></td>
                            <td class="ocupation-table-td"><input type="text" class="ocupation-table-input" id="dip_if" name="dip_if"></td>
                            <td class="ocupation-table-td"><input type="text" class="ocupation-table-input" id="dip_mf" name="dip_mf"></td>
                            <td class="ocupation-table-td"><input type="text" class="ocupation-table-input" id="dip_rf" name="dip_rf"></td>
                            <td class="ocupation-table-td"><input type="text" class="ocupation-table-input" id="dip_sf" name="dip_sf"></td>

                        </tr>




                    </tbody>
                </table>

            </div>
</form>

<form action="" method="post" id="ocupation-left-form"  autocomplete="off">
            <div class="col-12">
                <br>
                <table class="table table-bordered" id="therapy-table">
                    <thead>
                        <tr class="table-primary">
                        <th>მარჯვენა</th>
                            <th>TH I</th>
                            <th>IF II</th>
                            <th>MF III </th>
                            <th>RF IV </th>
                            <th>SF V</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="table-primary">MCP</th>
                            <td class="ocupation-table-td"><input type="text" class="ocupation-table-input" id="mcp_th_left" name="mcp_th"></td>
                            <td class="ocupation-table-td"><input type="text" class="ocupation-table-input" id="mcp_if_left" name="mcp_if"></td>
                            <td class="ocupation-table-td"><input type="text" class="ocupation-table-input" id="mcp_mf_left" name="mcp_mf"></td>
                            <td class="ocupation-table-td"><input type="text" class="ocupation-table-input" id="mcp_rf_left" name="mcp_rf"></td>
                            <td class="ocupation-table-td"><input type="text" class="ocupation-table-input" id="mcp_sf_left" name="mcp_sf"></td>
                        </tr>
                        <tr>
                            <th class="table-primary">PIP</th>
                            <td class="ocupation-table-td"><input type="text" class="ocupation-table-input" id="pip_th_left" name="pip_th"></td>
                            <td class="ocupation-table-td"><input type="text" class="ocupation-table-input" id="pip_if_left" name="pip_if"></td>
                            <td class="ocupation-table-td"><input type="text" class="ocupation-table-input" id="pip_mf_left" name="pip_mf"></td>
                            <td class="ocupation-table-td"><input type="text" class="ocupation-table-input" id="pip_rf_left" name="pip_rf"></td>
                            <td class="ocupation-table-td"><input type="text" class="ocupation-table-input" id="pip_sf_left" name="pip_sf"></td>
                        </tr>
                        <tr>
                            <th class="table-primary">DIP</th>
                            <td class="ocupation-table-td"><input type="text" class="ocupation-table-input" id="dip_th_left" name="dip_th"></td>
                            <td class="ocupation-table-td"><input type="text" class="ocupation-table-input" id="dip_if_left" name="dip_if"></td>
                            <td class="ocupation-table-td"><input type="text" class="ocupation-table-input" id="dip_mf_left" name="dip_mf"></td>
                            <td class="ocupation-table-td"><input type="text" class="ocupation-table-input" id="dip_rf_left" name="dip_rf"></td>
                            <td class="ocupation-table-td"><input type="text" class="ocupation-table-input" id="dip_sf_left" name="dip_sf"></td>

                        </tr>




                    </tbody>
                </table>

            </div>
</form>


    <input type="hidden" id="ocupation_id" name="ocupation_id">
    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
        <button type="button" onclick="InsertOcupation(this.id)" id="insert-ocupation-form"  class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1"><i class="fa fa-edit"
                aria-hidden="true"></i> შენახვა</button>
        <button type="button" class="btn btn-light" id="user-register-reject" onclick="getReabilitation(this.id)"
            data-toggle="tab" href="#reabilitation-tab-content" aria-controls="linkOpt1"><i class="fa fa-ban"
                aria-hidden="true"></i> გაუქმება</button>
    </div>

    </div>



