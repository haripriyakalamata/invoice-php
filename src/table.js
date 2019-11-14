$(document).ready(function () {
	var i = 1;
	$("#add_row").click(function () {
		b = i - 1;
		$('#addr' + i).html($('#addr' + b).html()).find('td:first-child').html(i + 1);
		$('#tab_logic').append('<tr id="addr' + (i + 1) + '"></tr>');
		i++;
	});
	$("#delete_row").click(function () {
		if (i > 1) {
			$("#addr" + (i - 1)).html('');
			i--;
		}
		calc();
	});
	$('#tab_logic tbody').on('keyup change', function () {
		calc();
	});
	$('#tax').on('keyup change', function () {
		calc_total();
	});
});

function calc() {
	$('#tab_logic tbody tr').each(function (i, element) {
		var html = $(this).html();
		if (html != '') {
			var qty = $(this).find('.qty').val();
			var price = $(this).find('.price').val();
			var discount = $(this).find('.discount').val();
			$(this).find('.total').val(qty * price - qty * discount);
			$(this).find('.price_total').val(qty * price);

			calc_total();
		}
	});
}

function calc_total() {
	total = 0;
	$('.total').each(function () {
		total += parseInt($(this).val());
	});
	$('#sub_total').val(total.toFixed(2));


	price_total = 0;
	$('.price').each(function () {
		price_total += parseInt($(this).val());
	});
	$('#price_total').val(price_total.toFixed(2));



	discount_total = 0;
	$('.discount').each(function () {
		discount_total += parseInt($(this).val());
	});
	$('#discount_total').val(discount_total.toFixed(2));


}
