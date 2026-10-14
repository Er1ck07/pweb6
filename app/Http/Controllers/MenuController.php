<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        // Sample rice ball menu items data
        $menuItems = [
            ['name' => 'Spicy Tuna Mayo', 'desc' => 'Fresh tuna chunks tossed in a creamy, spicy Japanese mayonnaise blend.', 'price' => '$3.50', 'icon' => '🐟'],
            ['name' => 'Grilled Salmon Shio', 'desc' => 'Flaky salted grilled salmon wrapped with a touch of roasted sesame.', 'price' => '$4.00', 'icon' => '🍣'],
            ['name' => 'Classic Umeboshi', 'desc' => 'Traditional tangy pickled Japanese plum for a crisp, authentic bite.', 'price' => '$3.00', 'icon' => '🌱'],
            ['name' => 'Ebi Fry Tempura', 'desc' => 'Crispy fried shrimp with a drizzle of sweet unagi sauce and nori.', 'price' => '$4.50', 'icon' => '🍤'],
            ['name' => 'Beef Bulgogi', 'desc' => 'Savory marinated Korean-style thinly sliced beef packed inside.', 'price' => '$4.25', 'icon' => '🥩'],
            ['name' => 'Salted Egg Yolk', 'desc' => 'Rich and creamy golden salted egg yolk paste with chicken floss.', 'price' => '$4.00', 'icon' => '🥚'],
        ];

        return view('menu', compact('menuItems'));
    }
}
