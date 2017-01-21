<?php
namespace App\Http\Controller;

use App\sharecertificate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class SharecertificateController extends Controller
{
	public function getIndex()
	{
		return view('sharecertificate/index');
	}
}