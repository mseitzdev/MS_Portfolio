<!-- 

Bus Simulator app page, 

/androidApps/busSimulator.php

Programmed by Mitchell Seitz, March 14 2024. 

-->

<?php 

//setting the page title 
$pageTitle = "Transit System Simulator";

//inclding program header, forces secure connection.
include '../res/header.php'; 

?>

<main class="information">
    
   <!-- Home page -->
    <div class="mainbox">

        <h1 class="pagetitle">Transit System Simulator</h1>
        <br>

        <!-- Video link for the demonstration -->
        <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; z-index:0;">
            <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
            src="https://www.youtube.com/embed/ULZ91fBIb0Q?si=MvBNU04_IpUNm-34" 
            title="YouTube video player" frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
            </iframe>
        </div>
        <br>
        
        <p class="paragraphStandard">
            This app is intended to function as a simulated transit system and bus tracker,
            and was my final project for COMP 2161 at Thompson Rivers University. I'm sharing 
            it here with the permission of my course professor, Musfiq Rahman. I created this 
            application in Android Studio, and 
            <a href="https://github.com/mseitzdev/Transit_Simulator"> you can click here to 
            see the source code, documentation, and .apk file download on my GitHub.</a>
            <br><br>
            The busses are simulated by the activity of the foreground service BusService, 
            and this is where the majority of the app’s processing takes place. The 
            movement of busses is incremented on each receipt of the ACTION_TIME_TICK 
            broadcast from the android operating system once per minute, and busses may 
            experience simulated lateness or earlyness.
            <br><br>
            This app needs to be given foreground service permission as well as notification 
            permission. The notification permission is so that the app can carry out the 
            essential transit app function of notifying users of their bus approaching, and 
            the foreground service is so the busses can be simulated and notifications scanned for.
            <br><br>
            Launching this app first sends the user through a terms and conditions 
            screen with copyright info and terms to agree to. Once the user accepts, 
            they are sent to the main screen, which shows all busses currently running.
            <br><br>
            From here, the user can access the menu, which can allow them to access:
            <br><br>
        </p>

        <ul class="paragraphStandard" style="padding-left: 5%;">
          <li>The search screen to search for specific busses or stops,</li>
          <li>The notifications screen which shows users their shared notifications,</li>
          <li>The settings screen where users can change program settings like light/dark and silent mode.</li>
        </ul>  
        <br>

        <div style="text-align: center;">
            <img src="busNotifications.png" alt="Bus Notifications" style="max-width: 90%; max-height: 400px">
            <h5> Sample Notifications </h5>
        </div>
        <br>

        <p class="paragraphStandard">
            The user can elect to receive notifications when chosen busses are approaching 
            a stop, and can enter silent mode to prevent the notifications from showing.
            Notifications are saved and shown in the notifications and schedule activities, 
            and are indicated by boolean variables saved to the notoSP shared preferences. This 
            notification data is simple, and takes the form of a boolean with id xxxyyy, where 
            xxx is bus number and yyy is the stop number, and has a value of true if that bus/stop 
            combo requires notification. 
            <br><br>
            This app relies heavily on saving and retrieving data to and from files and 
            shared preferences. I avoided anything that could result in any two program 
            components saving to the same data location within a short period of time, 
            as having to add resource holds would increase complexity.
            <br><br>
            I made frequent use of handlers to run loops that update the UI and BusService, 
            to ensure that there is never more than a second latency on information updates.
            BusService responds to a receiver that processes ACTION_TIME_TICK, and updates 
            and saves data on receipt of this broadcast. The data that is saved is then picked 
            up by other activities.
            <br><br>
            The main activity, search activity, notifications activity, and schedule activities 
            work by extracting either all busses or select busses from the saved bus data, and 
            either displaying them as strings directly or displaying information on the bus and 
            stops extracted based on need.
            <br><br>
            Bus objects will send their bus/stop id for their next stop 
            to the BusService, which then checks if there is a notification required for that bus and 
            dispenses one if there is. If no notification is required, the id is deleted from the queue, 
            and if a notification request is saved but silent mode is on then a message is written to log.
            <br><br>
        </p>

        <h1>
            <a href="https://github.com/mseitzdev/Transit_Simulator"> 
                Source code & .apk download on my Github!
            </a>
        </h1>

    </div>

</main>

<?php 
//including footer 
include '../res/footer.php'; 
?>