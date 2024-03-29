@if ($paginator->hasPages())
    <!-- Pagination -->
    <div class="pull-right pagination">
        <ul class="pagination pagination-primary" style="display: flex; align-items: center;">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled">
                    <a href="{{ $paginator->previousPageUrl() }}">
                       prev
                    </a>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}">
                       prev
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active">
                                <span>{{ $page }}</span>
                            </li>
                        @elseif (($page == $paginator->currentPage() + 1
                                || $page == $paginator->currentPage() + 2)
                                || $page == $paginator->lastPage())
                            <li>
                                <a href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @elseif ($page == $paginator->lastPage() - 1)
                            <li class="disabled">
                                <span><i class="fa fa-ellipsis-h"></i></span>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}">
                        next
                    </a>
                </li>
            @else
                <li class="disabled">
                    <a href="{{ $paginator->previousPageUrl() }}">
                       next
                    </a>
                </li>
            @endif
        </ul>
    </div>
    <!-- Pagination -->
@endif
