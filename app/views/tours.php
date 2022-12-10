<?php include_once 'includes/header.php' ?>
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
				<img src="../assets/img/travigo-gif.gif" alt="Travigo Logo Animated Gif" width="100%">
			</div>
			<div class="column-2">
				<!-- tour -->
				<div class="tour-box">
					<img src="../assets/img/tours/1.jpg" alt="Picture of Satorini City in Greece" width="100%">
					<div class="box-text">
						<h3>Santorini</h3>
						<p class="description">
							Santorini is a volcanic island in the Cyclades group of the Greek islands. It is located between Ios and Anafi islands. It is famous for dramatic views, stunning sunsets from Oia town, the strange white aubergine (eggplant), the town of Thira, and naturally its very own active volcano.
						</p>
						<div class="tour-box-footer">
							<div class="tour-info">
								<div class="country">
									<i class='bx bxs-flag-alt'></i>
									Greece
								</div>
								<div class="duration">
									<i class='bx bxs-time'></i>
									5 Days, 4 Nights
								</div>
								<div class="price">
									<i class='bx bxs-dollar-circle'></i>
									$5,000
								</div>
							</div>
							<button>More Details<i class="bx bxs-chevron-right"></i></button>
						</div>
					</div>
				</div>
				<!-- tour -->
				<div class="tour-box">
					<img src="../assets/img/tours/2.jpg" alt="Picture of Bordeaux, Nouvelle-Aquitaine City in France" width="100%">
					<div class="box-text">
						<h3>Bordeaux, Nouvelle-Aquitaine</h3>
						<p class="description">
							Bordeaux, hub of the famed wine-growing region, is a port city on the Garonne River in southwestern France. It’s known for its Gothic Cathédrale Saint-André, 18th- to 19th-century mansions and notable art museums such as the Musée des Beaux-Arts de Bordeaux.
						</p>
						<div class="tour-box-footer">
							<div class="tour-info">
								<div class="country">
									<i class='bx bxs-flag-alt'></i>
									France
								</div>
								<div class="duration">
									<i class='bx bxs-time'></i>
									4 Days, 3 Nights
								</div>
								<div class="price">
									<i class='bx bxs-dollar-circle'></i>
									$8,000
								</div>
							</div>
							<button>More Details<i class="bx bxs-chevron-right"></i></button>
						</div>
					</div>
				</div>
				<!-- tour -->
				<div class="tour-box">
					<img src="../assets/img/tours/3.jpg" alt="Picture of Maldives" width="100%">
					<div class="box-text">
						<h3>Maldives</h3>
						<p class="description">
							The Maldives consists of 1,190 islands located in the Indian Ocean, southwest of India. They offer seclusion, breathtaking ocean views, and the most luxurious overwater villas in the World. Amazing scuba diving, snorkeling, and surfing help make the Maldives a unique and fantastic beach destination.
						</p>
						<div class="tour-box-footer">
							<div class="tour-info">
								<div class="country">
									<i class='bx bxs-flag-alt'></i>
									Maldives
								</div>
								<div class="duration">
									<i class='bx bxs-time'></i>
									5 Days, 4 Nights
								</div>
								<div class="price">
									<i class='bx bxs-dollar-circle'></i>
									$5,000
								</div>
							</div>
							<button>More Details<i class="bx bxs-chevron-right"></i></button>
						</div>
					</div>
				</div>
				<!-- tour -->
				<div class="tour-box">
					<img src="../assets/img/tours/4.jpg" alt="Picture of The Dades Gorges, Boumalne Dades City in Morocco" width="100%">
					<div class="box-text">
						<h3>The Dades Gorges, Boumalne Dades</h3>
						<p class="description">
							Daily trips are organized to discover these landscapes, located about 35 km to the north, between the center of Boumalne Dades and its outskirts. 10 km from Boumalne Dades to Ait Sdrat, one can run across an area known as the “monkeys’ fingers.”...
						</p>
						<div class="tour-box-footer">
							<div class="tour-info">
								<div class="country">
									<i class='bx bxs-flag-alt'></i>
									Maroc
								</div>
								<div class="duration">
									<i class='bx bxs-time'></i>
									4 Days, 3 Nights
								</div>
								<div class="price">
									<i class='bx bxs-dollar-circle'></i>
									$8,000
								</div>
							</div>
							<button>More Details<i class="bx bxs-chevron-right"></i></button>
						</div>
					</div>
				</div>
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

<?php include_once 'includes/footer.php' ?>