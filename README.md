# Prueba 1 - Bimestre 1

Desarrollar una API con Laravel que tenga en cuenta las siguientes entidades y atributos:

```
- movie
  - id : bigint(20) unsigned
  - name : varchar(255)
  - code : varchar(80)
  - year : double
  - available : boolean
  - created_at : timestamp
  - updated_at : timestamp
  
- genre
  - id: bigint(20) unsigned
  - name: varchar(40)
  
- user
  - id : bigint(20) unsigned
  - name : varchar(255)
  - lastname : varchar(255)
  - document : varchar(80)
  - created_at : timestamp
  - updated_at : timestamp

```

**NOTA:** para la columna `available` de movie, los productos se insertan en `available=true` por defecto. Revisar la documentación: https://laravel.com/docs/8.x/migrations#creating-columns

## Tareas      
  a. **(1)** Creación y configuración inicial del proyecto.

  b. **(1)** Creación de modelo y migración para movie, genre, user.

  c. **(2)** Creación de seeders para movie, genre, user.

  d. **(1)** Creación de rutas y controladores para movie, genre, user. Los controladores deben permitir crear, listar, visualizar, editar, eliminar.
  
  e. **(2)** Crear las relaciones de tal manera que el API permita lo siguiente:
    * Una pelicula siempre debe pertenecer genero.
    * Un usuario puede tener varios generos favoritos.

  f. **(1.5)** Crear una ruta que permita ver todas las películas de un género en específico. Ej:`/genres/:id/movies`

  g. **(1.5)** Crear una ruta que permita ver todos los géneros favoritos de un usuario. Ej:`/users/:id/genres`
  
  h. **(2)** ¡¡BONUS!! Crear una ruta que permita listar todas las películas de todos los géneros favoritos de un usuario específico. La ruta puede ser similar a lo siguiente: `/user/:id/movies/all`
