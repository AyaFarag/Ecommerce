<?php 

echo '
<div class="comments">
		<div class="comment-wrap">
				<div class="photo">
						<div class="avatar" style="background-image: url(\'https://s3.amazonaws.com/uifaces/faces/twitter/dancounsell/128.jpg\')"></div>
                        </div>

				<div class="comment-block">
						<form action="">
								<textarea name="" id="" cols="30" rows="3" placeholder="Add comment..."></textarea>
						</form>
				</div>
		</div>'; 
?>

<?php 

$q3 = "select * from comments where productid = '$id'";
$table3 = mysqli_query($conn , $q3);
while($comment = mysqli_fetch_array($table3))
{
    echo '	<div class="comment-wrap">
				<div class="photo">
						<div class="avatar" style="background-image: url(\'https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg\')"></div>
				</div>
				<div class="comment-block">
						<p class="comment-text"> '.$comment['content'].' </p>
						<div class="bottom-comment">
								<div class="comment-date"> '.$comment['date'].' </div>							
						</div>
				</div>
		</div>';
}

echo '</div>
</div>';
?>
