<?php

use Illuminate\Database\Seeder;
use App\Resultado;
class ResultadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $resutados=['Improcedente','Procedente','Infundado','Fundado','Fundado Parcial'];
        foreach($resutados as $re){
            
            Resultado::create([
                'nombre'=>$re
                ]);
        }
        
    }
}
