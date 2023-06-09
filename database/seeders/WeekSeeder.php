<?php

namespace Database\Seeders;

use App\Models\Week;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WeekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $weeks = [
            [
                'title'         => 'ف3 - الأسبوع الأول',
                'start'         => '2023-03-12',
                'end'           => '2023-03-16' ,
            ],
            [
                'title'         => 'ف3 - الأسبوع الثاني',
                'start'         => '2023-03-19',
                'end'           => '2023-03-23' ,
            ],
            [
                'title'         => 'ف3 - الأسبوع الثالث',
                'start'         => '2023-03-26',
                'end'           => '2023-03-30' ,
            ],
            [
                'title'         => 'ف3 - الأسبوع الرابع',
                'start'         => '2023-04-02',
                'end'           => '2023-04-06' ,
            ],
            [
                'title'         => 'ف3 - الأسبوع الخامس',
                'start'         => '2023-04-09',
                'end'           => '2023-04-13' ,
            ],
            [
                'title'         => 'ف3 - الأسبوع السادس',
                'start'         => '2023-04-23',
                'end'           => '2023-04-27' ,
            ],
            [
                'title'         => 'ف3 - الأسبوع السابع',
                'start'         => '2023-04-30',
                'end'           => '2023-05-04' ,
            ],
            [
                'title'         => 'ف3 - الأسبوع الثامن',
                'start'         => '2023-05-07',
                'end'           => '2023-05-11' ,
            ],
            [
                'title'         => 'ف3 - الأسبوع التاسع',
                'start'         => '2023-05-14',
                'end'           => '2023-05-18' ,
            ],
            [
                'title'         => 'ف3 - الأسبوع العاشر',
                'start'         => '2023-05-21',
                'end'           => '2023-05-25' ,
            ],
            [
                'title'         => 'ف3 - الأسبوع الحادي عشر',
                'start'         => '2023-05-28',
                'end'           => '2023-06-01' ,
            ],
            [
                'title'         => 'ف3 - الأسبوع الثاني عشر',
                'start'         => '2023-06-04',
                'end'           => '2023-06-08' ,
            ],
            [
                'title'         => 'ف3 - الأسبوع الثالث عشر',
                'start'         => '2023-06-11',
                'end'           => '2023-06-15' ,
            ],
            [
                'title'         => 'ف3 - الأسبوع الرابع عشر',
                'start'         => '2023-06-18',
                'end'           => '2023-06-22' ,
            ],
        ];

        foreach ($weeks as $index => $week) {
            Week::create([
                'title'         => $week['title'],
                'start'         => $week['start'] ,
                'end'           => $week['end'] ,
                'semester_id'   => 2,
                'active'        => $index == 9 ? 1 : 0 ,
                'status'        => 1
            ]);
        }
    }
}
