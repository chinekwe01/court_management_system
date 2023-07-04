<?php

namespace Database\Seeders;

use App\Models\Judgement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateJudgementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $judgements = [
            [
               'case_id'=>1,
               'fact'=>'Based on Evidence',
               'judgement'=>'Processing'
            ],
            [
                'case_id'=>2,
                'fact'=>'Statement',
                'judgement'=>'Pending'
             ],
             [
                'case_id'=>3,
                'fact'=>'No fact stated',
                'judgement'=>'Completed'
             ],
             [
                'case_id'=>3,
                'fact'=>'Based on Facts',
                'judgement'=>'Awaiting'
             ],
             [
                'case_id'=>5,
                'fact'=>'Based on Details',
                'judgement'=>'Processing'
             ],
        ];

        foreach ($judgements as $key => $judgement) {
            Judgement::create($judgement);
        }
    }
}
