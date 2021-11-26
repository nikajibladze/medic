<form action="" method="post" id="sclera-form">
    <div class="col-12">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label>სკლერა</label>
                    <select class="form-control" id="sclera_type" name="sclera_type">
                        <option></option>
                        <option value="1">სკლერა</option>
                        <option value="2">დისკოლორაცია კეროვანი</option>
                        <option value="3">დისკოლორაცია დიფუზური </option>
                        <option value="4">სხვა </option>
                    </select>
                </div>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <label>სკლერა</label>
                    <select class="form-control" id="sclera" name="sclera">
                        <option></option>
                        <option value="1">უცვლელი</option>
                        <option value="2">ჰიპერემიული</option>
                        <option value="3">მუქი იისფერი</option>
                        <option value="4">მორუხო</option>
                        <option value="5">კვანძოვანი სიწითლე</option>
                        <option value="6">სტაფილომა</option>
                    </select>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label>დისკოლორაცია კეროვანი</label>
                    <select class="form-control" id="discoloration_focal" name="discoloration_focal">
                        <option></option>
                        <option value="1">ჩამოშლა</option>
                        <option value="2">ჰემოქრომატოზი</option>
                    </select>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label>დისკოლორაცია დიფუზური</label>
                    <select class="form-control" id="discoloration_diffuse" name="discoloration_diffuse">
                        <option></option>
                        <option value="1">ყვითელი</option>
                        <option value="2">ცისფერი</option>
                    </select>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label>ლოკაცია</label>
                    <select class="form-control" id="sclera_location" name="sclera_location">
                        <option></option>
                        <option value="1">D</option>
                        <option value="2">S</option>
                        <option value="3">DS</option>
                    </select>
                </div>
            </div>

            <div class="col-12">
                <br>
                <div class="form-group">
                    <div class="controls">
                        <label for="sclera_text">კომენტარი</label>
                        <textarea name="sclera_text" class="form-control" placeholder="კომენტარი"
                            id="sclera_text"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" id="sclera_id" name="sclera_id">
</form>
