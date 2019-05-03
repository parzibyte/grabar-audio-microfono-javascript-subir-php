<?php
/**
 * Grabar audio obtenido del micrófono con JavaScript, seleccionando
 * un dispositivo de grabación de una lista; usando MediaRecorder
 * y getUserMedia
 *
 * Extra: no descargar el audio, sino enviarlo a un servidor con PHP y guardarlo en la nube
 * Recomendado: https://parzibyte.me/blog/2018/11/06/cargar-archivo-php-javascript-formdata/
 *
 *
 * @author parzibyte
 * @see https://parzibyte.me/blog
 */
# Si no hay archivos, salir inmediatamente
if (count($_FILES) <= 0 || empty($_FILES["audio"])) {
    exit("No hay archivos");
}

# De dónde viene el audio y en dónde lo ponemos
$rutaAudioSubido = $_FILES["audio"]["tmp_name"];
$nuevoNombre = uniqid() . ".webm";
$rutaDeGuardado = __DIR__ . "/" . $nuevoNombre;
// Mover el archivo subido a la ruta de guardado
move_uploaded_file($_FILES["audio"]["tmp_name"], $rutaDeGuardado);
// Imprimir el nombre para que la petición lo lea
echo $nuevoNombre;
