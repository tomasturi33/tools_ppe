<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Curriculum;
use Illuminate\Http\Request;

class CurriculumController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        $curriculums = Curriculum::orderBy('id', 'DESC')->paginate(50);

        return view('admin.curriculums.index', compact('curriculums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.curriculums.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $curriculum = new Curriculum();

        if( $request->hasFile('photo') ) {
            $file = $request->file('photo');
            $destinationPath = 'images/photo_cv/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('photo')->move($destinationPath, $filename);
            $curriculum->photo = $destinationPath . $filename;
        }else{
            $curriculum->photo = 'images/photo_cv/img_perfil.png';
        }

        $curriculum->name                                   = $request->name;
        $curriculum->lastname                               = $request->lastname;
        $curriculum->location                               = $request->location;
        $curriculum->address                                = $request->address;
        $curriculum->dni                                    = $request->dni;
        $curriculum->cell_phone                             = $request->cell_phone;
        $curriculum->date_of_birth                          = $request->date_of_birth;
        $curriculum->email                                  = $request->email;
        $curriculum->linkedin                               = $request->linkedin;
        $curriculum->about_me                               = $request->about_me;
        $curriculum->academic_title                         = $request->academic_title;
        $curriculum->training                               = $request->training;
        $curriculum->work_experience                        = $request->work_experience;
        $curriculum->languages                              = $request->languages;
        $curriculum->courses_trainings                      = $request->courses_trainings;
        $curriculum->interests_or_additional_information    = $request->interests_or_additional_information;
        $curriculum->additional_information                 = $request->additional_information;

        if(!$curriculum->save()){
            return 'error';
        }
        return redirect()->route('curriculum.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Curriculum  $curriculum
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $curriculum = Curriculum::find($id);

        return view('admin.curriculums.show', compact('curriculum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Curriculum  $curriculum
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $curriculum = Curriculum::find($id);

        return view('admin.curriculums.edit', compact('curriculum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Curriculum  $curriculum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $curriculum = Curriculum::find($id);

        $curriculum->name                                   = $request->name;
        $curriculum->lastname                               = $request->lastname;
        $curriculum->location                               = $request->location;
        $curriculum->address                                = $request->address;
        $curriculum->dni                                    = $request->dni;
        $curriculum->cell_phone                             = $request->cell_phone;
        $curriculum->date_of_birth                          = $request->date_of_birth;
        $curriculum->email                                  = $request->email;
        $curriculum->linkedin                               = $request->linkedin;
        $curriculum->about_me                               = $request->about_me;
        $curriculum->academic_title                         = $request->academic_title;
        $curriculum->training                               = $request->training;
        $curriculum->work_experience                        = $request->work_experience;
        $curriculum->languages                              = $request->languages;
        $curriculum->courses_trainings                      = $request->courses_trainings;
        $curriculum->interests_or_additional_information    = $request->interests_or_additional_information;
        $curriculum->additional_information                 = $request->additional_information;
        
        if( $request->hasFile('photo') ) {
            $file = $request->file('photo');
            $destinationPath = 'images/photo_cv/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('photo')->move($destinationPath, $filename);
            $curriculum->photo = $destinationPath . $filename;
        }

        if(!$curriculum->save()){
            return 'error';
        }
        return redirect()->route('curriculum.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Curriculum  $curriculum
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $curriculum = Curriculum::find($id);
        if(!$curriculum->delete()){
            return 'error desde delete';
        }
        return redirect()->route('curriculum.index');
    }
}
