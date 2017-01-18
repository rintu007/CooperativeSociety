<?php
namespace App\Http\Controllers;

use App\saving;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SavingController extends Controller
{
    public function getIndex()
    {

        return view('saving.index');

    }

    public function getList()
    {

        Session::put('saving_search', Input::has('ok') ? Input::get('search') : (Session::has('saving_search') ? Session::get('saving_search') : ''));

        Session::put('saving_field', Input::has('field') ? Input::get('field') : (Session::has('saving_field') ? Session::get('saving_field') : 'member_name'));

        Session::put('saving_sort', Input::has('sort') ? Input::get('sort') : (Session::has('saving_sort') ? Session::get('saving_sort') : 'asc'));

        $savings = saving::where('member_name', 'like', '%' . Session::get('saving_search') . '%') 
            ->orderBy(Session::get('saving_field'), Session::get('saving_sort'))->paginate(8);
        return view('saving.list', ['savings' => $savings]);
    }

    public function getUpdate($id)
    {
        return view('saving.update', ['saving' => saving::find($id)]);
    }

    public function postUpdate($id)
    {
        $saving = saving::find($id);
        // $rules = ["unitprice" => "required|numeric"];
        if ($saving->member_name != Input::get('member_name'))
            $rules += ['member_name' => 'required|unique:savings'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $saving->serial_no = Input::get('serial_no');
        $saving->member_name = Input::get('member_name');
        $saving->member_id = Input::get('member_id');
        $saving->mobile_no = Input::get('mobile_no');
        $saving->date     = Input::get('date');
        $saving->month_name = Input::get('month_name');
        $saving->saving_amount = Input::get('saving_amount'); 
        $saving->name = Input::get('name');
        $saving->SavingCode = Input::get('SavingCode');
        $saving->unitprice = Input::get('unitprice');
        $saving->save();
        return ['url' => 'saving/list'];
    }

    public function getCreate()
    {
        return view('saving.create');
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "member_name" => "required|unique:savings"
            // "CompanyrajCode" => "required|unique:savings",
            // "unitprice" => "required|numeric"
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $saving = new saving();
        $saving->serial_no = Input::get('serial_no');
        $saving->member_name = Input::get('member_name');
        $saving->member_id = Input::get('member_id');
        $saving->mobile_no = Input::get('mobile_no');
        $saving->date     = Input::get('date');
        $saving->month_name = Input::get('month_name');
        $saving->saving_amount = Input::get('saving_amount'); 
        $saving->name = Input::get('name');
        $saving->SavingCode = Input::get('SavingCode');
        $saving->unitprice = Input::get('unitprice');
        $saving->save();
        return ['url' => 'saving/list'];
    }

    public function getDelete($id)
    {
        saving::destroy($id);
        return Redirect('saving/list');
    }

}