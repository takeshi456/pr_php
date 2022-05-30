<?php
require_once "vendor/autoload.php";

use prphp\lesson3\Recipe;
use prphp\lesson3\Menu;
use prphp\lesson3\MenuSet;

//問題1
//$recipe1 = new Recipe("ハンバーグ", 200.5);
//$recipe2 = new Recipe("サーモン", 120);
//
//echo $recipe1->getName(), PHP_EOL; // ハンバーグ
//echo $recipe1->getCal(), PHP_EOL; // 200.5
//
//echo $recipe2->getName(), PHP_EOL; // サーモン
//echo $recipe2->getCal(), PHP_EOL; // 120


//問題2
//$recipe1 = new Recipe("ハンバーグ", 200.5);
//$recipe2 = new Recipe("目玉焼き", 120);
//
//$menu = new Menu("ハンバーグ弁当", "洋食", [$recipe1, $recipe2]);
//
//echo $menu->getName(), PHP_EOL; // ハンバーグ弁当
//echo $menu->getType(), PHP_EOL; // 洋食
//echo $menu->getCal(), PHP_EOL; // 320.5
//echo $menu->getRecipes()[1]->getName(), PHP_EOL; // ハンバーグ

//問題3
//$recipe1 = new Recipe("ハンバーグ", 200.5);
//$recipe2 = new Recipe("目玉焼き", 120);
//$recipe3 = new Recipe("大葉", 200.5);
//$recipe4 = new Recipe("シャケ", 120);
//$menu1 = new Menu("ハンバーグ弁当", "洋食", [$recipe1, $recipe2]);  // $r1と$r2はレシピオブジェクトとする。
//$menu2 = new Menu("鮭弁当", "和食", [$recipe3, $recipe4]); // $r3と$r4はレシピオブジェクトとする。
//
//$menuSet = new MenuSet([$menu1, $menu2]);
//var_dump($menuSet->getMenus()); // メニューの一覧を取得

//問題4