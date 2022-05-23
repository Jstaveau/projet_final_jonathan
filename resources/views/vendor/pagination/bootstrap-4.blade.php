@if ($paginator->hasPages())
{{-- <div class="shop-pagination  text-center">
    <div class="pagination">
        <ul>
            <li><a href="#"><i class="zmdi zmdi-long-arrow-left"></i></a></li>
            <li><a href="#">01</a></li>
            <li><a class="active" href="#">02</a></li>
            <li><a href="#">03</a></li>
            <li><a href="#">04</a></li>
            <li><a href="#">05</a></li>
            <li><a href="#"><i class="zmdi zmdi-long-arrow-right"></i></a></li>
        </ul>
    </div>
</div> --}}
<div class="shop-pagination text-center">
    <div class="pagination">
        <ul>
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <a aria-hidden="true"><i class="zmdi zmdi-long-arrow-left"></i></a>
                </li>
            @else
                <li >
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"><i class="zmdi zmdi-long-arrow-left"></i></a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li aria-disabled="true"><a>{{ $element }}</a></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li aria-current="page"><a>{{ $page }}</a></li>
                        @else
                            <li ><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li >
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"><i class="zmdi zmdi-long-arrow-right"></i></a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <a aria-hidden="true"><i class="zmdi zmdi-long-arrow-right"></i></a>
                </li>
            @endif
        </ul>
    </div>
</div>
@endif
