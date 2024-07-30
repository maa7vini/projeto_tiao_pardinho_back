<?php

namespace Database\Seeders;

use App\Models\Faixa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaixaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(!Faixa::where('nome', 'Pagode em Brasilia')->first()){
            Faixa::create([
                'nome' => 'Pagode em Brasilia',
                'album_id' => '1'
            ]);
        }
        if(!Faixa::where('nome', 'Boi Soberano')->first()){
            Faixa::create([
                'nome' => 'Boi Soberano',
                'album_id' => '2'
            ]);
        }
        if(!Faixa::where('nome', 'Travessia do Araguaia')->first()){
            Faixa::create([
                'nome' => 'Travessia do Araguaia',
                'album_id' => '3'
            ]);
        }
        if(!Faixa::where('nome', 'Chora Viola')->first()){
            Faixa::create([
                'nome' => 'Chora Viola',
                'album_id' => '4'
            ]);
        }
        if(!Faixa::where('nome', 'Armagurado')->first()){
            Faixa::create([
                'nome' => 'Armagurado',
                'album_id' => '5'
            ]);
        }
        if(!Faixa::where('nome', 'Cabelos Cor de Prata')->first()){
            Faixa::create([
                'nome' => 'Cabelos Cor de Prata',
                'album_id' => '3'
            ]);
        }
        if(!Faixa::where('nome', 'Terra Roxa')->first()){
            Faixa::create([
                'nome' => 'Terra Roxa',
                'album_id' => '6'
            ]);
        }
        if(!Faixa::where('nome', 'Oi Paixão')->first()){
            Faixa::create([
                'nome' => 'Oi Paixão',
                'album_id' => '7'
            ]);
        }
    }
}
