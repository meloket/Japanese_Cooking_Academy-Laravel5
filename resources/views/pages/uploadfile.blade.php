@extends('layouts.app')

@section('content')

    <div class="entry_banner">
        <div class="req_banner_span">
            <div class="req_banner_text"><i>ENTRY</i></div>
        </div>
    </div>
    <div class="container">
        <div class="mid_sec">
            <div class="row">
                <div class="col-sm-4">
                    <div class="row">
                        <div class="arrow-block2 la_entry_step1_up">
                            Upload a recipe and pictures
                        </div>
                        <div class="arrow-right2 la_entry_step1_up"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <div class="arrow-block2 la_entry_step2_up">
                            Review and confirm your application
                        </div>
                        <div class="arrow-right2 la_entry_step2_up"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <div class="arrow-block-end2 la_entry_step3_up">
                            Complete your application
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form id="file_form">
    <input type="hidden" id="entrynum" value="{{$entryid}}">
    <div class="container entry_step1_up">
        <div class="mid_sec">
            <div class="mid_para glabel2">
                <h4><b>UPLOAD A RECIPE and PICTURES</b></h4>
            </div>
            <div class="mid_para entry_basic_info">
                <h4><b>APPLICANT'S INFORMATION</b></h4>
                <div class="pixdiv2"></div>
                <div class="intro_text entry_space">
                    <div class="row entry_space">
                        <div class="col-sm-3">Full name</div>
                        <div class="col-sm-9"><label>{{$fullname}}</label></div>
                    </div>
                    <div class="row entry_space">
                        <div class="col-sm-3">Entry No.</div>
                        <div class="col-sm-9"><label>{{$entryid}}</label></div>
                    </div>
                    <div class="row entry_space">
                        <div class="col-sm-3">Email address</div>
                        <div class="col-sm-9"><label>{{$email}}</label></div>
                    </div>
                </div>
            </div>
            <div class="mid_para entry_basic_info">
                <h4><b>RECIPE</b></h4>
                <div class="pixdiv2"></div>
                <div class="intro_text entry_space">
                    <div class="esp_red">*Required</div>
                    <div class="row entry_space">
                        <div class="col-sm-3">Recipe form<span class="esp_red">*</span></div>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class="input-group input-file" name="file_recipe">
                                            <input type="text" class="form-control file_doc file_recipe" placeholder='Choose a file...' />			
                                            <span class="input-group-btn">
                                                <button class="btn btn-default btn-choose" type="button">Upload a file</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mid_para entry_basic_info">
                <h4><b>MENU PICTURES</b></h4>
                <div class="pixdiv2"></div>
                <div class="intro_text entry_space">
                    <div class="esp_red">*Required</div>
                    <div class="row entry_space">
                        <div class="col-sm-3">Menu picture 1<span class="esp_red">*</span></div>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class="input-group input-file" name="file_menu_pic1">
                                            <input type="text" class="form-control file_doc file_menu1" placeholder='Choose a file...' />			
                                            <span class="input-group-btn">
                                                <button class="btn btn-default btn-choose" type="button">Upload a file</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row entry_space">
                        <div class="col-sm-3">Menu picture 2<span class="esp_red">*</span></div>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class="input-group input-file" name="file_menu_pic2">
                                            <input type="text" class="form-control file_doc file_menu2" placeholder='Choose a file...' />			
                                            <span class="input-group-btn">
                                                <button class="btn btn-default btn-choose" type="button">Upload a file</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row entry_space">
                        <div class="col-sm-3">Menu picture 3<span class="esp_red">*</span></div>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class="input-group input-file" name="file_menu_pic3">
                                            <input type="text" class="form-control file_doc file_menu3" placeholder='Choose a file...' />			
                                            <span class="input-group-btn">
                                                <button class="btn btn-default btn-choose" type="button">Upload a file</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mid_para entry_basic_info endbutton">
                <div class="container">
                    <button type="submit" class="button btn col-sm-5 review_bt2"><b>Next</b></button>
                </div>
            </div>
        </div>
    </div>
    </form>
    <div class="container entry_step2_up">
        <div class="mid_sec">
            <div class="mid_para glabel2">
                <h4><b>UPLOAD A RECIPE and PICTURES</b></h4>
            </div>
            <div class="mid_para entry_basic_info">
                <h4><b>APPLICANT'S INFORMATION</b></h4>
                <div class="pixdiv2"></div>
                <div class="intro_text entry_space">
                    <div class="row entry_space">
                        <div class="col-sm-3">Full name</div>
                        <div class="col-sm-9"><label>Mr John Smith</label></div>
                    </div>
                    <div class="row entry_space">
                        <div class="col-sm-3">Entry No.</div>
                        <div class="col-sm-9"><label>0000</label></div>
                    </div>
                    <div class="row entry_space">
                        <div class="col-sm-3">example@uk.com</div>
                        <div class="col-sm-9"><label>Mr John Smith</label></div>
                    </div>
                </div>
            </div>
            <div class="mid_para entry_basic_info">
                <h4><b>RECIPE</b></h4>
                <div class="pixdiv2"></div>
                <div class="intro_text entry_space">
                    <div class="esp_red">*Required</div>
                    <div class="row entry_space">
                        <div class="col-sm-3">Recipe form<span class="esp_red">*</span></div>
                        <div class="col-sm-9 la_file_recipe">Recipe-example.pdf</div>
                    </div>
                </div>
            </div>
            <div class="mid_para entry_basic_info">
                <h4><b>MENU PICTURES</b></h4>
                <div class="pixdiv2"></div>
                <div class="intro_text entry_space">
                    <div class="esp_red">*Required</div>
                    <div class="row entry_space">
                        <div class="col-sm-3">Menu picture 1<span class="esp_red">*</span></div>
                        <div class="col-sm-9 la_file_menu1">Menu-1-example.jpg</div>
                    </div>
                    <div class="row entry_space">
                        <div class="col-sm-3">Menu picture 2<span class="esp_red">*</span></div>
                        <div class="col-sm-9 la_file_menu2">Menu-2-example.jpg</div>
                    </div>
                    <div class="row entry_space">
                        <div class="col-sm-3">Menu picture 3<span class="esp_red">*</span></div>
                        <div class="col-sm-9 la_file_menu3">Menu-3-example.jpg</div>
                    </div>
                </div>
            </div>
            <div class="mid_para entry_basic_info endbutton">
                <span class="esp_red">*Application submission will be completed by clicking ’Confirm’ below.</span>
                <div class="container entry_space_sp">
                    <button type="button" class="button btn col-sm-7 confirm_bt_up"><b>CONFIRM</b></button>
                </div>
                <div class="container mid_span">
                    <button class="button btn col-sm-5 back_bt_up"><b>Go back and edit</b></button>
                </div>
            </div>
        </div>
    </div>
    <div class="container entry_step3_up">
        <div class="mid_sec">
            <div class="mid_para endpage_up">
                <h4><b>Thank you for registering for Japanese Culinary Arts Competition!</b></h4>
            </div>
        </div>
    </div>

<script>
function bs_input_file() {
	$(".input-file").before(
		function() {
			if ( ! $(this).prev().hasClass('input-ghost') ) {
				var element = $("<input type='file' class='input-ghost' style='display:none;' accept='.doc, .docx, .pdf, .xls, .xlsx, .jpg, .png, .bmp' required>");
				element.attr("name",$(this).attr("name"));
				element.change(function(){
					element.next(element).find('input').val((element.val()).split('\\').pop());
				});
				$(this).find("button.btn-choose").click(function(){
					element.click();
				});
				$(this).find('input').css("cursor","pointer");
				$(this).find('input').mousedown(function() {
					$(this).parents('.input-file').prev().click();
					return false;
				});
				return element;
			}
		}
	);
}
$(function() {
    $(".file_doc").val("");
	bs_input_file();
});

function UploadingFile(){

    var _token = "{{ csrf_token() }}";
    formdata = new FormData();
    formdata.append("_token", _token);
    formdata.append("entry_id", $("#entrynum").val());

    if($("input[type='file'][name='file_recipe']").prop('files').length > 0)
    {
        file_recipe = $("input[type='file'][name='file_recipe']").prop('files')[0];
        formdata.append("file_recipe", file_recipe);
    }

    if($("input[type='file'][name='file_menu_pic1']").prop('files').length > 0)
    {
        file_menu_pic1 = $("input[type='file'][name='file_menu_pic1']").prop('files')[0];
        formdata.append("file_menu_pic1", file_menu_pic1);
    }

    if($("input[type='file'][name='file_menu_pic2']").prop('files').length > 0)
    {
        file_menu_pic2 = $("input[type='file'][name='file_menu_pic2']").prop('files')[0];
        formdata.append("file_menu_pic2", file_menu_pic2);
    }

    if($("input[type='file'][name='file_menu_pic3']").prop('files').length > 0)
    {
        file_menu_pic3 = $("input[type='file'][name='file_menu_pic3']").prop('files')[0];
        formdata.append("file_menu_pic3", file_menu_pic3);
    }

    $.ajax({
        url: "/upload-data",
        type: "POST",
        data: formdata,
        processData: false,
        contentType: false,
        success: function (result) {
            $(this).html('<b>Confirm</b>');
            if(result=='upload_success'){
                HeadDisplayUp('0.6', '0.6', '1.0');
                MainDisplayUp('none', 'none', 'block');
            }else{
                alert(result);
            }
        }
    });
}

</script>

@endsection
