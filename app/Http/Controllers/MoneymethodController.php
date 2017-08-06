<?php
namespace App\Http\Controllers;

use App\Zone;
use DB;
use App\Moneymethod;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Division;
class MoneymethodController extends Controller
{
    public function getIndex()
    {
        return view('moneymethod.index');
    }

    public function getList()
    {
        Session::put('moneymethod_search', Input::has('ok') ? Input::get('search') : (Session::has('moneymethod_search') ? Session::get('moneymethod_search') : ''));
        Session::put('moneymethod_field', Input::has('field') ? Input::get('field') : (Session::has('moneymethod_field') ? Session::get('moneymethod_field') : 'MoneymethodName'));
        Session::put('moneymethod_sort', Input::has('sort') ? Input::get('sort') : (Session::has('moneymethod_sort') ? Session::get('moneymethod_sort') : 'asc'));
        $moneymethods = Moneymethod::where('MoneymethodName', 'like', '%' . Session::get('moneymethod_search') . '%')
            ->orderBy(Session::get('moneymethod_field'), Session::get('moneymethod_sort'))->paginate(25);

        return view('moneymethod.list', ['moneymethods' => $moneymethods]);
    }

    public function getUpdate($id)
    {
        
        return view('moneymethod.update', ['moneymethod' => Moneymethod::find($id)]);
    }

    public function postUpdate($id)
    {
        $moneymethod = Moneymethod::find($id);
        $moneymethod->MoneymethodId = Input::get('MoneymethodId');
        $moneymethod->MoneymethodName = Input::get('MoneymethodName');
        $moneymethod->save();
        return ['url' => 'moneymethod/list'];
    }

    public function getCreate()
    {
       
        return view('moneymethod.create');
    }

    public function postCreate()
    {
        
        $moneymethod = new Moneymethod();
        $moneymethod->MoneymethodId = Input::get('MoneymethodId');
        $moneymethod->MoneymethodName = Input::get('MoneymethodName');
        $moneymethod->save();
        return ['url' => 'moneymethod/list'];
    }

    public function getDelete($id)
    {
        Moneymethod::destroy($id);
        return Redirect('moneymethod/list');
    }

}