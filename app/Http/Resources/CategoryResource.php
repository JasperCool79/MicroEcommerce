<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
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
            "id" => $this->id,
            "name" => $this->name,
            "title" => $this->title,
            "subtitle" => $this->subtitle,
            "banner_img" => $url.'/uploads/category/banner_img/'.$this->banner_img,
            "sub_banner_img" => $url.'/uploads/category/sub_banner_img/'.$this->sub_banner_img            
        ];
    }
}
