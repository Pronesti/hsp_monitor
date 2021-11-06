<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RepositoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(['microframework','paymentservice','hub','auth','bkm','dashboard','epgcheck','pgs','rec','trk','wcl_player','wcl_web']),
            'datacenter' => $this->faker->randomElement(['latest','qro','aws','azr']),
            'partition' => $this->faker->randomElement(['bnet','cpan','cglo','ccol','carg']),
            'service' => $this->faker->randomElement(['cvideo','cmusic','cdrive']),
            'silo' => $this->faker->randomElement(['ALL','STB','PRD','CROSS','WEB','TV']),
            'env' => $this->faker->randomElement(['PRD','UAT','CROSS','TST']),
            'tag' => $this->faker->randomElement(['cglo-rc','cglo-uat','cglo-tst','ott-rc','cglo-stable']),
            'build' => $this->faker->randomNumber(2),
            'url' => $this->faker->url(),
            'result' => $this->faker->randomElement(['SUCCESS','FAILURE','ABORTED']),
            'region' => $this->faker->randomElement(['default','aws','us-east-1','eastus2','sa-east-1']),
        ];
    }
}
