<nav class="container flex" aria-label="Page navigation">
  <ul class="pagination center-block text-center">
    <li>
      <a href="<?php echo $_linkLast; ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="#"><?php echo "$total_items";?></a></li>
    <li>
      <a href="<?php echo $_linkNext; ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
