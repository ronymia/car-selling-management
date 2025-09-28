<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\CarImage;
use App\Models\CarModel;
use App\Models\CarType;
use App\Models\City;
use App\Models\FuelType;
use App\Models\Maker;
use App\Models\State;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $this->call([
        //     UsersSeeder::class,
        // ]);

        // CREATE CAR TYPE
        CarType::factory()
            ->sequence(
                ['name' => 'Sedan',],
                ['name' => 'Hatchback',],
                ['name' => 'SUV',],
                ['name' => 'Pickup Truck',],
                ['name' => 'Minivan',],
                ['name' => 'Jeep',],
                ['name' => 'Coupe',],
                ['name' => 'Crossover',],
                ['name' => 'Sports Car',],
            )
            ->count(9)
            ->create();

        // CREATE FUEL TYPE
        FuelType::factory()
            ->sequence(
                ['name' => 'Gasoline'],
                ['name' => 'Diesel'],
                ['name' => 'Electric'],
                ['name' => 'Hybrid'],
            )
            ->count(4)
            ->create();


        // CREATE  STATE AND CITIES
        $states = [
            'California' => ['Los Angeles', 'San Francisco', 'San Diego', 'Sacramento'],
            'Texas' => ['Houston', 'San Antonio', 'Dallas', 'Austin', 'Fort Worth'],
            'Florida' => ['Miami', 'Orlando', 'Tampa', 'Jacksonville', 'St. Petersburg'],
            'New York' => ['New York City', 'Buffalo', 'Rochester', 'Yonkers'],
            'Illinois' => ['Chicago', 'Aurora', 'Naperville', 'Joliet', 'Rockford'],
            'Pennsylvania' => ['Philadelphia', 'Pittsburgh', 'Allentown', 'Erie'],
            'Ohio' => ['Columbus', 'Cleveland', 'Cincinnati', 'Toledo', 'Akron'],
            'Georgia' => ['Atlanta', 'Augusta', 'Columbus', 'Savannah', 'Athens'],
            'North Carolina' => ['Charlotte', 'Raleigh', 'Greensboro', 'Durham'],
            'Michigan' => ['Detroit', 'Grand Rapids', 'Warren', 'Sterling Heights'],
        ];

        foreach ($states as $state => $cites) {
            State::factory()
                ->state(['name' => $state])
                ->has(
                    City::factory()
                        ->count(count($cites))
                        ->sequence(
                            ...array_map(fn($city) => ['name' => $city], $cites)
                        )
                )
                ->create();
        }

        // CREATE MAKER AND MODELS
        $makers = [
            'Toyota' => ['Camry', 'Corolla', 'Highlander', 'RAV4', 'Prius'],
            'Ford' => ['F-150', 'Escape', 'Explorer', 'Mustang', 'Fusion'],
            'Honda' => ['Civic', 'Accord', 'CR-V', 'Pilot', 'Odyssey', 'HR-V'],
            'Chevrolet' => ['Silverado', 'Equinox', 'Malibu', 'Impala', 'Cruze'],
            'Nissan' => ['Altima', 'Sentra', 'Rogue', 'Maxima', 'Murano', 'Frontier'],
            'Lexus' => ['RX400', 'RX450', 'RX350', 'ES350', 'LS500', 'IS300']
        ];

        foreach ($makers as $maker => $car_models) {
            Maker::factory()
                ->state(['name' => $maker])
                ->has(
                    CarModel::factory()
                        ->count(count($car_models))
                        ->sequence(
                            ...array_map(fn($model) => ['name' => $model], $car_models)
                        ),
                    'car_models'
                )
                ->create();
        }

        // 
        User::factory()->count(3)->create();

        User::factory()
            ->count(2)
            ->has(
                Car::factory()
                    ->count(50)
                    ->has(
                        CarImage::factory()
                            ->count(5)
                            ->sequence(function (Sequence $sequence) {
                                return [
                                    'position' => $sequence->index % 5 + 1
                                ];
                            }),
                        'images'
                    )
                    ->hasFeatures(),
                'favouriteCars'
            )


            ->create();
    }
}
