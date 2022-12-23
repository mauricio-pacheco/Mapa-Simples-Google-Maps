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

    #menu_esquerda {
        margin-top: 120px;
        position: absolute;
        left: 0;
        margin-top: 76px;
        opacity: 0.8;
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
        float: right;
        background-color: #fff;
        height: 640px;
        width: 220px;
        z-index: 1;
    }

    .fonte_padrao {
        color: #000; font-size: 13px; text-decoration:none; font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, "sans-serif"
    }

</style>
</style>
<div id="mapa"></div>

<div id="menu_esquerda">

    <table>
        <tr>
            <td class="fonte_padrao">
                <div style="height: 8px"></div>
            </td>
        </tr>
        <tr>
            <td class="fonte_padrao">
                &nbsp;Vendedores
            </td>
        </tr>
    </table>

    <div style="height: 4px;"></div>
    <div style="height: 1px; background-color: #003471; width: 98%"></div>
    <div style="height: 4px;"></div>

    <table>
        <tr>
            <td class="fonte_padrao">
                <div style="height: 8px"></div>
            </td>
        </tr>
        <tr>
            <td class="fonte_padrao">
                &nbsp;Revendas
            </td>
        </tr>
    </table>

    <div style="height: 4px;"></div>
    <div style="height: 1px; background-color: #003471; width: 98%"></div>
    <div style="height: 4px;"></div>

    <table>
        <tr>
            <td class="fonte_padrao">
                <div style="height: 8px"></div>
            </td>
        </tr>
        <tr>
            <td class="fonte_padrao">
                &nbsp;Representantes
            </td>
        </tr>
    </table>

    <div style="height: 4px;"></div>
    <div style="height: 1px; background-color: #003471; width: 98%"></div>
    <div style="height: 4px;"></div>


    <table>
        <tr>
            <td class="fonte_padrao">
                <div style="height: 8px"></div>
            </td>
        </tr>
        <tr>
            <td class="fonte_padrao">
                &nbsp;Clientes
            </td>
        </tr>
    </table>

    <div style="height: 4px;"></div>
    <div style="height: 1px; background-color: #003471; width: 98%"></div>
    <div style="height: 4px;"></div>

</div>

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
