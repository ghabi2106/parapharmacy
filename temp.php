<?php require APPROOT . '/views/inc/header.php'; ?>
<a href="<?php echo URLROOT; ?>/pharmaceuticals" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>
<br>
<h1><?php echo $data['pharmaceutical']->title; ?></h1>
<div class="bg-secondary text-white p-2 mb-3">
  Written by <?php echo $data['user']->name; ?> on <?php echo $data['pharmaceutical']->created_at; ?>
</div>
<p><?php echo $data['pharmaceutical']->body; ?></p>

<?php if (isset($_SESSION['user_id'])) : ?>
  <hr>
  <a href="<?php echo URLROOT; ?>/pharmaceuticals/edit/<?php echo $data['pharmaceutical']->id; ?>" class="btn btn-dark">Edit</a>

  <form class="pull-right" action="<?php echo URLROOT; ?>/pharmaceuticals/delete/<?php echo $data['pharmaceutical']->id; ?>" method="POST">
    <input type="submit" value="Delete" class="btn btn-danger">
  </form>
<?php endif; ?>

<?php require APPROOT . '/views/inc/footer.php'; ?>















<?php require APPROOT . '/views/inc/header.php'; ?>
<a href="<?php echo URLROOT; ?>/categories" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>
<br>
<h1><?php echo $data['category']->title; ?></h1>
<div class="bg-secondary text-white p-2 mb-3">
  Written by <?php echo $data['user']->name; ?> on <?php echo $data['category']->created_at; ?>
</div>
<p><?php echo $data['category']->body; ?></p>

<hr>
<?php if (isset($_SESSION['user_id'])) : ?>
  <a href="<?php echo URLROOT; ?>/categories/edit/<?php echo $data['category']->id; ?>" class="btn btn-dark">Edit</a>
  <a href="<?php echo URLROOT; ?>/pharmaceuticals/add/<?php echo $data['category']->id; ?>" class="btn btn-dark">Add Pharmaceutical</a>
  <form class="pull-right" action="<?php echo URLROOT; ?>/categories/delete/<?php echo $data['category']->id; ?>" method="POST">
    <input type="submit" value="Delete" class="btn btn-danger">
  </form>
<?php endif; ?>
<?php foreach ($data['pharmaceuticals'] as $pharmaceutical) : ?>
  <div class="card card-body mb-3">
    <h4 class="card-title"><?php echo $pharmaceutical->title; ?></h4>
    <p class="card-text"><?php echo $pharmaceutical->body; ?></p>
    <img src="<?php echo URLROOT; ?>/img/uploads/pharmaceuticals/<?php echo $pharmaceutical->img; ?>" alt="img" height="100" width="100">
    <a href="<?php echo URLROOT; ?>/pharmaceuticals/show/<?php echo $pharmaceutical->id; ?>" class="btn btn-dark">More</a>
  </div>
<?php endforeach; ?>

<?php require APPROOT . '/views/inc/footer.php'; ?>

























<?php require APPROOT . '/views/inc/header.php'; ?>
  <?php flash('category_message'); ?>
  <div class="row mb-3">
    <div class="col-md-6">
      <h1>Categories</h1>
    </div>
    <?php if (isset($_SESSION['user_id'])) : ?>
      <div class="col-md-6">
        <a href="<?php echo URLROOT; ?>/categories/add" class="btn btn-primary pull-right">
          <i class="fa fa-pencil"></i> Add Category
        </a>
      </div>
    <?php endif; ?>
  </div>
  <?php foreach ($data['categories'] as $category) : ?>
    <div class="card card-body mb-3">
      <h4 class="card-title"><?php echo $category->title; ?></h4>
      <div class="bg-light p-2 mb-3">
        Written by <?php echo $category->name; ?> on <?php echo $category->categoryCreated; ?>
      </div>
      <p class="card-text"><?php echo $category->body; ?></p>
      <img src="<?php echo URLROOT; ?>/img/uploads/categories/<?php echo $category->img; ?>" alt="img" height="100" width="100">
      <a href="<?php echo URLROOT; ?>/categories/show/<?php echo $category->categoryId; ?>" class="btn btn-dark">More</a>
    </div>
  <?php endforeach; ?>

  <h1>New products</h1>

  <?php foreach ($data['news'] as $new) : ?>
    <div class="card card-body mb-3">
      <h4 class="card-title"><?php echo $new->title; ?></h4>
      <div class="bg-light p-2 mb-3">
        Written by <?php echo $new->title; ?> on <?php echo $new->created_at; ?>
      </div>
      <p class="card-text"><?php echo $new->body; ?></p>
      <img src="<?php echo URLROOT; ?>/img/uploads/pharmaceuticals/<?php echo $new->img; ?>" alt="img" height="100" width="100">
      <a href="<?php echo URLROOT; ?>/categories/show/<?php echo $new->newId; ?>" class="btn btn-dark">More</a>
    </div>
  <?php endforeach; ?>
<?php require APPROOT . '/views/inc/footer.php'; ?>