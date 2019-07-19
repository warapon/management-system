<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Alert;
use App\Building;
use App\RoomCondition;
use Log;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            $this->lavel = Auth::user()->lavel;
            if($this->lavel == 1){                
            return $next($request);
            }else{
                return redirect('/logout');                
            }
        });
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buildings = Building::all();
        $roomconditions = RoomCondition::all();
        return view('page.setroom')
            ->with('buildings', $buildings)
            ->with('roomconditions', $roomconditions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buildings = Building::all();
        $roomconditions = RoomCondition::all();
        return view('page.createsetroom')
            ->with('buildings', $buildings)
            ->with('roomconditions', $roomconditions);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->type == 1) {
            # code...
            Alert::success('บันทึก ข้อมูลห้อง เรียบร้อย', 'สำเร็จ!!');
            return redirect('setroom');
        } elseif ($request->type == 2) {
            $building = new Building;
            $building->bd_name = $request->name_building;
            $building->save();

            Log::info('บันทึก ข้อมูลอาคาร เรียบร้อย');
            Alert::success('บันทึก ข้อมูลอาคาร เรียบร้อย', 'สำเร็จ!!');
            return redirect('setroom/create');
        } else {
            $roomcondition = new RoomCondition;
            $roomcondition->status_room = $request->status_room;
            $roomcondition->save();

            Log::info('บันทึก ข้อมูลสภาพห้อง เรียบร้อย');
            Alert::success('บันทึก ข้อมูลสภาพห้อง เรียบร้อย', 'สำเร็จ!!');
            return redirect('setroom/create');
        }
        //return $request->type;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
