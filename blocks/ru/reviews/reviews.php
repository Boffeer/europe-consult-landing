<section class="reviews">
	<div class="container reviews__container">
		<h2 class="section__title reviews__title">
			А вот отзывы о моих консультациях
		</h2>
		<div class="swiper reviews-slider">
			<div class="swiper-wrapper">
				<?php
				/*
				This was a first block design, but at the end, it has been changed to picutres
				<article class="swiper-slide reviews-slider-slide reviews-card" >
					<div class="reviews-card__profile">
						<img
							src="./img/reviews/review.png"
							alt=""
							class="reviews-card__img"
						/>
						<h3 class="reviews-card__name">Алина Жиркова</h3>
					</div>
					<p class="reviews-card__review">
						Спасибо большое Юрию за консультацию. За час узнала куда
						сливается 40 тысяч из рекламного бюджета, поувольняла пол
						штата и наконец-то начала выходить в нормальный плюс по
						выручке!
					</p>
					<p class="reviews-card__review">
						Всем советую, быстро, чётко и по делу))
					</p>
				</article>
				*/
				?>
				<?php
					$reviews_path = "{$host_url}/img/reviews/ru/"
				?>
				<article class="swiper-slide reviews-slider-slide reviews-card" >
					<img src="<?php echo $reviews_path; ?>4.jpg" alt="">
				</article>
				<article class="swiper-slide reviews-slider-slide reviews-card" >
					<img src="<?php echo $reviews_path; ?>5.jpg" alt="">
				</article>
				<article class="swiper-slide reviews-slider-slide reviews-card" >
					<img src="<?php echo $reviews_path; ?>6.jpg" alt="">
				</article>
				<article class="swiper-slide reviews-slider-slide reviews-card" >
					<img src="<?php echo $reviews_path; ?>7.jpg" alt="">
				</article>
				<article class="swiper-slide reviews-slider-slide reviews-card" >
					<img src="<?php echo $reviews_path; ?>8.jpg" alt="">
				</article>
				<article class="swiper-slide reviews-slider-slide reviews-card" >
					<img src="<?php echo $reviews_path; ?>3.jpg" alt="">
				</article>
				<article class="swiper-slide reviews-slider-slide reviews-card" >
					<img src="<?php echo $reviews_path; ?>9.jpg" alt="">
				</article>
				<article class="swiper-slide reviews-slider-slide reviews-card" >
					<img src="<?php echo $reviews_path; ?>1.jpg" alt="">
				</article>
				<article class="swiper-slide reviews-slider-slide reviews-card" >
					<img src="<?php echo $reviews_path; ?>2.jpg" alt="">
				</article>
			</div>
			<div class="swiper-scrollbar reviews-slider__scrollbar"></div>
		</div>
	</div>
</section>
