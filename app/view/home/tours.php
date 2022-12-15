<?php include VIEW . 'includes/header.php'?>
    <!-- hero section -->
    <section class="home tours">
        <div class="text">
            <h2>Start Your Vacation<br>With Our Best Tours</h2>
            <p><a href="index.html">Home</a> > Tours</p>
        </div>
    </section>

    <!-- tours section -->
    <section class="tours-section">
        <div class="tours-grid">
            <div class="column-1">
				<div class="search-box">
					<form method="post">
						<div class="input-field">
							<label for="start-day">from</label>
							<input type="date" name="start-day" id="start-day">
							<!-- <i class='bx bxs-calendar'></i> -->
						</div>
						<div class="input-field">
							<label for="return-day">to</label>
							<input type="date" name="return-day" id="return-day">
							<!-- <i class='bx bxs-calendar'></i> -->
						</div>
						<div class="input-field">
							<label for="destination">where</label>
							<input type="text" name="destination" id="destination" placeholder="Ex.Paris, Maldives, Greece">
							<i class='bx bxs-map'></i>
						</div>
						<div class="search">
							<button><i class='bx bx-search'></i>search</button>
						</div>
					</form>
				</div>
				<img src="../img/travigo-gif.gif" alt="Travigo Logo Animated Gif" width="100%">
			</div>
			<div class="column-2">
				<?php foreach($this->view_data as $data){?>
				<!-- tour -->
				<div class="tour-box">
					<img src="http://localhost/new-mvc-oop/public/img/tours/<?= $data["tour_image"]?>" alt="Picture of The Dades Gorges, Boumalne Dades City in Morocco" width="100%">
					<div class="box-text">
						<h3><?=$data["tour_name"]?></h3>
						<p class="description">
							<?=$data["tour_description"]?>
						</p>
						<div class="tour-box-footer">
							<div class="tour-info">
								<div class="country">
									<i class='bx bxs-flag-alt'></i>
									<?=$data["tour_destination"]?>
								</div>
								<div class="duration">
									<i class='bx bxs-time'></i>
									<?=$data["tour_duration"]?>
								</div>
									<i class='bx bxs-dollar-circle'></i>
									$<?=$data["tour_price"]?>
								</div>
							</div>
							<button>More Details<i class="bx bxs-chevron-right"></i></button>
						</div>
					</div>
				</div>
				<?php }?>
			</div>
        </div>
		<div class="pages">
			<a href="#" class="active">1</a>
			<a href="#">2</a>
			<a href="#">3</a>
			<a href="#">4</a>
			<a href="#"><i class="bx bxs-chevron-right"></i></a>
		</div>
    </section>
<?php include VIEW . 'includes/footer.php'?>