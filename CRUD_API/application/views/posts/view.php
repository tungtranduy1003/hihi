<h2><?php echo $post['title']; ?></h2>
<small class="post-date">Posted on: <?php echo $post['created_at'] ?></small></br>
<div class="post_body">
    <?php echo $post['body']; ?>
</div>
</br>
<a class ="btn btn-default pull-left" href="<?php echo base_url(); ?>index.php/posts/edit/<?php echo $post['slug']; ?>">Edit</a>
<?php echo form_open('index.php/posts/delete/'.$post['id']); ?>
<input type="submit" value="Delete" class="btn btn-danger">
</form>



<?php echo $post['title']."<br>";
        echo $post['id']."</br>";
        echo $post['body']."<br>";
        echo $post['created_at'];
        ?>