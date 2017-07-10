<?php
namespace App\Http\Controllers;

use App\Withdraw;
use App\Appformandpassbook;
use App\Addwithdraw;
use App\Accountopen;
use App\Savingtable;
use App\Posting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class WithdrawController extends Controller
{
    public function getIndex()
    {

        return view('withdraw.index');

    }

    public function getList()
    {

        Session::put('withdraw_search', Input::has('ok') ? Input::get('search') : (Session::has('withdraw_search') ? Session::get('withdraw_search') : ''));

        Session::put('withdraw_field', Input::has('field') ? Input::get('field') : (Session::has('withdraw_field') ? Session::get('withdraw_field') : 'MemberId'));

        Session::put('withdraw_sort', Input::has('sort') ? Input::get('sort') : (Session::has('withdraw_sort') ? Session::get('withdraw_sort') : 'asc'));

        $withdraws = Accountopen::where('id', 'like', '%' . Session::get('withdraw_search') . '%')->paginate(10);
            // ->orderBy(Session::get('withdraw_field'), Session::get('withdraw_sort'))->paginate(10);
        return view('withdraw.list', ['withdraws' => $withdraws]);

    }

    public function getUpdate($MemberId)
    {
        
        $withdraw = Savingtable::find($MemberId);
        return view('withdraw.update', ['withdraw' => $withdraw]);
    }

    public function postUpdate($id)
    {   
        // $withdraw = Withdraw::find($id);
        // $member_id    = Input::get('member_id');
        // $withdraw->date  = Input::get('date');
        // $add_withdraw_number    = Input::get('withdraw_number');
        // $withdraw->add_withdraw_number = $add_withdraw_number; 
        // $add_withdraw_amount = Input::get('withdraw_amount');       
        // $withdraw->add_withdraw_amount = $add_withdraw_amount;        

        //         $withdraws_data = Withdraw::where('member_id', $member_id)->get();
        //          foreach($withdraws_data as $key=>$withdraw_data){
        //             $present_withdraw_number = $withdraw_data->present_withdraw_number;
        //             $present_withdraw_amount = $withdraw_data->present_withdraw_amount;
        //          }
        // $present_withdraw_number = ($present_withdraw_number + $add_withdraw_number);
        // $present_withdraw_amount = $present_withdraw_amount + $add_withdraw_amount;
        // $withdraw->present_withdraw_number = $present_withdraw_number;
        // $withdraw->present_withdraw_amount = $present_withdraw_amount;
        // $withdraw->created_at   = Input::get('created_at');
        // $withdraw->updated_at   = Input::get('updated_at');
        // $withdraw->save();
        $user_id = Auth::user()->id;
        $withdraw = new Withdraw();
        $withdraw->serial_no = Input::get('serial_no');
        $withdraw->MemberId  = Input::get('MemberId');
        $withdraw->date      = Input::get('date');
        $withdraw->AccountNo = Input::get('AccountNo');
        $withdraw->Amount    = Input::get('Amount');
        $withdraw->posted_by    = $user_id;
        $withdraw->created_at   = Input::get('created_at');
        $withdraw->updated_at   = Input::get('updated_at');
        $addwithdraw->save();

        // $withdraw = Withdraw::find($id);
        // $withdraw->present_withdraw_number += $add_withdraw_number;
        // $withdraw->present_withdraw_amount += $add_withdraw_amount;
        // $withdraw->save();
        return ['url' => 'withdraw/list'];
    }

    public function getCreate($AccountNo)
    {
         return view('withdraw.create', ['withdraw' => Posting::find($AccountNo)]);
        // return view('withdraw.create');
    }

    public function postCreate($id)
    {
        $presentAccountNo = 0;
        // $withdraw = Withdraw::find($id);
        // $member_id    = Input::get('member_id');
        // $withdraw->date  = Input::get('date');
        // $withdraw_withdraw_number    = Input::get('withdraw_number');
        // $withdraw->withdraw_withdraw_number = $withdraw_withdraw_number; 
        // $withdraw_withdraw_amount = Input::get('withdraw_amount');       
        // $withdraw->withdraw_withdraw_amount = $withdraw_withdraw_amount;
        

        //         $withdraws_data = Withdraw::where('member_id', $member_id)->get();
        //          foreach($withdraws_data as $key=>$withdraw_data){
        //             $present_withdraw_number = $withdraw_data->present_withdraw_number;
        //             $present_withdraw_amount = $withdraw_data->present_withdraw_amount;
        //          }
        // $present_withdraw_number = ($present_withdraw_number - $withdraw_withdraw_number);
        // $present_withdraw_amount = $present_withdraw_amount - $withdraw_withdraw_amount;
        // $withdraw->present_withdraw_number = $present_withdraw_number;
        // $withdraw->present_withdraw_amount = $present_withdraw_amount;
        // $withdraw->created_at   = Input::get('created_at');
        // $withdraw->updated_at   = Input::get('updated_at');
        // $withdraw->save();

        $user_id = Auth::user()->id;
        $withdraw = new Withdraw();
        // $withdraw->serial_no = Input::get('serial_no');
        $withdraw->MemberId = Input::get('MemberId');
        // $withdraw->date = Input::get('date');
                $AccountNo = Input::get('AccountNo');
        $withdraw->AccountNo =$AccountNo;
                $Amount = Input::get('Amount');
        $withdraw->Amount = $Amount;
        $withdraw->posted_by    = $user_id;
        $withdraw->created_at   = Input::get('created_at');
        $withdraw->updated_at   = Input::get('updated_at');
        $withdraw->save();

        // $accountopen = Accountopen::find($AccountNo);
        //          $withdraws_data = Accountopen::where('AccountNo', $AccountNo)->get();
        //          foreach($withdraws_data as $key=>$withdraw_data){
        //             $presentAccountNo = $withdraw_data->AccountNo;
        //          }
        // $accountopen->MonthlyInstallment = $presentAccountNo - $Amount;
        // $accountopen->save();
        return ['url' => 'withdraw/list'];
       
        // $withdraw = new Withdraw();
        // $withdraw->member_id    = Input::get('member_id');
        // $withdraw->date  = Input::get('date');
        // $withdraw_withdraw_number = Input::get('withdraw_number');
        // $withdraw->withdraw_withdraw_number = $withdraw_withdraw_number;
        // $withdraw_withdraw_amount = Input::get('withdraw_amount');
        // $withdraw->withdraw_withdraw_amount = $withdraw_withdraw_amount;
        // $withdraw->created_at = Input::get('created_at');
        // $withdraw->updated_at = Input::get('updated_at');
        // $withdraw->save();
        // return ['url' => 'withdraw/list'];
    }

    public function getDelete($id)
    {
        Withdraw::destroy($id);
        return Redirect('withdraw/list');
    }

}