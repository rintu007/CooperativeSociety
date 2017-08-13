<?php
namespace App\Http\Controllers;

use App\Memberapprove;
use App\Member;
use App\Share;
use App\Addshare;
use App\Division;
use App\Mikrofdivision;
use App\Postoffice;
use App\Union;
use App\Ward;
use App\Zone;
use DB;
use App\District;
use App\Thana;
use App\Brn;
use App\Area;
use App\Domain;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class MemberapproveController extends Controller
{
    public function getIndex()
    {
        return view('memberapprove.index');
    }

    public function getList()
    {
        Session::put('memberapprove_search', Input::has('ok') ? Input::get('search') : (Session::has('memberapprove_search') ? Session::get('memberapprove_search') : ''));
        Session::put('memberapprove_field', Input::has('field') ? Input::get('field') : (Session::has('memberapprove_field') ? Session::get('memberapprove_field') : 'MemberId'));
        Session::put('memberapprove_sort', Input::has('sort') ? Input::get('sort') : (Session::has('memberapprove_sort') ? Session::get('memberapprove_sort') : 'asc'));
        $memberapproves = Member::where('Approval1', '0')->paginate(25);
            
        return view('memberapprove.list', ['memberapproves' => $memberapproves]);
    }

    public function getMemberapproved()
    {
        $memberapproves = Member::where('Approval1', '1')->paginate(25);
        return view('memberapprove.memberapproved', ['memberapproves' => $memberapproves]);
    }

    public function getUpdate1($id)
    {
        $memberapproves = Member::find($id);
        return view('memberapprove.update1', ['memberapproves' => $memberapproves]);
    }

    public function getUpdate($id)
    {
      $DomainInfo = [''=>'--select--'] + Domain::lists('DomainName', 'id')->all();
        $DivisionOfficeInfo = [''=>'--select--'] + Mikrofdivision::lists('DivisionOfficeName', 'id')->all();
        $Zone_info =[''=>'--select--'] +  Zone::lists('ZoneName', 'id')->all();
        $area =[''=>'--select--'] +  Area::lists('AreaName', 'id')->all();
        $BranchInfo =[''=>'--select--'] +  Brn::lists('BranchName', 'id')->all();
        
        return view('memberapprove.update', ['memberapproves' => Member::find($id)])->with('DomainInfo', $DomainInfo)->with('DivisionOfficeInfo',$DivisionOfficeInfo)->with('Zone_info',$Zone_info)->with('area',$area)->with('BranchInfo',$BranchInfo);
    }

    

    public function getDelete($id)
    {
        Member::destroy($id);
        return Redirect('memberapprove/list');
    }

}