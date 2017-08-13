<?php
namespace App\Http\Controllers;

use App\Note;
use App\Member;
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

class NoteController extends Controller
{
    public function getIndex()
    {
        return view('note.index');
    }

    public function getList()
    {
        Session::put('note_search', Input::has('ok') ? Input::get('search') : (Session::has('note_search') ? Session::get('note_search') : ''));
        Session::put('note_field', Input::has('field') ? Input::get('field') : (Session::has('note_field') ? Session::get('note_field') : 'id'));
        Session::put('note_sort', Input::has('sort') ? Input::get('sort') : (Session::has('note_sort') ? Session::get('note_sort') : 'asc'));


        $ThisMonth = Member::whereMonth('created_at', '=', date('m'))->count('id');
        $ThisYear = Member::whereYear('created_at', '=', date('Y'))->count('id');
        $ThisPeriod = Member::all()->count('id');
        DB::table('notes')->where('id', 1)
                            ->update(['ThisMonth'=>$ThisMonth, 'ThisYear'=>$ThisYear, 'ThisPeriod'=>$ThisPeriod]);
        $RThisMonth = Member::where('Approval1', 2)->whereMonth('created_at', '=', date('m'))->count('id');
        $RThisYear = Member::where('Approval1', 2)->whereYear('created_at', '=', date('Y'))->count('id');
        $RThisPeriod = Member::all()->where('Approval1', 2)->count('id');
        DB::table('notes')->where('id', 2)
                            ->update(['ThisMonth'=>$RThisMonth, 'ThisYear'=>$RThisYear, 'ThisPeriod'=>$RThisPeriod]);
        $ThisMonth = $ThisMonth - $RThisMonth;
        $ThisYear = $ThisYear - $RThisYear;
        $ThisPeriod = $ThisPeriod - $RThisPeriod;
        DB::table('notes')->where('id', 3)
                            ->update(['ThisMonth'=>$ThisMonth, 'ThisYear'=>$ThisYear, 'ThisPeriod'=>$ThisPeriod]);

        $ThisMonth = Appformandpassbook::whereMonth('created_at', '=', date('m'))->sum('id');
        $ThisYear = Appformandpassbook::whereYear('created_at', '=', date('Y'))->sum('id');
        $ThisPeriod = Appformandpassbook::all()->sum('id');
        DB::table('notes')->where('id', 4)
                            ->update(['ThisMonth'=>$ThisMonth, 'ThisYear'=>$ThisYear, 'ThisPeriod'=>$ThisPeriod]);
       
        DB::table('notes')->where('id', 5)
                            ->update(['ThisMonth'=>'-', 'ThisYear'=>'-', 'ThisPeriod'=>'-']);
       
        DB::table('notes')->where('id', 6)
                            ->update(['ThisMonth'=>$ThisMonth, 'ThisYear'=>$ThisYear, 'ThisPeriod'=>$ThisPeriod]);

        $ThisMonth = Posting::where('Ok', 1)->whereMonth('created_at', '=', date('m'))->sum('GSaving');
        $ThisYear = Posting::where('Ok', 1)->whereYear('created_at', '=', date('Y'))->sum('GSaving');
        $ThisPeriod = Posting::where('Ok', 1)->sum('GSaving');
        DB::table('notes')->where('id', 7)
                            ->update(['ThisMonth'=>$ThisMonth, 'ThisYear'=>$ThisYear, 'ThisPeriod'=>$ThisPeriod]);
        $RThisMonth = Withdraw::whereMonth('created_at', '=', date('m'))->sum('Amount');
        $RThisYear = Withdraw::whereYear('created_at', '=', date('Y'))->sum('Amount');
        $RThisPeriod = Withdraw::all()->sum('Amount');
        DB::table('notes')->where('id', 8)
                            ->update(['ThisMonth'=>$RThisMonth, 'ThisYear'=>$RThisYear, 'ThisPeriod'=>$RThisPeriod]);
        $ThisMonth = $ThisMonth - $RThisMonth;
        $ThisYear = $ThisYear - $RThisYear;
        $ThisPeriod = $ThisPeriod - $RThisPeriod;
        DB::table('notes')->where('id', 9)
                            ->update(['ThisMonth'=>$ThisMonth, 'ThisYear'=>$ThisYear, 'ThisPeriod'=>$ThisPeriod]);

        $ThisMonth = Loanapplication::where('Approval1', 1)->whereMonth('created_at', '=', date('m'))->count('id');
        $ThisYear = Loanapplication::where('Approval1', 1)->whereYear('created_at', '=', date('Y'))->count('id');
        $ThisPeriod = Loanapplication::where('Approval1', 1)->count('id');
        DB::table('notes')->where('id', 11)
                            ->update(['ThisMonth'=>$ThisMonth, 'ThisYear'=>$ThisYear, 'ThisPeriod'=>$ThisPeriod]);
        $RThisMonth = Loanapplication::where('InstallmentNo', 'PayedInstallment')->whereMonth('created_at', '=', date('m'))->count('id');
        $RThisYear = Loanapplication::where('InstallmentNo', 'PayedInstallment')->whereYear('created_at', '=', date('Y'))->count('id');
        $RThisPeriod = Loanapplication::where('InstallmentNo', 'PayedInstallment')->count('id');
        DB::table('notes')->where('id', 12)
                            ->update(['ThisMonth'=>$RThisMonth, 'ThisYear'=>$RThisYear, 'ThisPeriod'=>$RThisPeriod]);
        $ThisMonth = $ThisMonth - $RThisMonth;
        $ThisYear = $ThisYear - $RThisYear;
        $ThisPeriod = $ThisPeriod - $RThisPeriod;
        DB::table('notes')->where('id', 13)
                            ->update(['ThisMonth'=>$ThisMonth, 'ThisYear'=>$ThisYear, 'ThisPeriod'=>$ThisPeriod]);

        $ThisMonth = Loanschedule::whereMonth('created_at', '=', date('m'))->sum('Payable');
        $ThisYear = Loanschedule::whereYear('created_at', '=', date('Y'))->sum('Payable');
        $ThisPeriod = Loanschedule::all()->sum('Payable');
        DB::table('notes')->where('id', 14)
                            ->update(['ThisMonth'=>$ThisMonth, 'ThisYear'=>$ThisYear, 'ThisPeriod'=>$ThisPeriod]);
        $RThisMonth = Loanschedule::where('Ok', 1)->whereMonth('created_at', '=', date('m'))->sum('Payable');
        $RThisYear = Loanschedule::where('Ok', 1)->whereYear('created_at', '=', date('Y'))->sum('Payable');
        $RThisPeriod = Loanschedule::where('Ok', 1)->sum('Payable');
        DB::table('notes')->where('id', 15)
                            ->update(['ThisMonth'=>$RThisMonth, 'ThisYear'=>$RThisYear, 'ThisPeriod'=>$RThisPeriod]);
        $ThisMonth = $ThisMonth - $RThisMonth;
        $ThisYear = $ThisYear - $RThisYear;
        $ThisPeriod = $ThisPeriod - $RThisPeriod;
        DB::table('notes')->where('id', 16)
                            ->update(['ThisMonth'=>$ThisMonth, 'ThisYear'=>$ThisYear, 'ThisPeriod'=>$ThisPeriod]);
        DB::table('notes')->where('id', 17)
                            ->update(['ThisMonth'=>'', 'ThisYear'=>'', 'ThisPeriod'=>'']);
        DB::table('notes')->where('id', 18)
                            ->update(['ThisMonth'=>'-', 'ThisYear'=>'-', 'ThisPeriod'=>'-', 'Comments'=>'No Due in TECSL']);
        DB::table('notes')->where('id', 19)
                            ->update(['ThisMonth'=>'-', 'ThisYear'=>'-', 'ThisPeriod'=>'-', 'Comments'=>'No Due in TECSL']);

        $ThisMonth = Accountopen::where('Duration', 1)->whereMonth('created_at', '=', date('m'))->count('id');
        $ThisYear = Accountopen::where('Duration', 1)->whereYear('created_at', '=', date('Y'))->count('id');
        $ThisPeriod = Accountopen::where('Duration', 1)->count('id');
        DB::table('notes')->where('id', 22)
                            ->update(['ThisMonth'=>$ThisMonth, 'ThisYear'=>$ThisYear, 'ThisPeriod'=>$ThisPeriod]);

        $ThisMonth = Posting::where('Duration', 1)->where('Ok',1)->whereMonth('created_at', '=', date('m'))->sum('Dps');
        $ThisYear = Posting::where('Duration', 1)->where('Ok',1)->whereYear('created_at', '=', date('Y'))->sum('Dps');
        $ThisPeriod = Posting::where('Duration', 1)->where('Ok',1)->sum('Dps');
        DB::table('notes')->where('id', 23)
                            ->update(['ThisMonth'=>$ThisMonth, 'ThisYear'=>$ThisYear, 'ThisPeriod'=>$ThisPeriod]);

        $ThisMonth = Accountopen::where('Duration', 2)->whereMonth('created_at', '=', date('m'))->count('id');
        $ThisYear = Accountopen::where('Duration', 2)->whereYear('created_at', '=', date('Y'))->count('id');
        $ThisPeriod = Accountopen::where('Duration', 2)->count('id');
        DB::table('notes')->where('id', 24)
                            ->update(['ThisMonth'=>$ThisMonth, 'ThisYear'=>$ThisYear, 'ThisPeriod'=>$ThisPeriod]);

        $ThisMonth = Posting::where('Duration', 2)->where('Ok',1)->whereMonth('created_at', '=', date('m'))->sum('Dps');
        $ThisYear = Posting::where('Duration', 2)->where('Ok',1)->whereYear('created_at', '=', date('Y'))->sum('Dps');
        $ThisPeriod = Posting::where('Duration', 2)->where('Ok',1)->sum('Dps');
        DB::table('notes')->where('id', 25)
                            ->update(['ThisMonth'=>$ThisMonth, 'ThisYear'=>$ThisYear, 'ThisPeriod'=>$ThisPeriod]);

        $ThisMonth = Appformandpassbook::whereMonth('created_at', '=', date('m'))->count('share_number');
        $ThisYear = Appformandpassbook::whereYear('created_at', '=', date('Y'))->count('share_number');
        $ThisPeriod = Appformandpassbook::all()->count('share_number');
        DB::table('notes')->where('id', 44)
                            ->update(['ThisMonth'=>$ThisMonth, 'ThisYear'=>$ThisYear, 'ThisPeriod'=>$ThisPeriod]);

        $ThisMonth = Appformandpassbook::whereMonth('created_at', '=', date('m'))->sum('share_amount');
        $ThisYear = Appformandpassbook::whereYear('created_at', '=', date('Y'))->sum('share_amount');
        $ThisPeriod = Appformandpassbook::all()->sum('share_amount');
        DB::table('notes')->where('id', 45)
                            ->update(['ThisMonth'=>$ThisMonth, 'ThisYear'=>$ThisYear, 'ThisPeriod'=>$ThisPeriod]);

        $notes = Note::where('id', 'like', '%' . Session::get('note_search') . '%')
            ->orderBy(Session::get('note_field'), Session::get('note_sort'))->paginate(48);
        return view('note.list', ['notes' => $notes]);
    }

    public function getUpdate($id)
    {
        return view('note.update', ['note' => Note::find($id)]);
    }

    public function postUpdate($id)
    {
        $note = Note::find($id);
        $rules = ["NoteName" => "required"];
        if ($note->NoteName != Input::get('NoteName'))
            $rules += ['NoteName' => 'required|unique:notes'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $note->NoteName = Input::get('NoteName');
        $note->save();
        return ['url' => 'note/list'];
    }

    public function getCreate()
    {
        return view('note.create');
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "NoteName" => "required|unique:notes",
            
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }

        $note = new Note();
        $note->NoteName = Input::get('NoteName');
        $note->save();

        return ['url' => 'note/list'];
    }

    public function getDelete($id)
    {
        Note::destroy($id);
        return Redirect('note/list');
    }

}