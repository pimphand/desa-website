<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfileVillageRequest;
use App\Http\Requests\UpdateProfileVillageRequest;
use App\Models\ProfileVillage;

class ProfileVillageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.profile_village.index', [
            'title' => 'Profile Desa',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfileVillageRequest $request)
    {
        // dd($request->all());
        $data = [
            'name' => $request->name,
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
            'visi' => $request->visi,
            'misi' => json_encode($request->misi),
            'logo' => $request->file('logo')->store('public/images'),
        ];

        ProfileVillage::create($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(ProfileVillage $profileVillage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProfileVillage $profileVillage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfileVillageRequest $request, ProfileVillage $profileVillage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProfileVillage $profileVillage)
    {
        //
    }
}
