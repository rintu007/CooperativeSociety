<?php
namespace App\Http\Controllers;

use App\Loanapplicationmoneyreceipt;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoanapplicationmoneyreceiptController extends Controller
{
    public function getIndex()
    {
        return view('loanapplicationmoneyreceipt.index');
    }

    public function getList()
    {
        Session::put('loanapplicationmoneyreceipt_search', Input::has('ok') ? Input::get('search') : (Session::has('loanapplicationmoneyreceipt_search') ? Session::get('loanapplicationmoneyreceipt_search') : ''));
        Session::put('loanapplicationmoneyreceipt_field', Input::has('field') ? Input::get('field') : (Session::has('loanapplicationmoneyreceipt_field') ? Session::get('loanapplicationmoneyreceipt_field') : 'name'));
        Session::put('loanapplicationmoneyreceipt_sort', Input::has('sort') ? Input::get('sort') : (Session::has('loanapplicationmoneyreceipt_sort') ? Session::get('loanapplicationmoneyreceipt_sort') : 'asc'));
        $loanapplicationmoneyreceipts = Loanapplicationmoneyreceipt::where('name', 'like', '%' . Session::get('loanapplicationmoneyreceipt_search') . '%')
            ->orderBy(Session::get('loanapplicationmoneyreceipt_field'), Session::get('loanapplicationmoneyreceipt_sort'))->paginate(8);
        return view('loanapplicationmoneyreceipt.list', ['loanapplicationmoneyreceipts' => $loanapplicationmoneyreceipts]);
    }

    public function getUpdate($id)
    {
        return view('loanapplicationmoneyreceipt.update', ['loanapplicationmoneyreceipt' => Loanapplicationmoneyreceipt::find($id)]);
    }

    public function postUpdate($id)
    {
        $loanapplicationmoneyreceipt = Loanapplicationmoneyreceipt::find($id);
        $rules = ["unitprice" => "required|numeric"];
        if ($loanapplicationmoneyreceipt->name != Input::get('name'))
            $rules += ['name' => 'required|unique:loanapplicationmoneyreceipts'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $loanapplicationmoneyreceipt->name = Input::get('name');
        $loanapplicationmoneyreceipt->LoanapplicationmoneyreceiptCode = Input::get('LoanapplicationmoneyreceiptCode');
        $loanapplicationmoneyreceipt->unitprice = Input::get('unitprice');
        $loanapplicationmoneyreceipt->save();
        return ['url' => 'loanapplicationmoneyreceipt/list'];
    }

    public function getCreate()
    {
        return view('loanapplicationmoneyreceipt.create');
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "name" => "required|unique:loanapplicationmoneyreceipts",
            "LoanapplicationmoneyreceiptCode" => "required|unique:loanapplicationmoneyreceipts",
            "unitprice" => "required|numeric"
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $loanapplicationmoneyreceipt = new Loanapplicationmoneyreceipt();
        $loanapplicationmoneyreceipt->name = Input::get('name');
        $loanapplicationmoneyreceipt->LoanapplicationmoneyreceiptCode = Input::get('LoanapplicationmoneyreceiptCode');
        $loanapplicationmoneyreceipt->unitprice = Input::get('unitprice');
        $loanapplicationmoneyreceipt->save();
        return ['url' => 'loanapplicationmoneyreceipt/list'];
    }

    public function getDelete($id)
    {
        Loanapplicationmoneyreceipt::destroy($id);
        return Redirect('loanapplicationmoneyreceipt/list');
    }

}