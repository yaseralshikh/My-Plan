<?php

namespace Database\Seeders;

use App\Models\SectionType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $section_types = ['الشؤون التعليمية', 'الشؤون المدرسية', 'الخدمات المساندة'];

        foreach ($section_types as $section) {
            SectionType::create([
                'name' => $section
            ]);
        }
    }
}
