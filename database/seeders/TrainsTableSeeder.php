<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 1; $i <= 20; $i++) {
            $newTrain = new Train();
            $newTrain->azienda = $faker->company();
            $newTrain->stazione_partenza = $faker->city();
            $newTrain->stazione_arrivo = $faker->city();
            $newTrain->orario_partenza = $faker->time('H:i');
            $newTrain->orario_arrivo = $faker->time('H:i');
            $newTrain->codice_treno = $faker->bothify();
            $newTrain->numero_carrozza = $faker->randomDigitNot(0);
            $newTrain->in_orario = $faker->boolean();
            if($i <= 5){
                $newTrain->data_partenza = today()->toDateString();
            }else{
                $newTrain->data_partenza = $faker->dateTimeBetween('now', '+2 week');
            }
            if($newTrain->in_orario){
                $newTrain->cancellato = false;
            }else{
                $newTrain->cancellato = true;
            }
            $newTrain->save();
        }
    }
}
