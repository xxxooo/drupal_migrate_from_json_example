<?php
/**
 * Created by PhpStorm.
 * User: steven.worley
 * Date: 26/05/2016
 * Time: 9:56 AM
 */

namespace Drupal\udn_migrate\Migrate\source;

use Drupal\migrate\Plugin\migrate\source\SqlBase;

/**
 * @MigrationSource {
 *  id = grab
 * }
 */
class Workshop extends SqlBase {

  /**
   * Returns available fields on the source.
   *
   * @return array
   *   Available fields in the source, keys are the field machine names as used
   *   in field mappings, values are descriptions.
   */
  public function fields() {
    // TODO: Implement fields() method.
  }

  /**
   * Defines the source fields uniquely identifying a source row.
   *
   * None of these fields should contain a NULL value. If necessary, use
   * prepareRow() or hook_migrate_prepare_row() to rewrite NULL values to
   * appropriate empty values (such as '' or 0).
   *
   * @return array
   *   Array keyed by source field name, with values being a schema array
   *   describing the field (such as ['type' => 'string]).
   */
  public function getIds() {
    // TODO: Implement getIds() method.
  }

  /**
   * @return \Drupal\Core\Database\Query\SelectInterface
   */
  public function query() {
    // TODO: Implement query() method.
  }
}