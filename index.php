<!DOCTYPE html>
<html lang="da">
    <head>
        <title>Grundfos Savings Calculator</title>
        <meta name="description" content="">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
            <form id="msform">
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
                            <input type="text" name="id" placeholder="Product ID/Number" id="inputid">
                            <input type="text" name="pumpname" placeholder="Product Name" id="inputname">
                        </div>
                        <div class="guidewrapper">
                            <img src="img/guidepics/1.jpg" id="inputidimg">
                            <img src="img/guidepics/2.jpg" id="inputnameimg">
                        </div>

                    </div>
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <div class="fieldsetwrapper">
                        <div class="inputwrapper">
                            <input type="text" name="pressure" placeholder="Pump pressure" id="inputpressure">
                            <input type="text" name="waterlevel" placeholder="Dynamic water level" id="inputwater">
                            <input type="text" name="flow" placeholder="Flow" id="inputflow">
                            <input type="text" name="power" placeholder="Power consumption" id="inputpower">
                        </div>
                        <div class="guidewrapper">
                            <img src="img/guidepics/1.jpg" id="inputpressureimg">
                            <img src="img/guidepics/2.jpg" id="inputwaterimg">
                            <img src="img/guidepics/1.jpg" id="inputflowimg">
                            <img src="img/guidepics/2.jpg" id="inputpowerimg">
                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <div class="fieldsetwrapper">
                        <div class="inputwrapper">
                            <input type="text" name="age" placeholder="Age of pump">
                            <select name="location">
                                <option selected="selected" id="pumplocationoption">Location of Pump</option>
                                <option value="basement">Basement</option>
                                <option value="garage">Garage</option>
                                <option value="other">Other</option>
                            </select>
                            <textarea id="pumpusage" name="pumpusage" placeholder="Usage of pumps. For pumping water, other types of liquid, etc."></textarea>
                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <div class="fieldsetwrapper">

                    </div>
                    <input type="button" name="previous" class="previous action-button" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <div class="fieldsetwrapper">

                    </div>


                    <input type="button" class="action-button" value="Output as PDF">
                    <input type="button" class="action-button" value="Get Help" id="helpbutton">
                    <!--<input type="submit" name="submit" class="submit action-button" value="Submit" />-->

                </fieldset>
                <aside id="customerform" class="">
                    <h4>Contact support to get help</h4>
                    <form>
                        <input type="text" name="custname" placeholder="Name">
                        <input type="text" name="custtlf" placeholder="Phone No.">
                        <input type="text" name="custadress" placeholder="Adress">
                        <input type="text" name="custemail" placeholder="E-mail">
                        <input type="text" name="custzip" placeholder="Zip Code">
                        <input type="text" name="custcity" placeholder="City" value="<?php echo $geoplugin->city; ?>" id="custcity">
                        <div id="formbuttons">
                            <input type="button" class="action-button" value="Close" id="closeaside">
                            <input type="submit" name="submit" class="submit action-button" value="Submit" id="custsubmit"/>
                        </div>

                    </form>
                </aside>
            </form>


        </main>

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
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
    </body>
</html>