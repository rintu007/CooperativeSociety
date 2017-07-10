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

    public function getShishirSubmit(Request $request){

         $user_id = Auth::user()->id;
         $posting = new Posting();        
                    $DomainName = $request->DomainName;
         $posting->DomainName = $DomainName;
                     $DivisionName = $request->DivisionName;
         $posting->DivisionName = $DivisionName;
                    $ZoneId = $request->ZoneId;
         $posting->ZoneId = $ZoneId;               
                    $AreaId = $request->AreaId;                
         $posting->AreaId = $AreaId;                
                    $BranchId = $request->BranchId;
         $posting->BranchId = $BranchId;
                    $MonthId = $request->MonthId;
         $posting->MonthId = $MonthId;
                    $YearId = $request->YearId;                
         $posting->YearId = $YearId;                
                    $MemberId = $request->MemberId;
         $posting->MemberId = $MemberId;
                    $MemberName = $request->MemberName;
         $posting->MemberName = $MemberName;
                    $AccountNo = $request->AccountNo;
         $posting->AccountNo = $AccountNo;
                    $GSaving = $request->GSaving;
         $posting->GSaving = $GSaving;
                    $Dps = $request->Dps;
         $posting->Dps = $Dps;
                    $Loan = $request->Loan;
         $posting->Loan = $Loan;
         $posting->posted_by    = $user_id;
         $posting->save();

                
        $savingtables = new Savingtable();
        $savingtables ->DomainName = $DomainName;
        $savingtables ->DivisionName = $DivisionName;
        $savingtables ->ZoneId = $ZoneId;
        $savingtables ->AreaId = $AreaId;
        $savingtables ->BranchId = $BranchId;
        $savingtables ->MonthId = $MonthId;
        $savingtables ->YearId = $YearId;
        $savingtables ->MemberId = $MemberId;
        $savingtables ->MemberName = $MemberName;
        $savingtables ->AccountNo = $AccountNo;

        $withdraws_data = DB::table('savingtables')
                                  ->where('MemberId', $MemberId)->get();
                 foreach($withdraws_data as $key=>$withdraw_data){
                    $PresentGSaving = $withdraw_data->GSaving;
                    $presentDps = $withdraw_data->Dps;
                 }

        $savingtables ->GSaving = $GSaving + $PresentGSaving ;
        $savingtables ->Dps = $Dps + $presentDps ;
        $savingtables ->posted_by = $user_id;
        $savingtables->save();

        return response()->json(true);
    }

    public function getMemberInfo(Request $request){
         $data = DB::table('members')
            ->select('*')
            ->where('MemberId', $request->id)
            ->get();
            if($data != null){
             return response()->json($data);
        }
    }

     public function getPostingInfo(Request $request){
        $DomainName = $request->DomainName;
        $DivisionName = $request->DivisionName;
        $ZoneId = $request->ZoneId;
        $AreaId = $request->AreaId;
        $BranchId = $request->BranchId;
        $MonthId = $request->MonthId;
        $YearId = $request->YearId;

        // $first = DB::table('postings')
        //     ->where('MonthId', $MonthId)
        //     ->where('YearId', $YearId);

        // $second = DB::table('accountopens')
        //     ->where('DomainName', $DomainName)
        //     ->where('DivisionOfficeId', $DivisionName)
        //     ->where('ZoneId', $ZoneId)
        //     ->where('AreaId', $AreaId)
        //     ->where('BranchId', $BranchId)

        $data = DB::table('members')
            ->join('accountopens', 'members.MemberId', '=', 'accountopens.MemberId')
            // ->join('postings', 'members.MemberId', '=', 'postings.MemberId')
            ->where('members.DomainName', $DomainName) 
            // ->where('members.DivisionOfficeId', $DivisionName)
            // ->where('members.ZoneId', $ZoneId)
            // ->where('members.AreaId', $AreaId)
            // ->where('members.BranchId', $BranchId)
            // ->where('postings.Status', '!=', '1')
            ->select('members.*', 'accountopens.*')
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
            ->select('member_name')
            ->where('member_id', $request->id)
            ->first();
            $member = $data->member_name;
                 return response()->json($member);             
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
