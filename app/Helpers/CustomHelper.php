<?php 
namespace App\Helpers;
use Illuminate\Support\Facades\Hash;
use App\Models\Projectype;
use App\Models\Project;
use App\Models\Blog;
use DB;
use Auth;

class CustomHelper{
	static function getProjectType(){
		return Projectype::with('projects')->wherestatus(1)->get();
	}

	static function getRecentProject(){
		return Project::with('projectType:id,name')->latest()->wherestatus(1)->limit(6)->get();
	}

	static function getSeoTemplates($page=''){
        $heading = [
            'degital-marketing' => "Digital marketing, SEO, PPC, social media marketing, content marketing, digital marketing company near me, Digi Softron Technology, seo company near me, seo company in lucknow comprehensive solutions, business growth",
            'android-dev' => 'Android & IOS App Development Company in Lucknow',
            'about-us' => 'Digi Softron Technology  About us',
            'contact-us' => 'Digi Softron Technology  Contact us',
            'our-services' => 'Our Services',
            'web-development' => 'Best web design company in Lucknow, Affordable web development in Lucknow, Top website designers Lucknow, Custom website development Lucknow, Top-rated web development firm in Lucknow, Experienced web development services Lucknow, Lucknow top web development agency, Expert website developers Lucknow, Reliable web design agency in Lucknow, Professional web development company Lucknow',
            'software-dev' => 'Software development, professional services, India, Strong Webtech, Lucknow, custom solutions, latest technologies, expert developers, outstanding results, business growth.',
        ];
        $slug = trim($page);
        if(array_key_exists($slug, $heading)){
            return $heading[$slug];
        }
        return false;
    }

    static function getBlogs(){
        return Blog::latest()->take(3)->get();
    }

}