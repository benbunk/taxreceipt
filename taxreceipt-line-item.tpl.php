<?php
/**
 * @file taxreceipt-line-item.tpl.php
 *
 * Variables:
 *
 * - $line_item
 *     $line_item[$machine_name]['title']
 *     $line_item[$machine_name]['machine name']
 *     $line_item[$machine_name]['percent']
 *     $line_item[$machine_name]['description']
 *     $line_item[$machine_name]['is_subcategory']
 *     $line_item[$machine_name]['parent']
 *     $line_item[$machine_name]['subcategories']
 * 
 */
?>
<div id="cat-head-<?php print $line_item['machine_name']; ?>" class="odd"><div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-<?php print $line_item['machine_name'];?>" class="underline2" title="<?php print $line_item['description']; ?>"><?php print $line_item['title']; ?></a></div><div class="taxr-col2"><?php print $line_item['percent'] . '%'; ?></div><div class="taxr-col3"><div id="taxr-data-percent-<?php print $line_item['machine_name']; ?>" data-percent="<?php print $line_item['percent']; ?>">$0</div></div></div></div>
<?php if (!empty($line_item['subcategories'])) {
        $i = 0;
        foreach ($line_item['subcategories'] as $subcategory) {
          $i++; ?>

  <div id="taxr-cat-content-<?php $subcategory['parent']; ?>" class="taxr-cat-sub">
    <div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-<?php print $subcategory['parent'] . $i; ?>" title="<?php print $subcategory['description']; ?>"><?php print $subcategory['title']; ?></a></div><div class="taxr-col2"><?php print $subcategory['percent']; ?></div><div class="taxr-col3"><div id="taxr-data-percent-<?php print $subcategory['parent'] . $i; ?>" data-percent="<?php print $subcategory['percent']; ?>">$0</div></div></div>
  </div>

<?php } // end foreach $subcategory ?>
<?php } // end if ?>


