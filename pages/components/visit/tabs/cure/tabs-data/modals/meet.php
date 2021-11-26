<form action="" method="post" id="add-meet-form">
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label>სტრ. ერთეული</label><br>
                <select class="form-control select2" name="structural_unit" id="structural_unit">
                    <option></option>
                    <option value="1">123</option>
                    <option value="2">333222</option>
                    <option value="3">44344343</option>
                </select>
            </div>
        </div>

        <div class="col-6">
            <div class="form-group">
                <label>სპეციალობა</label><br>
                <select class="form-control select2" name="specialty" id="specialty">
                    <option></option>
                    <option value="1">123</option>
                    <option value="2">333222</option>
                    <option value="3">44344343</option>
                </select>
            </div>
        </div>



        <div class="col-6">
            <div class="form-group">
                <label>ადრესატი ექიმი</label>
                <select class="form-control select2" name="addressee_doctor" id="addressee_doctor">
                    <option></option>
                    <option value="1">ექიმი 1</option>
                    <option value="2">ექიმი 2</option>
                    <option value="3">ექიმი 3</option>
                    <option value="4">ექიმი 4</option>
                </select>
            </div>
        </div>



        <div class="col-6">

            <div class="form-group">
                <div class="controls">
                    <label>თარიღი</label>
                    <input type="text" class="form-control datepicker" placeholder="თარიღი" id="date_meeting" name="date_meeting" value="">
                    <div class="help-block"></div>
                </div>
            </div>
        </div>



        <div class="col-6">
            <div class="form-group">
                <label>მდგომარეობა</label><br>
                <select class="form-control select2" name="condition_meet" id="condition_meet">
                    <option></option>
                    <option value="1">გეგმიური</option>
                    <option value="2">სასწრაფო</option>
                </select>
            </div>
        </div>

        <div class="col-6">

            <div class="form-group">
                <div class="controls">
                    <label>ინფორმაცია</label>
                    <input type="text" class="form-control" placeholder="ინფორმაცია" id="meeting_information" name="meeting_information" value="">
                    <div class="help-block"></div>
                </div>
            </div>
        </div>
    <input type="hidden" name="meet_id" id="meet_id">

    </div>
</form>
