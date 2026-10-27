
<?php get_header(); ?>

<main class="site-main">

    <section class="hero-section">
        <div class="container hero-content">

            <div class="hero-text">
                <span class="hero-label">SELAMAT DATANG</span>

                <h1>SMP Informatika Roudlotul Hidayah</h1>

                <p>
                    Mencetak generasi cendekia yang berakhlak mulia,
                    cinta tanah air, serta menguasai ilmu pengetahuan
                    dan teknologi.
                </p>

                <a class="button-primary"
                   href="<?php echo esc_url(home_url('/profil-sekolah/')); ?>">
                    Kenali Sekolah Kami
                </a>
            </div>

            <div class="hero-image">
    <div class="school-illustration">
        <img
            src="<?php echo esc_url(get_template_directory_uri() . '/images/gedung-sekolah.png'); ?>"
            alt="Ilustrasi gedung dua lantai SMP Informatika Roudlotul Hidayah"
        >
        <p>Sekolah yang Berkarakter dan Berbasis Informatika</p>
    </div>
</div>

        </div>
    </section>

    <section class="welcome-section container">
        <h2>Mengenal SMP Ifrah</h2>

        <p>
            SMP Informatika Roudlotul Hidayah atau SMP Ifrah
            merupakan sekolah yang memadukan pendidikan umum,
            pembelajaran informatika, dan nilai-nilai Islami.
        </p>
    </section>

    <section class="feature-section">
        <div class="container">
            <h2>Mengapa SMP Ifrah?</h2>

            <div class="feature-grid">

                <div class="feature-card">
                    <span>💻</span>
                    <h3>Pendidikan Informatika</h3>
                    <p>Mengenal teknologi dan mengembangkan keterampilan digital.</p>
                </div>

                <div class="feature-card">
                    <span>🌟</span>
                    <h3>Akhlak Mulia</h3>
                    <p>Membiasakan sikap disiplin dan perilaku yang baik.</p>
                </div>

                <div class="feature-card">
                    <span>🇮🇩</span>
                    <h3>Cinta Tanah Air</h3>
                    <p>Menumbuhkan rasa cinta terhadap bangsa dan negara.</p>
                </div>

            </div>
        </div>
    </section>

    <section class="latest-posts container">
        <h2>Berita dan Kegiatan Sekolah</h2>

        <?php
        $berita_sekolah = new WP_Query(array(
            'post_type'      => 'post',
            'posts_per_page' => 3,
            'post_status'    => 'publish',
        ));
        ?>

        <?php if ($berita_sekolah->have_posts()) : ?>

            <div class="feature-grid">

                <?php while ($berita_sekolah->have_posts()) :
                    $berita_sekolah->the_post(); ?>

                    <article class="post-card">

                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium'); ?>
                            </a>
                        <?php endif; ?>

                        <div class="post-content">
                            <h3>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>

                            <p><?php echo esc_html(get_the_date()); ?></p>

                            <?php the_excerpt(); ?>

                            <a class="read-more"
                               href="<?php the_permalink(); ?>">
                                Baca Selengkapnya →
                            </a>
                        </div>

                    </article>

                <?php endwhile; ?>

            </div>

        <?php else : ?>

            <p>Berita dan kegiatan sekolah akan ditampilkan di sini.</p>

        <?php endif; ?>

        <?php wp_reset_postdata(); ?>
    </section>

</main>

<?php get_footer(); ?>
