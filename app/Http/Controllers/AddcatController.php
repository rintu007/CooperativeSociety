<?php
namespace App\Http\Controllers;

use App\Addcat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AddcatController extends Controller
{
    public function getIndex()
    {
        return view('addcat.index');
    }

    public function getList()
    {
        Session::put('addcat_search', Input::has('ok') ? Input::get('search') : (Session::has('addcat_search') ? Session::get('addcat_search') : ''));
        Session::put('addcat_field', Input::has('field') ? Input::get('field') : (Session::has('addcat_field') ? Session::get('addcat_field') : 'id'));
        Session::put('addcat_sort', Input::has('sort') ? Input::get('sort') : (Session::has('addcat_sort') ? Session::get('addcat_sort') : 'asc'));
        $addcats = Addcat::where('id', 'like', '%' . Session::get('addcat_search') . '%')
            ->orderBy(Session::get('addcat_field'), Session::get('addcat_sort'))->paginate(8);
        return view('addcat.list', ['addcats' => $addcats]);
    }

    public function getUpdate($id)
    {
        return view('addcat.update', ['addcat' => Addcat::find($id)]);
    }

    public function postUpdate($id)
    {
        
        $user_id = Auth::user()->id;
        $addcat = Addcat::find($id);
        $addcat->CategoryName = Input::get('CategoryName');
        $addcat->created_by = $user_id;
        $addcat->save();
        
        return ['url' => 'addcat/list'];
    }

    public function getCreate()
    {
        return view('addcat.create');
    }

    public function postCreate()
    {
        // $validator = Validator::make(Input::all(), [
        //     "AddcatName" => "required|unique:addcats",
        //     "AddcatNameBangla" => "required|unique:addcats",
        // ]);
        // if ($validator->fails()) {
        //     return array(
        //         'fail' => true,
        //         'errors' => $validator->getMessageBag()->toArray()
        //     );
        // }

        $user_id = Auth::user()->id;
        $addcat = new Addcat();
        $addcat->CategoryName = Input::get('CategoryName');
        $addcat->created_by = $user_id;
        $addcat->save();

        return ['url' => 'addcat/list'];
    }

    public function getDelete($id)
    {
        Addcat::destroy($id);
        return Redirect('addcat/list');
    }

}