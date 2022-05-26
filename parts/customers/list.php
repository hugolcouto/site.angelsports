<section class="customer-list">
    <ul>
        <?php for($i=0;$i<=9;$i++): ?>
        <li>
            <a href="#">
                <figure>
                    <img loading="lazy" data-src='http://placekitten.com/80<?= $i ?>/60<?= $i ?>' alt='' class="lozad"/>
                    <figcaption>
                        <h3>Fulano</h3>
                        <h4>Ciclano</h4>
                    </figcaption>
                </figure>
            </a>
        </li>
        <?php endfor; ?>
    </ul>
</section>