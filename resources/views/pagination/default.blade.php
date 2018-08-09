<?php
// config
$link_limit = 5; // maximum number of links (a little bit inaccurate, but will be ok for now)
?>

<nav>
  @if ($paginator->lastPage() > 1)
      <ul class="pagination justify-content-center">
          <li class="{{ ($paginator->currentPage() == 1) ? 'page-item disabled' : 'page-item' }}">
            <a class="page-link" href="{{ $paginator->url(1) }}">First</a>
           </li>
          @for ($i = 1; $i <= $paginator->lastPage(); $i++)
              <?php
              $half_total_links = floor($link_limit / 2);
              $from = $paginator->currentPage() - $half_total_links;
              $to = $paginator->currentPage() + $half_total_links;
              if ($paginator->currentPage() < $half_total_links) {
                 $to += $half_total_links - $paginator->currentPage();
              }
              if ($paginator->lastPage() - $paginator->currentPage() < $half_total_links) {
                  $from -= $half_total_links - ($paginator->lastPage() - $paginator->currentPage()) - 1;
              }
              ?>
              @if ($from < $i && $i < $to)
                  <li class="{{ ($paginator->currentPage() == $i) ? 'page-item active' : 'page-item' }}">
                    <span class="page-link">
                      <a href="{{ $paginator->url($i) }}">{{ $i }}</a>
                      <span class="sr-only">(current)</span>
                    </span>
                      
                  </li>
              @endif
          @endfor
          <li class="{{ ($paginator->currentPage() == $paginator->lastPage()) ? 'page-item disabled' : 'page-item' }}">
                <a class="page-link" href="{{ $paginator->url($paginator->lastPage()) }}">Last</a>
          </li>
      </ul>
  @endif
</nav>