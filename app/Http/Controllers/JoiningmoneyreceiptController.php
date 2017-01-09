<?php
namespace App\Http\Controllers;

use App\Joiningmoneyreceipt;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class JoiningmoneyreceiptController extends Controller
{
    public function getIndex()
    {
        return view('joiningmoneyreceipt.index');
    }

    public function getList()
    {
        Session::put('joiningmoneyreceipt_search', Input::has('ok') ? Input::get('search') : (Session::has('joiningmoneyreceipt_search') ? Session::get('joiningmoneyreceipt_search') : ''));
        Session::put('joiningmoneyreceipt_field', Input::has('field') ? Input::get('field') : (Session::has('joiningmoneyreceipt_field') ? Session::get('joiningmoneyreceipt_field') : 'name'));
        Session::put('joiningmoneyreceipt_sort', Input::has('sort') ? Input::get('sort') : (Session::has('joiningmoneyreceipt_sort') ? Session::get('joiningmoneyreceipt_sort') : 'asc'));
        $joiningmoneyreceipts = Joiningmoneyreceipt::where('name', 'like', '%' . Session::get('joiningmoneyreceipt_search') . '%')
            ->orderBy(Session::get('joiningmoneyreceipt_field'), Session::get('joiningmoneyreceipt_sort'))->paginate(8);
        return view('joiningmoneyreceipt.list', ['joiningmoneyreceipts' => $joiningmoneyreceipts]);
    }

    public function getUpdate($id)
    {
        return view('joiningmoneyreceipt.update', ['joiningmoneyreceipt' => Joiningmoneyreceipt::find($id)]);
    }

    public function postUpdate($id)
    {
        $joiningmoneyreceipt = Joiningmoneyreceipt::find($id);
        $rules = ["unitprice" => "required|numeric"];
        if ($joiningmoneyreceipt->name != Input::get('name'))
            $rules += ['name' => 'required|unique:joiningmoneyreceipts'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $joiningmoneyreceipt->name = Input::get('name');
        $joiningmoneyreceipt->JoiningmoneyreceiptCode = Input::get('JoiningmoneyreceiptCode');
        $joiningmoneyreceipt->test12 = Input::get('test12');
        $joiningmoneyreceipt->test13 = Input::get('test13');
        $joiningmoneyreceipt->test14 = Input::get('test14');
        $joiningmoneyreceipt->test15 = Input::get('test15');
        $joiningmoneyreceipt->test16 = Input::get('test16');
        $joiningmoneyreceipt->unitprice = Input::get('unitprice');
        $joiningmoneyreceipt->save();
        return ['url' => 'joiningmoneyreceipt/list'];
    }

    public function getCreate()
    {
        return view('joiningmoneyreceipt.create');
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "name" => "required|unique:joiningmoneyreceipts",
            "JoiningmoneyreceiptCode" => "required|unique:joiningmoneyreceipts",
            "unitprice" => "required|numeric"
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $joiningmoneyreceipt = new Joiningmoneyreceipt();
        $joiningmoneyreceipt->name = Input::get('name');
        $joiningmoneyreceipt->JoiningmoneyreceiptCode = Input::get('JoiningmoneyreceiptCode');
        $joiningmoneyreceipt->test12 = Input::get('test12');
        $joiningmoneyreceipt->test13 = Input::get('test13');
        $joiningmoneyreceipt->test14 = Input::get('test14');
        $joiningmoneyreceipt->test15 = Input::get('test15');
        $joiningmoneyreceipt->test16 = Input::get('test16');
        $joiningmoneyreceipt->unitprice = Input::get('unitprice');
        $joiningmoneyreceipt->save();
        return ['url' => 'joiningmoneyreceipt/list'];
    }

    public function getDelete($id)
    {
        Joiningmoneyreceipt::destroy($id);
        return Redirect('joiningmoneyreceipt/list');
    }

}