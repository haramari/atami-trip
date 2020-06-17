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
            <img id="noren" src="/images/header.png">
            <a href="https://travel.ataminews.gr.jp/en/" target="_blank">
                <img id="animal-onsen" src="/images/animal_onsen.png">
            </a>
            <p><h5>Click the animals to check the official website of Atami city!</h5></p>
          </div>

          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Schedule</li>
            </ul>
            <div class="row">

            <div class="timeline-centered">

              <article class="timeline-entry">
                <div class="timeline-entry-inner">
                    <time class="timeline-time" datetime="2014-01-10T03:45">
                    <span><strong>1:00 PM</strong></span>
                    <span><strong>Friday 19th</strong></span></time>

                    <div class="timeline-icon bg-success"><i class="entypo-feather"></i></div>

                    <div class="timeline-label">
                        <h2>Morning Group</a></h2>
                        <blockquote><p class="attention">The morning group will leave at 1:00 pm.</p>
                            Pack your snack in your backpack and meet by the entrance. :)
                            We will all ride in the same car( 8 people).
                        </blockquote>

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
                </div>
              </article>

              <article class="timeline-entry left-aligned">
                <div class="timeline-entry-inner">
                    <time class="timeline-time" datetime="2014-01-10T03:45">
                        <span><strong>2:00 PM</strong></span>
                        <span><strong>Friday 19th</strong></span>
                    </time>

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
                    <time class="timeline-time" datetime="2014-01-09T13:22">
                        <span><strong>3:00 PM</strong></span>
                        <span><strong>Friday 19th</strong></span>
                    </time>

                    <div class="timeline-icon bg-info">
                        <i class="entypo-location"></i>
                    </div>

                    <div class="timeline-label">
                        <h2>Check in<br>( <a href="https://www.airbnb.jp/rooms/21058910?adults=1&s=28&user_id=185088506&unique_share_id=14542653-C0DC-45DE-B8F8-C209DD594431&ref_device_id=e80f0ee137f01bed47c1d3523f039153882afb30&_branch_match_id=800964562656479376&_set_bev_on_new_domain=1592140746_ZTgwMDdhMTMyMGU4&source_impression_id=p3_1592203061_aljpVkDWZ%2BHQF%2Fgp&guests=1" target="_blank">JP</a> / <a href="https://www.airbnb.co.uk/rooms/21058910?adults=1&s=28&user_id=185088506&unique_share_id=14542653-C0DC-45DE-B8F8-C209DD594431&ref_device_id=e80f0ee137f01bed47c1d3523f039153882afb30&_branch_match_id=800964562656479376&_set_bev_on_new_domain=1592140746_ZTgwMDdhMTMyMGU4&source_impression_id=p3_1592203061_aljpVkDWZ%2BHQF%2Fgp&guests=1" target="_blank">EN</a> )</h2>
                        <blockquote><h2>16-2 Shōwachō, Atami-shi, Shizuoka-ken 413-0022</h2><br>
                            (sorry, the map is not working yet...)
                        </blockquote>
                    </div>
                </div>
              </article>

              <article class="timeline-entry left-aligned">
                <div class="timeline-entry-inner">
                    <time class="timeline-time" datetime="2014-01-10T03:45">
                        <span><strong>Evening</strong></span>
                        <span><strong>Friday</strong></span>
                    </time>

                    <div class="timeline-icon bg-secondary">
                        <i class="entypo-suitcase"></i>
                    </div>

                    <div class="timeline-label">
                        <h2>BBQ</h2>
                        <blockquote>We can have a BBQ in the terrace!</blockquote>
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
                    </div>
            </article>

            <article class="timeline-entry left-aligned">
              <div class="timeline-entry-inner">
                <time class="timeline-time" datetime="2014-01-10T03:45">
                    <span><strong>10:00 AM</strong></span>
                    <span><strong>Saturday 20th</strong></span>
                </time>

                <div class="timeline-icon bg-danger">
                    <i class="entypo-camera"></i>
                </div>

                <div class="timeline-label">
                    <h2>Checkout</h2>

                    <blockquote><p><h2>Checkout is at 10:00 AM.</h2></p>
                    After checking out we will divide in two groups. Group A goes to Onsen while group B goes to the Atami Castle.
                    </blockquote>

                    <li>Group A: Onsen</li>
                    <p>Let's enjoy the famous onsen area.</p>
                    <li>Group B: Castle</li>
                    <p>Click "Shachihoko" to see the information.</p>

                    <p><img class="min-icons" src="/images/onsen.png">OR <a href ="http://atamijyo.com/access" target="_blank"><img class="min-icons" src="/images/shachihoko.png"></a></p>
                </div>
              </div>
            </article>

            <article class="timeline-entry begin">
              <div class="timeline-entry-inner">
                <time class="timeline-time" datetime="2014-01-10T03:45">
                    <span><strong>2:00 PM</strong></span>
                    <span><strong>Saturday 20th</strong></span>
                </time>

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
          <a class="btn btn-link" href="{{ route('bonus') }}" id="bonus">Bonus</a>
        </div>
    </body>
</html>
