<style>
    #container_banner_ads {
        width: 100%;
        max-width: 1100px;
        height: 165px;
        background-color: rgba(194, 210, 255, 0.2);
        border: 1px solid #ABC0E0;
        margin-bottom: 20px;
        margin-left: auto;
        margin-right: auto;
        color: #333;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 3px;
        padding: 10px;
        min-width: 330px;
    }
    #text-1 {
        display: flex;
        flex: 1;
        justify-content: space-between;
        align-items: center;
        flex-direction: row;
    }
    #text-1 p {
        font-size: 28px;
        font-weight: bold;
    }
    #container_text_ads {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }
    #container_banner_ads p {
        color: #171363;
        font-weight: bold;
    }
    #container_text_ads p, span {
        margin-bottom: 5px;
    }
    #contact_area_ads {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        width: 100%;
    }

    #contact_area_ads p{
        margin-bottom: 5px;
        display: flex;
        justify-content: center;
    }
    #contact_area_ads .material-icons, i{
        font-size: 20px;
        margin-right: 10px;
    }
    .phone_ads {
        font-size: 14px;
    }
    #logo_ads {
        width: 160px;
    }
    #logo_ads_mini {
        display: none;
        height: 50px;
    }
    @media only screen and (max-width: 770px) {
        #logo_ads {
            display: none;
        }
        #logo_ads_mini {
            display: block;
        }
    }
    @media only screen and (max-width: 505px) {
        #description_ads {
            display: none;
        }
    }
</style>
<div class="col-12">
    <a href="https://sisecf.com" target="_blank" id="container_banner_ads">
        <div style="text-align: center" id="text-1">
                <div id="container_text_ads">
                    <small style="margin-top: -18px; background-color: #FFF; padding: 0 5px">Publicidade</small>
                    <p>Sistema de gestão empresarial</p>
                    <span id="description_ads">Software para controle financeiro, emissão de NFe, NFCe e MDFe, entre outras funções</span>
                    <div id="contact_area_ads">
                        <div>
                            <p><i class="fas fa-phone-alt"></i><span class="phone_ads">(67) 3461-5952</span></p>
                            <p><i class="fab fa-whatsapp"></i> <span class="phone_ads">(67) 9 9965-9658</span></p>
                        </div>
                        <img src="{{url('images/Logotipo_JB_bike.png')}}" alt="logo_ads" id="logo_ads_mini">
                    </div>
                </div>
                <img src="{{url('images/Logotipo_JB_bike.png')}}" alt="logo_ads" id="logo_ads">
        </div>
    </a>
</div>