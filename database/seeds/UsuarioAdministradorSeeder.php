<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioAdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('usuario')->insert([
            'papellido'=>strtoupper('Castro'),
            'sapellido'=>strtoupper('Galeano'),
            'pnombre'=>strtoupper('Jhonnathan'),
            'snombre'=>null,
            'tipo_documento'=>strtoupper('CC'),
            'documento'=>'1130629762',
            'usuario'=>'jcastro',
            'password'=>bcrypt('123456'),
            'remenber_token'=>bcrypt('123456'),
            'email'=>'castrokof@gmail.com',
            'cod_retus'=>'0123',
            'celular'=>'3175018125',
            'telefono'=>'3062047',
            'profesion'=>strtoupper('ingeniero'),
            'especialidad'=>strtoupper('sistemas'),
            'observacion'=>strtoupper('Prueba'),
            'ips'=>strtoupper('atencion fidem s.a.s'),
            'activo'=>'1'
            ]);



        DB::table('usuario_rol')->insert([

            'rol_id'=>1,
            'usuario_id'=>1,

        ]);


        //Creación de menu        

        DB::table('menu')->insert([

            'menu_id'=> 0,
            'nombre'=>'Admin',
            'url'=>'#',
            'orden'=>8,
            'icono'=>'far fa-building'
        ]);
        DB::table('menu')->insert([

            'menu_id'=> 1,
            'nombre'=>'Lista de Menus',
            'url'=>'admin/menu',
            'orden'=>1,
            'icono'=>'fas fa-bookmark'
        ]);
        DB::table('menu')->insert([

            'menu_id'=> 1,
            'nombre'=>'Crear_menu',
            'url'=>'admin/menu/crear',
            'orden'=>2,
            'icono'=>'fas fa-clipboard-list'
        ]);
        DB::table('menu')->insert([

            'menu_id'=> 1,
            'nombre'=>'Roles',
            'url'=>'admin/rol',
            'orden'=>3,
            'icono'=>'fa fa-list'
        ]);
        DB::table('menu')->insert([

            'menu_id'=> 1,
            'nombre'=>'Asignar Menus',
            'url'=>'admin/menu-rol',
            'orden'=>4,
            'icono'=>'fa fa-tasks'
        ]);
        DB::table('menu')->insert([

            'menu_id'=> 0,
            'nombre'=>'Listas',
            'url'=>'/listas-index',
            'orden'=>11,
            'icono'=>'fas fa-clipboard'
        ]);
        DB::table('menu')->insert([

            'menu_id'=> 10,
            'nombre'=>'Usuarios',
            'url'=>'usuario',
            'orden'=>1,
            'icono'=>'fa fa-user'
        ]);

        DB::table('menu')->insert([

            'menu_id'=> 10,
            'nombre'=>'Paciente',
            'url'=>'paciente',
            'orden'=>2,
            'icono'=>'fas fa-handshake'
        ]);

        DB::table('menu')->insert([

            'menu_id'=> 0,
            'nombre'=>'Dashboard',
            'url'=>'dashboard',
            'orden'=>1,
            'icono'=>'fas fa-tachometer-alt'
        ]);

        DB::table('menu')->insert([

            'menu_id'=> 0,
            'nombre'=>'Configuración',
            'url'=>'#',
            'orden'=>50,
            'icono'=>'fa fa-cog fa-spin fa-3x fa-fw'
        ]);

        DB::table('menu')->insert([

            'menu_id'=> 0,
            'nombre'=>'Radicación',
            'url'=>'radicados',
            'orden'=>2,
            'icono'=>'fas fa-ticket-alt'
        ]);
        DB::table('menu')->insert([

            'menu_id'=> 0,
            'nombre'=>'Seguimiento',
            'url'=>'#',
            'orden'=>3,
            'icono'=>'fas fa-tags'
        ]);
        DB::table('menu')->insert([

            'menu_id'=> 12,
            'nombre'=>'Registrados',
            'url'=>'registrados',
            'orden'=>1,
            'icono'=>'fas fa-bookmark'
        ]);
        DB::table('menu')->insert([

            'menu_id'=> 12,
            'nombre'=>'Asignados',
            'url'=>'asignados',
            'orden'=>2,
            'icono'=>'fas fa-bookmark'
        ]);
        DB::table('menu')->insert([

            'menu_id'=> 12,
            'nombre'=>'Despachados',
            'url'=>'despachados',
            'orden'=>3,
            'icono'=>'fas fa-bookmark'
        ]);
        DB::table('menu')->insert([

            'menu_id'=> 12,
            'nombre'=>'Novedades',
            'url'=>'novedades',
            'orden'=>4,
            'icono'=>'fas fa-bookmark'
        ]);
        DB::table('menu')->insert([

            'menu_id'=> 12,
            'nombre'=>'Devoluciones',
            'url'=>'devoluciones',
            'orden'=>5,
            'icono'=>'fas fa-bookmark'
        ]);
        DB::table('menu')->insert([

            'menu_id'=> 12,
            'nombre'=>'Entregados',
            'url'=>'entregados',
            'orden'=>6,
            'icono'=>'fas fa-bookmark'
        ]);
        DB::table('menu')->insert([

            'menu_id'=> 10,
            'nombre'=>'Domiciliarios',
            'url'=>'domiciliarios',
            'orden'=>3,
            'icono'=>'fas fa-address-book'
        ]);
        DB::table('menu')->insert([

            'menu_id'=> 10,
            'nombre'=>'Proyectos',
            'url'=>'proyectos',
            'orden'=>4,
            'icono'=>'fas fa-clone'
        ]);
        DB::table('menu')->insert([

            'menu_id'=> 10,
            'nombre'=>'Categorias',
            'url'=>'categorias',
            'orden'=>5,
            'icono'=>'fas fa-clone'
        ]);
        DB::table('menu')->insert([

            'menu_id'=> 10,
            'nombre'=>'Prioridades',
            'url'=>'prioridades',
            'orden'=>7,
            'icono'=>'fas fa-clone'
        ]);
        DB::table('menu')->insert([

            'menu_id'=> 10,
            'nombre'=>'Tipo Entrega',
            'url'=>'tipos_entrega',
            'orden'=>8,
            'icono'=>'fas fa-clone'
        ]);        
        DB::table('menu')->insert([

            'menu_id'=> 10,
            'nombre'=>'Estados',
            'url'=>'estado_radicados',
            'orden'=>9,
            'icono'=>'fas fa-clone'
        ]);
        DB::table('menu')->insert([

            'menu_id'=> 10,
            'nombre'=>'Causa Devolución',
            'url'=>'causa_devolución',
            'orden'=>10,
            'icono'=>'fas fa-clone'
        ]);
        DB::table('menu')->insert([

            'menu_id'=> 0,
            'nombre'=>'Reportes',
            'url'=>'reportes',
            'orden'=>4,
            'icono'=>'fas fa-sitemap'
        ]);

        //Relación menu-rol

        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 1
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 2
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 3
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 4
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 5
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 6
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 7
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 8
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 9
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 10
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 11
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 12
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 13
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 14
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 15
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 16
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 17
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 18
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 19
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 20
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 21
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 22
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 23
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 24
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 25
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 26
        ]);

        DB::table('menu_rol')->insert([

            'rol_id'=> 2,
            'menu_id'=> 8
        ]);
        

        //Insersion de datos en la table listas y listas detalle

        /* DB::table('listas')->insert([
            'slug'=> 1,
            'nombre'=> 'EMPRESA',
            'descripcion'=> 'LISTA DE EMPRESAS',
            'activo'=> 'SI',
            'user_id'=> 1
        ]);

        DB::table('listasdetalle')->insert([
            'slug'=> 'PA',
            'nombre'=> 'Particular',
            'descripcion'=> 'Particular',
            'activo'=> 'SI',
            'listas_id'=> 2,
            'user_id'=> 1
        ]); */
        
        
    }
}
