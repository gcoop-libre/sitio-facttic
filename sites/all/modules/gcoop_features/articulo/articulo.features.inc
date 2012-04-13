<?php
/**
 * @file
 * articulo.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function articulo_ctools_plugin_api() {
  return array("version" => "1");
}

/**
 * Implements hook_views_api().
 */
function articulo_views_api() {
  return array("version" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function articulo_node_info() {
  $items = array(
    'article' => array(
      'name' => t('Artículo'),
      'base' => 'node_content',
      'description' => t('Utilice <em>artículos</em> para tipos de contenido que dependan de fecha y hora como noticias, artículos de prensa o entradas de blogs.'),
      'has_title' => '1',
      'title_label' => t('Título'),
      'help' => '',
    ),
  );
  return $items;
}