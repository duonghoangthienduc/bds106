@if ($paginator->hasPages())
    <nav>
        {{-- <ul class="pagination">
            @if ($paginator->onFirstPage())
                <li class="disabled" aria-disabled="true"><span>@lang('pagination.previous')</span></li>
            @else
                <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a></li>
            @endif

            @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a></li>
            @else
                <li class="disabled" aria-disabled="true"><span>@lang('pagination.next')</span></li>
            @endif
        </ul> --}}
        <ul class="page-numbers nav-pagination links text-center">
            @if ($paginator->onFirstPage())
                <li class="disabled page-number" aria-disabled="true" disabled><span>@lang('pagination.previous')</span></li>
            @else
                <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a></li>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a></li>
            @else
                <li class="disabled page-number" aria-disabled="true" disabled><span>@lang('pagination.next')</span></li>
            @endif
        </ul>
    </nav>
    <style>
        .disabled.page-number{
            display: none;
        }
    </style>
@endif
