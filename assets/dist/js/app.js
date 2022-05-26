$(document).ready(function () {



	function openSearchInput() {
		$('#open-search-input').on('click', function (e) {
			e.preventDefault()

			$('#open-search-input').addClass('close')

			$('#input-search')
				.addClass('open')
				.promise()
				.done(function () {
					setTimeout(function () {
						$('#input-search').focus();
					}, 200)
				})

			$('#input-search').on('blur', function () {
				$(this).removeClass('open')
				$('#open-search-input').removeClass('close')
			})
		})

		$(document).on('keydown', function (event) {
			if (event.key == "Escape" && $('#input-search').hasClass('open')) {
				$('#input-search').removeClass('open')
				$('#open-search-input').removeClass('close')
			}
		});

	}
	openSearchInput()

	function homeCustomerCarousel() {
		$('#home-customer-carousel').slick({
			infinite: false,
			dots: true,
			slidesToShow: 4,
			slidesToScroll: 4,
			prevArrow: '#home-customer-prev',
			nextArrow: '#home-customer-next',
		})
	}
	homeCustomerCarousel()

	function testimonialCarousel() {
		$('#testimonial-carousel').slick({
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			prevArrow: '#testimonial-prev',
			nextArrow: '#testimonial-next',
		})
	}
	testimonialCarousel()
})