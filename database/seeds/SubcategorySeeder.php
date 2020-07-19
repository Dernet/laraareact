<?php

use Illuminate\Database\Seeder;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Category::class, 10)->create();
        $this->addProductSubcategory();
    }

    public function addProductSubcategory()
    {
   //     $products = (App\Products::with('category.subCategories'))->get();
   //    foreach ($products as $product) {
   //         $category = $product->category;
   //         $sub_categories_ids = $category->subCategories->pluck('id');
   //         $product->subcategory_id = $sub_categories_ids->random();
   //         $product->save();
   //     }
    }
}
