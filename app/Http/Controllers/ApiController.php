<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use App\Models\abroads;
use App\Models\News;
use App\Models\Download;
use App\Models\Faq;
//use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Location;
use App\Models\Member;
use App\Models\Menu;
use App\Models\MenuLocation;
use App\Models\Page;
use App\Models\Partner;
use App\Models\Review;
use App\Models\Services;
use App\Models\Setting;
use App\Models\Vacancy;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ApiController extends Controller
{
    public function blogIndex()
    {
        try {
            $blogs = News::where('status', 1)->latest()->get();
            foreach ($blogs as $key => $blog) {
                $blog['image'] = asset($blog->image);
            }

            return response()->json([
                "statusCode" => 200,
                "error" => false,
                "data" => $blogs,
                'message' => 'Retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json(['statusCode' => 401, 'error' => true, 'message' => $e->getMessage()]);
        }
    }

    public function singleBlog($slug)
    {
        try {
            $blog = News::where('slug', $slug)->first();
            $blog['image'] = asset($blog->image);

            return response()->json([
                "statusCode" => 200,
                "error" => false,
                "data" => $blog,
                'message' => 'Retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json(['statusCode' => 401, 'error' => true, 'message' => $e->getMessage()]);
        }
    }

    public function serviceIndex()
    {
        try {
            $services = Services::where('status', 1)->orderBy('order', 'ASC')->latest()->get();
            foreach ($services as $key => $service) {
                $service['image'] = asset($service->image);
            }

            return response()->json([
                "statusCode" => 200,
                "error" => false,
                "data" => $services,
                'message' => 'Retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json(['statusCode' => 401, 'error' => true, 'message' => $e->getMessage()]);
        }
    }

    public function singleService($slug)
    {
        try {
            $service = Services::where('slug', $slug)->first();
            $service['image'] = asset($service->image);

            return response()->json([
                "statusCode" => 200,
                "error" => false,
                "data" => $service,
                'message' => 'Retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json(['statusCode' => 401, 'error' => true, 'message' => $e->getMessage()]);
        }
    }

    public function abroadsIndex()
    {
        try {
            $abroadss = abroads::where('status', 1)->orderBy('order', 'ASC')->latest()->get();
            foreach ($abroadss as $key => $abroads) {
                $abroads['image'] = asset($abroads->image);
            }

            return response()->json([
                "statusCode" => 200,
                "error" => false,
                "data" => $abroadss,
                'message' => 'Retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json(['statusCode' => 401, 'error' => true, 'message' => $e->getMessage()]);
        }
    }

    public function singleabroads($slug)
    {
        try {
            $abroads = abroads::where('slug', $slug)->first();
            $abroads['image'] = asset($abroads->image);

            return response()->json([
                "statusCode" => 200,
                "error" => false,
                "data" => $abroads,
                'message' => 'Retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json(['statusCode' => 401, 'error' => true, 'message' => $e->getMessage()]);
        }
    }

    public function partnerIndex()
    {
        try {
            $partners = Partner::where('status', 1)->orderBy('order', 'ASC')->get();
            foreach ($partners as $partner) {
                $partner['image'] = asset($partner->image);
            }

            return response()->json([
                "statusCode" => 200,
                "error" => false,
                "data" => $partners,
                'message' => 'Retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json(['statusCode' => 401, 'error' => true, 'message' => $e->getMessage()]);
        }
    }

    public function ourTeamIndex()
    {
        try {
            $ourteams = Member::where('status', 1)->orderBy('order', 'ASC')->get();

            foreach ($ourteams as $key => $ourteam) {
                $ourteam['image'] = asset($ourteam->image);
            }

            return response()->json([
                "statusCode" => 200,
                "error" => false,
                "data" => $ourteams,
                'message' => 'Retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json(['statusCode' => 401, 'error' => true, 'message' => $e->getMessage()]);
        }
    }

    public function faqIndex()
    {
        try {
            $faqs = Faq::where('status', 1)->orderBy('order', 'ASC')->get();

            return response()->json([
                "statusCode" => 200,
                "error" => false,
                "data" => $faqs,
                'message' => 'Retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json(['statusCode' => 401, 'error' => true, 'message' => $e->getMessage()]);
        }
    }

    public function inquiryStore(Request $request)
    {
        try {
            $validation = Validator::make($request->all(), [
                'full_name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'message' => 'required'
            ]);


            if ($validation->fails()) {
                return response()->json(['statusCode' => 401, 'error' => true, 'error_message' => $validation->errors(), 'message' => 'Please fill the input field properly']);
            }

            Contacts::create([
                'full_name' => $request->full_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'message' => $request->message,
            ]);

            return response()->json([
                "statusCode" => 200,
                "error" => false,
                'message' => 'Thank you, your enquiry has been submitted successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json(['statusCode' => 401, 'error' => true, 'message' => $e->getMessage()]);
        }
    }

    public function pageIndex()
    {
        try {
            $pages = Page::where('status', 1)->latest()->get();
            foreach ($pages as $page) {
                $page['image'] = asset($page->image);
            }

            return response()->json([
                "statusCode" => 200,
                "error" => false,
                "data" => $pages,
                'message' => 'Retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json(['statusCode' => 401, 'error' => true, 'message' => $e->getMessage()]);
        }
    }

    public function singlePage($slug)
    {
        try {
            $page = Page::where('slug', $slug)->first();
            $page['image'] = asset($page->image);

            return response()->json([
                "statusCode" => 200,
                "error" => false,
                "data" => $page,
                'message' => 'Retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json(['statusCode' => 401, 'error' => true, 'message' => $e->getMessage()]);
        }
    }

    public function settings()
    {
        try {
            $settings = Setting::pluck('value', 'key');

            if ($settings['site_main_logo']) {
                $settings['site_main_logo'] = asset($settings['site_main_logo']);
            }

            if ($settings['site_fav_icon']) {
                $settings['site_fav_icon'] = asset($settings['site_fav_icon']);
            }

            if ($settings['homepage_image']) {
                $settings['homepage_image'] = asset($settings['homepage_image']);
            }

            if ($settings['faq_image']) {
                $settings['faq_image'] = asset($settings['faq_image']);
            }

            if ($settings['contact_image']) {
                $settings['contact_image'] = asset($settings['contact_image']);
            }

            if ($settings['member_image']) {
                $settings['member_image'] = asset($settings['member_image']);
            }

            if ($settings['blog_image']) {
                $settings['blog_image'] = asset($settings['blog_image']);
            }

            if ($settings['gallerys_image']) {
                $settings['gallerys_image'] = asset($settings['gallerys_image']);
            }

            if ($settings['service_image']) {
                $settings['service_image'] = asset($settings['service_image']);
            }

            if ($settings['location_image']) {
                $settings['location_image'] = asset($settings['location_image']);
            }

            if ($settings['abroads_image']) {
                $settings['abroads_image'] = asset($settings['abroads_image']);
            }

            if ($settings['video_image']) {
                $settings['video_image'] = asset($settings['video_image']);
            }

            if ($settings['review_image']) {
                $settings['review_image'] = asset($settings['review_image']);
            }

            if ($settings['partner_image']) {
                $settings['partner_image'] = asset($settings['partner_image']);
            }

            if ($settings['download_image']) {
                $settings['download_image'] = asset($settings['download_image']);
            }

            if ($settings['about_first_image']) {
                $settings['about_first_image'] = asset($settings['about_first_image']);
            }

            if ($settings['about_second_image']) {
                $settings['about_second_image'] = asset($settings['about_second_image']);
            }

            return response()->json([
                "statusCode" => 200,
                "error" => false,
                "data" => $settings,
                'message' => 'Retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json(['statusCode' => 401, 'error' => true, 'message' => $e->getMessage()]);
        }
    }

    public function downloads()
    {
        try {
            $downloads = Download::where('status', 1)->orderBy('order', 'ASC')->get();
            foreach ($downloads as $download) {
                $download['image'] = asset($download->image);
            }

            return response()->json([
                "statusCode" => 200,
                "error" => false,
                "data" => $downloads,
                'message' => 'Retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json(['statusCode' => 401, 'error' => true, 'message' => $e->getMessage()]);
        }
    }

    public function gallery()
    {
        try {
            $galleries = Gallery::latest()->get();
            foreach ($galleries as $gallery) {
                $gallery['image'] = asset($gallery->image);
            }

            return response()->json([
                "statusCode" => 200,
                "error" => false,
                "data" => $galleries,
                'message' => 'Retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json(['statusCode' => 401, 'error' => true, 'message' => $e->getMessage()]);
        }
    }

    public function review()
    {
        try {
            $reviews = Review::where('status', 1)->orderBy('order', 'ASC')->get();
            foreach ($reviews as $review) {
                $review['image'] = asset($review->image);
            }

            return response()->json([
                "statusCode" => 200,
                "error" => false,
                "data" => $reviews,
                'message' => 'Retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json(['statusCode' => 401, 'error' => true, 'message' => $e->getMessage()]);
        }
    }

    public function video()
    {
        try {
            $videos = Video::where('status', 1)->orderBy('order', 'ASC')->get();
            foreach ($videos as $review) {
                $review['image'] = asset($review->image);
            }

            return response()->json([
                "statusCode" => 200,
                "error" => false,
                "data" => $videos,
                'message' => 'Retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json(['statusCode' => 401, 'error' => true, 'message' => $e->getMessage()]);
        }
    }


    public function menu($id)
    {
        try {

            $nav = MenuLocation::where('location', $id)->first();
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
                            }
                        }
                    }
                }
            }

            return response()->json([
                "statusCode" => 200,
                "error" => false,
                "data" => $sitemenu,
                'message' => 'Retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json(['statusCode' => 401, 'error' => true, 'message' => $e->getMessage()]);
        }
    }
}
