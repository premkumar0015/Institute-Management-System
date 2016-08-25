<?php 
include('connection.php');
?>
<section class="container">

	<h2>Light Javascript Table Filter</h2>

	<input type="search" class="light-table-filter" data-table="order-table" placeholder="Filter">

<table border='1'class="order-table" cellpadding='10'>
<tr>
<th>Name</th><th>Course</th><th>Mobile</th><th>Email</th><th>Collage</th><th>Date</th><th>Comment</th><th>Address</th><th>Branch</th>
</tr>
<?php
$query=mysql_query("select * from enquiry order by date");
while($result=mysql_fetch_array($query))
{
?>
<tr>
<td><?php echo $result['name'];?></td><td><?php echo $result['course'];?></td><td><?php echo $result['mobile'];?></td><td><?php echo $result['email'];?></td><td><?php echo $result['collage'];?></td><td><?php echo $result['date'];?></td><td><?php echo $result['comment'];?></td>
<td><?php echo $result['address'];?></td><td><?php echo $result['branch'];?></td>
</tr>
<?php } ?>
</table>
<script type="text/javascript">
(function(document) {
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