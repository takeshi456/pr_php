<?php
require_once "vendor/autoload.php";

use prphp\lesson3\Recipe;
use prphp\lesson3\Menu;
use prphp\lesson3\MenuSet;
use prphp\lesson3\CalorieOverSpec;
use prphp\lesson3\MenuTypeSpec;
use prphp\lesson3\AndSpec;
use prphp\lesson3\OrSpec;
use prphp\lesson3\NotSpec;

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
//$recipe1 = new Recipe("ハンバーグ", 200.5);
//$recipe2 = new Recipe("目玉焼き", 120);
//$recipe3 = new Recipe("大葉", 200.5);
//$recipe4 = new Recipe("シャケ", 120);
//$recipe5 = new Recipe("のり", 120);
//$menu1 = new Menu("ハンバーグ弁当", "洋食", [$recipe1, $recipe2]);  // $r1と$r2はレシピインスタンスとする
//$menu2 = new Menu("鮭弁当", "食", [$recipe3, $recipe4]); // $r3とr$4はレシピインスタンスとする
//$menu3 = new Menu("のり弁当", "食", [$recipe4, $recipe5]); // $r4と$r5はレシピインスタンスとする
//
//$menuSet = new MenuSet([$menu1, $menu2, $menu3]);
//$menus = $menuSet->getMenusByType("和食"); // $menusは、和食であるmenu2とmenu2のみのリスト
////var_dump($menus);
///

//問題5
//$recipe1 = new Recipe("ハンバーグ", 200.5);
//$recipe2 = new Recipe("目玉焼き", 120);
//$recipe3 = new Recipe("大葉", 200.5);
//$recipe4 = new Recipe("シャケ", 10);
//$recipe5 = new Recipe("のり", 120);
//$menu1 = new Menu("ハンバーグ弁当", "洋食", [$recipe1, $recipe2]);  // $r1と$r2はレシピインスタンスとする
//$menu2 = new Menu("鮭弁当", "和食", [$recipe3, $recipe4]); // $r3とr$4はレシピインスタンスとする
//$menu3 = new Menu("のり弁当", "和食", [$recipe4, $recipe5]); // $r4と$r5はレシピインスタンスとする
//
//$menuSet = new MenuSet([$menu1, $menu2, $menu3]);
//$menus = $menuSet->getMenusByCalorie(131); // $menusは、100カロリー以上のメニューのリスト
//var_dump($menus);

//問題6
//$recipe1 = new Recipe("ハンバーグ", 200.5);
//$recipe2 = new Recipe("目玉焼き", 120);
//$recipe3 = new Recipe("大葉", 200.5);
//$recipe4 = new Recipe("シャケ", 10);
//$recipe5 = new Recipe("のり", 120);
//$menu1 = new Menu("ハンバーグ弁当", "洋食", [$recipe1, $recipe2]);  // $r1と$r2はレシピインスタンスとする
//$menu2 = new Menu("鮭弁当", "和食", [$recipe3, $recipe4]); // $r3とr$4はレシピインスタンスとする
//$menu3 = new Menu("のり弁当", "和食", [$recipe4, $recipe5]); // $r4と$r5はレシピインスタンスとする
//$menuSet = new MenuSet([$menu1, $menu2, $menu3]); // $menu1, $menu2, $menu3はメニューオブジェクトとする。
//
//$menus = $menuSet->getMenusBySpec(function (Menu $menu) { return true; });   // すべてのメニューを返す。
////var_dump($menus);
//
////getMenusByOverCalorie
//$menus2 = $menuSet->getMenusBySpec(function (Menu $menu) { return $menu->getCal() > 200; });
//var_dump($menus2);
//
////getMenusByType
//$menus3 = $menuSet->getMenusBySpec(function (Menu $menu) { return $menu->getType() === '洋食'; });
//var_dump($menus3);

//問題7
//$recipe1 = new Recipe("ハンバーグ", 200.5);
//$recipe2 = new Recipe("目玉焼き", 120);
//$recipe3 = new Recipe("大葉", 200.5);
//$recipe4 = new Recipe("シャケ", 10);
//$recipe5 = new Recipe("のり", 120);
//$menu1 = new Menu("ハンバーグ弁当", "洋食", [$recipe1, $recipe2]);  // $r1と$r2はレシピインスタンスとする
//$menu2 = new Menu("鮭弁当", "和食", [$recipe3, $recipe4]); // $r3とr$4はレシピインスタンスとする
//$menu3 = new Menu("のり弁当", "和食", [$recipe4, $recipe5]); // $r4と$r5はレシピインスタンスとする
//$menuSet = new MenuSet([$menu1, $menu2, $menu3]); // $menu1, $menu2, $menu3はメニューオブジェクトとする。
//
//$menus1 = $menuSet->getMenusBySpecInterface(new MenuTypeSpec("洋食")); // 〜のみのメニュー一覧を抽出
//$menus2 = $menuSet->getMenusBySpecInterface(new CalorieOverSpec(300));  // 〜以上のメニュー一覧を抽
//var_dump($menus1);
//var_dump($menus2);

//問題8
//$recipe1 = new Recipe("ハンバーグ", 200.5);
//$recipe2 = new Recipe("目玉焼き", 120);
//$recipe3 = new Recipe("大葉", 200.5);
//$recipe4 = new Recipe("シャケ", 10);
//$recipe5 = new Recipe("のり", 120);
//$menu1 = new Menu("ハンバーグ弁当", "洋食", [$recipe1, $recipe2]);  // $r1と$r2はレシピインスタンスとする
//$menu2 = new Menu("鮭弁当", "和食", [$recipe3, $recipe4]); // $r3とr$4はレシピインスタンスとする
//$menu3 = new Menu("のり弁当", "和食", [$recipe4, $recipe5]); // $r4と$r5はレシピインスタンスとする
//$menuSet = new MenuSet([$menu1, $menu2, $menu3]); // $menu1, $menu2, $menu3はメニューオブジェクトとする。

//$andMenus = $menuSet->getMenusBySpecInterface(new AndSpec(new MenuTypeSpec("和食"), new CalorieOverSpec(200)));
//var_dump($andMenus);
//$orMenus = $menuSet->getMenusBySpecInterface(new OrSpec(new MenuTypeSpec("中華"), new CalorieOverSpec(300)));
//var_dump($orMenus);
//$notMenus = $menuSet->getMenusBySpecInterface(new NotSpec(new MenuTypeSpec("中華"), new CalorieOverSpec(10)));
//var_dump($notMenus);
