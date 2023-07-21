<?php

namespace Database\Factories;

use App\Models\LaptopOwner;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarOwnerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LaptopOwner::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();

        $laptopModels = [
            'MacBook Pro', 'MacBook Air', 'MacBook', 'Dell XPS', 'Dell Inspiron', 'Dell Latitude',
            'HP Spectre', 'HP Envy', 'HP Pavilion', 'Lenovo ThinkPad', 'Lenovo IdeaPad', 'Lenovo Yoga',
            'Asus ZenBook', 'Asus ROG', 'Acer Aspire', 'Acer Predator', 'Microsoft Surface', 'Razer Blade',
            'MSI GS65 Stealth Thin', 'Gigabyte Aero 15', 'Huawei MateBook', 'Samsung Notebook', 'LG Gram',
            'Toshiba Tecra', 'Fujitsu Lifebook', 'Sony Vaio', 'Panasonic Toughbook', 'Alienware Area-51m',
            'Aorus 17X', 'Clevo P775TM', 'CyberPowerPC Tracer III', 'Eurocom Nightsky RX17', 'Gateway Creator Series',
            'Google Pixelbook', 'HCL Leaptop', 'Honor MagicBook', 'Intel NUC', 'Medion Akoya', 'Nexoc G739',
            'Origin PC EON17-X', 'Positivo BGH', 'Razer Blade Stealth', 'Sager NP7877DW', 'System76 Oryx Pro',
            'Tuxedo InfinityBook', 'Vaio E Series', 'Xiaomi Mi Notebook', 'Avita Liber', 'Chuwi LapBook', 'Compal PBL21',
            'Cube iWork', 'CyberPowerPC Tracer IV', 'Dell G Series', 'Dynabook Portégé', 'Fujitsu Celsius', 'Gateway GWTN',
            'HP EliteBook', 'Huawei MateBook D', 'iBall CompBook', 'Jumper EZbook', 'LG UltraPC', 'Maingear Pulse 15', 'MSI Prestige',
            'NEC LaVie', 'Nexstgo Primus', 'Panasonic Lets Note', 'Samsung Chromebook','Teclast F15', 'Toshiba DynaEdge',
            'Vaio SX14', 'Velocity Micro NoteMagix', 'ViewSonic ViewBook', 'XPG Xenia', 'Zephyrus G14'
        ];

        return [
            'owner_name' => $faker->name,
            'country' => $faker->country,
            'year' => $faker->year,
            'price' => '$' . $faker->numberBetween(1000, 100000),
            'laptop_model' => $faker->randomElement($laptopModels),
        ];
    }
}
