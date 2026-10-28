<?php
/**
 * The front page template.
 *
 * @package Brightline
 */

get_header();
?>
<main>
    <section class="hero">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7">
                    <p class="eyebrow mb-3"><?php esc_html_e( 'Build what matters', 'brightline' ); ?></p>
                    <h1 class="display-title mb-4"><?php esc_html_e( 'A clearer way to move your best ideas forward.', 'brightline' ); ?></h1>
                    <p class="hero-copy mb-4"><?php esc_html_e( 'Brightline brings your team, projects, and priorities together in one simple workspace so you can spend less time organizing and more time creating.', 'brightline' ); ?></p>
                    <div class="d-flex flex-wrap gap-3">
                        <a class="btn btn-primary btn-lg px-4" href="#get-started"><?php esc_html_e( 'Get started', 'brightline' ); ?> <i class="fa-solid fa-arrow-right ms-2" aria-hidden="true"></i></a>
                        <a class="btn btn-outline-primary btn-lg px-4" href="#features"><?php esc_html_e( 'Explore features', 'brightline' ); ?> <i class="fa-solid fa-compass ms-2" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="hero-card">
                        <div class="hero-card-header mb-4">
                            <div>
                                <span class="eyebrow d-block mb-1"><?php esc_html_e( 'Weekly overview', 'brightline' ); ?></span>
                                <strong><?php esc_html_e( 'Team momentum', 'brightline' ); ?></strong>
                            </div>
                            <span class="badge rounded-pill text-bg-success"><?php esc_html_e( '+18%', 'brightline' ); ?></span>
                        </div>
                        <div class="progress mb-4" role="progressbar" aria-label="<?php esc_attr_e( 'Project progress', 'brightline' ); ?>" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 72%"></div>
                        </div>
                        <div class="row g-3">
                            <div class="col-6"><div class="metric"><div class="metric-value">24</div><div class="metric-label"><?php esc_html_e( 'Tasks completed', 'brightline' ); ?></div></div></div>
                            <div class="col-6"><div class="metric"><div class="metric-value">8.4k</div><div class="metric-label"><?php esc_html_e( 'Minutes saved', 'brightline' ); ?></div></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="feature-section" id="features">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-7">
                    <p class="eyebrow mb-3"><?php esc_html_e( 'Everything in one place', 'brightline' ); ?></p>
                    <h2 class="display-6 fw-bold mb-3"><?php esc_html_e( 'Less noise. More momentum.', 'brightline' ); ?></h2>
                    <p class="section-copy mb-0"><?php esc_html_e( 'Practical tools and thoughtful design help your team stay aligned from first idea to final delivery.', 'brightline' ); ?></p>
                </div>
            </div>
            <div class="row g-4">
                <?php
                $features = array(
                    array( 'icon' => 'fa-solid fa-compass', 'title' => __( 'Plan with clarity', 'brightline' ), 'copy' => __( 'Turn big goals into focused, actionable plans everyone can understand.', 'brightline' ) ),
                    array( 'icon' => 'fa-solid fa-people-group', 'title' => __( 'Work together', 'brightline' ), 'copy' => __( 'Keep conversations, feedback, and files connected to the work that matters.', 'brightline' ) ),
                    array( 'icon' => 'fa-solid fa-chart-line', 'title' => __( 'Make progress visible', 'brightline' ), 'copy' => __( 'See what is moving, what needs attention, and where your next win is.', 'brightline' ) ),
                );
                foreach ( $features as $feature ) :
                    ?>
                    <div class="col-md-4">
                        <article class="feature-card">
                            <div class="feature-icon" aria-hidden="true"><i class="<?php echo esc_attr( $feature['icon'] ); ?>"></i></div>
                            <h3 class="h5 fw-bold"><?php echo esc_html( $feature['title'] ); ?></h3>
                            <p class="mb-0"><?php echo esc_html( $feature['copy'] ); ?></p>
                        </article>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="cta-section mt-5" id="get-started">
                <div class="row align-items-center g-4">
                    <div class="col-lg-8">
                        <h2 class="display-6 fw-bold mb-3"><?php esc_html_e( 'Ready to make room for better work?', 'brightline' ); ?></h2>
                        <p class="mb-0"><?php esc_html_e( 'Start with a simpler workflow and give your team the clarity it deserves.', 'brightline' ); ?></p>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="btn btn-light btn-lg px-4" href="mailto:hello@example.com"><?php esc_html_e( 'Talk to us', 'brightline' ); ?> <i class="fa-solid fa-envelope ms-2" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<section class="properties-section" id="properties">
    <div class="container">
        <div class="row align-items-end justify-content-between mb-4">
            <div class="col-lg-7">
                <p class="eyebrow mb-3"><?php esc_html_e( 'Featured properties', 'brightline' ); ?></p>
                <h2 class="display-6 fw-bold mb-3"><?php esc_html_e( 'Find a place to call home.', 'brightline' ); ?></h2>
                <p class="section-copy mb-0"><?php esc_html_e( 'Explore a selection of properties available now from trusted local agents.', 'brightline' ); ?></p>
            </div>
            <div class="col-lg-auto mt-3 mt-lg-0">
                <a class="btn btn-outline-primary" href="#get-started"><?php esc_html_e( 'View all properties', 'brightline' ); ?> <i class="fa-solid fa-arrow-right ms-2" aria-hidden="true"></i></a>
            </div>
        </div>
        <div class="row g-4">
            <?php
            $properties = array(
                array(
                    'image'      => 'property-1.jpg',
                    'alt'        => __( 'Bright living room at 17 Carter Villas', 'brightline' ),
                    'price'      => '£1,600 PCM',
                    'status'     => __( 'Let Agreed', 'brightline' ),
                    'status_class' => 'status-red',
                    'address'    => __( '17 Carter Villas, Brockenhurst', 'brightline' ),
                    'details'    => __( '2 Bedrooms | 0 Bathrooms | Other', 'brightline' ),
                    'available'  => __( 'Available: Now', 'brightline' ),
                ),
                array(
                    'image'      => 'property-2.jpg',
                    'alt'        => __( 'Detached house and garden at 56 Dumpton Cross', 'brightline' ),
                    'price'      => '£1,400 PCM',
                    'status'     => __( 'To Let', 'brightline' ),
                    'status_class' => 'status-yellow',
                    'address'    => __( '56 Dumpton Cross, Exeter', 'brightline' ),
                    'details'    => __( '4 Bedrooms | 4 Bathrooms | House', 'brightline' ),
                    'available'  => __( 'Available: November 6, 2022', 'brightline' ),
                ),
                array(
                    'image'      => 'property-3.jpg',
                    'alt'        => __( 'Modern bedroom at 118 Kingsdale Ford', 'brightline' ),
                    'price'      => '£290,000',
                    'status'     => __( 'For Sale', 'brightline' ),
                    'status_class' => 'status-yellow',
                    'address'    => __( '118 Kingsdale Ford, Sherborne', 'brightline' ),
                    'details'    => __( '5 Bedrooms | 1 Bathrooms | House', 'brightline' ),
                    'available'  => __( 'Available: For Sale', 'brightline' ),
                ),
            );
            foreach ( $properties as $property ) :
                ?>
                <div class="col-md-6 col-lg-4">
                    <article class="property-card h-100">
                        <div class="property-image-wrap">
                            <img class="property-image" src="<?php echo esc_url( get_template_directory_uri() . '/assets/' . $property['image'] ); ?>" alt="<?php echo esc_attr( $property['alt'] ); ?>" loading="lazy">
                            <div class="property-overlay">
                                <span class="property-price"><?php echo esc_html( $property['price'] ); ?></span>
                                <span class="property-status <?php echo esc_attr( $property['status_class'] ); ?>"><?php echo esc_html( $property['status'] ); ?></span>
                            </div>
                        </div>
                        <div class="property-body">
                            <h3 class="property-address"><?php echo esc_html( $property['address'] ); ?></h3>
                            <p class="property-details"><?php echo esc_html( $property['details'] ); ?></p>
                            <div class="property-footer">
                                <button class="property-favorite" type="button" aria-label="<?php esc_attr_e( 'Save property', 'brightline' ); ?>"><i class="fa-solid fa-heart" aria-hidden="true"></i></button>
                                <span class="property-availability"><i class="fa-regular fa-calendar me-1" aria-hidden="true"></i><?php echo esc_html( $property['available'] ); ?></span>
                            </div>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section class="reviews-section" id="reviews">
    <div class="container">
        <div class="reviews-heading text-center">
            <div class="google-reviews-mark">
                <i class="fa-brands fa-google" aria-hidden="true"></i>
                <span><?php esc_html_e( 'Google', 'brightline' ); ?></span>
            </div>
            <h2 class="h2 fw-bold mb-1"><?php esc_html_e( 'Reviews', 'brightline' ); ?></h2>
            <div class="reviews-stars" aria-label="<?php esc_attr_e( '5 out of 5 stars', 'brightline' ); ?>">
                <i class="fa-solid fa-star" aria-hidden="true"></i>
                <i class="fa-solid fa-star" aria-hidden="true"></i>
                <i class="fa-solid fa-star" aria-hidden="true"></i>
                <i class="fa-solid fa-star" aria-hidden="true"></i>
                <i class="fa-solid fa-star" aria-hidden="true"></i>
            </div>
        </div>
        <div id="reviewsCarousel" class="carousel slide" data-bs-ride="carousel" aria-label="<?php esc_attr_e( 'Customer reviews', 'brightline' ); ?>">
            <div class="carousel-inner">
                <?php
                $reviews = array(
                    array( 'name' => 'Phil Mitchel', 'copy' => __( 'Brightline made finding our next home straightforward. The team was helpful, responsive, and genuinely cared about getting the details right.', 'brightline' ) ),
                    array( 'name' => 'Karl Pilkington', 'copy' => __( 'A refreshingly simple experience from start to finish. We always knew what was happening and received excellent support throughout.', 'brightline' ) ),
                    array( 'name' => 'Simon Pegg', 'copy' => __( 'Professional, friendly, and incredibly easy to work with. I would happily recommend Brightline to anyone looking for a property.', 'brightline' ) ),
                    array( 'name' => 'Sarah Bennett', 'copy' => __( 'The process was clear and well organised, and every question was answered quickly. We found the perfect place for our family.', 'brightline' ) ),
                    array( 'name' => 'Michael Turner', 'copy' => __( 'From the first viewing to the final paperwork, the service was excellent. A knowledgeable team with a personal touch.', 'brightline' ) ),
                    array( 'name' => 'Emma Wilson', 'copy' => __( 'We felt looked after at every step. Brightline took the stress out of moving and helped us settle into our new home.', 'brightline' ) ),
                );
                foreach ( array_chunk( $reviews, 3 ) as $slide_index => $slide_reviews ) :
                    ?>
                    <div class="carousel-item <?php echo 0 === $slide_index ? 'active' : ''; ?>">
                        <div class="row g-4 px-lg-5">
                            <?php foreach ( $slide_reviews as $review ) : ?>
                                <div class="col-lg-4 col-md-6">
                                    <article class="review-card">
                                        <div class="review-stars" aria-label="<?php esc_attr_e( '5 out of 5 stars', 'brightline' ); ?>">
                                            <i class="fa-solid fa-star" aria-hidden="true"></i>
                                            <i class="fa-solid fa-star" aria-hidden="true"></i>
                                            <i class="fa-solid fa-star" aria-hidden="true"></i>
                                            <i class="fa-solid fa-star" aria-hidden="true"></i>
                                            <i class="fa-solid fa-star" aria-hidden="true"></i>
                                        </div>
                                        <p><?php echo esc_html( $review['copy'] ); ?></p>
                                        <strong><?php echo esc_html( $review['name'] ); ?></strong>
                                    </article>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="carousel-indicators position-static mt-4 mb-0">
                <button type="button" data-bs-target="#reviewsCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="<?php esc_attr_e( 'Reviews 1 to 3', 'brightline' ); ?>"></button>
                <button type="button" data-bs-target="#reviewsCarousel" data-bs-slide-to="1" aria-label="<?php esc_attr_e( 'Reviews 4 to 6', 'brightline' ); ?>"></button>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#reviewsCarousel" data-bs-slide="prev" aria-label="<?php esc_attr_e( 'Previous reviews', 'brightline' ); ?>">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#reviewsCarousel" data-bs-slide="next" aria-label="<?php esc_attr_e( 'Next reviews', 'brightline' ); ?>">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>
    </div>
</section>
<?php get_footer(); ?>
