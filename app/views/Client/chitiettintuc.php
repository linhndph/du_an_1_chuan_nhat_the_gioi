<style>
    .blog-article-img img {
        height: 500px;
        width: 1000px;
    }

    .blog-article .blog-article-title h2 {
        max-width: 1440px;
    }
</style>

<div class="blog-details-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php

                if (is_array($tt)) {

                    extract($tt);

                    $hinhtt = "../views/Admin/quanlytintuc/anhtintuc/" . $tt['img_tin_tuc'];

                    echo '<div class="blog-article">
                    <div class="blog-article-img">
                        <img src=' . $hinhtt . ' alt="Images">
                    </div>
                    <div class="blog-article-title">
                        <h2>' . $tieu_de . '</h2>
                        <ul>
                            <li>
                                <i class="bx bx-calendar"></i>
                                ' . $ngay_dang . '
                            </li>
                        </ul>
                    </div>
                    <div class="article-content">
                        <p>
                            ' . $noi_dung . '
                        </p>
                    </div>
                </div>';
                }
                ?>
            </div>
        </div>
    </div>
</div>