<?php

namespace App\Http\Controllers;

use App\Accountstable;
use App\Accountopen;
use App\Age;
use App\Count;
use App\Day;
use App\Holiday;
use App\Member;
use App\Product;
use App\Saving1;
use App\Savingtransactionsetup;
use App\Thana;
use App\Appformandpassbook;
use App\Posting;
use App\Savingtable;
use App\Loanapplication;
use App\Loanschedule;
use App\Loanposting;
use App\Loanapplicationmoneyreceipt;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use PDF;
use App\District;

class SelectBoxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function getReport(Request $request){
            $data = [];
            $MemberId = $request->MemberId;
    }

    public function getRiskFundVerification(Request $request){
        $MemberId = $request->MemberId;
        $data = DB::table('loanapplications')
            ->select('Riskfund')
            ->where('MemberId', $MemberId)
            ->get();
        if($data != null){
            return response()->json($data);
        }
        else{
            return response()->json(false);
        }
    }

    public function getLoanInfo(Request $request){
         $MemberId = $request->MemberId;

         $data = DB::table('loanapplications')
            ->select('*')
            ->where('MemberId', $MemberId)
            ->where('Approval1', 1)
            ->whereIn('Riskfund', [0,1])
            ->get();
        if($data == null){
            $data = array('id' => 1);
            return response()->json($data);
        }
        else{
        return response()->json($data);
        }
    }

    public function getLoanSubmit(Request $request){

         $user_id = Auth::user()->id;
         $loanposting = new Loanposting();        
                    $DomainName = $request->DomainName;
         $loanposting->DomainName = $DomainName;
                     $DivisionName = $request->DivisionName;
         $loanposting->DivisionName = $DivisionName;
                    $MonthId = $request->MonthId;
         $loanposting->MonthId = $MonthId;
                    $YearId = $request->YearId;                
         $loanposting->YearId = $YearId;                
                    $MemberId = $request->MemberId;
         $loanposting->MemberId = $MemberId;
                    $MemberName = $request->MemberName;
         $loanposting->MemberName = $MemberName;
                    $InstallmentNo = $request->InstallmentNo;
         $loanposting->InstallmentNo = $InstallmentNo;
                    $Payable = $request->Payable;
         $loanposting->Payable = $Payable;
                    $Interest = $request->Interest;
         $loanposting->Interest = $Interest;
                    $Total = $request->Total;
         $loanposting->Total = $Total;
         $loanposting->posted_by    = $user_id;
         $loanposting->save();

         $loanapplication = Loanapplication::where('MemberId', $MemberId)->increment('PayedInstallment');
         DB::table('loanschedules')->where('MemberId', $MemberId)
                                        ->whereMonth('ScheduleDate','=', $MonthId)
                                        ->whereYear('ScheduleDate','=', $YearId)
                                        ->update(['Ok'=>1]);

        return response()->json(true);
    }

    public function getMemberapproval(Request $request){
        $MemberId = $request->MemberId;
        $Approval1 = $request->Approval1;
        
        DB::table('members')->where('MemberId',$MemberId)
                                     ->update(['Approval1'=> $Approval1]);
        return response()->json(true);
    }

    public function getShishirapproval(Request $request){
        $MemberId = $request->MemberId;
        $Approval1 = $request->Approval1;
        if($Approval1 == 1){
        $Schedule = Loanapplication::where('MemberId', $MemberId)->get();
       

        foreach ($Schedule as $key => $value) {
           
            $LoanAmount = $value->LoanAmount;
            $InstallmentNo = $value->InstallmentNo;
            $InterestRate = $value->InterestRate;
            $DomainName = $value->DomainName;
            $DivisionOfficeId = $value->DivisionOfficeId;
            $MemberName = $value->EnglishName;
        }

         $Date = Loanapplicationmoneyreceipt::select('ActualDate')
                                                ->where('MemberId', $MemberId)
                                                ->get();
            foreach ($Date as $key => $value) {
               $date = $value->ActualDate;
            }

        $insDivided = $InstallmentNo;
        $Principal = $LoanAmount;
        $TInterest  = 0;
        $Payable = 0;
        $Total = 0; 
        $TTotal = 0;        
        $TPayable = 0;
        
        
        for ($i=1; $i<=$InstallmentNo; $i++) {
            $Payable = round($Principal/$insDivided) ;
            $Interest = round(($Principal * 20)/(12*100));
            $TInterest = $TInterest + $Interest;
            $Total = $Payable + $Interest;
            $TTotal = $TTotal + $Total;
            $TPayable = $TPayable + $Payable;


            $user_id = Auth::user()->id;
            $loanschedule = new Loanschedule();
            $loanschedule->DomainName     = $DomainName;
            $loanschedule->DivisionOfficeId     = $DivisionOfficeId;
            $loanschedule->MemberId     = $MemberId;
            $loanschedule->MemberName     = $MemberName;
            $loanschedule->InstallmentNo     = $i;
            $loanschedule->Payable      = $Payable;
            $loanschedule->Interest     = $Interest;
            $loanschedule->Total        = $Total;
                            $ScheduleDate = Carbon::createFromFormat('Y-m-d', $date);
            $loanschedule->ScheduleDate = $ScheduleDate->addMonth($i);
            $loanschedule->Ok        = 0;
            $loanschedule->posted_by    = $user_id;        
            $loanschedule->save();

            $Principal = $Principal - $Payable;
            $insDivided--;

        }

        DB::table('loanapplications')->where('MemberId',$MemberId)
                                     ->update(['Approval1'=> $Approval1]);

        return response()->json(true);
    }

        else{
            DB::table('loanapplications')->where('MemberId',$MemberId)
                                         ->update(['Approval1'=> $Approval1]);

        return response()->json(true);
        }
    }

    public function getShishirSubmit(Request $request){

         $DomainName = $request->DomainName;
         $DivisionName = $request->DivisionName;
         $MonthId = $request->MonthId;
         $YearId = $request->YearId;
         $MemberId = $request->MemberId;
         $MemberName = $request->MemberName;
         $AccountNo = $request->AccountNo;
         $GSaving = $request->GSaving;
         $Dps = $request->Dps;
         $user_id = Auth::user()->id;
         $posting = Posting::where('MemberId', $MemberId)
                            ->whereMonth('ScheduleDate','=', $MonthId)
                            ->whereYear('ScheduleDate','=', $YearId)
                            ->increment('PayedInstallment');
         DB::table('postings')->where('MemberId', $MemberId)
                                        ->whereMonth('ScheduleDate','=', $MonthId)
                                        ->whereYear('ScheduleDate','=', $YearId)
                                        ->update(['Ok'=>1]);


         
         $withdraws_data = DB::table('savingtables')
                                  ->where('MemberId', $MemberId)->get();
                 foreach($withdraws_data as $key=>$withdraw_data){
                    $PresentGSaving = $withdraw_data->GSaving;
                    $presentDps = $withdraw_data->Dps;
                    $Duration = $withdraw_data->Duration;
                 }
        $GSaving = $GSaving + $PresentGSaving ;
        $Dps = $Dps + $presentDps ;

        $savingtables = Savingtable::where('AccountNo', $AccountNo)
                                    ->update(['GSaving'=>$GSaving, 'Dps'=>$Dps]);
        $savingtables = Savingtable::where('AccountNo', $AccountNo)
                                    ->increment('TotalInstallment');
        return response()->json(true);
    }

    public function getMemberInfo(Request $request){

         $data = DB::table('members')
            ->join('appformandpassbooks', 'members.MemberId', '=', 'appformandpassbooks.member_id')
            ->select('members.EnglishName', 'members.DomainName', 'members.DivisionOfficeId', 'members.ZoneId', 'members.AreaId', 'members.BranchId', 'appformandpassbooks.name', 'appformandpassbooks.unitprice')
            ->where('members.MemberId', $request->id)
            ->where('appformandpassbooks.member_id', $request->id)
            ->get();
        // $data = DB::table('members')
        //     ->join('appformandpassbooks', 'members.MemberId', '=', 'appformandpassbooks.member_id')
        //     ->select('members.*', 'appformandpassbooks.name', 'orders.unitprice')
        //     ->where('MemberId', $request->id)
        //     ->get();
            if($data != null){
             return response()->json($data);


        }
    }

    public function getLoanpostingInfo(Request $request){
        $DomainName = $request->DomainName;
        $DivisionName = $request->DivisionName;
        $MonthId = $request->MonthId;
        $YearId = $request->YearId;

        $data = Loanschedule::where('DomainName', $DomainName)
                                ->where('DivisionOfficeId', $DivisionName)
                                ->whereMonth('ScheduleDate','=', $MonthId)
                                ->whereYear('ScheduleDate','=',$YearId)
                                ->where('Ok', 0)
                                ->get();
        return response()->json($data);
    }

    public function getPostingInfo(Request $request){
        $DomainName = $request->DomainName;
        $DivisionName = $request->DivisionName;
        $MonthId = $request->MonthId;
        $YearId = $request->YearId;

        $data = Posting::where('DomainName', $DomainName)
                                ->where('DivisionName', $DivisionName)
                                ->whereMonth('ScheduleDate','=', $MonthId)
                                ->whereYear('ScheduleDate','=',$YearId)
                                ->where('Ok', 0)
                                ->get();
        return response()->json($data);
    }

    public function getAccountVerification(Request $request)
    {
        $MemberId = $request->MemberId;
        $AccountType = $request->AccountType;
        $AccountNo = '';
        $i = 1;
        
        while ($i <= 3) {
                $AccountNo = $MemberId . $AccountType . $i;
                $data = DB::table('accountopens')
                        ->select('AccountNo')
                        ->where('AccountNo', $AccountNo)
                        ->first();
                    if($data == null){
                            return response()->json($AccountNo); 
                    } 
                    else{
                        $i++;
                    }   
        }
                        
    }

    public function getDivisionOffice(Request $request){
         $data = DB::table('mikrofdivisions')
            ->select('*')
            ->where('DomainId', $request->id)
            ->get();

        return response()->json($data);
    }

    public function getDivision(Request $request){
        $data = DB::table('divisions')
        ->select('*')
        ->where('DivisionId', $request->id)
        ->get();
        return response()->json($data);
    }

    public function getDistrict(Request $request)
    {
        $data = DB::table('districts')
            ->select('*')
            ->where('DivisionId', $request->id)
            ->get();
        return response()->json($data);
    }

    public function getThana(Request $request)
    {
        $data = DB::table('thanas')
            ->select('*')
            ->where('DistrictId', $request->id)
            ->get();
        return response()->json($data);
    }

    public function getUnion(Request $request)
    {
        $data = DB::table('unions')
            ->select('*')
            ->where('ThanaId', $request->id)
            ->get();
        return response()->json($data);
    }

    public function getWord(Request $request)
    {
        $data = DB::table('wards')
            ->select('*')
            ->where('UnionId', $request->id)
            ->get();
        return response()->json($data);
    }

    public function getPostOffice(Request $request)
    {
        $data = DB::table('postoffices')
            ->select('*')
            ->where('DistrictId', $request->id)
            ->get();
        return response()->json($data);
    }

    public function getZone(Request $request)
    {
        $data = DB::table('zones')
            ->select('*')
            ->where('ZoneDivisionOfficeId', $request->id)
            ->get();
        return response()->json($data);
    }

    public function getArea(Request $request)
    {
        $data = DB::table('areas')
            ->select('*')
            ->where('ZoneId', $request->id)
            ->get();
        return response()->json($data);
    }

    public function getBranch(Request $request)
    {
        $data = DB::table('brns')
            ->select('*')
            ->where('AreaId', $request->id)
            ->get();
        return response()->json($data);
    }

    public function getSamity(Request $request)
    {
        $data = DB::table('zone1s')
            ->select('*')
            ->where('BranchId', $request->id)
            ->get();
        return response()->json($data);
    }

    public function getJustify(Request $request)
    {
        
        $data = DB::table('appformandpassbooks')
            ->where('member_id', $request->id)
            ->first();
                 return response()->json($data);             
    }

    public function getProductInfo(Request $request)
    {
        $data = DB::table('producttypes')
            ->select('*')
            ->where('id', $request->id)
            ->get();
        return response()->json($data);
    }

    public function getBalance(Request $request)
    {
        $data = Saving1::select('Balance')
            ->where('memberId', $request->id)
            ->orderBy('id', 'desc')
            ->limit(1)
            ->get();
        $datanum = $data->count();
        echo $datanum;
        die();
        return response()->json($data);
    }

    public function getPie_Chart_Data()
    {
        $datanum = Member::select('*')
            ->where('grouppresident', 1)
            ->get();

        $data  =200;
        return response()->json($data);
    }

    public function dateinsert()
    {
        $date2 = new Carbon('first friday of july 2016');

        $date23 = Carbon::create(2023, 1, 31);
        $date21 = Carbon::create(2017, 1, 6);
        $day233 = new Carbon('today');
        echo $day233;

    }

    public function getSchedule(Request $request)
    {

        $datetest = '2017-05-16';
        $data = DB::table('savingtransactionsetups')
            ->select('*')
            ->where('SamityName', $request->SamityId)
            ->where('Date', $datetest)
            ->get();

        return response()->json($data);
    }

    public function getPassbook(Request $request)
    {

        $data = Savingtransactionsetup:: select('*')
            ->where('AccountNo', $request->id)
            ->get();
        return response()->json($data);
    }

    public function getSaving(Request $request)
    {

        $data = Saving1:: select('*')
            ->where('AccountNo', $request->id)
            ->get();
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }



    public function search()
    {
        $term = Input::get('term');


        $queries = DB::table('members')
            ->where('FirstName', 'LIKE', '%' . $term . '%')

            ->get();

        foreach ($queries as $query) {
            $data[] = array('value' => $query->FirstName, 'id' => $query->id);
        }
        return Response::json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $AccountInfo = Accountstable::Select('*')
            ->join('products','accountstables.productid','=','product.id')
            ->where('memberid','=','1009')
            ->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function DateCalculate(Request $request)
    {
        $dateInput = $request->id;
//        $date1 = "2007-03-24";
        $date2 = date('y:m:d');

        $diff = abs(strtotime($date2) - strtotime($dateInput));

        $years = floor($diff / (365 * 60 * 60 * 24));
        $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
        $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

//        printf("%d years, %d months, %d days\n", $years, $months, $days);
        return response()->json($years);
    }

    public function edit($id)
    {
        //
    }

    public function datainsert()
    {
        for ($i = 0; $i <= 100; $i++) {
            $age = new Count();
            $age->name = $i;
            $age->save();
        }
        return "Data inserted";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function pdfTest()
    {
        return view('area.pdfTest');
    }

    public function pdfTest1()
    {
        $data = Product::select('*')
            ->where('id', '=', 1)
            ->get();
        return response()->json($data);
    }

    public function pdfTest2()
    {
        $data = Savingtransactionsetup::select('*')
            ->where('MemberId','=',1006)
            ->get();

        view()->share('data',$data);
        $pdf = PDF::loadView('savingschedule')->setPaper('a4', 'landscape');

        return $pdf->download('savingschedule.pdf');
//        $data = Member::all();
//        return view('area.pdfTest')->with('data', $data);
    }

    public function pdfTest3()
    {
        $data = Member::all();
        view()->share('data', $data);
        $pdf = PDF::loadView('area.pdfTest')->setPaper('a4', 'landscape');
        return $pdf->download('pdfTest.pdf');
//        return view('area.pdfTest')->with('data',$data);

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
