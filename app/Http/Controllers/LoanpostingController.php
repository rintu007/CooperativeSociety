<?php
namespace App\Http\Controllers;

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
use App\Month;
use App\Year;
use App\Loanposting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoanpostingController extends Controller
{
    public function getIndex()
    {

        return view('loanposting.index');

    }

    public function getList()
    {

        Session::put('loanposting_search', Input::has('ok') ? Input::get('search') : (Session::has('loanposting_search') ? Session::get('loanposting_search') : ''));

        Session::put('loanposting_field', Input::has('field') ? Input::get('field') : (Session::has('loanposting_field') ? Session::get('loanposting_field') : 'MemberId'));

        Session::put('loanposting_sort', Input::has('sort') ? Input::get('sort') : (Session::has('loanposting_sort') ? Session::get('loanposting_sort') : 'asc'));

        $DomainInfo     = ['' => '--select--'] + Domain::lists('DomainName', 'id')->all();
        $DivisionInfo     = ['' => '--select--'] + Mikrofdivision::lists('DivisionOfficeName', 'id')->all();
        $ZoneInfo       = ['' => '--select--'] + Zone::lists('ZoneName', 'id')->all();
        $AreaInfo       = ['' => '--select--'] + Area::lists('AreaName', 'id')->all();
        $BranchInfo     = ['' => '--select--'] + Brn::lists('BranchName', 'id')->all();
        $MonthInfo     = ['' => '--select--'] + Month::lists('MonthName', 'id')->all();
        $YearInfo     = ['' => '--select--'] + Year::lists('YearName', 'YearValue')->all();
        $loanpostings = Loanposting::where('MemberId', 'like', '%' . Session::get('loanposting_search') . '%') ->paginate(25);
            
        return view('loanposting.list', ['loanpostings' => $loanpostings])->with('DomainInfo', $DomainInfo)->with('DivisionInfo', $DivisionInfo)->with('ZoneInfo',$ZoneInfo)->with('AreaInfo',$AreaInfo)->with('BranchInfo',$BranchInfo)->with('MonthInfo',$MonthInfo)->with('YearInfo',$YearInfo);

    }

    public function getUpdate($id)
    {
        $DomainInfo     = ['' => '--select--'] + Domain::lists('DomainName', 'id')->all();
        $DivisionInfo     = ['' => '--select--'] + Mikrofdivision::lists('DivisionOfficeName', 'id')->all();
        $ZoneInfo       = ['' => '--select--'] + Zone::lists('ZoneName', 'id')->all();
        $AreaInfo       = ['' => '--select--'] + Area::lists('AreaName', 'id')->all();
        $BranchInfo     = ['' => '--select--'] + Brn::lists('BranchName', 'id')->all();
        $ProductInfo     = ['' => '--select--'] + Product::lists('ProductName', 'id')->all();
        $DurationInfo     = ['' => '--select--'] + Duration::lists('DurationName', 'id')->all();
         return view('loanposting.create', ['loanposting' => Loanposting::find($id)])->with('DomainInfo', $DomainInfo)->with('DivisionInfo', $DivisionInfo)->with('ZoneInfo',$ZoneInfo)->with('AreaInfo',$AreaInfo)->with('BranchInfo',$BranchInfo)->with('ProductInfo', $ProductInfo)->with('DurationInfo', $DurationInfo);
    }

    public function postUpdate($id)
    {
        $user_id = Auth::user()->id;
        $loanposting = Loanposting::find($id);
        $loanposting->MemberId     = Input::get('MemberId');
        $loanposting->MemberName      = Input::get('MemberName');       
        $loanposting->DomainName     = Input::get('DomainName');
        $loanposting->DivisionName     = Input::get('DivisionName');
        $loanposting->ZoneId          = Input::get('ZoneId');
        $loanposting->AreaId      = Input::get('AreaId');
        $loanposting->BranchId      = Input::get('BranchId');
        $loanposting->AccountType = Input::get('AccountType'); 
        $loanposting->AccountNo  = Input::get('AccountNo');
        $loanposting->Duration  = Input::get('Duration');          
        $loanposting->MonthlyInstallment          = Input::get('MonthlyInstallment');       
        $loanposting->Date     = Input::get('Date');
        $loanposting->created_by    = $user_id;
        $loanposting->save();

        
        return ['url' => 'loanposting/list'];
    }

    public function getCreate()
    {
        $DomainInfo     = ['' => '--select--'] + Domain::lists('DomainName', 'id')->all();
        $DivisionInfo     = ['' => '--select--'] + Mikrofdivision::lists('DivisionOfficeName', 'id')->all();
        $ZoneInfo       = ['' => '--select--'] + Zone::lists('ZoneName', 'id')->all();
        $AreaInfo       = ['' => '--select--'] + Area::lists('AreaName', 'id')->all();
        $BranchInfo     = ['' => '--select--'] + Brn::lists('BranchName', 'id')->all();
        $ProductInfo     = ['' => '--select--'] + Product::lists('ProductName', 'id')->all();
        $DurationInfo     = ['' => '--select--'] + Duration::lists('DurationName', 'id')->all();
         return view('loanposting.create')->with('DomainInfo', $DomainInfo)->with('DivisionInfo', $DivisionInfo)->with('ZoneInfo',$ZoneInfo)->with('AreaInfo',$AreaInfo)->with('BranchInfo',$BranchInfo)->with('ProductInfo', $ProductInfo)->with('DurationInfo', $DurationInfo);
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "AccountNo" => "required|unique:loanpostings"
            // "CompanyrajCode" => "required|unique:loanpostings",
            // "unitprice" => "required|numeric"
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $user_id = Auth::user()->id;
        $loanposting = new Loanposting();
        $loanposting->MemberId     = Input::get('MemberId');
        $loanposting->MemberName      = Input::get('MemberName');       
        $loanposting->DomainName     = Input::get('DomainName');
        $loanposting->DivisionName     = Input::get('DivisionName');
        $loanposting->ZoneId          = Input::get('ZoneId');
        $loanposting->AreaId      = Input::get('AreaId');
        $loanposting->BranchId      = Input::get('BranchId');
        $loanposting->AccountType = Input::get('AccountType'); 
        $loanposting->AccountNo  = Input::get('AccountNo');
        $loanposting->Duration  = Input::get('Duration');          
        $loanposting->MonthlyInstallment          = Input::get('MonthlyInstallment');       
        $loanposting->Date     = Input::get('Date');
        $loanposting->created_by    = $user_id;
        $loanposting->save();

       
        return ['url' => 'loanposting/list'];
    }

    public function getDelete($id)
    {
       
        Loanposting::destroy($id);
        return Redirect('loanposting/list');
    }

}