<?php

use Illuminate\Database\Seeder;
//use App\Assignment;
use Faker\Factory;
use App\Trazabilidad;
class AssignmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker =Factory::create();
       for($i=0; $i<1000;$i++){
            
            Trazabilidad::create([
            
            'numero'=>'CBR'.$faker->numberBetween($min = 1000000, $max = 9999999),
            'telefono'=>$faker->numberBetween($min =10000000, $max =99999999),
            'reclamante'=>$faker->name,
            'direccion_postal'=>$faker->address,
            'distrito'=>$faker->randomElement(['LINCE','CHORRILLOS','LOS OLIVOS','COMAS','SAN BORJA','LIMA','SURQUILLO','LA MOLINA','ATE VITARTE','HUANCHACO','AYACUCHO','RIMAC','ATE VITARTE','LA VICTORIA']) ,
            'departamento'=>'LIMA',
            'tipo_reclamo'=>'CALIDAD',
            'motivo_reclamo'=>$faker->randomElement(['CALIDAD AVERIA SIN SUTENTO','INCREMENTO DE TARIFA REGULADO']),
            'observacion'=>$faker->text,
            'bandeja_asig'=>$faker->randomElement(['INCREMENTO','MASIVA FUNDADO','SIMPLE INCREMENTO']),
            'pre_resultado'=>$faker->randomElement(['PROCEDENTE','IMPROCEDENTE','FUNDADO','INFUNDADO','FUNDADO PARCIAL']),
            'fecha_reclamo'=>$faker->dateTime($max = 'now', $timezone = null),
            'fecha_vencimiento'=>$faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = null)
            
            ]);
        
       }
       
       
       
        
    }
}
