var logs={};
var ajaxcall={};
/**
function to send logs to database
*/

/*   wrapper function to pass the data	*/
ajaxcall.send_data=(function(json_value,url_id,callback)
{

	var json_data= JSON.stringify(json_value);
	var mapping=url_mapper(url_id);
     $.ajax({
        type: "POST",
        async : false,
				data: {'myData':json_data},
	        url: mapping
	    }).done(function (result) {
			callback(result);
		});

});

function url_mapper(page_id){
	var pages = {
		'login':"model/login.php",
		'user_insert':"model/user_insert.php",
		'update_profile':"model/update_profile.php",
		'change_password':"model/change_password.php",
		'project_insert':"model/project_insert.php",
		'all_projects':"model/all_projects.php",
		'team_management':"model/team_management.php",
		'project_display':"model/view_project.php",
		'list_users':"model/list_users.php",
		'project_preview':"model/preview_project.php",
		'map':"model/map.php",
		'enquiry_handle':"model/enquiry_handle.php",
		'pincode':"model/pincode_assignment.php",
		'enquiry_list':"model/list_enquiries.php",
		'oauth_login':"model/oauth_login.php",
		'enquiry_insert':"insert_enquiry.php",
		'proposify_get':"/BOQEditable/proposify.php",
		'index':'index.php',
		
	};
	return pages[page_id];
}

var gsession = {};

gsession.setSession = (function(key,value){
	if(value){
		localStorage.setItem(key, value);
	}
});

gsession.getSession=(function(key){
	return localStorage.getItem(key);
});

gsession.clearSession=(function(key){
	localStorage.removeItem(key);
});


$("#logout").click(function(){
	gsession.clearSession("user_hash");
	document.location.href = "https://www.google.com/accounts/Logout?continue=https://appengine.google.com/_ah/logout?continue=http://localhost/dq_site/login.html";
	//window.location="index.html";
});