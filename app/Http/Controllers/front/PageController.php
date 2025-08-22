<?php

namespace App\Http\Controllers\front;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Slider;
use App\Models\admin\Product;
use App\Models\admin\Service;
use App\Models\admin\Project;

use App\Models\admin\Category;
use App\Models\admin\Client;
use App\Models\admin\Certificate;

use App\Models\admin\Gallery;


use App\Models\admin\Blog;
use App\Models\admin\ProductInquiry;
use App\Models\admin\ProductQuantity;
use App\Mail\ProductInquiryMail;
use App\Mail\UserInquiryMail;

use Illuminate\Support\Facades\Http;
use SimpleXMLElement;

use App\Models\admin\YoutubeLink; 


class PageController extends Controller
{
public function index() {
    $slider = Slider::where('status', 1)->orderBy('id', 'asc')->get(); 
    $clients = Client::where('status', 1)->orderBy('id', 'asc')->get(); 
    $services = Service::orderBy('id', 'asc')->get(); 

    // Fetch latest 3 categories
    $categories = Category::orderBy('id', 'asc')->get(); 

    return view('front.pages.index', compact('slider', 'clients', 'services', 'categories'));
}

    public function about(){
        $pagetitle = 'About Us';
        $name = 'About Us';
        $clients = Client::where('status', 1)->orderBy('id', 'asc')->get(); 
        $certificates = Certificate::where('status', 1)->orderBy('id', 'asc')->get(); 
        return view('front.pages.about', compact('clients', 'certificates', 'pagetitle','name'));
    }

    
    
    public function gallery(){
        $pagetitle = 'gallery';
        $name = 'gallery';

        $gallery = Gallery::where('status', 1)->orderBy('id', 'desc')->paginate(12);

        return view('front.pages.gallery', compact('gallery','pagetitle','name'));
    }

    public function video(){
        $pagetitle = 'video';
        $name = 'video';

        $youtubeLinks = YoutubeLink::where('id', 1)->orderBy('id', 'desc')->paginate(12);

        return view('front.pages.video', compact('youtubeLinks','pagetitle','name'));
    }

    
    public function projects(){
        $projects = Project::orderBy('id', 'desc')->get();

        return view('front.pages.projects', compact('projects'));
    }

    public function blog(){

        $slider = Slider::all(); 
        $pagetitle = 'Blog';
        $name = 'Blog';
        $blogs = Blog::where('status', 1)->orderBy('id', 'desc')->paginate(12);

        
        return view('front.pages.blog', compact('blogs','slider', 'pagetitle','name'));

        
        // return view('front.pages.blog', compact('blogs'));
    }

    
    public function blogDetail($slug){
        
        
        $blog = Blog::where(['slug' => $slug, 'status' => 1])->first();
        $blogs = Blog::where('status', 1)->orderBy('id', 'desc')->paginate(12);
               
        $name = 'Blog';
        if(!isset($blog)){
            return redirect(route('blog'));
        }
        
        $name = 'Blog';
        $pagetitle = $blog->title;
        return view('front.pages.blog-details', compact('blog', 'blogs', 'pagetitle', 'name'));
    }


    public function contact(){
        $slider = Slider::all(); 
        $pagetitle = 'Cotact Us';
        $name = 'Cotact Us';
        return view('front.pages.contact', compact('slider', 'pagetitle','name'));        
    }
    
    public function category($slug){
    
        // return $slug;
        $pagetitle = 'Our Products';
        $name = 'Our Products';
    
        $category = Category::where('slug', $slug)->first(); 
        $categories = Category::get(); 
        
        $products = $category->products;
        // return $products;
        return view('front.pages.product', compact('products', 'categories', 'category', 'pagetitle','name'));
    }


    public function products(){
        $pagetitle = 'Our Products';
        $name = 'Our Products';
        Session::forget('cartData');
        
        $category = Category::where('slug', 'pumps')->first();

        $categories = Category::where('status', 1)                
                    ->whereNotIn('slug', [])
                    ->get(); 

        $products = $category->products;    
        
        return view('front.pages.product', compact('products', 'categories', 'category', 'pagetitle','name'));
    }





//     public function productDetails(){
//         $pagetitle = 'Product Details';
//         $name = 'Product Details';

//         return view('front.pages.product-details',compact('pagetitle', 'name'));
//     }


// public function productDetails(){
//     $pagetitle = 'Product Details';
//     $name = 'Product Details';

//     return view('front.pages.product-details', compact('pagetitle', 'name'));
// }


public function productDetails($slug){
    $pagetitle = 'Product Details';
    $name = 'Product Details';
    
    $product = Product::where(['slug' => $slug])->first();

    return view('front.pages.product-details',compact('pagetitle','name', 'product'));
 }




public function services() {
    $pagetitle = 'Services';
    $name = 'Services';
    $services = Service::orderBy('id', 'desc')->paginate(12);
    $categories = Category::where('status', 1)->get();
    

    return view('front.pages.services', compact('services', 'pagetitle', 'name', 'categories'));
}


    
    public function serviceDetail($slug){
          
        $pagetitle = 'Services ';
        $name = 'Services';
        $service = Service::where(['slug' => $slug])->first();
        $services = Service::orderBy('id', 'desc')->get();
        // dd($services);
        if(!isset($service)){
            return redirect(route('service'));
        }
        return view('front.pages.services-details', compact('service', 'services', 'pagetitle','name'));
            // return view('front.service-detail', compact('service', 'services', 'pagetitle','name'));

    }
    
    public function farmingService(){
        return view('front.pages.services.farming-service');
    }
    
    public function wasteManagement(){
        return view('front.pages.services.waste-management');
    }
    public function dripIrrigation(){
        return view('front.pages.services.drip-irrigation');
    }
    
    public function solarSystem(){
        return view('front.pages.services.solar-system');
    }
    

    public function privacyPolicy(){
        return view('front.pages.privacy-policy');
    }
    
    public function termAndCondition(){
        return view('front.pages.term-and-condition');
    }
    
    public function qrCode(){
        return view('front.pages.qr-code');
    }

    public function storeProductInquiry(Request $request){
        
        // dd($request->all());
        $cartData = @request()->session()->get('cartData');

        $customer = $request->all();

        //  $isMailSent = Mail::to('mail.welcome', compact('customer', 'cartData'));


            // $productInquiry = productInquiry::create([
            //         // Add fields from the request as needed
            // ]);
            
           
            $request->validate([
                'name' => 'required',
                'phone' => 'required',
            ]
        );
    

            
        $product = productInquiry::create([
            'name' => $request->name, 
            'phone' => $request->phone, 
            'email' => $request->email, 
            'address' => $request->address,
            'service' => $request->service, 
            'status' => 'Order Placed', 
            'page_url' => $request->page_url, 
            'message' => $request->message,
        ]);

        if($product){
            // return ($product);
            
            foreach ($cartData as $product_id => $quantity) {
                productQuantity::create([            
                    'product_inquiry_id' => $product->id, 
                    'product_id' => $product_id,
                    'quantity' => $quantity,
                ]);
            }
            
            // dd($customer);
        $isMailSent = Mail::to(env('MAIL_To'))->send(new ProductInquiryMail($customer, $cartData));
        $isMailSent = Mail::to($request->email)->send(new UserInquiryMail($customer, $cartData));
            
        return redirect()->route('thankYou')->with('success', 'Thank you..');
        }
        return redirect()->back()->with('fail', 'Something went wrong, please try again later.');

    }
    

    public function storeCartData(Request $request){
        // dd($request->all());
        
    //     $request->validate([
    //         'selected_product' => 'required',
    //     ],
    //     [
    //         'selected_product.required' => 'Please Select the Product.',
    //     ]
    // );

    // dd($request->quantity[49]);
    $cartData = [];

    foreach ($request->quantity as $productId => $quantity) {
        // dd('productId',$productId);

        // Check if the product has been checked
            if($quantity != 0){
                $cartData[$productId] = $quantity;
          }
    }
    // dd($cartData);

  
        
        if(!isset($request->selected_product)){
            request()->session()->put('cartData', null);
        }
        request()->session()->put('cartData', $cartData);
        $value = request()->session()->get('cartData');
        // dd($value);
        return redirect()->route('productInquiry')->with('success', 'Thank you for inquiry.');
    }

    public function productInquiry(){
        
        if(request()->session()->get('cartData')){
            $cartData = @request()->session()->get('cartData');
        
            $values = array_values($cartData);
            $productIds = implode(', ', $values);
            
            return view('front.pages.product-cart-data', compact('cartData', 'productIds'));
        }
        else{        
            return redirect()->route('products');
        }
    }

    public function thankYou(){

 
        return view('front.pages.thank-you');
        
    }

    public function testMail(){
        
        return view('mail.welcome');
    }
    
    
    public function testRss(){
        
        $rssFeedUrl = 'https://gujarati.gnsnews.co.in/?call_custom_simple_rss=1&csrp_cat=27';
        $rssFeedContent = Http::get($rssFeedUrl)->body();

        // Parse the RSS feed
        $rssData = [];
        $xml = new SimpleXMLElement($rssFeedContent);

        // Loop through each item
        foreach ($xml->channel->item as $item) {
            $rssData[] = [
                'title' => (string) $item->title,
                'link' => (string) $item->link,
                'pubDate' => (string) $item->pubDate,
                'description' => (string) $item->description,
                'contentEncoded' => (string) $item->{'content:encoded'},
                'image' => isset($item->enclosure) 
                            ? (string) $item->enclosure['url'] 
                            : (isset($item->{'media:content'}) ? (string) $item->{'media:content'}['url'] : null),
            ];
        }


        return view('front.pages.test-rss', compact('rssData'));
    }

public function categoryServices($slug)
{
    // Get category by slug with related services where status is 'active'
    $category = Category::where('slug', $slug)
        ->with(['services' => function ($query) {
            $query->where('status', 'active');  // ✅ Filter services by 'active' string status
        }])
        ->firstOrFail();

    // Get all categories for sidebar or other display
    $categories = Category::where('status', 1)->get();

    // Pass services and category data to the view
    return view('front.pages.services', [
        'services' => $category->services,
        'category' => $category,
        'categories' => $categories,
        'pagetitle' => $category->name,
    ]);
}



public function allServicesCategory()
{
    // dd('tesdt');
    // $categories = Category::with('services')->where('status', 1)->get();
    
    $categories = Category::orderBy('id', 'asc')->get();

    return view('front.pages.services-category', compact('categories'));
}



}
