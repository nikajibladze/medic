<form action="" method="post" id="add-medications-modal-form" autocomplete="off">
    <div class="row">



    <div class="col-6">
            <div class="form-group">
                <label>Product</label><br>
                <select class="form-control select2" name="product_id" id="product_id">
                    <option></option>

                </select>
            </div>
        </div>

        <div class="col-6">
            <div class="form-group">
                <label>გაცემის ტიპი</label><br>
                <select class="form-control select2" name="issuance_type" id="issuance_type">
                    <option></option>
                    <option value="1">I</option>
                    <option value="2">II </option>
                    <option value="3">III</option>
                </select>
            </div>
        </div>

        <div class="col-6">
            <div class="form-group">
                <label>წამლის ფორმა</label><br>
                <select class="form-control select2" name="dosage_form" id="dosage_form">
                    <option></option>
                    <option value="1">აბი</option>
                    <option value="2">ფლაკონი</option>
                    <option value="3">კაფსულა</option>
                    <option value="3">ცალი</option>
                </select>
            </div>
        </div>



        <div class="col-6">
            <div class="form-group">
                <label>ზომის ერთეული</label>
                <select class="form-control select2" id="units_measurement" name="units_measurement">
                    <option></option>
                    <option value="1">სმ 1</option>
                    <option value="2">დღე(ები)</option>
                    <option value="3">გრამი</option>
                </select>
            </div>
        </div>



        <div class="col-6">
            <div class="form-group">
                <div class="controls">
                    <label>რაოდენობა</label>
                    <input type="number" class="form-control" placeholder="რაოდენობა" id="quantity" name="quantity" value="">
                    <div class="help-block"></div>
                </div>
            </div>
        </div>
        <div class="col-6">

            <div class="form-group">
                <div class="controls">
                    <label>მიღების ფორმა</label>
                    <input type="text" class="form-control" placeholder="მიღების ფორმა" name="receipt_form" id="receipt_form" value="">
                    <div class="help-block"></div>
                </div>
            </div>
        </div>


    </div>
    <input type="hidden" name="medications_modal_id" id="medications_modal_id">
</form>
