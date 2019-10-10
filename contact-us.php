<!DOCTYPE html>
<html lang="nl">
    <?php include 'common/head.php'; ?>
   <body class="woningbieder">
      <?php include './common/header.php'; ?>

      <main class="contact-us">
         <section class="banner banner__inner" style="background: #fff url(./media/images/header-contact.jpg) 10% 100%/cover no-repeat;"> 
            <div class="container text-center">
               <div class="title text-center">
                  <h1 class="headline">CONTACT US</h1>
               </div>
            </div> 
         </section>
         
         <?php include './common/request-form.php'; ?>

         <section class="contact-us">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8 col-form">
                     <h1>Vul ons contactformulier in indien u vragen heeft</h1> 
                     <form method="post">
                        <div class="row">
                           <div class="form-group col-md-6">
                              <label for="firstName">Voornaam</label>
                              <input name="first_name" class="form-control" type="text" placeholder="" id="firstName">
                           </div>
                           <div class="form-group col-md-6">
                              <label for="firstName">Achternaam</label>
                              <input name="last_name" class="form-control" type="text" placeholder="" id="lastName">
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="exampleInputEmail1">E-mail</label>
                           <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Voer hier uw e-mailadres in">
                        </div>
                        <div class="form-group">
                           <label for="exampleTextarea">Bericht</label>
                           <textarea name="message" class="form-control" placeholder="Type hier u bericht waarover u ons wilt informeren" id="exampleTextarea" rows="5"></textarea>
                        </div>
                        <div class="row action-row">
                           <div class="col-md-8">
                              <p class="tiny">Hierbij bevestig ik dat bovenstaande informatie juist is.</p>
                           </div>
                           <div class="col-md-4 text-md-right">
                              <button type="submit" class="btn btn-primary btn-lg text-md-center">Verzenden</button>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="col-lg-4 postal-addresss">
                     <div class="process-details">
                        <div class="process-list">
                           <div class="pb"></div>
                           <div class="pb-active v78"></div>
                           <h2>78% antwoord binnen 2 uur</h2>
                           <small>Snelheid</small>
                        </div>
                        <div class="process-list">
                           <div class="pb"></div>
                           <div class="pb-active v80"></div>
                           <h2>178 mensen geholpen</h2>
                        </div>
                        <div class="process-list">
                           <div class="pb"></div>
                           <div class="pb-active v100"></div>
                           <h2>100% tevredenheid</h2>
                           <small>*Nog geen negatieve reacties</small>
                        </div>
                     </div> 
                     
                     <div class="address-wrapper">
                           <p class="address">
                              <span class="company">Real Estate</span><br>
                              Kalvermarkt 53 2511 CB Den Haag
                           </p>
                           <p class="tel">
                              <a href="tel:06 0000000">06 0000000</a>
                           </p>
                     </div>
                  </div>
               </div>
            </div>
         </section>

         <section class="process" data-move="bottom">
            <div class="container">
               <div class="row">
                  <div class="col-md-12"> 
                     <h2>Hoe het werkt</h2>
                     <div class="line line-base"></div>
                     <p>
                        Uw huis binnen 24 uur verkopen? Dat kan! 
                        Wij geven het beste bod en bovendien 100% verkoopzekerheid.
                     </p>
                     <div class="row steps">
                        <div class="col-md-6">
                           <h3>Aanvraag</h3>
                           <p>Vul bovenaan deze pagina uw gegevens in en ontvang een competitief bod. Ook kunt u ons via WhatsApp (0616559194) om een bod vragen.</p>
                        </div>
                        <div class="col-md-6">
                           <h3>Ontvang een richtprijs</h3>
                           <p>Binnen enkele uren ontvangt u van ons een richtprijs voor uw woning. Gratis en vrijblijvend.</p>
                        </div>

                        <div class="col-md-6">
                           <h3>Waardebepaling</h3>
                           <p>Spreekt onze richtprijs u aan? Een taxateur komt bij u langs wanneer het u uitkomt. Dit verplicht u tot niets en is geheel kosteloos. Aan de hand van de taxatie brengen wij een definitief bod uit op uw woning.</p>
                        </div>
                        <div class="col-md-6"> 
                           <h3>Verkoop en overdracht</h3>
                           <p>Verkoop binnen enkele dagen. Akkoord met ons bod? Dan stelt de notaris een koopovereenkomst op en wordt er een afspraak gemaakt om de koopakte te ondertekenen. Uw huis is definitief verkocht.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>

         <section class="properties">
            <div class="container">
               <div class="row">
                  <div class="col-12 title-row text-center">
                     <h2>Door Ons Gekochte Huizen</h2>
                     <div class="line line-base"></div>
                     <p>Ook uw woning kunnen wij direct en met zekerheid aankopen. Alles is bespreekbaar. Informeer vrijblijvend naar mogelijkheden die wij u kunnen bieden.</p>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                     <div class="card card-property">
                        <a href="house-detail.php" class="card-image-wrapper">
                           <img class="card-img-top img-fluid" src="media/images/properties/property-1.jpg" alt=""/>
                        </a>
                        <div class="card-body">
                           <p class="city">
                              Amsterdam
                              <span class="value"><span class="currency">€</span> 310<span class="multiplier">k</span></span>
                           </p>
                           <a href="house-detail.php" class='card-title-wrapper'>
                              <h4 class="card-title">Potjeskade</h4>
                           </a>
                        </div>
                        <div class="card-specs">
                           <div class="metres">
                              <div class="property">Meters</div>
                              <div class="value">
                                 <svg class="rh_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                                    <g>
                                       <circle cx="2" cy="2" r="2"></circle>
                                    </g>
                                    <g>
                                       <circle cx="2" cy="22" r="2"></circle>
                                    </g>
                                    <g>
                                       <circle cx="22" cy="2" r="2"></circle>
                                    </g>
                                    <rect x="1" y="1" width="2" height="22"></rect>
                                    <rect x="1" y="1" width="22" height="2"></rect>
                                    <path opacity="0.5" d="M23,20.277V1h-2v19.277C20.7,20.452,20.452,20.7,20.277,21H1v2h19.277c0.347,0.596,0.984,1,1.723,1
                                       c1.104,0,2-0.896,2-2C24,21.262,23.596,20.624,23,20.277z"></path>
                                 </svg>
                                 <span>90</span>
                              </div>
                           </div>
                           
                           <div class="rooms">
                              <div class="property">Badkamers</div>
                              <div class="value">
                                 <svg class="rh_svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <defs>
                                    </defs>
                                    <path d="M1111.91,600.993h16.17a2.635,2.635,0,0,1,2.68,1.773l1.21,11.358a2.456,2.456,0,0,1-2.61,2.875h-18.73a2.46,2.46,0,0,1-2.61-2.875l1.21-11.358A2.635,2.635,0,0,1,1111.91,600.993Zm0.66-7.994h3.86c1.09,0,2.57.135,2.57,1l0.01,3.463c0.14,0.838-1.72,1.539-2.93,1.539h-4.17c-1.21,0-2.07-.7-1.92-1.539l0.37-3.139A2.146,2.146,0,0,1,1112.57,593Zm11,0h3.86a2.123,2.123,0,0,1,2.2,1.325l0.38,3.139c0.14,0.838-.72,1.539-1.93,1.539h-5.17c-1.21,0-2.07-.7-1.92-1.539L1121,594C1121,593.1,1122.48,593,1123.57,593Z" transform="translate(-1108 -593)"></path>
                                 </svg>
                                 <span>1</span>
                              </div>
                           </div>

                           <div class="rooms">
                              <div class="property">Kamers</div>
                              <div class="value">
                              <svg class="rh_svg" xmlns="http://www.w3.org/2000/svg" width="23.69" height="24" viewBox="0 0 23.69 24">
                                 <path d="M1204,601a8,8,0,0,1,16,0v16h-2V601a6,6,0,0,0-12,0v1h-2v-1Zm7,6a6,6,0,0,0-12,0h12Zm-6,2a1,1,0,0,1,1,1v1a1,1,0,0,1-2,0v-1A1,1,0,0,1,1205,609Zm0,5a1,1,0,0,1,1,1v1a1,1,0,0,1-2,0v-1A1,1,0,0,1,1205,614Zm4.94-5.343a1,1,0,0,1,1.28.6l0.69,0.878a1,1,0,0,1-1.88.685l-0.69-.879A1,1,0,0,1,1209.94,608.657Zm2.05,4.638a1,1,0,0,1,1.28.6l0.35,0.94a1.008,1.008,0,0,1-.6,1.282,1,1,0,0,1-1.28-.6l-0.35-.939A1.008,1.008,0,0,1,1211.99,613.295Zm-11.93-4.638a1,1,0,0,1,.6,1.282l-0.69.879a1,1,0,1,1-1.87-.682l0.68-.88A1,1,0,0,1,1200.06,608.657Zm-2.05,4.639a1,1,0,0,1,.6,1.281l-0.34.941a1,1,0,0,1-1.88-.683l0.34-.94A1,1,0,0,1,1198.01,613.3Z" transform="translate(-1196.31 -593)"></path>
                              </svg>
                                 <span>3</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                     <div class="card card-property">
                        <a href="house-detail.php" class="card-image-wrapper">
                           <img class="card-img-top img-fluid" src="media/images/properties/property-2.jpg" alt=""/>
                        </a>
                        <div class="card-body">
                           <p class="city">
                              Utrecht
                              <span class="value"><span class="currency">€</span> 310<span class="multiplier">k</span></span>
                           </p>
                           <a href="house-detail.php" class='card-title-wrapper'>
                           <h4 class="card-title">Gildstraat</h4>
                           </a>
                        </div>
                        <div class="card-specs">
                           <div class="metres">
                              <div class="property">Meters</div>
                              <div class="value">
                                 <svg class="rh_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                                    <g>
                                       <circle cx="2" cy="2" r="2"></circle>
                                    </g>
                                    <g>
                                       <circle cx="2" cy="22" r="2"></circle>
                                    </g>
                                    <g>
                                       <circle cx="22" cy="2" r="2"></circle>
                                    </g>
                                    <rect x="1" y="1" width="2" height="22"></rect>
                                    <rect x="1" y="1" width="22" height="2"></rect>
                                    <path opacity="0.5" d="M23,20.277V1h-2v19.277C20.7,20.452,20.452,20.7,20.277,21H1v2h19.277c0.347,0.596,0.984,1,1.723,1
                                       c1.104,0,2-0.896,2-2C24,21.262,23.596,20.624,23,20.277z"></path>
                                 </svg>
                                 <span>90</span>
                              </div>
                           </div>
                           
                           <div class="rooms">
                              <div class="property">Badkamers</div>
                              <div class="value">
                                 <svg class="rh_svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <defs>
                                    </defs>
                                    <path d="M1111.91,600.993h16.17a2.635,2.635,0,0,1,2.68,1.773l1.21,11.358a2.456,2.456,0,0,1-2.61,2.875h-18.73a2.46,2.46,0,0,1-2.61-2.875l1.21-11.358A2.635,2.635,0,0,1,1111.91,600.993Zm0.66-7.994h3.86c1.09,0,2.57.135,2.57,1l0.01,3.463c0.14,0.838-1.72,1.539-2.93,1.539h-4.17c-1.21,0-2.07-.7-1.92-1.539l0.37-3.139A2.146,2.146,0,0,1,1112.57,593Zm11,0h3.86a2.123,2.123,0,0,1,2.2,1.325l0.38,3.139c0.14,0.838-.72,1.539-1.93,1.539h-5.17c-1.21,0-2.07-.7-1.92-1.539L1121,594C1121,593.1,1122.48,593,1123.57,593Z" transform="translate(-1108 -593)"></path>
                                 </svg>
                                 <span>1</span>
                              </div>
                           </div>

                           <div class="rooms">
                              <div class="property">Kamers</div>
                              <div class="value">
                              <svg class="rh_svg" xmlns="http://www.w3.org/2000/svg" width="23.69" height="24" viewBox="0 0 23.69 24">
                                 <path d="M1204,601a8,8,0,0,1,16,0v16h-2V601a6,6,0,0,0-12,0v1h-2v-1Zm7,6a6,6,0,0,0-12,0h12Zm-6,2a1,1,0,0,1,1,1v1a1,1,0,0,1-2,0v-1A1,1,0,0,1,1205,609Zm0,5a1,1,0,0,1,1,1v1a1,1,0,0,1-2,0v-1A1,1,0,0,1,1205,614Zm4.94-5.343a1,1,0,0,1,1.28.6l0.69,0.878a1,1,0,0,1-1.88.685l-0.69-.879A1,1,0,0,1,1209.94,608.657Zm2.05,4.638a1,1,0,0,1,1.28.6l0.35,0.94a1.008,1.008,0,0,1-.6,1.282,1,1,0,0,1-1.28-.6l-0.35-.939A1.008,1.008,0,0,1,1211.99,613.295Zm-11.93-4.638a1,1,0,0,1,.6,1.282l-0.69.879a1,1,0,1,1-1.87-.682l0.68-.88A1,1,0,0,1,1200.06,608.657Zm-2.05,4.639a1,1,0,0,1,.6,1.281l-0.34.941a1,1,0,0,1-1.88-.683l0.34-.94A1,1,0,0,1,1198.01,613.3Z" transform="translate(-1196.31 -593)"></path>
                              </svg>
                                 <span>3</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                     <div class="card card-property">
                        <a href="house-detail.php" class="card-image-wrapper">
                           <img class="card-img-top img-fluid" src="media/images/properties/property-3.jpg" alt=""/>
                        </a>
                        <div class="card-body">
                           <p class="city">
                              Den Haag
                              <span class="value"><span class="currency">€</span> 310<span class="multiplier">k</span></span>
                           </p>
                           <a href="house-detail.php" class='card-title-wrapper'>
                           <h4 class="card-title">Hertoginnelaan</h4>
                           </a>
                        </div>
                        <div class="card-specs">
                           <div class="metres">
                              <div class="property">Meters</div>
                              <div class="value">
                                 <svg class="rh_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                                    <g>
                                       <circle cx="2" cy="2" r="2"></circle>
                                    </g>
                                    <g>
                                       <circle cx="2" cy="22" r="2"></circle>
                                    </g>
                                    <g>
                                       <circle cx="22" cy="2" r="2"></circle>
                                    </g>
                                    <rect x="1" y="1" width="2" height="22"></rect>
                                    <rect x="1" y="1" width="22" height="2"></rect>
                                    <path opacity="0.5" d="M23,20.277V1h-2v19.277C20.7,20.452,20.452,20.7,20.277,21H1v2h19.277c0.347,0.596,0.984,1,1.723,1
                                       c1.104,0,2-0.896,2-2C24,21.262,23.596,20.624,23,20.277z"></path>
                                 </svg>
                                 <span>90</span>
                              </div>
                           </div>
                           
                           <div class="rooms">
                              <div class="property">Badkamers</div>
                              <div class="value">
                                 <svg class="rh_svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <defs>
                                    </defs>
                                    <path d="M1111.91,600.993h16.17a2.635,2.635,0,0,1,2.68,1.773l1.21,11.358a2.456,2.456,0,0,1-2.61,2.875h-18.73a2.46,2.46,0,0,1-2.61-2.875l1.21-11.358A2.635,2.635,0,0,1,1111.91,600.993Zm0.66-7.994h3.86c1.09,0,2.57.135,2.57,1l0.01,3.463c0.14,0.838-1.72,1.539-2.93,1.539h-4.17c-1.21,0-2.07-.7-1.92-1.539l0.37-3.139A2.146,2.146,0,0,1,1112.57,593Zm11,0h3.86a2.123,2.123,0,0,1,2.2,1.325l0.38,3.139c0.14,0.838-.72,1.539-1.93,1.539h-5.17c-1.21,0-2.07-.7-1.92-1.539L1121,594C1121,593.1,1122.48,593,1123.57,593Z" transform="translate(-1108 -593)"></path>
                                 </svg>
                                 <span>1</span>
                              </div>
                           </div>

                           <div class="rooms">
                              <div class="property">Kamers</div>
                              <div class="value">
                              <svg class="rh_svg" xmlns="http://www.w3.org/2000/svg" width="23.69" height="24" viewBox="0 0 23.69 24">
                                 <path d="M1204,601a8,8,0,0,1,16,0v16h-2V601a6,6,0,0,0-12,0v1h-2v-1Zm7,6a6,6,0,0,0-12,0h12Zm-6,2a1,1,0,0,1,1,1v1a1,1,0,0,1-2,0v-1A1,1,0,0,1,1205,609Zm0,5a1,1,0,0,1,1,1v1a1,1,0,0,1-2,0v-1A1,1,0,0,1,1205,614Zm4.94-5.343a1,1,0,0,1,1.28.6l0.69,0.878a1,1,0,0,1-1.88.685l-0.69-.879A1,1,0,0,1,1209.94,608.657Zm2.05,4.638a1,1,0,0,1,1.28.6l0.35,0.94a1.008,1.008,0,0,1-.6,1.282,1,1,0,0,1-1.28-.6l-0.35-.939A1.008,1.008,0,0,1,1211.99,613.295Zm-11.93-4.638a1,1,0,0,1,.6,1.282l-0.69.879a1,1,0,1,1-1.87-.682l0.68-.88A1,1,0,0,1,1200.06,608.657Zm-2.05,4.639a1,1,0,0,1,.6,1.281l-0.34.941a1,1,0,0,1-1.88-.683l0.34-.94A1,1,0,0,1,1198.01,613.3Z" transform="translate(-1196.31 -593)"></path>
                              </svg>
                                 <span>3</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row view-more">
                  <div class="col-12 text-center">
                     <a href="/houses-list.php" class="btn btn-lg btn-primary">Bekijk meer</a>
                  </div>
               </div>
            </div>
         </section>

      </main>
      <?php include './common/footer.php'; ?>
      <!-- Scripts -->
      <script src="./dist/js/app.js"></script>
   </body>
</html>