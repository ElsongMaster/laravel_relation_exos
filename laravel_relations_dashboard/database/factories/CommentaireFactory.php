<?php

namespace Database\Factories;

use App\Models\Commentaire;
use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentaireFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Commentaire::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "contenu"=>$this->faker->text(100),
            "article_id"=>$this->faker->numberBetween(1,count(Article::all()))

        ];
    }
}