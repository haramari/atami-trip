<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      @include('layouts.head')
    </head>
    <body>
    <div class="container-fluid">
        <div class="content">
        <div class="card">
            <div class="card-header">
            @include('includes.header')
            <p>About Atami</p>
            <p>Click the image below to check the official website!</p>
            <a href="https://travel.ataminews.gr.jp/en/" target="_blank"><img id="animal-onsen" src="/images/animal_onsen.png"></a>
            </div>

        <div class="card-body">

                    <div class="row">
                        <div class="timeline-centered">

                    <article class="timeline-entry">

                        <div class="timeline-entry-inner">
                            <time class="timeline-time" datetime="2014-01-10T03:45">
                            <span><strong>11:00 AM</strong></span>
                            <span><strong>Friday 19th</strong></span></time>

                            <div class="timeline-icon bg-success">
                                <i class="entypo-feather"></i>
                            </div>

                            <div class="timeline-label">
                                <h2>Morning Group</a></h2>
                                <blockquote>The morning group will leave at 11:00 am. Pack your snack in your backpack and meet by the entrance. :) We will all ride in the same car( 8 people).</blockquote>

                              <div class="member-modal">
                                <!-- Button trigger modal -->
                                <button type="button" id="bbq-button" class="btn btn-success" data-toggle="modal" data-target="#open-modal-morning">Members</button>

                                <!-- Modal -->
                                <div class="modal fade" id="open-modal-morning" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">8 people</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div id="bbq-modal" class="modal-body">
                                      Daiki, Mari, KT, Gulia, Suguru, Steph, Kris, Yosuke
                                    </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div>
                                </div>
                              </div>
                            </div>

                    </article>

                    <article class="timeline-entry left-aligned">

                        <div class="timeline-entry-inner">
                            <time class="timeline-time" datetime="2014-01-10T03:45"><span><strong>2:00 PM</strong></span> <span><strong>Friday 19th</strong></span></time>

                            <div class="timeline-icon bg-warning">
                                <i class="entypo-suitcase"></i>
                            </div>

                            <div class="timeline-label">
                                <h2><a href="#">Lunch in Atami</a></h2>
                                <blockquote>We may book a restaurant.<br>
                                  We'll update details as soon as booking is done.
                                </blockquote>
                            </div>
                        </div>

                    </article>

                    <article class="timeline-entry">

                        <div class="timeline-entry-inner">
                            <time class="timeline-time" datetime="2014-01-09T13:22"><span><strong>3:00 PM</strong></span> <span><strong>Friday 19th</strong></span></time>

                            <div class="timeline-icon bg-info">
                                <i class="entypo-location"></i>
                            </div>

                            <div class="timeline-label">
                                <h2>Check in<br>( <a href="https://www.airbnb.jp/rooms/21058910?adults=1&s=28&user_id=185088506&unique_share_id=14542653-C0DC-45DE-B8F8-C209DD594431&ref_device_id=e80f0ee137f01bed47c1d3523f039153882afb30&_branch_match_id=800964562656479376&_set_bev_on_new_domain=1592140746_ZTgwMDdhMTMyMGU4&source_impression_id=p3_1592203061_aljpVkDWZ%2BHQF%2Fgp&guests=1" target="_blank">JP</a> / <a href="https://www.airbnb.co.uk/rooms/21058910?adults=1&s=28&user_id=185088506&unique_share_id=14542653-C0DC-45DE-B8F8-C209DD594431&ref_device_id=e80f0ee137f01bed47c1d3523f039153882afb30&_branch_match_id=800964562656479376&_set_bev_on_new_domain=1592140746_ZTgwMDdhMTMyMGU4&source_impression_id=p3_1592203061_aljpVkDWZ%2BHQF%2Fgp&guests=1" target="_blank">EN</a> )</h2>

                                <blockquote><h2>16-2 Shōwachō, Atami-shi, Shizuoka-ken 413-0022</h2><br>
                                  (sorry, the map is not working yet...)
                                </blockquote>

                                <div id="sample-checkin" class="map-checkin" style="height: 170px; width: 100%; position: relative; background-color: rgb(229, 227, 223); overflow: hidden; -webkit-transform: translateZ(0);"><div class="gm-style" style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; width: 100%; cursor: url(http://maps.gstatic.com/mapfiles/openhand_8_8.cur) 8 8, default; -webkit-transform-origin: 0px 0px; -webkit-transform: matrix(1, 0, 0, 1, 0, 0);"><div style="-webkit-transform: translateZ(0); position: absolute; left: 0px; top: 0px; width: 100%; z-index: 200;"><div style="-webkit-transform: translateZ(0); position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div></div><div style="-webkit-transform: translateZ(0); position: absolute; left: 0px; top: 0px; width: 100%; z-index: 201;"><div style="-webkit-transform: translateZ(0); position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="-webkit-transform: translateZ(0); position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1;"><div style="width: 256px; height: 256px; overflow: hidden; -webkit-transform: translateZ(0); position: absolute; left: 72px; top: -176px;"><canvas draggable="false" height="256" width="256" style="-webkit-user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;"></canvas></div><div style="width: 256px; height: 256px; overflow: hidden; -webkit-transform: translateZ(0); position: absolute; left: 72px; top: 80px;"></div><div style="width: 256px; height: 256px; overflow: hidden; -webkit-transform: translateZ(0); position: absolute; left: -184px; top: -176px;"></div><div style="width: 256px; height: 256px; overflow: hidden; -webkit-transform: translateZ(0); position: absolute; left: -184px; top: 80px;"></div><div style="width: 256px; height: 256px; overflow: hidden; -webkit-transform: translateZ(0); position: absolute; left: 328px; top: -176px;"></div><div style="width: 256px; height: 256px; overflow: hidden; -webkit-transform: translateZ(0); position: absolute; left: 328px; top: 80px;"></div></div></div></div></div><div style="-webkit-transform: translateZ(0); position: absolute; left: 0px; top: 0px; width: 100%; z-index: 202;"><div style="-webkit-transform: translateZ(0); position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="-webkit-transform: translateZ(0); position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="-webkit-transform: translateZ(0); position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div></div><div style="-webkit-transform: translateZ(0); position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1;"><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0); position: absolute; left: 72px; top: -176px;"></div><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0); position: absolute; left: 72px; top: 80px;"></div><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0); position: absolute; left: -184px; top: -176px;"></div><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0); position: absolute; left: -184px; top: 80px;"></div><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0); position: absolute; left: 328px; top: -176px;"></div><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0); position: absolute; left: 328px; top: 80px;"></div></div></div></div><div style="position: absolute; z-index: 0; left: 0px; top: 0px;"><div style="overflow: hidden; width: 431px; height: 170px;"><img src="http://maps.googleapis.com/maps/api/js/StaticMapService.GetMapImage?1m2&1i701363&2i1636267&2e1&3u14&4m2&1u431&2u170&5m4&1e0&5spt-BR&6sus&10b1&token=8503" style="width: 421px; height: 160px;"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1;"><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0); position: absolute; left: 72px; top: -176px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="http://mt0.googleapis.com/vt?lyrs=m@248313357&src=apiv3&hl=pt-BR&x=2740&y=6391&z=14&style=47,37%7Csmartmaps" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; -webkit-transform: translateZ(0);"></div><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0); position: absolute; left: 72px; top: 80px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="http://mt0.googleapis.com/vt?lyrs=m@248254527&src=apiv3&hl=pt-BR&x=2740&y=6392&z=14&style=47,37%7Csmartmaps" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; -webkit-transform: translateZ(0);"></div><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0); position: absolute; left: -184px; top: -176px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="http://mt1.googleapis.com/vt?lyrs=m@248282439&src=apiv3&hl=pt-BR&x=2739&y=6391&z=14&style=47,37%7Csmartmaps" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; -webkit-transform: translateZ(0);"></div><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0); position: absolute; left: -184px; top: 80px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="http://mt1.googleapis.com/vt?lyrs=m@248011677&src=apiv3&hl=pt-BR&x=2739&y=6392&z=14&style=47,37%7Csmartmaps" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; -webkit-transform: translateZ(0);"></div><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0); position: absolute; left: 328px; top: -176px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="http://mt1.googleapis.com/vt?lyrs=m@248301220&src=apiv3&hl=pt-BR&x=2741&y=6391&z=14&style=47,37%7Csmartmaps" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; -webkit-transform: translateZ(0);"></div><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0); position: absolute; left: 328px; top: 80px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="http://mt1.googleapis.com/vt?lyrs=m@248301220&src=apiv3&hl=pt-BR&x=2741&y=6392&z=14&style=47,37%7Csmartmaps" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; -webkit-transform: translateZ(0);"></div></div></div></div></div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" href="http://maps.google.com/maps?ll=36.738888,-119.783013&z=14&t=m&hl=pt-BR&gl=US&mapclient=apiv3" title="Clique para ver esta área no Google Maps" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 62px; height: 26px; cursor: pointer;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/google_white2.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 62px; height: 26px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 192px; bottom: 0px; width: 85px;"><div draggable="false" class="gm-style-cc" style="-webkit-user-select: none;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer;">Dados do mapa</a><span style="display: none;">Dados cartográficos ©2014 Google</strong></span></div></div></div><div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); -webkit-box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 256px; height: 118px; position: absolute; left: 61px; top: 5px;"><div style="padding: 0px 0px 10px; font-size: 16px;">Dados do mapa</div><div style="font-size: 13px;">Dados cartográficos ©2014 Google</div><div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/mapcnt3.png" draggable="false" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Dados cartográficos ©2014 Google</div></div><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; position: absolute; -webkit-user-select: none; right: 113px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;"><a href="http://www.google.com/intl/pt-BR_US/help/terms_maps.html" target="_blank" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Termos de Uso</a></div></div><div draggable="false" class="gm-style-cc" style="-webkit-user-select: none; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;"><a target="_new" title="Informar erros no mapa ou nas imagens para o Google" href="http://maps.google.com/maps?ll=36.738888,-119.783013&z=14&t=m&hl=pt-BR&gl=US&mapclient=apiv3&skstate=action:mps_dialog$apiref:1&output=classic" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Informar erro no mapa</a></div></div><div class="gmnoprint" draggable="false" controlwidth="32" controlheight="84" style="margin: 5px; -webkit-user-select: none; position: absolute; left: 0px; top: 0px;"><div controlwidth="32" controlheight="40" style="cursor: url(http://maps.gstatic.com/mapfiles/openhand_8_8.cur) 8 8, default; position: absolute; left: 0px; top: 0px;"><div style="width: 32px; height: 40px; overflow: hidden; position: absolute; left: 0px; top: 0px;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout2.png" draggable="false" style="position: absolute; left: -9px; top: -102px; width: 1028px; height: 214px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 32px; height: 40px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout2.png" draggable="false" style="position: absolute; left: -107px; top: -102px; width: 1028px; height: 214px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 32px; height: 40px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout2.png" draggable="false" style="position: absolute; left: -58px; top: -102px; width: 1028px; height: 214px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 32px; height: 40px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout2.png" draggable="false" style="position: absolute; left: -205px; top: -102px; width: 1028px; height: 214px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></div><div class="gmnoprint" controlwidth="0" controlheight="0" style="opacity: 0.6; display: none; position: absolute;"><div title="Girar o mapa em 90 graus" style="width: 22px; height: 22px; overflow: hidden; position: absolute; cursor: pointer;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/mapcnt3.png" draggable="false" style="position: absolute; left: -38px; top: -360px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></div><div class="gmnoprint" controlwidth="20" controlheight="39" style="position: absolute; left: 6px; top: 45px;"><div style="width: 20px; height: 39px; overflow: hidden; position: absolute;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/mapcnt3.png" draggable="false" style="position: absolute; left: -39px; top: -401px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div title="Aumentar o zoom" style="position: absolute; left: 0px; top: 2px; width: 20px; height: 17px; cursor: pointer;"></div><div title="Diminuir o zoom" style="position: absolute; left: 0px; top: 19px; width: 20px; height: 17px; cursor: pointer;"></div></div></div><div class="gmnoprint" style="margin: 5px; z-index: 0; position: absolute; cursor: pointer; right: 0px; top: 0px;"><div class="gm-style-mtc" style="float: left;"><div draggable="false" title="Mostrar mapa de ruas" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 1px 6px; border-bottom-left-radius: 2px; border-top-left-radius: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; border: 1px solid rgba(0, 0, 0, 0.14902); -webkit-box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; min-width: 28px; font-weight: 500;">Mapa</div><div style="background-color: white; z-index: -1; padding-top: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; border-width: 0px 1px 1px; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-right-color: rgba(0, 0, 0, 0.14902); border-bottom-color: rgba(0, 0, 0, 0.14902); border-left-color: rgba(0, 0, 0, 0.14902); -webkit-box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; position: absolute; left: 0px; top: 19px; text-align: left; display: none;"><div draggable="false" title="Mostrar mapa de ruas com terreno" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 3px 8px 3px 5px; direction: ltr; text-align: left; white-space: nowrap;"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-top-left-radius: 1px; border-top-right-radius: 1px; border-bottom-right-radius: 1px; border-bottom-left-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img src="http://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; width: 68px; height: 67px;"></div></strong></span><label style="vertical-align: middle; cursor: pointer;">Terreno</label></div></div></div><div class="gm-style-mtc" style="float: left;"><div draggable="false" title="Mostrar imagens de satélite" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(86, 86, 86); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 1px 6px; border-bottom-right-radius: 2px; border-top-right-radius: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; border-width: 1px 1px 1px 0px; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; border-top-color: rgba(0, 0, 0, 0.14902); border-right-color: rgba(0, 0, 0, 0.14902); border-bottom-color: rgba(0, 0, 0, 0.14902); -webkit-box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; min-width: 36px;">Satélite</div><div style="background-color: white; z-index: -1; padding-top: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; border-width: 0px 1px 1px; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-right-color: rgba(0, 0, 0, 0.14902); border-bottom-color: rgba(0, 0, 0, 0.14902); border-left-color: rgba(0, 0, 0, 0.14902); -webkit-box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; position: absolute; right: 0px; top: 19px; text-align: left; display: none;"><div draggable="false" title="Aumentar o zoom para a visualização de 45 graus" style="color: rgb(184, 184, 184); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 3px 8px 3px 5px; direction: ltr; text-align: left; white-space: nowrap; display: none;"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(241, 241, 241); border-top-left-radius: 1px; border-top-right-radius: 1px; border-bottom-right-radius: 1px; border-bottom-left-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img src="http://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; width: 68px; height: 67px;"></div></strong></span><label style="vertical-align: middle; cursor: pointer;">45°</label></div><div draggable="false" title="Mostrar imagens com nomes de rua" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 3px 8px 3px 5px; direction: ltr; text-align: left; white-space: nowrap;"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-top-left-radius: 1px; border-top-right-radius: 1px; border-bottom-right-radius: 1px; border-bottom-left-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;"><img src="http://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; width: 68px; height: 67px;"></div></strong></span><label style="vertical-align: middle; cursor: pointer;">Marcadores</label></div></div></div></div></div></div>
                            </div>
                        </div>
                    </article>

                    <article class="timeline-entry left-aligned">

                        <div class="timeline-entry-inner">
                            <time class="timeline-time" datetime="2014-01-10T03:45"><span><strong>Evening</strong></span><span><strong>Friday</strong></span></time>

                            <div class="timeline-icon bg-secondary">
                                <i class="entypo-suitcase"></i>
                            </div>

                            <div class="timeline-label">
                                <h2>BBQ</h2>
                                <blockquote>We can have a BBQ in the terrace!
                                </blockquote>
                                <p><img id="min-bbq" src="/images/bbq.png"></p>

                                    <!-- Button trigger modal -->
                                    <button type="button" id="bbq-button" class="btn btn-default" data-toggle="modal" data-target="#open-modal-bbq">Details</button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="open-modal-bbq" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">About BBQ</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div id="bbq-modal" class="modal-body">
                                        <p>BBQを楽しまれたい場合は、5FテラスにBBQ専用台がございます。
                                        お客様にご用意頂くのは、食材以外に消耗品(炭・焼き網・着火剤)になります。トングやスコップなどは備品として常設しております。
                                        焼き網は、35cm×75cm程度あれば大丈夫です。
                                        鉄板はご用意がありません。最近は100円ショップなどでも使い捨て用の焼きそば用アルミカップとかも販売されております。
                                        着火剤は、ジェル状や液体タイプの使用は禁止しています。チップ状の着火剤をご利用下さい。

                                        BBQ専用台の使用後は、炭を燃やしきって下さい。
                                        炭に水をかけたりしますと、耐火レンガが破裂する恐れがあります。
                                        炭や灰は当館で責任廃棄させて頂きます。
                                        </p>
                                        <p>If you want to enjoy BBQ, there is a BBQ stand on the 5th floor terrace.
                                        In addition to the ingredients, the customer will prepare consumables (charcoal, grill, igniter). Tongs and scoops are permanently installed as equipment.
                                        If the grill is about 35 cm x 75 cm, it is all right.
                                        There is no iron plate available. Recently, disposable aluminum cups for yakisoba are also sold at 100-yen shops.
                                        Ignition agents such as gel or liquid are prohibited. Please use a chip-shaped ignition agent.

                                        After using the BBQ stand, burn out the charcoal.
                                        If you put water on the charcoal, the refractory bricks may burst.
                                        We will dispose of charcoal and ash responsibly.
                                        </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>

                            </div>
                        </div>

                    </article>

                    <article class="timeline-entry">

                        <div class="timeline-entry-inner">
                            <time class="timeline-time" datetime="2014-01-10T03:45">
                            <span><strong>6:00 PM</strong></span>
                            <span><strong>Friday</strong></span></time>

                            <div class="timeline-icon bg-primary">
                                <i class="entypo-feather"></i>
                            </div>

                            <div class="timeline-label">
                                <h2>Evening group</h2>
                                <blockquote>Evening group leaves the house around 6pm.</blockquote>
                                <p><img id="min-night" src="/images/night.png"></p>
                                                              <div class="member-modal">
                                <!-- Button trigger modal -->
                                <button type="button" id="bbq-button" class="btn btn-primary" data-toggle="modal" data-target="#open-modal-evening">Members</button>

                                <!-- Modal -->
                                <div class="modal fade" id="open-modal-evening" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">6(8) people</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div id="bbq-modal" class="modal-body">
                                        Martin, Ryo, Ryota, Shingo, Yusuke, Mia, (Koya & Kouhei)
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div>
                                </div>
                              </div>
                            </div>
                    </article>

                    <article class="timeline-entry left-aligned">

                        <div class="timeline-entry-inner">
                            <time class="timeline-time" datetime="2014-01-10T03:45"><span><strong>10:00 AM</strong></span> <span><strong>Saturday 20th</strong></span></time>

                            <div class="timeline-icon bg-danger">
                                <i class="entypo-camera"></i>
                            </div>

                            <div class="timeline-label">
                                <h2>Checkout</h2>

                                <blockquote><p>Checkout is at 10:00 AM.</p>
                                After checking out we will divide in two groups. Group A goes to Onsen while group B goes to the Atami Castle.</blockquote>

                                <li>Group A: Onsen</li>
                                <p>Let's enjoy the famous onsen area.</p>
                                <li>Group B: Castle</li>
                                <p>Click "Shachihoko" to see the information.</p>

                                <p>
                                <img class="min-icons" src="/images/onsen.png">OR <a href ="http://atamijyo.com/access" target="_blank"><img class="min-icons" src="/images/shachihoko.png"></a>
                                </p>
                            </div>
                        </div>

                    </article>


                    <article class="timeline-entry begin">

                        <div class="timeline-entry-inner">

                            <time class="timeline-time" datetime="2014-01-10T03:45"><span><strong>2:00 PM</strong></span> <span><strong>Saturday 20th</strong></span></time>

                            <div class="timeline-icon" style="-webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg);">
                                <i class="entypo-flight"></i>
                            </div>

                            <div class="timeline-label">
                                <h2>Meet up at Hihokan</h2>
                                <blockquote>
                                    <p>A bizzare museum popular in the local area</p>
                                    Click the image to see the official website.
                                    <a href="https://www.atami-hihoukan.jp/" target="_blank"><img class="min-icons" src="/images/hihokan.png"></a>
                                    <iframe src="https://www.youtube.com/embed/r2EAxIivz0o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </blockquote>


                            </div>

                        </div>
                    </article>

                    <article class="timeline-entry left-aligned">

                    <div class="timeline-entry-inner">
                        <time class="timeline-time" datetime="2014-01-10T03:45"><span><strong>5:00 PM</strong></span> <span><strong>Saturday 20th</strong></span></time>

                        <div class="timeline-icon bg-success">
                            <i class="entypo-camera"></i>
                        </div>

                        <div class="timeline-label">
                            <h2>Drive home</h2>

                            <blockquote>
                                    <li>Morning group has to return the car by 8 pm.</li>
                                    <li>Evening group has to return the car by xx pm.</li>
                            </blockquote>

                            <img class="min-icons" src="/images/morning_car.png"><img class="min-icons" src="/images/evening_car.png">
                        </div>
                    </div>

                    </article>

                </div>
              </div>

              </div>
              </div>
            </div>
        </div>
    </body>
</html>
