<div id="contact-area" class="contact-area pt-110 pb-110 " data-black-overlay="7">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-about section-title  text-center">
                    <h2>get in <span>touch</span>
                    </h2>
                    <p>If you have a project in mind where we can put our expertise at use to bring
                        it to life, drop us a line.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="contact-form">
                    <form class="contact-form" id="contact-form" role="form" data-toggle="validator"
                          action="{{ route('form-submit') }}">
                        <div class="cx-input-group clearfix">
                            <div class="form-group">
                                <div class="single-input name one-half left">
                                    <input placeholder="Name" type="text" required name="name" id="name">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="single-input email one-half right">
                                    <input placeholder="Email" required name="email" id="email" type="email">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="single-input message">
                                <textarea placeholder="Message" name="message" id="message" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="single-input ">
                                <div id="result"></div>
                            </div>
                        </div>
                        <div class="single-input text-center">
                            <input type="submit" value="SEND MESSAGE">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>