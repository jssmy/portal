<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\ReclamoSimple;
class ReclamoSimpleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
         $faker = Factory::create();
        
        for($i=0; $i<1000; $i++){
            $cd=    $faker->randomElement(['BR','FC','BCR']);
            $nu=    $faker->numberBetween($min=10000000000,$max=99999999999);
            $dia_max=$faker->numberBetween($min=3,$max=15);
            $fecha_reclamo = $faker->dateTimeBetween($startDate = '-7 months', $endDate = 'now', $timezone = null);
            $fecha_vencimiento=$faker->dateTimeBetween($startDate = $fecha_reclamo, $endDate = $dia_max.' days ', $timezone = null);
            
            $number=$cd.$nu;
            ReclamoSimple::create([
            'reclamo_numero'=>$number,
            'tipo_reclamo'=>$faker->randomElement(['CALIDAD','COBRO SERVICIO','FALTA ENTREGA: RECIBO DETALLE','INCUMPLIMIENTO','INSTALA, REINSTALA','PORTABILIDAD','TRASLADO DE SERVICIO']),
            'motivo_reclamo'=>$faker->randomElement(['ALTA NUEVA INSTALACIO','BAJA DEL SERVICIO','CALIDAD AVERIA SIN SUSTENTO','CORTE POR DEUDA','DERECHOS RECONOCIDO NORMATIVOS','LUGARES DE PAGO','MIGRACION NO EJECUTADA']),
            'observacion_reclamo'=>$faker->text,
            'fecha_reclamo'=>$fecha_reclamo,
            'fecha_vencimiento'=>$fecha_vencimiento,
            'telefono'=>$faker->numberBetween($min = 1000000, $max = 9999999),
            'estado_servicio'=>$faker->randomElement(['BP','IC','SU']),
            'ciclo_servicio'=>$faker->numberBetween($min=1,$max=30),
            'promocion'=>$faker->randomElement(['L P65 CTRL 500','M07 PLUS','P78 CTRL 149','Q42 CONTROL SEGUNDO','Q43 LIBRE','TRONCAL PRINCIPAL']),
            'segmento'=>$faker->randomElement(['NO SEGMENTADO','NUEVO NPP','ORO','PLATA','PLATINO','PYMES']),
            'reclamante'=>$faker->name,
            'email'=> $faker->email,
            'tipo_cliente'=>$faker->randomElement(['EMPRESAS','NEGOCIOS','RESIDENCIAL','TUP']),
            'direccion_postal'=>$faker->address,
            'distrito'=>$faker->randomElement(['LINCE','CHORRILLOS','LOS OLIVOS','COMAS','SAN BORJA','LIMA','SURQUILLO','LA MOLINA','ATE VITARTE','HUANCHACO','AYACUCHO','RIMAC','ATE VITARTE','LA VICTORIA']) ,
            'departamento'=>'LIMA',
            'factura_numero'=>$faker->numberBetween($min=9999999,$max=999999999)
            
            ]);
            }
    }
}
