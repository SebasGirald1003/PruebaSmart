<script>

var estudiante = {
    nombre: "Juan",
    edad: 20,
    calificaciones: [85, 90, 92, 88, 78],
};

function calcularPromedio(calificaciones) {
    var suma = 0;

    for (var i = 0; i < calificaciones.length; i++) {
        suma += calificaciones[i];
    }

    var promedio = suma / calificaciones.length;
    return promedio;
}


var promedioCalificaciones = calcularPromedio(estudiante.calificaciones);

console.log("El promedio de calificaciones de " + estudiante.nombre + " es: " + promedioCalificaciones);

</script>