<?php declare(strict_types=1);
namespace Alex\Providers;

use Illuminate\Support\ServiceProvider;
use Alex\Repositories\Travel\ProvidesTrips;
use Alex\Repositories\Travel\MemoryTripsRepository;

class TripsServiceProvider extends ServiceProvider
{
    protected $defer = true;

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->instance('trips', [
            [
                'title' => 'Barcelona',
                'subtitle' => 'April 21, 2018',
                'slug' => 'barcelona-april-2018',
                'text' => '',
                'date' => '2018-04-18',
                'order' => 4,
            ],
            [
                'title' => 'Toronto',
                'subtitle' => 'July 2014',
                'slug' => 'toronto-july-2014',
                'text' => '',
                'date' => '2014-07-01',
                'order' => 1,
            ],
            [
                'title' => 'Geneva',
                'subtitle' => 'March 16-18, 2018',
                'slug' => 'switzerland-march-2018',
                'text' => '',
                'date' => '2018-03-16',
                'order' => 3,
            ],
            [
                'title' => 'Marbella',
                'subtitle' => 'April 23-28, 2018',
                'slug' => 'marbella-april-2018',
                'text' => '',
                'date' => '2018-04-23',
                'order' => 5,
            ],
            [
                'title' => 'Brussels',
                'subtitle' => 'December 28 2017',
                'slug' => 'brussels-december-2017',
                'text' => '',
                'date' => '2017-12-28',
                'order' => 2,
            ],
        ]);

        $this->app->instance('countriesAndCities', [
            [
                'name' => 'Ukraine',
                'code' => 'UA',
                'order' => 1,
                'cities' => ['Dnipro', 'Kyiv', 'Odessa', 'Lviv', 'Zaporizhia', 'Poltava', 'Uman', 'Simferopol', 'Sevastopol', 'Yalta', 'Partenit', 'Alushta', 'Balaclava'],
            ],
            [
                'name' => 'Bulgaria',
                'code' => 'BG',
                'order' => 2,
                'cities' => ['Sozopol'],
            ],
            [
                'name' => 'Russia',
                'code' => 'RU',
                'order' => 3,
                'cities' => ['Moscow'],
            ],
            [
                'name' => 'Switzerland',
                'code' => 'CH',
                'order' => 4,
                'cities' => ['Geneva', 'Zurich', 'Basel', 'Lausanne', 'Lucerne', 'Leysin', 'Montreux', 'Lugano', 'Bern', 'Zermatt', 'Bellinzona'],
            ],
            [
                'name' => 'Canada',
                'code' => 'CA',
                'order' => 5,
                'cities' => ['Toronto'],
            ],
            [
                'name' => 'Czech Republic',
                'code' => 'CZ',
                'order' => 6,
                'cities' => ['Prague'],
            ],
            [
                'name' => 'France',
                'code' => 'FR',
                'order' => 7,
                'cities' => ['Paris', 'Strasbourg', 'Metz'],
            ],
            [
                'name' => 'Belgium',
                'code' => 'BE',
                'order' => 8,
                'cities' => ['Brussels'],
            ],
            [
                'name' => 'Netherlands',
                'code' => 'NL',
                'order' => 9,
                'cities' => ['Amsterdam'],
            ],
            [
                'name' => 'Austria',
                'code' => 'AT',
                'order' => 10,
                'cities' => ['Vienna'],
            ],
            [
                'name' => 'United States',
                'code' => 'US',
                'order' => 11,
                'cities' => ['Panama City', 'Panama City Beach', 'Orlando', 'Washington DC', 'New York City'],
            ],
            [
                'name' => 'Turkey',
                'code' => 'TR',
                'order' => 12,
                'cities' => ['Kemer'],
            ],
            [
                'name' => 'Israel',
                'code' => 'IL',
                'order' => 13,
                'cities' => ['Jerusalem', 'Haifa'],
            ],
            [
                'name' => 'Poland',
                'code' => 'PL',
                'order' => 14,
                'cities' => ['Wroclaw', 'Warsaw', 'Krakow', 'Gdansk', 'Gdynia', 'Sopot', 'Poznan', 'Torun'],
            ],
            [
                'name' => 'Spain',
                'code' => 'ES',
                'order' => 15,
                'cities' => ['Marbella', 'Barcelona', 'Madrid', 'Seville', 'Malaga'],
            ],
            [
                'name' => 'Germany',
                'code' => 'DE',
                'order' => 16,
                'cities' => ['Berlin', 'Dresden', 'Trier'],
            ],
            [
                'name' => 'Montenegro',
                'code' => 'ME',
                'order' => 17,
                'cities' => ['Budva', 'Kotor'],
            ],
            [
                'name' => 'Hungary',
                'code' => 'HU',
                'order' => 18,
                'cities' => ['Budapest'],
            ],
            [
                'name' => 'Luxembourg',
                'code' => 'LU',
                'order' => 19,
                'cities' => ['Luxembourg', 'Echternach', 'Bettembourg'],
            ],
            [
                'name' => 'Croatia',
                'code' => 'HR',
                'order' => 20,
                'cities' => ['Krk'],
            ],
            [
                'name' => 'Italy',
                'code' => 'IT',
                'order' => 21,
                'cities' => ['Venice'],
            ],
        ]);

        $this->app->singleton(ProvidesTrips::class, MemoryTripsRepository::class);
    }

    /**
     * @return array
     */
    public function provides()
    {
        return [
            ProvidesTrips::class,
            'trips',
        ];
    }
}
