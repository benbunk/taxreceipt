<?php

/**
 * Implementation of hook_content_default_fields().
 */
function taxreceipt_node_content_default_fields() {
  $fields = array();

  // Exported field: field_taxreceipt_line_item
  $fields['taxreceipt-field_taxreceipt_line_item'] = array(
    'field_name' => 'field_taxreceipt_line_item',
    'type_name' => 'taxreceipt',
    'display_settings' => array(
      'label' => array(
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      '4' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'text',
    'required' => '0',
    'multiple' => '1',
    'module' => 'text',
    'active' => '1',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'widget' => array(
      'rows' => 5,
      'size' => '60',
      'default_value' => array(
        '0' => array(
          'value' => '',
          '_error_element' => 'default_value_widget][field_taxreceipt_line_item][0][value',
        ),
      ),
      'default_value_php' => NULL,
      'label' => 'Line item',
      'weight' => '-4',
      'description' => 'Write each line item like this: <br/>
Line item name  -- (optional) description -- percentage<br/>
<br/>
For example:<br/>
National Defense -- 24.9%<br/>
<br/>
Or: <br/>
National Defense -- Spending on military personnel, operations, procurement and other activities critical to our national defense. (Corresponds to budget function 050) -- 24.9%<br/>
<br/>
Sub-categories of any particular line item can be included like this:<br/>
*Parent line item name  -- line item name -- (optional) description -- percentage<br/>
<br/>
For example:<br/>
*National Defense -- Military personnel salaries and benefits -- 5.8<br/>
*National Defense -- Ongoing operations, equipment, and supplies -- 10.3%<br/>
*National Defense -- Research, development, weapons, and construction -- 7.9%<br/>
*National Defense -- Atomic energy defense activities -- 0.7%<br/>
*National Defense -- Defense-related FBI activities and additional national defense -- 0.2%',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('Line item');

  return $fields;
}
