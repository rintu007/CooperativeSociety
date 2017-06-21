<?php
namespace App\Http\Controllers;

use App\Posting;
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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class PostingController extends Controller
{
    public function getIndex()
    {

        return view('posting.index');

    }

    public function getList()
    {

        Session::put('posting_search', Input::has('ok') ? Input::get('search') : (Session::has('posting_search') ? Session::get('posting_search') : ''));

        Session::put('posting_field', Input::has('field') ? Input::get('field') : (Session::has('posting_field') ? Session::get('posting_field') : 'MemberId'));

        Session::put('posting_sort', Input::has('sort') ? Input::get('sort') : (Session::has('posting_sort') ? Session::get('posting_sort') : 'asc'));

        $DomainInfo     = ['' => '--select--'] + Domain::lists('DomainName', 'id')->all();
        $DivisionInfo     = ['' => '--select--'] + Mikrofdivision::lists('DivisionOfficeName', 'id')->all();
        $ZoneInfo       = ['' => '--select--'] + Zone::lists('ZoneName', 'id')->all();
        $AreaInfo       = ['' => '--select--'] + Area::lists('AreaName', 'id')->all();
        $BranchInfo     = ['' => '--select--'] + Brn::lists('BranchName', 'id')->all();
        $MonthInfo     = ['' => '--select--'] + Month::lists('MonthName', 'id')->all();
        $YearInfo     = ['' => '--select--'] + Year::lists('YearName', 'id')->all();
        $postings = Posting::where('MemberId', 'like', '%' . Session::get('posting_search') . '%') ->paginate(25);
            
        return view('posting.list', ['postings' => $postings])->with('DomainInfo', $DomainInfo)->with('DivisionInfo', $DivisionInfo)->with('ZoneInfo',$ZoneInfo)->with('AreaInfo',$AreaInfo)->with('BranchInfo',$BranchInfo)->with('MonthInfo',$MonthInfo)->with('YearInfo',$YearInfo);

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
         return view('posting.create', ['posting' => Posting::find($id)])->with('DomainInfo', $DomainInfo)->with('DivisionInfo', $DivisionInfo)->with('ZoneInfo',$ZoneInfo)->with('AreaInfo',$AreaInfo)->with('BranchInfo',$BranchInfo)->with('ProductInfo', $ProductInfo)->with('DurationInfo', $DurationInfo);
    }

    public function postUpdate($id)
    {
        $user_id = Auth::user()->id;
        $posting = Posting::find($id);
        $posting->MemberId     = Input::get('MemberId');
        $posting->MemberName      = Input::get('MemberName');       
        $posting->DomainName     = Input::get('DomainName');
        $posting->DivisionName     = Input::get('DivisionName');
        $posting->ZoneId          = Input::get('ZoneId');
        $posting->AreaId      = Input::get('AreaId');
        $posting->BranchId      = Input::get('BranchId');
        $posting->AccountType = Input::get('AccountType'); 
        $posting->AccountNo  = Input::get('AccountNo');
        $posting->Duration  = Input::get('Duration');          
        $posting->MonthlyInstallment          = Input::get('MonthlyInstallment');       
        $posting->Date     = Input::get('Date');
        $posting->created_by    = $user_id;
        $posting->save();

        
        return ['url' => 'posting/list'];
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
         return view('posting.create')->with('DomainInfo', $DomainInfo)->with('DivisionInfo', $DivisionInfo)->with('ZoneInfo',$ZoneInfo)->with('AreaInfo',$AreaInfo)->with('BranchInfo',$BranchInfo)->with('ProductInfo', $ProductInfo)->with('DurationInfo', $DurationInfo);
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "AccountNo" => "required|unique:postings"
            // "CompanyrajCode" => "required|unique:postings",
            // "unitprice" => "required|numeric"
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $user_id = Auth::user()->id;
        $posting = new Posting();
        $posting->MemberId     = Input::get('MemberId');
        $posting->MemberName      = Input::get('MemberName');       
        $posting->DomainName     = Input::get('DomainName');
        $posting->DivisionName     = Input::get('DivisionName');
        $posting->ZoneId          = Input::get('ZoneId');
        $posting->AreaId      = Input::get('AreaId');
        $posting->BranchId      = Input::get('BranchId');
        $posting->AccountType = Input::get('AccountType'); 
        $posting->AccountNo  = Input::get('AccountNo');
        $posting->Duration  = Input::get('Duration');          
        $posting->MonthlyInstallment          = Input::get('MonthlyInstallment');       
        $posting->Date     = Input::get('Date');
        $posting->created_by    = $user_id;
        $posting->save();

       
        return ['url' => 'posting/list'];
    }

    public function getDelete($id)
    {
       
        Posting::destroy($id);
        return Redirect('posting/list');
    }

}