<?php namespace Bantenprov\DaftarRetribusi\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bantenprov\DaftarRetribusi\Facades\DaftarRetribusi;
use Bantenprov\DaftarRetribusi\Models\DaftarRetribusiModel;
use Ramsey\Uuid\Uuid;

/**
 * The DaftarRetribusiController class.
 *
 * @package Bantenprov\DaftarRetribusi
 * @author  bantenporv <developer.bantenprov@gmail.com>
 */
class DaftarRetribusiController extends Controller
{    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftar_retribusies = DaftarRetribusiModel::all();
        
        return view('daftar-retribusi::index', compact('daftar_retribusies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('daftar-retribusi::create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required',
        ]);
        

        $daftar_retribusi = DaftarRetribusiModel::create(
                            [
                                'id'    => Uuid::uuid5(Uuid::NAMESPACE_DNS, 'bantenprov.go.id'.date('YmdHis')),
                                'title' => $request->title,
                                'description' => $request->description
                            ]);
        
                            
        return redirect()->route('daftar-retribusi.index')->with('message', 'Success add new data.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $daftar_retribusi = DaftarRetribusiModel::find($id);

        return view('daftar-retribusi::show', compact('daftar_retribusi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $daftar_retribusi = DaftarRetribusiModel::find($id);

        return view('daftar-retribusi::edit', compact('daftar_retribusi'));
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
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required',
        ]);
        
        $daftar_retribusi = DaftarRetribusiModel::find($id);
        $daftar_retribusi->title = $request->title;
        $daftar_retribusi->description = $request->description;
        $daftar_retribusi->save();
        
        return redirect()->route('daftar-retribusi.index')->with('message', 'Success update data.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $daftar_retribusi = DaftarRetribusiModel::find($id);
        $daftar_retribusi->delete();

        return redirect()->route('daftar-retribusi.index')->with('message', 'Success deleted data.');

    }
}
