<?php
/**
 * @var \Kernel\View\View $view
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
            <button type="submit">add</button>
        </div>
    </form>

<?php $view->component('end') ?>