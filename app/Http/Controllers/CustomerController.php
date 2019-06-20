<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MCustomer;

use Validator;

class CustomerController extends Controller
{
    public function index()
    {
        $cust                = MCustomer::paginate(10);
        return view('cust.index', compact('cust'));
    }
    public function create()
    {
        return view('cust.create');
    }
    public function store(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            'name' => 'required',
            'no_handphone' => 'required',
            'email' => 'required|email|max:255',
        ]);
            
        if ($validator->fails()) {
            $request->session()->flash('alert-success', 'was successful create!');
            return redirect()->back()->withErrors($validator)
            ->withInput();
        }else{
            $cust               = new MCustomer;
            
            $cust->name         = $request->name;
            $cust->no_handphone = $request->no_handphone;
            $cust->email        = $request->email;

            $cust->save();
        }

        $request->session()->flash('alert-success', 'was successful create!');
        return redirect()->route('indexhome');
    }
    public function edit($id)
    {
        $cust               = MCustomer::find($id);

        return view('cust.edit', compact('cust'));
    }
    public function update(Request $request, $id)
    {
        $cust               = MCustomer::find($id);
        
        $cust->name         = $request->name;
        $cust->no_handphone = $request->no_handphone;
        $cust->email        = $request->email;

        $cust->save();

        $request->session()->flash('alert-success', 'was successful update!');
        return redirect()->route('indexhome');
    }
    public function destroy(Request $request, $id)
    {
        $cust                   = MCustomer::FindOrFail($id);
        $cust->delete();

        $request->session()->flash('alert-success', 'was successful delete!');
		return redirect()->route('indexhome');
    }
}
