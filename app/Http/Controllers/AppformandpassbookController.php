<?php
namespace App\Http\Controllers;

use App\appformandpassbook;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AppformandpassbookController extends Controller
{
    public function getIndex()
    {

        return view('appformandpassbook.index');

    }

    public function getList()
    {

        Session::put('appformandpassbook_search', Input::has('ok') ? Input::get('search') : (Session::has('appformandpassbook_search') ? Session::get('appformandpassbook_search') : ''));

        Session::put('appformandpassbook_field', Input::has('field') ? Input::get('field') : (Session::has('appformandpassbook_field') ? Session::get('appformandpassbook_field') : 'member_name'));

        Session::put('appformandpassbook_sort', Input::has('sort') ? Input::get('sort') : (Session::has('appformandpassbook_sort') ? Session::get('appformandpassbook_sort') : 'asc'));

        $appformandpassbooks = appformandpassbook::where('member_name', 'like', '%' . Session::get('appformandpassbook_search') . '%') 
            ->orderBy(Session::get('appformandpassbook_field'), Session::get('appformandpassbook_sort'))->paginate(8);
        return view('appformandpassbook.list', ['appformandpassbooks' => $appformandpassbooks]);

    }

    public function getUpdate($id)
    {
        return view('appformandpassbook.update', ['appformandpassbook' => appformandpassbook::find($id)]);
    }

    public function postUpdate($id)
    {
        $appformandpassbook = appformandpassbook::find($id);
        // $rules = ["unitprice" => "required|numeric"];
        // if ($appformandpassbook->member_name != Input::get('member_name'))
        //     $rules += ['member_name' => 'required|unique:appformandpassbooks'];
        // $validator = Validator::make(Input::all(), $rules);
        // if ($validator->fails()) {
        //     return array(
        //         'fail' => true,
        //         'errors' => $validator->getMessageBag()->toArray()
        //     );
        // }
        $appformandpassbook->serial_no = Input::get('serial_no');
        $appformandpassbook->member_name = Input::get('member_name');       
        $appformandpassbook->member_id = Input::get('member_id');
        $appformandpassbook->mobile_no = Input::get('mobile_no');
        $appformandpassbook->date       = Input::get('date');
        $appformandpassbook->app_form = Input::get('app_form');
        $appformandpassbook->passbook = Input::get('passbook');
        $appformandpassbook->share_number = Input::get('share_number');
        $appformandpassbook->share_amount = Input::get('share_amount');
        $appformandpassbook->saving_amount = Input::get('saving_amount');   
        $appformandpassbook->name = Input::get('name');       
        $appformandpassbook->CompanyrajCode = Input::get('CompanyrajCode');
        $appformandpassbook->unitprice = Input::get('unitprice');
        $appformandpassbook->save();
        return ['url' => 'appformandpassbook/list'];
    }

    public function getCreate()
    {
        return view('appformandpassbook.create');
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "member_name" => "required|unique:appformandpassbooks"
            // "CompanyrajCode" => "required|unique:appformandpassbooks",
            // "unitprice" => "required|numeric"
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $appformandpassbook = new appformandpassbook();
        $appformandpassbook->serial_no = Input::get('serial_no');
        $appformandpassbook->member_name = Input::get('member_name');       
        $appformandpassbook->member_id = Input::get('member_id');
        $appformandpassbook->mobile_no = Input::get('mobile_no');
        $appformandpassbook->date       = Input::get('date');
        $appformandpassbook->app_form = Input::get('app_form');
        $appformandpassbook->passbook = Input::get('passbook'); 
        $appformandpassbook->share_number = Input::get('share_number'); 
        $appformandpassbook->share_amount = Input::get('share_amount');
        $appformandpassbook->saving_amount = Input::get('saving_amount');  
        $appformandpassbook->name = Input::get('name');       
        $appformandpassbook->CompanyrajCode = Input::get('CompanyrajCode');
        $appformandpassbook->unitprice = Input::get('unitprice');
        $appformandpassbook->save();
        return ['url' => 'appformandpassbook/list'];
    }

    public function getDelete($id)
    {
        appformandpassbook::destroy($id);
        return Redirect('appformandpassbook/list');
    }

}