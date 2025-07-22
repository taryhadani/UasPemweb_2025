<?php
// ExpenseResource.php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ExpenseResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'category' => $this->category->name, // Mengambil nama kategori
            'amount' => $this->amount,
            'date' => $this->date,
            'note' => $this->note,
        ];
    }
}
