<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ConfigRequest;

class ConfigController extends Controller
{
  public function index()
  {
    $user = User::where('id', Auth::user()->id)->first();
    return view('config.index', [
      'user' => $user,
    ]);
  }
  public function store(ConfigRequest $request)
  {
    User::where('id', $request->user_id)->update([
      'name' => $request->name,
      'email' => $request->email,
      'address' => $request->address,
      'profile' => $request->profile,
      'phone' => $request->phone,
      'close' => $request->close,
      'cash' => $request->cash,
      'credit' => $request->credit,
      'paypay' => $request->paypay,
      'category' => $request->category,
    ]);
    if (isset($request->image)) {
      Storage::delete('public/' . $request->user()->image);
      $original_image = $request->image;
      $filePath = $original_image->store('public/user');
      $file_name = str_replace('public/user', '', $filePath);
      User::where('id', $request->user_id)->update([
        'image' => $file_name
      ]);
    }
    return redirect()->route('config.index');
  }
}
