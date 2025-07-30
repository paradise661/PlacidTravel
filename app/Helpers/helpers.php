<?php

use App\Models\Member;
use App\Models\Page;
use App\Models\MenuLocation;
use App\Models\Menu;
use App\Models\Setting;
use App\Models\Social;
use Illuminate\Support\Str;

function getMenus($id)
{
    $nav = MenuLocation::where('location', $id)->first();
    if ($nav) {
        $sitemenu = json_decode($nav->content);
        $sitemenu = $sitemenu[0];
        foreach ($sitemenu as $menu) {
            $menu->title = Menu::where('id', $menu->id)->value('title');
            $menu->name = Menu::where('id', $menu->id)->value('name');
            $menu->slug = Menu::where('id', $menu->id)->value('slug');
            $menu->target = Menu::where('id', $menu->id)->value('target');
            $menu->type = Menu::where('id', $menu->id)->value('type');
            if (!empty($menu->children[0])) {
                foreach ($menu->children[0] as $child) {
                    $child->title = Menu::where('id', $child->id)->value('title');
                    $child->name = Menu::where('id', $child->id)->value('name');
                    $child->slug = Menu::where('id', $child->id)->value('slug');
                    $child->target = Menu::where('id', $child->id)->value('target');
                    $child->type = Menu::where('id', $child->id)->value('type');

                    if (!empty($child->children[0])) {
                        foreach ($child->children[0] as $subchild) {
                            $subchild->title = Menu::where('id', $subchild->id)->value('title');
                            $subchild->name = Menu::where('id', $subchild->id)->value('name');
                            $subchild->slug = Menu::where('id', $subchild->id)->value('slug');
                            $subchild->target = Menu::where('id', $subchild->id)->value('target');
                            $subchild->type = Menu::where('id', $subchild->id)->value('type');

                            if (!empty($subchild->children[0])) {
                                foreach ($subchild->children[0] as $newchild) {
                                    $newchild->title = Menu::where('id', $newchild->id)->value('title');
                                    $newchild->name = Menu::where('id', $newchild->id)->value('name');
                                    $newchild->slug = Menu::where('id', $newchild->id)->value('slug');
                                    $newchild->target = Menu::where('id', $newchild->id)->value('target');
                                    $newchild->type = Menu::where('id', $newchild->id)->value('type');
                                }
                            }
                        }
                    }
                }
            }
        }

        return $sitemenu;
    }
}

function getPages()
{
    return Page::where('status', 1)->get();
}
function getsocialmedia()
{
    return Social::oldest('order')->orderBy('order', 'ASC')->get();
}

function getSettings()
{
    return Setting::pluck('value', 'key')->toArray();
}


function getPagesById($id)
{
    return Page::where('status', 1)->where('id', $id)->first();
}

function getmemberbyloc()
{
    return Member::where('status', 1)->orderBy('order', 'ASC')->get();
}

if (!function_exists('updatesettingmedia')) {
    function updatesettingmedia($request, $name, $filename)
    {
        $image = $request->file($name);
        if ($image) {
            $image_new_name = $filename . '-' . date('YmdHis') . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/setting/'), $image_new_name);

            $image = '/storage/setting/' . $image_new_name;
            return $image;
        } else {
            return null;
        }
    }
}

if (!function_exists('deletesettingmedia')) {
    function deletesettingmedia($image, $old_image, $image_name, $siteSetting, $siteSettings)
    {
        if ($image) {
            removeFile($old_image);
            $siteSetting[$image_name] = $image;
        } else {
            $siteSetting[$image_name] = $siteSettings[$image_name];
        }
        return $siteSetting[$image_name];
    }
}

if (!function_exists('make_slug')) {
    function make_slug($string)
    {
        return Str::slug($string);
    }
}

if (!function_exists('fileUpload')) {
    function fileUpload($request, $name, $foldername)
    {
        $image = '';
        if ($image = $request->file($name)) {

            $image = $request->$name;
            $image_new_name = $name . '-' . date('YmdHis') . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/' . $foldername . '/'), $image_new_name);

            $image = '/storage/' . $foldername . '/' . $image_new_name;

            return $image;
        }
    }
}

if (!function_exists('galleryfileUpload')) {
    function galleryfileUpload($request, $name, $foldername)
    {
        $image = '';
        if ($image = $request->file($name)) {

            $image = $request->$name;
            $image_new_name = $name . '-' . date('YmdHis') . '.' . $image->getClientOriginalName();
            $image->move(public_path('storage/' . $foldername . '/'), $image_new_name);

            $image = '/storage/' . $foldername . '/' . $image_new_name;

            return $image;
        }
    }
}

if (!function_exists('removeFile')) {
    function removeFile($file)
    {
        if (File::exists(public_path($file))) {
            File::delete(public_path($file));
        }
    }
}

if (!function_exists('stripLetters')) {
    function stripLetters($text, $number, $last = "")
    {
        if (!empty($text)) {
            return substr(strip_tags(html_entity_decode($text)), 0, $number) . $last;
        }
    }
}
