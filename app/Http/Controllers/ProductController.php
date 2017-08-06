<?php
namespace App\Http\Controllers;

use App\Frequency;
use App\Product;
use App\Producttype;
use App\Status;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function getIndex()
    {
        return view('product.index');
    }

    public function getList()
    {
        Session::put('product_search', Input::has('ok') ? Input::get('search') : (Session::has('product_search') ? Session::get('product_search') : ''));
        Session::put('product_field', Input::has('field') ? Input::get('field') : (Session::has('product_field') ? Session::get('product_field') : 'id'));
        Session::put('product_sort', Input::has('sort') ? Input::get('sort') : (Session::has('product_sort') ? Session::get('product_sort') : 'asc'));
        $products = Product::where('id', 'like', '%' . Session::get('product_search') . '%')
            ->orderBy(Session::get('product_field'), Session::get('product_sort'))->paginate(8);
        return view('product.list', ['products' => $products]);
    }

    public function getUpdate($id)
    {
        $ProductInfo = ['' => '--select--'] + Producttype::lists('ProducttypeyName', 'id')->all();
        $status = ['' => '--select--'] + Status::lists('Status', 'id')->all();
        $frequency = ['' => '--select--'] + Frequency::lists('frequency', 'id')->all();
        return view('product.update', ['product' => Product::find($id)])->with('ProductInfo',$ProductInfo)->with('status',$status)->with('frequency',$frequency);
    }

    public function postUpdate($id)
    {
        $user_id = Auth::user()->id;
        $product = Product::find($id);
        // $rules = ["ProductName" => "required"];
        // if ($product->ProductName != Input::get('ProductName'))
        //     $rules += ['ProductName' => 'required|unique:products'];
        // $validator = Validator::make(Input::all(), $rules);
        // if ($validator->fails()) {
        //     return array(
        //         'fail' => true,
        //         'errors' => $validator->getMessageBag()->toArray()
        //     );
        // }
        $product->ProductCode = Input::get('ProductCode');
        $product->ProductName = Input::get('ProductName');
        $product->InterestPercentage = Input::get('InterestPercentage');
        $product->Frequency = Input::get('Frequency');
        $product->Duration = Input::get('Duration');
        $product->IsActive = Input::get('IsActive');
        $product->MultipleSavings = Input::get('MultipleSavings');
        $product->WithdrawlFacily = Input::get('WithdrawlFacily');
        $product->MinimumAmount = Input::get('MinimumAmount');
        $product->MaximumAmount = Input::get('MaximumAmount');
        $product->MinimumBalanceAmount = Input::get('MinimumBalanceAmount');
        $product->MaxDueCycle = Input::get('MaxDueCycle');
        $product->PassBookAvailability = Input::get('PassBookAvailability');
        $product->AutomaticSchemeRenewal = Input::get('AutomaticSchemeRenewal');
        $product->MaxWithdrawTimeforAvoidingPenaltyPerMonth = Input::get('MaxWithdrawTimeforAvoidingPenaltyPerMonth');
        $product->posted_by = $user_id;
        $product->save();
        return ['url' => 'product/list'];
    }

    public function getCreate()
    {
        $ProductInfo = ['' => '--select--'] + Producttype::lists('ProducttypeyName', 'id')->all();
        $status = ['' => '--select--'] + Status::lists('Status', 'id')->all();
        $frequency = ['' => '--select--'] + Frequency::lists('frequency', 'id')->all();
        return view('product.create')->with('ProductInfo',$ProductInfo)->with('status',$status)->with('frequency',$frequency);
    }

    public function postCreate()
    {
        // $validator = Validator::make(Input::all(), [
        //     "ProductCode" => "required|unique:products",
        //     "ProductName" => "required|unique:products"
        // ]);
        // if ($validator->fails()) {
        //     return array(
        //         'fail' => true,
        //         'errors' => $validator->getMessageBag()->toArray()
        //     );
        // }
        $user_id = Auth::user()->id;
        $product = new Product();
        $product->ProductCode = Input::get('ProductCode');
        $product->ProductName = Input::get('ProductName');
        $product->InterestPercentage = Input::get('InterestPercentage');
        $product->Frequency = Input::get('Frequency');
        $product->Duration = Input::get('Duration');
        $product->IsActive = Input::get('IsActive');
        $product->MultipleSavings = Input::get('MultipleSavings');
        $product->WithdrawlFacily = Input::get('WithdrawlFacily');
        $product->MinimumAmount = Input::get('MinimumAmount');
        $product->MaximumAmount = Input::get('MaximumAmount');
        $product->MinimumBalanceAmount = Input::get('MinimumBalanceAmount');
        $product->MaxDueCycle = Input::get('MaxDueCycle');
        $product->PassBookAvailability = Input::get('PassBookAvailability');
        $product->AutomaticSchemeRenewal = Input::get('AutomaticSchemeRenewal');
        $product->MaxWithdrawTimeforAvoidingPenaltyPerMonth = Input::get('MaxWithdrawTimeforAvoidingPenaltyPerMonth');
        $product->posted_by = $user_id;
        $product->save();
        return ['url' => 'product/list'];
    }

    public function getDelete($id)
    {
        Product::destroy($id);
        return Redirect('product/list');
    }

}