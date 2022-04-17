<script>
    window.addEventListener('load', () => {
    let lon
    let lat

    let temperaturaValor = document.getElementById('temperatura-valor')
    let ubicacion = document.getElementById('ubicacion')
    let iconoAnimado = document.getElementById('icono-animado')


    if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition( posicion => {
            // console.log(posicion)
            lon = posicion.coords.longitude
            lat = posicion.coords.latitude

            const url = `https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lon}&appid=b1021dcf6ee71eed87479bd158a87d77`

            console.log(url)

            fetch(url)
            .then( responde => {return responde.json() })
            .then( data => {
                let temp = Math.round(data.main.temp - 273.15)
                console.log(temp)
                temperaturaValor.textContent = `${temp}°`

                let lugar = data.name
                ubicacion.textContent = lugar

                let clima = data.weather[0].description
                console.log(clima)
                iconoAnimado.textContent = clima

                let iconCode = data.weather[0].main
                switch(iconCode) {
                    case 'Clear':
                        iconoAnimado.src = '<?php echo get_theme_file_uri() . "/assets/animated/day.svg" ?>'
                    break;
                    case 'Clouds':
                        iconoAnimado.src = '<?php echo get_theme_file_uri() . "/assets/animated/cloudy-day-2.svg" ?>'
                    break;
                    case 'Thunderstorm':
                        iconoAnimado.src = '<?php echo get_theme_file_uri() . "/assets/animated/thunder.svg" ?>'
                    break;
                    case 'Drizzle':
                        iconoAnimado.src = '<?php echo get_theme_file_uri() . "/assets/animated/rainy-1.svg" ?>'
                    break;
                    case 'Rain':
                        iconoAnimado.src = '<?php echo get_theme_file_uri() . "/assets/animated/rainy-2.svg" ?>'
                    break;
                    case 'Snow':
                        iconoAnimado.src = '<?php echo get_theme_file_uri() . "/assets/animated/snowy-1.svg" ?>'
                    break;
                }


            })
            .catch( error  => {
                console.log(error)
            })
        })
          
    }
})
</script>
<footer class="contenedor-principal">
    <div class="direccion contenedor-secundario">
        <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_theme_file_uri() . "./assets/img/logo-footer.png" ?>" alt=""></a>
        <p>Avenida Nossa Senhora da Luz, 2005 - Centro - Clevelândia/PR | (46) 3252-8350</p>
    </div>
    <div class="derechos contenedor-principal">
        <div class="contenedor-secundario">
            <p>© Todos os direitos reservados - Siviero Cereais, Insumos Agrícolas e Transportes -  2022  | Política de Privacidade</p>
        </div>
        
    </div>
    <?php wp_footer(); ?>
</footer>
</body>
</html>