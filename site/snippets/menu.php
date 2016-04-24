
  <ul class="navbar">
    <li class="first">
      <a <?php e($site->page('home')->isOpen(), ' class="active"') ?> href="<?php echo $site->url() ?>">Home</a>
    </li>
    <li class="icon">
      <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
    </li>
    <?php foreach($pages->visible() as $p): ?>
      <li class="first">
        <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
        <!--      <?php if($p->hasVisibleChildren()): ?>
        <ul class="submenu">
          <?php foreach($p->children()->visible() as $p): ?>
          <li>
            <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
          </li>
          <?php endforeach ?>
        </ul>
        <?php endif ?> -->
      </li>
      <?php endforeach ?>
  </ul>

