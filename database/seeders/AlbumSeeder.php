<?php

namespace Database\Seeders;

use App\Models\Album;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(!Album::where('nome', 'Dose Dupla')->first()){
            Album::create([
                'nome' => 'Dose Dupla',
                'capa_album' => 'https://m.media-amazon.com/images/I/61MDBDpwGIL._UF1000,1000_QL80_.jpg'
            ]);
        }
        if(!Album::where('nome', 'Boi Soberano')->first()){
            Album::create([
                'nome' => 'Boi Soberano',
                'capa_album' => 'https://i.scdn.co/image/ab67616d00001e02231a1e3923acf904eb7fc66f'
            ]);
        }
        if(!Album::where('nome', 'Modas de Viola Classe Volume 2')->first()){
            Album::create([
                'nome' => 'Modas de Viola Classe Volume 2',
                'capa_album' => 'https://http2.mlstatic.com/D_NQ_NP_16191-MLB20115537648_062014-O.webp'
            ]);
        }
        if(!Album::where('nome', 'Dose Dupla (Vol 11)')->first()){
            Album::create([
                'nome' => 'Dose Dupla (Vol 11)',
                'capa_album' => 'https://cdns-images.dzcdn.net/images/cover/02b0e02a9f1ed5fb87d1b9bddbb852d6/500x500.jpg'
            ]);
        }
        if(!Album::where('nome', 'Golpe de Mestre')->first()){
            Album::create([
                'nome' => 'Golpe de Mestre',
                'capa_album' => 'https://cdns-images.dzcdn.net/images/cover/f857e74671c4de3b0ad2c1242bad1ece/1900x1900-000000-80-0-0.jpg'
            ]);
        }
        if(!Album::where('nome', '80 Anos de Música Sertaneja')->first()){
            Album::create([
                'nome' => '80 Anos de Música Sertaneja',
                'capa_album' => 'https://is1-ssl.mzstatic.com/image/thumb/Music118/v4/cc/4b/2a/cc4b2ac4-3f5e-cf49-a882-4a70d495789c/825646903498.jpg/1200x1200bf-60.jpg'
            ]);
        }
        if(!Album::where('nome', 'Gigantes')->first()){
            Album::create([
                'nome' => 'Gigantes',
                'capa_album' => 'https://m.media-amazon.com/images/I/71p0xgRaPGL._UF1000,1000_QL80_.jpg'
            ]);
        }
    }
}
