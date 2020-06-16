<?php

namespace App\Http\Controllers;

use App\Group;
use App\SubGroup;
use Illuminate\Http\Request;

class SubGroupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('subGroup.index', ['subGroups' => SubGroup::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = Group::all();
        return view('subGroup.create', compact('groups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subGroup = SubGroup::create($request->all());
        return redirect(route('subGroup.show', $subGroup));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubGroup  $subGroup
     * @return \Illuminate\Http\Response
     */
    public function show(SubGroup $subGroup)
    {
        $groups = Group::all();
        return view('subGroup.show', compact('subGroup', 'groups'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubGroup  $subGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(SubGroup $subGroup)
    {
        $groups = Group::all();

        return view('subGroup.edit', compact('subGroup', 'groups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubGroup  $subGroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubGroup $subGroup)
    {
        $subGroup->update($request->all());
        return redirect(route('subGroup.show', $subGroup));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubGroup  $subGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubGroup $subGroup)
    {
        $subGroup->delete();
        return redirect(route('subGroup.index'));
    }
}
