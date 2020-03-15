<script>
	function DeleteNotice(id)
	{
		if(confirm("You want to delete this record ?"))
		{
		window.location.href="delete_course.php?id="+id;
		}
	}
</script>
<?php 
require_once('../connection.php');
$q=mysqli_query($conn,"select * from courses");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No Courses Added By You!</h2>";
}
else
{
?>

<h2 style="color:#00FFCC">All Courses</h2>

<table class="table table-bordered">
	
	<Tr class="success">
		<th>Sr.No</th>
		<th>Course Code</th>
		<th>Course Name(s)</th>
		<th>Course Name(f)</th>
        <th>delete</th>
        <th>Update</th>
		
	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['course_code']."</td>";
echo "<td>".$row['course_sn']."</td>";
echo "<td>".$row['course_fn']."</td>";
?>

<Td><a href="javascript:DeleteNotice('<?php echo $row['id']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td>


<?php 
echo "<Td><a href='index.php?page=update_course&id=".$row['id']."' style='color:green'><span class='glyphicon glyphicon-edit'></span></a></td>";
echo "</Tr>";
$i++;
}
		?>
		
</table>
<?php }?>	