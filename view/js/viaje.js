document.addEventListener('DOMContentLoaded', function() {
    // Configuración del selector de fecha
    const fechaInput = document.getElementById('fecha');
    const today = new Date();
    const dd = String(today.getDate()).padStart(2, '0');
    const mm = String(today.getMonth() + 1).padStart(2, '0');
    const yyyy = today.getFullYear();
    const minDate = yyyy + '-' + mm + '-' + dd;
    fechaInput.setAttribute('min', minDate);
    fechaInput.value = minDate;
    
    // Control del desplegable de pasajeros
    const passengerTrigger = document.getElementById('passengerTrigger');
    const passengerDropdown = document.getElementById('passengerDropdown');
    
    passengerTrigger.addEventListener('click', function(e) {
        e.stopPropagation();
        passengerDropdown.classList.toggle('show');
    });
    
    // Cerrar el desplegable al hacer clic fuera
    document.addEventListener('click', function() {
        passengerDropdown.classList.remove('show');
    });
    
    // Evitar que el clic dentro del desplegable lo cierre
    passengerDropdown.addEventListener('click', function(e) {
        e.stopPropagation();
    });
    
    // Controladores para los botones de pasajeros
    document.querySelectorAll('.passenger-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const type = this.getAttribute('data-type');
            const isPlus = this.classList.contains('plus');
            const valueElement = document.getElementById(`${type}-value`);
            const inputElement = document.getElementById(type);
            let value = parseInt(valueElement.textContent);
            
            if (isPlus) {
                value++;
            } else {
                value = Math.max(0, value - 1);
            }
            
            valueElement.textContent = value;
            inputElement.value = value;
            
            updatePassengerSummary();
        });
    });
    
    function updatePassengerSummary() {
        const adultos = parseInt(document.getElementById('adultos').value);
        const ninos = parseInt(document.getElementById('ninos').value);
        const inapam = parseInt(document.getElementById('inapam').value);
        const total = adultos + ninos + inapam;
        
        let summaryText = total + ' pasajero' + (total !== 1 ? 's' : '');
        if (total > 0) {
            summaryText += ' (';
            const parts = [];
            if (adultos > 0) parts.push(adultos + ' Adulto' + (adultos !== 1 ? 's' : ''));
            if (ninos > 0) parts.push(ninos + ' Niño' + (ninos !== 1 ? 's' : ''));
            if (inapam > 0) parts.push(inapam + ' INAPAM');
            summaryText += parts.join(', ') + ')';
        }
        
        document.getElementById('passengerSummary').textContent = summaryText;
    }
    
    // Ejemplo de cómo cargar datos dinámicamente
    /*
    fetch('api/terminales.php')
        .then(response => response.json())
        .then(data => {
            const origenSelect = document.getElementById('origen');
            const destinoSelect = document.getElementById('destino');
            
            data.forEach(terminal => {
                const option = document.createElement('option');
                option.value = terminal.id;
                option.textContent = terminal.nombre;
                
                origenSelect.appendChild(option.cloneNode(true));
                destinoSelect.appendChild(option);
            });
        });
    */
});