<?php
namespace App\Http\Resources\Api;
use Illuminate\Http\Resources\Json\JsonResource;
class Language extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'idioma'	=>	$this->language
            
		];
    }
}