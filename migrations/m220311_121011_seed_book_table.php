<?php

use Faker\Factory;
use yii\db\Migration;

/**
 * Class m220311_121011_seed_book_table
 */
class m220311_121011_seed_book_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insertFakeBooks();
    }

    private function insertFakeBooks()
    {
        $faker = Factory::create();
        for ($i = 0; $i < 50; $i++) {
            $this->insert(
                'book',
                [
                    'title' => $faker->sentence(),
                    'author' => $faker->name,
                    'iban' => $faker->iban(),
                    'release_year' => (int)$faker->year,
                    'cover_image'  => $faker->imageUrl()
                ]
            );
        }
    }
}
