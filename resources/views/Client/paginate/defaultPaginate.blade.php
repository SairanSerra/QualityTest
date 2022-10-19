@if ($paginator->hasPages())
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center mb-0">

            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <a class="page-link prev">
                        <i class="simple-icon-arrow-left"></i>
                    </a>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link prev" href="{{ $paginator->previousPageUrl() }}">
                        <i class="simple-icon-arrow-left"></i>
                    </a>

                </li>
            @endif


            @foreach ($elements as $element)

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link next" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
                        <i class="simple-icon-arrow-right"></i>
                    </a>


                </li>
            @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" aria-hidden="true"><i class="simple-icon-control-end"></i></span>
                </li>
            @endif
        </ul>
    </nav>
@endif
