$('table').each(function(i,obj){
	if($(this).data('url')){
		var text='No record found';
		var values=[];
		var data=[];
		var btn=[];
		var data_id= $(this).data("identity");
		$(this).find("th").each(function(i){
			data.push($(this).data("val"));
			var v=$(this).data("val");
			if(v=== undefined || v===''){
				values.push({'data':null});
				text='Some issued might need to be fixed to work properly';
			}
			else if(v==='sn'||v==='button'){
				values.push({'data':null});
			}
			else if(v==='btn'){
				values.push({'data':null});
				btn[i]=$(this).data("btn");
			}
			else{
				values.push({'data':$(this).data("val")});
			}
		});
		
		var t=$(this).DataTable( {
			dom: 'Bfrtip',
			buttons: ['copy', 'csv', 'excel', 'pdf'],
			"ajax":  $(this).data("url"),
			"columnDefs": [ {
				"orderable": false,
			}],
			"createdRow": function( row, data, dataIndex){
				if(data_id!==undefined){
					$(row).attr('data-id',data[data_id]);
				}
			},
			"columns": values,
			"oLanguage": { 
				"sLoadingRecords": "Please wait - Data Loading", 
				"sEmptyTable": text,
				"sZeroRecords": text
			},
			"stateSave": true,
			"ordering": false
		} );
		t.on( 'order.dt search.dt', function () {
			$.each(data,function(index,object){
				switch(object){
					
					case undefined:
						t.column(index, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
							cell.innerHTML = 'Attribute data-value missing';
						} );
					break;
					case '':
						t.column(index, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
							cell.innerHTML = 'Attribute data-value empty';
						} );
					break;
					case 'sn':
						t.column(index, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
							cell.innerHTML = i+1;
						} );
					break;
					case 'btn':
						t.column(index, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
							//identityfield=this.context[0].aoData[i]._aData[data_id];
							var text=btn[index];
							var curly=new RegExp("{([a-z0-9_-]+)}", "gi");
							var matched;
							while(matched = curly.exec(text)){
								var m=matched[1];
								text=text.replace("{"+m+"}", this.context[0].aoData[i]._aData[m]);
		
							}
							cell.innerHTML=text;
							
							
							//cell.innerHTML =b[no_of_btn];
						} );
					break;
				}
			});
		} ).draw();
	}
	
});
