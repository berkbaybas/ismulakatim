<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Interview extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       // return parent::toArray($request);
        
       return [
           'id' => $this-> id,
           'company_name' => $this -> company_name,
           'company_job' => $this -> company_job,
           'company_interview' => $this -> company_interview,
           'company_offer' => $this -> company_offer
       ];
    }
}
