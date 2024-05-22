<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @property int $catalogoId
 * @property string $categoria
 * @property string $modelo
 * @property string $imagen
 * @property string $descripcion
 * @property string $codigo
 * @property int $precio
 * @property string $fechaEntrada
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Tienda newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tienda newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tienda query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tienda whereCatalogoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tienda whereCategoria($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tienda whereCodigo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tienda whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tienda whereDescripcion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tienda whereFechaEntrada($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tienda whereImagen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tienda whereModelo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tienda wherePrecio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tienda whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Tienda extends Model
{
    use HasFactory;

    /**
     * No sigo con convencion tiendas seria por convención
     */

    protected $table = "tienda";

    protected $primaryKey = "catalogoId";

    /**
     * Campos incluidos en la tabla
     */

    protected $fillable = ['categoria','codigo', 'modelo', 'descripcion', 'precio', 'fechaEntrada', 'imagen'];



    public function casts(): array
    {
        return [
            'fechaEntrada' => 'date',
        ];
    }


    /**
     * Se incluye atribute para que los precios esten correctos
     */
    /*
    protected function precio(): Attribute
    {

        return Attribute::make(
            get: fn ($precio) => $precio / 100,
            set: fn ($precio) => $precio * 100
        );
    }
    */
}
