(function(){
	var url = window.location.href.split('/');
	
	var projectname ={"name":url[url.length - 2],"customer":url[url.length - 1]};
	var repeat=['projectname','designername','designerplace','clientname']
	var result ={};
	 ajaxcall.send_data(projectname, 'proposify_get', function(data) {
		 data = JSON.parse(data);
              result['projectname']=data.projectname;	
			result['clientname']=data.clientname;
		result['clientplace']=data.clientplace;
		result['designername']=data.designername;
		result['designerplace']=data.designerplace;
		result['salutation']=data.salutation;
		result['subject']=data.subject;
		result['descripation']=data.descripation;
		result['complementary']=data.complementary;
		result['designername1']=data.designername1;
		result['feecalculated']=data.feecalculated;
		result['service']=data.service;
		result['execute']=data.execute;
		result['AccountHoldersName']=data.AccountHoldersName;
		result['BranchName']=data.BranchName;
		result['AccountNumber']=data.AccountNumber;
		result['IFSCCode']=data.IFSCCode;
		result['BankName']=data.BankName;
		result['SWIFTCode']=data.SWIFTCode;
		result['Name']=data.Name;
		result['position']=data.position;
		result['contents']=data.contents;
		result['phonenumber']=data.phonenumber;
		Object.keys(result).forEach((key)=>{
			
			if(repeat.includes(key)){
				let elem = document.getElementsByClassName(key);
				for(let i=0;i<elem.length;i++){
					elem[i].innerHTML=result[key];
				}
				elem.innerHTML = result[key];
			}else{
				let elem = document.getElementById(key);
				elem.innerHTML = result[key];
			}
		})
        });
})()
