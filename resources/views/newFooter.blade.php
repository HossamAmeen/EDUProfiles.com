<!--start:: footer-->
<section class="footer" id="contactus">

    <div class="container">
        <div class="row">


            <div class="col-lg-4 footer-main">
                <div class="inline-content">
                    <h5>Contact</h5>

                    <p class="content"><i class="fa fa-envelope" aria-hidden="true"></i> Supportcenter@info.com</p>

                </div>


            </div>

            <div class="col-lg-4 footer-main">
                <div class="inline-content">
                    <h5>Sections</h5>
                    <ul class="pre-links">
                        <li>About</li>
                        <li>Services</li>
                        <li>Signup/login</li>
                        <li>Contact Us</li>

                    </ul>

                </div>

            </div>
            <div class="col-lg-4 footer-main">
                <div class="contact_form ">
                    <h5 class="text-center">Get in touch</h5>
                    <div class="contact_form_container">
                        <form>
                            <input class="input_field contact_form_name" type="text" placeholder="Name"
                                required="required">
                            <input class="input_field contact_form_email" type="email" placeholder="E-mail"
                                required="required">
                            <textarea id="contact_form_message" class="text_field contact_form_message" name="message"
                                placeholder="Write something.." required="required"></textarea>
                            <button id="contact_send_btn" type="button" class="contact_send_btn trans_200"
                                value="Submit">send
                                message</button>
                        </form>

                    </div>
                </div>

            </div>

</section>
<!--end :: footer-->

<script src="{{asset('assets2/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('assets2/js/popper.min.js')}}"></script>
<script src="{{asset('assets2/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets2/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets2/js/wow.min.js')}}"></script>
<script>
    new WOW().init();
</script>
<script src="{{asset('assets2/js/home.js')}}"></script>

<script>
    var interval = 1000;  // 1000 = 1 second, 3000 = 3 seconds
    
    function courses_ajax(faculty_id, id) {
            $.ajax({ 
                //Process the form using $.ajax()
                type: 'get', //Method type
                url: '{{url("notification")}}', //Your form processing file URL
                
                success: function (data) {
                         console.log(data.notifications);
                         $("#notification").html(data.notifications);
                        setTimeout(courses_ajax, interval);
                }
            });
        }


    function complaint_counter(){
        var ajax = new XMLHttpRequest();
        var method = "GET";

        var url = {!! json_encode(url("notification")) !!};  //URL
        // console.log(url);
        var asynchronons = true;
        ajax.open(method, url, asynchronons);
        ajax.send();
        ajax.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
              //v is variable that = json respone
                var v = JSON.parse(this.responseText);
              console.log(v);
              //itemName is key in JSON
         
            setTimeout(complaint_counter, interval);
            }
        }
    }
    setTimeout(courses_ajax, 1);
</script>