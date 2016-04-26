<nav class="navigation--desktop" role="navigation">
  <ul class="menu cf">
    <li>
      <a <?php e($site->page('home')->isOpen(), ' class="active"') ?> href="<?php echo $site->url() ?>">Home</a>
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
  </nav>

<nav class="navigation--mobile custom-select" role="navigation">

  <form action="../">
    <select onchange="window.open(this.options[this.selectedIndex].value,'_top')">
        <option value="">Hauptmenü</option>
        <option value="<?php echo html($site->url()) ?>">Home</option>
        <?php foreach($pages->visible() as $p): ?>
          <option value="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></option>
        <?php endforeach ?>
        <!--<option value="<?php echo html($site->url()) ?>/#tickets">Tickets</option>
        <option value="http://www.betterplace.org/p21930">Tickets</option>-->
    </select>
  </form>
  
</nav>

