<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->rol_id != 0) {
            return redirect('dashboard');
        }

        // Consulta principal para productos
        $productos = DB::table('productos')
            ->leftJoin('marcas', 'productos.id_marca', '=', 'marcas.id_marca')
            ->leftJoin('categorias', 'productos.id_categoria', '=', 'categorias.id_categoria')
            ->leftJoin('modelos', 'productos.id_modelo', '=', 'modelos.id_modelo')
            ->leftJoin('disenos', 'productos.id_diseno', '=', 'disenos.id_diseno')
            ->select(
                'productos.id_producto',
                'productos.nombre_producto',
                'marcas.nombre_marca as marca',
                'categorias.nombre_categoria as categoria',
                'modelos.nombre_modelo as modelo',
                'disenos.nombre_diseno as diseño',
                'productos.descripcion_producto',
                'productos.img_producto',
                'productos.stock_producto',
                'productos.precio_producto',
                'productos.dimensiones_producto',
                'productos.venta_producto',
                'productos.estado_producto'
            )
            ->get();

        // Consultas para opciones dinámicas
        $marcas = DB::table('marcas')->select('id_marca', 'nombre_marca')->get();
        $categorias = DB::table('categorias')->select('id_categoria', 'nombre_categoria')->get();
        $modelos = DB::table('modelos')->select('id_modelo', 'nombre_modelo')->get();
        $disenos = DB::table('disenos')->select('id_diseno', 'nombre_diseno')->get();

        // Retornar todo a la vista
        return view('admin.modules.users.productos', compact('productos', 'marcas', 'categorias', 'modelos', 'disenos'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Productos::create([
            'nombre_producto' => $request->nombre_producto,
            'id_marca' => $request->id_marca,
            'id_categoria' => $request->id_categoria,
            'id_modelo' => $request->id_modelo,
            'id_diseno' => $request->id_diseno,
            'descripcion_producto' => $request->descripcion_producto,
            'img_producto' => $request->hasFile('img_producto') ? $this->guardarImagen($request->file('img_producto')) : null,
            'stock_producto' => $request->stock_producto,
            'precio_producto' => $request->precio_producto,
            'dimensiones_producto' => $request->dimensiones_producto,
            'venta_producto' => $request->venta_producto,
            'estado_producto' => $request->estado_producto,
            'fecha_creacion' => now(),
            'fecha_actualizacion' => now(),
        ]);

        return redirect('Productos')->with('success', 'El producto ha sido agregado correctamente');
    }
    /**
     * Método auxiliar para guardar la imagen.
     */
    private function guardarImagen($imagen)
    {
        $nombreArchivo = time() . '_' . $imagen->getClientOriginalName();
        $imagen->move(public_path('imagenes/productos'), $nombreArchivo);
        return 'imagenes/productos/' . $nombreArchivo;
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_producto)
    {
        $producto = Productos::find($id_producto);

        return response()->json($producto);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Productos $productos)
    {


        // Manejar la imagen
        $rutaImagen = null;
        if ($request->hasFile('img_producto')) {
            $imagen = $request->file('img_producto');
            $nombreArchivo = time() . '_' . $imagen->getClientOriginalName();
            $rutaImagen = 'imagenes/productos/' . $nombreArchivo;
            $imagen->move(public_path('imagenes/productos'), $nombreArchivo);
        }

        // Actualizar los datos
        Productos::where('id_producto', $request->id_producto)->update([
            'nombre_producto' => $request->nombre_producto,
            'id_marca' => $request->id_marca,
            'id_categoria' => $request->id_categoria,
            'id_modelo' => $request->id_modelo,
            'id_diseno' => $request->id_diseno,
            'descripcion_producto' => $request->descripcion_producto,
            'img_producto' => $rutaImagen ?? Productos::find($request->id_producto)->img_producto, // Mantener imagen anterior si no se cambia
            'stock_producto' => $request->stock_producto,
            'precio_producto' => $request->precio_producto,
            'dimensiones_producto' => $request->dimensiones_producto,
            'venta_producto' => $request->venta_producto,
            'estado_producto' => $request->estado_producto,
            'fecha_actualizacion' => now(), // Fecha de actualización manual
        ]);

        return redirect('Productos')->with('success', 'El producto ha sido actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Productos $productos)
    {
        //
    }
}
