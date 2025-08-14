<?php
use App\Models\admin\Website;
use App\Models\admin\Slider;
use App\Models\admin\Service;
use App\Models\admin\Category;
use App\Models\admin\Product;
use App\Models\admin\Testimonial;
use App\Models\admin\Team;
use App\Models\admin\Client;
use App\Models\admin\SocialMedia;
use App\Models\admin\Inquiry;
use App\Models\admin\Vendor;
use App\Models\admin\CustomCode;


function getVenderLoginData(){
    $sessionId = Session::get('isLoginSession');
    $data = Vendor::find($sessionId);

    return $data;
}

function getWebsiteData(){
    $website = Website::first();

    if ($website) {
        return $website;
    }
    return null;
}

function getSliders(){
    $sliders = Slider::where('status', 1)->get();

    if ($sliders) {
        return $sliders;
    }
    return null;
}

function getClients(){
    $data = Client::where('status', 1)->get();

    if ($data) {
        return $data;
    }
    return null;
}





// function getServices(){
//     $data = [
//         'Residential Solar Rooftops', 'Commercial Solar Solutions', 'Industrial Solar Rooftops', 'Ground Mounted Solar', 'Submersible Solar', 'Street Solar Lighting', 'Solar Gazebo', 'Solar Rotational Structure'    
//     ];

//     if ($data) {
//         return $data;
//     }
//     return null;
// }


function getServices(){
    $services = Service::where('status', 1)->get();

    if ($services) {
        return $services;
    }
    return null;
}
function getCustomCode(){
    $code = CustomCode::first();

    if ($code) {
        return $code;
    }
    return null;
}


function getTotalCategories(){
    return Category::count();
}

function getTotalProducts(){
    return Product::count();
}

function getTotalInquiries(){
    return Inquiry::count();
}

function getSocialMedia(){
    $socialMedia = SocialMedia::first();
    if ($socialMedia) {
        return $socialMedia;
    }
    return null;
}

function getCategory($categoryId){
    $category = Category::find($categoryId);
    // dd($category);
    if ($category) {
        return $category;
    }
    return null;
}


function getCategories(){
    $categories = Category::where('status', 1)
    ->has('products') // Add this line to check if the category has at least one product
    ->get();
    

    if ($categories) {
        return $categories;
    }
    return null;
}

function getTestimonials(){
    return Testimonial::where('status', 1)->get();
}

function getTeams(){
    return Team::where('status', 1)->get();
}   