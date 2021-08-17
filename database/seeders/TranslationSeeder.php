<?php

namespace Database\Seeders;

use App\Http\Middleware\TrustHosts;
use App\Models\Translation;
use Illuminate\Database\Seeder;

class TranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Translation::truncate();

        Translation::create([
            'key' => 'EX_USER_NOT_FOUND',
            'ru' => 'Пользователь не найден',
            'en' => 'User not found',
            'de' => 'Userein ist nicht nicht',
            'pg' => 'Tomo y obrigo',
        ]);

        Translation::create([
            'key' => 'EX_USER_SERVICE_NOT_FOUND',
            'ru' => 'Сервис не найден',
            'en' => 'User service not found',
            'de' => 'User serviceitung ist nicht nicht',
            'pg' => 'Tomo y obrigo user servicio',
        ]);

        Translation::create([
            'key' => 'EX_COMPOSITE_ORDER_NOT_FOUND',
            'ru' => 'Заказ не найден',
            'en' => 'Order not found',
            'de' => 'Ordnung ist nicht nicht',
            'pg' => 'Tomo y obrigo composito ordero',
        ]);

        Translation::create([
            'key' => 'EX_CUSTOM',
            'ru' => 'Кастомное исключение',
            'en' => 'Custom exception',
            'de' => 'cus ext deutch',
            'pg' => 'cus ext pg',
        ]);
    }
}
