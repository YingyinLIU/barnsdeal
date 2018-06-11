<h3>Suppression d'un utilisateur</h3>
	
<div class="container" style="padding-top: 15px">
	<div class="user_table" style="padding:15px 20px;">
		<table border="0.75" style="width: 500px;text-align: center;">
			<tr height="60px">
				<th>User ID</th>
				<th>User password</th>
				<th>Startup</th>
			</tr>
			<?php
			// sort 
			foreach ($user_startup as $key => $row) {
			    $id[$key]  = $row['id'];
			    $password[$key] = $row['password'];
			    if(isset($value['startup'])){
			    	$startup[$key] = $row['startup'];
			    }
			    $startup[$key] = null;
			}
			array_multisort($id, SORT_NUMERIC, $password, SORT_ASC, $startup, SORT_ASC, $user_startup);
			
			foreach($user_startup as $value){
				echo '<tr height="40px"><th>'.$value['id'].'</th>';
				echo '<th>'.$value['password'].'</th>';
				if(isset($value['startup'])){
					echo '<th>'.$value['startup'].'</th></tr>';
				}
				else echo '<th></th>';
			} 
			?>
		</table>
	</div>
<div class="form_container" style="margin:15px 0;">
<?php	
	echo form_open('Form/supprimer_utilisateur',array("onsubmit" => "return sb1();"));
	
	$options_a = array();
	
	array_push($options_a, 'Sélectionner');
	
	foreach($startups as $startup)
	{	
		$tmp = $startup['id'];
		$options_a[$tmp] = $startup['nom'];
	}
	
	echo form_dropdown('startup', $options_a, null, 'id="startup"');

	$options_b = array();
	array_push($options_b, 'Sélectionner');
	echo form_dropdown('userid', $options_b, null, 'id="userid"');
	
	echo '<div id="form_sub">'.form_submit('submit', 'Confirmer').'</div>';
	echo form_close();
	echo '</div>';
?>
</div>
<script src="<?php echo site_url('assets/javascript/jquery.min.js')?>"></script>
<script>
		<?php echo 'let userList = '.json_encode($user_startup).";";?>

		$("#startup").change( () => {
			let selText = $("#startup option:selected").text();
			console.log(selText+" is selected");
			$("#userid option").each(function(){
				$(this).remove();
			});
			//$("#userid").prepend("<option value='0'>first</option>");
			//let userList = JSON.parse(user_startup);
			let compare = (obj1, obj2) => {
			    let val1 = parseInt(obj1.id);
			    let val2 = parseInt(obj2.id);
			    if (val1 < val2) {
			        return -1;
			    } else if (val1 > val2) {
			        return 1;
			    } else {
			        return 0;
			    }            
			} 
			userList.sort(compare);
			userList.map((e) => {
				if(e.startup == selText){
					$("#userid").append("<option value='"+e.id+"'>"+e.id+"</option>");
				}
			});
		})

		function sb1(){
			let selText = $("#userid option:selected").val();
			if (selText == 0){
				alert("please choose a startup and a user!");
				return false;
			}
			else {
				let con = confirm("It will delete a user, please confirm it!"); //在页面上弹出对话框
				if(con){
					return true;
				}
				else return false;
			}
		}
</script>
