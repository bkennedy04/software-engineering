<?php
include "db_connect.php";

$query1 = "SELECT * FROM recipe ORDER BY social_rank ASC LIMIT 6";
$result = $conn->query($query1);

if ($result->num_rows > 0) {
	$rank = 1;

	// output data of each row
	while($row = $result->fetch_array()) {
?>

<div class="col-sm-2">
  <div class="thumbnail">
    <img src="<?php echo $row["image_url"] ?>" alt="<?php echo $row["title"]; ?>" class="img-rounded" />
    <span class="badge" style="font-weight: bold; position: absolute; margin: -120px 0 0 5px; opacity: 0.75">
    <?php 
    echo "#" . $rank; 
    if($rank == 1)
    {
    	echo " TRENDING";
    }
    ?>
    </span>
    <div class="caption">
      <h3><?php echo $row["title"]; ?></h3>
      <p>This looks good!!!!!!!!!</p>
      <div class="go-to-recipe-btn"><a href="example_recipe.php?recipe_id=<?php echo $row["recipe_id"]; ?>" class="btn btn-primary" role="button">Go To Recipe</a></div>
    </div>
  </div>
</div>

<?php
	$rank++;
	}
}
else{
	echo "0 results";
}
$conn->close();

?>


            