<?php
/**
 * @var \Kernel\View\View $view
 * @var \Kernel\Session\Session $session
 */
?>


<?php $view->component('start') ?>
    <h1>Add Page</h1>

    <form action="/admin/movies/add" method="post">
        <div>
            <label>
                <input name="name" type="text">
            </label>
        </div>
        <div>
            <?php if ($session->has('name')) { ?>
                <ul>
                    <?php foreach ($session->getFlash('name') as $error) { ?>
                        <li style="color: red"><?= $error?></li>
                    <?php } ?>

                </ul>
            <?php } ?>

        </div>
        <div>
            <button type="submit">add</button>
        </div>
    </form>

<?php $view->component('end') ?>