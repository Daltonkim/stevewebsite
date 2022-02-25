<?php
function numberTowords($num)
{
	$ones = array(
		0 => "ZERO",
		1 => "One",
		2 => "Two",
		3 => "Three",
		4 => "Four",
		5 => "Five",
		6 => "Six",
		7 => "Seven",
		8 => "Eight",
		9 => "Nine",
		10 => "Ten",
		11 => "Eleven",
		12 => "Twelve",
		13 => "Thirteen",
		14 => "Fourteen",
		15 => "Fifteen",
		16 => "Sixteen",
		17 => "Seventeen",
		18 => "Eighteen",
		19 => "Nineteen",
		"014" => "Fourteen"
	);
	$tens = array(
		0 => "ZERO",
		1 => "TEN",
		2 => "TWENTY",
		3 => "THIRTY",
		4 => "FORTY",
		5 => "FIFTY",
		6 => "SIXTY",
		7 => "SEVENTY",
		8 => "EIGHTY",
		9 => "NINETY"
	);
	$hundreds = array(
		"HUNDRED",
		"THOUSAND",
		"MILLION",
		"BILLION",
		"TRILLION",
		"QUARDRILLION"
	); /*limit t quadrillion */
	$num = number_format($num, 2, ".", ",");
	$num_arr = explode(".", $num);
	$wholenum = $num_arr[0];
	$decnum = $num_arr[1];
	$whole_arr = array_reverse(explode(",", $wholenum));
	krsort($whole_arr, 1);
	$rettxt = "";
	foreach ($whole_arr as $key => $i) {

		while (substr($i, 0, 1) == "0")
			$i = substr($i, 1, 5);
		if ($i < 20) {
			/* echo "getting:".$i; */
			$rettxt .= $ones[$i];
		} elseif ($i < 100) {
			if (substr($i, 0, 1) != "0")  $rettxt .= $tens[substr($i, 0, 1)];
			if (substr($i, 1, 1) != "0") $rettxt .= " " . $ones[substr($i, 1, 1)];
		} else {
			if (substr($i, 0, 1) != "0") $rettxt .= $ones[substr($i, 0, 1)] . " " . $hundreds[0];
			if (substr($i, 1, 1) != "0") $rettxt .= " " . $tens[substr($i, 1, 1)];
			if (substr($i, 2, 1) != "0") $rettxt .= " " . $ones[substr($i, 2, 1)];
		}
		if ($key > 0) {
			$rettxt .= " " . $hundreds[$key] . " ";
		}
	}
	if ($decnum > 0) {
		$rettxt .= " and ";
		if ($decnum < 20) {
			$rettxt .= $ones[$decnum];
		} elseif ($decnum < 100) {
			$rettxt .= $tens[substr($decnum, 0, 1)];
			$rettxt .= " " . $ones[substr($decnum, 1, 1)];
		}
	}
	return $rettxt;
}

?>

<section class="faqs">
	<div class="container">
		<div class="faqs__section">
			<div class="row">
				<div class="col-md-6">
					<div id="accordion-9" class="accordion accordion_style4">
						<?php
						$faqs = new WP_Query(array(
							'post_type' => 'faqs',
							'posts_per_page' => '-1',
						));
						?>
						<?php if ($faqs->have_posts()) : ?>
							<?php  $i = 0; while ($faqs->have_posts()) : $faqs->the_post();
									$count = 1;
									$index;
									$i++;
							?>
								<div class="card">
									<div class="card-header" id="heading-9-<?php echo numberTowords($i) ?>">
										<h6 class="mb-0"> <a class="faqscollapse" data-toggle="collapse" href="#collapse-9-<?php echo numberTowords($i); ?>" aria-expanded="false" aria-controls="collapse-9-<?php echo numberTowords($i); ?>"><?php _e('How does mypaperhelpers.net work?', 'mypaperhelper'); ?></a> </h6>
									</div>
									<div id="collapse-9-<?php echo numberTowords($i); ?>" class="collapse" aria-labelledby="heading-9-<?php echo numberTowords($i); ?>" data-parent="#accordion-9">
										<div class="card-body">
											<?php _e('The process of placing an order or an inquiry is user initiated. You can choose to place an order via our order form or place an inquiry. Once the order is placed, the support team chooses the best skilled expert to handle your task. The writer is paid after successful and timely delivery of the work', 'mypaperhelper'); ?>
										</div>
									</div>
								</div>
							<?php endwhile;
							wp_reset_postdata();
						else : ?>
							<p>They are no posts yet</p>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-md-6">
					<img src="<?php echo get_stylesheet_directory_uri() . '/assets/frontend/images/faqs.png' ?> " alt="" />
				</div>
			</div>
		</div>
	</div>
</section>
