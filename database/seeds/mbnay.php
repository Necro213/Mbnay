<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class mbnay extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('principal_page')->insert([
            'idUsuario' => 13,
            'telefono' => '(311) 2141926 ',
            'horario' => ' 9am-6pm  Lunes-Viernes; 9am-2pm Sabado',
            'FSC1title' => ' Excelente servicio',
            'FSC1content' => 'Contamos con asesores profesionales, dispuestos a superar sus expectativas.',
            'FSC1image' => 'not',
            'FSC2title' => 'Soluciones a la medida',
            'FSC2content' => 'Nos adaptamos a las necesidades de su negocio.',
            'FSC2image' => 'not',
            'FSC3title' => 'Experiencia',
            'FSC3content' => 'Mas de 10 años de experiencia y nuestros clientes nos avalan.',
            'FSC3image' => 'not',
            'FSC4title' => 'Disponibilidad',
            'FSC4content' => 'Contamos con multiples oficinas para atenderlo.',
            'FSC4image' => 'not',
            'FSC5title' => 'Investigación',
            'FSC5content' => 'Estamos al dia con la nueva manera de trabajo del SAT.',
            'FSC5image' => 'not',
            'SSempresa' => 'MONTES BUENO Y ASOCIADOS',
            'SSmensaje' => 'La Organización está dirigida a Personas Físicas, Morales y Sociedades Independientemente al Giro que realicen. Nuestra razón de ser  es brindar  asesoría a las pequeñas, medianas y grandes empresas en nuestro país en materia fiscal, contable y financiera, es por eso que MONTES BUENO Y ASOCIADOS SC se interesa en ofrecer  los mejores servicios en el Estado Nayarit y Puerto Vallarta, Jalisco, contando con profesionales con una amplia experiencia.',
            'TSservice1' => 'Impuestos',
            'TSservice2' => 'Defensa Fiscal',
            'TSservice3' => 'Contabilidad y Nominas',
            'TSservice4' => 'Aseoría Corporativa',
            'TSimage' => 'not',
        ]);
    }
}
