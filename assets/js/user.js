$("#country_select").change(function(){
    var country_id = $("#country_select").val();
    var ajex_url = base_url + "home/get_city_ajax" ; 

    $.ajax({
        type: "POST",
        url: ajex_url,
        data: {country_id:country_id},
        success: function(respons) {
        	var respons_data = jQuery.parseJSON(respons);
        	if (respons_data.status == "success") {
        		$("#city_select").html('');
        		var html_str = '<option value="">---Select City---</option>';
        		for(var i = 0 ; i < respons_data.country_data.length ; i++)
        		{
        			html_str += '<option value="'+ respons_data.country_data[i].id +'">'+ respons_data.country_data[i].city_name +'</option>'
        		}
        		$("#city_select").html(html_str);
        	}
        },
        error : function(respons) {
        	debugger ;
        }
    });

});