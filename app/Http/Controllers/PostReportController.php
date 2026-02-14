<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostReport;
use App\Http\Requests\StoreReportRequest;

class PostReportController extends Controller
{

public function store(StoreReportRequest  $request){

    $report = $request->validated();

     // Si NO hay contacto → reporte anónimo
    if (empty($report['contact'])) {
        $report['terms_accepted'] = false;
        $report['terms_accepted_at'] = null;
    } else {
        // Hay contacto → debe aceptar términos
        $report['terms_accepted'] = true;
        $report['terms_accepted_at'] = now();
    }

    PostReport::create($report);
    return redirect()->back()->with('success', 'Reporte enviado con éxito. Gracias por ayudarnos a mantener la comunidad segura.');
}
 
}
