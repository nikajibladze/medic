<form action="" method="post" id="badura-form">
    <div class="col-12">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label>ბადურა</label>
                    <select class="form-control" name="retina" id="retina">
                        <option></option>
                        <option value="1">მხედველობის ნერვის დვრილი</option>
                        <option value="2">საზღვრები</option>
                        <option value="3">არტერიები </option>
                        <option value="4">სისხლჩაქცევები </option>
                        <option value="5">დისტროფიები</option>
                        <option value="6">ექსუდატები</option>
                        <option value="7">გახლეჩა</option>
                        <option value="8">ლოკალიზაცია</option>
                        <option value="9">სხვა</option>
                    </select>
                </div>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <label>მხედველობის ნერვის დვრილი</label>
                    <select class="form-control" name="optic_nerve" id="optic_nerve">
                        <option></option>
                        <option value="1">ვარდისფერი</option>
                        <option value="2">ჰიპერემიული</option>
                        <option value="3">მოთეთრო-მორუხო </option>
                        <option value="4">შეშუპებული </option>
                        <option value="5">პრომინირებული</option>
                    </select>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label>საზღვრები</label>
                    <select class="form-control" name="boundaries" id="boundaries">
                        <option></option>
                        <option value="1">მკაფიო</option>
                        <option value="2">წაშლილი</option>
                    </select>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label>არტერიები</label>
                    <select class="form-control" name="arteries" id="arteries">
                        <option></option>
                        <option value="1">ნორმის ფარგლებში</option>
                        <option value="2">შევიწროებული</option>
                        <option value="3">გაფართოებული</option>
                    </select>
                </div>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <label>ვენები</label>
                    <select class="form-control" name="veins" id="veins">
                        <option></option>
                        <option value="1">ნორმის ფარგლებში</option>
                        <option value="2">შევიწროებული</option>
                        <option value="3">გაფართოებული</option>
                    </select>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label>სისხლჩაქცევები</label>
                    <select class="form-control" name="bruises" id="bruises">
                        <option></option>
                        <option value="1">რეტინალური</option>
                        <option value="2">პრერეტინალური</option>
                        <option value="3">სუბრეტინალური</option>
                    </select>
                </div>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <label>დისტროფიები</label>
                    <select class="form-control" name="dystrophies" id="dystrophies">
                        <option></option>
                        <option value="1">ბადისებური</option>
                        <option value="2">ეკვატორიალური</option>
                        <option value="3">ლოკოკინას კვალი</option>
                        <option value="4">ფიფქები</option>
                        <option value="5">სპილენძის მავთულის ფენომენი</option>
                        <option value="6">ვერცხლის მავთულის ფენომენი</option>
                        <option value="7">რეტინოშიზისი</option>
                        <option value="8">დრუზები</option>
                    </select>
                </div>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <label>ექსუდატები</label>
                    <select class="form-control" name="exudates" id="exudates">
                        <option></option>
                        <option value="1">მყარი</option>
                        <option value="2">თხევადი</option>
                        <option value="3">ჰემორაგიული</option>
                    </select>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label>გახლეჩვა</label>
                    <select class="form-control" name="rupture" id="rupture">
                        <option></option>
                        <option value="1">სარქვლისებური</option>
                        <option value="2">ნალისებური</option>
                        <option value="3">ხვრელოვანი მრგვალი</option>
                        <option value="4">ატიპური</option>
                    </select>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label>ლოკალიზაცია</label>
                    <select class="form-control" name="localization" id="localization">
                        <option></option>
                        <option value="1">დაკბილულ ხაზზე</option>
                        <option value="2">დაკბილული ხაზის უკან</option>
                        <option value="3">ეკვატორზე</option>
                        <option value="4">ეკვატორის უკან</option>
                        <option value="5">მაკულაზე</option>
                    </select>
                </div>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <label>ლოკაცია</label>
                    <select class="form-control" name="retina_location" id="retina_location">
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
                        <label for="retina_text">კომენტარი</label>
                        <textarea name="retina_text" class="form-control" placeholder="კომენტარი"
                            id="retina_text"></textarea>
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" value="" id="badura_id" name="badura_id">
</form>
