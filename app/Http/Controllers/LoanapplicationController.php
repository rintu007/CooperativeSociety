<?php
namespace App\Http\Controllers;

use App\Loanapplication;
use App\Domain;
use App\Mikrofdivision;
use App\Zone;
use App\Area;
use App\Brn;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoanapplicationController extends Controller
{
    public function getIndex()
    {
        return view('loanapplication.index');
    }

    public function getList()
    {
        Session::put('loanapplication_search', Input::has('ok') ? Input::get('search') : (Session::has('loanapplication_search') ? Session::get('loanapplication_search') : ''));
        Session::put('loanapplication_field', Input::has('field') ? Input::get('field') : (Session::has('loanapplication_field') ? Session::get('loanapplication_field') : 'MemberId'));
        Session::put('loanapplication_sort', Input::has('sort') ? Input::get('sort') : (Session::has('loanapplication_sort') ? Session::get('loanapplication_sort') : 'asc'));
        $loanapplications = Loanapplication::where('MemberId', 'like', '%' . Session::get('loanapplication_search') . '%')->paginate(25);
            // ->orderBy(Session::get('loanapplication_field'), Session::get('loanapplication_sort'))
        return view('loanapplication.list', ['loanapplications' => $loanapplications]);
    }

    public function getUpdate($id)
    {
       $DomainInfo = [''=>'--select--'] + Domain::lists('DomainName', 'id')->all();
       $DivisionOfficeInfo = [''=>'--select--'] + Mikrofdivision::lists('DivisionOfficeName', 'id')->all();
       $ZoneInfo =[''=>'--select--'] +  Zone::lists('ZoneName', 'id')->all();
       $Area =[''=>'--select--'] +  Area::lists('AreaName', 'id')->all();
       $BranchInfo =[''=>'--select--'] +  Brn::lists('BranchName', 'id')->all();
        return view('loanapplication.update', ['loanapplication' => Loanapplication::find($id)])->with('DomainInfo', $DomainInfo)->with('DivisionOfficeInfo', $DivisionOfficeInfo)->with('ZoneInfo',$ZoneInfo)->with('Area',$Area)->with('BranchInfo',$BranchInfo);
        
    }

    public function postUpdate($id)
    {
        $loanapplication = Loanapplication::find($id);
        //  $validator = Validator::make(Input::all(), [
        //     "MemberId" => "required|unique:loanapplications"
        //     // "LoanapplicationCode" => "required|unique:loanapplications",
        //     // "unitprice" => "required|numeric"
        // ]);
        // if ($validator->fails()) {
        //     return array(
        //         'fail' => true,
        //         'errors' => $validator->getMessageBag()->toArray()
        //     );
        // }
        $loanapplication->MemberId = Input::get('MemberId');
        $loanapplication->Designation = Input::get('Designation');
        $loanapplication->Savings = Input::get('Savings');
        $loanapplication->LoanType = Input::get('LoanType');
        $loanapplication->LoanAmount = Input::get('LoanAmount');
        $loanapplication->LoanDuration = Input::get('LoanDuration');
        $loanapplication->InstallmentNo = Input::get('InstallmentNo');
        $loanapplication->PayedInstallment = 0;
        $loanapplication->InterestRate = Input::get('InterestRate');
        $loanapplication->BankAccountName = Input::get('BankAccountName');
        $loanapplication->AccountType = Input::get('AccountType');
        $loanapplication->AccountNo = Input::get('AccountNo');
        $loanapplication->BankName = Input::get('BankName');
        $loanapplication->BranchName = Input::get('BranchName');
        $loanapplication->IncomeSource = Input::get('IncomeSource');
        $loanapplication->EnglishName = Input::get('EnglishName');
        $loanapplication->DomainName = Input::get('DomainName');
        $loanapplication->DivisionOfficeId = Input::get('DivisionOfficeId');
        $loanapplication->ZoneId = Input::get('ZoneId');
        $loanapplication->AreaId = Input::get('AreaId');
        $loanapplication->BranchId = Input::get('BranchId');
        $loanapplication->TMSSId = Input::get('TMSSId');
                            $TMSSId = Input::get('TMSSId');
        $loanapplication->GaurantorName = Input::get('GaurantorName');
        $loanapplication->GFatherName = Input::get('GFatherName');
        $loanapplication->GMotherName = Input::get('GMotherName');
        $loanapplication->GHusbandWifeName = Input::get('GHusbandWifeName');
        $loanapplication->GBirthDate = Input::get('GBirthDate');
        $loanapplication->GAge = Input::get('GAge');
        $loanapplication->GNationality = Input::get('GNationality');
        $loanapplication->GOccupation = Input::get('GOccupation');
        $loanapplication->GNId = Input::get('GNId');
        $loanapplication->GTaxNo = Input::get('GTaxNo');
        $loanapplication->GDrivingLicenseNo = Input::get('GDrivingLicenseNo');
        $loanapplication->GMobileNo = Input::get('GMobileNo');
        $loanapplication->GVillageName = Input::get('GVillageName');
        $loanapplication->GPostOffice = Input::get('GPostOffice');
        $loanapplication->GPolliceStation = Input::get('GPolliceStation');
        $loanapplication->GOfficeName = Input::get('GOfficeName');
        $loanapplication->GDesignation = Input::get('GDesignation');
        $loanapplication->GOfficeId = Input::get('GOfficeId');
        $loanapplication->GOfficeAddress = Input::get('GOfficeAddress');
        $loanapplication->GOfficeAddress = Input::get('GOfficeAddress');
        $loanapplication->GBankAccountName = Input::get('GBankAccountName');
        $loanapplication->GAccountType = Input::get('GAccountType');
        $loanapplication->GAccountNo = Input::get('GAccountNo');
        $loanapplication->GBankName = Input::get('GBankName');
        $loanapplication->GTMemberId = Input::get('GTMemberId');
        $loanapplication->GBranchName = Input::get('GBranchName');
        $loanapplication->GAdmDate = Input::get('GAdmDate');
        $loanapplication->GSavingAmount = Input::get('GSavingAmount');

       $file = Input::file('GImage ');
        $destinationPath = 'jamindar/';
        if(!empty($file)){
            $filename = $TMSSId.'_'.$file->getClientOriginalName();
            Input::file('GImage')->move($destinationPath, $filename);
            $loanapplication->GImage = $filename;
        }

        $file = Input::file('GSignature');
        $destinationPath = 'jamindar/';
        if(!empty($file)){
            $filename = $TMSSId.'_'.$file->getClientOriginalName();
            Input::file('GSignature')->move($destinationPath, $filename);
            $loanapplication->GSignature = $filename;
        }

        
        $loanapplication->WName1 = Input::get('WName1');
        $loanapplication->WName2 = Input::get('WName2');

        $file = Input::file('W1Signature');
        $destinationPath = 'jamindar/';
        if(!empty($file)){
            $filename = $TMSSId.'_'.$file->getClientOriginalName();
            Input::file('W1Signature')->move($destinationPath, $filename);
            $loanapplication->W1Signature = $filename;
        }

        $file = Input::file('W2Signature');
        $destinationPath = 'jamindar/';
        if(!empty($file)){
            $filename = $TMSSId.'_'.$file->getClientOriginalName();
            Input::file('W2Signature')->move($destinationPath, $filename);
            $loanapplication->W2Signature = $filename;
        }
        $loanapplication->save();
        return ['url' => 'loanapplication/list'];
    }

    public function getCreate()
    {
       $DomainInfo = [''=>'--select--'] + Domain::lists('DomainName', 'id')->all();
       $DivisionOfficeInfo = [''=>'--select--'] + Mikrofdivision::lists('DivisionOfficeName', 'id')->all();
       $ZoneInfo =[''=>'--select--'] +  Zone::lists('ZoneName', 'id')->all();
       $Area =[''=>'--select--'] +  Area::lists('AreaName', 'id')->all();
       $BranchInfo =[''=>'--select--'] +  Brn::lists('BranchName', 'id')->all();
        return view('loanapplication.create')->with('DomainInfo', $DomainInfo)->with('DivisionOfficeInfo', $DivisionOfficeInfo)->with('ZoneInfo',$ZoneInfo)->with('Area',$Area)->with('BranchInfo',$BranchInfo);
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "MemberId" => "required|unique:loanapplications"
            // "LoanapplicationCode" => "required|unique:loanapplications",
            // "unitprice" => "required|numeric"
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $loanapplication = new Loanapplication();
        $loanapplication->MemberId      = Input::get('MemberId');
        $loanapplication->Designation = Input::get('Designation');
        $loanapplication->Savings = Input::get('Savings');
        $loanapplication->LoanType = Input::get('LoanType');
        $loanapplication->LoanAmount = Input::get('LoanAmount');
        $loanapplication->LoanDuration = Input::get('LoanDuration');
        $loanapplication->InstallmentNo = Input::get('InstallmentNo');
        $loanapplication->PayedInstallment = 0;
        $loanapplication->InterestRate = Input::get('InterestRate');
        $loanapplication->BankAccountName = Input::get('BankAccountName');
        $loanapplication->AccountType = Input::get('AccountType');
        $loanapplication->AccountNo = Input::get('AccountNo');
        $loanapplication->BankName = Input::get('BankName');
        $loanapplication->BranchName = Input::get('BranchName');
        $loanapplication->IncomeSource = Input::get('IncomeSource');
        $loanapplication->EnglishName = Input::get('EnglishName');
        $loanapplication->DomainName = Input::get('DomainName');
        $loanapplication->DivisionOfficeId = Input::get('DivisionOfficeId');
        $loanapplication->ZoneId = Input::get('ZoneId');
        $loanapplication->AreaId = Input::get('AreaId');
        $loanapplication->BranchId = Input::get('BranchId');
        $loanapplication->TMSSId = Input::get('TMSSId');
                          $TMSSId = Input::get('TMSSId');
        $loanapplication->GaurantorName = Input::get('GaurantorName');
        $loanapplication->GFatherName = Input::get('GFatherName');
        $loanapplication->GMotherName = Input::get('GMotherName');
        $loanapplication->GHusbandWifeName = Input::get('GHusbandWifeName');
        $loanapplication->GBirthDate = Input::get('GBirthDate');
        $loanapplication->GAge = Input::get('GAge');
        $loanapplication->GNationality = Input::get('GNationality');
        $loanapplication->GOccupation = Input::get('GOccupation');
        $loanapplication->GNId = Input::get('GNId');
        $loanapplication->GTaxNo = Input::get('GTaxNo');
        $loanapplication->GDrivingLicenseNo = Input::get('GDrivingLicenseNo');
        $loanapplication->GMobileNo = Input::get('GMobileNo');
        $loanapplication->GVillageName = Input::get('GVillageName');
        $loanapplication->GPostOffice = Input::get('GPostOffice');
        $loanapplication->GPolliceStation = Input::get('GPolliceStation');
        $loanapplication->GDistrict = Input::get('GDistrict');
        $loanapplication->GOfficeName = Input::get('GOfficeName');
        $loanapplication->GDesignation = Input::get('GDesignation');
        $loanapplication->GOfficeId = Input::get('GOfficeId');
        $loanapplication->GOfficeAddress = Input::get('GOfficeAddress');
        $loanapplication->GOfficeAddress = Input::get('GOfficeAddress');
        $loanapplication->GBankAccountName = Input::get('GBankAccountName');
        $loanapplication->GAccountType = Input::get('GAccountType');
        $loanapplication->GAccountNo = Input::get('GAccountNo');
        $loanapplication->GBankName = Input::get('GBankName');
        $loanapplication->GTMemberId = Input::get('GTMemberId');
        $loanapplication->GBranchName = Input::get('GBranchName');
        $loanapplication->GAdmDate = Input::get('GAdmDate');
        $loanapplication->GSavingAmount = Input::get('GSavingAmount');

        $file = Input::file('GImage ');
        $destinationPath = 'jamindar/';
        if(!empty($file)){
            $filename = $TMSSId.'_'.$file->getClientOriginalName();
            Input::file('GImage')->move($destinationPath, $filename);
            $loanapplication->GImage = $filename;
        }

        $file = Input::file('GSignature');
        $destinationPath = 'jamindar/';
        if(!empty($file)){
            $filename = $TMSSId.'_'.$file->getClientOriginalName();
            Input::file('GSignature')->move($destinationPath, $filename);
            $loanapplication->GSignature = $filename;
        }

        
        $loanapplication->WName1 = Input::get('WName1');
        $loanapplication->WName2 = Input::get('WName2');

        $file = Input::file('W1Signature');
        $destinationPath = 'jamindar/';
        if(!empty($file)){
            $filename = $TMSSId.'_'.$file->getClientOriginalName();
            Input::file('W1Signature')->move($destinationPath, $filename);
            $loanapplication->W1Signature = $filename;
        }

        $file = Input::file('W2Signature');
        $destinationPath = 'jamindar/';
        if(!empty($file)){
            $filename = $TMSSId.'_'.$file->getClientOriginalName();
            Input::file('W2Signature')->move($destinationPath, $filename);
            $loanapplication->W2Signature = $filename;
        }
        $loanapplication->Approval1 = 0;
        $loanapplication->save();
        return ['url' => 'loanapplication/list'];
    }

    public function getDelete($id)
    {
        Loanapplication::destroy($id);
        return Redirect('loanapplication/list');
    }

}