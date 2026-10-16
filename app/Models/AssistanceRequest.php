<?php
namespace App\Models; use Illuminate\Database\Eloquent\Model;
class AssistanceRequest extends Model { protected $fillable=['senior_citizen_id','request_type','description','date_requested','status','review_notes','date_resolved']; protected $casts=['date_requested'=>'date','date_resolved'=>'date']; public function seniorCitizen(){return $this->belongsTo(SeniorCitizen::class);} }
