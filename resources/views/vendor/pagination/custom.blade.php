@if ($paginator->hasPages())
    <ul class="pagination">

        @if ($paginator->onFirstPage())
            <li class="pagination__item disabled"><span>← </span></li>
        @else
            <li><a class="pagination__item disabled" href="{{ $paginator->previousPageUrl() }}" rel="prev">← </a></li>
        @endif



        @foreach ($elements as $element)

            @if (is_string($element))
                <li class="pagination__item disabled"><span>{{ $element }}</span></li>
            @endif



            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="pagination__item active" style="background-color:rgb(250, 104, 51);"><span>{{ $page }}</span></li>
                    @else
                        <li><a class="pagination__item" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach



        @if ($paginator->hasMorePages())
            <li><a class="pagination__item disabled" href="{{ $paginator->nextPageUrl() }}" rel="next"> →</a></li>
        @else
            <li class="pagination__item disabled"><span> →</span></li>
        @endif
    </ul>
@endif
