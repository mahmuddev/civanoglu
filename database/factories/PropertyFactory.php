<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => '',
            'featured_image' => 'https://picsum.photos/1200/800',
            'location_id' => '',
            'price' => '',
            'sale' => '',
            'type' => '',
            'bedrooms' => '',
            'bathrooms' => '',
            'net_sqm' => '',
            'gross_sqm' => '',
            'pool' => '',
            'overview' => '',
            'why_buy' => '',
            'description' => ''
        ];
    }
}
