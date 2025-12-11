document.addEventListener('DOMContentLoaded', function() {
    var botones = document.getElementsByClassName('ciudadesrecientes');    
    for (var i = 0; i < botones.length; i++) {
        botones[i].addEventListener('click', function() {
            var ciudad = this.querySelector('.titulociudadesrecientes').innerText;
                window.location.href = '/tiempo?ciudad=' + encodeURIComponent(ciudad);
        });
    }
});