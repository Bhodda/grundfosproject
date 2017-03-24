<!DOCTYPE html>
<html lang="da">
    <head>
        <title>Grundfos Savings Calculator</title>
        <meta name="description" content="">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
        <script language="JavaScript" src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>
        <?php include 'includes/getlocation.php';?>
        <script src="js/inputfields.js"></script>
    </head>
    <body>

        <header>
            <div class="widthwrapper">
                <a href="http://www.grundfos.com/"><img src="img/logo.png" id="desklogo"></a>

            </div>
        </header>

        <main>
            <form id="msform" method="post">
                <ul id="progressbar">
                    <li class="active"></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <fieldset>
                    <div class="fieldsetwrapper">
                        <div class="inputwrapper">
                            <div class="errordiv">
                                <div id="iderror">Can't be empty or over 14 characters<div></div></div>
                                <label for="id">Product ID / Number*</label>
                                <input type="text" name="product_nr" id="inputid">
                            </div>
                            <div class="errordiv">
                                <div id="nameerror">Can't be empty or over 14 characters<div></div></div>
                                <label for="pumpname">Product Name*</label>
                                <input type="text" name="pumpname" id="inputname" placeholder="Alpha3, UPS2 etc.">
                            </div>
                        </div>
                        <div class="guidewrapper">
                            <img class="productimg">
                            <img src="img/guidepics/1.gif" id="inputidimg">
                            <img src="img/guidepics/2.gif" id="inputnameimg">
                        </div>

                    </div>
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <div class="fieldsetwrapper">
                        <div class="inputwrapper" id="techinput">
                            <div class="errordiv">
                                <div id="pressureerror">Values must be between 0 and 100<div></div></div>
                                <label for="pressure">Pressure*</label>
                                <input type="text" name="pressure" id="inputpressure">
                                <span>bar</span>
                            </div>
                            <div class="errordiv">
                                <div id="watererror">Values must be between 0 and 1000<div></div></div>
                                <label for="waterlevel">Dynamic Water Level*</label>
                                <input type="text" name="waterlevel" id="inputwater">
                                <span>m</span>
                            </div>

                            <div class="errordiv">
                                <div id="flowerror">Values must be between 0 and 10000<div></div></div>
                                <label for="flow">Flow*</label>
                                <input type="text" name="flow" id="inputflow">
                                <span>m³/h</span>
                            </div>

                            <div class="errordiv">
                                <div id="powererror">Values must be between 0 and 1000<div></div></div>
                                <label for="power">Power Consumption*</label>
                                <input type="text" name="power" id="inputpower">
                                <span>kW</span>
                            </div>
                        </div>
                        <div class="guidewrapper">
                            <img class="productimg">
                            <img src="img/guidepics/3.gif" id="inputpressureimg">
                            <img src="img/guidepics/4.gif" id="inputwaterimg">
                            <img src="img/guidepics/5.gif" id="inputflowimg">
                            <img src="img/guidepics/6.gif" id="inputpowerimg">
                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button" value="Previous" />

                    <input type="button" name="next" class="next action-button disable-button disabled" value="Next"/>
                    <div class="buttondisable"></div>

                </fieldset>
                <fieldset>
                    <div class="fieldsetwrapper">
                        <div class="inputwrapper">
                            <label for="age">Age of Pump in years</label>
                            <input type="text" name="age" id="inputage">

                            <label for="location">Location of Pump</label>
                            <select name="pump_location" id="pump_location">
                                <option selected="selected" id="pumplocationoption">Select</option>
                                <option value="basement">Basement</option>
                                <option value="garage">Garage</option>
                                <option value="garage">Attic</option>
                                <option value="other">Other</option>
                            </select>
                            <label for="pumpusage">Usage of Pumps</label>
                            <textarea id="pumpusage" name="pump_usage" placeholder="For pumping water, other types of liquid, etc."></textarea>
                        </div>
                        <div class="guidewrapper">
                            <img class="productimg">
                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset id="widerfieldset">
                    <div class="fieldsetwrapper" id="radiofield">
                        <h2>Choose a Grundfos pump to see how much you can save!</h2>
                        <label class="alpha2">
                            <input type="radio" name="pump" id="alpha2" value="34" />
                            <img src="img/pumpimg/alpha2.jpg">
                            <h3>Alpha 2</h3>
                            <br>
                            <ul>
                                <li>AUTOADAPT function automatically finds the best setpoint and thus reduces the energy consumption and setup time.</li>
                                <li>The best energy efficiency index (EEI) in the market provides the highest energy savings during a year.</li>
                                <li>New improved start. Secure start under tough conditions.</li>
                            </ul>
                        </label>
                        <label class="alpha3">
                            <input type="radio" name="pump" id="alpha3" value="34" />
                            <img src="img/pumpimg/alpha3.jpg">
                            <h3>Alpha 3</h3>
                            <br>
                            <ul>
                                <li>New Read out of pump performance. Enable the use of ALPHAreader for heat emission balancing</li>
                                <li>New Manual Summer mode. Save energy during summertime and ensure safe start in the heating season</li>
                                <li>Automatic Night Setback that further reduces the energy consumption</li>
                            </ul>
                        </label>
                        <label class="magna3">
                            <input type="radio" name="pump" id="magna3" value="68" />
                            <img src="img/pumpimg/magna3.jpg">
                            <h3>Magna3</h3>
                            <br>
                            <ul>
                                <li>Controller integrated in the control box</li>
                                <li>FLOWADAPT and FLOWLIMIT (more than a pump function as it reduces the need for pump throttling valves).</li>
                                <li>Large temperature range where the liquid temperature and the ambient temperature are independent of each other.</li>
                            </ul>


                        </label>
                    </div>
                    <input type="button" name="previous" class="previous action-button" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" id="showchart"/>
                </fieldset>
                <fieldset>
                    <div class="fieldsetwrapper">
                        <h1>Your savings</h1>
                        <h2>You would only have to pay <span id="h2chart-bar-percent"></span> of you current amount, by changing your old pump with a new Grundfos pump.</h2>
                        <div class="chartbar clearfix " data-percent="">
                            <div class="chartbar-bar" id="chartbarcolorchange"></div>
                            <div class="chart-bar-percent"><span class="chart-bar-text"></span></div>
                        </div>
                    </div>


                    <!--<input type="button" class="action-button" value="Output as PDF">-->
                    <input type="button" class="action-button greenbutton" value="Get Help" id="helpbutton">
                </fieldset>
                <aside id="customerform" class="">
                    <h4>Contact support to get help on changing out your old pump</h4>

                    <input type="text" name="client_name" placeholder="Name" id="client_name">
                    <input type="text" name="client_phone" placeholder="Phone No." id="client_phone">
                    <input type="text" name="client_address" placeholder="Adress" id="client_adress">
                    <input type="text" name="client_email" placeholder="E-mail" id="client_email">
                    <input type="text" name="client_zip" placeholder="Zip Code" id="client_zip">
                    <input type="text" name="client_city" placeholder="City" value="<?php echo $geoplugin->city; ?>" id="custcity">
                    <div id="formbuttons">
                        <input type="button" class="action-button" value="Close" id="closeaside">
                        <input type="submit" name="submit" class="greenbutton action-button" value="Submit" id="submit_form"  onclick="this.disabled = true"/>
                    </div>

                </aside>
            </form>


        </main>

        <aside id="successmessage">
            <p>Thank you for contacting Grundfos customer support.</p>
            <img src="img/tick.png">
        </aside>
        <footer>
            <div class="widthwrapper">
                <h3>Be Think Innovate</h3>
                <div class="line"></div>
                <h4>Grundfos Holding A/S</h4>
                <ul>
                    <li>Poul Due Jensens Vej 7</li>
                    <li>DK - 8850 Bjerringbro, Denmark</li>
                    <li>Tel.: (+45) 87 50 14 00 | Fax: (+45) 87 50 14 02</li>
                    <li>CVR: 31 85 83 56</li>
                </ul>
                <ul id="legal">
                    <li><a href="http://www.grundfos.com/navfooter/legal-issues.html">Legal Issues</a></li>
                    <li>|</li>
                    <li><a href="http://www.grundfos.com/nav/contact.html">Contact Support</a></li>
                </ul>
            </div>
        </footer>


        <script src="js/form.js"></script>
        <script src="js/customerform.js"></script>
        <script src="js/displayChart.js"></script>
        <script src="js/dbfetch.js"></script>
    </body>
</html>