<main>
    <section class="fullwidth-background bg-2">
        <div class="grid-row">
            <div class="login-block" style="min-width: 75%">
                <div class="logo">
                    <img src="<?= base_url('assets/back/img/logo.png') ?>" alt>
                    <!--<h4>Login</h4>-->
                </div>

                <div class="clear-both"></div>

                <!-- Alert message -->
                <div class="grid-col grid-col-8">
                    <div class="alert alert-warning">
                        <span class="semibold">Catatan :</span>&nbsp;&nbsp;Silahkan diisi semua. Dan selamat Mengerjakan
                    </div>
                </div>

                <!--/ Alert message -->

                <!-- containt Soal -->
                <div>
                	<ol>
                	<?php 
                		foreach ($banksoal as $row):$idbanksoal=$row['id'];
                	?>
                		
                			<li> <?=$row['soal']?>
                				<ol>
                					<?php foreach ($pilihan as $row): $idcek=$row[];?>
                						<?php if ($): ?>
                							
                						<?php endif ?>
                					<li type="a">li</li>
                					<?php  endforeach;?>
                				</ol>
                			</li>

                		
                		
                	<?php  
                		endforeach;?>
                	</ol>

                </div>
                <!-- End Containt Soal -->

               
            </div>
        </div>
        <a href="#" class="totop animation" data-toggle="waypoints totop" data-showanim="bounceIn" data-hideanim="bounceOut" data-offset="50%"><i class="ico-angle-up"></i></a>
    </section>
</main>


<!-- Script here -->
<script type="text/javascript">
   

</script>