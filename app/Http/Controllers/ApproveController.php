<?php
namespace App\Http\Controllers;

use App\Approve;
use App\Loanapplication;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ApproveController extends Controller
{
    public function getIndex()
    {
        return view('approve.index');
    }

    public function getList()
    {
        Session::put('approve_search', Input::has('ok') ? Input::get('search') : (Session::has('approve_search') ? Session::get('approve_search') : ''));
        Session::put('approve_field', Input::has('field') ? Input::get('field') : (Session::has('approve_field') ? Session::get('approve_field') : 'MemberId'));
        Session::put('approve_sort', Input::has('sort') ? Input::get('sort') : (Session::has('approve_sort') ? Session::get('approve_sort') : 'asc'));
        $approves = Loanapplication::where('Approval1', '0')->paginate(25);
            // ->orderBy(Session::get('approve_field'), Session::get('approve_sort'))
        return view('approve.list', ['approves' => $approves]);
    }

    public function getApproved()
    {
        $approves = Loanapplication::where('Approval1', '1')->paginate(25);
        return view('approve.approved', ['approves' => $approves]);
    }

    public function getUpdate1($id)
    {
        $approves = Loanapplication::find($id);
        return view('approve.update1', ['approves' => $approves]);
    }

    public function getUpdate($id)
    {
        // return view('approve.update', ['loanapplication' => Loanapplication::find($id)]);
        $approves = Loanapplication::find($id);
        return view('approve.update', ['approves' => $approves]);
    }

    

    public function getDelete($id)
    {
        Loanapplication::destroy($id);
        return Redirect('approve/list');
    }

}