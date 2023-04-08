<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bsc;
use Illuminate\Http\Request;

class BscController extends Controller
{
    // This method returns all of the courses to the view.
    public function index()
    {
        $Bscdata = Bsc::all();
        return view('BackEnd.Admin.Students.BscNursing.index', compact('Bscdata'));
    }

    // This method shows the form to create a new course.
    public function create()
    {
        return view('BackEnd.Admin.Students.BscNursing.create');
    }

    // This method stores a newly created course in the database.
    public function store(Request $request)
    {
        $request->validate([
            'BscStName' => 'required|string|max:255',
            'BscStPhone' => 'required',
            'BscStVeriPhone' => 'required',
            'BscStCours' => 'required',
            'BscStBooks' => 'required',
            'BscStDistrict' => 'required',
            'BscStArea' => 'required',
            'BscStAddress' => 'required',
            'BscStFee' => 'required|numeric|min:0',
        ]);

        $bscSt = new Bsc();
        $bscSt->BscStName = $request->input('BscStName');
        $bscSt->BscStPhone = $request->input('BscStPhone');
        $bscSt->BscStVeriPhone = $request->input('BscStVeriPhone');
        $bscSt->BscStCours = $request->input('BscStCours');
        $bscSt->BscStBooks = $request->input('BscStBooks');
        $bscSt->BscStDistrict = $request->input('BscStDistrict');
        $bscSt->BscStArea = $request->input('BscStArea');
        $bscSt->BscStAddress = $request->input('BscStAddress');
        $bscSt->BscStFee = $request->input('BscStFee');
        $bscSt->save();

        return redirect()->route('bscIndex')
            ->with('success', 'Course created successfully.');
    }
    
    // This method shows the form to edit an existing course.
    public function Edit($id)
    {
        $data = Bsc::find($id);
        return view('BackEnd.Admin.Students.BscNursing.update',compact('data'));
    }
    
    // This method updates an existing course in the database.
    public function Update(Request $request,$id)
    {
        $data = Bsc::findOrFail( $id);
        $data->BscStName = $request->input('BscStName');
        $data->BscStPhone = $request->input('BscStPhone');
        $data->BscStVeriPhone = $request->input('BscStVeriPhone');
        $data->BscStCours = $request->input('BscStCours');
        $data->BscStBooks = $request->input('BscStBooks');
        $data->BscStDistrict = $request->input('BscStDistrict');
        $data->BscStArea = $request->input('BscStArea');
        $data->BscStAddress = $request->input('BscStAddress');
        $data->BscStFee = $request->input('BscStFee');
        $data->save();
       

        return redirect()->route('bscIndex')
            ->with('success', 'Student updated successfully.');
    }

    // This method deletes the specified course from the database.
    public function Delete($id)
    {
        $data = Bsc::findOrFail($id);
        $data->delete();

        return redirect()->route('bscIndex')
            ->with('success', 'Resource deleted successfully');
    }
}
