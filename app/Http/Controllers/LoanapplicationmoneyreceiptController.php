<?php
namespace App\Http\Controllers;

use App\Loanapplicationmoneyreceipt;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoanapplicationmoneyreceiptController extends Controller
{
    public function getIndex()
    {
        return view('loanapplicationmoneyreceipt.index');
    }

    public function getList()
    {
        Session::put('loanapplicationmoneyreceipt_search', Input::has('ok') ? Input::get('search') : (Session::has('loanapplicationmoneyreceipt_search') ? Session::get('loanapplicationmoneyreceipt_search') : ''));
        Session::put('loanapplicationmoneyreceipt_field', Input::has('field') ? Input::get('field') : (Session::has('loanapplicationmoneyreceipt_field') ? Session::get('loanapplicationmoneyreceipt_field') : 'MemberId'));
        Session::put('loanapplicationmoneyreceipt_sort', Input::has('sort') ? Input::get('sort') : (Session::has('loanapplicationmoneyreceipt_sort') ? Session::get('loanapplicationmoneyreceipt_sort') : 'asc'));
        $loanapplicationmoneyreceipts = Loanapplicationmoneyreceipt::where('MemberId', 'like', '%' . Session::get('loanapplicationmoneyreceipt_search') . '%')->paginate(8);
            // ->orderBy(Session::get('loanapplicationmoneyreceipt_field'), Session::get('loanapplicationmoneyreceipt_sort'))
        return view('loanapplicationmoneyreceipt.list', ['loanapplicationmoneyreceipts' => $loanapplicationmoneyreceipts]);
    }

    public function getUpdate($id)
    {
        return view('loanapplicationmoneyreceipt.update', ['loanapplicationmoneyreceipt' => Loanapplicationmoneyreceipt::find($id)]);
    }

    public function postUpdate($id)
    {
       $loanapplicationmoneyreceipt = Loanapplicationmoneyreceipt::find($id);
//        $rules = ["FormFee" => "required|numeric"];
//        if ($loanapplicationmoneyreceipt->name != Input::get('name'))
//            $rules += ['name' => 'required|unique:loanapplicationmoneyreceipts'];
//        $validator = Validator::make(Input::all(), $rules);
//        if ($validator->fails()) {
//            return array(
//                'fail' => true,
//                'errors' => $validator->getMessageBag()->toArray()
//            );

        $loanapplicationmoneyreceipt->serial_no     = Input::get('serial_no');
        $loanapplicationmoneyreceipt->MemberName   = Input::get('MemberName');
        $loanapplicationmoneyreceipt->MemberId         = Input::get('MemberId');
        $loanapplicationmoneyreceipt->MobileNo     = Input::get('MobileNo');
        $loanapplicationmoneyreceipt->FormFee      = Input::get('FormFee');
        $loanapplicationmoneyreceipt->ActualDate          = Input::get('ActualDate');
        $loanapplicationmoneyreceipt->save();
        return ['url' => 'loanapplicationmoneyreceipt/list'];
    }

    public function getCreate()
    {
        return view('loanapplicationmoneyreceipt.create');
    }

    public function postCreate()
    {
//        $validator = Validator::make(Input::all(), [
//            "MemberName"       => "required|unique:loanapplicationmoneyreceipts",
//            "CSMId"             => "required|unique:MemberId",
//            "FormFee"          => "required|numeric"
//        ]);
//        if ($validator->fails()) {
//            return array(
//                'fail' => true,
//                'errors' => $validator->getMessageBag()->toArray()
//            );
//        }
        $loanapplicationmoneyreceipt                = new Loanapplicationmoneyreceipt();
        $loanapplicationmoneyreceipt->serial_no     = Input::get('serial_no');
        $loanapplicationmoneyreceipt->MemberName   = Input::get('MemberName');
        $loanapplicationmoneyreceipt->MemberId     = Input::get('MemberId');
        $loanapplicationmoneyreceipt->MobileNo     = Input::get('MobileNo');
        $loanapplicationmoneyreceipt->FormFee      = Input::get('FormFee');
        $loanapplicationmoneyreceipt->ActualDate    = Input::get('ActualDate');
        $loanapplicationmoneyreceipt->save();
        return ['url' => 'loanapplicationmoneyreceipt/list'];
    }

    public function getDelete($id)
    {
        Loanapplicationmoneyreceipt::destroy($id);
        return Redirect('loanapplicationmoneyreceipt/list');
    }

}