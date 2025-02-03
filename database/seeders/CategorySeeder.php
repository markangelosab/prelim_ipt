<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Baking & Cooking', 'description' => 'Flour, sugar, oils, and baking essentials'],
            ['name' => 'Meat & Poultry', 'description' => 'Fresh and frozen beef, chicken, pork, and lamb'],
            ['name' => 'Seafood & Fish', 'description' => 'Fresh, frozen, and canned seafood selections'],
            ['name' => 'Fruits & Vegetables', 'description' => 'Fresh produce and organic vegetables'],
            ['name' => 'Herbs & Spices', 'description' => 'Seasonings, dried herbs, and flavorful spices'],
            ['name' => 'Condiments & Sauces', 'description' => 'Ketchup, mayonnaise, soy sauce, and dressings'],
            ['name' => 'Grains & Rice', 'description' => 'Various rice, quinoa, oats, and cereal grains'],
            ['name' => 'Plant-Based & Vegan', 'description' => 'Alternative meat, dairy-free, and organic foods'],
            ['name' => 'Healthy & Organic', 'description' => 'Gluten-free, sugar-free, and health-focused items'],
        ];


        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }
    }
}
