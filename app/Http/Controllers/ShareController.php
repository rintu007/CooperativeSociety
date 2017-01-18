<?php
namespace App\Http\Controllers;

use App\share;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ShareController extends Controller
{
    public function getIndex()
    {

        return view('share.index');

    }

    public function getList()
    {

        Session::put('share_search', Input::has('ok') ? Input::get('search') : (Session::has('share_search') ? Session::get('share_search') : ''));

        Session::put('share_field', Input::has('field') ? Input::get('field') : (Session::has('share_field') ? Session::get('share_field') : 'member_name'));

        Session::put('share_sort', Input::has('sort') ? Input::get('sort') : (Session::has('share_sort') ? Session::get('share_sort') : 'asc'));
        $shares = share::where('member_name', 'like', '%' . Session::get('share_search') . '%') 
            ->orderBy(Session::get('share_field'), Session::get('share_sort'))->paginate(8);
        return view('share.list', ['shares' => $shares]);
        // echo "shishir";
        // exit();

    }

    public function getUpdate($id)
    {
        return view('share.update', ['share' => share::find($id)]);
    }

    public function postUpdate($id)
    {
        $share = share::find($id);
         $rules = ["share_amount" => "required|numeric"];
        if ($share->member_name != Input::get('member_name'))
            $rules += ['member_name' => 'required|unique:shares'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $share->serial_no = Input::get('serial_no');
        $share->member_name = Input::get('member_name');       
        $share->member_id = Input::get('member_id');
        $share->mobile_no = Input::get('mobile_no');
        $share->date       = Input::get('date');
        $share->share_number = Input::get('share_number');
        $share->share_amount = Input::get('share_amount'); 
        $share->save();
        return ['url' => 'share/list'];
    }

    public function getCreate()
    {
        return view('share.create');
    }

    public function postCreate()
    {

        $validator = Validator::make(Input::all(), [
            "member_name" => "required|unique:shares",
            "member_id" => "required|unique:shares",
            "share_amount" => "required|numeric"
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
                $share = new share();
                echo "shishir";
        exit();

        $share->serial_no = Input::get('serial_no');
        $share->member_name = Input::get('member_name');       
        $share->member_id = Input::get('member_id');
        $share->mobile_no = Input::get('mobile_no');
        $share->date       = Input::get('date');
        $share->share_number = Input::get('share_number');
        $share->share_amount = Input::get('share_amount'); 
        $share->save();

        return ['url' => 'share/list'];
    }

    public function getDelete($id)
    {
        share::destroy($id);
        return Redirect('share/list');
    }

}