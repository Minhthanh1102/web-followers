<?php
include "./includes/header.php";
include "./includes/slider.php";

?>
<div class="main">
	<!-- <?php
// echo session_id()

?> -->
	<div class="content">
		<div class="content_top">
			<div class="heading">
				<h3>Feature Products</h3>
			</div>
			<div class="clear"></div>
		</div>
		<div class="section group">
			<?php
			$Pd_fethread = $product->getproduct_featured();
			if ($Pd_fethread) {
				while ($result = $Pd_fethread->fetch_assoc()) {


			?>
					<div class="grid_1_of_4 images_1_of_4">
						<a href="details.php"><img src="admin/upload/<?php echo $result['avatar']   ?>" alt="" /></a>
						<h2><?php echo $result['name']   ?> </h2>
						<p><?php echo $fm->textShorten($result['description'], 20) ?></p>
						<p><span class="price"><?php echo $result['price'] . " vnd"  ?></span></p>

						
						<div class="button"><span><a href="details.php?productid=<?php echo $result['id'] ?>" class="details">Details</a></span></div>
					</div>
			<?php
				}
			}

			?>
		</div>
		<div class="content_bottom">
			<div class="heading">
				<h3>New Products</h3>
			</div>
			<div class="clear"></div>
		</div>
		<div class="section group">
		<?php
			$Pd_new = $product->getproduct_new();
			if ($Pd_new) {
				while ($result = $Pd_new->fetch_assoc()) {


			?>
			<div class="grid_1_of_4 images_1_of_4">
						<a href="details.php"><img src="admin/upload/<?php echo $result['avatar']   ?>" alt="" /></a>
						<h2><?php echo $result['name']   ?> </h2>
						<p><?php echo $fm->textShorten($result['description'], 20) ?></p>
						<p><span class="price"><?php echo $result['price'] . " vnd"  ?></span></p>
						<div class="button"><span><a href="details.php?productid=<?php echo $result['id'] ?>" class="details">Details</a></span></div>
					</div>
			<?php
				}
			}

			?>
		</div>
	</div>
</div>
<?php
include "./includes/footer.php";
?>