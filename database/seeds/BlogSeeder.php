<?php

use App\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

         //PARA USUARIO PIWICHO
         $blog = new Blog();
         $blog->idcountry = 172;
         $blog->titulo = "Entrada del Blog 1";
         $blog->imagen = "chica1.jpg";
         $blog->contenido = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas at elit nisi. Cras porttitor odio ut mi maximus consequat sagittis quis mi. Proin lobortis sapien et turpis ornare vehicula. Vivamus vulputate risus enim, pharetra scelerisque urna aliquam nec. Vestibulum pellentesque feugiat nulla, vel porta nibh molestie et. Nulla condimentum sed diam et iaculis. Pellentesque erat felis, auctor luctus sapien sit amet, pellentesque imperdiet nulla. Proin ac nibh at nisl dictum vulputate. Mauris ac vehicula odio. Mauris commodo augue eu magna imperdiet, ut posuere quam auctor. Ut auctor pellentesque vulputate. Sed luctus tortor libero. Pellentesque id nisi porta, posuere lectus vel, vestibulum neque.";
         $blog->save();

         $blog = new Blog();
         $blog->idcountry = 172;
         $blog->titulo = "Entrada del Blog 2";
         $blog->imagen = "chica1.jpg";
         $blog->contenido = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas at elit nisi. Cras porttitor odio ut mi maximus consequat sagittis quis mi. Proin lobortis sapien et turpis ornare vehicula. Vivamus vulputate risus enim, pharetra scelerisque urna aliquam nec. Vestibulum pellentesque feugiat nulla, vel porta nibh molestie et. Nulla condimentum sed diam et iaculis. Pellentesque erat felis, auctor luctus sapien sit amet, pellentesque imperdiet nulla. Proin ac nibh at nisl dictum vulputate. Mauris ac vehicula odio. Mauris commodo augue eu magna imperdiet, ut posuere quam auctor. Ut auctor pellentesque vulputate. Sed luctus tortor libero. Pellentesque id nisi porta, posuere lectus vel, vestibulum neque.";
         $blog->save();

         $blog = new Blog();
         $blog->idcountry = 172;
         $blog->titulo = "Entrada del Blog 3";
         $blog->imagen = "chica1.jpg";
         $blog->contenido = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas at elit nisi. Cras porttitor odio ut mi maximus consequat sagittis quis mi. Proin lobortis sapien et turpis ornare vehicula. Vivamus vulputate risus enim, pharetra scelerisque urna aliquam nec. Vestibulum pellentesque feugiat nulla, vel porta nibh molestie et. Nulla condimentum sed diam et iaculis. Pellentesque erat felis, auctor luctus sapien sit amet, pellentesque imperdiet nulla. Proin ac nibh at nisl dictum vulputate. Mauris ac vehicula odio. Mauris commodo augue eu magna imperdiet, ut posuere quam auctor. Ut auctor pellentesque vulputate. Sed luctus tortor libero. Pellentesque id nisi porta, posuere lectus vel, vestibulum neque.";
         $blog->save();



         //ESPAÑA
         $blog = new Blog();
         $blog->idcountry = 205;
         $blog->titulo = "Entrada del Blog España 1";
         $blog->imagen = "chica1.jpg";
         $blog->contenido = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas at elit nisi. Cras porttitor odio ut mi maximus consequat sagittis quis mi. Proin lobortis sapien et turpis ornare vehicula. Vivamus vulputate risus enim, pharetra scelerisque urna aliquam nec. Vestibulum pellentesque feugiat nulla, vel porta nibh molestie et. Nulla condimentum sed diam et iaculis. Pellentesque erat felis, auctor luctus sapien sit amet, pellentesque imperdiet nulla. Proin ac nibh at nisl dictum vulputate. Mauris ac vehicula odio. Mauris commodo augue eu magna imperdiet, ut posuere quam auctor. Ut auctor pellentesque vulputate. Sed luctus tortor libero. Pellentesque id nisi porta, posuere lectus vel, vestibulum neque.";
         $blog->save();

         $blog = new Blog();
         $blog->idcountry = 205;
         $blog->titulo = "Entrada del Blog España 2";
         $blog->imagen = "chica1.jpg";
         $blog->contenido = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas at elit nisi. Cras porttitor odio ut mi maximus consequat sagittis quis mi. Proin lobortis sapien et turpis ornare vehicula. Vivamus vulputate risus enim, pharetra scelerisque urna aliquam nec. Vestibulum pellentesque feugiat nulla, vel porta nibh molestie et. Nulla condimentum sed diam et iaculis. Pellentesque erat felis, auctor luctus sapien sit amet, pellentesque imperdiet nulla. Proin ac nibh at nisl dictum vulputate. Mauris ac vehicula odio. Mauris commodo augue eu magna imperdiet, ut posuere quam auctor. Ut auctor pellentesque vulputate. Sed luctus tortor libero. Pellentesque id nisi porta, posuere lectus vel, vestibulum neque.";
         $blog->save();

         $blog = new Blog();
         $blog->idcountry = 205;
         $blog->titulo = "Entrada del Blog España 3";
         $blog->imagen = "chica1.jpg";
         $blog->contenido = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas at elit nisi. Cras porttitor odio ut mi maximus consequat sagittis quis mi. Proin lobortis sapien et turpis ornare vehicula. Vivamus vulputate risus enim, pharetra scelerisque urna aliquam nec. Vestibulum pellentesque feugiat nulla, vel porta nibh molestie et. Nulla condimentum sed diam et iaculis. Pellentesque erat felis, auctor luctus sapien sit amet, pellentesque imperdiet nulla. Proin ac nibh at nisl dictum vulputate. Mauris ac vehicula odio. Mauris commodo augue eu magna imperdiet, ut posuere quam auctor. Ut auctor pellentesque vulputate. Sed luctus tortor libero. Pellentesque id nisi porta, posuere lectus vel, vestibulum neque.";
         $blog->save();


    }
}
