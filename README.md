
# UNIADMIN
Esta prueba consistió en crear una api REST en Laravel 9 con CRUD's para las entidades Estudiante, Profesor y Asignaturas donde se pueda registrar las asignaturas impartidas por cada docente y las materias que cada estudiante va a cursar durante el periodo académico actual, teniendo en cuenta que un estudiante debe cursar mínimo 7 créditos y no puede registrar la misma asignatura dos veces (con docentes distintos)

Se uso la estructura de migraciones y sembradores de Laravel para modelar la base de datos; se crearon llaves foráneas en las migraciones para hacer uso estricto de las relaciones SQL.

Este reto se realizo en un lapso de 8 horas

## Instalacion – Installation 

Docker y docker-compose serian los requisitos para poner en marcha este proyecto, por lo que es importante instalarlos previamente

Docker and Docker-compose are required to run this project, so please install them first. 

```bash
apt install -y docker docker-compose git 
```

## Despliegue – Deployment

```bash 
git clone https://github.com/whohe/UniAdmin
cd UniAdmin
docker-compose up -d
```
![Preview](example.gif?raw=true "Example")
Revisar: [http://localhost](http://localhost)

## Explicación de usabilidad:
Una vez levantado el servicio podemos observar que en la pagina principal hay una serie de indicadores tipo dashboard que consumen recursos rest y tambien hay una tabla que muestra los estudiantes inscritos con las materias elegidas, 

Tenemos un menú lateral para cada entidad:
* /teachers
* /students
* /subjects
Cada uno con una tabla dinamica que permite la Creacion, Edicion, Eliminacion y en genral la visualizacion de los datos registrados.

También hay un menú para relacionar profesores con asignaturas y estudiantes con asignaturas.
* /teachers-subjects
* /students-subjects

Nota: se hizo uso de una plantilla bootstrap para el frontend que es manejado con Blade.

### Puntos a mejorar:
* Crear métodos Jquery para actualizar objetos Javascript en las acciones de creación, edición y eliminación de registros, evitando así un refresh general, o bien pasar a usar un framework Javascript como VueJS
* Evitar uso de select múltiple y refactorizarlo por tablas dinámicas.
* El apartado de Estadísticas del Dashboard tiene valores quemados.
* La lógica para actualizar docentes-asignaturas y estudiantes-asignaturas esta abusando de la retriccion onCascade de SQL por lo que también puede ser optimizado en una segunda versión.

![Preview](show.gif?raw=true "Example")
