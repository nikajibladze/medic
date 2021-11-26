<?php if (isset($_POST["id"])) {
    $id = $_POST["id"];

} else {
    http_response_code(404);
    header('location:http://medical.ge/404.php');
    die;
}?>
<div class="users-list-filter px-1">
    <form id="search-form">
        <div class="row border border-light rounded py-2 mb-2">
            <div class="col-12 col-sm-6 col-lg-2">
                <label for="users-list-verified">სტატუსი</label>
                <fieldset class="form-group">
                    <select class="form-control" id="users-list-verified" name="status">
                        <option value=""></option>
                        <option value="1">დასრულებული</option>
                        <option value="2">მიმდინარე</option>

                    </select>
                </fieldset>
            </div>


            <div class="col-12 col-sm-6 col-lg-3">
                <fieldset class="form-group">
                    <label for="basicInput1">სამედიცინო ვიზიტის ნომერი</label>
                    <input type="text" class="form-control" name="visit_number" id="basicInput1">
                </fieldset>
            </div>

            <div class="col-12 col-sm-6 col-lg-2">
                <fieldset class="form-group">
                    <label for="basicInput2">ისტორიის ნომერი</label>
                    <input type="text" class="form-control" name="history" id="basicInput2">
                </fieldset>
            </div>


            <div class="col-12 col-sm-6 col-lg-3">
                <fieldset class="form-group">
                    <label for="basicInput3">პირადი ნომერი</label>
                    <input type="number" class="form-control" name="personal" id="basicInput3">
                </fieldset>
            </div>
            <div class="col-12 col-sm-6 col-lg-2 d-flex align-items-center">
                <button type="button" onclick="search()" class="btn btn-block btn-primary glow">ძებნა <i
                        class="fa fa-search" aria-hidden="true"></i></button>
            </div>
        </div>
    </form>
</div>
