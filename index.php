<!DOCTYPE html>
<html lang="da">
    <head>
        <title>Grundfos Savings Calculator</title>
        <meta name="description" content="">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
 
        <?php include 'includes/getlocation.php'; ?>



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

                    </div>
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <div class="fieldsetwrapper">

                    </div>
                    
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <div class="fieldsetwrapper">

                    </div>
                    
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <div class="fieldsetwrapper">

                    </div>
                    
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <div class="fieldsetwrapper">


                    </div>
                    
                    <input type="submit" name="submit" class="submit action-button" value="Submit" />
                </fieldset>
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
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
    </body>
</html>