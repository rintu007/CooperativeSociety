<?php
namespace App\Http\Controllers;

use App\Sharecertificate;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class SharecertificateController extends Controller
{
	public function getIndex()
	{
		return view('sharecertificate.index');
		echo "shishir";
		exit();
	}
	public function getList()
	{
		Session::put('member_search', Input::has('ok') ? Input::get('search') : (Session::has('member_search') ? Session::get('member_search') : ''));
		Session::put('member_field', Input::has('field') ? Input::get('field') : (Session::has('member_field') ? Session::get('member_field') : 'name'));
		Session::put('member_sort', Input::has('sort') ? Input::get('sort') : (Session::has('member_sort') ? Session::get('member_sort') : 'asc'));
		$sharecertificates = Member::where('name', 'like', '%' . Session::get('member_search') . '%')
			->orderBy(Session::get('member_field'), Session::get('member_sort'))->paginate(8);
		return view('sharecertificate.list', ['sharecertificates' => $sharecertificates]);
	}
}