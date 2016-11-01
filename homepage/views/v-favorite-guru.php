		<!-- section -->
		<section class="grid-row clear-fix padding-section">
			<h2 class="center-text">Our Teachers</h2>
			<div class="grid-col-row">
			<?php $no = 1; ?>
			<?php foreach ($teachers as $teacher): ?>
				<div class="grid-col grid-col-6 mt10">
					<div class="item-instructor bg-color-<?=$no?>">
						<a href="page-profile.html" class="instructor-avatar">
							<img width="175px" src="<?=base_url('assets/image/avatar') ?>/<?=$teacher['photo'] ?>" data-at2x="<?=base_url('index.php/assets/image/avatar') ?>/<?=$teacher['photo'] ?>" alt>
						</a>
						<div class="info-box">
							<h3><?=$teacher['namaDepan']." ".$teacher['namaBelakang'] ?></h3>
							<div class="divider"></div>
							<p><?=$teacher['biografi']?></p>
						</div>
					</div>
				</div>
				<?php $no++; ?>
			<?php endforeach ?>

			</div>
		</section>
		<!-- / section -->