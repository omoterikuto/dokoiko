<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class ConfigRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules()
  {
    return [
      'name' => ['required', 'max:50', Rule::unique('App\User')->ignore($this->user()->id)],
      'email' => ['required', Rule::unique('App\User')->ignore($this->user()->id)],
      'address' => ['required'],
      'profile' => ['max:200'],
    ];
  }
  public function attributes()
  {
    return [
      'name' => '店名',
      'email' => 'Eメール',
      'address' => '住所',
      'profile' => 'プロフィール',
      'phone' => '電話番号',
      'close' => '定休日',
      'category' => 'カテゴリー',
    ];
  }
}
