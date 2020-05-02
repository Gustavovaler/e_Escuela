<?php

use Illuminate\Database\Seeder;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $array = [
            'Lengua',
            'Literatura',
            'Matemáticas',
            'Historia',
            'Geografia',
            'Idioma Extranjero',
            'Cs. Sociales',
            'Religión',
            'Ed. Tecnológica',
            'Ed. Ciudadana',
            'Música',
            'Artes Visuales',
            'Ed. Fisica',
            'Biología',
            'F.É y Ciudadana',
            'Tec. de la información',
            'Economía',
            'Fisco/Quimica',
            'EDI',
            'Laboratorio',
            'Taller prod. en lenguajes',
            'Educación y sociedad',
            'Historia de la vida y la tierra.',
            'Geografía física argentina',
            'Instrucción cívica y derecho usual',
            'Psicología general',
            'Química orgánica',
            'Cultura musical y artística',
            'Lógica y Metodología de la Ciencia',
            'E.S.E.A.',
            'Geografía política y económica',
            'Ciencias biológicas',
            'Gramática histórica española',
            'Lógica y Metodología de las Ciencias',
            'Geografía Política y Económica Argentina',
            'Historia Argentina',
            'Ciencias del Lenguaje',
            'Espacio y Tiempo Libre',
            'INVESTIGACIÓN LITERARIA',
            'FILOSOFÍA',
            'TECNOLOGÍA DE LA INFORMACIÓN',
            'Física',
            'Quimica',
            'Contabilidad',
            'Otro',
        ];
        foreach ($array as $key) {
            
            DB::table('asignaturas')->insert([

                'asignatura' => $key,
            ]);
        }
    }
}
