<?php

namespace App\Http\Controllers;

use App\Distributors;
use App\Http\Requests\DistributorStoreRequest;
use App\Http\Requests\DistributorUpdateRequest;
use Illuminate\Http\Request;

class DistributorsController extends Controller
{

    public function index()
    {
        $Distributors = Distributors::all();
        return view('distributors.index', ['distributors' => $Distributors]);
    }

    public function create()
    {
        $distributor = new Distributors();
        return view('distributors.create', compact('distributor'));
    }

    public function store(DistributorStoreRequest $request)
    {
        $distributor = new Distributors($request->all());
        $distributor->save();

        $request->session()->put('result', 'Created successfully!');
        return redirect()->route('distributors::index');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('distributors.update', ['distributor' => $id]);
    }

    public function update(DistributorUpdateRequest $request, $dist)
    {
        $distributor = Distributors::all()->where('id', $dist->id)->first();

        $distributor->update([
            'name' => $request['name'],
            'phone' => $request['phone'],
            'site' => $request['site']
        ]);

        $request->session()->put('result', 'Updated successfully!');
        return redirect()->route('distributors::index');
    }

    public function destroy(Request $request, $dist)
    {

        $distributor = Distributors::all()->where('id', $dist->id);
        if($distributor->count() > 0) {
            $distributor->first()->forceDelete();
            $request->session()->put('result', 'Deleted successfully!');
        }

        return redirect()->route('distributors::index');
    }
}
