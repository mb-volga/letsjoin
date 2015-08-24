/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
'use strict'

 $(function()
 { 
	$("#home").live('click',function()
	{
		 $.ajax(
        {
			type:"POST",
			url:"site/index",
			success: function(html)
			{
				$("#view").html(html);						
			}
		});
	});
      
	$("#me").live('click',function()
	{
        $.ajax(
        {
			type:"POST",
			url:"user/index",
			success: function(html)
			{
				$("#view").html(html);						
			}
		});
	});

    $("#friends_me").live('click',function()
	{
        var divs = $("#view").firstChild();
        $("#footer").html(divs);
	});
    $(".group").live('click',function()
	{
		var group_id=$(this).attr("id");
		$.ajax(
        {
			type:"POST",
			url:"site/section",
			data:"group_id="+group_id,
			success: function(html)
			{
				$("#view").html(html);						
			}
		});				
	});
 });