<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EmployerInquiry;
use Illuminate\Http\Request;

class EmployerInquiryController extends Controller
{
    public function index()
    {
        $page = [
            'name' => 'Employer Inquiry'
        ];

        // Get all employer inquiries with pagination
        $items = EmployerInquiry::orderBy('created_at', 'desc')->paginate(10);

        // Pagination variables for the shared pagination view
        $currentPage = $items->currentPage();
        $totalPages  = $items->lastPage();
        $routeName   = 'employer-inq.index'; // make sure route exists
        $perPage     = $items->perPage();
        $totalItems  = $items->total();

        return view('admin.pages.employer-inq.index', compact(
            'items',
            'page',
            'currentPage',
            'totalPages',
            'routeName',
            'perPage',
            'totalItems'
        ));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'company_name'    => ['required', 'string', 'max:255'],
            'job_requirement' => ['nullable', 'string', 'max:255'],
            'country'         => ['nullable', 'string', 'max:100'],
            'phone'           => ['required', 'string', 'max:30'],
            'email'           => ['required', 'email', 'max:255'],
            'note'            => ['nullable', 'string', 'max:1000'],
        ]);

        EmployerInquiry::create($validated);

        return back()->with('success', 'Thanks! We received your employer inquiry.');
    }

    public function destroy($id)
    {
        $inquiry = EmployerInquiry::findOrFail($id);
        $inquiry->delete();

        return redirect()->back()->with('success', 'Employer inquiry deleted successfully.');
    }
}
