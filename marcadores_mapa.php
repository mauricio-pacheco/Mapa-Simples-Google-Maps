<style>
    #mapa {
        position: absolute;
        top: 0;
        left: 0;
        height:100vh;
        width:100%;
        z-index: 0;
    }

    img {
        border-radius: 6px;
    }
</style>
</style>
<div id="mapa"></div>

<script>
    //INICIALIZAR O MAPA
    function inicializar() {
        var coordenadas_fw = {lat: -27.369566, lng: -53.377585};
        var coordenadas_caibi = {lat: -27.072403, lng: -53.255575};
        var coordenadas_pelotas = {lat: -31.733597, lng: -52.378264};

        var mapa = new google.maps.Map(document.getElementById('mapa'), {
            zoom: 8,
            center: coordenadas_fw
        });

        //MARCADOR DA MATTRIZ (Frederico Westphalen/RS)
        var marker_matriz = new google.maps.Marker({
            position: coordenadas_fw,
            map: mapa,
            icon: '/imagens/marcadores/bandeira.png',
            title: 'AgroBella Matriz'
        });

        var infowindow_matriz = new google.maps.InfoWindow({
            content: "<img src=/imagens/empresa/fw.png><br><br><b>AGROBELLA NUTRIÇÃO ANIMAL</b><br>MATRIZ - Frederico Westphalen/RS"
        });

        marker_matriz.addListener("click", () => {
            infowindow_matriz.open({
                anchor: marker_matriz,
                map,
            });
        });

        //MARCADOR DA FILIAL (Caibi/SC)
        var marker_caibi = new google.maps.Marker({
            position: coordenadas_caibi,
            map: mapa,
            icon: '/imagens/marcadores/bandeira.png',
            title: 'AgroBella Caibi'
        });

        var infowindow_caibi = new google.maps.InfoWindow({
            content: "<img src=/imagens/empresa/caibi.png><br><br><b>AGROBELLA NUTRIÇÃO ANIMAL</b><br>FILIAL - Caibi/SC"
        });

        marker_caibi.addListener("click", () => {
            infowindow_caibi.open({
                anchor: marker_caibi,
                map,
            });
        });

        //MARCADOR DA FILIAL (Pelotas/RS)
        var marker_pelotas = new google.maps.Marker({
            position: coordenadas_pelotas,
            map: mapa,
            icon: '/imagens/marcadores/bandeira.png',
            title: 'AgroBella Pelotas'
        });

        var infowindow_pelotas = new google.maps.InfoWindow({
            content: "<img src=/imagens/empresa/pelotas.png><br><br><b>AGROBELLA NUTRIÇÃO ANIMAL</b><br>FILIAL - Pelotas/RS"
        });

        marker_pelotas.addListener("click", () => {
            infowindow_pelotas.open({
                anchor: marker_pelotas,
                map,
            });
        });




    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=SUA-CHAVE-AQUI&callback=inicializar">
</script>
