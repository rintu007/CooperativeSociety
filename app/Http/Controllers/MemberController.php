<?php
namespace App\Http\Controllers;

use App\Member;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class MemberController extends Controller
{
    public function getIndex()
    {
        return view('member.index');
    }

    public function getList()
    {

        Session::put('member_search', Input::has('ok') ? Input::get('search') : (Session::has('member_search') ? Session::get('member_search') : ''));
        Session::put('member_field', Input::has('field') ? Input::get('field') : (Session::has('member_field') ? Session::get('member_field') : 'BanglaName'));
        Session::put('member_sort', Input::has('sort') ? Input::get('sort') : (Session::has('member_sort') ? Session::get('member_sort') : 'asc'));

        $members = Member::where('MemberId', 'like', '%' . Session::get('member_search') . '%')
            ->orderBy(Session::get('member_field'), Session::get('member_sort'))->paginate(8);


        return view('member.list', ['members' => $members]);

    }

    public function getUpdate($id)
    {
        return view('member.update', ['member' => Member::find($id)]);
    }

    public function postUpdate($id)
    {
        $member = Member::find($id);
        //$rules = ["unitprice" => "required|numeric"];
        // if ($member->name != Input::get('name'))
        //     $rules += ['name' => 'required|unique:members'];
        // $validator = Validator::make(Input::all(), $rules);
        // if ($validator->fails()) {
        //     return array(
        //         'fail' => true,
        //         'errors' => $validator->getMessageBag()->toArray()
        //     );
        // }
        $member->MemberId           = Input::get('MemberId');
        $member_id = Input::get('MemberId');

        $member->BanglaName         = Input::get('BanglaName');
        $member->EnglishName        = Input::get('EnglishName');
        $member->FatherName         = Input::get('FatherName');
        $member->MotherName         = Input::get('MotherName');
        $member->HusbandWifeName    = Input::get('FatherName');
        $member->Age                = Input::get('Age');
        $member->Occupation         = Input::get('Occupation');
        $member->Nationality        = Input::get('Nationality');
        $member->NId                = Input::get('NId');
        $member->PassportNo         = Input::get('PassportNo');
        $member->TaxIdNo            = Input::get('TaxIdNo');
        $member->Phone              = Input::get('Phone');
        $member->Mobile             = Input::get('Mobile');
        $member->PresentVillageName = Input::get('PresentVillageName');
        $member->PresentPostOffice  = Input::get('PresentPostOffice');
        $member->PresentUpojela     = Input::get('PresentUpojela');
        $member->PresentJela        = Input::get('PresentJela');
        $member->SPName             = Input::get('SPName');
        $member->SPName2            = Input::get('SPName2');
        $member->SPMotherName       = Input::get('SPFatherName');
        $member->SPMotherName2      = Input::get('SPFatherName2');
        $member->SPHusbandWifeName  = Input::get('SPHusbanWifeName');
        $member->SPHusbandWifeName2 = Input::get('SPHusbanWifeName2');
        $member->Relation           = Input::get('Relation');
        $member->Relation2          = Input::get('Relation2');
        $member->GivenPortion       = Input::get('GivenPortion');
        $member->GivenPortion2      = Input::get('GivenPortion2');
        
        $file = Input::file('Image');
        $destinationPath = 'uploads/';
        if(!empty($file)){
            $filename = $member_id.'_'.$file->getClientOriginalName();
            Input::file('Image')->move($destinationPath, $filename);
            $member->Image = $filename;
        }

        $file = Input::file('TMSSIdCard');
        $destinationPath = 'uploads/';
        if(!empty($file)){
            $filename = $member_id.'_'.$file->getClientOriginalName();
            Input::file('TMSSIdCard')->move($destinationPath, $filename);
            $member->TMSSIdCard = $filename;
        }

        $file = Input::file('NIdImage');
        $destinationPath = 'uploads/';
        if(!empty($file)){
            $filename = $member_id.'_'.$file->getClientOriginalName();
            Input::file('NIdImage')->move($destinationPath, $filename);
            $member->NIdImage = $filename;
        }

        $file = Input::file('NomineeImage');
        $destinationPath = 'uploads/';
        if(!empty($file)){
            $filename = $member_id.'_'.$file->getClientOriginalName();
            Input::file('NomineeImage')->move($destinationPath, $filename);
            $member->NomineeImage = $filename;
        }

        $file = Input::file('BirthCertificate');
        $destinationPath = 'uploads/';
        if(!empty($file)){
            $filename = $member_id.'_'.$file->getClientOriginalName();
            Input::file('BirthCertificate')->move($destinationPath, $filename);
            $member->BirthCertificate = $filename;
        }

        $file = Input::file('NomineeImage2');
        $destinationPath = 'uploads/';
        if(!empty($file)){
            $filename = $member_id.'_'.$file->getClientOriginalName();
            Input::file('NomineeImage2')->move($destinationPath, $filename);
            $member->NomineeImage2 = $filename;
        }

        $file = Input::file('BirthCertificate2');
        $destinationPath = 'uploads/';
        if(!empty($file)){
            $filename = $member_id.'_'.$file->getClientOriginalName();
            Input::file('BirthCertificate2')->move($destinationPath, $filename);
            $member->BirthCertificate2 = $filename;
        }

        $member->save();
        return ['url' => 'member/list'];
    }

    public function getCreate()
    {
        return view('member.create');
    }

    public function postCreate()
    {
        // $validator = Validator::make(Input::all(), [
        //     "name" => "required|unique:members",
        //     "MemberCode" => "required|unique:members"
        // ]);
        // if ($validator->fails()) {
        //     return array(
        //         'fail' => true,
        //         'errors' => $validator->getMessageBag()->toArray()
        //     );
        // }
        

        // $jamindarnid = Input::get('JamindarNid');

        // $jamindar->JamindarNid = Input::get('JamindarNid');

        // $file = Input::file('JamindarImage');
        // $input = array('image' => $file);

        // $destinationPath = 'uploads/';
        // if (!empty($file)) {
        //     $filename = $jamindarnid."_".$file->getClientOriginalName();

        //     Input::file('JamindarImage')->move($destinationPath, $filename);
        //     $jamindar->Jamindarphoto = $filename;
        // }


        
        $member = new Member();
        $member->MemberId           = Input::get('MemberId');
        $member_id = Input::get('MemberId');

        $member->BanglaName         = Input::get('BanglaName');
        $member->EnglishName        = Input::get('EnglishName');
        $member->FatherName         = Input::get('FatherName');
        $member->MotherName         = Input::get('MotherName');
        $member->HusbandWifeName    = Input::get('FatherName');
        $member->Age                = Input::get('Age');
        $member->Occupation         = Input::get('Occupation');
        $member->Nationality        = Input::get('Nationality');
        $member->NId                = Input::get('NId');
        $member->PassportNo         = Input::get('PassportNo');
        $member->TaxIdNo            = Input::get('TaxIdNo');
        $member->Phone              = Input::get('Phone');
        $member->Mobile             = Input::get('Mobile');
        $member->PresentVillageName = Input::get('PresentVillageName');
        $member->PresentPostOffice  = Input::get('PresentPostOffice');
        $member->PresentUpojela     = Input::get('PresentUpojela');
        $member->PresentJela        = Input::get('PresentJela');
        $member->SPName             = Input::get('SPName');
        $member->SPName2            = Input::get('SPName2');
        $member->SPMotherName       = Input::get('SPFatherName');
        $member->SPMotherName2      = Input::get('SPFatherName2');
        $member->SPHusbandWifeName  = Input::get('SPHusbanWifeName');
        $member->SPHusbandWifeName2 = Input::get('SPHusbanWifeName2');
        $member->Relation           = Input::get('Relation');
        $member->Relation2          = Input::get('Relation2');
        $member->GivenPortion       = Input::get('GivenPortion');
        $member->GivenPortion2      = Input::get('GivenPortion2');
        
        $file = Input::file('Image');
        $destinationPath = 'uploads/';
        if(!empty($file)){
            $filename = $member_id.'_'.$file->getClientOriginalName();
            Input::file('Image')->move($destinationPath, $filename);
            $member->Image = $filename;
        }

        $file = Input::file('TMSSIdCard');
        $destinationPath = 'uploads/';
        if(!empty($file)){
            $filename = $member_id.'_'.$file->getClientOriginalName();
            Input::file('TMSSIdCard')->move($destinationPath, $filename);
            $member->TMSSIdCard = $filename;
        }

        $file = Input::file('NIdImage');
        $destinationPath = 'uploads/';
        if(!empty($file)){
            $filename = $member_id.'_'.$file->getClientOriginalName();
            Input::file('NIdImage')->move($destinationPath, $filename);
            $member->NIdImage = $filename;
        }

        $file = Input::file('NomineeImage');
        $destinationPath = 'uploads/';
        if(!empty($file)){
            $filename = $member_id.'_'.$file->getClientOriginalName();
            Input::file('NomineeImage')->move($destinationPath, $filename);
            $member->NomineeImage = $filename;
        }

        $file = Input::file('BirthCertificate');
        $destinationPath = 'uploads/';
        if(!empty($file)){
            $filename = $member_id.'_'.$file->getClientOriginalName();
            Input::file('BirthCertificate')->move($destinationPath, $filename);
            $member->BirthCertificate = $filename;
        }

        $file = Input::file('NomineeImage2');
        $destinationPath = 'uploads/';
        if(!empty($file)){
            $filename = $member_id.'_'.$file->getClientOriginalName();
            Input::file('NomineeImage2')->move($destinationPath, $filename);
            $member->NomineeImage2 = $filename;
        }

        $file = Input::file('BirthCertificate2');
        $destinationPath = 'uploads/';
        if(!empty($file)){
            $filename = $member_id.'_'.$file->getClientOriginalName();
            Input::file('BirthCertificate2')->move($destinationPath, $filename);
            $member->BirthCertificate2 = $filename;
        }

        $member->save();
        return ['url' => 'member/list'];
    }

    public function getDelete($id)
    {
        Member::destroy($id);
        return Redirect('member/list');
    }

}