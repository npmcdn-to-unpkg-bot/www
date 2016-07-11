Prerequisites:
Weight module,
Knowledge of how to use a EntityFieldQuery. (https://api.drupal.org/api/drupal/includes!entity.inc/class/EntityFieldQuery/7)

USAGE:
1. Set up a node type to use weight for sorting.
2. GO to the wight view to that came with views drag and drop order of nodes.
3. In your code for the query, instead of calling a new EntityFieldQuery, call a new WeightEntityFieldQUery. (See below example of an entity field query.)
<?php
$query = new WeightEntityFieldQuery();
  $result = $query
    ->propertyCondition('status', 1)
    ->entityCondition('bundle', 'page_header')
    ->range(0,3)
    ->execute()
  ;
?>

4.The $results array returned will have the nids in the order defined in step 2
