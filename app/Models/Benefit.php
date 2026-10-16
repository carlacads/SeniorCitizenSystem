<?php
namespace App\Models; use Illuminate\Database\Eloquent\Model;
class Benefit extends Model { protected $fillable=['senior_citizen_id','benefit_name','benefit_type','distribution_date','status','reference_no','notes']; protected $casts=['distribution_date'=>'date']; public function seniorCitizen(){return $this->belongsTo(SeniorCitizen::class);} }
