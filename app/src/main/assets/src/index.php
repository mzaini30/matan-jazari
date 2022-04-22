<?php ob_start() ?>
	<div class="mb-4">
		<a href="https://play.google.com/store/apps/details?id=com.mzaini30.matanjazari" class="button">review app</a>
	</div>
	<?php  
		$judul = [
			['judul' => 'كل', 'file' => 'semua'],
			['judul' => 'المقدمة', 'file' => 'mukadimah'],
			['judul' => 'مخارج الحروف', 'file' => 'makhroj'],
			['judul' => 'صفات الحروف', 'file' => 'sifat'],
			['judul' => 'التجويد', 'file' => 'tajwid'],
			['judul' => 'التفخيم والترقيق', 'file' => 'tafhim'],
			['judul' => 'الراءات', 'file' => 'ra'],
			['judul' => 'اللامات', 'file' => 'lam'],
			['judul' => 'الضاد والظاء', 'file' => 'dad'],
			['judul' => 'التحذيرات', 'file' => 'tahzir'],
			['judul' => 'الميم والنون المشددتين والميم الساكنة', 'file' => 'mim'],
			['judul' => 'التنوين والنون الساكنة', 'file' => 'tanwin'],
			['judul' => 'المد والقصر', 'file' => 'mad'],
			['judul' => 'معرفة الوقوف', 'file' => 'waqaf'],
			['judul' => 'المقطوع والموصول وحكم التاء', 'file' => 'ta-sambung'],
			['judul' => 'التاءات', 'file' => 'ta'],
			['judul' => 'همز الوصل', 'file' => 'hamzah'],
			['judul' => 'الخاتمة', 'file' => 'selesai']
		];
	?>
	<div class="buttons menu has-addons">
		<?php foreach ($judul as $n => $x): ?>
			<a href="isi/<?= $x['file'] ?>.php" class="button <?php if($n == 0){echo 'is-success';} ?>"><?= $x['judul'] ?></a>
		<?php endforeach ?>
	</div>

<style>
.menu a.button {width: 100%;border-radius: 0;}
</style>
<?php $body = ob_get_clean() ?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/layout/base.php' ?>