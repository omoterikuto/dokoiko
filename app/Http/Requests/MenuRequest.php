<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
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
      'name' => 'required|max:50',
      'value' => 'required',
      'text' => 'required|max:2000',
    ];
  }
  public function attributes()
  {
    return [
      'name' => 'メニュー名',
      'value' => '価格',
      'text' => '説明文',
    ];
  }
}
