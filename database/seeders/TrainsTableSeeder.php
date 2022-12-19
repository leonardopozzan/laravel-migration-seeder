<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newTrain = new Train();
        $newTrain->azienda = 'Trenitalia';
        $newTrain->stazione_partenza = 'Verona Porta Nuova';
        $newTrain->stazione_arrivo = 'Roma Termini';
        $newTrain->orario_partenza = '08:50';
        $newTrain->orario_arrivo = '12:10';
        $newTrain->codice_treno = 'FR978156';
        $newTrain->numero_carrozze = '5';
        $newTrain->in_orario = true;
        $newTrain->cancellato = false;
        $newTrain->save();
        // $table->id();
        // $table->timestamps();
        // $table->string('azienda', 100);
        // $table->string('stazione_partenza', 200);
        // $table->string('stazione_arrivo', 200);
        // $table->time('orario_partenza');
        // $table->time('orario_arrivo');
        // $table->string('codice_treno');
        // $table->integer('numero_carrozze')->nullable();
        // $table->boolean('in_orario')->nullable();
        // $table->boolean('cancellato')->nullable();
    }
}
