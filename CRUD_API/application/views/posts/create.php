<h2>Ahihi<?php $title ?></h2>
<?php echo validation_errors(); ?>

<?php echo form_open('index.php/posts/create'); ?>
    <div class="form-group">
        <label  for="title">Title</label>
        <input type="text" class="form-control"  placeholder="Title" name="title">
    </div>
    <div class="form-group">
        <label for="body">Body</label>
        <input type="text" class="form-control" name="body" placeholder="Password">
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
</form>