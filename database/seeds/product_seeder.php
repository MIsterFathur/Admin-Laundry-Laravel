<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class product_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = ['Kiloan','Boneka','karpet','Setrika','One Day Service'];
        $price = ['5000','7500','15000','2000','15000'];

        for($i=0;$i<count($name);$i++){
            App\Product::create([
                'name'=> $name[$i],
                'slug'=> str::slug($name[$i]),
                'price'=> str::slug($price[$i])
            ]);
        }
    }
}