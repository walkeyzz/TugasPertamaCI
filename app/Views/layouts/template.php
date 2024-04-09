<!-- views/layouts/template.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->include('layouts/head'); ?>
</head>
<body>
    <?php $this->include('layouts/navheader'); ?>
    <?php $this->include('layouts/navbar'); ?>

    <!-- Content -->
    <?php $this->renderSection('content'); ?>

    <?php $this->include('layouts/footer'); ?>
    <?php $this->include('layouts/scripts'); ?>
</body>
</html>
