	</div>
		</main>

		<nav id="nav">
			<div class="innertube">
				<h1>CATEGORYS</h1>
				<ul>
				<?php   while ($row=mysqli_fetch_array($category)) {
					
						$output = "<li>";
					    $output .="<a href=\"view.php?id={$row['id']}&category={$row['category_name']}\">{$row['category_name']}</a>";
						$output .="</li>";

						echo $output;
					?>
				           <?php  }       ?>
					
					
				</ul>



				<h1>ADMIN</h1>
				<ul>
					<li><a href="upload.php">Upload Photo</a></li>
					<li><a href="home.php">Home</a></li>

					<li><a href="logout.php">Log_out</a></li>

				</ul>

			</div>
		</nav>	
		
	
	</body>
</html>
<?php ob_end_flush(); 

    $database->close_connection();

?>