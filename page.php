
<?php get_header(); ?>

<main class="site-main">
    <div class="container content-container">

        <section class="single-content">

            <?php if (have_posts()) : ?>

                <?php while (have_posts()) : the_post(); ?>

                    <article <?php post_class('page-content'); ?>>

                        <h1><?php the_title(); ?></h1>

                        <?php if (has_post_thumbnail()) : ?>
                            <div class="article-thumbnail">
                                <?php the_post_thumbnail('large'); ?>
                            </div>
                        <?php endif; ?>

                        <div class="article-body">
                            <?php the_content(); ?>
                        </div>

                    </article>

                <?php endwhile; ?>

            <?php else : ?>

                <p>Halaman tidak ditemukan.</p>

            <?php endif; ?>

        </section>

        <aside class="sidebar">
            <h2>SMP Ifrah</h2>

            <p>
                Mencetak siswa-siswi cendekia yang berakhlak mulia,
                cinta tanah air dan bangsa, serta berlandaskan
                iman, takwa, dan ilmu pengetahuan teknologi.
            </p>

            <h3>Informasi Sekolah</h3>

            <p>
                Dusun Timur Masjid, Desa Gunung Sereng,
                Kecamatan Kwanyar, Kabupaten Bangkalan,
                Jawa Timur.
            </p>
        </aside>

    </div>
</main>

<?php get_footer(); ?>
