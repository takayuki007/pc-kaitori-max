<?php

namespace App\Http\Controllers;

use App\Area;
use App\Os;
use App\Shop;
use Illuminate\Http\Request;

class TopController extends Controller
{
    public function show()
    {
        $oss = Os::get();
        $areas = Area::get();

        $relateShops = Shop::latest()->take(10)->get();

        return view('top')->with(['oss'=>$oss, 'areas'=>$areas, 'relateShops'=>$relateShops]);
    }

    public function search(Request $request)
    {
        $area_id = $request->area;
        $os_id = $request->os;

        return redirect()->route('top.result',['area_id'=>$area_id, 'os_id'=>$os_id]);
    }

    public function result($area_id, $os_id)
    {
        if(!empty($area_id) && !empty($os_id)){
            $relateShops = Shop::where('area_id', $area_id)->where('os_id', $os_id)->paginate(20);
            $count = Shop::where('area_id', $area_id)->where('os_id', $os_id)->count();
        }elseif (!empty($area_id)){
            $relateShops = Shop::where('area_id', $area_id)->paginate(20);
            $count = Shop::where('area_id', $area_id)->count();

        }elseif(!empty($os_id)){
            $relateShops = Shop::where('os_id', $os_id)->paginate(20);
            $count = Shop::where('os_id', $os_id)->count();
        }

        $oss = Os::get();
        $areas = Area::get();


        return view('result')->with(['oss'=>$oss, 'areas'=>$areas, 'relateShops'=>$relateShops, 'count'=>$count]);
    }
}
