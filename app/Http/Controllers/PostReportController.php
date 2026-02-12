<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostReport;

class PostReportController extends Controller
{

public function store(StoreReportRequest $request){

    $report = $request->validated();
    PostReport::create($report);
    return redirect()->back()->with('success', 'Reporte enviado con éxito. Gracias por ayudarnos a mantener la comunidad segura.');
}
 
}
