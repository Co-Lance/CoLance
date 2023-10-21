<?php

namespace App\Http\Controllers;
use App\Models\Reclamation;

use PDF;

class PDFController extends Controller
{
    public function generatePDF($id)
    { $reclamation = Reclamation::find($id);
        $data = ['title' => $reclamation->title , 'reclamation' => $reclamation];

        $pdf = PDF::loadView('components.pdf_view', $data);

        return $pdf->download('hdtuto.pdf');
    }
}
