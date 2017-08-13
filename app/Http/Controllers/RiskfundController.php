<?php
namespace App\Http\Controllers;

use App\Riskfund;
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

class RiskfundController extends Controller
{
    public function getIndex()
    {

        return view('riskfund.index');

    }

    public function getList()
    {

        Session::put('riskfund_search', Input::has('ok') ? Input::get('search') : (Session::has('riskfund_search') ? Session::get('riskfund_search') : ''));

        Session::put('riskfund_field', Input::has('field') ? Input::get('field') : (Session::has('riskfund_field') ? Session::get('riskfund_field') : 'MemberId'));

        Session::put('riskfund_sort', Input::has('sort') ? Input::get('sort') : (Session::has('riskfund_sort') ? Session::get('riskfund_sort') : 'asc'));

        $riskfunds = Riskfund::where('MemberId', 'like', '%' . Session::get('riskfund_search') . '%') ->paginate(25);
            // ->orderBy(Session::get('riskfund_field'), Session::get('riskfund_sort'))
        return view('riskfund.list', ['riskfunds' => $riskfunds]);

    }

    public function getUpdate($id)
    {
         $ProductInfo     = ['' => '--select--'] + Product::lists('ProductName', 'id')->all();
        $DurationInfo     = ['' => '--select--'] + Duration::lists('DurationName', 'id')->all();
         return view('riskfund.update',['riskfund' => Riskfund::find($id)])->with('ProductInfo', $ProductInfo)->with('DurationInfo', $DurationInfo);
    }

    public function postUpdate($id)
    {
        $user_id = Auth::user()->id;
        $riskfund = Riskfund::find($id);
        $riskfund->MemberId     = Input::get('MemberId');
        $riskfund->MemberName      = Input::get('MemberName');       
        $riskfund->DomainName     = Input::get('DomainName');
        $riskfund->DivisionName     = Input::get('DivisionName');
        $riskfund->ZoneId          = Input::get('ZoneId');
        $riskfund->AreaId      = Input::get('AreaId');
        $riskfund->BranchId      = Input::get('BranchId');
        $riskfund->AccountType = Input::get('AccountType'); 
        $riskfund->AccountNo  = Input::get('AccountNo');
        $riskfund->Duration  = Input::get('Duration');          
        $riskfund->MonthlyInstallment          = Input::get('MonthlyInstallment');       
        $riskfund->Date     = Input::get('Date');
        $riskfund->posted_by    = $user_id;
        $riskfund->save();

        
        return ['url' => 'riskfund/list'];
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
         return view('riskfund.create')->with('ProductInfo', $ProductInfo)->with('DurationInfo', $DurationInfo);
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "AccountNo" => "required|unique:riskfunds"
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $user_id = Auth::user()->id;
        $riskfund = new Riskfund();
        $riskfund->MemberId     = Input::get('MemberId');
                      $MemberId = Input::get('MemberId');
        $riskfund->MemberName      = Input::get('MemberName');       
                      $MemberName = Input::get('MemberName');
        $riskfund->DomainName     = Input::get('DomainName');
                        $DomainName = Input::get('DomainName');
        $riskfund->DivisionName     = Input::get('DivisionName');
                        $DivisionName = Input::get('DivisionName');
        $riskfund->ZoneId          = Input::get('ZoneId');
                        $ZoneId = Input::get('ZoneId');
        $riskfund->AreaId      = Input::get('AreaId');
                        $AreaId = Input::get('AreaId');
        $riskfund->BranchId      = Input::get('BranchId');
                        $BranchId = Input::get('BranchId');
        $riskfund->AccountType = Input::get('AccountType'); 
        $riskfund->AccountNo  = Input::get('AccountNo');
                        $AccountNo = Input::get('AccountNo');
        $riskfund->Duration  = Input::get('Duration');
                        $Duration  = Input::get('Duration'); 
        $riskfund->GSaving  = 0;         
        $riskfund->MonthlyInstallment        = Input::get('MonthlyInstallment');
                        $Dps = Input::get('MonthlyInstallment');       
        $riskfund->Date     = Input::get('Date');
                        $Date     = Input::get('Date');
        $riskfund->posted_by    = $user_id;
        $riskfund->save();

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

       
        return ['url' => 'riskfund/list'];
    }

    public function getDelete($id)
    {
        $deletingId = $id;
        $MemberId = Riskfund::select('MemberId')
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
        Riskfund::destroy($id);  
        return Redirect('riskfund/list');
    }

}