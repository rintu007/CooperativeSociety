<?php

namespace App\Http\Controllers;

use App\Accountstable;
use App\Age;
use App\Count;
use App\Day;
use App\Holiday;
use App\Member;
use App\Product;
use App\Saving1;
use App\Savingtransactionsetup;
use App\Thana;
use Carbon\Carbon;
use Illuminate\Http\Request;

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

    public function getDivisionOffice(Request $request){
         $data = DB::table('mikrofdivisions')
            ->select('*')
            ->where('DivisionId', $request->id)
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
//        $data  = $datanum->count();
        $data  =200;
        return response()->json($data);
    }

    public function dateinsert()
    {
        $date2 = new Carbon('first friday of july 2016');
//        echo $date2;
        $date23 = Carbon::create(2023, 1, 31);
        $date21 = Carbon::create(2017, 1, 6);
        $day233 = new Carbon('today');
        echo $day233;
//        echo $date2->addWeeks(1);
//        for ($i=0;$i<52;$i++)
//        {
////            $day1 = $date21->addDays($i);
//            $holiday = new Holiday();
//            $holiday->OfficeId = 1;
//            $holiday->SamityID_CenterID = 1;
//            $holiday->HolidayyName = 'F';
//            $holiday->HolidayType = 'W';
//            $holiday->Holiday_Date = $date2->addWeeks(1);
//            $holiday->OrgID = 1;
//            $holiday->IsActive = 1;
//            $holiday->save();
//        }
//
//        $day1 = $date21->addMonth(7);
// $day233 = new Carbon();
// $rr = Date();
// echo $rr;
//     echo   $day1 = $day233->addDays(7);
//        for ($i = 1; $i <= 12; $i++) {
//            $NewDate = Date('Y-m-d', strtotime('+' . 0 . ' months'));
////            $NewDate=Date('Y:m:d');
//            $date_collection = Holiday::all();
//            foreach ($date_collection as $date) {
//                if ($NewDate == $date->Holiday_Date) {
//                    echo "Hi";
////                    $NewDate = Date('y:m:d', strtotime('+' . 1 . ' Days'));
////                    echo $NewDate."</br>";
//                }
//            }
//        }

    }

    public function getSchedule(Request $request)
    {
//        echo $request->SamityId;
//        echo "<br>";
//        echo $request->ProductId;
//        $datetest = new Carbon('today');
//        $datetest = $datetest->addMonths(1);
        $datetest = '2017-05-16';
        $data = DB::table('savingtransactionsetups')
            ->select('*')
            ->where('SamityName', $request->SamityId)
//            ->where('SavingType', $request->ProductId)
            ->where('Date', $datetest)
            ->get();
//        foreach ($data as $data1):
//            echo $data1->MemberId."</br>";
//        endforeach;
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


//    public function autocomplete(){
//        $term = Input::get('term');
//
//        $results = array();
//
//        $queries = DB::table('members')
//            ->where('MemberId', 'LIKE', '%'.$term.'%')
////            ->orWhere('FirstName', 'LIKE', '%'.$term.'%')
//            ->take(5)->get();
//
//        foreach ($queries as $query)
//        {
//            $results[] = [ 'id' => $query->id, 'value' => $query->MemberId.' '.$query->id ];
//        }
////        foreach ( $persons as $query ){
////            $data[] = array('value' => $row->$column, 'id' =>$row->id);
////        }
////        return Response::json($data);
//        return Response::json($results);
//    }
    public function search()
    {
        $term = Input::get('term');

//        $fest = Session::get('festival');
//        $festival = Festival::find($fest);

//        $persons = DB::table('fs_persons')
//            ->join('fs_festival_persons', 'person_id','=','fs_persons.id')
//            ->where('festival_id', '=', $fest)
//            ->get();
        $queries = DB::table('members')
            ->where('FirstName', 'LIKE', '%' . $term . '%')
////            ->orWhere('FirstName', 'LIKE', '%'.$term.'%')
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
//        $date = Date('d:m:Y');
//        echo $date;
//        die();
//        return $date;
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
