<?php
/**
 * @file taxreceipt-line-item.tpl.php
 *
 * Variables:
 *
 * - $zebra
 * - $line_item
 *     $line_item[$machine_name]['title']
 *     $line_item[$machine_name]['machine_name']
 *     $line_item[$machine_name]['percent']
 *     $line_item[$machine_name]['description']
 *     $line_item[$machine_name]['is_subcategory']
 *     $line_item[$machine_name]['parent']
 *     $line_item[$machine_name]['subcategories']
 * 
 */
?>
<?php if (!empty($line_item['subcategories'])) : ?>
  <div id="taxr-cat-head-<?php print $line_item['machine_name']; ?>" class="<?php print $zebra; ?>">
<?php else : ?>
  <div id="taxr-cat-tophead" class="<?php print $zebra; ?>">
<?php endif; ?>
    <div class="taxr-row">
      <div class="taxr-col1">
        <a href="javascript:;" id="taxr-info-cat-<?php print $line_item['machine_name'];?>" class="underline2" title="<?php print $line_item['description']; ?>">
          <?php print $line_item['title']; ?>
        </a>
      </div>
      <div class="taxr-col2"><?php print $line_item['percent'] . '%'; ?></div>
      <div class="taxr-col3">
        <div id="taxr-data-percent-<?php print $line_item['machine_name']; ?>" data-percent="<?php print $line_item['percent']; ?>">$0</div>
      </div>
    </div>
  </div>

<?php if (!empty($line_item['subcategories'])) { $i = 0; ?>

  <div id="taxr-cat-content-<?php $line_item['machine_name']; ?>" class="taxr-cat-sub">

    <?php foreach ($line_item['subcategories'] as $subcategory) { $i++; /* dsm($subcategory); */ ?>

      <div class="taxr-row">
        <div class="taxr-col1">
          <a href="javascript:;" id="taxr-info-cat-<?php print $subcategory['parent'] . $i; ?>" title="<?php print $subcategory['description']; ?>">
          <!-- <a href="javascript:;" id="taxr-info-cat-<?//php print $subcategory['parent'] . $i; ?>" title="" bt-xtitle="<?php //print $subcategory['description']; ?>" class=""> -->
            <?php print $subcategory['title']; ?>
          </a>
        </div>
      <div class="taxr-col2"><?php print $subcategory['percent']; ?></div>
      <div class="taxr-col3">
        <div id="taxr-data-percent-<?php print $subcategory['parent'] . $i; ?>" data-percent="<?php print $subcategory['percent']; ?>">$0</div>
      </div>
    </div>

  <?php } // end foreach $subcategory ?>
  </div>
<?php } // end if ?>


