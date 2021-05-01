<section class="section-content padding-y bg">
    <div class="container">
        <h4>Reviews:</h4>
        <?php if (isset($phone['review'])) : ?>
            <?php foreach ($phone['review'] as $review) : ?>
                <article class="box mb-3">
                    <div>
                        <p>
                            <?php echo $review ?>
                        </p>
                    </div>
                </article>
                <p>
                <?php endforeach; ?>
            <?php else : ?>
                <h5 class="text-center"><em>No Reviews Yet!</em></h5>
            <?php endif; ?>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Write a Review</span>
                </div>
                <textarea class="form-control" aria-label="With textarea" name="review" id="review"></textarea>
                <button class="btn btn-outline-secondary" type="button" id="submitReview">Submit</button>
            </div>
    </div>
    </div>
</section>