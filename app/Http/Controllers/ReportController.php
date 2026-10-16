<?php
namespace App\Http\Controllers; use App\Models\{SeniorCitizen,AssistanceRequest,Benefit};
class ReportController extends Controller { public function index(){return view('reports.index',['seniors'=>SeniorCitizen::orderBy('last_name')->get(),'requests'=>AssistanceRequest::with('seniorCitizen')->latest()->get(),'benefits'=>Benefit::with('seniorCitizen')->latest()->get()]);} }
