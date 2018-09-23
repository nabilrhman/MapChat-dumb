<!DOCTYPE html>
<html>

    <head>

        <!-- <link rel="stylesheet" href="normalize.css"> -->
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="normalize.css">
        <script type='text/javascript' src='js/map.js'></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="materialize.css">

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Resize-->
        <script src="js/ResizeSensor.js"></script>
        <script src="js/ElementQueries.js"></script>

        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

        <script>

            $(document).ready(function () {


                function resizeChatlist() {

                    var input_height = $(".input").outerHeight();
                    var app_container_height = $(".app-container").height();
                    var resized_chat_list_height = app_container_height - input_height;
                    //window.alert("resize fired");
                    //window.alert("chat_list_height" + app_container_height);
                    $(".chat-container").css({ "height": resized_chat_list_height });

                }
                // Auto scroll
                var scrolled = false;

                function updateScroll()
                {
                    if(!scrolled){
                        $(".chat-container").animate({ scrollTop: $(".chat-container").prop("scrollHeight")}, 1000);
                    }
                }

                $(".chat-container").on('scroll', function(){
                    scrolled=true;                
                });

                
                // Resize event
                resizeChatlist();
                updateScroll();

                var input_message_element = document.getElementById('msg');

                new ResizeSensor(input_message_element, function () {

                    resizeChatlist();
                    $(".chat-container").animate({ scrollTop: $(".chat-container").prop("scrollHeight")}, 1000);

                });




            });

        </script>



    </head>


    <body>



        <div class="header">
            <a href="login.html" class="logo hvr-grow"></a>
            <div class="container pullLeft">
                <a>SIGNOUT</a>
                <a>PROFILE</a>
                <a>ABOUT</a>
            </div>
        </div>

        <div class="app-container">

            <div class="chat-container" id="chat-container">
                <div class="chat-list">

                    <div class="chat hvr-glow" id="first">
                        <img id="avatar" src="https://www.w3schools.com/w3images/bandmember.jpg" alt="Avatar" style="width:100%;">
                        <h3 id="name">Nabil Rahman</h3>
                        <p class="chat-paragraph">Hello. How are you today?</p>
                        <span id="location">Boise</span>
                        <span id="time">11:00</span>
                    </div>

                    <div class="chat hvr-glow">
                        <img id="avatar" src="https://www.w3schools.com/w3images/bandmember.jpg" alt="Avatar" style="width:100%;">
                        <h3 id="name">Nabil Rahman</h3>
                        <p class="chat-paragraph">Hello. How are you today?</p>
                        <span id="location">Boise</span>
                        <span id="time">11:00</span>
                    </div>

                    <div class="chat hvr-glow">
                        <img id="avatar" src="https://www.w3schools.com/w3images/bandmember.jpg" alt="Avatar" style="width:100%;">
                        <h3 id="name">Nabil Rahman</h3>
                        <p class="chat-paragraph">Hello. How are you today?</p>
                        <span id="location">Boise</span>
                        <span id="time">11:00</span>
                    </div>

                    <div class="chat hvr-glow">
                        <img id="avatar" src="https://www.w3schools.com/w3images/bandmember.jpg" alt="Avatar" style="width:100%;">
                        <h3 id="name">Nabil Rahman</h3>
                        <p class="chat-paragraph">Hello. How are you today?</p>
                        <span id="location">Boise</span>
                        <span id="time">11:00</span>
                    </div>

                    <div class="chat hvr-glow">
                        <img id="avatar" src="https://www.w3schools.com/w3images/bandmember.jpg" alt="Avatar" style="width:100%;">
                        <h3 id="name">Nabil Rahman</h3>
                        <p class="chat-paragraph">Hello. How are you today?</p>
                        <span id="location">Boise</span>
                        <span id="time">11:00</span>
                    </div>

                    <div class="chat hvr-glow">
                        <img id="avatar" src="https://www.w3schools.com/w3images/bandmember.jpg" alt="Avatar" style="width:100%;">
                        <h3 id="name">Nabil Rahman</h3>
                        <p class="chat-paragraph">Hello. How are you today?</p>
                        <span id="location">Boise</span>
                        <span id="time">11:00</span>
                    </div>

                    <div class="chat hvr-glow">
                        <img id="avatar" src="https://www.w3schools.com/w3images/bandmember.jpg" alt="Avatar" style="width:100%;">
                        <h3 id="name">Nabil Rahman</h3>
                        <p class="chat-paragraph">Hello. How are you today?</p>
                        <span id="location">Boise</span>
                        <span id="time">11:00</span>
                    </div>

                    <div class="chat hvr-glow">
                        <img id="avatar" src="https://www.w3schools.com/w3images/bandmember.jpg" alt="Avatar" style="width:100%;">
                        <h3 id="name">Nabil Rahman</h3>
                        <p class="chat-paragraph">Hello. How are you today?</p>
                        <span id="location">Boise</span>
                        <span id="time">11:00</span>
                    </div>

                    <div class="chat hvr-glow">
                        <img id="avatar" src="https://www.w3schools.com/w3images/bandmember.jpg" alt="Avatar" style="width:100%;">
                        <h3 id="name">Nabil Rahman</h3>
                        <p class="chat-paragraph">Hello. How are you today?</p>
                        <span id="location">Boise</span>
                        <span id="time">11:00</span>
                    </div>

                    <div class="chat hvr-glow">
                        <img id="avatar" src="https://www.w3schools.com/w3images/bandmember.jpg" alt="Avatar" style="width:100%;">
                        <h3 id="name">Nabil Rahman</h3>
                        <p class="chat-paragraph">Hello. How are you today?</p>
                        <span id="location">Boise</span>
                        <span id="time">11:00</span>
                    </div>

                    <div class="chat hvr-glow">
                        <img id="avatar" src="https://www.w3schools.com/w3images/bandmember.jpg" alt="Avatar" style="width:100%;">
                        <h3 id="name">Nabil Rahman</h3>
                        <p class="chat-paragraph">Hello. How are you today?</p>
                        <span id="location">Boise</span>
                        <span id="time">11:00</span>
                    </div>

                    <div class="chat hvr-glow" id="last">
                        <img id="avatar" src="https://www.w3schools.com/w3images/bandmember.jpg" alt="Avatar" style="width:100%;">
                        <h3 id="name">Nabil Rahman</h3>
                        <p class="chat-paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                            but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised
                            in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                            with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <span id="location">Boise</span>
                        <span id="time">11:00</span>

                    </div>






                </div>


            </div>

            <div class="input" id="msg">

                <textarea placeholder="Type your message" id="message-text" class="materialize-textarea"></textarea>
                <!-- <button id="send" class="material-icons">send</button> -->
            </div>



            <div id="map">
                <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1ZT3FLo6fZc1_xAI3asjebX3z16z9GnY&callback=initMap">
                </script>
            </div>

        </div>






    </body>

</html>