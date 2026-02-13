<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostReport;
use App\Http\Requests\StoreReportRequest;

class PostReportController extends Controller
{

public function store(StoreReportRequest  $request){

    $report = $request->validated();

     if (!empty($report['terms_accepted'])) {
        $report['terms_accepted_at'] = now();
    }

    PostReport::create($report);
    return redirect()->back()->with('success', 'Reporte enviado con éxito. Gracias por ayudarnos a mantener la comunidad segura.');
}
 
}
