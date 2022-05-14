<?php require('partials/head.view.php'); ?>
<h1>All Users</h1>
<ul>
    <?php foreach($users as $user): ?>
        <li>
            <?php echo $user->name; ?>
        	<form action="" method="POST">
        	    <input name="_method" type="hidden" value="delete" />
        	    <input name="id" type="hidden" value="<?php echo $user->id; ?>" />
        	    <input name="name" type="hidden" value="<?php echo $user->name; ?>" />
        	    <input type="submit" name="submit" value="delete" />
        	</form>
        </li>
    <?php endforeach;  ?>
</ul>


<form action="/users" method="POST">
    <input type="text" name="name"/>
    <button type="submit">Submit</button>
</form>
<?php require('partials/footer.view.php'); ?>