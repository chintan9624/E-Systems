 

<form name="batch_form" id="batch_form" method="post" action="/institute/batch/create">
 
<table id="formTable" border="0" width="100%" cellspacing="0" cellpadding="0">
	<tr>
		<td class="heading_bar" colspan="2">CREATE BATCH</td>
	</tr>

	<tr>		
		<td><span class="setting_title">Code</span><br>
		<span class="setting_title_exp">Unique Batch Code</span></td>		
		<td width="40%"><input name="code" id="code" size="30" maxlength="50" value="" type="text" /></td>
			
	</tr>

	<tr>
		<td><span class="setting_title">Start From</span></td>
		<td><input name="start_date" id="start_date" size="30" maxlength="50" value="" type="text" /></td>
	</tr>
	<tr>
		<td><span class="setting_title">Completion Date</span></td>
		<td><input name="end_date" id="end_date" size="30" maxlength="50" value="" type="text" /></td>
	</tr>
	
	<tr>
		<td><span class="setting_title">Location</span></td>
		<td><input name="location" id="location" size="30" maxlength="50" value="" type="text" /></td>
	</tr>
	
	<tr>
		<td><span class="setting_title">Comments</span></td>
		<td><textarea name="comments" rows="5" style="width:70%;"></textarea></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" value="Submit"></td>
 	</tr>
</table>

</form>








</table>

<script type="text/javascript">
<!--
toggleFormRows();
//-->
</script>


