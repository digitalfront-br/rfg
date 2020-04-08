@if ($item->lastPage() > 1)
    <ul class="uk-pagination uk-flex-center" uk-margin>
        <li class="{{ ($item->currentPage() == 1) ? ' uk-disabled' : '' }}">
            <a href="{{ $item->url(1) }}"><span uk-pagination-previous></span> anterior</a>
        </li>
        @for ($i = 1; $i <= $item->lastPage(); $i++)
            <li class="{{ ($item->currentPage() == $i) ? ' uk-active' : '' }}">
                <a class="{{ ($item->currentPage() == $i) ? ' uk-text-primary' : '' }}" href="{{ $item->url($i) }}">{{ $i }}</a>
            </li>
        @endfor
        <li class="{{ ($item->currentPage() == $item->lastPage()) ? ' disabled' : '' }}">
            <a href="{{ $item->url($item->currentPage()+1) }}" >próximo <span uk-pagination-next></span></a>
        </li>
    </ul>
@endif

