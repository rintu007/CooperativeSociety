<?php
namespace App\Http\Controllers;

use App\Zone;
use DB;
use App\Subcat;
use App\Addcat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Division;
class SubcatController extends Controller
{
    public function getIndex()
    {
        return view('subcat.index');
    }

    public function getList()
    {
        Session::put('subcat_search', Input::has('ok') ? Input::get('search') : (Session::has('subcat_search') ? Session::get('subcat_search') : ''));
        Session::put('subcat_field', Input::has('field') ? Input::get('field') : (Session::has('subcat_field') ? Session::get('subcat_field') : 'SubcategoryName'));
        Session::put('subcat_sort', Input::has('sort') ? Input::get('sort') : (Session::has('subcat_sort') ? Session::get('subcat_sort') : 'asc'));
        $subcats = Subcat::where('SubcategoryName', 'like', '%' . Session::get('subcat_search') . '%')
            ->paginate(25);


        // $SubcatInfo = Addcat::where('CategoryName', 'like', '%' . Session::get('subcat_search') . '%')
        //     ->paginate(25);

        return view('subcat.list', ['subcats' => $subcats]);
    }

    public function getUpdate($id)
    {
         $CategoryInfo = Addcat::lists('CategoryName', 'id');
        // return view('subcat.update',compact('CategoryInfo'));
        return view('subcat.update', ['subcat' => Subcat::find($id)],['CategoryInfo'=>$CategoryInfo]);
    }

    public function postUpdate($id)
    {

        /*$rules = ["CategoryId" => "required"];
        if ($subcat->SubcategoryName != Input::get('SubcategoryName'))
            $rules += ['SubcategoryName' => 'required|unique:subcats'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }*/
        $user_id = Auth::user()->id;
        $subcat =Subcat::find($id);
        $subcat->CategoryId = Input::get('CategoryId');
        $subcat->SubcategoryName = Input::get('SubcategoryName');
        $subcat->created_by = $user_id;
        $subcat->save();
        return ['url' => 'subcat/list'];
    }

    public function getCreate()
    {
        $CategoryInfo = Addcat::lists('CategoryName', 'id');
        return view('subcat.create',compact('CategoryInfo'));
    }

    public function postCreate()
    {
        /*$validator = Validator::make(Input::all(), [
            "CategoryId" => "required",
            "SubcategoryName" => "required|unique:subcats",
            "SubcategoryNameBangla" => "required|unique:subcats",
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }*/
        $user_id = Auth::user()->id;
        $subcat = new Subcat();
        $subcat->CategoryId = Input::get('CategoryId');
        $subcat->SubcategoryName = Input::get('SubcategoryName');
        $subcat->created_by = $user_id;
        $subcat->save();
        return ['url' => 'subcat/list'];
    }

    public function getDelete($id)
    {
        Subcat::destroy($id);
        return Redirect('subcat/list');
    }

}