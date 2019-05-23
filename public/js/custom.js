$(document).ready(function(){
        
    HeadDisplay('1.0', '0.6', '0.6');
    MainDisplay('block', 'none', 'none');
    HeadDisplayUp('1.0', '0.6', '0.6');
    MainDisplayUp('block', 'none', 'none');

    $("#data_form").submit(function(e) {
        e.preventDefault();
        console.log("OK");
        if($(".cp_email").val()!=$(".cp_email2").val()){
            alert("Please confirm the private email address!");
        }else if($(".cw_email").val()!=$(".cw_email2").val()){
            alert("Please confirm the office email address!");
        }else{
            HeadDisplay('0.6', '1.0', '0.6');
            MainDisplay('none', 'block', 'none');
            DataReview();
        }
    });

    $("#file_form").submit(function(e) {
        e.preventDefault();
        console.log("OK");
        HeadDisplayUp('0.6', '1.0', '0.6');
        MainDisplayUp('none', 'block', 'none');
        FileReview();
    });


    $(".back_bt").click(function(){
        HeadDisplay('1.0', '0.6', '0.6');
        MainDisplay('block', 'none', 'none');
    });

    $(".confirm_bt").click(function(){
        $(this).html('<b><i class="fa fa-circle-o-notch fa-spin"></i> Sending Email...</b>');
        SendingData();
    });

    $(".back_bt_up").click(function(){
        HeadDisplayUp('1.0', '0.6', '0.6');
        MainDisplayUp('block', 'none', 'none');
    });

    $(".confirm_bt_up").click(function(){
        $(this).html('<b><i class="fa fa-circle-o-notch fa-spin"></i> Uploading...</b>');
        UploadingFile();
    });

});

function HeadDisplay(op1, op2, op3){
    $(".la_entry_step1").css('opacity', op1);
    $(".la_entry_step2").css('opacity', op2);
    $(".la_entry_step3").css('opacity', op3);
}

function MainDisplay(op1, op2, op3){
    $(".entry_step1").css('display', op1);
    $(".entry_step2").css('display', op2);
    $(".entry_step3").css('display', op3);
}

function HeadDisplayUp(op1, op2, op3){
    $(".la_entry_step1_up").css('opacity', op1);
    $(".la_entry_step2_up").css('opacity', op2);
    $(".la_entry_step3_up").css('opacity', op3);
}

function MainDisplayUp(op1, op2, op3){
    $(".entry_step1_up").css('display', op1);
    $(".entry_step2_up").css('display', op2);
    $(".entry_step3_up").css('display', op3);
}

function FileReview(){
    $(".la_file_recipe").text($(".file_recipe").val());
    $(".la_file_menu1").text($(".file_menu1").val());
    $(".la_file_menu2").text($(".file_menu2").val());
    $(".la_file_menu3").text($(".file_menu3").val());
}

function DataReview(){
    // alert($(".b_birth_day").val());
    $(".la_b_firstname").text($(".b_firstname").val());
    $(".la_b_midname").text($(".b_midname").val());
    $(".la_b_lastname").text($(".b_lastname").val());
    $(".la_b_birthday").text($(".b_birth_day").val() + " " + $(".b_birth_month").val() + " " + $(".b_birth_year").val());
    $(".la_b_gender").text($(".b_gender:checked").val());
    $(".la_b_nation").text($(".b_nation").val());
    $(".la_b_country").text($(".b_country").val());
    $(".la_cp_street").text($(".cp_street").val());
    $(".la_cp_street2").text($(".cp_street2").val());
    $(".la_cp_city").text($(".cp_city").val());
    $(".la_cp_state").text($(".cp_state").val());
    $(".la_cp_country").text($(".cp_country").val());
    $(".la_cp_postal").text($(".cp_postal").val());
    $(".la_cp_email").text($(".cp_email").val());
    $(".la_cp_mobile").text("+" + $(".cp_mobile_region").val() + "-" + $(".cp_mobile_body").val());
    $(".la_cw_company").text($(".cw_company").val());
    $(".la_cw_street").text($(".cw_street").val());
    $(".la_cw_street2").text($(".cw_street2").val());
    $(".la_cw_city").text($(".cw_city").val());
    $(".la_cw_state").text($(".cw_state").val());
    $(".la_cw_country").text($(".cw_country").val());
    $(".la_cw_postal").text($(".cw_postal").val());
    $(".la_cw_email").text($(".cw_email").val());
    $(".la_cw_phone").text("+" + $(".cw_phone_region").val() + "-" + $(".cw_phone_body").val());
    $(".la_cw_experience").text($(".cw_experience").val());
    $(".la_cm_email").text($(".cm_email:checked").val());
    $(".la_cm_address").text($(".cm_address:checked").val());
    $(".la_oth_venue").text($(".oth_venue").val());
    $(".la_oth_recipe").text($(".oth_recipe:checked").val());

    if($(".oth_website").prop("checked") == true){
        $(".la_oth_website").show();
        $(".hla_website").val("The Japanese Culinary Arts Competition website");
    }else{
        $(".la_oth_website").hide();
        $(".hla_website").val("");
    }
    if($(".oth_dm").prop("checked") == true){
        $(".la_oth_dm").show();
        $(".hla_dm").val("DM / Leaflet");
    }else{
        $(".la_oth_dm").hide();
        $(".hla_dm").val("");
    }
    if($(".oth_poster").prop("checked") == true){
        $(".la_oth_poster").show();
        $(".hla_poster").val("Poster");
    }else{
        $(".la_oth_poster").hide();
        $(".hla_poster").val("");
    }
    if($(".oth_newsletter").prop("checked") == true){
        $(".la_oth_newsletter").show();
        $(".hla_newsletter").val("Email newsletter");
    }else{
        $(".la_oth_newsletter").hide();
        $(".hla_newsletter").val("");
    }
    if($(".oth_facebook").prop("checked") == true){
        $(".la_oth_facebook").show();
        $(".hla_facebook").val("Facebook");
    }else{
        $(".la_oth_facebook").hide();
        $(".hla_facebook").val("");
    }
    if($(".oth_friend").prop("checked") == true){
        $(".la_oth_friend").show();
        $(".hla_friend").val("Friend");
    }else{
        $(".la_oth_friend").hide();
        $(".hla_friend").val("");
    }
    if($(".oth_competition").prop("checked") == true){
        $(".la_oth_competition").show();
        $(".hla_competition").val("I have entered this competition before");
    }else{
        $(".la_oth_competition").hide();
        $(".hla_competition").val("");
    }
    if($(".oth_other").prop("checked") == true){
        $(".la_oth_other").show();
        $(".hla_other").val("Other");
    }else{
        $(".la_oth_other").hide();
        $(".hla_other").val("");
    }
}

// function SendingData(){

//     $.post( "/send", 
//     {
//         _token: "{{ csrf_token() }}",
//         up_status: "da"
//     },
//     function(data,status){
//         console.log(data);
//         if(status=="success"){
//             alert(data);
//         }else{
//             alert("Error Occured!: " + status);
//         }
// 	});
// }