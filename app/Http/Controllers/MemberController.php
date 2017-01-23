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
        Session::put('member_field', Input::has('field') ? Input::get('field') : (Session::has('member_field') ? Session::get('member_field') : 'name'));
        Session::put('member_sort', Input::has('sort') ? Input::get('sort') : (Session::has('member_sort') ? Session::get('member_sort') : 'asc'));
        $members = Member::where('name', 'like', '%' . Session::get('member_search') . '%')
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
        if ($member->name != Input::get('name'))
            $rules += ['name' => 'required|unique:members'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $member->name = Input::get('name');
        $member->MemberCode = Input::get('MemberCode');
        //$member->unitprice = Input::get('unitprice');
        $member->save();
        return ['url' => 'member/list'];
    }

    public function getCreate()
    {
        return view('member.create');
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "name" => "required|unique:members",
            "MemberCode" => "required|unique:members"
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $member = new Member();
        $member->name = Input::get('name');
        $member->MemberCode         = Input::get('MemberCode');
        $member->CSMId              = Input::get('CSMId'); 
        $member->BanglaName         = Input::get('BanglaName');
        $member->name12             = Input::get('name12');
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
        $member->SPFatherName       = Input::get('SPFatherName');
        $member->SPFatherName2      = Input::get('SPFatherName2');
        $member->SPMotherName       = Input::get('SPMotherName');
        $member->SPMotherName2      = Input::get('SPMotherName2');
        $member->SPHusbanWifeName   = Input::get('SPHusbanWifeName');
        $member->SPHusbanWifeName2  = Input::get('SPHusbanWifeName2');
        $member->Relation           = Input::get('Relation');
        $member->Relation2          = Input::get('Relation2');
        $member->GivenPortion       = Input::get('GivenPortion');
        $member->GivenPortion2      = Input::get('GivenPortion2');
        $member->Image              = Input::get('Image');
        $member->TMSSIdCard         = Input::get('TMSSIdCard');
        $member->NIdImage           = Input::get('NIdImage');
        $member->NomineeImage       = Input::get('NomineeImage');
        $member->BirthCertificate   = Input::get('BirthCertificate');
        $member->NomineeImage2      = Input::get('NomineeImage2');
        $member->BirthCertificate2  = Input::get('BirthCertificate2');
        $member->save();
        return ['url' => 'member/list'];
    }

    public function getDelete($id)
    {
        Member::destroy($id);
        return Redirect('member/list');
    }

}