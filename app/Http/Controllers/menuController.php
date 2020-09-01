<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\MenuRequest;
use Illuminate\Http\Request;

class MenuController extends Controller
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
  public function store(MenuRequest $request, Menu $menu)
  {
    $menu->name = $request->name;
    $menu->value = $request->value;
    $menu->text = $request->text;
    $menu->user_id = $request->user()->id;
    if (isset($request->image)) {
      $filePath = $request->image->store('public/menu');
      $file_name = str_replace('public/menu/', '', $filePath);
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
  public function update(MenuRequest $request, Menu $menu)
  {
    $menu->name = $request->name;
    $menu->value = $request->value;
    $menu->text = $request->text;
    $menu->user_id = $request->user()->id;
    if (isset($request->image)) {
      Storage::delete('public/' . $menu->image);
      $file_path = $request->image->store('public/menu');
      $file_name = str_replace('public/menu/', '', $file_path);
      $menu->image = $file_name;
    }
    $menu->save();
    return redirect()->route('menu.index');
  }
  public function destroy(Menu $menu)
  {
    Storage::delete('public/menu/' . $menu->image);
    $menu->delete();
    return redirect()->route('menu.index');
  }
}
