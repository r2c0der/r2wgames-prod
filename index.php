<!DOCTYPE html>

<?php
define ("PAGE_TITLE", "r2wGames - Indie Game Studio");
include_once 'includes/header.inc';
?>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title><?php echo PAGE_TITLE ?></title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

  <?php echo printHeader()?>
    <script  src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js" ></script>

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top r2wg_navbar">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll topbar">
            <div class="row">
                    <!-- LOGO -->
                    <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2 ">
                    <img src="graphics/logos/r2wgames_mini_logo.png" width="50em"  />
                    </div>   <!-- /LOGO -->
                    <!-- TAG LINE -->
                    <div class="col-lg-push-1 col-md-push-1 col-lg-11 col-md-11 col-med-9 visible-lg visible-md ">
                    <a class="navbar-brand r2w_navbar_brand" href="#page-top">Indie Game Development &amp; Production Studio</a>
                    </div>   <!-- /TAGLINE -->

                <div class="col-sm-8 col-xs-8 visible-sm-inline visible-xs-inline">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#r2wg_navbar_scroll" >
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                </div> <!-- /mobile button -->
            </div><!-- /row -->
        </div> <!-- /navbar topbar -->

            <!-- NAVIGATION - COLLAPSE -->
            <div class="collapse navbar-collapse" id="r2wg_navbar_scroll">
                <ul class="nav navbar-nav navbar-right r2wg_navbar_scroll">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>

                <!-- <li class="page-scroll">
                        <a href="#featured-promo">Promo</a>
                    </li>-->
                    <li class="page-scroll">
                        <a href="#studio">The Studio</a>
                    </li>
                   <li class="page-scroll">
                        <a href="#featured">Featured Game</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#social">Follow Us</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        <!-- /.container-fluid -->
    </nav>     <!-- /Navigation -->

    <!-- Header -->
   <header>
        <div class="container">
            <div class="row">
                <div class="visible-lg visible-md col-lg-12 ">
                    <img class="img-responsive img-centered" src="graphics/r2wgames_logo_732x350.png" alt="r2wGames Logo" />
                </div>
               </div>
                 
            </div> <!-- /container-->

  
    </header>
    <!-- PROMOTIONAL AREA -->
    <!--  <section id="featured-promo" >
     FOR PROMOTIONAL MATERIAL


            </section> -->

    <!-- Studio Grid Section -->
   
    <section id="studio">
        <div class="container">
       <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>The Studio</h2>
                    <hr class="star-primary" />
                </div>
            </div>
            <div class="row studio-icons">
                <div class="col-lg-4 col-md-4 studio-item" >
       <a href="#studioModal-Backstory" class="studio-link" data-toggle="modal">
                <img src="graphics/homepage/wgfBackstory.png" class="img-responsive" alt="Our
                 Backstory" title="Our Backstory" /></a>

                </div>
                <div class="col-lg-4 col-md-4  studio-item" id="studio-dream">
                    <a href="#studioModal-OurDream" class="studio-link" data-toggle="modal" >
                        <img src="graphics/homepage/wgfTheDream.png" class="img-responsive" alt="Living the Dream" title="Living the Dream" />
                    </a>
                </div>
                <div class="col-lg-4 col-md-4  studio-item" id="studio-people">
                    <a href="#studioModal-People" class="studio-link" data-toggle="modal">
                       
                        <img src="graphics/homepage/wgfWeThePeople.png" class="img-responsive" alt="We the People" title="We, the People" />
                    </a>
                </div>
                <div class="col-lg-4 col-md-4  studio-item" id="studio-construction">
                    <a href="#studioModal-UpcomingProjects" class="studio-link" data-toggle="modal">
                        <img src="graphics/homepage/wgfUnderConstruction.png"  class="img-responsive" alt="Projects in
                        Development" title="Projects in Development" />
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 studio-item"  id="studio-blogs">
                    <a href="#studioModal-ForumsBlogs" class="studio-link" data-toggle="modal">
                        <img src="graphics/homepage/wgfForumsnBlogs.png"  class="img-responsive" alt="Forums and Blogs" title="Forums and Blogs" />
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 studio-item" id="studio-aboutus">
                    <a href="#studioModal-AboutUs" class="studio-link" data-toggle="modal">
                        <img src="graphics/homepage/wgfWantToKnowMore.png"  class="img-responsive" alt="Work with us" title="Work with us" />
                    </a>
                </div>
            </div>
        </div>
    </section>

<!-- Featured Game Section -->
<section class="success" id="featured">
<div class="container-fluid">
<div class="row text-center">
<div class="col-lg-12 text-center">
<h2>Featured Game</h2>
<hr class="star-light" />
</div>
<div class="col-lg-3"><img class="img-responsive game-logo" src="graphics/imgs/beatboxer_logo.png" alt="Beatboxer Logo"/>
<h3 class="game-tagline">A rhythm game that packs a punch! </h3></div>
<div class="col-lg-6 highlight">
<p id="game-tagline">BeatBoxer is a rhythm based boxing game where your goal is to fight your way through the ranks and become a world class fighter (with a fantastic theme song!) Combining the art of championship boxing with the precision and accuracy of musical tempo isn't a task for the weak willed. Stay on beat, or get beat down!</p>
</div>

<! --- PROMOTIONAL VIDEO --->
<div class="col-lg-6 center promo-video">
<div align="center" class="embed-responsive embed-responsive-4by3">
<iframe width="720" height="480" src="https://www.youtube.com/embed/1K2hbtu2lww?rel-0" frameborder="0" allowfullscreen></iframe>
</div>
</div>

<div class="row text-center">
<div class="col-lg-3 backus hidden-sm hidden-xs hidden-md">
<h2 class="ks-plug"> Back Us!</h2>
<a href="https://www.kickstarter.com/projects/r2wgames/beatboxer" target="_blank">
<img class="img-responsive ks-logo"  src="graphics/ks_logo.png"  /> </a>
</div>
</div>
<!---SHOWN ON LARGE SCREENS -->

</div>
</div> <!---/CONTAINER FLUID -->
</section>


    <!--END FEATURED GAME SECTION -->

    <!-- Contact Section -->
    <section id="contact">
        <div class="container contact" >
            <div class="contact-form">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contact Us</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
          <div class="col-lg-8 col-lg-offset-2">

                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="frontForm" novalidate />
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
              <!--
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>  -->
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </section>

    <!-- Footer -->

    <footer class="text-center" id="social">
        <div class="footer-above">
            <div class="container">
                <div class="row footer-text">
                    <div class="footer-col col-md-4">
                        <h3 class="footer-h3">Location</h3>
                        <p class="footer-txt">HQ | Winchester, VA </p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3 class="footer-h3">Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/pages/r2wgames/1496359270582742" class="btn-social btn-outline" target="_blank"><i class="fa fa-fw fa-facebook fa-2x"></i></a>
                            </li>
                            <li>
                                <a href="http://r2wgames.tumblr.com/" class="btn-social btn-outline" target="_blank"><i class="fa fa-fw fa-tumblr fa-2x "></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/r2wGames" class="btn-social btn-outline" target="_blank"><i class="fa fa-fw fa-twitter fa-2x"></i></a>
                            </li>

                            <li>
                 <a href="http://steamcommunity.com/sharedfiles/filedetails/?id=243835633" class="btn-social btn-outline" target="_blank"><i class="fa fa-fw fa-steam-square fa-2x"></i></a>
                            </li>

                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3 class="footer-h3">About r2wGames</h3>
                        <p class="footer-txt">We are a small creative team dispersed throughout the US. Our dream is to have fun, learn stuff &amp; make games with the freedom that only comes from being independent.</p>
                    </div>
                </div>
            </div>
        </div>   <!-- FOOTER ABOVE -->
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                      <a href="http://www.red2whYte.com" target="_blank">
                          <img src="graphics/r2w_logo_sm.png" alt="red2whYte Logo"/>red2whYte LLC</a> &nbsp;|&nbsp;
                        Copyright
                        &copy; 2007 - <?php echo date("Y"); ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visble-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- STUDIO Modals -->

    <!-- MODAL - BACKSTORY -->
    <div class="studio-modal modal fade" id="studioModal-Backstory" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>About r2wGames</h2>
                            <hr class="star-primary">
                              <img src="graphics/imgs/studioModals/wgfBackstory_hover.png" class="img-responsive img-centered" alt="Our Backstory" />
                            <p>r2wgames was born with the <strong style="color:#CC0000;">spirit of giving back </strong> and progressive evolution. At the moment we are a composition of  <strong style="color:#CC0000;">volunteer artists, animators, modelers, writers and programmers along with marketing folk </strong> who do not have the advantage of "knowing" people in the gaming industry. We are <strong style="color:#CC0000;">not people of privilege </strong> and most are just out of community college or art school. ALL are avid gamers <strong style="color:#CC0000;">with loads of creativity and a desire to make games </strong> that family members, friends and really - any one who plays games can enjoy.
                            </p>

                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL - OUR DREAM -->
    <div class="studio-modal modal fade" id="studioModal-OurDream"  tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Our Vision and Mission</h2>
                            <hr class="star-primary" />
                            <img src="graphics/imgs/studioModals/wgfTheDream_hover.png" class="img-responsive img-centered" alt="">
                            <h2>Why we exist</h2>
                                <p>The studio exists <strong style="color:#CC0000;"> to bring together talented individuals </strong> across the US to make games.   </p>
                            <p> We exist<strong style="color:#CC0000;"> to share our experience </strong> with others who want to break into the gaming industry or work on live projects but do not have "connections" to make this happen. </p>

                            <p> We exist <strong style="color:#CC0000;"> to sponsor our own charitable game events </strong> where the proceeds will be donated to reputable organizations who are making a difference and helping those in need within the US borders. </p>


                            <p>We exist because <strong style="color:#CC0000;"> we believe that we can have a positive impact in our local communities </strong> one game at a time.  </p>

                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL - WE THE PEOPLE -->

    <div class="studio-modal modal fade" id="studioModal-People" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Who are we?</h2>
                            <hr class="star-primary">
                            <img src="graphics/imgs/studioModals/wgfWeThePeople_hover.png" class="img-responsive img-centered" alt="">

                          <h3 class="about-h3"> About me -  the Sponsor & Business Owner</h3>
                         <p>  I am a software engineer with an entrepreneurial spirit and a deep desire to make a positive impact on our society. I know that I cannot help everyone but I do not believe that "wishing and wanting to do something" is a position any one with the ability to help should take. So I use MY skills as a programmer, my natural leadership ability, my "almost completed" executive MBA to make a difference in what little way i can. It started with red2whYte.  red2whYte LLC is the parent incubator company [website relaunch on 1 September] sponsoring the volunteers working under the moniker of r2wgames. As an outreach of MY passion to Serve People, Connect Businesses and Create Excitement and in the context of paying forward - r2wgames took  life.</p>

                            <h3 class="about-h3">About our team  </h3>

                           <p> We have a core team who work on the concept art, game engine and prototypes for our games. However, we are always looking to expand as well as share our experience with others - who are just like us - talented individuals who enjoy playing games and one day hope to produce one. We invite you to <a href="mailto:buildingcommunity@r2wgames.com?Subject=A%20Voice%20from%20the%20InterWebs" target="_blank"><i class="fa fa-envelope"></i> </a> - maybe we can use your help on a project in the future.</p>

                              <h3 class="about-h3">  Our core team at this time is:</h3>
                            <apan style="align:center;"><img src="graphics/imgs/avatars/studio_staff/avatar_placeholder.png" class="img-responsive img-centered" width="20%"/></apan>

                        <div class="studio-staff">
                            <section id="sectionLeft">
                       <h4> Artists</h4>
                                <p id="txtStaffList">  Madison Campbell <br />
                                  Piper Hirschberg  <br />
                                 Nicole Hundley <br />
                                  Ken Link  <br /></p>
                          <h4 class="nobreak"> Animators &amp; Modelers</h4>
                                <p id="txtStaffList">
                                    Frank Heinen <br />
                                    Jen Leaveck  <br />
                                  Ivan Lopez  <br />
                                  Alex Simmons <br />
                                  Chris Tucker <br />

                                </p>
                             <h4 class="nobreak"> Storywriter </h4>
                                <p id="txtStaffList">   Sarah Bergsten <br />  </p>
                            </section>
                            <section id="sectionRight" >
                                <h4 class="nobreak">Marketing &amp; Sales </h4>
                                <p id="txtStaffList">   Donna Barney  <br />
                                Ashli Maldonado <br />
                                Guy Ulm  <br />     </p>
                            <h4 class="nobreak">Music &amp; Voicework </h4>
                                <p id="txtStaffList">   Victoria Stam <br />
                                  Orion Williams   <br /></p>
                      <h4 class="nobreak">Programmers &amp; Web Developers  </h4>
                                <p id="txtStaffList">   Ricardo Amaya   <br />
                                  Rayvn Manuel <br />   </p>

                            </section>
                        </div>
                            <br />

                              <p>   A common tale about working in the software industry/game development/production is the pressure of getting a game to  market and the "loss of fun &amp; family time". This may be the case for BIG industry names but as an independent studio <strong style="color:#CC0000;"> we make our own timeline and work on whatever we want.</strong></p>


                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL - UNDER CONSTRUCTION -->
    <div class="studio-modal modal fade" id="studioModal-UpcomingProjects" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>In the Pipeline</h2>
                            <hr class="star-primary">
                            <img src="graphics/imgs/studioModals/wgfUnderConstruction_hover.png" class="img-responsive img-centered" alt="">
        <p> While we have LOADS of game ideas, we can only work on one at a time. Right now - we are working on
our featured game:

        <div class="panel-group" id="accordion">
    <!-- BEATBOXER --->
           <div class="panel panel-default">
             <div class="panel-heading">
             <h2 class="panel-title">
                 <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                Beatboxer</a></h2>
               </div>

               <div id="collapseOne" class="panel-collapse collapse">
                   <div class="panel-body">
                       <h3>Synopsis</h3>
       <img src="graphics/imgs/beatboxer_logo.png" alt="Beatboxer Logo" height="230em"  style="float:left;"/>

               <p><strong>BeatBoxer is a rhythm based boxing game </strong>where the goal is to fight your way through the ranks and become a world class boxer (with a fantastic theme song!) </p>

             <h3>Game Play</h3>

             <p><strong>Players assume the role of Rondo or Medley </strong>as they challenge a plethora of musical themed rivals. Each opponent you face is as unique and varied as the musical style they represent. </p>

             <h3>Platform:</h3>

             <p><strong>Android </strong>- with the goal of porting to IOS and PC. </p>

             <h3>Funding Needs: </h3>

             <p>We are planning to relaunch our <strong style="color:#cc3333";> Kickstarter campaign for Beatboxer </strong> to raise funds for the software licenses we need to "legally" produce the game.</p>
          <p>  Most of the team is using academic licenses which cannot be used for production versions of game products. Some of our team need upgraded hardware - tablets or laptops - so they can produce the assets needed in the game. </p>

</div>

                </div>
           </div>   <!-- end of BEATBOXER -->
          <!------ SYSTEM FAILURE -->

               <div class="panel panel-default">
                   <div class="panel-heading">
                       <h2 class="panel-title">
                           <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                               System Failure</a></h2>
                   </div>
                   <div id="collapseTwo" class="panel-collapse collapse">
                       <div class="panel-body">
                           <h3>Synopsis</h3>
                           <img src="graphics/AI.png" alt="System Failure Logo" height="205em"  style="float:left; padding-right:3%;"/>

                           <p><strong>System Failure is an action-adventure platformer </strong> in which players take control of robotic lab assistant Tech. Created by the esteemed roboticist, Maria Day, Tech resides within the Automata Institute where he aids in the construction of the machines which shape the future.  </p>

                           <h3>Game Play</h3>

                           <p><strong>Players assume the role of Tech </strong> after he survives a vicious attack on the laboratory.  Tech finds her/himself trapped in the subterranean ruins of her/his creator's former robotics facility. Unarmed and stranded in an unfamiliar world, Tech must navigate the dilapidated remains of Old Automata to find her/his way back to the surface. </p>

                           <h3>Platform:</h3>

                           <p><strong>PC-based </strong> - delivered via STEAM's distribution portal. </p>

                           <h3>Funding Needs: </h3>

                           <p>We anticipate returning to this project after the successful  <strong style="color:#cc3333";> Kickstarter campaign for Beatboxer </strong> and the game has been published to the GoogleApp Store. Honestly, we are anxious to return to this title as it is EXTREMELY fun to design as it will be to play!</p>
                           <p> You are invited to join our <a href="http://steamcommunity.com/sharedfiles/filedetails/?id=243835633" target="_parent"> STEAM community page for System Failure</a> so that you can receive notification of the project's return to production and the launch of our funding campaign. </p>



                       </div>


                   </div>
                   </div>   <!-- end of SYSTEM FAILURE -->

           </div><!-- end PANEL GROUP -->
           <br />
         <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                  </div>
                  </div>
                </div>
            </div>
        </div>
                <!-- end DIV CONSTRUCTION -->


        <!-- MODAL - FORUMS & BLOGS-->
    <div class="studio-modal modal fade" id="studioModal-ForumsBlogs" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Engage with Us!</h2>
                            <hr class="star-primary" />
           <img src="graphics/imgs/studioModals/wgfForumsnBlogs_hover.png" class="img-responsive img-centered" alt="Engage with us" />

      <p>We are in the process of setting up our blog site to share our experience in becoming established in the industry. We've been at this for a few years  and are looking forward to "reaping the fruits of our labor". </p>
                            <p > <img   class="comingsoon"
src="graphics/imgs/studioModals/comingSoon.png" height="400em;" /></p>
       <p> <strong style="color:#990000;">CHECK BACK </strong> in about a week or two. We will have this section UP and RUNNING and ready to engage <strong>YOU!!</strong> </p>
                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>

                         </div>
                    </div>
               </div>
            </div>    <!-- divCONTAINER -->



        </div>  <!-- end of MODAL CONTENT -->

    </div>   <!-- end of MODAL Forums & blogs -->

        <!-- MODAL -CONTACT US -->
    <div class="studio-modal modal fade" id="studioModal-AboutUs" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container contact">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Interested?</h2>
                            <hr class="star-primary">
                            <img src="graphics/imgs/studioModals/wgfWantToKnowMore_hover.png" class="img-responsive img-centered" alt="">
                            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->

                            <p>If you are interested in working or collaborating with us - let us know!</p>


                                <div class="contact-form">
                            <form name="sentMessage" id="backForm" novalidate />
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <h3> Contact Information</h3>
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>SkypeID</label>
                                    <input type="text" class="form-control" placeholder="Skype ID" id="skypeid" />
                                </div>
                            </div>
                            <h3> Where are you located? </h3>
                            <p>These fields are required as there are legal implications with regards to US   copyright and intellectual property laws that may not be honored outside the country. But this is not necessarily a showstopper :0)</p>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Country</label>
                                    <input type="text" class="form-control" placeholder="Country" id="country" required data-validation-required-message="Ooops! It looks like you forgot to enter in which country you currently reside."/>
                                </div>
                            </div>


                            <!--
                                      <div class="row control-group">
                                          <div class="form-group col-xs-12 floating-label-form-group controls">
                                              <label>Phone Number</label>
                                              <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                              <p class="help-block text-danger"></p>
                                          </div>
                                      </div>  -->
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Message</label>
                                    <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br>
                            <div id="success"></div>
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <button type="submit" class="btn btn-success btn-lg">Send</button>
                                </div>
                            </div>
                            </form>
                                    </div>
                        </div>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>
    <script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>



    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>




</body>

</html>
