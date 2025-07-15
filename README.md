# Prueba Técnica Laravel SR

## 1. Función de Agrupamiento de Tareas

La función para agrupar tareas está implementada en el controlador `TaskGroupingController`.

### Uso

Para probarla, se puede realizar una petición **GET** a:

 http://127.0.0.1:8000/api/tasks/group con los datos en formato
```
$tasks = [
    ['titulo' => 'Tarea A', 'estado' => 'pendiente'],
    ['titulo' => 'Tarea B', 'estado' => 'completada'],
    ['titulo' => 'Tarea C', 'estado' => 'pendiente'],
];
```
La función agrupa las tareas por el campo estado y devuelve los títulos agrupados.

## 2. Análisis de Código Laravel
```
collect([1, 2, 3, 4])​
    ->map(fn($n) => $n * 2)​
    ->filter(fn($n) => $n > 5)​
    ->values()​
    ->all();
```

1. ```collect([1, 2, 3, 4])​``` crea una colección de números del 1 al 4
2. ```map(fn($n) => $n * 2)```​ multiplica cada número por 2 -> [2, 4, 6, 8]
3. ```filter(fn($n) => $n > 5)```​ filtra mayores a 5 -> [6, 8]
4. ```values()```​ reindexa las claves -> [0 => 6, 1 => 8]
5. ```all()``` devuelve un array plano => [6, 8]