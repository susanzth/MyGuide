<?php
include "../partials/top_page.php";
include "../partials/header.php";
include "functions/functions-mysql.php";

?>
    <section class="php padd5">
        <h4>MySQL</h4>
        <div class="exam-php">
            <ul class="padd2">
                <li><a href="../php-directory.php">Volver al directorio</a></li>
            </ul>
        </div>
        <div class="padd2 exam-php">
            <h6>Ejemplo de un formuario de búsqueda con consultas preparadas.</h6>
            <div class="padd2">
                <form id="form-searchPrepared"
                      action="php-partials/partials-mysql-searchPrepared.php" method="get">
                    <label for="txt-searchP">Búscar:
                        <input id="txt-searchP" name="txt-searchP" type="text"
                               placeholder="Búsqueda" class="">
                    </label>
                    <label for="btn-searchP">
                        <input id="btn-searchP" name="btn-searchP" type="submit" value="Búscar">
                    </label>
                </form>
                <p class="padd2"><b>Primer paso:</b> la sentencia sql ya no sería asi:
                    <br><i class="tab">$query_search = "select * from usuarios where nombre
                        like'%$search%'";</i>
                    <br>sino así:
                    <br><i class="tab">$query_search = "select * from usuarios where
                                        nombre = ?";</i>
                    <br>Se cambia la variable como parámetro y se coloca el signo de interrogación.
                </p>
                <p class="padd2"><b>Segundo paso:</b> El resultado ya no será un array como antes:
                    <br><i class="tab">$result_search =
                        mysqli_query($connection, $query_search);</i>
                    <br>sino que devolverá un objeto:
                    <br><i class="tab">$result_search =
                        mysqli_prepare($connection, $query_search);</i>
                    <br>Y $result_search será un parametro que se ultilizará en resto del ejercicio.
                </p>
                <p class="padd2"><b>Tercer paso:</b> Para saber si la sentencia funciona, arroja
                                como resultado true o false, escribimos el siguiente código:
                    <br><i class="tab">$ok =
                        mysqli_stmt_bind_param($result_search, "s", $searchP);</i>
                    <br>Guardamos en la variable $ok. Primer parámetro el objeto que nos devolvió
                    prepare, segundo parámetro el tipo de dato que en este caso es string,
                    tercer parámetro la variable donde está almacenado lo que escribió el usuario.
                </p>
                <p class="padd2"><b>Cuarto paso:</b> Para saber si la sentencia ha arrojado
                    resultado, escribimos el siguiente código:
                    <br><i class="tab">$ok = mysqli_stmt_execute($result_search);</i>
                    <br>Sobreescribimos en la variable $ok.
                    El parámetro que pide es el objeto.
                </p>
                <p class="padd2"><b>Quinto paso:</b> Dentro de un if escribimos en la parte
                                del else:
                    <br><i class="tab">$ok = mysqli_stmt_bind_result($result_search, $cedula,
                        $nombre, $apellido, $telefono, $direccion);</i>
                    <br>Donde Asociamos las variables al resultado, colocamos tantas
                    variables como resultados estemos llamando.
                </p>
                <p class="padd2"><b>Sexto paso:</b> Cambiamos el:
                    <br><i class="tab">$row_search = mysqli_fetch_array($result_search,
                                                    MYSQLI_ASSOC)</i>
                    <br>Dentro del while por:
                    <br><i class="tab">mysqli_stmt_fetch($result_search)</i>
                    <br>Imprimimos los resultados con un "echo" y por ultimo cerramos el objeto con:
                    <br><i class="tab">mysqli_stmt_close($result_search);</i>
                </p>
            </div>
        </div>
    </section>
<?php
include "../partials/footer.php";
include "../partials/bottom-page.php";

/**
 * Created by PhpStorm.
 * User: Susana
 * Date: 12/10/2017
 * Time: 5:46 PM
 */