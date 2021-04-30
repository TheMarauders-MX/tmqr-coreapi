<?php

namespace Database\Seeders;

use App\Models\Area;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $areas = Area::all();

        DB::table('products')->insert([
            'name' => 'Pantalla Sony Smart TV de 85 Pulgadas 4K UHD XBR-85X800H',
            'route' => $areas->get(0)->route,
            'current_price' => 48213.00,
            'old_price' => 55255.00,
            'detail' => 'Con la pantalla X800H disfruta de más de 5000 aplicaciones gracias a Android TV controlando la TV solo con tu voz. Más que una Smart TV por su amplia compatibilidad con diferentes asistentes de voz: Android TV con Google Assistant (controla el TV con los comandos por voz), Apple Airplay2 (envía contenido desde tu iphone, ipad o MAC hacia la TV) y Alexa (dispositivos y asistente digital). Imágenes en 4K ricas en detalles gracias a la tecnología exclusiva del 4K HDR Processor X1. 4K X-Reality PRO mejora las imágenes grabadas en 2K y en Full HD a una resolución cercana a 4K. TRILUMINOS reproduce más colores que una televisión convencional. Motionflow logra que el movimiento sea fluido y con menos borrosidad en las escenas de acción rápida. Dolby Vision crea una experiencia de cine inmersiva y con Dolby Atmos sentirás un sonido de alta calidad. La bocina X-Balanced Speaker diseñada para complementar la calidad de sonido ofreciéndote música y películas con un sonido nítido (disponible en las televisiones de más de 55 pulgadas)',
            'scoring' => 5,
            'created_at' => now(),
            'updated_at' => now(),
            'area_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => 'Pantalla LG OLED TV AI ThinQ 4K de 55 Pulgadas, Modelo OLED55BXPUA',
            'route' => $areas->get(0)->route,
            'current_price' => 22999.00,
            'old_price' => 24899.00,
            'detail' => 'LG OLED TV con PiXELES DE AUTOILUMINACIÓN disfruta de los negros más profundos y colores más ricos. Su procesador α7 Gen3 AI Processor 4K detecta automáticamente 3 carácteristicas principales del contenido para entregar la máxima mejora en AI Picture & AI Sound Pro. Transforma tu televisor en un centro de Inteligencia Artificial con AI ThinQ. Con Google Assistant & Amazon Alexa incorporados solicita lo que quieras, también cuenta con Apple Air Play y Apple Home Kit. Ten entretenimiento ilimitado con la mejor calidad en imagen y audio con Dolby Vision IQ, Dolby Atmos y FILMMAKER MODE™. Es el único con compatibilidad NVIDIA G-SYNC, HGiG y HDMI 2.1, cuenta con un rápido tiempo de respuesta y bajo Input Lag. Con Sports Alert que te notificará antes, durante y después de los juegos de tu equipo favorito y Bluetooth Surround te permite un ambiente deportivo envolvente al poder conectar 2 dispositivos Bluetooth simultáneos.',
            'scoring' => 4,
            'created_at' => now(),
            'updated_at' => now(),
            'area_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => 'Pantalla Samsung Smart TV de 85 Pulgadas 8K QN85QN900AFXZX',
            'route' => $areas->get(0)->route,
            'current_price' => 371619.75,
            'detail' => 'Contraste ultrafino en 8K que revela todos los detalles ocultos., La potente mejora de 8K AI garantiza que siempre obtenga una resolución completa de 8K',
            'scoring' => 4,
            'created_at' => now(),
            'updated_at' => now(),
            'area_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => 'Pantalla LG Smart TV LED de 32 Pulgadas HD Modelo 32LM630BPUB',
            'route' => $areas->get(0)->route,
            'current_price' => 5199.00,
            'detail' => 'La pantalla LG HD 32 pulgadas 32lm630bpub potencializará tu experiencia de entretenimiento a cada momento, ya que reúne una selección de características que te permitirán disfrutar de inteligencia artificial en tu TV, con imágenes de extraordinaria calidad, vibrantes tonalidades, contrastes y brillo, envolvente sonido así como poderosa conectividad que te permitirá disfrutar de tu contenido favorito',
            'scoring' => 5,
            'created_at' => now(),
            'updated_at' => now(),
            'area_id' => 1
        ]);

        $products = Product::all();

        foreach ($products as $product)
        {
            $product->route .= '/';
            $product->route .= $product->id;
            $product->save();
        }
    }
}
