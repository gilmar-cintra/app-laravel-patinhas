<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OngsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ongs = [
            [
                'nome' => 'Amigos dos Animais',
                'cep' => '12345-678',
                'endereco' => 'Rua dos Animais',
                'numero' => '123',
                'complemento' => 'Sala 1',
                'bairro' => 'Centro',
                'uf' => 'SP',
                'cidade' => 'São Paulo',
                'email' => 'amigosanimais@gmail.com',
                'telefone' => '(11) 1234-5678',
                'password' => Hash::make('password123'),
                'foto' => null,
            ],
            [
                'nome' => 'Patitas Felizes',
                'cep' => '54321-987',
                'endereco' => 'Avenida dos Cachorros',
                'numero' => '456',
                'complemento' => null,
                'bairro' => 'Bairro Feliz',
                'uf' => 'RJ',
                'cidade' => 'Rio de Janeiro',
                'email' => 'patitasfelizes@gmail.com',
                'telefone' => '(21) 9876-5432',
                'password' => Hash::make('password456'),
                'foto' => null,
            ],
            [
                'nome' => 'Anjos de Quatro Patas',
                'cep' => '98765-432',
                'endereco' => 'Rua das Aves',
                'numero' => '789',
                'complemento' => null,
                'bairro' => 'Jardim das Aves',
                'uf' => 'MG',
                'cidade' => 'Belo Horizonte',
                'email' => 'anjosquatropatas@gmail.com',
                'telefone' => '(31) 6543-2109',
                'password' => Hash::make('password789'),
                'foto' => null,
            ],
            [
                'nome' => 'Cães e Gatos Felizes',
                'cep' => '54321-123',
                'endereco' => 'Alameda dos Gatinhos',
                'numero' => '987',
                'complemento' => 'Apto. 3',
                'bairro' => 'Vila dos Cães',
                'uf' => 'RS',
                'cidade' => 'Porto Alegre',
                'email' => 'caesgatosfelizes@gmail.com',
                'telefone' => '(51) 3210-9876',
                'password' => Hash::make('password987'),
                'foto' => null,
            ],
            [
                'nome' => 'Peludos Sem Lar',
                'cep' => '76543-210',
                'endereco' => 'Rua dos Peludos',
                'numero' => '654',
                'complemento' => null,
                'bairro' => 'Vila Peluda',
                'uf' => 'SC',
                'cidade' => 'Florianópolis',
                'email' => 'peludossemlar@gmail.com',
                'telefone' => '(48) 2109-8765',
                'password' => Hash::make('password654'),
                'foto' => null,
            ],
            [
                'nome' => 'Acolhimento Animal',
                'cep' => '23456-789',
                'endereco' => 'Travessa dos Bichos',
                'numero' => '321',
                'complemento' => 'Bloco B',
                'bairro' => 'Jardim dos Animais',
                'uf' => 'BA',
                'cidade' => 'Salvador',
                'email' => 'acolhimentoanimal@gmail.com',
                'telefone' => '(71) 8765-4321',
                'password' => Hash::make('password321'),
                'foto' => null,
            ],
            [
                'nome' => 'Resgate Amoroso',
                'cep' => '87654-321',
                'endereco' => 'Avenida dos Amores',
                'numero' => '987',
                'complemento' => 'Casa 2',
                'bairro' => 'Vila do Amor',
                'uf' => 'PE',
                'cidade' => 'Recife',
                'email' => 'resgateamoroso@gmail.com',
                'telefone' => '(81) 4321-8765',
                'password' => Hash::make('password987'),
                'foto' => null,
            ],
            [
                'nome' => 'Aconchego Animal',
                'cep' => '67890-123',
                'endereco' => 'Rua dos Aconchegos',
                'numero' => '456',
                'complemento' => null,
                'bairro' => 'Bairro Aconchegante',
                'uf' => 'PR',
                'cidade' => 'Curitiba',
                'email' => 'aconchegoanimal@gmail.com',
                'telefone' => '(41) 9012-3456',
                'password' => Hash::make('password456'),
                'foto' => null,
            ],
            [
                'nome' => 'Adote um Amigo',
                'cep' => '98765-432',
                'endereco' => 'Praça dos Amigos',
                'numero' => '321',
                'complemento' => null,
                'bairro' => 'Centro',
                'uf' => 'GO',
                'cidade' => 'Goiânia',
                'email' => 'adoteumamigo@gmail.com',
                'telefone' => '(62) 3456-7890',
                'password' => Hash::make('password321'),
                'foto' => null,
            ],
            [
                'nome' => 'SOS Peludos',
                'cep' => '56789-012',
                'endereco' => 'Alameda dos Peludos',
                'numero' => '543',
                'complemento' => 'Fundos',
                'bairro' => 'Jardim Peludo',
                'uf' => 'MT',
                'cidade' => 'Cuiabá',
                'email' => 'sospeludos@gmail.com',
                'telefone' => '(65) 9012-3456',
                'password' => Hash::make('password543'),
                'foto' => null,
            ],
        ];

        DB::table('ongs')->insert($ongs);
    }
}
