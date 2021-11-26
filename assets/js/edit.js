function editAbuse(id) {

    $.ajax({
        type: "POST",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_abuse": "get_abuse"
        },
        dataType: "html",
        success: function (data) {
            var person = JSON.parse(data);
            $.each(person, function (item, value) {
                var record_id = value.id;
                $("#edit_id").val(record_id);
                $("#abuse_text").val(value.abuse_text);
                $("#no_abuse").attr("checked", value.no_abuse);
                $("#allergy").attr("checked", value.allergy);
                $("#medicaments").attr("checked", value.medicaments);
                $("#medicaments_text").val(value.medicaments_text);
                $("#allergy_text").val(value.allergy_text);
                $("#tobacco").attr("checked", value.tobacco);
                $("#alcohol").attr("checked", value.alcohol);
                $("#drugs").attr("checked", value.drugs);
                $("#bad_habits_other").attr("checked", value.bad_habits_other);
                $("#bad_habits_text").val(value.bad_habits_text);
                $("#ischemic_heart").attr("checked", value.ischemic_heart);
                $("#hypertensive_disease").attr("checked", value.hypertensive_disease);
                $("#blood_diseases_other").attr("checked", value.blood_diseases_other);
                $("#asthma").attr("checked", value.asthma);
                $("#lung_disease").attr("checked", value.lung_disease);
                $("#respiratory_system_other").attr("checked", value.respiratory_system_other);
                $("#blood_diseases_text").val(value.blood_diseases_text);
                $("#respiratory_system_text").val(value.respiratory_system_text);
                $("#diabetes").attr("checked", value.diabetes);
                $("#thyroid_disease").attr("checked", value.thyroid_disease);
                $("#endocrine_system_other").attr("checked", value.endocrine_system_other);
                $("#endocrine_system_text").val(value.endocrine_system_text);
                $("#epilepsy").attr("checked", value.epilepsy);
                $("#sleep_disturbance").attr("checked", value.sleep_disturbance);
                $("#nervous_system_other").attr("checked", value.nervous_system_other);
                $("#nervous_system_text").val(value.nervous_system_text);
                $("#mental_disorder").attr("checked", value.mental_disorder);
                $("#anemia_other").attr("checked", value.anemia_other);
                $("#mental_disorder_text").val(value.mental_disorder_text);
                $("#kidney_disease").attr("checked", value.kidney_disease);
                $("#urolithiasis").attr("checked", value.urolithiasis);
                $("#gynecological_diseases").attr("checked", value.gynecological_diseases);
                $("#genitourinary_system_other").attr("checked", value.genitourinary_system_other);
                $("#genitourinary_system_text").val(value.genitourinary_system_text);
                $("#gastric_ulcer").attr("checked", value.gastric_ulcer);
                $("#urolithiasis").attr("checked", value.urolithiasis);
                $("#cholelithiasis").attr("checked", value.cholelithiasis);
                $("#digestive_system_other").attr("checked", value.digestive_system_other);
                $("#digestive_system_text").val(value.digestive_system_text);
                $("#restriction_movement").attr("checked", value.restriction_movement);
                $("#arthropathies").attr("checked", value.arthropathies);
                $("#dorsopathies").attr("checked", value.dorsopathies);
                $("#muscular_diseases_other").attr("checked", value.muscular_diseases_other);
                $("#muscular_diseases_text").val(value.muscular_diseases_text);
                $("#tuberculosis").attr("checked", value.tuberculosis);
                $("#hepatitis").attr("checked", value.hepatitis);
                $("#hiv_infection").attr("checked", value.hiv_infection);
                $("#meningitis_Encephalitis").attr("checked", value.meningitis_Encephalitis);
                $("#malaria").attr("checked", value.malaria);
                $("#infectious_diseases_other").attr("checked", value.infectious_diseases_other);
                $("#infectious_diseases_text").val(value.infectious_diseases_text);
                $("#malignant_tumor").attr("checked", value.malignant_tumor);
                $("#malignant_tumor_text").val(value.malignant_tumor_text);
                $("#benign_tumor").attr("checked", value.benign_tumor);
                $("#benign_tumor_text").val(value.benign_tumor_text);
                $("#surgery").attr("checked", value.surgery);
                $("#surgery_text").val(value.surgery_text);
                $("#anesthesia").attr("checked", value.anesthesia);
                $("#anesthesia_text").val(value.anesthesia_text);
                $("#head_trauma").attr("checked", value.head_trauma);
                $("#loss_consciousness").attr("checked", value.loss_consciousness);
                $("#fracture").attr("checked", value.fracture);
                $("#self_harm").attr("checked", value.self_harm);
                $("#trauma_other").attr("checked", value.trauma_other);
                $("#trauma_text").val(value.trauma_text);
                $("#anemia").attr("checked", value.anemia);
                $("#anemia_text").val(value.anemia_text);
                $("#impairment_of_vision").attr("checked", value.impairment_of_vision);
                $("#impairment_of_vision_other").attr("checked", value.impairment_of_vision_other);
                $("#impairment_of_vision_text").val(value.impairment_of_vision_text);
                $("#hearing_impairment").attr("checked", value.hearing_impairment);
                $("#respiratory_disorders").attr("checked", value.respiratory_disorders);
                $("#ear_diseases_other").attr("checked", value.ear_diseases_other);
                $("#ear_diseases_text").val(value.ear_diseases_text);
                $("#Atashangi").attr("checked", value.Atashangi);
                $("#venereal_disease_other").attr("checked", value.venereal_disease_other);
                $("#venereal_disease_text").val(value.venereal_disease_text);
                $("#pregnancy_childbirth").attr("checked", value.pregnancy_childbirth);
                $("#multiplicity_pregnancy").val(value.multiplicity_pregnancy);
                $("#physiological").val(value.physiological);
                $("#abnormal").val(value.abnormal);
                $("#stillbirth").val(value.stillbirth);
                $("#arbitrary").val(value.arbitrary);
                $("#artificial").val(value.artificial);
                $("#pregnancy_childbirth_text").val(value.pregnancy_childbirth_text);
                $("#genetic_diseases").attr("checked", value.genetic_diseases);
                $("#genetic_diseases_text").val(value.genetic_diseases_text);
                $("#family_history").val(value.family_history);
                $("#working_conditions").val(value.working_conditions);
                $("#rest_conditions").val(value.rest_conditions);
                $("#nutritional_conditions").val(value.nutritional_conditions);
                $("#living_conditions").val(value.living_conditions);
                $("#harmful_factors").val(value.harmful_factors);
                $("#household_history_text").val(value.household_history_text);
                $("#abuse_anamnesis_text").val(value.abuse_anamnesis_text);
            });

        }
    });
}

function editParameters(id) {

    $.ajax({
        type: "POST",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_parameters": "get_parameters"
        },
        dataType: "html",
        success: function (data) {
            var person = JSON.parse(data);
            $.each(person, function (item, value) {
                var record_id = value.id;
                $("#parameters_id").val(record_id);
                $("#temperature").val(value.temperature);
                $("#system_pressure").val(value.system_pressure);
                $("#diast_pressure").val(value.diast_pressure);
                $("#pulse").val(value.pulse);
                $("#heart_rate").val(value.heart_rate);
                $("#oxygen_saturation").val(value.oxygen_saturation);
                $("#respiratory_rate").val(value.respiratory_rate);
                $("#patient_weight").val(value.patient_weight);
                $("#defecation").val(value.defecation);
                $("#fluid_released").val(value.fluid_released);
                $("#urine_excreted").val(value.urine_excreted);
                $("#fluid_taken").val(value.fluid_taken);
                $("#vital_options_text").val(value.vital_options_text);

            });

        }
    });
}

function editEat(id) {

    $.ajax({
        type: "POST",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_eat": "get_eat"
        },
        dataType: "html",
        success: function (data) {
            var person = JSON.parse(data);
            $.each(person, function (item, value) {
                $("#eat_id").val(value.id);
                $("#without_pathology").attr("checked", value.without_pathology);
                $("#breathing_act").attr("checked", value.breathing_act);
                $("#soft_abdomen").attr("checked", value.soft_abdomen);
                $("#abdomen_painless").attr("checked", value.abdomen_painless);
                $('#abdomen_painful option[value=' + value.abdomen_painful + ']').attr('selected', 'selected');
                $("#abdomen_deformation").attr("checked", value.abdomen_deformation);
                $("#abdomen_ascites").attr("checked", value.abdomen_ascites);
                $("#abdomen_liver").val(value.abdomen_liver);
                $('#abdomen_spleen option[value=' + value.abdomen_spleen + ']').attr('selected', 'selected');
                $("#Language_dry").attr("checked", value.Language_dry);
                $("#Language_nadebit").attr("checked", value.Language_nadebit);
                $("#Language_unadebo").attr("checked", value.Language_unadebo);
                $("#Language_hyperemic").attr("checked", value.Language_hyperemic);
                $("#Language_wet").attr("checked", value.Language_wet);
                $('#shield_irritation option[value=' + value.shield_irritation + ']').attr('selected', 'selected');
                $("#carey").attr("checked", value.carey);
                $("#murphy").attr("checked", value.murphy);
                $("#ortner").attr("checked", value.ortner);
                $("#bloomberg").attr("checked", value.bloomberg);
                $("#obraztsov").attr("checked", value.obraztsov);
                $("#voskresensky").attr("checked", value.voskresensky);
                $("#sitkovsky").attr("checked", value.sitkovsky);
                $('#nausea option[value=' + value.nausea + ']').attr('selected', 'selected');
                $('#vomiting option[value=' + value.vomiting + ']').attr('selected', 'selected');
                $("#vomiting_frequency").val(value.vomiting_frequency);
                $("#defecation_regular").attr("checked", value.defecation_regular);
                $("#defecation_irregular").attr("checked", value.defecation_irregular);
                $("#defecation_involuntary").attr("checked", value.defecation_involuntary);
                $("#times").val(value.defecation_multiplicity);
                $("#rectum_text").val(value.rectum_text);
                $("#feces_formed").attr("checked", value.feces_formed);
                $("#feces_unformed").attr("checked", value.feces_unformed);
                $("#feces_mucous").attr("checked", value.feces_mucous);
                $("#feces_bloody").attr("checked", value.feces_bloody);
                $("#feces_text").val(value.feces_text);




            });

        }
    });
}

function editAntropometry(id) {

    $.ajax({
        type: "POST",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_antropometry": "get_antropometry"
        },
        dataType: "html",
        success: function (data) {
            var person = JSON.parse(data);
            $.each(person, function (item, value) {
                $("#weight").val(value.weight);
                var record_id = value.id;
                $("#antropometry_id").val(record_id);
                $("#height").val(value.height);
                $("#body_mass").val(value.body_mass);
                $("#abdominal_circumference").val(value.abdominal_circumference);
                $("#head_circumference").val(value.head_circumference);
                $("#waist_circumference").val(value.waist_circumference);
                $("#height_sitting").val(value.height_sitting);
                $("#right_upper_limb").val(value.right_upper_limb);
                $("#left_upper_limb").val(value.left_upper_limb);
                $("#left_lower_limb").val(value.left_lower_limb);
                $("#right_lower_limb").val(value.right_lower_limb);
                $('#construction option[value=' + value.construction + ']').attr('selected', 'selected');
                $("#right_cluster_dynamometer").val(value.right_cluster_dynamometer);
                $("#left_cluster_dynamometer").val(value.left_cluster_dynamometer);
                $("#traction_force_dynamometer").val(value.traction_force_dynamometer);
                $("#spirometry").val(value.spirometry);
                $("#developmental_defect").val(value.developmental_defect);
                $("#at_rest").val(value.at_rest);
                $("#when_inhaling").val(value.when_inhaling);
                $("#on_exhalation").val(value.on_exhalation);
                $("#chest_circumference_text").val(value.chest_circumference_text);

            });

        }
    });

}

function editLimphatic(id) {

    $.ajax({
        type: "POST",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_limphatic": "get_limphatic"
        },
        dataType: "html",
        success: function (data) {
            var limpatic = JSON.parse(data);
            $.each(limpatic, function (item, value) {
                var record_id = value.id;
                $("#limphatic_id").val(record_id);
                $("#size").val(value.size);
                $("#without_pathology_l").attr("checked", value.without_pathology);
                $("#front_side_neck").attr("checked", value.front_side_neck);
                $("#back_side_neck").attr("checked", value.back_side_neck);
                $("#under_jaw").attr("checked", value.under_jaw);
                $('#peripheral_lymph_nodes option[value=' + value.peripheral_lymph_nodes + ']').attr('selected', 'selected');
                $("#peripheral_lymph_nodes select").val(value.peripheral_lymph_nodes).change();
                $("#sublingual_area").attr("checked", value.sublingual_area);
                $("#under_hips").attr("checked", value.under_hips);
                $("#around_abdomen").attr("checked", value.around_abdomen);
                $("#consistency").val(value.consistency);
                $("#pain").val(value.pain);
                $("#movement").val(value.movement);
                $("#other").val(value.other);
                $("#lymphatic_system_text").val(value.lymphatic_system_text);

            });

        }
    });

}

function editDeath(id) {

    $.ajax({
        type: "POST",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_death": "get_death"
        },
        dataType: "html",
        success: function (data) {
            var death = JSON.parse(data);
            $.each(death, function (item, value) {
                var record_id = value.id;
                $("#death_id").val(record_id);
                $("#breathing_stopped").attr("checked", value.breathing_stopped);
                $("#pulsation_main_arteries").attr("checked", value.pulsation_main_arteries);
                $("#heart_tones_not_heard").attr("checked", value.heart_tones_not_heard);
                $("#gugs_reaction_negative").attr("checked", value.gugs_reaction_negative);
                $("#death_presence").attr("checked", value.death_presence);
                $("#corneal_reaction").attr("checked", value.corneal_reaction);
                $("#corpse_spots").attr("checked", value.corpse_spots);
                $("#corpse_firing").attr("checked", value.corpse_firing);
                $("#before_corpse_arrives").attr("checked", value.before_corpse_arrives);
                $("#death_text").val(value.death_text);
                $("#death_presence").val(value.death_presence);


            });

        }
    });

}

function editSkin(id) {

    $.ajax({
        type: "POST",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_skin": "get_skin"
        },
        dataType: "html",
        success: function (data) {
            var death = JSON.parse(data);
            $.each(death, function (item, value) {
                var record_id = value.id;
                $("#skin_id").val(record_id);
                $("#without_pathology2").attr("checked", value.without_pathology);
                $("#within_norm").attr("checked", value.within_norm);
                $("#dew").attr("checked", value.dew);
                $("#hyperemic").attr("checked", value.hyperemic);
                $("#hem").attr("checked", value.hem);
                $('#turgor option[value=' + value.turgor + ']').attr('selected', 'selected');
                $("#cold").attr("checked", value.cold);
                $("#adhesive").attr("checked", value.adhesive);
                $("#rash").attr("checked", value.rash);
                $('#color option[value=' + value.color + ']').attr('selected', 'selected');
                $("#skin_text").val(value.skin_text);



            });

        }
    });

}

function editDriven(id) {

    $.ajax({
        type: "POST",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_driven": "get_driven"
        },
        dataType: "html",
        success: function (data) {
            var death = JSON.parse(data);
            $.each(death, function (item, value) {
                var record_id = value.id;
                $("#driven_id").val(record_id);
                $("#without_pathology").attr("checked", value.without_pathology);
                $('#muscular_development option[value=' + value.muscular_development + ']').attr('selected', 'selected');
                $('#movement_joints option[value=' + value.movement_joints + ']').attr('selected', 'selected');
                $("#musculoskeletal_system_text").val(value.musculoskeletal_system_text);

            });

        }
    });

}

function editEndocrine(id) {

    $.ajax({
        type: "POST",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_endocrine": "get_endocrine"
        },
        dataType: "html",
        success: function (data) {
            var death = JSON.parse(data);
            $.each(death, function (item, value) {
                var record_id = value.id;
                $("#endocrine_id").val(record_id);
                $("#without_pathology_e").attr("checked", value.without_pathology);
                $('#subcutaneous_adipose_tissue option[value=' + value.subcutaneous_adipose_tissue + ']').attr('selected', 'selected');
                $("#subcutaneous_text").val(value.subcutaneous_text);
                $('#hairs option[value=' + value.hairs + ']').attr('selected', 'selected');
                $('#correspond_sex option[value=' + value.correspond_sex + ']').attr('selected', 'selected');
                $("#endocrine_system_text").val(value.endocrine_system_text);
                $('#size option[value=' + value.size + ']').attr('selected', 'selected');
                $("#size_text").val(value.size_text);
                $("#consistency").val(value.consistency);
                $("#pain").val(value.pain);
                $("#pain_text").val(value.pain_text);

            });

        }
    });

}


function editBlood(id) {

    $.ajax({
        type: "POST",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_blood": "get_blood"
        },
        dataType: "html",
        success: function (data) {
            var death = JSON.parse(data);
            $.each(death, function (item, value) {
                $("#blood_id").val(value.id);
                $("#capillary_filling_time").val(value.capillary_filling_time);
                $("#estimated_blood_loss").val(value.estimated_blood_loss);
                $("#blood_circulation_text").val(value.blood_circulation_text);
                $("#pulse_at_rest").val(value.pulse_at_rest);
                $("#pulse_after_loading").val(value.pulse_after_loading);
                $("#pulse_after_3_minutes").val(value.pulse_after_3_minutes);
                $('#rhythm option[value=' + value.rhythm + ']').attr('selected', 'selected');
                $('#fill_in option[value=' + value.fill_in + ']').attr('selected', 'selected');
                $("#pulse_text").val(value.pulse_text);
                $("#pressure_at_rest").val(value.pressure_at_rest);
                $("#pressure_after_loading").val(value.pressure_after_loading);
                $("#pressure_after_3_minutes").val(value.pressure_after_3_minutes);
                $("#functional_test_text").val(value.functional_test_text);
                $("#pure_tones").attr("checked", value.pure_tones);
                $("#curved_tones").attr("checked", value.curved_tones);
                $("#clear_tones").attr("checked", value.clear_tones);
                $("#heart_text").val(value.heart_text);
                $("#boundaries_text").val(value.boundaries_text);

            });

        }
    });

}


function editBreathe(id) {

    $.ajax({
        type: "POST",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_breathe": "get_breathe"
        },
        dataType: "html",
        success: function (data) {
            var breathe = JSON.parse(data);
            $.each(breathe, function (item, value) {
                $("#pneumothorax").attr("checked", value.pneumothorax);
                $("#floating_chest").attr("checked", value.floating_chest);
                $("#breathe_id").val(value.id);
                $('#passage option[value=' + value.passage + ']').attr('selected', 'selected');
                $('#aspiration option[value=' + value.aspiration + ']').attr('selected', 'selected');
                $('#foreign_body option[value=' + value.foreign_body + ']').attr('selected', 'selected');
                $('#respiratory_disorders option[value=' + value.respiratory_disorders + ']').attr('selected', 'selected');
                $('#chest_excursion option[value=' + value.chest_excursion + ']').attr('selected', 'selected');
                $("#spirometry").val(value.spirometry);
                $('#cough option[value=' + value.cough + ']').attr('selected', 'selected');
                $('#vesicular option[value=' + value.vesicular + ']').attr('selected', 'selected');
                $('#bronchial option[value=' + value.bronchial + ']').attr('selected', 'selected');
                $('#weakened option[value=' + value.weakened + ']').attr('selected', 'selected');
                $("#pueruli").attr("checked", value.pueruli);
                $('#dry option[value=' + value.dry + ']').attr('selected', 'selected');
                $('#wet option[value=' + value.wet + ']').attr('selected', 'selected');
                $('#thin_vesicular option[value=' + value.thin_vesicular + ']').attr('selected', 'selected');
                $('#large_vesicular option[value=' + value.large_vesicular + ']').attr('selected', 'selected');
                $("#crepitation").attr("checked", value.crepitation);
                $("#inspirational").attr("checked", value.inspirational);
                $("#expiratory").attr("checked", value.expiratory);
                $("#whistling").attr("checked", value.whistling);
                $("#breath_crepitation").attr("checked", value.breath_crepitation);
                $("#stridor").attr("checked", value.stridor);
                $("#nadebi").attr("checked", value.nadebi);
                $("#unadebo").attr("checked", value.unadebo);
                $("#hyperemic").attr("checked", value.hyperemic);
                $("#tonsils_hyperemic").attr("checked", value.tonsils_hyperemic);
                $("#tonsils_hyperplastic").attr("checked", value.tonsils_hyperplastic);
                $('#sputum option[value=' + value.sputum + ']').attr('selected', 'selected');
                $('#sputum_color option[value=' + value.sputum_color + ']').attr('selected', 'selected');
                $('#sputum_consistency option[value=' + value.sputum_consistency + ']').attr('selected', 'selected');
                $('#sputum_composition option[value=' + value.sputum_composition + ']').attr('selected', 'selected');
                $("#sputum_text").val(value.sputum_text);


            });

        }
    });

}


function editPis(id) {

    $.ajax({
        type: "POST",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_pis": "get_pis"
        },
        dataType: "html",
        success: function (data) {
            var death = JSON.parse(data);
            $.each(death, function (item, value) {
                $("#patology-no").attr("checked", value.without_pathology);
                $("#pis_id").val(value.id);
                $('#urination option[value=' + value.urination + ']').attr('selected', 'selected');
                $('#kidney option[value=' + value.kidney + ']').attr('selected', 'selected');
                $('#shock_syndrome option[value=' + value.shock_syndrome + ']').attr('selected', 'selected');
                $('#pregnancy option[value=' + value.pregnancy + ']').attr('selected', 'selected');
                $('#discharge_from_genitals option[value=' + value.discharge_from_genitals + ']').attr('selected', 'selected');
                $("#genital_system_text").val(value.genital_system_text);

            });

        }
    });

}

function editAware(id) {

    $.ajax({
        type: "POST",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_aware": "get_aware"
        },
        dataType: "html",
        success: function (data) {
            var death = JSON.parse(data);
            $.each(death, function (item, value) {

                $("#without_pathology_aware").attr("checked", value.without_pathology);
                $("#aware_id").val(value.id);
                $("#halutsinatsia").attr("checked", value.hallucination);
                $("#skull_base_fracture").attr("checked", value.skull_base_fracture);
                $('#eyeballs option[value=' + value.eyeballs + ']').attr('selected', 'selected');
                $("#loss_of_consciousness").val(value.loss_of_consciousness);
                $('#avpu option[value=' + value.avpu + ']').attr('selected', 'selected');
                $('#open-eye option[value=' + value.open_eyes + ']').attr('selected', 'selected');
                $('#verbal option[value=' + value.verbal_speech + ']').attr('selected', 'selected');
                $('#motor option[value=' + value.motor_reaction + ']').attr('selected', 'selected');
                $("#glasgo_count").val(value.sum_of_results);
                $("#hidden_count").val(value.sum_of_results);
                $("#level_of_consciousness").val(value.level_of_consciousness);
                $("#field_of_consciousness").val(value.field_of_consciousness);
                $("#vegetative_nervous_system").val(value.vegetative_nervous_system);
                $("#mental_status").val(value.mental_status);
                $("#sleep").val(value.sleep);
                $("#glasgow_coma_scale_text").val(value.glasgow_coma_scale_text);

            });

        }
    });

}

function editNervousSystem(id) {

    $.ajax({
        type: "POST",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_nervous_system": "get_nervous_system"
        },
        dataType: "html",
        success: function (data) {
            var death = JSON.parse(data);
            $.each(death, function (item, value) {

                $("#without_pathology_nervous").attr("checked", value.without_pathology);
                $("#nervous_system_id").val(value.id);
                $("#aggressive").attr("checked", value.aggressive);
                $("#aggression_cannot_revealed").attr("checked", value.aggression_cannot_revealed);
                $("#aggression_physical").attr("checked", value.aggression_physical);
                $('#orientation_time option[value=' + value.orientation_time + ']').attr('selected', 'selected');
                $('#orientation_space option[value=' + value.orientation_space + ']').attr('selected', 'selected');
                $('#orientation_environment option[value=' + value.orientation_environment + ']').attr('selected', 'selected');
                $("#facial_asymmetry").attr("checked", value.facial_asymmetry);
                $("#speech_difficulty").attr("checked", value.speech_difficulty);
                $("#disruption_coordination").attr("checked", value.disruption_coordination);
                $("#skull_nerves").val(value.skull_nerves);
                $("#reflective_sphere").val(value.reflective_sphere);
                $("#driving_field").val(value.driving_field);
                $('#romberg_pose option[value=' + value.romberg_pose + ']').attr('selected', 'selected');
                $('#nose_finger_test option[value=' + value.nose_finger_test + ']').attr('selected', 'selected');
                $("#nervous_system_text").val(value.nervous_system_text);

            });

        }
    });

}


function editReflex(id) {

    $.ajax({
        type: "POST",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_reflex": "get_reflex"
        },
        dataType: "html",
        success: function (data) {
            var death = JSON.parse(data);
            $.each(death, function (item, value) {
                $("#without_pathology_reflex").attr("checked", value.without_pathology);
                $("#reflex_id").val(value.id);
                $('#kernig option[value=' + value.kernig + ']').attr('selected', 'selected');
                $('#babinski option[value=' + value.babinski + ']').attr('selected', 'selected');
                $('#muscle_tone option[value=' + value.muscle_tone + ']').attr('selected', 'selected');
                $("#neck_muscle_rigidity_reflex").attr("checked", value.neck_muscle_rigidity);
                $('#nystagmus option[value=' + value.nystagmus + ']').attr('selected', 'selected');
                $("#tonic_seizures").attr("checked", value.tonic_seizures);
                $("#clonic_seizures").attr("checked", value.clonic_seizures);
                $("#hypokinesia").attr("checked", value.hypokinesia);
                $("#hyperemic").attr("checked", value.hyperemic);
                $("#miosis").attr("checked", value.miosis);
                $("#mydriasis").attr("checked", value.mydriasis);
                $('#anisocoria option[value=' + value.anisocoria + ']').attr('selected', 'selected');
                $("#trism").attr("checked", value.trism);
                $('#photo_reaction_d option[value=' + value.photo_reaction_d + ']').attr('selected', 'selected');
                $('#photo_reaction_s option[value=' + value.photo_reaction_s + ']').attr('selected', 'selected');
                $("#reflex_attemps_text").val(value.reflex_attemps_text);

            });

        }
    });

}

function editVision(id) {

    $.ajax({
        type: "POST",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_vision": "get_vision"
        },
        dataType: "html",
        success: function (data) {
            var death = JSON.parse(data);
            $.each(death, function (item, value) {
                $("#without_pathology_vision").attr("checked", value.without_pathology);
                $("#vision_id").val(value.id);
                $("#sharpness_of_sight_d").val(value.sharpness_of_sight_d);
                $("#sharpness_of_sight_s").val(value.sharpness_of_sight_s);
                $("#ophthalmometry_d").val(value.ophthalmometry_d);
                $("#ophthalmometry_s").val(value.ophthalmometry_s);
                $("#refractometry_d").val(value.refractometry_d);
                $("#refractometry_s").val(value.refractometry_s);
                $("#tonometry_d").val(value.tonometry_d);
                $("#tonometry_s").val(value.tonometry_s);
                $('#structural option[value=' + value.structural + ']').attr('selected', 'selected');
                $('#atrophic option[value=' + value.atrophic + ']').attr('selected', 'selected');
                $('#hyperemic option[value=' + value.hyperemic + ']').attr('selected', 'selected');
                $('#swollen option[value=' + value.swollen + ']').attr('selected', 'selected');
                $('#posterior_sinuses option[value=' + value.posterior_sinuses + ']').attr('selected', 'selected');
                $('#coloboma option[value=' + value.coloboma + ']').attr('selected', 'selected');
                $('#rubeoz option[value=' + value.rubeoz + ']').attr('selected', 'selected');
                $('#iridosis option[value=' + value.iridosis + ']').attr('selected', 'selected');
                $('#nodes_pigmented option[value=' + value.nodes_pigmented + ']').attr('selected', 'selected');
                $('#nodes_koeppe option[value=' + value.nodes_koeppe + ']').attr('selected', 'selected');
                $('#nodes_busacca option[value=' + value.nodes_busacca + ']').attr('selected', 'selected');
                $('#aniridia option[value=' + value.aniridia + ']').attr('selected', 'selected');
                $('#within_norm option[value=' + value.within_norm + ']').attr('selected', 'selected');
                $('#deep option[value=' + value.deep + ']').attr('selected', 'selected');
                $('#narrow option[value=' + value.narrow + ']').attr('selected', 'selected');
                $('#precipitate option[value=' + value.precipitate + ']').attr('selected', 'selected');
                $('#endothermic_dust option[value=' + value.endothermic_dust + ']').attr('selected', 'selected');
                $('#cells option[value=' + value.cells + ']').attr('selected', 'selected');
                $('#hyphema option[value=' + value.hyphema + ']').attr('selected', 'selected');
                $('#sinecia option[value=' + value.sinecia + ']').attr('selected', 'selected');
                $('#round option[value=' + value.round + ']').attr('selected', 'selected');
                $('#correct option[value=' + value.correct + ']').attr('selected', 'selected');
                $('#wrong option[value=' + value.wrong + ']').attr('selected', 'selected');
                $('#anisocoria option[value=' + value.anisocoria + ']').attr('selected', 'selected');
                $('#correctopia option[value=' + value.correctopia + ']').attr('selected', 'selected');
                $('#pseudocoria option[value=' + value.pseudocoria + ']').attr('selected', 'selected');
                $('#mydriasis option[value=' + value.mydriasis + ']').attr('selected', 'selected');
                $('#miosis option[value=' + value.miosis + ']').attr('selected', 'selected');
                $('#light_reaction_stored option[value=' + value.light_reaction_stored + ']').attr('selected', 'selected');
                $('#light_reaction_dunea option[value=' + value.light_reaction_dunea + ']').attr('selected', 'selected');
                $('#light_reaction_is_not option[value=' + value.light_reaction_is_not + ']').attr('selected', 'selected');
            });

        }
    });

}



function editNose(id) {

    $.ajax({
        type: "POST",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_nose": "get_nose"
        },
        dataType: "html",
        success: function (data) {
            var death = JSON.parse(data);
            $.each(death, function (item, value) {
                $("#without_pathology_nose").attr("checked", value.without_pathology);
                $("#nose_id").val(value.id);
                $('#ear_ache option[value=' + value.ear_ache + ']').attr('selected', 'selected');
                $('#noise_in_ears option[value=' + value.noise_in_ears + ']').attr('selected', 'selected');
                $('#itching_in_ears option[value=' + value.itching_in_ears + ']').attr('selected', 'selected');
                $('#hyperemia option[value=' + value.hyperemia + ']').attr('selected', 'selected');
                $('#swelling option[value=' + value.swelling + ']').attr('selected', 'selected');
                $('#hemorrhage option[value=' + value.hemorrhage + ']').attr('selected', 'selected');
                $('#abnormal_discharge option[value=' + value.abnormal_discharge + ']').attr('selected', 'selected');
                $('#sulfur_plug option[value=' + value.sulfur_plug + ']').attr('selected', 'selected');
                $("#outer_ear_text").val(value.outer_ear_text);
                $('#perforation_of_plaque option[value=' + value.perforation_of_plaque + ']').attr('selected', 'selected');
                $('#light_reflex option[value=' + value.light_reflex + ']').attr('selected', 'selected');
                $('#fluid_cavity_board option[value=' + value.fluid_cavity_board + ']').attr('selected', 'selected');
                $('#granulations option[value=' + value.granulations + ']').attr('selected', 'selected');
                $('#middle_ear_hyperemia option[value=' + value.middle_ear_hyperemia + ']').attr('selected', 'selected');
                $("#middle_ear_text").val(value.middle_ear_text);
                $("#within_norm_nose").attr("checked", value.within_norm);
                $("#whispered").val(value.whispered);
                $("#voice_yogis_text").val(value.voice_yogis_text);
                $("#smell_text").val(value.smell_text);
                $('#hearing_loss_conductive option[value=' + value.hearing_loss_conductive + ']').attr('selected', 'selected');
                $('#hearing_loss_neurosensory option[value=' + value.hearing_loss_neurosensory + ']').attr('selected', 'selected');
                $('#hearing_loss_mixed option[value=' + value.hearing_loss_mixed + ']').attr('selected', 'selected');
                $("#hearing_text").val(value.hearing_text);
                $('#narrowed option[value=' + value.narrowed + ']').attr('selected', 'selected');
                $('#breathe_free option[value=' + value.breathe_free + ']').attr('selected', 'selected');
                $('#breathe_weakened option[value=' + value.breathe_weakened + ']').attr('selected', 'selected');
                $('#breathe_blocked option[value=' + value.breathe_blocked + ']').attr('selected', 'selected');
                $('#nose_discharge option[value=' + value.nose_discharge + ']').attr('selected', 'selected');
                $("#nose_text").val(value.nose_text);
                $('#breathe_weakened option[value=' + value.breathe_weakened + ']').attr('selected', 'selected');
                $('#breathe_blocked option[value=' + value.breathe_blocked + ']').attr('selected', 'selected');
                $('#nose_discharge option[value=' + value.nose_discharge + ']').attr('selected', 'selected');
                $("#nose_text").val(value.nose_text);
                $('#sinks_hyperemia option[value=' + value.sinks_hyperemia + ']').attr('selected', 'selected');
                $('#hypertrophy option[value=' + value.hypertrophy + ']').attr('selected', 'selected');
                $('#dzgide_curved option[value=' + value.dzgide_curved + ']').attr('selected', 'selected');
                $("#sinks_text").val(value.sinks_text);
                $('#polyposis_tissue option[value=' + value.polyposis_tissue + ']').attr('selected', 'selected');
                $("#vascular_picture_text").val(value.vascular_picture_text);
                $("#smell_within_norm").attr("checked", value.smell_within_norm);
                $("#hypoosmia").attr("checked", value.hypoosmia);
                $("#anosmia").attr("checked", value.anosmia);
                $("#vestibular_other").attr("checked", value.vestibular_other);
                $('#barofunction_valsalva_attempt option[value=' + value.barofunction_valsalva_attempt + ']').attr('selected', 'selected');
                $("#barofunction_text").val(value.barofunction_text);
                $('#audiometry option[value=' + value.audiometry + ']').attr('selected', 'selected');
                $("#other_text").val(value.other_text);
                $("#additional_information").val(value.additional_information);
                $('#vestibular_apparatus option[value=' + value.vestibular_apparatus + ']').attr('selected', 'selected');
                $('#adrenal_glands option[value=' + value.adrenal_glands + ']').attr('selected', 'selected');
                $('#throat option[value=' + value.throat + ']').attr('selected', 'selected');
                $("#throat_other").val(value.throat_other);
                $('#voice_yogis option[value=' + value.voice_yogis + ']').attr('selected', 'selected');
                $('#larynx option[value=' + value.larynx + ']').attr('selected', 'selected');
                $('#voice_yogis_movement option[value=' + value.voice_yogis_movement + ']').attr('selected', 'selected');
                $("#throat_text").val(value.throat_text);
                getFile(value.id);


            });

        }
    });

}



function editCrystal(id) {
    $("#crystal-add-id").click();
    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_crystal": "get_crystal"
        },
        dataType: "html",
        success: function (data) {
            var death = JSON.parse(data);
            $.each(death, function (item, value) {
                $("#bruli_text").val(value.bruli_text);
                $("#tonometry_s").val(value.tonometry_s);
                $('#broli option[value=' + value.broli + ']').attr('selected', 'selected');
                $('#transparent option[value=' + value.transparent + ']').attr('selected', 'selected');
                $('#distribution_turbidity option[value=' + value.distribution_turbidity + ']').attr('selected', 'selected');
                $('#type_turbulence option[value=' + value.type_turbulence + ']').attr('selected', 'selected');
                $('#place option[value=' + value.place + ']').attr('selected', 'selected');
                $('#location option[value=' + value.location + ']').attr('selected', 'selected');
                $("#crystal_id").val(value.id);


            });

        }
    });

}


function editSclera(id) {
    $("#sclera-add-id").click();
    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_sclera": "get_sclera"
        },
        dataType: "html",
        success: function (data) {
            var death = JSON.parse(data);
            $.each(death, function (item, value) {
                $("#sclera_text").val(value.sclera_text);
                $("#tonometry_s").val(value.tonometry_s);
                $('#sclera_type option[value=' + value.sclera_type + ']').attr('selected', 'selected');
                $('#sclera option[value=' + value.sclera + ']').attr('selected', 'selected');
                $('#discoloration_focal option[value=' + value.discoloration_focal + ']').attr('selected', 'selected');
                $('#discoloration_diffuse option[value=' + value.discoloration_diffuse + ']').attr('selected', 'selected');
                $('#discoloration_diffuse option[value=' + value.discoloration_diffuse + ']').attr('selected', 'selected');
                $('#sclera_location option[value=' + value.sclera_location + ']').attr('selected', 'selected');
                $("#sclera_id").val(value.id);


            });

        }
    });

}

function editBody(id) {
    $("#mbody-add-id").click();
    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_body": "get_body"
        },
        dataType: "html",
        success: function (data) {
            var death = JSON.parse(data);
            $.each(death, function (item, value) {
                $("#vitreous_body_text").val(value.vitreous_body_text);
                $('#vitreous_body option[value=' + value.vitreous_body + ']').attr('selected', 'selected');
                $('#vitreous_body_location option[value=' + value.vitreous_body_location + ']').attr('selected', 'selected');
                $("#mbody_id").val(value.id);


            });

        }
    });

}

function editBadura(id) {
    $("#badura-add-id").click();
    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_badura": "get_badura"
        },
        dataType: "html",
        success: function (data) {
            var death = JSON.parse(data);
            $.each(death, function (item, value) {
                $("#vitreous_body_text").val(value.vitreous_body_text);
                $('#retina option[value=' + value.retina + ']').attr('selected', 'selected');
                $('#optic_nerve option[value=' + value.optic_nerve + ']').attr('selected', 'selected');
                $('#boundaries option[value=' + value.boundaries + ']').attr('selected', 'selected');
                $('#arteries option[value=' + value.arteries + ']').attr('selected', 'selected');
                $('#veins option[value=' + value.veins + ']').attr('selected', 'selected');
                $('#bruises option[value=' + value.bruises + ']').attr('selected', 'selected');
                $('#dystrophies option[value=' + value.dystrophies + ']').attr('selected', 'selected');
                $('#exudates option[value=' + value.exudates + ']').attr('selected', 'selected');
                $('#rupture option[value=' + value.rupture + ']').attr('selected', 'selected');
                $('#localization option[value=' + value.localization + ']').attr('selected', 'selected');
                $('#retina_location option[value=' + value.retina_location + ']').attr('selected', 'selected');
                $("#retina_text").val(value.retina_text);
                $("#badura_id").val(value.id);


            });

        }
    });

}

function editMounth(id) {
    console.log('editmouth');
    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_mounth": "get_mounth"
        },
        dataType: "html",
        success: function (data) {
            var death = JSON.parse(data);
            $.each(death, function (item, value) {
                $("#without_pathology_mounth").attr("checked", value.without_pathology);
                $("#diseased_teeth").val(value.diseased_teeth);

                $("#causal_pain").attr("checked", value.causal_pain);
                $("#pain_when_pressing").attr("checked", value.pain_when_pressing);
                $("#pain_of_deaf").attr("checked", value.pain_of_deaf);
                $("#pain_of_arbitrary").attr("checked", value.pain_of_arbitrary);
                $("#night_pain").attr("checked", value.night_pain);
                $("#aesthetic_discomfort").attr("checked", value.aesthetic_discomfort);
                $("#bjen_defect").attr("checked", value.bjen_defect);
                $("#crown_defect").attr("checked", value.crown_defect);
                $("#root").attr("checked", value.root);
                $("#facial_asymmetry").attr("checked", value.facial_asymmetry);
                $("#existence_deposits").attr("checked", value.existence_deposits);
                $("#bleeding_gums").attr("checked", value.bleeding_gums);
                $("#adentia").attr("checked", value.adentia);
                $("#halitosis").attr("checked", value.halitosis);
                $("#joint_pathology").attr("checked", value.joint_pathology);
                $("#mouth_other").val(value.mouth_other);
                $("#occlusion_text").val(value.occlusion_text);
                $("#mouth_condition_text").val(value.mouth_condition_text);
                $("#defect_localization_text").val(value.defect_localization_text);
                $('#degree_tooth_extraction option[value=' + value.degree_tooth_extraction + ']').attr('selected', 'selected');
                $("#caries").attr("checked", value.caries);
                $("#archaic_caries_disease").attr("checked", value.archaic_caries_disease);
                $("#pulpit").attr("checked", value.pulpit);
                $("#periodontitis").attr("checked", value.periodontitis);
                $("#bjeni").attr("checked", value.bjeni);
                $("#artificial_teeth").attr("checked", value.artificial_teeth);
                $("#artificial_crown").attr("checked", value.artificial_crown);
                $("#extruded_tooth").attr("checked", value.extruded_tooth);
                $("#tooth_root").attr("checked", value.tooth_root);
                $("#swelling").attr("checked", value.swelling);
                $("#hyperemia").attr("checked", value.hyperemia);
                $("#cyanosis").attr("checked", value.cyanosis);
                $("#retraction").attr("checked", value.retraction);
                $("#hypertrophy").attr("checked", value.hypertrophy);
                $("#bleeding").attr("checked", value.bleeding);
                $("#bone_pocket").attr("checked", value.bone_pocket);
                $("#ridge_atrophy").attr("checked", value.ridge_atrophy);
                $("#periodontal_pocket").attr("checked", value.periodontal_pocket);
                $("#periodontal_pocket_depth").val(value.periodontal_pocket_depth);
                $("#periodontal_other").val(value.periodontal_other);
                $("#not_observed").attr("checked", value.not_observed);
                $("#soft").attr("checked", value.soft);
                $("#pigmented").attr("checked", value.pigmented);
                $("#tough").attr("checked", value.tough);
                $("#gingival").attr("checked", value.gingival);
                $("#mounth_id").val(value.id);


            });

        }
    });

}

function editTeeth(id) {
    $("#teeth-add-id").click();
    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_teeth": "get_teeth"
        },
        dataType: "html",
        success: function (data) {
            var death = JSON.parse(data);
            $.each(death, function (item, value) {
                $("#teeth_number").val(value.teeth_number);
                $("#non_carious_disease").attr("checked", value.non_carious_disease);
                $("#caries2").attr("checked", value.caries);
                $("#pulpit2").attr("checked", value.pulpit);
                $("#periodontitis2").attr("checked", value.periodontitis);
                $("#adentia_uncut2").attr("checked", value.adentia_uncut);
                $("#adentia2").attr("checked", value.adentia);
                $("#adentia_retensive2").attr("checked", value.adentia_retensive);
                $("#bjeni2").attr("checked", value.bjeni);
                $("#vibration_1").attr("checked", value.vibration_1);
                $("#vibration_2").attr("checked", value.vibration_2);
                $("#vibration_3").attr("checked", value.vibration_3);
                $("#implant2").attr("checked", value.implant);
                $("#artificial_crown2").attr("checked", value.artificial_crown);
                $("#bridge_prosthesis2").attr("checked", value.bridge_prosthesis);
                $("#removable_prosthesis2").attr("checked", value.removable_prosthesis);
                $("#teeth_root").attr("checked", value.teeth_root);
                $("#healthy").attr("checked", value.healthy);
                $("#teeth_id").val(value.id);


            });

        }
    });

}

function editCure(id) {

    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_cure": "get_cure"
        },
        dataType: "html",
        success: function (data) {
            var death = JSON.parse(data);
            $.each(death, function (item, value) {
                $('#date_of_adjustment').datepicker('update', value.date_of_adjustment);
                $('#condition_cure option[value=' + value.condition_cure + ']').attr('selected', 'selected');
                $('#condition_cure').val(value.condition_cure);
                $('#condition_cure').trigger('change');
                $('#description_treatment').val(value.description_treatment);
                $('#description_treatment').trigger('change');
                $('#begin_treatment').datepicker('update', value.begin_treatment);
                $('#end_treatment').datepicker('update', value.end_treatment);
                $("#additional_information2").val(value.additional_information);
                $("#treatment_result").val(value.treatment_result);
                $("#cure_id").val(value.id);
                $("#patient_confirm").attr("checked", value.patient_consent);
                if (value.patient_consent == 1) {
                    $("#patient_confirm_file").css("display", "flex");
                    getCureFile(value.id);
                }
            });

        }
    });
}

function editProcedureCode(id, action) {
    $("#add-procedure-code-modal").click();
    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_procedure_code": "get_procedure_code"
        },
        dataType: "html",
        success: function (data) {
            var death = JSON.parse(data);
            $.each(death, function (item, value) {
                $('#procedure_cure').val(value.procedure_cure);
                $("#procedure_id").val(value.id);
                $('#procedure_code').val(value.procedure_code);
                $('#procedure_code').trigger('change');
                $('#comment').val(value.comment);
                $('#Lazaret').val(value.Lazaret);
                $('#Lazaret').trigger('change');
                $('#status').val(value.status);
                $('#status').trigger('change');
            });

        }
    });

}

function editCureMeet(id, action) {
    $("#add-cure-meet").click();
    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_cure_meet": "get_cure_meet"
        },
        dataType: "html",
        success: function (data) {
            var death = JSON.parse(data);
            $.each(death, function (item, value) {
                $('#structural_unit').val(value.structural_unit);
                $('#structural_unit').trigger('change');
                $('#specialty').val(value.specialty);
                $('#specialty').trigger('change');
                $('#addressee_doctor').val(value.addressee_doctor);
                $('#addressee_doctor').trigger('change');
                $('#date_meeting').datepicker('update', value.date_meeting);
                $('#condition_meet').val(value.condition_meet);
                $('#condition_meet').trigger('change');
                $('#meeting_information').val(value.meeting_information);
                $("#meet_id").val(value.id);

            });

        }
    });

}

function editClinicLab(id) {
    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_clinic_lab": "get_clinic_lab"
        },
        dataType: "html",
        success: function (data) {
            var death = JSON.parse(data);
            $.each(death, function (item, value) {
                $("#clinic_lab_id").val(value.id);
            });

        }
    });

}


function editExamination(id, action) {
    $("#clinic-modal").modal("show");
    addClinic(id, 2);
    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_examination": "get_examination"
        },
        dataType: "html",
        success: function (data) {
            var death = JSON.parse(data);
            $.each(death, function (item, value) {
                $('#procedure_code').val(value.procedure_code);
                $('#procedure_code').trigger('change');
                $('#demanding_doctor').val(value.demanding_doctor);
                $('#demanding_doctor').trigger('change');
                $('#performer_doctor').val(value.demanding_doctor);
                $('#performer_doctor').trigger('change');
                $('#demanding_date').datepicker('update', value.demanding_date);
                $("#examination_id").val(value.id);
                $('#procedure_clinical').val(value.procedure_clinical);
                $('#procedure_clinical').trigger('change');
                if (action == 2) {
                    ExaminationProcedures(value.procedure_clinical);
                }
            });

        }
    });

}


function editLabTests(id, action) {
    $("#lab-modal").modal("show");
    addLab(id, 2);
    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_lab_tests": "get_lab_tests"
        },
        dataType: "html",
        success: function (data) {
            var death = JSON.parse(data);
            $.each(death, function (item, value) {
                $('#Test_code').val(value.Test_code);
                $('#Test_code').trigger('change');
                $("#lab_tests_id").val(value.id);
                $("#Test_type").val(value.Test_type);
                $('#Test_date').datepicker('update', value.Test_date);
                $('#demanding_doctor').val(value.demanding_doctor);
                $('#demanding_doctor').trigger('change');
                $("#Cyto").attr("checked", value.Cyto);

                // if (action == 2) {
                //     ExaminationProcedures(value.procedure_clinical);
                // }
            });

        }
    });

}



function editDoctorRecord(id, action) {
    $("#add-doctors-record").click();
    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_doctor_record": "get_doctor_record"
        },
        dataType: "html",
        success: function (data) {
            var death = JSON.parse(data);
            $.each(death, function (item, value) {
                $("#doctor_record").val(value.doctor_record);
                $("#doctor_record_id").val(value.id);
            });

        }
    });

}

function editPsychology(id, action) {
    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_psychology_examination": "get_psychology_examination"
        },
        dataType: "html",
        success: function (data) {
            var death = JSON.parse(data);
            $.each(death, function (item, value) {

                $('#examination_date').datepicker('update', value.examination_date);
                $("#specialist").val(value.specialist);
                $("#additional_information").val(value.additional_information);
                $("#psychology_id").val(value.id);
                PsyDiagnoses(value.diagnosis_id);

                getPsyFile(id);

            });

        }
    });

}


function editOperations(id, action) {
    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_operations": "get_operations"
        },
        dataType: "html",
        success: function (data) {
            var operations = JSON.parse(data);
            $.each(operations, function (item, value) {

                $("#document_number").val(value.document_number);
                $('#create_date').datepicker('update', value.create_date);
                $("#doctor").val(value.doctor);
                $("#medical_institution").val(value.medical_institution);
                $("#protocol_number").val(value.protocol_number);
                $("#operation_description").val(value.operation_description);
                $("#department").val(value.department);
                $("#card_number").val(value.card_number);
                $("#pain_relief").val(value.pain_relief);
                $('#operation_date').datepicker('update', value.operation_date);
                $('#operation_end_date').datepicker('update', value.operation_end_date);
                $('#operation_duration').datepicker('update', value.operation_duration);
                $("#processing_operating").val(value.processing_operating);
                $("#area").val(value.area);
                $("#size").val(value.size);
                $("#direction").val(value.direction);
                $("#layers").val(value.layers);
                $("#abnormal_changes").val(value.abnormal_changes);
                $("#operation_complete").val(value.operation_complete);
                $("#hemostasis").val(value.hemostasis);
                $("#drainage_skin").val(value.drainage_skin);
                $("#description_macropreparation").val(value.description_macropreparation);
                $("#indication_sending_examination").val(value.indication_sending_examination);
                $("#operations_id").val(value.id);
                $('#operations-document option[value=' + value.document_type + ']').attr('selected', 'selected');
                $('#operation_type').val(value.operation_type);
                $('#operation_type').trigger('change');
                $('#intraoperative_diagnosis').val(value.intraoperative_diagnosis);
                $('#intraoperative_diagnosis').trigger('change');
                $('#first_assistant').val(value.first_assistant);
                $('#first_assistant').trigger('change');
                $('#second_assistant').val(value.second_assistant);
                $('#second_assistant').trigger('change');
                $('#surgical_nurse').val(value.surgical_nurse);
                $('#surgical_nurse').trigger('change');
                $('#anesthesiologist').val(value.anesthesiologist);
                $('#anesthesiologist').trigger('change');
                $('#surgeon').val(value.surgeon);
                $('#surgeon').trigger('change');
                operationsSpeciality(value.specialty);
                if (value.document_type == 2) {
                    $("#blank-block-operations").css("display", "contents");
                    getOperationsFile(id);
                }


            });

        }
    });

}

function editImmunization(id, action) {
    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_immunization": "get_immunization"
        },
        dataType: "html",
        success: function (data) {
            var immunization = JSON.parse(data);
            $.each(immunization, function (item, value) {
                $('#document_type option[value=' + value.document_type + ']').attr('selected', 'selected');
                $("#document_number").val(value.document_number);
                $('#vaccine_date').datepicker('update', value.vaccine_date);
                $('#create_date').datepicker('update', value.create_date);
                $("#doctor").val(value.doctor);
                $("#medical_institution").val(value.medical_institution);
                $('#vaccine_date').datepicker('update', value.vaccine_date);
                $("#not_require_revaccination").attr("checked", value.not_require_revaccination);
                $("#lot_number").val(value.lot_number);
                $('#further_complication_vaccination').val(value.further_complication_vaccination);
                $('#further_complication_vaccination').trigger('change');
                $('#revaccination').datepicker('update', value.revaccination);
                $("#contraindications").val(value.contraindications);
                $("#patient_rejection").attr("checked", value.patient_rejection);
                $("#additional_information").val(value.additional_information);
                $("#immunization_id").val(value.id);

                if (value.document_type == 2) {
                    $("#blank-block-immunization").css("display", "contents");
                    getImmunizationFile(id)
                }
                getVaccines(value.vaccine);

            });

        }
    });

}


function editMedications(id, action) {
    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_medications": "get_medications"
        },
        dataType: "html",
        success: function (data) {
            var immunization = JSON.parse(data);
            $.each(immunization, function (item, value) {
                $('#document_type option[value=' + value.document_type + ']').attr('selected', 'selected');
                $("#document_number").val(value.document_number);
                $('#create_date').datepicker('update', value.create_date);
                $("#doctor").val(value.doctor);
                $("#medical_institution").val(value.medical_institution);
                $("#patient_rejection").attr("checked", value.patient_rejection);
                $("#current").attr("checked", value.current);
                $('#begin_treatment').datepicker('update', value.begin_treatment);
                $('#end_treatment').datepicker('update', value.end_treatment);
                $("#course_over").attr("checked", value.course_over);
                $("#terminated_medications").attr("checked", value.terminated_medications);
                $("#termination_reason").val(value.termination_reason);
                $("#note").val(value.note);
                $("#medications_id").val(value.id);
                if (value.document_type == 2) {
                    $("#blank-block").css("display", "contents");
                    getMedicationsFile(id)
                }
                getIndications(value.indication);

            });

        }
    });

}


function EditMedicaitonMeds(id, action) {
    $("#add-medications-modal").modal("show");
    addMedicationsModal(id, 2);
    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_medication_meds": "get_medication_meds"
        },
        dataType: "html",
        success: function (data) {
            var death = JSON.parse(data);
            $.each(death, function (item, value) {
                $('#procedure_code').val(value.procedure_code);
                $('#procedure_code').trigger('change');
                $('#demanding_doctor').val(value.demanding_doctor);
                $('#demanding_doctor').trigger('change');
                $('#issuance_type').val(value.issuance_type);
                $('#issuance_type').trigger('change');
                $('#dosage_form').val(value.dosage_form);
                $('#dosage_form').trigger('change');
                $('#units_measurement').val(value.units_measurement);
                $('#units_measurement').trigger('change');
                $('#quantity').val(value.quantity);
                $('#receipt_form').val(value.receipt_form);
                $('#medications_modal_id').val(value.id);
                if (action == 2) {
                    getMedProducts(value.product_id);
                }
            });

        }
    });

}


function editMedicalCard(id, action) {
    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_medication_card": "get_medication_card"
        },
        dataType: "html",
        success: function (data) {
            var immunization = JSON.parse(data);
            $.each(immunization, function (item, value) {

                $("#personality_data").val(value.personality_data);
                $("#urogenital_system").val(value.urogenital_system);
                $("#cardiovascular_system").val(value.cardiovascular_system);
                $("#endocrine_system").val(value.endocrine_system);
                $("#breathing_system").val(value.breathing_system);
                $("#digestive_system").val(value.digestive_system);
                $("#nervous_system").val(value.nervous_system);
                $("#musculoskeletal_system").val(value.musculoskeletal_system);
                $("#memory").val(value.memory);
                $("#emotional_realm").val(value.emotional_realm);
                $("#speech").val(value.speech);
                $("#awareness").val(value.awareness);
                $("#occupational_therapy").val(value.occupational_therapy);
                $("#physical_therapy").val(value.physical_therapy);
                $("#prosthetics_orthopedics").val(value.prosthetics_orthopedics);

                $("#orthopedic_assistant").val(value.orthopedic_assistant);
                $("#evaluation_result").val(value.evaluation_result);
                $("#consultations").val(value.consultations);
                $("#preliminary_diagnosis").val(value.preliminary_diagnosis);
                $("#required_examinations").val(value.required_examinations);
                $("#final_diagnosis").val(value.final_diagnosis);
                $("#rehabilitation_plan").val(value.rehabilitation_plan);
                $("#necessary_aids").val(value.necessary_aids);
                $("#medication_card_id").val(value.id);


            });

        }
    });

}

function editReabilitationPlan(id, action) {
    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_reabilitation_plan": "get_reabilitation_plan"
        },
        dataType: "html",
        success: function (data) {
            var reabilitation = JSON.parse(data);
            $.each(reabilitation, function (item, value) {

                $("#clinical_findings").val(value.clinical_findings);
                $("#functional_findings").val(value.functional_findings);
                $("#short_term_goal").val(value.short_term_goal);
                $("#long_term_goal").val(value.long_term_goal);
                $("#treatment_plan").val(value.treatment_plan);
                $("#recommendation").val(value.recommendation);
                $("#physical_therapy").val(value.physical_therapy);
                $("#reabilitation_plan_id").val(value.id);


            });

        }
    });

}

function editReabilitationRecords(id, action) {
    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_reabilitation_records": "get_reabilitation_records"
        },
        dataType: "html",
        success: function (data) {
            var reabilitation = JSON.parse(data);
            $.each(reabilitation, function (item, value) {

                $("#subjective_data").val(value.subjective_data);
                $("#objective_data").val(value.objective_data);
                $("#conclusion").val(value.conclusion);
                $("#recommendation").val(value.recommendation);
                $("#reabilitation_records_id").val(value.id);


            });

        }
    });

}



function editOcupation(id, action) {
    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_ocupation": "get_ocupation"
        },
        dataType: "html",
        success: function (data) {
            var ocupation = JSON.parse(data);
            $.each(ocupation, function (item, value) {
                $('#dominant_hand').val(value.dominant_hand);
                $('#dominant_hand').trigger('change');
                $('#pain_scale').val(value.pain_scale);
                $('#pain_scale').trigger('change');
                $("#arom_prom").attr("checked", value.arom_prom);
                $('#strength_upper_limb').val(value.strength_upper_limb);
                $('#strength_upper_limb').trigger('change');
                $("#patient_safety").val(value.patient_safety);
                $("#sensitivity").val(value.sensitivity);
                $("#purpose_of_patient").val(value.purpose_of_patient);
                $('#eating').val(value.eating);
                $('#eating').trigger('change');
                $('#personal_hygiene').val(value.personal_hygiene);
                $('#personal_hygiene').trigger('change');
                $('#bathing_upper_limbs').val(value.bathing_upper_limbs);
                $('#bathing_upper_limbs').trigger('change');
                $('#bathing_lower_limbs').val(value.bathing_lower_limbs);
                $('#bathing_lower_limbs').trigger('change');
                $('#dress_upper_limb').val(value.dress_upper_limb);
                $('#dress_upper_limb').trigger('change');
                $('#dress_lower_limb').val(value.dress_lower_limb);
                $('#dress_lower_limb').trigger('change');
                $("#transfer").val(value.transfer);
                $("#cooking").attr("checked", value.cooking);
                $("#cleaning").attr("checked", value.cleaning);
                $("#washing").attr("checked", value.washing);
                $("#communication").attr("checked", value.communication);
                $("#driving_car").attr("checked", value.driving_car);
                $("#shopping").val(value.shopping);
                $("#left_shoulder_unfold").val(value.left_shoulder_unfold);
                $("#left_shoulder_abduction").val(value.left_shoulder_abduction);
                $("#left_shoulder_horizontal_unfolding").val(value.left_shoulder_horizontal_unfolding);
                $("#left_shoulder_horizontal_bending").val(value.left_shoulder_horizontal_bending);
                $("#left_shoulder_rotate_inside").val(value.left_shoulder_rotate_inside);
                $("#left_shoulder_out_rotation").val(value.left_shoulder_out_rotation);
                $("#right_shoulder_unfold").val(value.right_shoulder_unfold);
                $("#right_shoulder_abduction").val(value.right_shoulder_abduction);
                $("#right_shoulder_horizontal_unfolding").val(value.right_shoulder_horizontal_unfolding);
                $("#right_shoulder_horizontal_bending").val(value.right_shoulder_horizontal_bending);
                $("#right_shoulder_rotate_inside").val(value.right_shoulder_rotate_inside);
                $("#right_shoulder_out_rotation").val(value.right_shoulder_out_rotation);
                $("#left_elbow_unfold").val(value.left_elbow_unfold);
                $("#left_elbow_pronation_supination").val(value.left_elbow_pronation_supination);
                $("#right_elbow_unfold").val(value.right_elbow_unfold);
                $("#right_elbow_pronation_supination").val(value.right_elbow_pronation_supination);
                $("#left_wrist_unfold").val(value.left_wrist_unfold);
                $("#left_wrist_ulnar_deviation").val(value.left_wrist_ulnar_deviation);
                $("#left_wrist_radial_deviation").val(value.left_wrist_radial_deviation);
                $("#right_wrist_unfold").val(value.right_wrist_unfold);
                $("#right_wrist_ulnar_deviation").val(value.right_wrist_ulnar_deviation);
                $("#right_wrist_radial_deviation").val(value.right_wrist_radial_deviation);
                $("#ocupation_id").val(value.id);


            });

        }
    });

}


function editReabilitationDaily(id, action) {
    $("#add-daily-btn").click();
    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_daili_records_list": "get_daili_records_list"
        },
        dataType: "html",
        success: function (data) {
            var records = JSON.parse(data);
            $.each(records, function (item, value) {
                $('#entry_date').datepicker('update', value.entry_date);
                $("#subjective").val(value.subjective);
                $("#objective").val(value.objective);
                $("#conducted_procedure").val(value.conducted_procedure);
                $("#further_plan").val(value.further_plan);
                $('#exit_plan_date').datepicker('update', value.exit_plan_date);
                $("#daily_records_modal_id").val(value.id);
            });

        }
    });
}

function editOcupationRight(id, action) {
    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_ocupation_right": "get_ocupation_right"
        },
        dataType: "html",
        success: function (data) {
            var right = JSON.parse(data);
            $.each(right, function (item, value) {

                $("#mcp_th").val(value.mcp_th);
                $("#mcp_if").val(value.mcp_if);
                $("#mcp_mf").val(value.mcp_mf);
                $("#mcp_rf").val(value.mcp_rf);
                $("#mcp_sf").val(value.mcp_sf);
                $("#pip_th").val(value.pip_th);
                $("#pip_if").val(value.pip_if);
                $("#pip_mf").val(value.pip_mf);
                $("#pip_rf").val(value.pip_rf);
                $("#pip_sf").val(value.pip_sf);
                $("#dip_th").val(value.dip_th);
                $("#dip_if").val(value.dip_if);
                $("#dip_mf").val(value.dip_mf);
                $("#dip_rf").val(value.dip_rf);
                $("#dip_sf").val(value.dip_sf);


            });

        }
    });
}

function editOcupationLeft(id, action) {
    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_ocupation_left": "get_ocupation_left"
        },
        dataType: "html",
        success: function (data) {
            var left = JSON.parse(data);
            $.each(left, function (item, value) {

                $("#mcp_th_left").val(value.mcp_th);
                $("#mcp_if_left").val(value.mcp_if);
                $("#mcp_mf_left").val(value.mcp_mf);
                $("#mcp_rf_left").val(value.mcp_rf);
                $("#mcp_sf_left").val(value.mcp_sf);
                $("#pip_th_left").val(value.pip_th);
                $("#pip_if_left").val(value.pip_if);
                $("#pip_mf_left").val(value.pip_mf);
                $("#pip_rf_left").val(value.pip_rf);
                $("#pip_sf_left").val(value.pip_sf);
                $("#dip_th_left").val(value.dip_th);
                $("#dip_if_left").val(value.dip_if);
                $("#dip_mf_left").val(value.dip_mf);
                $("#dip_rf_left").val(value.dip_rf);
                $("#dip_sf_left").val(value.dip_sf);


            });

        }
    });
}

function editPhysicalTherapy(id, action) {
    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_physical_therapy": "get_physical_therapy"
        },
        dataType: "html",
        success: function (data) {
            var left = JSON.parse(data);
            $.each(left, function (item, value) {

                $("#injury_history").val(value.injury_history);
                $("#complain").val(value.complain);
                $('#in_morning').val(value.in_morning);
                $('#in_morning').trigger('change');
                $('#in_evening').val(value.in_evening);
                $('#in_evening').trigger('change');
                $('#at_night').val(value.at_night);
                $('#at_night').trigger('change');
                $("#irritant_factors").val(value.irritant_factors);
                $("#observation").val(value.observation);
                $("#releasing_factors").val(value.releasing_factors);
                $("#manner_walking").val(value.manner_walking);
                $("#medications").val(value.medications);
                $("#body_position_condition").val(value.body_position_condition);
                $("#short_term_goal").val(value.short_term_goal);
                $("#movement_of_funds").val(value.movement_of_funds);
                $("#long_term_goal").val(value.long_term_goal);
                $("#subjective").val(value.subjective);
                $("#objective").val(value.objective);
                $("#conclusion").val(value.conclusion);
                $("#recommendation").val(value.recommendation);
                $("#funct").val(value.funct);
                $("#physical_therapy_id").val(value.id);


            });

        }
    });
}


function editPhysicalTherapyTable(id, action) {
    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_physical_therapy_table": "get_physical_therapy_table"
        },
        dataType: "html",
        success: function (data) {
            var left = JSON.parse(data);
            $.each(left[0], function (item, value) {
                $(`#${item}`).val(value);
            });

        }
    });
}


function editReabilitationCard(id, action) {
    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_rehabilitation_card": "get_rehabilitation_card"
        },
        dataType: "html",
        success: function (data) {
            var left = JSON.parse(data);
            $.each(left[0], function (item, value) {
                if (item == "birth_date" || item == 'date_entry' || item == 'date_injury' || item == 'date_discharge') {
                    $(`#${item}`).datepicker('update', value);
                    return;
                }
                $(`#${item}`).val(value);
            });

        }
    });
}


function editDiagnoseMain(id) {

    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_diagnose_main": "get_diagnose_main"
        },
        dataType: "html",
        success: function (data) {
            var death = JSON.parse(data);
            $.each(death, function (item, value) {
                $('#adjustment_date').datepicker('update', value.adjustment_date);
                $('#create_date').datepicker('update', value.create_date);
                $("#document_source").val(value.document_source);
                $("#document_number").val(value.document_number);
                $("#doctor_name").val(value.doctor_name);
                $("#medical_institution").val(value.medical_institution);
                $("#multiplicity").val(value.multiplicity);
                $('#disease_id').val(value.disease_id);
                $('#disease_id').trigger('change');
                $("#diagnosis_info_text").val(value.diagnosis_info_text);
                $('#severity_of_disease').val(value.severity_of_disease);
                $('#severity_of_disease').trigger('change');
                $("#active_phase_disease").attr("checked", value.active_phase_disease);
                $('#solution_of_disease').val(value.solution_of_disease);
                $('#solution_of_disease').trigger('change');
                $('#recovered').datepicker('update', value.recovered);
                $('#passed_away').datepicker('update', value.passed_away);
                $('#cause_of_death').val(value.cause_of_death);
                $('#trauma').val(value.trauma);
                $('#trauma').trigger('change');
                $("#trauma_where").val(value.trauma_where);
                $('#trauma_when').datepicker('update', value.trauma_when);
                $("#under_what_circumstances").val(value.under_what_circumstances);
                $("#no_damage_observed").attr("checked", value.no_damage_observed);
                $('#injury').val(value.injury);
                $('#injury').trigger('change');
                $('#injury_location').val(value.injury_location);
                $('#injury_location').trigger('change');
                $('#injury_wound').val(value.injury_wound);
                $('#injury_wound').trigger('change');
                $("#prolonged_bleeding").attr("checked", value.prolonged_bleeding);
                $('#prolonged_bleeding_text').val(value.prolonged_bleeding_text);
                $("#infection").attr("checked", value.infection);
                $("#allergy").attr("checked", value.allergy);
                $('#allergy_type').val(value.allergy_type);
                $('#allergy_type').trigger('change');
                $("#pregnancy").attr("checked", value.pregnancy);
                $('#note_text').val(value.note_text);
                $('#posted').val(value.posted);
                $('#posted').trigger('change');
                $('#hours_later').val(value.hours_later);
                $('#introduced_why').val(value.introduced_why);
                $('#introduced_why').trigger('change');
                $('#introduced').val(value.introduced);
                $('#introduced').trigger('change');
                $('#hospitalized_this_year').val(value.hospitalized_this_year);
                $('#hospitalized_this_year').trigger('change');
                $("#transferred_civilian_clinic").attr("checked", value.transferred_civilian_clinic);
                $('#desease_main_id').val(value.id);

                if (value.document_source == 2) {
                    $("#blank-block-desease").css("display", "contents");
                    getDeseaseFile(value.id);
                }
            });

        }
    });
}


function editDiagnoseType(id, action) {

    $("#diagnose-type-modal").modal("show");
    addDiagnoseType(id, action);
    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_diagnose_types": "get_diagnose_types"
        },
        dataType: "html",
        success: function (data) {
            var death = JSON.parse(data);
            $.each(death, function (item, value) {
                $('#diagnos_code').val(value.diagnos_code);
                $('#create_date_type').datepicker('update', value.create_date);
                $('#diagnos_type_text').val(value.diagnos_type_text);
                $('#type_of_diagnosis').val(value.type_of_diagnosis);
                $('#type_of_diagnosis').trigger('change');
                $('#diagnose_type_id').val(value.id);
                if (action == 2) {
                    DiagnosisDesease(value.diagnos_disease_id);
                }
            });

        }
    });
}


function editDiagnoseRecipient(id, action) {
    $("#add-diagnose-recipient").click();
    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_diagnose_recipient": "get_diagnose_recipient"
        },
        dataType: "html",
        success: function (data) {
            var death = JSON.parse(data);
            $.each(death, function (item, value) {
                $('#name_surname_recipient').val(value.name_surname);
                $('#structure_recipient').val(value.structure);
                $('#date_recipient').datepicker('update', value.date);
                $('#diagnose_recipient_id').val(value.id);
                $('#additional_information_recipient').val(value.additional_information);


                $('#diagnos_type_text').val(value.diagnos_type_text);
                $('#type_of_diagnosis').val(value.type_of_diagnosis);
                $('#type_of_diagnosis').trigger('change');

                if (action == 2) {
                    DiagnosisDesease(value.diagnos_disease_id);
                }
            });

        }
    });
}

function editDiagnoseMeet(id, type, action) {
    $("#diagnose-meet-modal").modal("show");
    addDiagnoseMeet(id, type);
    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_diagnose_meet": "get_diagnose_meet"
        },
        dataType: "html",
        success: function (data) {
            var death = JSON.parse(data);
            $.each(death, function (item, value) {
                $('#diagnose_meet_id').val(value.id);
                if (type == 1) {
                    $('#civilian_specialist').val(value.civilian_specialist);
                    $('#civilian_specialist').trigger('change');
                    $('#civilian_structure').val(value.civilian_structure);
                    $('#civilian_structure').trigger('change');
                    DiagnosisDoctor(value.civilian_addressee_doctor, 'civilian_addressee_doctor');
                    $('#civilian_addressee_doctor').trigger('change');
                    $('#civilian_date').datepicker('update', value.civilian_date);
                    $('#civilian_condition').val(value.civilian_condition);
                    $('#civilian_condition').trigger('change');
                    $('#civilian_information').val(value.civilian_information);
                } else {
                    $('#structure_appeal').val(value.structure_appeal);
                    $('#structure_appeal').trigger('change');
                    $('#specialist_meet').val(value.specialist);
                    $('#specialist_meet').trigger('change');
                    DiagnosisDoctor(value.addressee_doctor, 'addressee_doctor_meet');
                    $('#addressee_doctor_meet').trigger('change');
                    $('#date_meet').datepicker('update', value.date_meet);
                    $('#condition_meet').val(value.condition_meet);
                    $('#condition_meet').trigger('change');
                    $('#information_meet').val(value.information_meet);
                }

            });

        }
    });
}

function editImportant(id, action) {
    $("#diagnose-medical-modal").modal("show");
    addMedicalDiagnose(id);
    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_important": "get_important"
        },
        dataType: "html",
        success: function (data) {
            var death = JSON.parse(data);
            $.each(death, function (item, value) {
                $('#important_id').val(value.id);
                $('#information_text').val(value.information_text);
                $('#information_date').datepicker('update', value.information_date);
                DiagnosisDoctor(value.doctor_id, "doctor_id");
            });

        }
    });
}

function editDiagnoseHealth(id, action) {
    $("#diagnose-health-modal").modal("show");
    addDiagnoseHealth(id)
    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_diagnose_health": "get_diagnose_health"
        },
        dataType: "html",
        success: function (data) {
            var death = JSON.parse(data);
            $.each(death, function (item, value) {
                $('#diagnose_health_id').val(value.id);
                $('#state_of_health').val(value.state_of_health);
                $('#health_date').datepicker('update', value.health_date);
            });

        }
    });
}

function editDiagnoseDestination(id, action) {
    $("#diagnose-consult-modal").modal("show");
    addDiagnoseConsult(id);
    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_diagnose_destination": "get_diagnose_destination"
        },
        dataType: "html",
        success: function (data) {
            var death = JSON.parse(data);
            $.each(death, function (item, value) {
                $('#consultation_id').val(value.id);
                $('#consultation_destination').val(value.consultation_destination);
                $('#record_text').val(value.record_text);
                $('#consultation_date').datepicker('update', value.consultation_date);
            });

        }
    });
}

function editCommission(id, action) {
    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_commission": "get_commission"
        },
        dataType: "html",
        success: function (data) {
            var death = JSON.parse(data);
            $.each(death, function (item, value) {
                $('#commission_id').val(value.id);
                $("#military_Medical_commission").attr("checked", value.military_Medical_commission);
                $('#medical_characterization').val(value.medical_characterization);
                $('#medical_characterization').val(value.medical_characterization);
                $('#job_description').val(value.job_description);
                $('#release').val(value.release_commission);
                $('#begin_date').datepicker('update', value.begin_date);
                $('#end_date').datepicker('update', value.end_date);
                $('#recommendation').val(value.recommendation);
                $('#commander_decision').val(value.commander_decision);
                $('#reason_rejection').val(value.reason_rejection);
                getCommissionFirstFile(value.id, 1);
                getCommissionSecondFile(value.id, 2);
            });

        }
    });
}