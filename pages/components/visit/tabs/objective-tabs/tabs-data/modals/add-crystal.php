<form action="" method="post" id="crystal-form">
    <div class="col-12">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label>ბროლი</label>
                    <select class="form-control" name="broli" id="broli">
                        <option></option>
                        <option value="1">გამჭირვალე</option>
                        <option value="2">შემღვრეული</option>
                        <option value="3">შემღვრევა </option>
                        <option value="4">მდებარეობა </option>
                        <option value="5">სხვა </option>
                    </select>
                </div>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <label>გამჭირვალე</label>
                    <select class="form-control" name="transparent" id="transparent">
                        <option></option>
                        <option value="1">კი</option>
                        <option value="2">არა</option>
                    </select>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label>შემღვრევის გავრცელება</label>
                    <select class="form-control" name="distribution_turbidity" id="distribution_turbidity">
                        <option></option>
                        <option value="1">კაფსულირებული</option>
                        <option value="2">შრეობრივი</option>
                        <option value="3">ქერქოვანი</option>
                        <option value="4">ბირთვოვანი</option>
                        <option value="5">ტოტალური</option>
                    </select>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label>შემღვრევის ტიპი</label>
                    <select class="form-control" name="type_turbulence" id="type_turbulence">
                        <option></option>
                        <option value="1">დაწყებითი</option>
                        <option value="2">ინტენსიური</option>
                        <option value="3">დიფუზური</option>
                        <option value="4">რუხი</option>;
                        <option value="5">რძისფერი</option>
                    </select>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label>მდებარეობა</label>
                    <select class="form-control" name="place" id="place">
                        <option></option>
                        <option value="1">ეტოპია</option>
                        <option value="2">სუბლუქსაცია</option>
                        <option value="3">აფაკია</option>
                        <option value="4">არტიფაკია</option>
                    </select>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label>ლოკაცია</label>
                    <select class="form-control" name="location" id="location">
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
                        <label for="bruli_text">კომენტარი</label>
                        <textarea name="bruli_text" class="form-control" placeholder="კომენტარი"
                            id="bruli_text"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" id="crystal_id" name="crystal_id">
</form>
