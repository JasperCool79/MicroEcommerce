<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $url = env('APP_URL');
        return [
            "id"=> $this->id,
            "name"=>$this->name,
            "job"=>$this->job,
            "company"=>$this->company,
            "photo"=> $url.'/uploads/review/'.$this->photo,
            "review_message"=>$this->review_message,
        ];
    }
}
