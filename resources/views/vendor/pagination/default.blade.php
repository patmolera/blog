@if ($paginator->hasPages())
  <nav aria-label="Page navigation example">
    <ul class="pagination">
      {{-- Previous Page Link --}}
      @if ($paginator->onFirstPage())
        <li class="page-link disabled"><span>&laquo;</span></li>
      @else
        <li><a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></li>
      @endif

      {{-- Pagination Elements --}}
      @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
          <li class="page-item disabled"><span>{{ $element }}</span></li>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
          @foreach ($element as $page => $url)
            @if ($page == $paginator->currentPage())
              <li class="page-link active"><span>{{ $page }}</span></li>
            @else
              <li><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
            @endif
          @endforeach
        @endif
      @endforeach

      {{-- Next Page Link --}}
      @if ($paginator->hasMorePages())
        <li><a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>
      @else
        <li class="page-link disabled"><span>&raquo;</span></li>
      @endif
    </ul>
  </nav>
@endif