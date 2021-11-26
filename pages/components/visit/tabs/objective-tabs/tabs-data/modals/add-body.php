<form action="" method="post" id="body-form">
    <div class="col-12">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label>მინისებრი სხეული</label>
                    <select class="form-control" name="vitreous_body" id="vitreous_body">
                        <option></option>
                        <option value="1">გამჭვირვალე</option>
                        <option value="2">ერთეული შემღვრევები</option>
                        <option value="3">ანთებადი ინფილტრატი </option>
                        <option value="4">ჰემოფთალმი </option>
                        <option value="5">შვარტა </option>
                        <option value="6">თიაქარი </option>
                        <option value="7">სხვა</option>
                    </select>
                </div>
            </div>



            <div class="col-6">
                <div class="form-group">
                    <label>ლოკაცია</label>
                    <select class="form-control" name="vitreous_body_location"  id="vitreous_body_location">
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
                        <label for="vitreous_body_text">კომენტარი</label>
                        <textarea name="vitreous_body_text" class="form-control" placeholder="კომენტარი"
                            id="vitreous_body_text"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" id="mbody_id" name="mbody_id">
</form>
