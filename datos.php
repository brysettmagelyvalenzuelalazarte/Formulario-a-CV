<html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibiendo datos del formulario
    $nombreApellidos = htmlspecialchars($_POST['n_apellidos']);
    $fechaNacimiento = htmlspecialchars($_POST['f_nacimiento']);
    $ocupacion = htmlspecialchars($_POST['ocupacion']);
    $contacto = htmlspecialchars($_POST['contacto']);
    $nacionalidad = htmlspecialchars($_POST['nacionalidad']);
    $nivelIngles = htmlspecialchars($_POST['n_ingles']);
    $lenguajesProgramacion = isset($_POST['programacion']) ? htmlspecialchars($_POST['programacion']) : 'Ninguno'; 
    $aptitudes = htmlspecialchars($_POST['aptitudes']);
    $habilidades = isset($_POST['habilidades']) ? $_POST['habilidades'] : array();
    $perfil = htmlspecialchars($_POST['perfil']);

    // Mostrando los datos ingresados
    echo "<h1>Datos Recibidos:</h1>";
    echo "<p><strong>Nombre y Apellidos:</strong> $nombreApellidos</p>";
    echo "<p><strong>Fecha de Nacimiento:</strong> $fechaNacimiento</p>";
    echo "<p><strong>Ocupación:</strong> $ocupacion</p>";
    echo "<p><strong>Contacto:</strong> $contacto</p>";
    echo "<p><strong>Nacionalidad:</strong> $nacionalidad</p>";
    echo "<p><strong>Nivel de Inglés:</strong> $nivelIngles</p>";
    echo "<p><strong>Lenguajes de Programación:</strong> $lenguajesProgramacion</p>";
    echo "<p><strong>Aptitudes:</strong> $aptitudes</p>";
    echo "<p><strong>Habilidades:</strong> " . implode(", ", $habilidades) . "</p>";
    echo "<p><strong>Perfil:</strong> $perfil</p>";
} else {
    echo "No se recibieron datos.";
}
?>
</html>
