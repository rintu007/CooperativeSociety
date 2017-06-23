<?php
namespace App\Http\Controllers;

use App\Withdraw;
use App\Appformandpassbook;
use App\Addwithdraw;
use App\Accountopen;
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

    public function getUpdate($member_id)
    {
        
        $withdraw = Withdraw::find($member_id);
        return view('withdraw.update', ['withdraw' => $withdraw]);
    }

    public function postUpdate($id)
    {
        


        $withdraw = Withdraw::find($id);
        $member_id    = Input::get('member_id');
        $withdraw->date  = Input::get('date');
        $add_withdraw_number    = Input::get('withdraw_number');
        $withdraw->add_withdraw_number = $add_withdraw_number; 
        $add_withdraw_amount = Input::get('withdraw_amount');       
        $withdraw->add_withdraw_amount = $add_withdraw_amount;
        

                $withdraws_data = Withdraw::where('member_id', $member_id)->get();
                 foreach($withdraws_data as $key=>$withdraw_data){
                    $present_withdraw_number = $withdraw_data->present_withdraw_number;
                    $present_withdraw_amount = $withdraw_data->present_withdraw_amount;
                 }
        $present_withdraw_number = ($present_withdraw_number + $add_withdraw_number);
        $present_withdraw_amount = $present_withdraw_amount + $add_withdraw_amount;
        $withdraw->present_withdraw_number = $present_withdraw_number;
        $withdraw->present_withdraw_amount = $present_withdraw_amount;
        $withdraw->created_at   = Input::get('created_at');
        $withdraw->updated_at   = Input::get('updated_at');
        $withdraw->save();

        $addwithdraw = new Addwithdraw();
        $addwithdraw->serial_no = Input::get('serial_no');
        $addwithdraw->member_id = Input::get('member_id');
        $addwithdraw->date = Input::get('date');
        $addwithdraw->withdraw_number = Input::get('withdraw_number');
        $addwithdraw->withdraw_amount = Input::get('withdraw_amount');
        $addwithdraw->save();

        // $withdraw = Withdraw::find($id);
        // $withdraw->present_withdraw_number += $add_withdraw_number;
        // $withdraw->present_withdraw_amount += $add_withdraw_amount;
        // $withdraw->save();
        return ['url' => 'withdraw/list'];
    }

    public function getCreate($member_id)
    {
         return view('withdraw.create', ['withdraw' => Withdraw::find($member_id)]);
        // return view('withdraw.create');
    }

    public function postCreate($id)
    {
        $withdraw = Withdraw::find($id);
        $member_id    = Input::get('member_id');
        $withdraw->date  = Input::get('date');
        $withdraw_withdraw_number    = Input::get('withdraw_number');
        $withdraw->withdraw_withdraw_number = $withdraw_withdraw_number; 
        $withdraw_withdraw_amount = Input::get('withdraw_amount');       
        $withdraw->withdraw_withdraw_amount = $withdraw_withdraw_amount;
        

                $withdraws_data = Withdraw::where('member_id', $member_id)->get();
                 foreach($withdraws_data as $key=>$withdraw_data){
                    $present_withdraw_number = $withdraw_data->present_withdraw_number;
                    $present_withdraw_amount = $withdraw_data->present_withdraw_amount;
                 }
        $present_withdraw_number = ($present_withdraw_number - $withdraw_withdraw_number);
        $present_withdraw_amount = $present_withdraw_amount - $withdraw_withdraw_amount;
        $withdraw->present_withdraw_number = $present_withdraw_number;
        $withdraw->present_withdraw_amount = $present_withdraw_amount;
        $withdraw->created_at   = Input::get('created_at');
        $withdraw->updated_at   = Input::get('updated_at');
        $withdraw->save();

        $withdrawwithdraw = new Withdrawwithdraw();
        $withdrawwithdraw->serial_no = Input::get('serial_no');
        $withdrawwithdraw->member_id = Input::get('member_id');
        $withdrawwithdraw->date = Input::get('date');
        $withdrawwithdraw->withdraw_number = Input::get('withdraw_number');
        $withdrawwithdraw->withdraw_amount = Input::get('withdraw_amount');
        $withdrawwithdraw->save();
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