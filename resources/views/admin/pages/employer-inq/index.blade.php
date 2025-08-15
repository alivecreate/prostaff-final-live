@extends('admin.layout.main-layout')

@section('custom-script')
    <script src="{{ asset('backend/js/dropzone/dropzone.js') }}"></script>
    <script src="{{ asset('backend/js/dropzone/dropzone-script.js') }}"></script>
    
    <script>
        $(".inquiry").addClass("active");
        $(".inquiry .sidebar-submenu").addClass("menu-open");

        $(document).on('click', '.viewBtn', function () {
            $('#company_name').text($(this).data('company_name'));
            $('#job_requirement').text($(this).data('job_requirement'));
            $('#country').text($(this).data('country'));
            $('#phone').text($(this).data('phone'));
            $('#email').text($(this).data('email'));
            $('#note').text($(this).data('note'));
            $('#created_at').text($(this).data('created_at'));
        });
    </script>
@endsection

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>{{ isset($page['name']) ? $page['name'] : 'Employer Inquiry' }} List
                            <small>List of {{ isset($page['name']) ? $page['name'] : 'Employer Inquiry' }}</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.index') }}">
                                <i data-feather="home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item">{{ isset($page['name']) ? $page['name'] : 'Employer Inquiry' }}</li>
                        <li class="breadcrumb-item active">{{ isset($page['name']) ? $page['name'] : 'Employer Inquiry' }} List</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Employer Inquiry Detail Modal -->
    <div class="modal fade" id="EmployerInquiryModal" tabindex="-1" aria-labelledby="EmployerInquiryModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="EmployerInquiryModalLabel">Employer Inquiry Detail</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body row">
                    <div class="col-lg-12">
                        <table class="table">
                            <tr><th>Company Name</th><td id="company_name"></td></tr>
                            <tr><th>Job Requirement</th><td id="job_requirement"></td></tr>
                            <tr><th>Country</th><td id="country"></td></tr>
                            <tr><th>Phone</th><td id="phone"></td></tr>
                            <tr><th>Email</th><td id="email"></td></tr>
                            <tr><th>Note</th><td id="note"></td></tr>
                            <tr><th>Created Date</th><td id="created_at"></td></tr>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Table -->
    <div class="container-fluid">
        <div class="card">
            <div class="card-body vendor-table">
                <table class="display" id="basic-1">
                    <thead>
                        <tr>
                            <th>SR No</th>
                            <th>Company Name</th>
                            <th>Job Requirement</th>
                            <th>Country</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Note</th>
                            <th>Created Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($items as $key => $inquiry)
                            <tr>
                                <td>{{ $items->firstItem() + $key }}</td>
                                <td>{{ $inquiry->company_name }}</td>
                                <td>{{ $inquiry->job_requirement }}</td>
                                <td>{{ $inquiry->country }}</td>
                                <td>{{ $inquiry->phone }}</td>
                                <td>{{ $inquiry->email }}</td>
                                <td>{{ $inquiry->note }}</td>
                                <td>{{ $inquiry->created_at->format('Y-m-d H:i') }}</td>
                                <td>
                                    <!-- View Button -->
                                    <a href="javascript:void(0);"
                                       class="btn btn-warning btn-sm viewBtn"
                                       data-company_name="{{ $inquiry->company_name }}"
                                       data-job_requirement="{{ $inquiry->job_requirement }}"
                                       data-country="{{ $inquiry->country }}"
                                       data-phone="{{ $inquiry->phone }}"
                                       data-email="{{ $inquiry->email }}"
                                       data-note="{{ $inquiry->note }}"
                                       data-created_at="{{ $inquiry->created_at->format('Y-m-d H:i') }}"
                                       data-bs-toggle="modal"
                                       data-bs-target="#EmployerInquiryModal">
                                       <i class="fa fa-eye text-white"></i>
                                    </a>

                                    <!-- Delete Button -->
                                    <form action="{{ route('employer-inq.delete', $inquiry->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-solid btn-sm">
                                            <i class="fa fa-trash text-white"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                @include('admin.widget.pagination')

                @include('admin.widget.delete-modal', [
                    "message" => "Are You Sure You Want To Delete this " . (isset($page['name']) ? $page['name'] : 'Employer Inquiry') . " ?"
                ])
            </div>
        </div>
    </div>
</div>
@endsection
