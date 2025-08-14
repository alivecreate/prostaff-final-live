<?php
use App\Models\admin\Website;
use App\Models\admin\Category;
use App\Models\admin\Product;
use App\Models\admin\ProductImage;
use App\Models\admin\SocialMedia;
use App\Models\admin\Testimonial;
use App\Models\admin\Team;
use App\Models\admin\Blog;
use App\Models\admin\CustomCode;
use App\Models\admin\ProductInquiry;
use App\Models\admin\Inquiry;
use App\Models\admin\Service;
use App\Models\admin\Industry;
use App\Models\admin\Slider;



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
    return null;
}

function getServiceList(){
    $data = ['Design & Engineering',
                'Supply & Fabrication Of Equipments At Workshop',
                'Equipment Erection',
                'Fabrication & Installation of Tanks and Vessels at Site',
                'Fabrication & Erection Of Piping',
                'Testing & Commissioning',
                'Retrofitting, Modification & Shutdown Work',
                'Mechanical Maintenance Of work',
                'Fabrication & Erection Of Structure', 'Other'
    ];

    if ($data) {
        return $data;
    }
    return null;
}

function getFarmingServiceList(){
    $data = [
        'End-to-End Package Solutions', 'Individual Solutions', 'Hydroponic Farming Package', 'Individual for Hydroponic Farming'
    ];

    if ($data) {
        return $data;
    }
    return null;
}

function getTotalCategories(){
    return Category::count();
}

function getTotalProducts(){
    return Product::count();
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

function getTotalBlogs(){
    return Blog::count();
}


function getSocialMedia(){
    $socialMedia = SocialMedia::first();
    if ($socialMedia) {
        return $socialMedia;
    }
    return null;
}

function getCategories(){
    $categories = Category::where('status', '1')->get();
    if ($categories) {
        return $categories;
    }
    return null;
}

function getServices(){
    $services = Service::get();
    if ($services) {
        return $services;
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

function getTestimonials(){
    $testimonials = Testimonial::where('status', '1')->get();
    if ($testimonials) {
        return $testimonials;
    }
    return null;
}

function getTeams(){
    $teams = Team::where('status', '1')->get();
    if ($teams) {
        return $teams;
    }
    return null;
}
function getLatestBlogs($limit = 4){
    $blogs = Blog::where('status', '1')->orderBy('id', 'desc')->limit($limit)->get();
    if ($blogs) {
        return $blogs;
    }
    return null;
}

function getSpecificBlogs($limit = 4, $skip = 0){
    $blogs = Blog::orderBy('id', 'desc')->skip($skip)->take($limit)->get();
    return $blogs;
}



function getVegetable(){
    $vegetable = Product::where('slug', 'vegetable')->get(); 
    if ($vegetable) {
        return $vegetable;
    }
    return null;
}

function isExistProduct($id){
    $data = Product::where('category_id', $id)->count(); 
    return $data;
}

function findProductData($id){
    $data = Product::where('id', $id)->get(); 
    return $data;
}

function findSingleProduct($id){
    $data = Product::where('id', $id)->first(); 
    return json_decode($data, true);
    return $data;
}

function getProductsFromArray($productIds){
    $data = explode(', ', $productIds);
    // $data = ProductImage::where('product_id', $id)->first();
    return $data;
}

function getProductImage($id){
    $data = ProductImage::where('product_id', $id)->first(); 
    return $data;
}


function getCities(){
    $cities = [
        ["name" => "Ahmedabad", "value" => "Ahmedabad"],
        ["name" => "Surat", "value" => "Surat"],
        ["name" => "Vadodara", "value" => "Vadodara"],
        ["name" => "Rajkot", "value" => "Rajkot"],
        ["name" => "Bhavnagar", "value" => "Bhavnagar"],
        ["name" => "Jamnagar", "value" => "Jamnagar"],
        ["name" => "Junagadh", "value" => "Junagadh"],
        ["name" => "Gandhinagar", "value" => "Gandhinagar"],
        ["name" => "Anand", "value" => "Anand"],
        ["name" => "Nadiad", "value" => "Nadiad"],
        ["name" => "Bharuch", "value" => "Bharuch"],
        ["name" => "Gandhidham", "value" => "Gandhidham"],
        ["name" => "Mehsana", "value" => "Mehsana"],
        ["name" => "Morbi", "value" => "Morbi"],
        ["name" => "Bhuj", "value" => "Bhuj"],
        ["name" => "Ankleshwar", "value" => "Ankleshwar"],
        ["name" => "Vapi", "value" => "Vapi"],
        ["name" => "Porbandar", "value" => "Porbandar"],
        ["name" => "Palanpur", "value" => "Palanpur"],
        ["name" => "Valsad", "value" => "Valsad"],
        // Add more cities as needed
    ];

      return $cities;
}

function getCustomCode(){
    $data = CustomCode::find(1);
    
    if ($data) {
        return $data;
    }
    return null;
}

function stringToArray($string){
    
    if ($string) {
        return explode(', ', $string);
    }
    return null;
}
