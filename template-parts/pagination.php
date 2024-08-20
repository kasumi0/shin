<?php if (paginate_links()) : ?>
  <div class="pagination">
    <nav class="inner">
      <?=
      paginate_links(
        array(
          'end_size' => 0,
          'mid_size' => 0,
          'prev_next' => true,
          'prev_text' => '<span class="material-symbols-outlined">chevron_left</span>',
          'next_text' => '<span class="material-symbols-outlined">chevron_right</span>',
        )
      );
      ?>
    </nav>
  </div>
<?php endif; ?>