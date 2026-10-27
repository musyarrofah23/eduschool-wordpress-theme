
<?php get_header(); ?>

<main class="site-main">
    <div class="container content-container">

        <section class="single-content">

            <?php if (have_posts()) : ?>

                <?php while (have_posts()) : the_post(); ?>

                    <article <?php post_class('article-detail'); ?>>

                        <a class="back-link"
                           href="<?php echo esc_url(home_url('/')); ?>">
                            ← Kembali ke Beranda
                        </a>

                        <h1><?php the_title(); ?></h1>

                        <p class="post-meta">
                            Dipublikasikan pada
                            <?php echo esc_html(get_the_date()); ?>
                            oleh
                            <?php the_author(); ?>
                        </p>

                        <?php if (has_post_thumbnail()) : ?>
                            <div class="article-thumbnail">
                                <?php the_post_thumbnail('large'); ?>
                            </div>
                        <?php endif; ?>

                        <div class="article-body">
                            <?php the_content(); ?>
                        </div>

                    </article>

                    <div class="article-navigation">
                        <div>
                            <?php previous_post_link('%link', '← Artikel Sebelumnya'); ?>
                        </div>

                        <div>
                            <?php next_post_link('%link', 'Artikel Berikutnya →'); ?>
                        </div>
                    </div>

                <?php endwhile; ?>

            <?php else : ?>

                <p>Artikel tidak ditemukan.</p>

            <?php endif; ?>

        </section>

        <aside class="sidebar">
            <h2>Tentang Sekolah</h2>

            <p>
                SMP Informatika Roudlotul Hidayah memadukan
                pendidikan umum, informatika, dan nilai-nilai Islami.
            </p>

            <h3>Jelajahi Website</h3>
            <ul>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        Beranda
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/profil-sekolah/')); ?>">
                        Profil Sekolah
                    </a>
                </li>
            </ul>
        </aside>

    </div>
</main>

<?php get_footer(); ?>
