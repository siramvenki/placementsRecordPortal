<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

        <?php
        session_start();
        if(isset($_SESSION['user']))
          include 'headerLogout.php';
        else
          include "header.php";
        ?>
           <div class="row"></div>

            <div class="container">
              <div class="row"></div>
              <div class="row"></div>

            <h2 class="thin center">Flash News</h2>

            <ul class="collapsible" data-collapsible="accordion">
              <li>
                <div class="collapsible-header"><span class="badge"></span><i class="material-icons">place</i>First Flash News
                </div>
                <div class="collapsible-body"><?php   $p="hi how are you"; echo "$p";  ?></div>
              </li>
              <li>
                <div class="collapsible-header"><span class="badge"></span><i class="material-icons">place</i>Second Flash News</div>
                <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
              </li><li>
                <div class="collapsible-header"><span class="badge"></span><i class="material-icons">place</i>Third Flash News</div>
                <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
              </li>
            </ul>
            </div>

              <div class="row"></div>
              <div class="row"></div>

            <div class="container">
              <h2 class="thin center">Placement History</h2>
                <div class="row"  id="#one">
                  <div class="col s12 m3 l3">
                    <div class="card-panel teal">
                      <h1 class="white-text center">2016
                      </h1>
                    </div>
                  </div>

                  <div class="col s12 m3 l3">
                    <div class="card-panel teal">
                      <h1 class="white-text center">2015
                      </h1>
                    </div>
                  </div>


                  <div class="col s12 m3 l3">
                    <div class="card-panel teal">
                      <h1 class="white-text center">2014
                      </h1>
                    </div>
                  </div>

                  <div class="col s12 m3 l3">
                    <div class="card-panel teal">
                      <h1 class="white-text center">2013
                      </h1>
                    </div>
                  </div>
                </div>
                </div>

                  <ul class="pagination center">
                    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                    <li class="active"><a href="#one">1</a></li>
                    <li class="waves-effect"><a href="#two">2</a></li>
                    <i class="material-icons">chevron_right</i></a></li>
                  </ul>

            </div>


              <div class="row"></div>
              <div class="row"></div>
              <div class="row"></div>
              <div class="row"></div>
              <div class="row"></div>
              <div class="row"></div>


              <?php
                include "footer.php";
              ?>
      
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" language="javascript" src="js/script.js"></script>


    </body>
  </html>
