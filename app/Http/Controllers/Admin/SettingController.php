<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Session;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Str;

class SettingController extends Controller
{

    public function edit(Setting $setting)
    {
        $settings = Setting::pluck('value', 'key');
        return view('admin.setting.edit', compact('settings'));
    }

    public function update(Request $request, Setting $setting)
    {
        $siteSettings = Setting::pluck('value', 'key');

        $siteSetting = $request->all();


        $site_main_logo = updatesettingmedia($request, 'site_main_logo', 'main_logo');
        $site_fav_icon = updatesettingmedia($request, 'site_fav_icon', 'fav_logo');
        $footer_logo = updatesettingmedia($request, 'footer_logo', 'footer_logo');
        $homepage_image = updatesettingmedia($request, 'homepage_image', 'home');
        // add new images for pages from here
        $test_image = updatesettingmedia($request, 'testpreperation_image', 'test');
        $scholorship_image = updatesettingmedia($request, 'scholorship_image', 'scholorship');
        $homepage_testimonialsbanner = updatesettingmedia($request, 'homepage_testimonialsbanner', 'homepage_testimonialsbanner');
        $homepage_contactimage = updatesettingmedia($request, 'homepage_contactimage', 'homepage_contactimage');
        $aboutpage_image = updatesettingmedia($request, 'aboutpage_image', 'aboutpage_image');
        $aboutpage_bannerimage = updatesettingmedia($request, 'aboutpage_bannerimage', 'aboutpage_bannerimage');
        $team_bannerimage = updatesettingmedia($request, 'team_bannerimage', 'team_bannerimage');
        $services_bannerimage = updatesettingmedia($request, 'services_bannerimage', 'services_bannerimage');
        $testimonials_bannerimage = updatesettingmedia($request, 'testimonials_bannerimage', 'testimonials_bannerimage');
        $country_bannerimage = updatesettingmedia($request, 'country_bannerimage', 'country_bannerimage');
        $course_bannerimage = updatesettingmedia($request, 'course_bannerimage', 'course_bannerimage');
        $blog_bannerimage = updatesettingmedia($request, 'blog_bannerimage', 'blog_bannerimage');
        $contact_bannerimage = updatesettingmedia($request, 'contact_bannerimage', 'contact_bannerimage');
        $faq_bannerimage = updatesettingmedia($request, 'faq_bannerimage', 'faq_bannerimage');

        // end of added new files
        $faq_image = updatesettingmedia($request, 'faq_image', 'faq');
        $contact_image = updatesettingmedia($request, 'contact_image', 'contact');
        $blog_image = updatesettingmedia($request, 'blogs_image', 'blog');
        $member_image = updatesettingmedia($request, 'member_image', 'member');
        $gallerys_image = updatesettingmedia($request, 'gallerys_image', 'gallerys');
        $service_image = updatesettingmedia($request, 'service_image', 'service');
        $location_image = updatesettingmedia($request, 'location_image', 'location');
        $abroads_image = updatesettingmedia($request, 'abroads_image', 'abroads');
        $review_image = updatesettingmedia($request, 'review_image', 'review');
        $video_image = updatesettingmedia($request, 'video_image', 'video');
        $partner_image = updatesettingmedia($request, 'partner_image', 'video');


        $about_first_image = updatesettingmedia($request, 'about_first_image', 'about');

        $about_second_image = updatesettingmedia($request, 'about_second_image', 'about');

        $siteSetting['site_main_logo'] = deletesettingmedia($site_main_logo, $siteSettings['site_main_logo'], 'site_main_logo', $siteSetting, $siteSettings);


        $siteSetting['site_fav_icon'] = deletesettingmedia($site_fav_icon, $siteSettings['site_fav_icon'], 'site_fav_icon', $siteSetting, $siteSettings);

        $siteSetting['footer_logo'] = deletesettingmedia($footer_logo, $siteSettings['footer_logo'], 'footer_logo', $siteSetting, $siteSettings);

        $siteSetting['homepage_image'] = deletesettingmedia($homepage_image, $siteSettings['homepage_image'], 'homepage_image', $siteSetting, $siteSettings);


        // start added from here
        $siteSetting['testpreperation_image'] = deletesettingmedia($test_image, $siteSettings['testpreperation_image'], 'testpreperation_image', $siteSetting, $siteSettings);
        $siteSetting['homepage_testimonialsbanner'] = deletesettingmedia($homepage_testimonialsbanner, $siteSettings['homepage_testimonialsbanner'], 'homepage_testimonialsbanner', $siteSetting, $siteSettings);
        $siteSetting['homepage_contactimage'] = deletesettingmedia($homepage_contactimage, $siteSettings['homepage_contactimage'], 'homepage_contactimage', $siteSetting, $siteSettings);
        $siteSetting['aboutpage_image'] = deletesettingmedia($aboutpage_image, $siteSettings['aboutpage_image'], 'aboutpage_image', $siteSetting, $siteSettings);
        $siteSetting['aboutpage_bannerimage'] = deletesettingmedia($aboutpage_bannerimage, $siteSettings['aboutpage_bannerimage'], 'aboutpage_bannerimage', $siteSetting, $siteSettings);
        $siteSetting['team_bannerimage'] = deletesettingmedia($team_bannerimage, $siteSettings['team_bannerimage'], 'team_bannerimage', $siteSetting, $siteSettings);
        $siteSetting['services_bannerimage'] = deletesettingmedia($services_bannerimage, $siteSettings['services_bannerimage'], 'services_bannerimage', $siteSetting, $siteSettings);
        $siteSetting['testimonials_bannerimage'] = deletesettingmedia($testimonials_bannerimage, $siteSettings['testimonials_bannerimage'], 'testimonials_bannerimage', $siteSetting, $siteSettings);
        $siteSetting['country_bannerimage'] = deletesettingmedia($country_bannerimage, $siteSettings['country_bannerimage'], 'country_bannerimage', $siteSetting, $siteSettings);
        $siteSetting['course_bannerimage'] = deletesettingmedia($course_bannerimage, $siteSettings['course_bannerimage'], 'course_bannerimage', $siteSetting, $siteSettings);
        $siteSetting['blog_bannerimage'] = deletesettingmedia($blog_bannerimage, $siteSettings['blog_bannerimage'], 'blog_bannerimage', $siteSetting, $siteSettings);
        $siteSetting['contact_bannerimage'] = deletesettingmedia($contact_bannerimage, $siteSettings['contact_bannerimage'], 'contact_bannerimage', $siteSetting, $siteSettings);
        $siteSetting['faq_bannerimage'] = deletesettingmedia($faq_bannerimage, $siteSettings['faq_bannerimage'], 'faq_bannerimage', $siteSetting, $siteSettings);

        // sholarship image
        $siteSetting['scholorship_image'] = deletesettingmedia($scholorship_image, $siteSettings['scholorship_image'], 'scholorship_image', $siteSetting, $siteSettings);


        // end of new added files
        $siteSetting['faq_image'] = deletesettingmedia($faq_image, $siteSettings['faq_image'], 'faq_image', $siteSetting, $siteSettings);

        $siteSetting['contact_image'] = deletesettingmedia($contact_image, $siteSettings['contact_image'], 'contact_image', $siteSetting, $siteSettings);


        $siteSetting['blogs_image'] = deletesettingmedia($blog_image, $siteSettings['blogs_image'], 'blogs_image', $siteSetting, $siteSettings);


        $siteSetting['member_image'] = deletesettingmedia($member_image, $siteSettings['member_image'], 'member_image', $siteSetting, $siteSettings);


        $siteSetting['gallerys_image'] = deletesettingmedia($gallerys_image, $siteSettings['gallerys_image'], 'gallerys_image', $siteSetting, $siteSettings);


        $siteSetting['service_image'] = deletesettingmedia($service_image, $siteSettings['service_image'], 'service_image', $siteSetting, $siteSettings);


        $siteSetting['location_image'] = deletesettingmedia($location_image, $siteSettings['location_image'], 'location_image', $siteSetting, $siteSettings);


        $siteSetting['abroads_image'] = deletesettingmedia($abroads_image, $siteSettings['abroads_image'], 'abroads_image', $siteSetting, $siteSettings);


        $siteSetting['review_image'] = deletesettingmedia($review_image, $siteSettings['review_image'], 'review_image', $siteSetting, $siteSettings);


        $siteSetting['video_image'] = deletesettingmedia($video_image, $siteSettings['video_image'], 'video_image', $siteSetting, $siteSettings);


        $siteSetting['partner_image'] = deletesettingmedia($partner_image, $siteSettings['partner_image'], 'partner_image', $siteSetting, $siteSettings);

        $siteSetting['about_first_image'] = deletesettingmedia($about_first_image, $siteSettings['about_first_image'], 'about_first_image', $siteSetting, $siteSettings);


        $siteSetting['about_second_image'] = deletesettingmedia($about_second_image, $siteSettings['about_second_image'], 'about_second_image', $siteSetting, $siteSettings);

        foreach ($siteSetting as $key => $value) {
            $setting->updateOrCreate(['key' => $key,], [
                'key' => $key,
                'value' => $value,
            ]);
        }

        Session::flash('success', 'Setting updated successfully');
        return redirect()->back();
    }
}
