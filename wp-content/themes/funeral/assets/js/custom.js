/*jQuery(document).ready(function($){
    'use strict';
    $(this).scrollTop(0);

    $('#event_add').on('click', function() {
    	var cnt = $('.service-detail').length + 1;
    	var html = '<div class="service-detail event-new-' + cnt + '"><div class="row"><div class="col-md-12"><h3>Funeral service details</h3><div class="row"><div class="col-md-6"><div class="form-group"><input type="text" class="form-control" placeholder="Type of service" name="type_of_service_' + cnt + '" id="type_of_service_' + cnt + '"></div><div class="form-group"><input type="text" class="form-control" placeholder="Time of service" name="date_of_service_' + cnt + '" id="date_of_service_' + cnt + '"></div></div><div class="col-md-6"><div class="form-group"><input type="text" class="form-control" placeholder="Date of service" name="time_of_service_' + cnt + '" id="time_of_service_' + cnt + '"></div><div class="form-group"><input type="text" class="form-control" placeholder="Address of service" name="address_of_service_' + cnt + '" id="address_of_service_' + cnt + '"></div></div></div><div class="row"><div class="col-md-12"><div class="form-group"><textarea name="service_note_' + cnt + '" id="service_note_' + cnt + '" cols="30" rows="7" class="form-control" placeholder="Important Note"></textarea></div></div></div></div></div><div class="row"><div class="col-md-12"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.779202311461!2d-83.18111668492055!3d34.609744395592095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8858946c480d669d%3A0x2cd5c4a02f9b7dc4!2s170%20Ken%20Pat%20Acres%20Rd%2C%20Westminster%2C%20SC%2029693%2C%20USA!5e0!3m2!1sen!2sin!4v1617864390699!5m2!1sen!2sin" width="" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div><div class="col-md-12"><span class="pull-right"><a href="javascript:void(0)" class="btn btn-danger delete-event-service" data-counter="' + cnt + '">Delete</a></span></div></div></div>';
    	$('.service-detail:last').after(html);
    });
    $(document).on('click', '.delete-event-service', function() {
    	var cnt = $(this).attr('data-counter');
    	$('.event-new-' + cnt).remove();
    });

})*/

jQuery(document).ready(function($){
    'use strict';
    $(this).scrollTop(0);

    $('#event_add').on('click', function() {
    	var cnt = $('.service-detail').length + 1;
    	//var html = '<div class="service-detail event-new-' + cnt + '"><div class="row"><div class="col-md-12"><h3>Funeral service details</h3><div class="row"><div class="col-md-6"><div class="form-group"><input type="text" class="form-control" placeholder="Type of service" name="type_of_service[]" id="type_of_service_' + cnt + '"></div><div class="form-group"><input type="text" class="form-control" placeholder="Time of service" name="time_of_service[]" id="time_of_service_' + cnt + '"></div></div><div class="col-md-6"><div class="form-group"><input type="date" class="form-control" placeholder="Date of service" name="date_of_service[]" id="date_of_service_' + cnt + '"></div><div class="form-group"><input type="text" class="form-control" placeholder="Address of service" name="address_of_service[]" id="address_of_service_' + cnt + '"></div></div></div><div class="row"><div class="col-md-12"><div class="form-group"><textarea name="service_note[]" id="service_note_' + cnt + '" cols="30" rows="7" class="form-control" placeholder="Important Note"></textarea></div></div></div></div></div><div class="row"><div class="col-md-12"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.779202311461!2d-83.18111668492055!3d34.609744395592095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8858946c480d669d%3A0x2cd5c4a02f9b7dc4!2s170%20Ken%20Pat%20Acres%20Rd%2C%20Westminster%2C%20SC%2029693%2C%20USA!5e0!3m2!1sen!2sin!4v1617864390699!5m2!1sen!2sin" width="" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div><div class="col-md-12"><span class="pull-right"><a href="javascript:void(0)" class="btn btn-danger delete-event-service" data-counter="' + cnt + '">Delete</a></span></div></div></div>';
    var html = '<div class="service-detail event-new-' + cnt + '"><div class="row"><div class="col-md-12"><h3>Funeral service details</h3><div class="row"><div class="col-md-6"><div class="form-group"><input type="text" class="form-control" placeholder="Type of service" name="type_of_service[]" id="type_of_service_' + cnt + '"></div><div class="form-group"><input type="text" class="form-control" placeholder="Time of service" name="time_of_service[]" id="time_of_service_' + cnt + '"></div></div><div class="col-md-6"><div class="form-group"><input type="date" class="form-control" placeholder="Date of service" name="date_of_service[]" id="date_of_service_' + cnt + '"></div><div class="form-group"><input type="text" class="form-control" placeholder="Address of service" name="address_of_service[]" id="address_of_service_' + cnt + '"></div></div></div><div class="row"><div class="col-md-12"><div class="form-group"><textarea name="service_note[]" id="service_note_' + cnt + '" cols="30" rows="7" class="form-control" placeholder="Important Note"></textarea></div></div></div></div></div><div class="row"><div class="col-md-12"><div id="map_' + cnt + '" style="height:400px;"  ></div></div>   <input id="submit_' + cnt + '" type="button" value="Set Google Map location" /><div class="col-md-12"><span class="pull-right"><a href="javascript:void(0)" class="btn btn-danger delete-event-service" data-counter="' + cnt + '">Delete</a></span></div></div></div>';

    	
    	$('.service-detail:last').after(html);
    	 const myLatLng = { lat: -25.363, lng: 131.044 };
    	   const map = new google.maps.Map(document.getElementById("map_"+cnt), {
          zoom: 8,
          center: myLatLng,
        });
        
       new google.maps.Marker({
        position: myLatLng,
        map,
        title: "Hello World!",
        });
        var ids='address_of_service_'+cnt;
       const geocoder = new google.maps.Geocoder();
          document.getElementById("submit_"+cnt).addEventListener("click", () => {
          geocodeAddress(geocoder, map, ids);
        });
    });
    $(document).on('click', '.delete-event-service', function() {
    	var cnt = $(this).attr('data-counter');
    	$('.event-new-' + cnt).remove();
    });

})