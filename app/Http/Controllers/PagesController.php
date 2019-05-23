<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
// use Illuminate\Support\Facades\Storage;
use App\Mail\Cinfo;
Use Exception; 
use Auth;
use Session;
use Storage;
use Crypt;

class PagesController extends Controller
{
    public function index()
    {
        if (view()->exists('pages.index'))
        {
            //return view('pages.index', ['text' => '<b>laravel</b>']);    
            return view('pages.index')
                -> with ('text', '<b>Laravel</b>')
                -> with ('name', '<b>Charmaine</b>')
                -> with (['location'=> 'europe', 'planet'=>'earth']);
        }
        else {
            return 'no view available';
        }        
    }

    public function requirements() {
        return view('pages.requirements');
    }

    public function entry() {
        $server_entryid = time();
        return view('pages.entry')->with('entryid', $server_entryid);
    }

    public function uploadfile(Request $request) {
        $entryid = $request->input('entryid');
        $fullname = $request->input('fullname');
        $email = $request->input('email');

        if($entryid==""){
            $server_entryid = time();
            return view('pages.entry')->with('entryid', $server_entryid);
        }else{
            return view('pages.uploadfile')->with('entryid', $entryid)->with('fullname', $fullname)->with('email', $email);
        }
    }

    public function settings(){
        return view('pages.settings');
    }

    public function blade(){
        $sex = 'male';
        $text = 'hello world';
        return view('blade.bladetest', compact('sev', 'text'));
    }

    public function savefile(Request $request){

        // Storage::disk('local')->put('file.txt', $request->file('file_recipe'));
        $encID = Crypt::encrypt($request->entry_id);

        $uploadedFile_recipe = $request->file('file_recipe');
        $filename_recipe = "up_".$request->entry_id."_1_".$encID.".".$uploadedFile_recipe->getClientOriginalExtension();
        

        Storage::disk('local')->putFileAs(
            '',
            $uploadedFile_recipe,
            $filename_recipe
        );

        $uploadedFile_pic1 = $request->file('file_menu_pic1');
        $filename_pic1 = "up_".$request->entry_id."_2_".$encID.".".$uploadedFile_pic1->getClientOriginalExtension();
        // $filename_pic1 = time().$uploadedFile_pic1->getClientOriginalName();

        Storage::disk('local')->putFileAs(
            '',
            $uploadedFile_pic1,
            $filename_pic1
        );

        $uploadedFile_pic2 = $request->file('file_menu_pic2');
        $filename_pic2 = "up_".$request->entry_id."_3_".$encID.".".$uploadedFile_pic2->getClientOriginalExtension();
        // $filename_pic2 = time().$uploadedFile_pic2->getClientOriginalName();

        Storage::disk('local')->putFileAs(
            '',
            $uploadedFile_pic2,
            $filename_pic2
        );

        $uploadedFile_pic3 = $request->file('file_menu_pic3');
        $filename_pic3 = "up_".$request->entry_id."_4_".$encID.".".$uploadedFile_pic3->getClientOriginalExtension();
        // $filename_pic3 = time().$uploadedFile_pic3->getClientOriginalName();

        Storage::disk('local')->putFileAs(
            '',
            $uploadedFile_pic3,
            $filename_pic3
        );

        return "upload_success";
    }

    public function send(Request $request){

        // $name = $request->b_firstname." ".$request->b_midname." ".$request->b_lastname;
        // Mail::to('wbao2018@gmail.com')->send(new Cinfo($request));
        // Mail::to('wbao2018@gmail.com')->send(new Cinfo());
        // return 'Email was sent';

        $fullname = $request->b_firstname." ".$request->b_midname." ".$request->b_lastname;
        

        // $swdata = array(
        //     'fullname' => $fullname,
        //     'email' => $request->cp_email,
        // );
        

        $data = array(
            'name' => $fullname,
            'b_firstname' => $request->b_firstname,
            'b_midname' => $request->b_midname,
            'b_lastname' => $request->b_lastname,
            'b_birthday' => $request->b_birthday,
            'b_gender' => $request->b_gender,
            'b_nation' => $request->b_nation,
            'b_country' => $request->b_country,
            'cp_street' => $request->cp_street,
            'cp_street2' => $request->cp_street2,
            'cp_city' => $request->cp_city,
            'cp_state' => $request->cp_state,
            'cp_country' => $request->cp_country,
            'cp_postal' => $request->cp_postal,
            'cp_email' => $request->cp_email,
            'cp_mobile' => $request->cp_mobile,
            'cw_company' => $request->cw_company,
            'cw_street' => $request->cw_street,
            'cw_street2' => $request->cw_street2,
            'cw_city' => $request->cw_city,
            'cw_state' => $request->cw_state,
            'cw_country' => $request->cw_country,
            'cw_postal' => $request->cw_postal,
            'cw_email' => $request->cw_email,
            'cw_phone' => $request->cw_phone,
            'cw_experience' => $request->cw_experience,
            'cm_email' => $request->cm_email,
            'cm_address' => $request->cm_address,
            'oth_venue' => $request->oth_venue,
            'oth_recipe' => $request->oth_recipe,
            'oth_website' => $request->oth_website,
            'oth_dm' => $request->oth_dm,
            'oth_poster' => $request->oth_poster,
            'oth_newsletter' => $request->oth_newsletter,
            'oth_facebook' => $request->oth_facebook,
            'oth_friend' => $request->oth_friend,
            'oth_competition' => $request->oth_competition,
            'oth_other' => $request->oth_other,
            'entry' => $request->entry
        );
    
        Mail::send('emails.cookmail', $data, function ($message) use ($request){
            $message->from($request->cp_email, $request->b_firstname." ".$request->b_lastname);
            $message->to('example.com')->subject('The 7th Japanese Culinary Arts Competition');
        });

        if($request->cm_email=='Private email address'){
            Mail::send('emails.replymail', $data, function ($message) use ($request){
                $message->from('example.com', 'Service Team');
                $message->to($request->cp_email)->subject('Reply - The 7th Japanese Culinary Arts Competition');
            });
        }elseif($request->cm_email=='Office email address'){
            Mail::send('emails.replymail', $data, function ($message) use ($request){
                $message->from('example.com', 'Service Team');
                $message->to($request->cw_email)->subject('Reply - The 7th Japanese Culinary Arts Competition');
            });
        }

        return "email_success";
    }
}
