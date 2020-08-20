<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Menu;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class menuController extends Controller
{
  public function index()
  {
    $menus = Menu::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();
    return view('menu.index', [
      'menus' => $menus,
    ]);
  }
  public function create()
  {
    return view('menu.create');
  }
  public function store(Request $request, Menu $menu)
  {
    $menu->name = $request->name;
    $menu->value = $request->value;
    $menu->text = $request->text;
    $menu->user_id = $request->user()->id;
    if (isset($request->image)) {
      $filePath = $request->image->store('public');
      $file_name = str_replace('public/', '', $filePath);
      $menu->image = $file_name;
    }
    $menu->save();
    return redirect()->route('menu.index');
  }
  public function edit(Menu $menu)
  {
    return view('menu.edit', [
      'menu' => $menu,
    ]);
  }
  public function update(Request $request, Menu $menu)
  {
    $menu->name = $request->name;
    $menu->value = $request->value;
    $menu->text = $request->text;
    $menu->user_id = $request->user()->id;
    if (isset($request->image)) {
      Storage::delete('public/' . $menu->image);
      $filePath = $request->image->store('public');
      $file_name = str_replace('public/', '', $filePath);
      $menu->image = $file_name;
    }
    $menu->save();
    return redirect()->route('menu.index');
  }
  public function destroy(Request $request, Menu $menu)
  {
    $menu->delete();
    return redirect()->route('menu.index');
  }
}
