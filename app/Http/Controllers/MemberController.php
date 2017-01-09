<?php
namespace App\Http\Controllers;

use App\Member;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class MemberController extends Controller
{
    public function getIndex()
    {
        return view('member.index');
    }

    public function getList()
    {
        Session::put('member_search', Input::has('ok') ? Input::get('search') : (Session::has('member_search') ? Session::get('member_search') : ''));
        Session::put('member_field', Input::has('field') ? Input::get('field') : (Session::has('member_field') ? Session::get('member_field') : 'name'));
        Session::put('member_sort', Input::has('sort') ? Input::get('sort') : (Session::has('member_sort') ? Session::get('member_sort') : 'asc'));
        $members = Member::where('name', 'like', '%' . Session::get('member_search') . '%')
            ->orderBy(Session::get('member_field'), Session::get('member_sort'))->paginate(8);
        return view('member.list', ['members' => $members]);
    }

    public function getUpdate($id)
    {
        return view('member.update', ['member' => Member::find($id)]);
    }

    public function postUpdate($id)
    {
        $member = Member::find($id);
        $rules = ["unitprice" => "required|numeric"];
        if ($member->name != Input::get('name'))
            $rules += ['name' => 'required|unique:members'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $member->name = Input::get('name');
        $member->MemberCode = Input::get('MemberCode');
        $member->unitprice = Input::get('unitprice');
        $member->save();
        return ['url' => 'member/list'];
    }

    public function getCreate()
    {
        return view('member.create');
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "name" => "required|unique:members",
            "MemberCode" => "required|unique:members",
            "unitprice" => "required|numeric"
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $member = new Member();
        $member->name = Input::get('name');
        $member->MemberCode = Input::get('MemberCode');
        $member->unitprice = Input::get('unitprice');
        $member->save();
        return ['url' => 'member/list'];
    }

    public function getDelete($id)
    {
        Member::destroy($id);
        return Redirect('member/list');
    }

}