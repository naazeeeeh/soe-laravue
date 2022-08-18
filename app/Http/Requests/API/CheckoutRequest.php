<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules() {
        return [
            'customer_name'         => ['required', 'max:255'],
            'customer_email'        => ['required', 'email', 'max:255'],
            'customer_number'       => ['required', 'max:255'],
            'customer_address'      => ['required'],
            'transaction_total'     => ['required', 'integer'],
            'transaction_status'    => ['nullable', 'string', 'in:SUCCESS,PENDING,FAILED'],
            'transaction_details'   => ['required', 'array'],
            'transaction_details.*' => ['integer', 'exists:products,id'],
        ];
    }
}
