                    <div class="container-fluid " style="background-color: #1d292f; padding:  40px;padding-left: 30px;padding-right:30px;">
                    <div class="heading" style=""><span class="bg-grey" style="background-color: #1d292f; color: #ff4c4c;padding-left: 10px">HARD</span><span class="bg-grey" style="background-color: #1d292f; color: #0099e5;padding-right: 10px">CORE</span></div>
                    <br>
                    <br>
                    <br>
                    <div class="text-center" style="color: white;">&copy All Rights Reserved | Designed by Anmol Gupta</div>
                </div>
            </div>
        </div>
        <div class="scroll_To_Top">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </div>


        <div class="overlay"></div>



        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#dismiss, .overlay').on('click', function () {
                    $('#sidebar').removeClass('active');
                    $('.overlay').fadeOut();
                });

                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').addClass('active');
                    $('.overlay').fadeIn();
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });

$(window).scroll(function(){
        if ($(this).scrollTop() > 100) 
        {
            $('.scroll_To_Top').fadeIn(200,"linear");
        } 
        else 
        {
            $('.scroll_To_Top').fadeOut(200,"linear");
        }
    });
    

    $('.scroll_To_Top').click(function(){
        $('html, body').animate({scrollTop : 0},700);
        return false;
    });

            });

        </script>
    </body>
</html>