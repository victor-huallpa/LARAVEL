<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // en caso de que no alamcenes el nombre de la tabla, la convecion ara que se 
    // busque la tabla posts, o sea el nombre de la clase en minusculas y en plural
    // tener e ncuenta que tambien esto susede todo en el idioma ingles, en caso de espanos puede llgar afallar

    use HasFactory;

    //caudo queremos habiliar la insersion masiva y decir en que campos se
    //permitiran la inserciones
    // protected $fillable = [
    //     'title',
    //     'slug',
    //     'category',
    //     'content',
    //     'published_at',
    // ];

    //cuand oqueremos habilitar las inserciones masivas pero, excluyendo
    //los campos a los cuales no seingresaran datos
    protected $guarded = [
        'is_active',
    ];
    protected $table = 'posts';

    protected function casts():array
    {
        //retorna el valor de cada dato casteado en el tipo de dato que se le indica
        //se utiliza tanto para traer como para almacenar datos.
        return [
            'published_at' => 'datetime',
            'is_active' => 'boolean'
        ];
    }

    protected function title():Attribute
    {
        return Attribute::make(
            //mutador set
            set: function ($value) {
                return strtolower($value);
            },
            //accesor get
            get: function ($value) {
                return ucfirst($value);
            }
        );
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }


}
//hola  amor de mi corazon//