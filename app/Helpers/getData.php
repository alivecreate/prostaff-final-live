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
use App\Models\admin\ProductInquiry;
use App\Models\admin\CustomCode;
use App\Models\admin\Blog;
use App\Models\admin\Industry;
use App\Models\admin\ProductImage;


function getVenderLoginData(){
    $sessionId = Session::get('isLoginSession');
    $data = Vendor::find($sessionId);

    return $data;
}

function getProductImage($id){
    // dd($id);
    $data = ProductImage::where('product_id', $id)->first(); 
    if($data){
        return $data;
    }
    return null;
    // dd($data);
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
    $data = Client::get();

    if ($data) {
        return $data;
    }
    return null;
}

function getIndustries(){
    $industries = Industry::get();
    if ($industries) {
        return $industries;
    }
    return null;
}


function getTotalBlogs(){
    return Blog::count();
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
    $services = Service::get();

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


function getTotalProductInquiry(){
    return ProductInquiry::count();
}
function getTotalInquiry(){
    return Inquiry::count();
}

function getTotalTestimonials(){
    return Testimonial::count();
}

function getTotalTeam(){
    return Team::count();
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

// function getTestimonials(){
//     return Testimonial::where('status', 1)->get();
// }

function getTestimonials($limit = null){
    $query = \App\Models\admin\Testimonial::where('status', 1)->orderBy('item_no');
    
    if ($limit) {
        $query->limit($limit);
    }

    return $query->get();
}


function getTeams(){
    return Team::where('status', 1)->get();
}   

function getServiceByCategory($category){
    
    return Service::where('category', $category)->get();
}   

