<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $products = [
            // Baked Goods
            ['name' => 'Whole Wheat Bread', 'description' => 'Freshly baked whole wheat loaf', 'category_id' => 1, 'whole_sale_price' => 30.00, 'retail_price' => 40.00],
            ['name' => 'Croissants', 'description' => 'Buttery and flaky croissants', 'category_id' => 1, 'whole_sale_price' => 50.00, 'retail_price' => 65.00],
            ['name' => 'Muffins', 'description' => 'Chocolate chip and blueberry muffins', 'category_id' => 1, 'whole_sale_price' => 45.00, 'retail_price' => 55.00],

            // Meat & Poultry
            ['name' => 'Chicken Drumsticks', 'description' => 'Fresh chicken drumsticks', 'category_id' => 2, 'whole_sale_price' => 120.00, 'retail_price' => 135.00],
            ['name' => 'Ground Beef', 'description' => 'Lean ground beef for cooking', 'category_id' => 2, 'whole_sale_price' => 180.00, 'retail_price' => 200.00],
            ['name' => 'Pork Chops', 'description' => 'Thick-cut pork chops', 'category_id' => 2, 'whole_sale_price' => 160.00, 'retail_price' => 180.00],

            // Fresh Produce
            ['name' => 'Organic Carrots', 'description' => 'Freshly harvested organic carrots', 'category_id' => 3, 'whole_sale_price' => 25.00, 'retail_price' => 30.00],
            ['name' => 'Baby Spinach', 'description' => 'Fresh baby spinach leaves', 'category_id' => 3, 'whole_sale_price' => 35.00, 'retail_price' => 45.00],
            ['name' => 'Cherry Tomatoes', 'description' => 'Sweet and juicy cherry tomatoes', 'category_id' => 3, 'whole_sale_price' => 40.00, 'retail_price' => 50.00],

            // Condiments & Sauces
            ['name' => 'Soy Sauce', 'description' => 'Rich and savory soy sauce', 'category_id' => 4, 'whole_sale_price' => 20.00, 'retail_price' => 25.00],
            ['name' => 'Hot Sauce', 'description' => 'Spicy chili hot sauce', 'category_id' => 4, 'whole_sale_price' => 18.00, 'retail_price' => 22.00],
            ['name' => 'Barbecue Sauce', 'description' => 'Smoky and tangy BBQ sauce', 'category_id' => 4, 'whole_sale_price' => 30.00, 'retail_price' => 38.00],

            // Seafood
            ['name' => 'Salmon Fillet', 'description' => 'Freshly caught salmon fillet', 'category_id' => 5, 'whole_sale_price' => 250.00, 'retail_price' => 275.00],
            ['name' => 'Shrimp', 'description' => 'Peeled and deveined shrimp', 'category_id' => 5, 'whole_sale_price' => 300.00, 'retail_price' => 330.00],
            ['name' => 'Squid Rings', 'description' => 'Fresh squid rings for cooking', 'category_id' => 5, 'whole_sale_price' => 220.00, 'retail_price' => 250.00],

            // Herbs & Spices
            ['name' => 'Black Pepper', 'description' => 'Ground black pepper spice', 'category_id' => 6, 'whole_sale_price' => 15.00, 'retail_price' => 20.00],
            ['name' => 'Oregano', 'description' => 'Dried oregano leaves', 'category_id' => 6, 'whole_sale_price' => 12.00, 'retail_price' => 18.00],
            ['name' => 'Paprika', 'description' => 'Smoky paprika spice', 'category_id' => 6, 'whole_sale_price' => 20.00, 'retail_price' => 28.00],

            // Organic & Healthy Foods
            ['name' => 'Chia Seeds', 'description' => 'Nutrient-rich chia seeds', 'category_id' => 7, 'whole_sale_price' => 80.00, 'retail_price' => 95.00],
            ['name' => 'Quinoa', 'description' => 'Gluten-free and high-protein grain', 'category_id' => 7, 'whole_sale_price' => 100.00, 'retail_price' => 120.00],
            ['name' => 'Almond Butter', 'description' => 'Healthy almond butter spread', 'category_id' => 7, 'whole_sale_price' => 150.00, 'retail_price' => 170.00],

            // Cooking Oils
            ['name' => 'Olive Oil', 'description' => 'Extra virgin olive oil', 'category_id' => 8, 'whole_sale_price' => 200.00, 'retail_price' => 220.00],
            ['name' => 'Coconut Oil', 'description' => 'Organic cold-pressed coconut oil', 'category_id' => 8, 'whole_sale_price' => 180.00, 'retail_price' => 200.00],
            ['name' => 'Canola Oil', 'description' => 'Light and healthy canola oil', 'category_id' => 8, 'whole_sale_price' => 160.00, 'retail_price' => 180.00],

            // Baking Ingredients
            ['name' => 'All-Purpose Flour', 'description' => 'High-quality all-purpose flour', 'category_id' => 9, 'whole_sale_price' => 50.00, 'retail_price' => 65.00],
            ['name' => 'Brown Sugar', 'description' => 'Rich and moist brown sugar', 'category_id' => 9, 'whole_sale_price' => 40.00, 'retail_price' => 55.00],
            ['name' => 'Baking Powder', 'description' => 'Leavening agent for baking', 'category_id' => 9, 'whole_sale_price' => 25.00, 'retail_price' => 35.00],
        ];

        foreach ($products as $product) {
            \App\Models\Product::create($product);
        }
    }
}
