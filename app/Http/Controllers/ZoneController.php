<?php
namespace App\Http\Controllers;

use App\District;
use App\Division;
use App\Mikrofdivision;
use App\Postoffice;
use App\Thana;
use App\Union;
use App\Ward;
use App\Zone;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ZoneController extends Controller
{
    public function getIndex()
    {
        return view('zone.index');
    }

    public function getList()
    {
        Session::put('zone_search', Input::has('ok') ? Input::get('search') : (Session::has('zone_search') ? Session::get('zone_search') : ''));
        Session::put('zone_field', Input::has('field') ? Input::get('field') : (Session::has('zone_field') ? Session::get('zone_field') : 'ZoneName'));
        Session::put('zone_sort', Input::has('sort') ? Input::get('sort') : (Session::has('zone_sort') ? Session::get('zone_sort') : 'asc'));
        $zones = Zone::where('id', 'like', '%' . Session::get('zone_search') . '%')
            ->orderBy(Session::get('zone_field'), Session::get('zone_sort'))->paginate(8);

        return view('zone.list', ['zones' => $zones]);
    }

    public function getUpdate($id)
    {
        $DivisionOfficeInfo = [''=>'--select--'] + Mikrofdivision::lists('DivisionOfficeName', 'id')->all();
        $ThanaInfo = Thana::lists('ThanaName', 'id');
        $DivisionInfo = Division::lists('DivisionName', 'id');
        $UnionInfo = Union::lists('UnionName', 'id');
        $WardInfo = Ward::lists('WardName', 'id');
        $PostOfficeInfo = Postoffice::lists('PostofficeName', 'id');
        $district_info = District::lists('DistrictName', 'id');
        return view('zone.update', ['zone' => Zone::find($id)])->with('ThanaInfo', $ThanaInfo)->with('district_info', $district_info)->with('DivisionInfo', $DivisionInfo)
            ->with('UnionInfo', $UnionInfo)->with('PostOfficeInfo', $PostOfficeInfo)->with('WardInfo', $WardInfo)->with('DivisionOfficeInfo',$DivisionOfficeInfo);
    }

    public function postUpdate($id)
    {
        $zone = Zone::find($id);
        $rules = ["ZoneName" => "required"];
        if ($zone->ZoneName != Input::get('ZoneName'))
            $rules += ['ZoneName' => 'required'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $zone->ZoneName = Input::get('ZoneName');
        $zone->ZoneCode = Input::get('ZoneCode');
        $zone->ZoneDivisionOfficeId = Input::get('ZoneDivisionOfficeId');
        $zone->ZoneAddress = Input::get('ZoneAddress');
        $zone->ZoneMobileNo = Input::get('ZoneMobileNo');
        $zone->ZoneThanaId = Input::get('ZoneThanaId');
        $zone->ZoneDistrictId = Input::get('ZoneDistrictId');
        $zone->ZoneDivisionId = Input::get('ZoneDivisionId');
        $zone->ZoneUnionId = Input::get('ZoneUnionId');
        $zone->ZoneWardId = Input::get('ZoneWardId');
        $zone->ZonePostOfficeId = Input::get('ZonePostOfficeId');
        $zone->ZoneRoadNo = Input::get('ZoneRoadNo');
        $zone->ZoneEmail = Input::get('ZoneEmail');
        $zone->save();
        return ['url' => 'zone/list'];
    }

    public function getCreate()
    {
        $DivisionOfficeInfo = [''=>'--select--'] + Mikrofdivision::lists('DivisionOfficeName', 'id')->all();
        $ThanaInfo = [''=>'--select--'] + Thana::lists('ThanaName', 'id')->all();
        $DivisionInfo = [''=>'--select--'] + Division::lists('DivisionName', 'id')->all();
        $UnionInfo = [''=>'--select--'] +  Union::lists('UnionName', 'id')->all();
        $WardInfo = [''=>'--select--'] + Ward::lists('WardName', 'id')->all();
        $PostOfficeInfo = [''=>'--select--'] + Postoffice::lists('PostofficeName', 'id')->all();
        $district_info = [''=>'--select--'] + District::lists('DistrictName', 'id')->all();
        return view('zone.create')->with('ThanaInfo', $ThanaInfo)->with('district_info', $district_info)->with('DivisionInfo', $DivisionInfo)
            ->with('UnionInfo', $UnionInfo)->with('PostOfficeInfo', $PostOfficeInfo)->with('WardInfo', $WardInfo)->with('DivisionOfficeInfo',$DivisionOfficeInfo);
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "ZoneName" => "required"
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $zone = new Zone();
        $zone->ZoneName = Input::get('ZoneName');
        $zone->ZoneCode = Input::get('ZoneCode');
        $zone->ZoneDivisionOfficeId = Input::get('ZoneDivisionOfficeId');
        $zone->ZoneAddress = Input::get('ZoneAddress');
        $zone->ZoneMobileNo = Input::get('ZoneMobileNo');
        $zone->ZoneThanaId = Input::get('ZoneThanaId');
        $zone->ZoneDistrictId = Input::get('ZoneDistrictId');
        $zone->ZoneDivisionId = Input::get('ZoneDivisionId');
        $zone->ZoneUnionId = Input::get('ZoneUnionId');
        $zone->ZoneWardId = Input::get('ZoneWardId');
        $zone->ZonePostOfficeId = Input::get('ZonePostOfficeId');
        $zone->ZoneRoadNo = Input::get('ZoneRoadNo');
        $zone->ZoneEmail = Input::get('ZoneEmail');
        $zone->save();
        return ['url' => 'zone/list'];
    }

    public function getDelete($id)
    {
        Zone::destroy($id);
        return Redirect('zone/list');
    }

}