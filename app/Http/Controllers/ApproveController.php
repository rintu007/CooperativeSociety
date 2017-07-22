<?php
namespace App\Http\Controllers;

use App\Approve;
use App\Loanapplication;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ApproveController extends Controller
{
    public function getIndex()
    {
        return view('approve.index');
    }

    public function getList()
    {
        Session::put('approve_search', Input::has('ok') ? Input::get('search') : (Session::has('approve_search') ? Session::get('approve_search') : ''));
        Session::put('approve_field', Input::has('field') ? Input::get('field') : (Session::has('approve_field') ? Session::get('approve_field') : 'MemberId'));
        Session::put('approve_sort', Input::has('sort') ? Input::get('sort') : (Session::has('approve_sort') ? Session::get('approve_sort') : 'asc'));
        $approves = Loanapplication::where('Approval1', '0')->paginate(8);
            // ->orderBy(Session::get('approve_field'), Session::get('approve_sort'))
        return view('approve.list', ['approves' => $approves]);
    }

    public function getUpdate($id)
    {
        return view('approve.update', ['approve' => Loanapplication::find($id)]);
    }

    // public function postUpdate($id)
    // {
    //     $approve = Loanapplication::find($id);
    //     //  $validator = Validator::make(Input::all(), [
    //     //     "MemberId" => "required|unique:approves"
    //     //     // "LoanapplicationCode" => "required|unique:approves",
    //     //     // "unitprice" => "required|numeric"
    //     // ]);
    //     // if ($validator->fails()) {
    //     //     return array(
    //     //         'fail' => true,
    //     //         'errors' => $validator->getMessageBag()->toArray()
    //     //     );
    //     // }
    //     $approve->MemberId = Input::get('MemberId');
    //     $approve->Designation = Input::get('Designation');
    //     $approve->Savings = Input::get('Savings');
    //     $approve->LoanAmount = Input::get('LoanAmount');
    //     $approve->LoanDuration = Input::get('LoanDuration');
    //     $approve->InterestRate = Input::get('InterestRate');
    //     $approve->BankAccountName = Input::get('BankAccountName');
    //     $approve->AccountType = Input::get('AccountType');
    //     $approve->AccountNo = Input::get('AccountNo');
    //     $approve->BankName = Input::get('BankName');
    //     $approve->BranchName = Input::get('BranchName');
    //     $approve->IncomeSource = Input::get('IncomeSource');
    //     $approve->EnglishName = Input::get('EnglishName');
    //     $approve->DomainName = Input::get('DomainName');
    //     $approve->DivisionOfficeId = Input::get('DivisionOfficeId');
    //     $approve->ZoneId = Input::get('ZoneId');
    //     $approve->AreaId = Input::get('AreaId');
    //     $approve->BranchId = Input::get('BranchId');
    //     $approve->TMSSId = Input::get('TMSSId');
    //                         $TMSSId = Input::get('TMSSId');
    //     $approve->GaurantorName = Input::get('GaurantorName');
    //     $approve->GFatherName = Input::get('GFatherName');
    //     $approve->GMotherName = Input::get('GMotherName');
    //     $approve->GHusbandWifeName = Input::get('GHusbandWifeName');
    //     $approve->GBirthDate = Input::get('GBirthDate');
    //     $approve->GAge = Input::get('GAge');
    //     $approve->GNationality = Input::get('GNationality');
    //     $approve->GOccupation = Input::get('GOccupation');
    //     $approve->GNId = Input::get('GNId');
    //     $approve->GTaxNo = Input::get('GTaxNo');
    //     $approve->GDrivingLicenseNo = Input::get('GDrivingLicenseNo');
    //     $approve->GMobileNo = Input::get('GMobileNo');
    //     $approve->GVillageName = Input::get('GVillageName');
    //     $approve->GPostOffice = Input::get('GPostOffice');
    //     $approve->GPolliceStation = Input::get('GPolliceStation');
    //     $approve->GOfficeName = Input::get('GOfficeName');
    //     $approve->GDesignation = Input::get('GDesignation');
    //     $approve->GOfficeId = Input::get('GOfficeId');
    //     $approve->GOfficeAddress = Input::get('GOfficeAddress');
    //     $approve->GOfficeAddress = Input::get('GOfficeAddress');
    //     $approve->GBankAccountName = Input::get('GBankAccountName');
    //     $approve->GAccountType = Input::get('GAccountType');
    //     $approve->GAccountNo = Input::get('GAccountNo');
    //     $approve->GBankName = Input::get('GBankName');
    //     $approve->GTMemberId = Input::get('GTMemberId');
    //     $approve->GBranchName = Input::get('GBranchName');
    //     $approve->GAdmDate = Input::get('GAdmDate');
    //     $approve->GSavingAmount = Input::get('GSavingAmount');

    //     $file = Input::file('GImage ');
    //     $destinationPath = 'jamindar/';
    //     if(!empty($file)){
    //         $filename = $TMSSId.'_'.$file->getClientOriginalName();
    //         Input::file('GImage')->move($destinationPath, $filename);
    //         $approve->GImage = $filename;
    //     }

    //     $file = Input::file('GSignature ');
    //     $destinationPath = 'jamindar/';
    //     if(!empty($file)){
    //         $filename = $TMSSId.'_'.$file->getClientOriginalName();
    //         Input::file('GSignature')->move($destinationPath, $filename);
    //         $approve->GSignature = $filename;
    //     }

        
    //     $approve->WName1 = Input::get('WName1');
    //     $approve->WName2 = Input::get('WName2');
        
    //     $file = Input::file('W1Signature ');
    //     $destinationPath = 'jamindar/';
    //     if(!empty($file)){
    //         $filename = $TMSSId.'_'.$file->getClientOriginalName();
    //         Input::file('W1Signature')->move($destinationPath, $filename);
    //         $approve->W1Signature = $filename;
    //     }

    //     $file = Input::file('W2Signature ');
    //     if(!empty($file)){
    //         $filename = $TMSSId.'_'.$file->getClientOriginalName();
    //         Input::file('W2Signature')->move($destinationPath, $filename);
    //         $approve->W2Signature = $filename;
    //     }

    //     $approve->save();
    //     return ['url' => 'approve/list'];
    // }

    // public function getCreate()
    // {
    //     return view('approve.create');
    // }

    // public function postCreate()
    // {
    //     $validator = Validator::make(Input::all(), [
    //         "MemberId" => "required|unique:approves"
    //         // "LoanapplicationCode" => "required|unique:approves",
    //         // "unitprice" => "required|numeric"
    //     ]);
    //     if ($validator->fails()) {
    //         return array(
    //             'fail' => true,
    //             'errors' => $validator->getMessageBag()->toArray()
    //         );
    //     }
    //     $approve = new Loanapplication();
    //     $approve->MemberId      = Input::get('MemberId');
    //     $approve->Designation = Input::get('Designation');
    //     $approve->Savings = Input::get('Savings');
    //     $approve->LoanAmount = Input::get('LoanAmount');
    //     $approve->LoanDuration = Input::get('LoanDuration');
    //     $approve->InterestRate = Input::get('InterestRate');
    //     $approve->BankAccountName = Input::get('BankAccountName');
    //     $approve->AccountType = Input::get('AccountType');
    //     $approve->AccountNo = Input::get('AccountNo');
    //     $approve->BankName = Input::get('BankName');
    //     $approve->BranchName = Input::get('BranchName');
    //     $approve->IncomeSource = Input::get('IncomeSource');
    //     $approve->EnglishName = Input::get('EnglishName');
    //     $approve->DomainName = Input::get('DomainName');
    //     $approve->DivisionOfficeId = Input::get('DivisionOfficeId');
    //     $approve->ZoneId = Input::get('ZoneId');
    //     $approve->AreaId = Input::get('AreaId');
    //     $approve->BranchId = Input::get('BranchId');
    //     $approve->TMSSId = Input::get('TMSSId');
    //                         $TMSSId = Input::get('TMSSId');
    //     $approve->GaurantorName = Input::get('GaurantorName');
    //     $approve->GFatherName = Input::get('GFatherName');
    //     $approve->GMotherName = Input::get('GMotherName');
    //     $approve->GHusbandWifeName = Input::get('GHusbandWifeName');
    //     $approve->GBirthDate = Input::get('GBirthDate');
    //     $approve->GAge = Input::get('GAge');
    //     $approve->GNationality = Input::get('GNationality');
    //     $approve->GOccupation = Input::get('GOccupation');
    //     $approve->GNId = Input::get('GNId');
    //     $approve->GTaxNo = Input::get('GTaxNo');
    //     $approve->GDrivingLicenseNo = Input::get('GDrivingLicenseNo');
    //     $approve->GMobileNo = Input::get('GMobileNo');
    //     $approve->GVillageName = Input::get('GVillageName');
    //     $approve->GPostOffice = Input::get('GPostOffice');
    //     $approve->GPolliceStation = Input::get('GPolliceStation');
    //     $approve->GOfficeName = Input::get('GOfficeName');
    //     $approve->GDesignation = Input::get('GDesignation');
    //     $approve->GOfficeId = Input::get('GOfficeId');
    //     $approve->GOfficeAddress = Input::get('GOfficeAddress');
    //     $approve->GOfficeAddress = Input::get('GOfficeAddress');
    //     $approve->GBankAccountName = Input::get('GBankAccountName');
    //     $approve->GAccountType = Input::get('GAccountType');
    //     $approve->GAccountNo = Input::get('GAccountNo');
    //     $approve->GBankName = Input::get('GBankName');
    //     $approve->GTMemberId = Input::get('GTMemberId');
    //     $approve->GBranchName = Input::get('GBranchName');
    //     $approve->GAdmDate = Input::get('GAdmDate');
    //     $approve->GSavingAmount = Input::get('GSavingAmount');

    //     $file = Input::file('GImage ');
    //     $destinationPath = 'jamindar/';
    //     if(!empty($file)){
    //         $filename = $TMSSId.'_'.$file->getClientOriginalName();
    //         Input::file('GImage')->move($destinationPath, $filename);
    //         $approve->GImage = $filename;
    //     }

    //     $file = Input::file('GSignature ');
    //     $destinationPath = 'jamindar/';
    //     if(!empty($file)){
    //         $filename = $TMSSId.'_'.$file->getClientOriginalName();
    //         Input::file('GSignature')->move($destinationPath, $filename);
    //         $approve->GSignature = $filename;
    //     }

        
    //     $approve->WName1 = Input::get('WName1');
    //     $approve->WName2 = Input::get('WName2');

    //     $file = Input::file('W1Signature ');
    //     $destinationPath = 'jamindar/';
    //     if(!empty($file)){
    //         $filename = $TMSSId.'_'.$file->getClientOriginalName();
    //         Input::file('W1Signature')->move($destinationPath, $filename);
    //         $approve->W1Signature = $filename;
    //     }

    //     $file = Input::file('W2Signature ');
    //     $destinationPath = 'jamindar/';
    //     if(!empty($file)){
    //         $filename = $TMSSId.'_'.$file->getClientOriginalName();
    //         Input::file('W2Signature')->move($destinationPath, $filename);
    //         $approve->W2Signature = $filename;
    //     }
    //     $approve->Approval1 = 0;
    //     $approve->save();
    //     return ['url' => 'approve/list'];
    // }

    public function getDelete($id)
    {
        Loanapplication::destroy($id);
        return Redirect('approve/list');
    }

}