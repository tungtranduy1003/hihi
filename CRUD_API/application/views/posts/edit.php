<h2>Ahihi<?php $title ?></h2>
<?php echo validation_errors(); ?>

<?php echo form_open('index.php/posts/update'); ?>
    <div class="form-group">
        <label  for="title">Title</label>
        <input type="text" class="form-control"  placeholder="Title" name="title" value="<?php echo $post['title']; ?>">
    </div>
    <div class="form-group">
        <label for="body">Body</label>
        <input type="text" class="form-control" name="body" placeholder="Password" value="<?php echo $post['body']; ?>">
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
</form>