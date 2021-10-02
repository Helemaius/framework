<?php $title="Homepage"; ?>
<?php include __DIR__ . '/partials/header.php' ?>

Home Page Hi my name is <?=$name;?>

<form action ="/" method ="GET">
<input type="text" placeholder="Name" name="name">
<input type="number" placeholder="Age" name="age">
<input type="submit" value="Get request">
</form>

<form action ="/?name=Kaspar&color=green" method ="POST">
<input type="text" placeholder="Name" name="name">
<input type="number" placeholder="Age" name="age">
<input type="submit" value="POST request">
</form>

<form action ="/upload" method ="POST" enctype="multipart/form-data">
<input type="file"  name="image">
<input type="submit" value="Upload">
</form>

<img src="/866-536x354.jpg">
<?php include __DIR__ . '/partials/footer.php' ?>