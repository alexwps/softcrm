<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttendanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $attendances = [
            ['client_id' => 1, 'type_id' => 1, 'description' => 'Consulta inicial sobre serviços.', 'status' => 'Ativo'],
            ['client_id' => 2, 'type_id' => 2, 'description' => 'Revisão de contrato e propostas.', 'status' => 'Em espera'],
            ['client_id' => 3, 'type_id' => 1, 'description' => 'Acompanhamento mensal.', 'status' => 'Finalizado'],
            ['client_id' => 4, 'type_id' => 3, 'description' => 'Discussão sobre atualizações de serviço.', 'status' => 'Ativo'],
            ['client_id' => 5, 'type_id' => 2, 'description' => 'Solicitação de suporte técnico.', 'status' => 'Em espera'],
            ['client_id' => 1, 'type_id' => 3, 'description' => 'Orientação para novos processos.', 'status' => 'Finalizado'],
            ['client_id' => 2, 'type_id' => 1, 'description' => 'Suporte em novos projetos.', 'status' => 'Ativo'],
            ['client_id' => 3, 'type_id' => 2, 'description' => 'Consulta para renovação de contrato.', 'status' => 'Finalizado'],
            ['client_id' => 4, 'type_id' => 1, 'description' => 'Treinamento de equipe.', 'status' => 'Em espera'],
            ['client_id' => 5, 'type_id' => 3, 'description' => 'Avaliação de resultados.', 'status' => 'Ativo'],
        ];

        DB::table('attendances')->insert($attendances);
    }
}
