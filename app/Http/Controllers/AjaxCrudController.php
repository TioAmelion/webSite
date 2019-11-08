<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AjaxCrud;

class AjaxCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $data = AjaxCrud::all();
        return view('ajax_index', compact('data', $data));
    }
    public function store(Request $request)
    {
        $request->validate([
            'first_name'    =>  'required',
            'last_name'     =>  'required',
            'image'         =>  'required|image|max:2048'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'first_name'       =>   $request->first_name,
            'last_name'        =>   $request->last_name,
            'image'            =>   $new_name
        );

        AjaxCrud::create($form_data);

        return redirect('ajax_index')->with('success', 'Data Added successfully.');
    }
    
}
