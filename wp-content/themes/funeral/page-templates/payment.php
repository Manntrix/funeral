<?php
/**
*
* Template Name: Payment
*
* The template for displaying content in full width.
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.
*
* @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package KJL
*/
get_header();

?>
    <section class="previewNoticeMiddle">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="paymentTop">
                        <div class="payBlock">
                            <h4>Payment: <strong>£19.99</strong></h4>
                        </div>
                        <a href="#"><img src="img/card.svg" alt=""/></a>
                        <a href="#"><img src="img/paypal.svg" alt=""/></a>
                    </div>
                    <h4>Choose payment method below:</h4>
                </div>
            </div>
            <form>
                <div class="row">
                    <div class="col-md-6 billingInfo create">
                        <h3>Billing Info</h3>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email Address">
                        </div>
                        <p><strong>TIP:</strong> We need your email address to send you confirmation of your payment which includes a link to edit your notice should any details change.</p>
                        <h4>Billing address</h4>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="First Line">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Second Line">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="City">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Postcode/Zipcode">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <select class="form-control">
                                <option>select</option>
                            </select>
                        </div>

                    </div>
                    <div class="col-md-6 cardInfo create">
                        <h3>Card Info</h3>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Card Number">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Card Holder Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Expiration">
                        </div>
                        <h4>Cvv</h4>
                        <p>Add in the last three digits from the back of your card <img src="img/CVV.svg" alt=""/></p>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Cvv">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 payConform create">
                        <h3>Confirm the SMS mobile device number(s)</h3>
                        <div class="row mobileInfo">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>First mobile device number</label>
                                    <input type="tel" class="form-control" placeholder="Type of service">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>2nd mobile device number</label>
                                    <input type="tel" class="form-control" placeholder="Optional">
                                </div>
                            </div>
                        </div>
                        <div class="enableSharing">
                            <div class="checkbox switcher">
                                <label for="test1">
                                    <span class="enbl">Conform mobile device number(s)</span>
                                    <input type="checkbox" id="test1" value="">
                                    <span class="enableHandle"><small></small></span>
                                </label>
                            </div>
                        </div>
                        <div class="previewNotice" style="text-align: left;"><button type="submit" class="previewBtn">Edit your funeral notice</button></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="pvBtns payBtn">
                            <a href="#">Conform and send your Funeral Notice</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
<?php
get_footer();
?>