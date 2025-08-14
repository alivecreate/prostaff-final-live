@extends('admin.layout.main-layout')

@section('custom-script')
<script>
    $(".youtube-link").addClass("active");
    $(".youtube-link .sidebar-submenu").addClass("menu-open");
</script>
@endsection

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <h3>YouTube Link List</h3>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <a href="{{ route('admin.youtube.create') }}" class="btn btn-primary">Add New YouTube Link</a>
            </div>
            <div class="card-body">
                <table class="display" id="basic-1">
                    <thead>
                        <tr>
                            <th>Video</th>
                            <th>Title</th>
                            <th>Link</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($youtubeLinks as $youtube)
                        <tr>
                            <td>
                                @php
                                    preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $youtube->link, $matches);
                                    $videoId = $matches[1] ?? '';
                                @endphp
                                @if($videoId)
                                    <iframe width="150" height="80" src="https://www.youtube.com/embed/{{ $videoId }}" frameborder="0" allowfullscreen></iframe>
                                @else
                                    <span class="text-danger">Invalid Link</span>
                                @endif
                            </td>
                            <td>{{ $youtube->title ?? '-' }}</td>
                            <td><a href="{{ $youtube->link }}" target="_blank">{{ $youtube->link }}</a></td>
                            <td>{{ $youtube->created_at->format('d M Y') }}</td>
                            <td>
                                {{-- No edit mode, just re-enter --}}
                                    <a href="{{ route('admin.youtube.edit', $youtube->id) }}" class="btn btn-secondary btn-sm">
                                        <i class="fa fa-edit text-white"></i>
                                    </a>
                                <form action="{{ route('admin.youtube.destroy', $youtube->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash text-white"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr><td colspan="5">No YouTube links found.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
