<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Atributo;

class AtributoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $atributos = [
            ["nombre"=>"Limpieza", "criterio_id"=>1],
            ["nombre"=>"Pintura", "criterio_id"=>1],
            ["nombre"=>"Estado de carrocería", "criterio_id"=>1],
            ["nombre"=>"Fascia delantera mod.", "criterio_id"=>1],
            ["nombre"=>"Faros", "criterio_id"=>1],
            ["nombre"=>"Modificaciones de cofre ", "criterio_id"=>1],
            ["nombre"=>"Apertura de cofre modificado", "criterio_id"=>1],
            ["nombre"=>"Fascia trasera mod", "criterio_id"=>1],
            ["nombre"=>"Alerones", "criterio_id"=>1],
            ["nombre"=>"Calaveras modificadas", "criterio_id"=>1],
            ["nombre"=>"Estribos", "criterio_id"=>1],
            ["nombre"=>"Espejos laterales mod", "criterio_id"=>1],
            ["nombre"=>"Aerografía", "criterio_id"=>1],
            ["nombre"=>"Quemacocos", "criterio_id"=>1],
            ["nombre"=>"Tomas de aire en la carrocería", "criterio_id"=>1],
            ["nombre"=>"Rasurado de carrocería", "criterio_id"=>1],
            ["nombre"=>"Apertura de puertas mod", "criterio_id"=>1],
            ["nombre"=>"Limpieza", "criterio_id"=>2],
            ["nombre"=>"Volante deportivo", "criterio_id"=>2],
            ["nombre"=>"Pedales", "criterio_id"=>2],
            ["nombre"=>"Palanca de velocidades", "criterio_id"=>2],
            ["nombre"=>"Puño de freno de mano", "criterio_id"=>2],
            ["nombre"=>"Caratulas modificadas", "criterio_id"=>2],
            ["nombre"=>"Tacómetro adicional", "criterio_id"=>2],
            ["nombre"=>"Medidores funcionales", "criterio_id"=>2],
            ["nombre"=>"Estética de interiores", "criterio_id"=>2],
            ["nombre"=>"Asientos", "criterio_id"=>2],
            ["nombre"=>"Cinturones mod", "criterio_id"=>2],
            ["nombre"=>"Iluminación", "criterio_id"=>2],
            ["nombre"=>"Unidad principal", "criterio_id"=>3],
            ["nombre"=>"Procesadores", "criterio_id"=>3],
            ["nombre"=>"Amplificadores", "criterio_id"=>3],
            ["nombre"=>"Bocinas", "criterio_id"=>3],
            ["nombre"=>"Subwoofers", "criterio_id"=>3],
            ["nombre"=>"Pantallas", "criterio_id"=>3],
            ["nombre"=>"Video juegos", "criterio_id"=>3],
            ["nombre"=>"Iluminación", "criterio_id"=>3],
            ["nombre"=>"Creatividad, estética y calidad", "criterio_id"=>3],
            ["nombre"=>"Limpieza", "criterio_id"=>4],
            ["nombre"=>"Filtro de aire de alto flujo", "criterio_id"=>4],
            ["nombre"=>"Barra de torsión", "criterio_id"=>4],
            ["nombre"=>"Piezas del motor pintadas", "criterio_id"=>4],
            ["nombre"=>"Tolvas o tapas de aluminio en depósitos", "criterio_id"=>4],
            ["nombre"=>"Cales de bujías", "criterio_id"=>4],
            ["nombre"=>"Cubierta de hilo de acero", "criterio_id"=>4],
            ["nombre"=>"Sistema de escape", "criterio_id"=>4],
            ["nombre"=>"Polea graduada", "criterio_id"=>4],
            ["nombre"=>"webers", "criterio_id"=>4],
            ["nombre"=>"Turbo", "criterio_id"=>4],
            ["nombre"=>"Nos funcional", "criterio_id"=>4],
            ["nombre"=>"Iluminación", "criterio_id"=>4],
            ["nombre"=>"headers", "criterio_id"=>4],
            ["nombre"=>"Limpieza", "criterio_id"=>5],
            ["nombre"=>"Rines y llantas", "criterio_id"=>5],
            ["nombre"=>"Amortiguadores deportivos", "criterio_id"=>5],
            ["nombre"=>"Resortes deportivos", "criterio_id"=>5],
            ["nombre"=>"Suspensión pintada", "criterio_id"=>5],
            ["nombre"=>"Suspensión cromada", "criterio_id"=>5],
            ["nombre"=>"Suspensión de aire", "criterio_id"=>5],
            ["nombre"=>"Discos delanteros y traseros", "criterio_id"=>5],
            ["nombre"=>"Calipers pintados", "criterio_id"=>5],
            ["nombre"=>"Caliper cromados", "criterio_id"=>5],
            ["nombre"=>"Tambores pintados", "criterio_id"=>5],

        
        ]; 
        foreach($atributos as $atributo)
        {
            Atributo::create($atributo);
        }
    }
}

    
   
   
    
   
    
    
   
    
    
  
    
    
    
   
  
   
   
   
   
  
    
  
    
     

    
    
   
    
    
    
   
  
     

    
   
   
    
  
    
  
    
   
  
    
   
 
   
   
  
  
    
     

