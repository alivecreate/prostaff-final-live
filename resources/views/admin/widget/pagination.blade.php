
<div class="custom-pagination">
    <nav aria-label="Page navigation example">
      <ul class="pagination">
        <!-- Previous Page Link -->
        <li class="page-item {{ ($currentPage == 1) ? 'disabled' : '' }}">
          <a class="page-link" href="{{ ($currentPage == 1) ? '#' : route($routeName, ['page' => $currentPage - 1]) }}">Previous</a>
        </li>
  
        <!-- Pagination Links -->
        @for ($i = 1; $i <= $totalPages; $i++)
          <li class="page-item {{ ($currentPage == $i) ? 'active' : '' }}">
            <a class="page-link" href="{{ route($routeName, ['page' => $i]) }}">{{ $i }}</a>
          </li>
        @endfor
        <!-- Next Page Link -->
        <li class="page-item {{ ($currentPage == $totalPages) ? 'disabled' : '' }}">
          <a class="page-link" href="{{ ($currentPage == $totalPages) ? '#' : route($routeName, ['page' => $currentPage + 1]) }}">Next</a>
        </li>
      </ul>
    </nav>
    <p>Showing {{ $items->count() > 0 ? (($currentPage - 1) * $perPage) + 1 : 0 }} to {{ min($currentPage * $perPage, $totalItems) }} of {{ $totalItems }} entries</p>
</div>