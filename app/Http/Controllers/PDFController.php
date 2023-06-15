<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Curriculum;
use PDF;
use Auth;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF(Request $request)
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
        $curriculum->academic_title                         = $request->academic_title;
        $curriculum->dni                                    = $request->dni;
        $curriculum->cell_phone                             = $request->cell_phone;
        $curriculum->date_of_birth                          = $request->date_of_birth;
        $curriculum->email                                  = $request->email;
        $curriculum->linkedin                               = $request->linkedin;
        $curriculum->about_me                               = $request->about_me;
        $curriculum->training                               = $request->training;
        $curriculum->work_experience                        = $request->work_experience;
        $curriculum->languages                              = $request->languages;
        $curriculum->courses_trainings                      = $request->courses_trainings;
        $curriculum->interests_or_additional_information    = $request->interests_or_additional_information;
        $curriculum->additional_information                 = $request->additional_information;

        if(!$curriculum->save()){
            return 'error';
        }

        $data = [
            'name'                                  => $request->name,
            'lastname'                              => $request->lastname,
            'academic_title'                        => $request->academic_title,
            'location'                              => $request->location,
            'address'                               => $request->address,
            'dni'                                   => $request->dni,
            'linkedin'                              => $request->linkedin,
            'about_me'                              => $request->about_me,
            'cell_phone'                            => $request->cell_phone,
            'date_of_birth'                         => date("d/m/Y", strtotime($request->date_of_birth)),
            'email'                                 => $request->email,
            'training'                              => $request->training,
            'work_experience'                       => $request->work_experience,
            'languages'                             => $request->languages,
            'courses_trainings'                     => $request->courses_trainings,
            'interests_or_additional_information'   => $request->interests_or_additional_information,
            'additional_information'                => $request->additional_information,
            'photo'                                 => $curriculum->photo
        ];
          
        $pdf = PDF::loadView('myPDF', $data);
        // $pdf = PDF::loadView('pdf.cv2', $data);

        return $pdf->download('Mi CV.pdf');
    }

    public function generatePDFAdmin($id)
    {
        $curriculum = Curriculum::find($id);
        $data = [
            'name'                                  => $curriculum->name,
            'lastname'                              => $curriculum->lastname,
            'academic_title'                        => $curriculum->academic_title,
            'location'                              => $curriculum->location,
            'address'                               => $curriculum->address,
            'dni'                                   => $curriculum->dni,
            'linkedin'                              => $curriculum->linkedin,
            'about_me'                              => $curriculum->about_me,
            'cell_phone'                            => $curriculum->cell_phone,
            'date_of_birth'                         => date("d/m/Y", strtotime($curriculum->date_of_birth)),
            'email'                                 => $curriculum->email,
            'training'                              => $curriculum->training,
            'work_experience'                       => $curriculum->work_experience,
            'languages'                             => $curriculum->languages,
            'courses_trainings'                     => $curriculum->courses_trainings,
            'interests_or_additional_information'   => $curriculum->interests_or_additional_information,
            'additional_information'                => $curriculum->additional_information,
            'photo'                                 => $curriculum->photo
        ];
          
        $pdf = PDF::loadView('myPDF2', $data);
    
        return $pdf->download('CV - '.$curriculum->email.'.pdf');
    }
}