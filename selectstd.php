<?php 
include('connection.php');
?>
<html>


<style type="text/css">
#s1
{
color:green;
}
</style>

<body>
<div id="section">
<section class="container">

<h1 id="s1">Search students with the help of Name,Id,College,Mobile,Address</h1>
<input type="text" style="width:30%"height="60%" id="searchTerm" placeholder="Filter"  height="48" class="search_box" onkeyup="doSearch()" /> 
<table id="dataTable" border="1" width="100%" cellspacing="0" cellpadding="3">

<tr>
<th>StudentId</th><th>Name</th><th>College</th><th>Semester</th><th>Mobile</th><th>Address</th><th>Date</th>
</tr>
<?php
$query=mysql_query("select * from student");
while($result=mysql_fetch_array($query))
{
?>
<tr>
<td><?php echo $result['studentid'];?></td><td><?php echo $result['name'];?></td><td><?php echo $result['college'];?></td><td><?php echo $result['semester'];?></td>
<td><?php echo $result['mobile'];?></td><td><?php echo $result['address'];?></td><td><?php echo $result['joindate'];?></td>

</tr>
<?php } ?>
</table>
</div>
<body>
</html>
<script type="text/javascript">
/*(function(document) {
	'use strict';

	var LightTableFilter = (function(Arr) {

		var _input;

		function _onInputEvent(e) {
			_input = e.target;
			var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
			Arr.forEach.call(tables, function(table) {
				Arr.forEach.call(table.tBodies, function(tbody) {
					Arr.forEach.call(tbody.rows, _filter);
				});
			});
		}

		function _filter(row) {
			var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
			row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
		}

		return {
			init: function() {
				var inputs = document.getElementsByClassName('light-table-filter');
				Arr.forEach.call(inputs, function(input) {
					input.oninput = _onInputEvent;
				});
			}
		};
	})(Array.prototype);

	document.addEventListener('readystatechange', function() {
		if (document.readyState === 'complete') {
			LightTableFilter.init();
		}
	});

})(document);
</script>
*/
<script type="text/javascript">
function doSearch() {
    var searchText = document.getElementById('searchTerm').value;
    var targetTable = document.getElementById('dataTable');
    var targetTableColCount;
            
    //Loop through table rows
    for (var rowIndex = 0; rowIndex < targetTable.rows.length; rowIndex++) {
        var rowData = '';

        //Get column count from header row
        if (rowIndex == 0) {
           targetTableColCount = targetTable.rows.item(rowIndex).cells.length;
           continue; //do not execute further code for header row.
        }
                
        //Process data rows. (rowIndex >= 1)
        for (var colIndex = 0; colIndex < targetTableColCount; colIndex++) {
            rowData += targetTable.rows.item(rowIndex).cells.item(colIndex).textContent;
        }

        //If search term is not found in row data
        //then hide the row, else show
        if (rowData.indexOf(searchText) == -1)
            targetTable.rows.item(rowIndex).style.display = 'none';
        else
            targetTable.rows.item(rowIndex).style.display = 'table-row';
    }
}
</script>