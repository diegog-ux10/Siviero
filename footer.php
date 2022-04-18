<script>
    function setWeatherData() {
        let lon
        let lat

        let temperaturaValor = document.getElementById('temperatura-valor')
        let ubicacion = document.getElementById('ubicacion')
        let iconoAnimado = document.getElementById('icono-animado')
        let temperaturaValorMobile = document.getElementById('temperatura-valor-mobile')
        let ubicacionMobile = document.getElementById('ubicacion-mobile')
        let iconoAnimadoMobile = document.getElementById('icono-animado-mobile')

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
                    temperaturaValorMobile.textContent = `${temp}°`

                    let lugar = data.name
                    ubicacion.textContent = lugar
                    ubicacionMobile.textContent = lugar
                    console.log(lugar)

                    let iconCode = data.weather[0].main
                    console.log(iconCode)

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

                    switch(iconCode) {
                        case 'Clear':
                            iconoAnimadoMobile.src = '<?php echo get_theme_file_uri() . "/assets/animated/day.svg" ?>'
                        break;
                        case 'Clouds':
                            iconoAnimadoMobile.src = '<?php echo get_theme_file_uri() . "/assets/animated/cloudy-day-2.svg" ?>'
                            
                        break;
                        case 'Thunderstorm':
                            iconoAnimadoMobile.src = '<?php echo get_theme_file_uri() . "/assets/animated/thunder.svg" ?>'
                        break;
                        case 'Drizzle':
                            iconoAnimadoMobile.src = '<?php echo get_theme_file_uri() . "/assets/animated/rainy-1.svg" ?>'
                        break;
                        case 'Rain':
                            iconoAnimadoMobile.src = '<?php echo get_theme_file_uri() . "/assets/animated/rainy-2.svg" ?>'
                        break;
                        case 'Snow':
                            iconoAnimadoMobile.src = '<?php echo get_theme_file_uri() . "/assets/animated/snowy-1.svg" ?>'
                        break;
                    }

                    


                })
                .catch( error  => {
                    console.log(error)
                })
            })
            
        }
    }
    window.addEventListener('load', setWeatherData)
</script>
<footer class="contenedor-principal">
    <div class="direccion contenedor-secundario padding-responsive">
        <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_theme_file_uri() . "./assets/img/logo-footer.png" ?>" alt=""></a>
        <p>Avenida Nossa Senhora da Luz, 2005 - Centro - Clevelândia/PR | (46) 3252-8350</p>
    </div>
    <div class="derechos contenedor-principal padding-responsive">
        <div class="contenedor-secundario">
            <p>© Todos os direitos reservados - Siviero Cereais, Insumos Agrícolas e Transportes -  2022  | Política de Privacidade</p>
        </div>
        
    </div>
    <?php wp_footer(); ?>
</footer>
</body>
</html>