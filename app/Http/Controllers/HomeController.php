<?php

namespace App\Http\Controllers;

use App\Models\Abroad;
use App\Models\Contacts;
use App\Models\abroads;
use App\Models\Download;
use App\Models\Faq;
use App\Models\Location;
use App\Models\Member;
use App\Models\News;
use App\Models\Page;
use App\Models\Partner;
use App\Models\Recruitments;
use App\Models\Review;
use App\Models\Services;
use App\Models\Social;
use App\Models\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $contacts = Contacts::all();
        $posts = News::all();
        $pages = Page::all();
        $reviews = Review::all();
        $abroadss = Abroad::all();
        $services = Services::all();
        $teams = Member::all();
        $downloads = Download::all();
        $partners = Partner::all();
        $faqs = Faq::all();
        $videos = Video::all();
        $testimonials = Review::all();
        $faqs = Faq::all();
        $social = Social::all();
        return view('admin.dashboard', compact(['contacts', 'posts', 'pages', 'reviews', 'abroadss', 'services', 'teams', 'downloads', 'partners', 'faqs', 'videos', 'testimonials', 'faqs', 'social']));
    }
}
