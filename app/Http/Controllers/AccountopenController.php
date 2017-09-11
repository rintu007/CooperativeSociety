<?php
namespace App\Http\Controllers;

use App\Accountopen;
use App\Share;
use App\User;
use App\Addshare;
use App\Domain;
use App\Mikrofdivision;
use App\Zone;
use App\Area;
use App\Brn;
use App\Product;
use App\Duration;
use App\Savingtable;
use App\Posting;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AccountopenController extends Controller
{
    public function getIndex()
    {

        return view('accountopen.index');

    }

    public function getList()
    {

        Session::put('accountopen_search', Input::has('ok') ? Input::get('search') : (Session::has('accountopen_search') ? Session::get('accountopen_search') : ''));

        Session::put('accountopen_field', Input::has('field') ? Input::get('field') : (Session::has('accountopen_field') ? Session::get('accountopen_field') : 'MemberId'));

        Session::put('accountopen_sort', Input::has('sort') ? Input::get('sort') : (Session::has('accountopen_sort') ? Session::get('accountopen_sort') : 'asc'));

        $accountopens = Accountopen::where('MemberId', 'like', '%' . Session::get('accountopen_search') . '%') ->orderBy(Session::get('accountopen_field'), Session::get('accountopen_sort'))->paginate(25);
            
        return view('accountopen.list', ['accountopens' => $accountopens]);

    }

    public function getUpdate($id)
    {
         $ProductInfo     = ['' => '--select--'] + Product::lists('ProductName', 'id')->all();
         return view('accountopen.update',['accountopen' => Accountopen::find($id)])->with('ProductInfo', $ProductInfo);
    }

    public function postUpdate($id)
    {
        $user_id = Auth::user()->id;
        $accountopen = Accountopen::find($id);
        $accountopen->MemberId     = Input::get('MemberId');
        $accountopen->MemberName      = Input::get('MemberName');       
        $accountopen->DomainName     = Input::get('DomainName');
        $accountopen->DivisionName     = Input::get('DivisionName');
        $accountopen->ZoneId          = Input::get('ZoneId');
        $accountopen->AreaId      = Input::get('AreaId');
        $accountopen->BranchId      = Input::get('BranchId');
        $accountopen->Duration  = Input::get('Duration');          
        $accountopen->MonthlyInstallment          = Input::get('MonthlyInstallment');
        $accountopen->AccountType = Input::get('AccountType'); 
        $accountopen->AccountNo  = Input::get('AccountNo');       
        $accountopen->Date     = Input::get('Date');
        $accountopen->posted_by    = $user_id;
        $accountopen->save();

        
        return ['url' => 'accountopen/list'];
    }

    public function getCreate()
    {
        // $DomainInfo     = ['' => '--select--'] + Domain::lists('DomainName', 'id')->all();
        // $DivisionInfo     = ['' => '--select--'] + Mikrofdivision::lists('DivisionOfficeName', 'id')->all();
        // $ZoneInfo       = ['' => '--select--'] + Zone::lists('ZoneName', 'id')->all();
        // $AreaInfo       = ['' => '--select--'] + Area::lists('AreaName', 'id')->all();
        // $BranchInfo     = ['' => '--select--'] + Brn::lists('BranchName', 'id')->all();
        $ProductInfo     = ['' => '--select--'] + Product::lists('ProductName', 'id')->all();
        $DurationInfo     = ['' => '--select--'] + Duration::lists('DurationName', 'id')->all();
         return view('accountopen.create')->with('ProductInfo', $ProductInfo)->with('DurationInfo', $DurationInfo);
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "AccountNo" => "required|unique:accountopens"
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $user_id = Auth::user()->id;
        $accountopen = new Accountopen();
        $accountopen->MemberId     = Input::get('MemberId');
                      $MemberId = Input::get('MemberId');
        $accountopen->MemberName      = Input::get('MemberName');       
                      $MemberName = Input::get('MemberName');
        $accountopen->DomainName     = Input::get('DomainName');
                        $DomainName = Input::get('DomainName');
        $accountopen->DivisionName     = Input::get('DivisionName');
                        $DivisionName = Input::get('DivisionName');
        $accountopen->ZoneId          = Input::get('ZoneId');
                        $ZoneId = Input::get('ZoneId');
        $accountopen->AreaId      = Input::get('AreaId');
                        $AreaId = Input::get('AreaId');
        $accountopen->BranchId      = Input::get('BranchId');
                        $BranchId = Input::get('BranchId');
         $accountopen->Duration  = Input::get('Duration');
                        $Duration  = Input::get('Duration'); 
        $accountopen->GSaving  = 0;         
        $accountopen->MonthlyInstallment        = Input::get('MonthlyInstallment');
                        $Dps = Input::get('MonthlyInstallment'); 
                        
        $accountopen->AccountType = Input::get('AccountType'); 
        $accountopen->AccountNo  = Input::get('AccountNo');
                        $AccountNo = Input::get('AccountNo');
             
        $accountopen->Date     = Input::get('Date');
                        $Date     = Input::get('Date');
        $accountopen->posted_by    = $user_id;
        $accountopen->save();

        $savingtables = new Savingtable();
        $savingtables ->DomainName = $DomainName;
        $savingtables ->DivisionName = $DivisionName;
        $savingtables ->ZoneId = $ZoneId;
        $savingtables ->AreaId = $AreaId;
        $savingtables ->BranchId = $BranchId;
        $savingtables ->MemberId = $MemberId;
        $savingtables ->MemberName = $MemberName;
        $savingtables ->AccountNo = $AccountNo;
        $savingtables ->GSaving = 0;
        $savingtables ->Dps = 0;
        if((int)$Duration == 1){
            $InstallmentNo = 5 * 12;
            $savingtables ->InstallmentNo = $InstallmentNo;

            for ($i=1; $i<=$InstallmentNo; $i++) {

            $user_id = Auth::user()->id;
            $posting = new Posting();
            $posting->DomainName     = $DomainName;
            $posting->DivisionName     = $DivisionName;
            $posting->MemberId     = $MemberId;
            $posting->MemberName     = $MemberName;
            $posting->AccountNo     = $AccountNo;
            $posting->GSaving     = 100;
            $posting->Dps     = $Dps;
            $posting->InstallmentNo     = $i;
            $posting->PayedInstallment     = 0;
                    $ScheduleDate = Carbon::createFromFormat('Y-m-d', $Date);
            $posting->ScheduleDate = $ScheduleDate->addMonth($i);
            $posting->Duration = 1;
            $posting->Ok        = 0;           
            $posting->posted_by    = $user_id;        
            $posting->save();
        }
        }
        else{
            $InstallmentNo = 10 * 12;
            $savingtables ->InstallmentNo = $InstallmentNo;

            for ($i=1; $i<=$InstallmentNo; $i++) {

            $user_id = Auth::user()->id;
            $posting = new Posting();
            $posting->DomainName     = $DomainName;
            $posting->DivisionName     = $DivisionName;
            $posting->MemberId     = $MemberId;
            $posting->MemberName     = $MemberName;
            $posting->AccountNo     = $AccountNo;
            $posting->GSaving     = 100;
            $posting->Dps     = $Dps;
            $posting->InstallmentNo     = $i;
            $posting->PayedInstallment     = 0;
                        $ScheduleDate = Carbon::createFromFormat('Y-m-d', $Date);
            $posting->ScheduleDate = $ScheduleDate->addMonth($i);
            $posting->Duration = 2;
            $posting->Ok        = 0;
            // $loanschedule->ScheduleDate = Carbon::now()->addMonths($i);
            
            $posting->posted_by    = $user_id;        
            $posting->save();

        }
        }
        $savingtables ->TotalInstallment = 0;
        $savingtables ->posted_by = $user_id;
        $savingtables->save();

       
        return ['url' => 'accountopen/list'];
    }

    public function getDelete($id)
    {
        $deletingId = $id;
        $MemberId = Accountopen::select('MemberId')
                    ->where('id', $id)->get();
        foreach ($MemberId as $key => $value) {
            $MemId = $value->MemberId;
        }

         $SavingMember = Savingtable::select('id')
                    ->where('MemberId', $MemId)->get();
                foreach ($SavingMember as $key => $value) {
                    $id = $value->id;
                    Savingtable::destroy($id);
                }        
        Accountopen::destroy($id);  
        return Redirect('accountopen/list');
    }

}