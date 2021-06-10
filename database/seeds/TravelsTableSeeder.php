<?php

use App\Travel;
use Illuminate\Database\Seeder;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i <= 80; $i++) {
            //creazione istanza
            $new_travel = new Travel();

            //popola colonne
            $new_travel->città = 'Venezia';
            $new_travel->nazione = 'Italia';
            $new_travel->giorni = rand(1, 15);
            $new_travel->descrizione = 'descrizione del viaggio.................';
            $new_travel->num_persone = rand(1, 8);
            $new_travel->prezzo = rand(70, 6500);

            //salvare record a DB
            $new_travel->save();
        }
    }

}
