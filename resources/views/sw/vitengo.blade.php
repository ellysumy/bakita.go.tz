@extends('en.main')
@section('content')
<div id="main">


  <div class="container">

<div class="accordion" id="faq">
    <h4>Vitengo Mbalimbali vya BAKITA</h4>
    <div class="card">
        <div class="card-header" id="faqhead1">
            <a href="#" class="btn btn-header-link" data-toggle="collapse" data-target="#faq1" aria-expanded="true" aria-controls="faq1">Kitengo cha TEHAMA na Takwimu</a>
            </div>
            <div id="faq1" class="collapse" aria-labelledby="faqhead1" data-parent="#faq">
                <div class="card-body">
                              <!-- Put the card info here -->
                              <<!-- h4>Objectives</h4> -->
                    <p class="card-text"> Majukumu ya Kitengo hiki ni kama ifuatavyo: 
                      <ol type="i">
                        <li>
                          Kuandaa na kutekeleza mpango- mkakati wa TEHAMA
                        </li>
                        <li>
                          Kutoa ushauri  kuhusu matumizi sahihi ya teknolojia zenye gharamu naafu
                        </li>
                        <li>
                          Kuandaa na kusimamia makavazi ya kielektroni kwa ajili ya kutunza nyaraka na kumbukumbu muhimu za Baraza
                        </li>
                        <li>
                          Kutoa huduma endelevu za msaada kwa watumiaji
                        </li>
                        <li>
                          Kuunda na kusimamia mifumo ya uhifadhi na urejeshaji wa data za Baraza
                        </li>
                        <li>
                          Kushirikiana na Wakala wa Serikali Mtandao ili kuhakikisha uzingatiaji wa sera, sheria na viwango vya TEHAMA serikalini
                        </li>
                        <li>
                          Kuandaa, kukusanya na kuhifadhi takwimu za Baraza
                        </li>
                      </ol>
                    </p>


                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqhead2">
                            <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq2"
                            aria-expanded="true" aria-controls="faq2">Masoko na Uhusiano  na Umma</a>
                        </div>

                        <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                            <div class="card-body">
                              <h5>Majukumu ya kitengo hiki ni kama ifuatavyo;</h5>
                              <p class="card-text">Kushauri kuhusu masuala ya kuanzisha kazi/biashara mpya, kukuza mitandao na ushirikiano kwa wabia wa kitaifa na kimataifa na kuvutia wateja katika huduma zinazotolewa na Baraza.<br>
                              </p>
                                <p>
                                  <ol type="i">
                                    <li>
                                      Kuanzisha na kutekeleza mikakati ya masoko;
                                    </li>
                                    <li>
                                      Kutangaza na kuuzabidhaa na huduma mbalimbali zinazotolewa na Baraza
                                    </li>
                                    <li>
                                      Kuhifadhi kumbukumbu za matukio yote ya Baraza
                                    </li>
                                    <li>
                                      Kupitia na kuhuisha taarifa katika tovuti na majukwaa ya mitandao yote ya kijamii
                                    </li>
                                    <li>
                                      Kupokea maswali, maombi na maoni kutoka kwa wadau mbalimbali
                                    </li>
                                    <li>
                                      Kufanya utafiti wa masoko ya bidhaa na huduma zinazotolewa na Baraza
                                    </li>
                                  </ol>
                                </p>
                            </div>
                        </div>
                    </div>
                 
                    <div class="card">
                        <div class="card-header" id="faqhead3">
                            <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq3"
                            aria-expanded="true" aria-controls="faq3">Kitengo cha Ukaguzi wa Ndani</a>
                        </div>

                        <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                            <div class="card-body">
                                <h5 class="card-title">Majukumu ya kitengo hiki ni kama ifuatavyo</h5>
                          <!-- <p class="card-text"> Majukumu ya kitengo hiki ni kama ifuatavyo;</p> -->
                          <p>
                              <ol type="i">
                                <li>
                                  Kuandaa mpango wa ukaguzi wa ndani wa Baraza
                                </li>
                                <li>
                                  Kuunda na kusimamia utekelezaji wa sera za ukaguzi wa ndani
                                </li>
                                <li>
                                  Kupendekeza maboresho ya utendaji kazi wa ndani ya Baraza
                                </li>
                                <li>
                                  Kufanya ukaguzi wa ndani katika maeneo yote ya shughuli za Baraza
                                </li>
                                <li>
                                  Kushirikiana na Mkaguzi na Mdhibiti wa Hesabu za Serikali wakati wa ukaguzi
                                </li>
                                <li>
                                 Kusimamia upatikanaji wa majibu ya hoja za ukaguzi.
                                </li>
                              </ol>
                            </p>
                            </div>
                        </div>
                    </div>

                     <div class="card">
                        <div class="card-header" id="faqhead4">
                            <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq4"
                            aria-expanded="true" aria-controls="faq4">Kitengo cha Maktaba na Uhifadhi wa Nyaraka</a>
                        </div>

                        <div id="faq4" class="collapse" aria-labelledby="faqhead4" data-parent="#faq">
                            <div class="card-body">
                                <!-- <h5 class="card-title">Kitengo cha Maktaba na Uhifadhi wa Nyaraka</h5> -->
                          <p class="card-text"> Majukumu ya Kitengo hiki ni kama ifuatavyo:</p>
                          <p>
                            <ol type="i">
                              <li>
                                Kutunza kaseti, magazeti, video, na filamu za Kiswahili
                              </li>
                              <li>
                                Kuwasaidia watafiti na wanafunzi wa lugha ya Kiswahili
                              </li>
                              <li>
                                Kuandaa na kusimamia taarifa, sera na taratibu za maktaba
                              </li>
                              <li>
                                Kuanzisha na kusimamia utumiaji wa Mfumo wa Taarifa za Maktaba pamoja na huduma zake
                              </li>
                            </ol>
                          </p>
                            </div>
                        </div>
                    </div>

                     <div class="card">
                        <div class="card-header" id="faqhead5">
                            <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq5"
                            aria-expanded="true" aria-controls="faq5">Kitengo cha Ununuzi na Ugavi</a>
                        </div>

                        <div id="faq5" class="collapse" aria-labelledby="faqhead5" data-parent="#faq">
                            <div class="card-body">
                                <h5 class="card-title">Kitengo cha Ununuzi na Ugavi</h5>
                          <p class="card-text"> Majukumu ya Kitengo hiki ni kama ifuatavyo</p>
                          <p>
                            <ol type="i">
                                <li>
                                  Kuandaa na kutekeleza mipango ya mwaka ya ununuzi na ugavi
                                </li>
                                <li>
                                   Kusimamia utekelezaji wa sheria na kanuni za ununuzi na ugavi Serikalini
                                </li>
                                <li>
                                  Kusimamia mchakato wa zabuni kwa kufuata taratibu zilizopo
                                </li>
                                <li>
                                  Kutoa taarifa za ununuzi za vipindi mbalimbali
                                </li>
                                <li>
                                  Kuandaa orodha ya vifaa vya ofisi
                                </li>
                              </ol>
                          </p>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>

@stop