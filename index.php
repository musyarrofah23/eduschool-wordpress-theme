
<?php get_header(); ?>

<main class="site-main">
    <div class="container content-container">

        <section class="post-list">
            <h1>Berita dan Kegiatan Sekolah</h1>

            <?php if (have_posts()) : ?>

                <?php while (have_posts()) : the_post(); ?>

                    <article <?php post_class('post-card'); ?>>

                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium'); ?>
                            </a>
                        <?php endif; ?>

                        <div class="post-content">
                            <h2>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>

                            <p class="post-meta">
                                <?php echo esc_html(get_the_date()); ?>
                            </p>

                            <div class="post-excerpt">
                                <?php the_excerpt(); ?>
                            </div>

                            <a class="read-more"
                               href="<?php the_permalink(); ?>">
                                Baca Selengkapnya →
                            </a>
                        </div>

                    </article>

                <?php endwhile; ?>

                <div class="pagination">
                    <?php the_posts_pagination(); ?>
                </div>

            <?php else : ?>

                <p>Belum ada berita atau artikel yang diterbitkan.</p>

            <?php endif; ?>
        </section>

        <aside class="sidebar">
            <h2>Tentang Sekolah</h2>
            <p>
                SMP Informatika Roudlotul Hidayah merupakan sekolah
                yang mengintegrasikan pendidikan umum, informatika,
                dan nilai-nilai Islami.
            </p>
        </aside>

    </div>
</main>

<?php get_footer(); ?>
