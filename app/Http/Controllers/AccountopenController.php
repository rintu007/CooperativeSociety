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

        $accountopens = Accountopen::where('MemberId', 'like', '%' . Session::get('accountopen_search') . '%') ->paginate(25);
            // ->orderBy(Session::get('accountopen_field'), Session::get('accountopen_sort'))
        return view('accountopen.list', ['accountopens' => $accountopens]);

    }

    public function getUpdate($id)
    {
         $ProductInfo     = ['' => '--select--'] + Product::lists('ProductName', 'id')->all();
        $DurationInfo     = ['' => '--select--'] + Duration::lists('DurationName', 'id')->all();
         return view('accountopen.create')->with('ProductInfo', $ProductInfo)->with('DurationInfo', $DurationInfo);
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
        $accountopen->AccountType = Input::get('AccountType'); 
        $accountopen->AccountNo  = Input::get('AccountNo');
        $accountopen->Duration  = Input::get('Duration');          
        $accountopen->MonthlyInstallment          = Input::get('MonthlyInstallment');       
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
            // "CompanyrajCode" => "required|unique:accountopens",
            // "unitprice" => "required|numeric"
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
        $accountopen->MemberName      = Input::get('MemberName');       
        $accountopen->DomainName     = Input::get('DomainName');
        $accountopen->DivisionName     = Input::get('DivisionName');
        $accountopen->ZoneId          = Input::get('ZoneId');
        $accountopen->AreaId      = Input::get('AreaId');
        $accountopen->BranchId      = Input::get('BranchId');
        $accountopen->AccountType = Input::get('AccountType'); 
        $accountopen->AccountNo  = Input::get('AccountNo');
        $accountopen->Duration  = Input::get('Duration');          
        $accountopen->MonthlyInstallment          = Input::get('MonthlyInstallment');       
        $accountopen->Date     = Input::get('Date');
        $accountopen->posted_by    = $user_id;
        $accountopen->save();

       
        return ['url' => 'accountopen/list'];
    }

    public function getDelete($id)
    {
       
        Accountopen::destroy($id);
        return Redirect('accountopen/list');
    }

}