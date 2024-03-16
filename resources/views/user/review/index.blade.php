@extends('user_layout.master_layout')
@section('content')
<style>
    body {
        background-color: #F3F3F3;
    }
    .review-star {
        margin-bottom: 16px;
    }
    .review-star svg {
        cursor: pointer;
    }
    .star {
        cursor: pointer;
        font-size: 40px;
        color: #fabb05;
    }
</style>
   <!-- Service Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Reviews</h6>
                <h1>Add your valuable review</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form bg-white" style="padding: 30px;">
                        <form action="{{ route('add.review') }}" id="queryForm" method="POST">
                            <div class="review-star">
                                <div class="posted-label">Star Rating</div>
                                <div class="star-rating">
                                    <span class="star">&#9734;</span>
                                    <span class="star">&#9734;</span>
                                    <span class="star">&#9734;</span>
                                    <span class="star">&#9734;</span>
                                    <span class="star">&#9734;</span>
                                    <input type="hidden" name="star_rating" id="selected-rating" value="0">
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="control-group col-sm-6">
                                    <input type="text" class="form-control p-4" name="name" id="name"
                                        placeholder="Your Name">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group col-sm-6">
                                    <input type="email" class="form-control p-4" name="email" id="email"
                                        placeholder="Your Email">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control py-3 px-4" rows="5" id="review" name="review"
                                    placeholder="Enter Review"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary py-3 px-4" type="submit">Submit Review</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            // Function to update star ratings on click
            $('.star').on('click', function () {
                var index = $(this).index();
                var rating = index + 1; // Rating is index + 1
                $('#selected-rating').val(rating); // Update the hidden input with the selected rating
                // Update star visuals
                $('.star').each(function (i) {
                    if (i < rating) {
                        $(this).html('&#9733;'); // Filled star
                    } else {
                        $(this).html('&#9734;'); // Blank star
                    }
                });
            });

            // Function to add a review with star rating
            function addReview(rating) {
                var stars = "";
                for (var i = 0; i < 5; i++) {
                    if (i < rating) {
                        stars += "&#9733;"; // Filled star
                    } else {
                        stars += "&#9734;"; // Blank star
                    }
                }
                $('#reviews').append('<div class="review">' + stars + '</div>');
            }

            // Example reviews (ratings)
            var reviews = [4, 3, 5, 2, 4];

            // Add reviews
            $.each(reviews, function (index, value) {
                addReview(value);
            });
        });
    </script>
@endsection