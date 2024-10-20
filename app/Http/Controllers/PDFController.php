<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evaluacion;
use PDF;

class PDFController extends Controller
{
    public function generarPDF($id)
    {
        

        $data = [
            'title' => 'Bienvenido a PDF con Laravel',
            'date' => date('m/d/Y'),
            'evaluacion'=>Evaluacion::with("atributos")->find($id)->toArray()
        ];
        //http://localhost:8000/api/pdfs/evaluaciones/13

        $pdf = PDF::loadView('evaluacion', $data);
        return $pdf->stream('mi_archivo.pdf');
    }
}
