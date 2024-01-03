<?php

namespace Model;

class AdminCita extends ActiveRecord {
    protected static $tabla = 'citasservicios';
    protected static $columnasDB = ['id', 'hora', 'cliente', 'email',
    'telefono', 'servicio', 'precio'];

    public $id;
    public $hora;
    public $cliente;
    public $email;
    public $telefono;
    public $servicio;
    public $precio;

    public function __construct()
    {
        $this->id = $args['id'] ?? null;
        $this->hora = $args['hora'] ?? '';
        $this->cliente = $args['cliente'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
        $this->servicio = $args['servicio'] ?? '';
        $this->precio = $args['precio'] ?? '';
    }
}

// El modelo AdminCita.php representa una tabla específica de la base de datos con sus columnas correspondientes.
// Utiliza la herencia de la clase ActiveRecord para obtener funcionalidades comunes para interactuar con la base de datos.
// Interacción con la Base de Datos:

// Gracias a la herencia de ActiveRecord, el modelo AdminCita puede realizar operaciones CRUD (Crear, Leer, Actualizar, Eliminar) en la base de datos.
// Puede recuperar registros de la base de datos y representarlos como objetos en PHP (find(), all()).
// Puede crear nuevos registros en la base de datos (crear()).
// Puede actualizar registros existentes (actualizar()).
// Puede eliminar registros de la base de datos (eliminar()).
// Sanitización y Validación de Datos:

// Implementa métodos para sanitizar los datos antes de almacenarlos en la base de datos, lo cual es importante para prevenir ataques de inyección de SQL.
// Puede realizar validaciones específicas para asegurar la integridad de los datos antes de realizar operaciones en la base de datos.
// Sincronización de Datos:

// Utiliza un método para sincronizar los datos del objeto con los valores proporcionados en un arreglo, facilitando la actualización de objetos existentes.
// Alertas y Mensajes:

// Utiliza alertas y mensajes para proporcionar información sobre el resultado de las operaciones en la base de datos.
// En resumen, el modelo AdminCita facilita la interacción entre tu aplicación y la base de datos, permitiéndote realizar operaciones CRUD de manera orientada a objetos. Esto es fundamental para la mayoría de las aplicaciones web, ya que te permite gestionar los datos de manera eficiente y estructurada.