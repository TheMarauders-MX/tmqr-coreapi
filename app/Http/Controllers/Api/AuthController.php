<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|max:255',
            'already_user' => 'required|boolean',
            'phone' => 'required|numeric|digits:10',
        ]);

        $user = User::create([
            'email' => $data['email'],
            'already_user' => $data['already_user'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['phone'])
        ]);

        Auth::login($user);

        return ['message' => 'logged in, kinda'];
    }

    public function test(Request $request)
    {
        $product = [
            'name' => 'Pantalla Sony Smart TV de 85 Pulgadas 4K UHD XBR-85X800H',
            'price' => 48213.00,
            'detail' => 'Con la pantalla X800H disfruta de más de 5000 aplicaciones gracias a Android TV controlando la TV solo con tu voz. Más que una Smart TV por su amplia compatibilidad con diferentes asistentes de voz: Android TV con Google Assistant (controla el TV con los comandos por voz), Apple Airplay2 (envía contenido desde tu iphone, ipad o MAC hacia la TV) y Alexa (dispositivos y asistente digital). Imágenes en 4K ricas en detalles gracias a la tecnología exclusiva del 4K HDR Processor X1. 4K X-Reality PRO mejora las imágenes grabadas en 2K y en Full HD a una resolución cercana a 4K. TRILUMINOS reproduce más colores que una televisión convencional. Motionflow logra que el movimiento sea fluido y con menos borrosidad en las escenas de acción rápida. Dolby Vision crea una experiencia de cine inmersiva y con Dolby Atmos sentirás un sonido de alta calidad. La bocina X-Balanced Speaker diseñada para complementar la calidad de sonido ofreciéndote música y películas con un sonido nítido (disponible en las televisiones de más de 55 pulgadas)',
            'images' => [
                'https://ss629.liverpool.com.mx/xl/1095455804_0p.jpg',
                'https://ss629.liverpool.com.mx/xl/1095455804_20p.jpg',
                'https://ss629.liverpool.com.mx/xl/1095455804_2p.jpg',
                'https://ss629.liverpool.com.mx/xl/1095455804_3p.jpg'
            ]
        ];

        return response()->json($product);
    }
}
