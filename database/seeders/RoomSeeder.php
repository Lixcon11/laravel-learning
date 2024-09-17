<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Room::create([
            'roomNumber' => '101',
            'description' => 'A cozy single bed room with all amenities.',
            'roomType' => 'Single Bed',
            'amenities' => json_encode(['bed', 'wifi', 'car', 'snowflake']),
            'price' => 100,
            'discount' => 10,
        ]);
    }
}
