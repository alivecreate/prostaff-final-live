<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Inquiry;
use App\Models\admin\ProductInquiry;

use Illuminate\Support\Facades\Validator;
use App\Mail\ContactInquiryMail;
use App\Mail\UserContactInquiryMail;
use Str;

class InquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        
        $perPage = 20; // Number of items per page
        $currentPage = $request->query('page', 1); // Get current page from query string
        $totalItems = ProductInquiry::count(); // Total number of items
        $totalPages = ceil($totalItems / $perPage); // Calculate total number of pages

        // Fetch items for the current page
        $items = ProductInquiry::skip(($currentPage - 1) * $perPage)->take($perPage)->orderBy('id', 'desc')->get();

        $route = request()->route();
        $routeName = $route->getName();

        $page = [
            'name' => 'Product Inquiry'
        ];

        
        return view('admin.pages.inquiry.index', [
            'items' => $items,
            'page' => $page,
            'perPage' => $perPage,
            'routeName' => $routeName,
            'currentPage' => $currentPage,
            'totalPages' => $totalPages,
            'totalItems' => $totalItems,
        ]);

    }

    public function contactInquiry(Request $request)
    {
        
        $perPage = 20; // Number of items per page
        $currentPage = $request->query('page', 1); // Get current page from query string
        $totalItems = Inquiry::count(); // Total number of items
        $totalPages = ceil($totalItems / $perPage); // Calculate total number of pages

        // Fetch items for the current page
        $items = Inquiry::skip(($currentPage - 1) * $perPage)->take($perPage)->orderBy('id', 'desc')->get();

        $route = request()->route();
        $routeName = $route->getName();

        $page = [
            'name' => 'Contact Inquiry'
        ];
        
        return view('admin.pages.inquiry.contact-inquiry', [
            'items' => $items,
            'page' => $page,
            'perPage' => $perPage,
            'routeName' => $routeName,
            'currentPage' => $currentPage,
            'totalPages' => $totalPages,
            'totalItems' => $totalItems,
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string',
        ]
    );
        
        $product = Inquiry::create([
            'name' => $request->name, 
            'phone' => $request->phone, 
            'email' => $request->email, 
            'city' => $request->city, 
            'message' => $request->message, 
            'status' => 'pending', 
            'type' => $request->type, 
            'product_ids' => $request->product_ids, 
        ]);
        

        
        return redirect()->route('thankYou')->with('success', 'Thank you..');
        

    }

    public function storeContactForm(Request $request)
    { 
        // dd($request->file('document'));

        // dd($request->all());

        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'document' => 'file|mimes:doc,docx,pdf,xls,xlsx,csv,txt,jpeg,jpg,png,gif,webp|max:20480', // Max size 20MB
        ]);
    
        $filename = Str::slug($request->name);
        if ($request->hasFile('document') && $request->file('document')->isValid()) {

            $file = $request->file('document');

            
            $extension = $request->file('document')->getClientOriginalExtension();
            $newFileName = $filename.'-'. time() . '.' . $extension;

            $file->move(public_path('uploads/contact/'), $newFileName);

            $filePath = 'uploads/contact/' . $newFileName;

        }else{
            $newFileName = null;
        }
        
        
        
        
        if($request->individualService){
            $individualService = implode(", ", $request->individualService);
        }
        else{
            $individualService = null;
        }
        
        $customer = Inquiry::create([
            'name' => $request->name, 
            'phone' => $request->phone, 
            'email' => $request->email, 
            'address' => $request->address,
            'service' => $request->service, 
            'document' => $newFileName, 
            'individualService' => $individualService, 
            'page_url' => $request->page_url, 
            'message' => $request->message,
        ]);
            // dd($customer);

        
        
// Send emails using the $customer variable
try {
    Mail::to(env('MAIL_To'))->send(new ContactInquiryMail($customer));
    Mail::to($request->email)->send(new UserContactInquiryMail($customer));
    $isMailSent = true;
    
    return redirect()->route('thankYou')->with('success', 'Thank you..');
} catch (\Exception $e) {
    // Handle mail errors
    $isMailSent = false;
    // Log or handle the exception as needed
    Log::error('Mail sending failed: ' . $e->getMessage());
    
    return redirect()->back()->with('error', 'Something went wrong.');
    // return response()->json(['success' => $e->getMessage()]);
}

// Optionally return a response
return response()->json(['success' => $isMailSent]);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
                
        $page = [
            'name' => 'Product Inquiry'
        ];
        $inquiry = Inquiry::find($id);
        // Check if the page is found
        if ($inquiry) {
            return view('admin.pages.inquiry.show', compact('page', 'inquiry'));
        } else {
            // Handle the case where the page with the given ID is not found
            return redirect()->route('inquiry.index')->with('error', 'Page not found');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd($id);
        $inquiry = Inquiry::find($id);

        // dd($inquiry);
        
        if (!$inquiry) {
            return redirect()->route('contactInquiry')->with('error', 'Inquiry not found.');
        }
        
        $delete = $inquiry->delete();
        if($delete){
            return redirect()->route('contactInquiry')->with('success', 'Inquiry deleted successfully.');
        }
        return redirect()->route('contactInquiry')->with('fail', 'Something went wrong. Please try again.');
    }
    
    public function destroyProductInquiry(string $id)
    {

        $inquiry = Inquiry::find($id);
        // dd($inquiry);
        
        if (!$inquiry) {
            return redirect()->route('inquiry.index')->with('error', 'Inquiry not found.');
        }
        
        $delete = $inquiry->delete();
        if($delete){
            return redirect()->route('inquiry.index')->with('success', 'Inquiry deleted successfully.');
        }
        return redirect()->route('inquiry.index')->with('fail', 'Something went wrong. Please try again.');
    }
}
