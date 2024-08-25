<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pics>
 */
class picsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Get a random image from the specified directory --chatgpt
        $imagePath = $this->faker->file(
            public_path('\image\Fotofoshi'), // The source directory with images
            storage_path('app/public/images'), // The destination directory for the upload simulation
            false // Set to false to return the filename, not the full path
        );

        return [
            'name'=> $imagePath,
            'image'=> "storage/images/$imagePath",
            'description'=> fake() ->realText(200),
            'user_id' => 1
        ];
    }
}
