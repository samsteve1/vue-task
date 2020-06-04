<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'job_title' => $this->job_title,
            'salary' => $this->formattedSalary,
            'type' => $this->work_type,
            'status' => $this->status,
            'avatar' => $this->avatar,
            'created_at' => $this->created_at->diffForHumans()
        ];
    }
}
