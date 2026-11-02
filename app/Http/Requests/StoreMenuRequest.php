<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreMenuRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'parent_id' => $this->parent_id === '' || $this->parent_id === null ? null : $this->parent_id,
            'sort_order' => $this->sort_order === '' || $this->sort_order === null ? 0 : $this->sort_order,
            'target' => $this->target ?? '_self',
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'url' => 'required|string|max:255',
            'parent_id' => 'nullable|integer|exists:menus,id',
            'location' => 'required|string|in:header,footer,sidebar',
            'sort_order' => 'nullable|integer|min:0',
            'target' => 'nullable|string|in:_self,_blank',
            'status' => 'required|integer|in:0,1',
            'icon' => 'nullable|string|max:255',
        ];
    }
}
