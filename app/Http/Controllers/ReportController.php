<?php
namespace App\Http\Controllers;

use App\Report;
use App\Member;
use App\Domain;
use App\Appformandpassbook;
use App\Posting;
use App\Loanapplication;
use App\Withdraw;
use App\Loanschedule;
use App\Accountopen;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ReportController extends Controller
{
    public function getIndex()
    {
        return view('report.index');
    }

    public function getList()
    {
        Session::put('report_search', Input::has('ok') ? Input::get('search') : (Session::has('report_search') ? Session::get('report_search') : ''));
        Session::put('report_field', Input::has('field') ? Input::get('field') : (Session::has('report_field') ? Session::get('report_field') : 'id'));
        Session::put('report_sort', Input::has('sort') ? Input::get('sort') : (Session::has('report_sort') ? Session::get('report_sort') : 'asc'));

        // $DomainInfo = [''=>'All'] + Domain::lists('DomainName', 'id')->all();
        return view('report.list');

    }

    public function getPersonal()
    {
        return view('report.personal');
    }
    
    public function getUpdate($id)
    {
        return view('report.update', ['report' => Report::find($id)]);
    }

    public function postUpdate($id)
    {
        $report = Report::find($id);
        $rules = ["ReportName" => "required"];
        if ($report->ReportName != Input::get('ReportName'))
            $rules += ['ReportName' => 'required|unique:reports'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $report->ReportName = Input::get('ReportName');
        $report->save();
        return ['url' => 'report/list'];
    }

    public function getCreate()
    {
            return view('report.create');        
    }

    public function postCreate()
    {
        

    }

    public function getDelete($id)
    {
        Report::destroy($id);
        return Redirect('report/list');
    }

}