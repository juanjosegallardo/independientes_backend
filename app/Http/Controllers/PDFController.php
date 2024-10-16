<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function generarPDF()
    {
        // Datos que quieres enviar al PDF
        $data = [
            'title' => 'Bienvenido a PDF con Laravel',
            'date' => date('m/d/Y')
        ];

        // Cargar la vista y pasarle los datos
        $pdf = PDF::loadView('evaluacion', $data);

        // Descargar el PDF con nombre 'mi_archivo.pdf'
        return $pdf->download('mi_archivo.pdf');
    }
}
