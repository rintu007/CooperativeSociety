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

        $DomainInfo = [''=>'All'] + Domain::lists('DomainName', 'id')->all();
        return view('report.list')->with('DomainInfo', $DomainInfo);
    //     $ThisMonth = Member::whereMonth('created_at', '=', date('m'))->count('id');
    //     $ThisYear = Member::whereYear('created_at', '=', date('Y'))->count('id');
    //     $ThisPeriod = Member::all()->count('id');
    //     DB::table('reports')->where('id', 1)
    //                         ->update(['ThisMonth'=>$ThisMonth, 'ThisYear'=>$ThisYear, 'ThisPeriod'=>$ThisPeriod]);
    //     $RThisMonth = Member::where('Approval1', 2)->whereMonth('created_at', '=', date('m'))->count('id');
    //     $RThisYear = Member::where('Approval1', 2)->whereYear('created_at', '=', date('Y'))->count('id');
    //     $RThisPeriod = Member::all()->where('Approval1', 2)->count('id');
    //     DB::table('reports')->where('id', 2)
    //                         ->update(['ThisMonth'=>$RThisMonth, 'ThisYear'=>$RThisYear, 'ThisPeriod'=>$RThisPeriod]);
    //     $ThisMonth = $ThisMonth - $RThisMonth;
    //     $ThisYear = $ThisYear - $RThisYear;
    //     $ThisPeriod = $ThisPeriod - $RThisPeriod;
    //     DB::table('reports')->where('id', 3)
    //                         ->update(['ThisMonth'=>$ThisMonth, 'ThisYear'=>$ThisYear, 'ThisPeriod'=>$ThisPeriod]);

    //     $ThisMonth = Appformandpassbook::whereMonth('created_at', '=', date('m'))->sum('id');
    //     $ThisYear = Appformandpassbook::whereYear('created_at', '=', date('Y'))->sum('id');
    //     $ThisPeriod = Appformandpassbook::all()->sum('id');
    //     DB::table('reports')->where('id', 4)
    //                         ->update(['ThisMonth'=>$ThisMonth, 'ThisYear'=>$ThisYear, 'ThisPeriod'=>$ThisPeriod]);
       
    //     DB::table('reports')->where('id', 5)
    //                         ->update(['ThisMonth'=>'-', 'ThisYear'=>'-', 'ThisPeriod'=>'-']);
       
    //     DB::table('reports')->where('id', 6)
    //                         ->update(['ThisMonth'=>$ThisMonth, 'ThisYear'=>$ThisYear, 'ThisPeriod'=>$ThisPeriod]);

    //     $ThisMonth = Posting::where('Ok', 1)->whereMonth('created_at', '=', date('m'))->sum('GSaving');
    //     $ThisYear = Posting::where('Ok', 1)->whereYear('created_at', '=', date('Y'))->sum('GSaving');
    //     $ThisPeriod = Posting::where('Ok', 1)->sum('GSaving');
    //     DB::table('reports')->where('id', 7)
    //                         ->update(['ThisMonth'=>$ThisMonth, 'ThisYear'=>$ThisYear, 'ThisPeriod'=>$ThisPeriod]);
    //     $RThisMonth = Withdraw::whereMonth('created_at', '=', date('m'))->sum('Amount');
    //     $RThisYear = Withdraw::whereYear('created_at', '=', date('Y'))->sum('Amount');
    //     $RThisPeriod = Withdraw::all()->sum('Amount');
    //     DB::table('reports')->where('id', 8)
    //                         ->update(['ThisMonth'=>$RThisMonth, 'ThisYear'=>$RThisYear, 'ThisPeriod'=>$RThisPeriod]);
    //     $ThisMonth = $ThisMonth - $RThisMonth;
    //     $ThisYear = $ThisYear - $RThisYear;
    //     $ThisPeriod = $ThisPeriod - $RThisPeriod;
    //     DB::table('reports')->where('id', 9)
    //                         ->update(['ThisMonth'=>$ThisMonth, 'ThisYear'=>$ThisYear, 'ThisPeriod'=>$ThisPeriod]);

    //     $ThisMonth = Loanapplication::where('Approval1', 1)->whereMonth('created_at', '=', date('m'))->count('id');
    //     $ThisYear = Loanapplication::where('Approval1', 1)->whereYear('created_at', '=', date('Y'))->count('id');
    //     $ThisPeriod = Loanapplication::where('Approval1', 1)->count('id');
    //     DB::table('reports')->where('id', 11)
    //                         ->update(['ThisMonth'=>$ThisMonth, 'ThisYear'=>$ThisYear, 'ThisPeriod'=>$ThisPeriod]);
    //     $RThisMonth = Loanapplication::where('InstallmentNo', 'PayedInstallment')->whereMonth('created_at', '=', date('m'))->count('id');
    //     $RThisYear = Loanapplication::where('InstallmentNo', 'PayedInstallment')->whereYear('created_at', '=', date('Y'))->count('id');
    //     $RThisPeriod = Loanapplication::where('InstallmentNo', 'PayedInstallment')->count('id');
    //     DB::table('reports')->where('id', 12)
    //                         ->update(['ThisMonth'=>$RThisMonth, 'ThisYear'=>$RThisYear, 'ThisPeriod'=>$RThisPeriod]);
    //     $ThisMonth = $ThisMonth - $RThisMonth;
    //     $ThisYear = $ThisYear - $RThisYear;
    //     $ThisPeriod = $ThisPeriod - $RThisPeriod;
    //     DB::table('reports')->where('id', 13)
    //                         ->update(['ThisMonth'=>$ThisMonth, 'ThisYear'=>$ThisYear, 'ThisPeriod'=>$ThisPeriod]);

    //     $ThisMonth = Loanschedule::whereMonth('created_at', '=', date('m'))->sum('Payable');
    //     $ThisYear = Loanschedule::whereYear('created_at', '=', date('Y'))->sum('Payable');
    //     $ThisPeriod = Loanschedule::all()->sum('Payable');
    //     DB::table('reports')->where('id', 14)
    //                         ->update(['ThisMonth'=>$ThisMonth, 'ThisYear'=>$ThisYear, 'ThisPeriod'=>$ThisPeriod]);
    //     $RThisMonth = Loanschedule::where('Ok', 1)->whereMonth('created_at', '=', date('m'))->sum('Payable');
    //     $RThisYear = Loanschedule::where('Ok', 1)->whereYear('created_at', '=', date('Y'))->sum('Payable');
    //     $RThisPeriod = Loanschedule::where('Ok', 1)->sum('Payable');
    //     DB::table('reports')->where('id', 15)
    //                         ->update(['ThisMonth'=>$RThisMonth, 'ThisYear'=>$RThisYear, 'ThisPeriod'=>$RThisPeriod]);
    //     $ThisMonth = $ThisMonth - $RThisMonth;
    //     $ThisYear = $ThisYear - $RThisYear;
    //     $ThisPeriod = $ThisPeriod - $RThisPeriod;
    //     DB::table('reports')->where('id', 16)
    //                         ->update(['ThisMonth'=>$ThisMonth, 'ThisYear'=>$ThisYear, 'ThisPeriod'=>$ThisPeriod]);
    //     DB::table('reports')->where('id', 17)
    //                         ->update(['ThisMonth'=>'', 'ThisYear'=>'', 'ThisPeriod'=>'']);
    //     DB::table('reports')->where('id', 18)
    //                         ->update(['ThisMonth'=>'-', 'ThisYear'=>'-', 'ThisPeriod'=>'-', 'Comments'=>'No Due in TECSL']);
    //     DB::table('reports')->where('id', 19)
    //                         ->update(['ThisMonth'=>'-', 'ThisYear'=>'-', 'ThisPeriod'=>'-', 'Comments'=>'No Due in TECSL']);

    //     $ThisMonth = Accountopen::where('Duration', 1)->whereMonth('created_at', '=', date('m'))->count('id');
    //     $ThisYear = Accountopen::where('Duration', 1)->whereYear('created_at', '=', date('Y'))->count('id');
    //     $ThisPeriod = Accountopen::where('Duration', 1)->count('id');
    //     DB::table('reports')->where('id', 22)
    //                         ->update(['ThisMonth'=>$ThisMonth, 'ThisYear'=>$ThisYear, 'ThisPeriod'=>$ThisPeriod]);

    //     $ThisMonth = Posting::where('Duration', 1)->where('Ok',1)->whereMonth('created_at', '=', date('m'))->sum('Dps');
    //     $ThisYear = Posting::where('Duration', 1)->where('Ok',1)->whereYear('created_at', '=', date('Y'))->sum('Dps');
    //     $ThisPeriod = Posting::where('Duration', 1)->where('Ok',1)->sum('Dps');
    //     DB::table('reports')->where('id', 23)
    //                         ->update(['ThisMonth'=>$ThisMonth, 'ThisYear'=>$ThisYear, 'ThisPeriod'=>$ThisPeriod]);

    //     $ThisMonth = Accountopen::where('Duration', 2)->whereMonth('created_at', '=', date('m'))->count('id');
    //     $ThisYear = Accountopen::where('Duration', 2)->whereYear('created_at', '=', date('Y'))->count('id');
    //     $ThisPeriod = Accountopen::where('Duration', 2)->count('id');
    //     DB::table('reports')->where('id', 24)
    //                         ->update(['ThisMonth'=>$ThisMonth, 'ThisYear'=>$ThisYear, 'ThisPeriod'=>$ThisPeriod]);

    //     $ThisMonth = Posting::where('Duration', 2)->where('Ok',1)->whereMonth('created_at', '=', date('m'))->sum('Dps');
    //     $ThisYear = Posting::where('Duration', 2)->where('Ok',1)->whereYear('created_at', '=', date('Y'))->sum('Dps');
    //     $ThisPeriod = Posting::where('Duration', 2)->where('Ok',1)->sum('Dps');
    //     DB::table('reports')->where('id', 25)
    //                         ->update(['ThisMonth'=>$ThisMonth, 'ThisYear'=>$ThisYear, 'ThisPeriod'=>$ThisPeriod]);

    //     $ThisMonth = Appformandpassbook::whereMonth('created_at', '=', date('m'))->count('share_number');
    //     $ThisYear = Appformandpassbook::whereYear('created_at', '=', date('Y'))->count('share_number');
    //     $ThisPeriod = Appformandpassbook::all()->count('share_number');
    //     DB::table('reports')->where('id', 44)
    //                         ->update(['ThisMonth'=>$ThisMonth, 'ThisYear'=>$ThisYear, 'ThisPeriod'=>$ThisPeriod]);

    //     $ThisMonth = Appformandpassbook::whereMonth('created_at', '=', date('m'))->sum('share_amount');
    //     $ThisYear = Appformandpassbook::whereYear('created_at', '=', date('Y'))->sum('share_amount');
    //     $ThisPeriod = Appformandpassbook::all()->sum('share_amount');
    //     DB::table('reports')->where('id', 45)
    //                         ->update(['ThisMonth'=>$ThisMonth, 'ThisYear'=>$ThisYear, 'ThisPeriod'=>$ThisPeriod]);

    //     $reports = Report::where('id', 'like', '%' . Session::get('report_search') . '%')
    //         ->orderBy(Session::get('report_field'), Session::get('report_sort'))->paginate(48);
    //     return view('report.list', ['reports' => $reports]);
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
        $validator = Validator::make(Input::all(), [
            "ReportName" => "required|unique:reports",
            
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }

        $report = new Report();
        $report->ReportName = Input::get('ReportName');
        $report->save();

        return ['url' => 'report/list'];
    }

    public function getDelete($id)
    {
        Report::destroy($id);
        return Redirect('report/list');
    }

}