<?php
namespace App\Http\Controllers;

use App\Riskfund;
use App\Share;
use App\User;
use App\Addshare;
use App\Domain;
use App\Mikrofdivision;
use App\Zone;
use App\Area;
use App\Brn;
use App\Product;
use App\Duration;
use App\Savingtable;
use App\Posting;
use App\Moneyrr;
use App\Moneymethod;
use App\Loanapplication;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class RiskfundController extends Controller
{
    public function getIndex()
    {

        return view('riskfund.index');

    }

    public function getList()
    {

        Session::put('riskfund_search', Input::has('ok') ? Input::get('search') : (Session::has('riskfund_search') ? Session::get('riskfund_search') : ''));

        Session::put('riskfund_field', Input::has('field') ? Input::get('field') : (Session::has('riskfund_field') ? Session::get('riskfund_field') : 'MemberId'));

        Session::put('riskfund_sort', Input::has('sort') ? Input::get('sort') : (Session::has('riskfund_sort') ? Session::get('riskfund_sort') : 'asc'));

        $riskfunds = Riskfund::where('MemberId', 'like', '%' . Session::get('riskfund_search') . '%')->where('TransactionType',1) ->paginate(25);
            // ->orderBy(Session::get('riskfund_field'), Session::get('riskfund_sort'))
        return view('riskfund.list', ['riskfunds' => $riskfunds]);

    }

   

    public function getCreate()
    {
        
        $MoneyrrInfo     = ['' => '--select--'] + Moneyrr::lists('Name', 'id')->all();
        $MoneymethodInfo     = ['' => '--select--'] + Moneymethod::lists('MoneymethodName', 'id')->all();
         return view('riskfund.create')->with('MoneyrrInfo', $MoneyrrInfo)->with('MoneymethodInfo', $MoneymethodInfo);
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "TransactionType" => "required"
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $user_id = Auth::user()->id;
        $riskfund = new Riskfund();
        $riskfund->MemberId     = Input::get('MemberId');
                        $MemberId     = Input::get('MemberId');                      
        $riskfund->MemberName      = Input::get('MemberName');
        $riskfund->DomainName     = Input::get('DomainName');
        $riskfund->DivisionName     = Input::get('DivisionName');
        $riskfund->ZoneId          = Input::get('ZoneId');
        $riskfund->AreaId      = Input::get('AreaId');
        $riskfund->BranchId      = Input::get('BranchId');
        $riskfund->LoanAmount      = Input::get('LoanAmount');
        $riskfund->RiskFund      = Input::get('RiskFund');
        $riskfund->TransactionType = Input::get('TransactionType');
                        $TransactionType = Input::get('TransactionType');

        $riskfund->MoneyMethod  = Input::get('MoneyMethod');    
        $riskfund->Date     = Input::get('Date');
        $riskfund->posted_by    = $user_id;
        $riskfund->save();  

                          if($TransactionType == 1){
                                DB::table('loanapplications')->where('MemberId', $MemberId)
                                                            ->update(['Riskfund'=>1]);
                            }

                            else if($TransactionType == 2){
                                DB::table('loanapplications')->where('MemberId', $MemberId)
                                                            ->update(['Riskfund'=>2]);
                            }

        

      

       
        return ['url' => 'riskfund/list'];
    }

     public function getListreceivers()
    {
        $riskfunds = Riskfund::where('MemberId', 'like', '%' . Session::get('riskfund_search') . '%')->where('TransactionType',2) ->paginate(25);
        return view('riskfund.listreceivers', ['riskfunds' => $riskfunds]);
    }

    public function getDelete($id)
    {
        $deletingId = $id;
        $MemberId = Riskfund::select('MemberId')
                    ->where('id', $id)->get();
        foreach ($MemberId as $key => $value) {
            $MemId = $value->MemberId;
        }

         $SavingMember = Savingtable::select('id')
                    ->where('MemberId', $MemId)->get();
                foreach ($SavingMember as $key => $value) {
                    $id = $value->id;
                    Savingtable::destroy($id);
                }        
        Riskfund::destroy($id);  
        return Redirect('riskfund/list');
    }

}