<?php if (isset($_POST["id"])) {
    $id = $_POST["id"];
} else {
    http_response_code(404);
    header('location:http://medical.ge/404.php');
    die;
}?>
<button type="button" id="visit-register" onclick="getVisitRegiter(this.id,1)" class="btn btn-primary btn-min-width mr-1 mb-1"><i class="fa fa-plus"></i> სამედიცინო ვიზიტის დამატება</button>
<table class="table table-striped table-bordered table-responsive table-hover" id="visits_table" style="width:100%">
                                                        <thead>
                                                        <tr>
                                                            <th>ვიზიტის ნომერი</th>
                                                            <th>რეგისტრაციის თარიღი</th>
                                                            <th>ისტორიის ნომერი</th>
                                                            <th>პირადი ნომერი</th>
                                                            <th>სახელი</th>
                                                            <th>გვარი</th>
                                                            <th>ექიმი</th>
                                                            <th>ექიმის სტრ. ერთეული</th>
                                                            <th>სტატუსი</th>
                                                            <th>ქმედება</th>
                                                        </tr>
                                                        </thead>

                                                    </table>
