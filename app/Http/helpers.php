<?php

use App\Page;
use App\Block;

  function get_page_contents($page_uri = '')
  {
    $contents = [];
    $page = [];
    if (Page::where('url', '=', $page_uri)->first()) {
      $contents = Page::where('url', '=', $page_uri)->first()->blocks()->get();
      foreach ($contents as $content) {
        $page[$content['name']] = $content['content'];
      }
    }
    $blocks = Block::where('page_id','=',0)->get();
    foreach ($blocks as $block) {
      $page['global-'.$block['name']] = $block['content'];
    }
    return $page;
  }

  function get_global_blocks()
  {
    $blocks = Block::where('page_id','=',0)->get();
    foreach ($blocks as $block) {
      $page['global-'.$block['name']] = $block['content'];
    }
    return $page;

  }

  function humanize($str) {
   
    $str = trim(strtolower($str));
    $str = preg_replace('/[^a-z0-9\s+]/', ' ', $str);
    $str = preg_replace('/\s+/', ' ', $str);
    $str = explode(' ', $str);
   
    $str = array_map('ucwords', $str);
   
    return implode(' ', $str);
  }

?>