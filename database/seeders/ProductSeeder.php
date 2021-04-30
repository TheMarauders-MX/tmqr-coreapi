<?php

namespace Database\Seeders;

use App\Models\Area;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     *  ^(\[|\])
     *  --vacio
     *
     *  \s*\{\n\s*"key": \d*,
     *  \n\nDB::table('products')->insert([
     *
     *  (\s*"name".*\n)
     *  $1    'route' => $areas->get(1)->route,\n
     *
     **/

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $areas = Area::all();

        // Pantallas 1 - 4
        DB::table('products')->insert([
            'name' => 'Pantalla Sony Smart TV de 85 Pulgadas 4K UHD XBR-85X800H',
            'route' => $areas->get(0)->route,
            'old_price' => 55255.00,
            'current_price' => 48213.00,
            'scoring' => 5,
            'detail' => 'Con la pantalla X800H disfruta de más de 5000 aplicaciones gracias a Android TV controlando la TV solo con tu voz. Más que una Smart TV por su amplia compatibilidad con diferentes asistentes de voz: Android TV con Google Assistant (controla el TV con los comandos por voz), Apple Airplay2 (envía contenido desde tu iphone, ipad o MAC hacia la TV) y Alexa (dispositivos y asistente digital). Imágenes en 4K ricas en detalles gracias a la tecnología exclusiva del 4K HDR Processor X1. 4K X-Reality PRO mejora las imágenes grabadas en 2K y en Full HD a una resolución cercana a 4K. TRILUMINOS reproduce más colores que una televisión convencional. Motionflow logra que el movimiento sea fluido y con menos borrosidad en las escenas de acción rápida. Dolby Vision crea una experiencia de cine inmersiva y con Dolby Atmos sentirás un sonido de alta calidad. La bocina X-Balanced Speaker diseñada para complementar la calidad de sonido ofreciéndote música y películas con un sonido nítido (disponible en las televisiones de más de 55 pulgadas)',
            'created_at' => now(),
            'updated_at' => now(),
            'area_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => 'Pantalla LG OLED TV AI ThinQ 4K de 55 Pulgadas, Modelo OLED55BXPUA',
            'route' => $areas->get(0)->route,
            'old_price' => 24899.00,
            'current_price' => 22999.00,
            'scoring' => 4,
            'detail' => 'LG OLED TV con PiXELES DE AUTOILUMINACIÓN disfruta de los negros más profundos y colores más ricos. Su procesador α7 Gen3 AI Processor 4K detecta automáticamente 3 carácteristicas principales del contenido para entregar la máxima mejora en AI Picture & AI Sound Pro. Transforma tu televisor en un centro de Inteligencia Artificial con AI ThinQ. Con Google Assistant & Amazon Alexa incorporados solicita lo que quieras, también cuenta con Apple Air Play y Apple Home Kit. Ten entretenimiento ilimitado con la mejor calidad en imagen y audio con Dolby Vision IQ, Dolby Atmos y FILMMAKER MODE™. Es el único con compatibilidad NVIDIA G-SYNC, HGiG y HDMI 2.1, cuenta con un rápido tiempo de respuesta y bajo Input Lag. Con Sports Alert que te notificará antes, durante y después de los juegos de tu equipo favorito y Bluetooth Surround te permite un ambiente deportivo envolvente al poder conectar 2 dispositivos Bluetooth simultáneos.',
            'created_at' => now(),
            'updated_at' => now(),
            'area_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => 'Pantalla Samsung Smart TV de 85 Pulgadas 8K QN85QN900AFXZX',
            'route' => $areas->get(0)->route,
            'old_price' => 371619.75,
            'current_price' => 371619.75,
            'scoring' => 4,
            'detail' => 'Contraste ultrafino en 8K que revela todos los detalles ocultos., La potente mejora de 8K AI garantiza que siempre obtenga una resolución completa de 8K',
            'created_at' => now(),
            'updated_at' => now(),
            'area_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => 'Pantalla LG Smart TV LED de 32 Pulgadas HD Modelo 32LM630BPUB',
            'route' => $areas->get(0)->route,
            'old_price' => 5199.00,
            'current_price' => 5199.00,
            'scoring' => 5,
            'detail' => 'La pantalla LG HD 32 pulgadas 32lm630bpub potencializará tu experiencia de entretenimiento a cada momento, ya que reúne una selección de características que te permitirán disfrutar de inteligencia artificial en tu TV, con imágenes de extraordinaria calidad, vibrantes tonalidades, contrastes y brillo, envolvente sonido así como poderosa conectividad que te permitirá disfrutar de tu contenido favorito',
            'created_at' => now(),
            'updated_at' => now(),
            'area_id' => 1
        ]);



        // Relojes 5 - 8
        DB::table('products')->insert([
            'name' => 'Reloj Stührling Para Hombre Modelo Meridian Aquadiver 3965 Cuarzo 42mm',
            'route' => $areas->get(1)->route,
            'old_price' => 7998.00,
            'current_price' => 3599.00,
            'scoring' => 5.0,
            'detail' => 'Sin descripcion',
            'created_at' => now(),
            'updated_at' => now(),
            'area_id' => 2
        ]);

        DB::table('products')->insert([
            'name' => 'Reloj Versace Palazzo Empire para hombre PALAZZOG05',
            'route' => $areas->get(1)->route,
            'old_price' => 29400.00,
            'current_price' => 24990.00,
            'scoring' => 5.0,
            'detail' => 'La edición masculina del Best Seller de Versace, Palazzo Empire. Su grabado de grecas destaca sobre el bisel, mientras que el brazalete le brinda un look sofisticado para convertirse en el nuevo “Versace Statement Piece”',
            'created_at' => now(),
            'updated_at' => now(),
            'area_id' => 2
        ]);

        DB::table('products')->insert([
            'name' => 'Smartwatch Amazfit Bip U unisex',
            'route' => $areas->get(1)->route,
            'old_price' => 1599.00,
            'current_price' => 1599.00,
            'scoring' => 5.0,
            'detail' => 'Reloj inteligente con seguimiento completo de salud y estado físico. Pantalla a color HD de 1.43 pulgadas. Te permite medir tu oxigenación, tu nivel de estrés, salud femenina y tu rendimiento físico con sus más de 60 modos de deporte. Con tecnología Bluetooth 5.0',
            'created_at' => now(),
            'updated_at' => now(),
            'area_id' => 2
        ]);

        DB::table('products')->insert([
            'name' => 'Apple Watch Series 6',
            'route' => $areas->get(1)->route,
            'old_price' => 13799.00,
            'current_price' => 13799.00,
            'scoring' => 5.0,
            'detail' => 'Es el dispositivo ideal para llevar una vida saludable. Como el Apple Watch está en tu muñeca, puede hacer cosas que otros dispositivos no pueden hacer. Se convierte en un compañero de entrenamiento que registra todos tus movimientos, te informa sobre tu salud y te mantiene conectado con las personas y las cosas que más te importan. No vas a querer quitarle los ojos de encima. Un futuro más saludable en tu muñeca. Mide tu nivel de oxígeno en la sangre con una app y un sensor revolucionarios. Y no pierdas de vista los datos de tus entrenamientos en la mejorada pantalla Retina siempre activa. Con el Apple Watch Series 6, podrás llevar una vida más saludable, más activa y mejor conectada',
            'created_at' => now(),
            'updated_at' => now(),
            'area_id' => 2
        ]);



        // Mochilas 9 - 12
        DB::table('products')->insert([
            'name' => 'Mochila Tommy Hilfiger negra',
            'route' => $areas->get(3 - 1)->route,
            'old_price' => 2299.00,
            'current_price' => 1609.30,
            'scoring' => 5.0,
            'detail' => 'Sin descripcion',
            'created_at' => now(),
            'updated_at' => now(),
            'area_id' => 3
        ]);

        DB::table('products')->insert([
            'name' => 'Mochila XD Desing Bobby Original jaspeada',
            'route' => $areas->get(3 - 1)->route,
            'old_price' => 3199.00,
            'current_price' => 2239.30,
            'scoring' => 5.0,
            'detail' => 'Sin descripcion',
            'created_at' => now(),
            'updated_at' => now(),
            'area_id' => 3
        ]);

        DB::table('products')->insert([
            'name' => 'Bolso Lacoste gris claro',
            'route' => $areas->get(3 - 1)->route,
            'old_price' => 1990.00,
            'current_price' => 1393.00,
            'scoring' => 5.0,
            'detail' => 'Sin descripcion',
            'created_at' => now(),
            'updated_at' => now(),
            'area_id' => 3
        ]);

        DB::table('products')->insert([
            'name' => 'Set de mochila escolar y cangurera Caterpillar',
            'route' => $areas->get(3 - 1)->route,
            'old_price' => 2198.00,
            'current_price' => 1539.00,
            'scoring' => 5.0,
            'detail' => 'Prepárate para la aventura con nuestro kit CAT mochila + cangurera, el cual cuenta con los mejores diseños y características: Mochila: compartimiento principal con funda acolchada para laptop. Bolsillo frontal con cierre. Tirantes acolchados y ajustables. Medidas alto 45 cm, ancho 14 cm, largo: 30 cm. Cangurera: Dos compartimentos principales con cierre. Bolsillo en la parte posterior con cierre oculto. Llavero desmontable dentro del compartimento principal. Medidas alto 15 cm, ancho: 12 cm, largo: 27 cm',
            'created_at' => now(),
            'updated_at' => now(),
            'area_id' => 3
        ]);



        // Colchones 13 - 16
        DB::table('products')->insert([
            'name' => 'Colchón Restonic Splendid',
            'route' => $areas->get(4 - 1)->route,
            'old_price' => 7049.00,
            'current_price' => 4440.87,
            'scoring' => 4.5,
            'detail' => 'Sin descripcion',
            'created_at' => now(),
            'updated_at' => now(),
            'area_id' => 4
        ]);

        DB::table('products')->insert([
            'name' => 'Colchón Restonic Mosquito Free confort medio',
            'route' => $areas->get(4 - 1)->route,
            'old_price' => 12899.00,
            'current_price' => 7674.90,
            'scoring' => 4.5,
            'detail' => 'Sin descripcion',
            'created_at' => now(),
            'updated_at' => now(),
            'area_id' => 4
        ]);

        DB::table('products')->insert([
            'name' => 'Cabecera PH Muebles Confort',
            'route' => $areas->get(4 - 1)->route,
            'old_price' => 4999.00,
            'current_price' => 3249.35,
            'scoring' => 5.0,
            'detail' => 'Sin descripcion',
            'created_at' => now(),
            'updated_at' => now(),
            'area_id' => 4
        ]);

        DB::table('products')->insert([
            'name' => 'Cabecera Imanol Malmo',
            'route' => $areas->get(4 - 1)->route,
            'old_price' => 22999.00,
            'current_price' => 14949.35,
            'scoring' => 5.0,
            'detail' => 'Sin descripcion',
            'created_at' => now(),
            'updated_at' => now(),
            'area_id' => 4
        ]);



        // 5, Ciclismo 17 - 20
        DB::table('products')->insert([
            'name' => 'Bicicleta Deportiva R 26 Suspensión 21 Velocidades Centurfit',
            'route' => $areas->get(5 -1)->route,
            'old_price' => 4999.00,
            'current_price' => 4299.00,
            'scoring' => 4.5,
            'detail' => '¡Avanza con seguridad! La nueva bicicleta de Centurfit, te garantiza durabilidad y comodidad al mismo tiempo. Al poseer un componente especial crea una interfaz perfecta entre la bicicleta y el ciclista, dando como resultado un trayecto con menos esfuerzo. ¡Muévete sin límites! Cuenta con cambios de velocidad, en un solo movimiento puedes cambiar la rapidez con la que te desplazas de un lugar a otro; y si necesitas frenar, olvídate de dañar tu llanta porque su sistema de frenado es lineal, asegurando el impacto sobre el disco que está elaborado con aluminio aerodinámico. ¡Disfruta al máximo! La bicicleta de Centurfit está diseñada con materiales de la más alta calidad, su asiento MTB acojinado evita la transpiración sin importar el tiempo que se use, es ajustable y soporta aproximadamente 150kg. ¡Alcanza la cima! Posee una suspensión delantera que permite maniobrar en cualquier tipo de terreno, el pedal es de plástico sumamente resistente ideal para incrementar la velocidad en todo momento y no te preocupes por el clima lluvioso, sus materiales son de acero inoxidable. Para todo tipo de terreno',
            'created_at' => now(),
            'updated_at' => now(),
            'area_id' => 5
        ]);

        DB::table('products')->insert([
            'name' => 'Bicicleta Ghost Claw R29',
            'route' => $areas->get(5 -1)->route,
            'old_price' => 7798.00,
            'current_price' => 5458.60,
            'scoring' => 4.5,
            'detail' => 'Te presentamos una cross-country de alto rendimiento y resistente. Con desviador trasero indexado Shimano de 7 velocidades y de 3 velocidades adelante, además de 21 velocidades en sus palancas, podrás cruzar cualquier obstáculo',
            'created_at' => now(),
            'updated_at' => now(),
            'area_id' => 5
        ]);

        DB::table('products')->insert([
            'name' => 'Bicicleta Mercurio DS Kaizer R26',
            'route' => $areas->get(5 -1)->route,
            'old_price' => 5299.00,
            'current_price' => 4504.15,
            'scoring' => 4.5,
            'detail' => 'Sin descripcion',
            'created_at' => now(),
            'updated_at' => now(),
            'area_id' => 5
        ]);

        DB::table('products')->insert([
            'name' => 'Bicicleta Mercurio MTB Ranger Dim 2 R26',
            'route' => $areas->get(5 -1)->route,
            'old_price' => 6599.00,
            'current_price' => 5609.15,
            'scoring' => 4.5,
            'detail' => 'Sin descripcion',
            'created_at' => now(),
            'updated_at' => now(),
            'area_id' => 5
        ]);



        // 6, Celulares 21 - 24
        DB::table('products')->insert([
            'name' => 'Huawei Y7A de 64 GB LCD 6.6 Pulgadas Telcel',
            'route' => $areas->get(6 -1)->route,
            'old_price' => 5299.00,
            'current_price' => 5299.00,
            'scoring' => 5.0,
            'detail' => 'Sin descripcion',
            'created_at' => now(),
            'updated_at' => now(),
            'area_id' => 6
        ]);

        DB::table('products')->insert([
            'name' => 'Samsung Galaxy A51 de 128 GB Super Amoled 6.5 Pulgadas Telcel',
            'route' => $areas->get(6 -1)->route,
            'old_price' => 8299.00,
            'current_price' => 7889.00,
            'scoring' => 5.0,
            'detail' => 'Sin descripcion',
            'created_at' => now(),
            'updated_at' => now(),
            'area_id' => 6
        ]);

        DB::table('products')->insert([
            'name' => 'Motorola G9 Power de 128 GB TouchScreen 6.7 Pulgadas Telcel',
            'route' => $areas->get(6 -1)->route,
            'old_price' => 6299.00,
            'current_price' => 6299.00,
            'scoring' => 5.0,
            'detail' => 'Sin descripcion',
            'created_at' => now(),
            'updated_at' => now(),
            'area_id' => 6
        ]);

    DB::table('products')->insert([
        'name' => 'LG K71 de 128 GB LCD 6.8 Pulgadas Telcel',
        'route' => $areas->get(6 -1)->route,
        'old_price' => 8999.00,
        'current_price' => 7989.00,
        'scoring' => 4.0,
        'detail' => 'Sin descripcion',
        'created_at' => now(),
        'updated_at' => now(),
        'area_id' => 6
    ]);

    // 7, Salas 25 - 28
    DB::table('products')->insert([
        'name' => 'Sala Modular Dimex estilo contemporáneo de loneta',
        'route' => $areas->get(7 -1)->route,
        'old_price' => 22499.00,
        'current_price' => 14624.35,
        'scoring' => 4.5,
        'detail' => 'Estilo contemporáneo, combina con todo estilo modernista de vanguardia, producto durable que se adapta a la decoración de moda, para toda persona que busca estilo y diseño',
        'created_at' => now(),
        'updated_at' => now(),
        'area_id' => 7
    ]);

    DB::table('products')->insert([
        'name' => 'Sofá h by haus Akron Mid Century de tela',
        'route' => $areas->get(7 -1)->route,
        'old_price' => 14999.00,
        'current_price' => 11999.20,
        'scoring' => 5.0,
        'detail' => 'Sofá es una pieza excepcional para los amantes del Mid Century ya que representa diseño, confort y estabilidad en él, su revestimiento intemporal cautivara definitivamente tu salón y su acojinamiento será casi indescriptible, como ornamento principal los cinturones de piel nos ayudaran a completar éste look 2021',
        'created_at' => now(),
        'updated_at' => now(),
        'area_id' => 7
    ]);

    DB::table('products')->insert([
        'name' => 'Sillón Artdeco estilo Contemporáneo de madera de pino',
        'route' => $areas->get(7 -1)->route,
        'old_price' => 5999.00,
        'current_price' => 3899.35,
        'scoring' => 5.0,
        'detail' => 'Descubre el sillón Artdeco LCY que con su diseño minimalista será la pieza ideal para complementar tu sala o estancia favorita, la variedad de colores que podrás encontrar te da la versatilidad ideal ya que podrás elegir el que mejor se ajuste a tu estilo, así como a la decoración de tu hogar. Con el sillón Artdeco LCY tendrás el diseño ideal para una tarde relajada en tu espacio favorito, además de agregar modernidad a tu decoración',
        'created_at' => now(),
        'updated_at' => now(),
        'area_id' => 7
    ]);

    DB::table('products')->insert([
        'name' => 'Sala Modular Gaudele estilo contemporáneo de tela',
        'route' => $areas->get(7 -1)->route,
        'old_price' => 35999.00,
        'current_price' => 23399.35,
        'scoring' => 4.5,
        'detail' => '¡Renuévate! Con la sala Gaudele Basari contemporánea de madera tendrás un diseño que le dará un estilo único a tu espacio, porque está conformada por 3 piezas que podrás acomodar como tú lo decidas, por lo que te permitirá hacer los cambios que desees, si quieres darle un giro, así que juntos o por separado esta sala Gaudele Basari contemporánea de madera lucirá fantástica',
        'created_at' => now(),
        'updated_at' => now(),
        'area_id' => 7
    ]);

    // 8, Bolsas Clutch 29 - 32
    DB::table('products')->insert([
        'name' => 'Bolsa clutch Accessorize',
        'route' => $areas->get(8 -1)->route,
        'old_price' => 699.00,
        'current_price' => 489.30,
        'scoring' => 5.0,
        'detail' => 'Sin descripcion',
        'created_at' => now(),
        'updated_at' => now(),
        'area_id' => 8
    ]);

    DB::table('products')->insert([
        'name' => 'Bolsa clutch Sasha broche texturizada',
        'route' => $areas->get(8 -1)->route,
        'old_price' => 279.00,
        'current_price' => 195.30,
        'scoring' => 5.0,
        'detail' => 'Sin descripcion',
        'created_at' => now(),
        'updated_at' => now(),
        'area_id' => 8
    ]);

    DB::table('products')->insert([
        'name' => 'Bolsa clutch Sasha broche',
        'route' => $areas->get(8 -1)->route,
        'old_price' => 279.00,
        'current_price' => 195.30,
        'scoring' => 5.0,
        'detail' => 'Sin descripcion',
        'created_at' => now(),
        'updated_at' => now(),
        'area_id' => 8
    ]);

    DB::table('products')->insert([
        'name' => 'Bolsa clutch Accessorize rosa',
        'route' => $areas->get(8 -1)->route,
        'old_price' => 699.00,
        'current_price' => 489.30,
        'scoring' => 5.0,
        'detail' => 'Sin descripcion',
        'created_at' => now(),
        'updated_at' => now(),
        'area_id' => 8
    ]);

    // 9, Motos 33 - 36
    DB::table('products')->insert([
        'name' => 'Motocicleta Bajaj Dominar 250cc 2021',
        'route' => $areas->get(9 -1)->route,
        'old_price' => 86499.00,
        'current_price' => 69199.20,
        'scoring' => 5.0,
        'detail' => 'Sin descripcion',
        'created_at' => now(),
        'updated_at' => now(),
        'area_id' => 9
    ]);

    DB::table('products')->insert([
        'name' => 'Motocicleta Veloci Xeverus Pro XR 250cc 2021',
        'route' => $areas->get(9 -1)->route,
        'old_price' => 53499.00,
        'current_price' => 36999.00,
        'scoring' => 5.0,
        'detail' => 'Puerto de carga USB, protector de motor, espejos de aluminio, faro de luz xenón, direccionales luz led',
        'created_at' => now(),
        'updated_at' => now(),
        'area_id' => 9
    ]);

    DB::table('products')->insert([
        'name' => 'Motocicleta Italika Vitalia 149cc 2021',
        'route' => $areas->get(9 -1)->route,
        'old_price' => 32819.00,
        'current_price' => 27896.15,
        'scoring' => 5.0,
        'detail' => 'Una motoneta de diseño retro, ligera y fácil de manejar, con ella destacarás tu estilo y personalidad en todos tus destinos',
        'created_at' => now(),
        'updated_at' => now(),
        'area_id' => 9
    ]);

    DB::table('products')->insert([
        'name' => 'Motocicleta Italika X150 G 149.6cc 2021',
        'route' => $areas->get(9 -1)->route,
        'old_price' => 28039.00,
        'current_price' => 25235.10,
        'scoring' => 5.0,
        'detail' => 'Haz de tus días algo más divertido a bordo de esta moto fácil de manejar, es ideal para llegar a tu destino',
        'created_at' => now(),
        'updated_at' => now(),
        'area_id' => 9
    ]);

    // 10, Maletas 37 - 40
    DB::table('products')->insert([
        'name' => 'Maleta American Tourister grande Sunside negra',
        'route' => $areas->get(10 -1)->route,
        'old_price' => 4299.00,
        'current_price' => 3009.30,
        'scoring' => 5.0,
        'detail' => 'Utiliza la maleta American Tourister grande Sunside negra para llevar en ella esas piezas básicas que necesitas para el gimnasio o al salir de viaje; su rígida estructura, en conjunto con su perfecto espacio de almacenamiento la convierte en una opción ideal para ti. Utiliza la maleta American Tourister grande Sunside negra para hacer cada uno de tus viajes un momento práctico y lleno de funcionalidad',
        'created_at' => now(),
        'updated_at' => now(),
        'area_id' => 10
    ]);

    DB::table('products')->insert([
        'name' => 'Maleta CLOE Inime',
        'route' => $areas->get(10 -1)->route,
        'old_price' => 3599.00,
        'current_price' => 2519.30,
        'scoring' => 5.0,
        'detail' => 'Organiza en esta maleta CLOE Inime tanto tus prendas como artículos personales, porque este increíble diseño cuenta con los compartimientos idóneos para que tengas todo bajo control, además debido a su candado TSA, podrás viajar con la tranquilidad de que tu maleta CLOE Inime cuenta con los estándares de seguridad adecuados. Muestra todo tu estilo con los detalles que posee esta maleta CLOE Inime como sus increíbles colores, ruedas que giran 360° y asa retráctil para un práctico deslizamiento, sin duda será tu mejor compañera de aventuras',
        'created_at' => now(),
        'updated_at' => now(),
        'area_id' => 10
    ]);

    DB::table('products')->insert([
        'name' => 'Maleta American Tourister Curio',
        'route' => $areas->get(10 -1)->route,
        'old_price' => 4499.00,
        'current_price' => 3149.30,
        'scoring' => 5.0,
        'detail' => 'Con la maleta American Tourister Curio podrás redefinir el concepto de estilo y simultánea practicidad. Déjate sorprender por el conjunto de características que este modelo reúne, como dimensiones que te permitirán guardar tus prendas y complementos con espacio perfecto, compartimentos que maximizarán el orden interior, toque ideal de rigidez, ruedas giratorias a 360° que te dará oportunidad de desplazarte con mayor comodidad y candado TSA que le brindará un extraordinario toque de protección a su interior. La maleta American Tourister Curio así como extraordinarios complementos para tus viajes y aventuras más especiales los encontrarás solo en Liverpool',
        'created_at' => now(),
        'updated_at' => now(),
        'area_id' => 10
    ]);

    DB::table('products')->insert([
        'name' => 'Maleta Peak Tour chica Amberes rosa',
        'route' => $areas->get(10 -1)->route,
        'old_price' => 2499.00,
        'current_price' => 1749.00,
        'scoring' => 5.0,
        'detail' => 'Equipaje vertical de 19 pulgadas perfecto para llevar abordo,sistema de 8 ruedas con giro de 360 grados, material POLICARBONATO sumamente resistente con novedoso diseño , cuenta con candado de combinacion integrado , organizadores internos y correas elasticas, compartimento principal con cierre',
        'created_at' => now(),
        'updated_at' => now(),
        'area_id' => 10
    ]);

    // 11, Corbatas 41 - 44
    DB::table('products')->insert([
        'name' => 'Corbata Tommy Hilfiger regular rosa a lunares',
        'route' => $areas->get(11 -1)->route,
        'old_price' => 999.00,
        'current_price' => 699.30,
        'scoring' => 5.0,
        'detail' => 'Sin descripcion',
        'created_at' => now(),
        'updated_at' => now(),
        'area_id' => 11
    ]);

    DB::table('products')->insert([
        'name' => 'Corbata JBE extra slim seda negra',
        'route' => $areas->get(11 -1)->route,
        'old_price' => 799.00,
        'current_price' => 559.30,
        'scoring' => 5.0,
        'detail' => 'Porta la corbata Oscar de la Renta extra slim seda negra con un atuendo formal, ya sea que vistas un traje completo o decidas armar tu propio conjunto, sin duda la corbata Oscar de la Renta extra slim seda negra debe ser parte de tu outfit, porque le aportará elegancia y sofisticación gracias a su textura suave como a su grosor, te verás increíble. Si deseas lucir esta corbata Oscar de la Renta extra slim seda negra con una vestimenta casual, no dudes en hacerlo, porque le aportará un toque de formalidad, atrévete a hacer tendencia con un estilo único que solo tú puedes llevar al máximo',
        'created_at' => now(),
        'updated_at' => now(),
        'area_id' => 11
    ]);

    DB::table('products')->insert([
        'name' => 'Corbata Olimpo regular seda rosa con diseño gráfico',
        'route' => $areas->get(11 -1)->route,
        'old_price' => 999.00,
        'current_price' => 69.930,
        'scoring' => 5.0,
        'detail' => 'Sin descripcion',
        'created_at' => now(),
        'updated_at' => now(),
        'area_id' => 11
    ]);

    DB::table('products')->insert([
        'name' => 'Corbata John Henry regular a lunares',
        'route' => $areas->get(11 -1)->route,
        'old_price' => 299.00,
        'current_price' => 209.30,
        'scoring' => 5.0,
        'detail' => '4 veces más detalle que Full HD, LG UHD ofrece imágenes 4K reales con colores vivos y detalles finos. Con amplio angulo de visión mira tus contenidos favoritos con colores espectacularmente, sin importar dónde te sientes. El Procesador Quad Core Processor 4K elimina el ruido, creando color y contraste más dinámico, por lo que las imágenes de baja resolución se amplían y se reproducen con calidad cercana a 4K. Tu televisor sera un centro de inteligencia artificial con AI ThinQ. Google Assistant & Amazon Alexa incorporados. También cuenta con Apple Air Play y Apple Home Kit. Entretenimiento ilimitado de imagen y audio con Filmmaker Mode. Cuenta con Active HDR que proporcionan una calidad de imagen óptima al ajustar los principales formatos HDR compatibles HLG y HDR 10. Sports Alert te notificará antes, durante y después de los juegos de tu equipo favorito y Bluetooth Surround te permite un ambiente deportivo envolvente al poder conectar 2 dispositivos Bluetooth simultáneos',
        'created_at' => now(),
        'updated_at' => now(),
        'area_id' => 11
    ]);

    // 12, Paraguas mujer 45 - 48
    DB::table('products')->insert([
        'name' => 'Paraguas liso Ezpeleta',
        'route' => $areas->get(12 -1)->route,
        'old_price' => 799.00,
        'current_price' => 559.30,
        'scoring' => 4.5,
        'detail' => 'Con el paraguas Ezpeleta liso la lluvia no te tomará por sorpresa. Descubre solo en Liverpool este increíble complemento, que reúne extraordinarias características, como dimensiones perfectas, materiales de ideal resistencia, varillas que permitirán cerrarlo con mayor facilidad, bordes en contraste ideal y mango ergonómico, que te permitirá sujetarlo con total comodidad. Muestra tu estilo a cada momento y mantente protegido de la lluvia, con el paraguas Ezpeleta liso',
        'created_at' => now(),
        'updated_at' => now(),
        'area_id' => 12
    ]);

    DB::table('products')->insert([
        'name' => 'Paraguas LIEB negro reversible',
        'route' => $areas->get(12 -1)->route,
        'old_price' => 399.00,
        'current_price' => 279.30,
        'scoring' => 5.0,
        'detail' => 'Sin descripcion',
        'created_at' => now(),
        'updated_at' => now(),
        'area_id' => 12
    ]);

    DB::table('products')->insert([
        'name' => 'Paraguas Gotta a lunares',
        'route' => $areas->get(12 -1)->route,
        'old_price' => 699.00,
        'current_price' => 489.30,
        'scoring' => 5.0,
        'detail' => 'Prepárese para la temporada de lluvias con este paraguas de la marca Gotta. Se abre y se cierra rápidamente con su mecanismo automático para la apertura y cierre. Diseño juvenil con detalles de calidad, y disponible en varios colores a la moda. Este paraguas cabe prácticamente en cualquier bolsa y en la mayoría de bolsillos de chamarras y abrigos, para que la lluvia no le agarre por sorpresa',
        'created_at' => now(),
        'updated_at' => now(),
        'area_id' => 12
    ]);

    DB::table('products')->insert([
        'name' => 'Paraguas Betty Boop reversible',
        'route' => $areas->get(12 -1)->route,
        'old_price' => 649.00,
        'current_price' => 584.00,
        'scoring' => 5.0,
        'detail' => 'Sin descripcion',
        'created_at' => now(),
        'updated_at' => now(),
        'area_id' => 12
    ]);

        $products = Product::all();

        foreach ($products as $product) {
            $product->route .= '/';
            $product->route .= $product->id;
            $product->save();
        }
    }
}
