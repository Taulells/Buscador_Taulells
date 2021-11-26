// Ejecutar hasta que el dom haya cargado
document.addEventListener('DOMContentLoaded', function() {
    // Obtener todos los checkbox
    let checks = document.querySelectorAll('[name^="filter_order"]');
    // Recorrer elementos
    checks.forEach(check => {
        // Asignar evento
        check.addEventListener('change', check => cuentaChecks(check));
    });
    // Esta función se va a ejecutar cuando haya cambios
    function cuentaChecks(check) {
        // Obtener checkboxes marcados
        let marcados = document.querySelectorAll('[name^="filter_order"]:checked');
        // Si ya se seleccionaron 3, hay que deshabilitar el resto
        let dis = (marcados.length >= 3);
        // Recorres todos los select para habilitar o deshabilitar
        checks.forEach(check => {
            // Si está marcado debe quedar activo,
            // De lo contrario, se activa o desactiva de acuerdo a contador
            check.disabled = (check.checked) ? false : dis;
        });
    }
    // Asignar evento a formulario para verificar la cantidad de checkbox marcados
    document.querySelector('#form-1').addEventListener('submit', function(e) {
        // Obtener checkboxes marcados
        let marcados = document.querySelectorAll('[name^="filter_order"]:checked'); 
        // Si no se seleccionaron 3
        if(marcados.length != 3) {
            // Evitar que se envíe el formulario
            e.preventDefault();
            // Avisar al usuario que hay error
            alert('Marca 3 checkboxes');
        }
    });
});